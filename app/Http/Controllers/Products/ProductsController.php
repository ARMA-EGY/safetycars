<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\ProductImages;
use App\ProductCategory;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		
		$products          = Product::orderBy('id','desc')->get();
		
        return view('admin.products.index', [
            'products' => $products,
            'products_count' => Product::all()->count(),
        ]);

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'categories'    => ProductCategory::all() ,
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        if($request->url == '')
        {
            $url1 = $request->name;
        }
        else
        {
            $url1 = $request->url;
        }

        $url =  preg_replace(array('/[-?]/', '/\s+/'), '_', $url1);

        $product = Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'token' => uniqid(),
            'url' => $url
        ]);

        $product_id = $product->id;

        for ($i = 0; $i < count($request->image); $i++) 
        {
            if(isset($request->selected[$i]))
            {
                $image = $request->image[$i]->store('images/product', 'public');

                $product_images = ProductImages::create([
                    'image' => $image,
                    'alt' => $request->alt[$i],
                    'selected' => $request->selected[$i],
                    'product_id' => $product_id
                ]);

                $product->image = $image;
                $product->save();
            }
            else
            {
                $product_images = ProductImages::create([
                    'image' => $request->image[$i]->store('images/product', 'public'),
                    'alt' => $request->alt[$i],
                    'selected' => $request->selected[$i],
                    'product_id' => $product_id
                ]);
            }
        }

        session()->flash('success', 'Product created successfully');
        
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        $product_images     = ProductImages::where('product_id', $product->id)->get();

		return view('admin.products.create', [
            'product'      => $product,
            'categories' => ProductCategory::all(),
            'product_images'        => $product_images
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {

        $data = $request->only(['name', 'description', 'price', 'category_id']);

        if($request->url == '')
        {
            $url1 = $request->name;
        }
        else
        {
            $url1 = $request->url;
        }

        $url =  preg_replace(array('/[-?]/', '/\s+/'), '_', $url1);

        $data['url'] = $url;
        
        if(isset($request->alt2))
        {
            for ($i = 0; $i < count($request->alt2); $i++) 
            {
                $product_image     = ProductImages::where('id', $request->product_image_id[$i])->first();
                
                $product_image->alt         = $request->alt2[$i];
                $product_image->selected    = $request->selected2[$i];

                $product_image->save();

                if($request->selected2[$i] == 1)
                {
                    $data['image'] = $product_image->image;
                }
            }
        }
        
        if($request->hasfile('image'))
        {
            for ($i = 0; $i < count($request->image); $i++) 
            {
                if(isset($request->selected[$i]))
                {
                    $image = $request->image[$i]->store('images/product', 'public');

                    $product_images = ProductImages::create([
                        'image' => $image,
                        'alt' => $request->alt[$i],
                        'selected' => $request->selected[$i],
                        'product_id' => $product->id
                    ]);

                    $data['image'] = $image;
                }
                else
                {
                    $product_images = ProductImages::create([
                        'image' => $request->image[$i]->store('images/product', 'public'),
                        'alt' => $request->alt[$i],
                        'selected' => $request->selected[$i],
                        'product_id' => $product->id
                    ]);
                }
            }
        }

        $product->update($data);

        session()->flash('success', 'Product updated successfully');
        
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    //======== Remove Product ======== 
    public function removeproduct(Request $request)
    {
        $product            = Product::where('id', $request->id)->first();
        $product_images     = ProductImages::where('product_id', $request->id);
        $product_images2     = ProductImages::where('product_id', $request->id)->get();

        foreach ($product_images2 as $image) 
        {
            Storage::disk('public')->delete($image->image);
        }

        $product->delete();
        $product_images->delete();
    }
}
