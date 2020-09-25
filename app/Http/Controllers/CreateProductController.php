<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CreateProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('product.product')->with([
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'details' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image' => 'required',
            'images' => 'required',
            'image1' => 'required',
        ]);

        // file upload
        if($request->hasFile('image')){
            // Get filename with extension 
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename 
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename . '_' .time(). '.' . $extension;
            // upload image
            $path = $request->file('image')->storeAs('public/product_images', $fileNameToStore);
        }

        // if($request->hasFile('images')){
        //     // Get filename with extension 
        //     $filenameWithExt = $request->file('images')->getClientOriginalName();
        //     // Get just filename 
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     // Get just extension
        //     $extension = $request->file('images')->getClientOriginalExtension();
        //     // Filename to store
        //     $fileNameToStore2 = $filename . '_' .time(). '.' . $extension;
        //     // upload image
        //     $path = $request->file('images')->storeAs('public/product_images', $fileNameToStore2);
        // }

        // if($request->hasFile('image1')){
        //     // Get filename with extension 
        //     $filenameWithExt = $request->file('image1')->getClientOriginalName();
        //     // Get just filename 
        //     $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        //     // Get just extension
        //     $extension = $request->file('image1')->getClientOriginalExtension();
        //     // Filename to store
        //     $fileNameToStore3 = $filename . '_' .time(). '.' . $extension;
        //     // upload image
        //     $path = $request->file('image1')->storeAs('public/product_images', $fileNameToStore3);
        // }

        $product = new Product;
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->details = $request->input('details');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->image = $fileNameToStore;
        // $product->images = $fileNameToStore2;
        // $product->image1 = $fileNameToStore3;
        $product->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('product.show')->with([
            'product' => $product
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
