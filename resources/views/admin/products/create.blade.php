@extends('layouts.admin')

@section('style')

<style>
  .image-card
  {
      border-radius: 10px;
      border: 1px solid rgb(41 52 144 / 50%);
      box-shadow: 0px 3px 16px rgba(0, 0, 0, 0.05);
  }
</style>

@endsection

@section('content')


    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="{{route('home')}}">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="{{route('products.index')}}">Prodcuts</a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ isset($product) ? 'Edit Product' : 'Create Product' }}</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: Header -->


    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
            <div class="card card-defualt">
                <div class="card-header">{{ isset($product) ? 'Edit Product' : 'Add New Product' }} </div>
        
                <div class="card-body">
                    <form action="{{ isset($product) ? route('products.update', $product->id) : route('products.store')  }}" method="post" enctype="multipart/form-data">
                        @csrf

                        @if (isset($product))
                           @method('PUT')
                        @endif
                        
                        <div class="row">
                        <!--=================  Name  =================-->
        
                            <div class="form-group col-md-6 mb-2">
                                <label class="font-weight-bold text-uppercase">Name</label>
                                <input type="text" name="name" class="@error('name') is-invalid @enderror form-control" placeholder="Product Name" value="{{ isset($product) ? $product->name : old('name') }}" required>
                            
                                @error('name')
                                    <div>
                                        <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
            
                            </div>
        
                            <!--=================  Category  =================-->
            
                            <div class="form-group col-md-6 mb-2">
                                <label class="font-weight-bold text-uppercase">Category</label>
                                    <select class="form-control" name="category_id" required>
                                        @foreach ($categories as $category)
                                        <option value="{{$category->id}}" @isset($product) @if($product->category_id == $category->id) selected @endif @endisset>{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                
                                @error('category_id')
                                    <div>
                                         <span class="text-danger">{{ $message }}</span>
                                    </div>
                                @enderror
            
                            </div>
                            
                        </div>
                        <hr class="my-3">

                        <!--=================  Price  =================-->
        
                          <div class="form-group">
                              <label class="font-weight-bold text-uppercase">Price</label>
                              <input type="text" name="price" class="@error('price') is-invalid @enderror form-control" placeholder="Product Price" value="{{ isset($product) ? $product->price : old('price') }}" required>
                          
                              @error('price')
                                  <div>
                                      <span class="text-danger">{{ $message }}</span>
                                  </div>
                              @enderror
          
                          </div>
                          <hr class="my-3">
        
                        <!--=================  Description  =================-->
        
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Description</label>
                        <textarea type="text" name="description" class="@error('description') is-invalid @enderror form-control" rows="2" placeholder="Add New Description" required>{{ isset($product) ? $product->description : old('description') }}</textarea>
                        
                            @error('description')
                                <div>
                                     <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
        
                        </div>
                        <hr class="my-3">
        
                        <!--=================  IMAGES  =================-->
        
                        <div class="form-group">
                            <label class="font-weight-bold text-uppercase">Images</label>
                            <div class="text-right">
                                <a class="btn btn-sm btn-primary text-white add_image"><i class="fa fa-plus"></i> Image </a>
                            </div>

                            <div id="append_images">

                                @if (isset($product_images))
                                <div class="row">
                                    @foreach ($product_images as $product_image)
                                        <div class="parent col-md-3 text-center m-2">
                                            <div class="row image-card">

                                                <div class="form-group col-md-12">
                                                    <img src="{{ asset('storage/'.$product_image->image) }}" class="img-fluid" width="100%" alt="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label class="text-sm">Alt</label>
                                                    <input type="text" class="form-control form-control-sm" name="alt2[]" value="{{$product_image->alt}}">
                                                </div>
                                                <div class="form-group col-md-6 text-center">
                                                    <label class="text-sm">Primary</label>
                                                    <div class="form-check">
                                                        <input class="form-check-input choose_selected" type="radio" name="select" value="1" @if($product_image->selected == 1) checked @endif required>
                                                        <input type="hidden" class="selected" name="selected2[]" @if($product_image->selected == 1) value="1" @else value="0" @endif>
                                                        <input type="hidden" name="product_image_id[]" value="{{$product_image->id}}">
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6 m-auto text-center">
                                                    <a class="btn btn-sm btn-danger remove_product_image text-white" data-id="{{$product_image->id}}"><i class="fa fa-trash "></i> Remove </a>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                @else 

                                    <div class="form-row">
                                        <div class="form-group col-md-4 mb-1">
                                            <label class="text-sm"> Image</label>
                                            <input type="file" accept="image/*" class="form-control form-control-sm" name="image[]" required>
                                        </div>
                                        <div class="form-group col-md-4 mb-1">
                                            <label class="text-sm">Alt</label>
                                            <input type="text" class="form-control form-control-sm" name="alt[]" >
                                        </div>
                                        <div class="form-group col-md-2 mb-1 text-center">
                                            <label class="text-sm">Primary</label>
                                            <div class="form-check">
                                                <input class="form-check-input choose_selected" type="radio" name="select" value="1" required>
                                                <input type="hidden" class="selected" name="selected[]" value="0">
                                            </div>
                                        </div>
                                    </div>

                                @endif

                            </div>
                            
        
                        </div>
                        <hr class="my-3">
        
                        <!--=================  Page URL  =================-->
        
                        <div class="form-group">
                            <label class="font-weight-bold">Page URL (End Point)</label>
                            <input type="text" name="url" class="@error('url') is-invalid @enderror form-control" rows="2" placeholder="Add URL" value="{{ isset($product) ? $product->url : old('url') }}">
                        
                            @error('url')
                                <div>
                                     <span class="text-danger">{{ $message }}</span>
                                </div>
                            @enderror
        
                        </div>
        
                        <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ isset($product) ? 'Save' : 'Add' }}</button>
                        </div>
        
                    </form>
                </div>
        
            </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
      </footer>
    </div>

@endsection


@section('script')
    <script src="https://cdn.tiny.cloud/1/mq6umcdg6y938v1c32lokocdpgrgp5g2yl794h4y1braa6j6/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
            tinymce.init({
                    selector:'textarea.content',
                    plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons',
                    toolbar: 'undo redo | bold italic underline strikethrough | fontselect formatselect | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
                });

            $('.add_image').click(function(){

                $("#append_images").append('<div class="form-row parent"><div class="form-group col-md-4 mb-1"><label class="text-sm"> Image</label class="text-sm"><input type="file" accept="image/*" class="form-control form-control-sm" name="image[]" required></div><div class="form-group col-md-4 mb-1"><label class="text-sm">Alt</label><input type="text" class="form-control form-control-sm" name="alt[]" ></div><div class="form-group col-md-2 mb-1 text-center"><label class="text-sm">Primary</label><div class="form-check"> <input class="form-check-input choose_selected" type="radio" name="select" value="1" ><input type="hidden" class="selected" name="selected[]" value="0"></div></div><div class="form-group col-md-2 m-auto"><a class="btn btn-sm btn-danger remove text-white"><i class="fa fa-trash "></i> Remove </a></div></div>');

            });

            $(document).on("click",".choose_selected", function()
            {
                $('.selected').val(0);
                $(this).next('.selected').val(1);
            });
            
            $(document).on("click",".remove", function()
            {
                $(this).parents('.parent').remove();
            });
      
    </script>
@endsection
