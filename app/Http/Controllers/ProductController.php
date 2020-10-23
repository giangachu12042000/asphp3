<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Models\Comment;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $products = Product::all();
        return view('products.list' ,['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', ['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();
        if($request->hasFile('image_url')){
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $path = $request->file('image_url')->storeAs('images/products', $fileName);
            $product->image_url = $path;
        }
        $comment = new Comment();
        $comment->content = $request->content;
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->sale_percent = $request->sale_percent;
        $product->stocks = $request->stocks;
        $product->is_active = $request->is_active;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $comment = Comment::where('product_id', $product->id)->get();
        return view('products.detail',['product'=>$product],['comment'=>$comment]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        // dd($category);
        return view('products.edit',['product'=>$product, 'categories'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if($request->hasFile('image_url')){
            $originalFileName = $request->image_url->getClientOriginalName();
            $fileName = uniqid() . '_' . str_replace(' ', '_', $originalFileName);
            $path = $request->file('image_url')->storeAs('images/products', $fileName);
            $product->image_url = $path;
        }
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->desc = $request->desc;
        $product->price = $request->price;
        $product->sale_percent = $request->sale_percent;
        $product->stocks = $request->stocks;
        $product->is_active = $request->is_active;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        // dd($product);
        if($product) {
            $product->delete(); // tra ve ket qua true or false
        }
        return response()->json(['code' => '1']);
    }
}
