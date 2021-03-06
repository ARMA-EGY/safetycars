@extends('layouts.admin')

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
                  <li class="breadcrumb-item active" aria-current="page">Pages</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End: Header -->



    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">All Pages <span class="badge badge-primary p-2">{{$pages->total()}}</span></h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col" class="sort" data-sort="name">Page Name</th>
                    <th scope="col">Visits</th>
                    <th scope="col">Unique Visitors</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody class="list">

                  @foreach ($pages as $page)
                    <tr>
                      <td>{{ ($pages->currentPage()-1) * $pages->perPage() + $loop->index + 1 }}</td>
                      <th scope="row">
                        <span class="name mb-0 text-sm">{{$page->name}}</span>
                      </th>
                      <td><span >{{ number_format($page->visits->sum('views')) }}</span></td>
                      <td><span >{{ number_format($page->visits->count()) }}</span> </td>
                      <td>
                        <a href="/pages/{{$page->link}}" target="_blank" class="btn btn-sm btn-primary">Edit Page</a>
                        <button data-token="{{$page->token}}" class="btn btn-sm btn-warning get_seo"><i class="fas fa-share-alt"></i> Edit SEO</button>
                      </td>
                    </tr>
                  @endforeach
                 
                  
                </tbody>
              </table>
            </div>

            <!-- Card footer -->
            <div class="card-footer py-4">
              {{$pages->links()}}
              <div class="col-12">
                Showing {{($pages->currentPage()-1)* $pages->perPage()+($pages->total() ? 1:0)}} to {{($pages->currentPage()-1)*$pages->perPage()+count($pages)}}  of  {{$pages->total()}}  Results
              </div>
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

@endsection