<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = DB::table('products')
        ->orderBy("id","desc")
        ->get();
        return view("product.index",compact("products"));
    }
    
    public function index2(){
        $products = DB::table('productts')
        ->orderBy("id","desc")
        ->get();
        return view("product.index2",compact("productts"));
    }

    public function list(){
        return view("product.list");
    }
    
    public function create(){
        return view("product.create");
    }
    public function store(Request $request){
    if(!$request->filled("image")){
        return redirect()->back()->with("error", "image nya kosong bwang");
    }
    if(!$request->filled("name")){
        return redirect()->back()->with("error", "name nya kosong bwang");
    }
    if(!$request->filled("condition")){
        return redirect()->back()->with("error", "condition nya kosong bwang");
    }
    if(!$request->filled("stock")){
        return redirect()->back()->with("error", "stock nya kosong bwang");
    }
    if(!$request->filled("price")){
        return redirect()->back()->with("error", "price nya kosong bwang");
    }
    if(!$request->filled("weight")){
        return redirect()->back()->with("error", "weight nya kosong bwang");
    }
    if(!$request->filled("description")){
        return redirect()->back()->with("error", "description nya kosong bwang");
    }

    DB::table("products")->insert([
        "namak" => $request-> name,
        "price" => $request-> price,
        "stock" => $request-> stock,
        "weight" => $request-> weight,
        "image" => $request-> image,
        "condition" => $request-> condition,
        "description" => $request-> description,
        "created_at" => now(),
        "updated_at" => now(),
    ]);
    return redirect()->route("products.index")->with("success","Produk sukses ditambahkan");
    
    DB::table("productts")->insert([
        "namak" => $request-> name,
        "price" => $request-> price,
        "stock" => $request-> stock,
        "weight" => $request-> weight,
        "image" => $request-> image,
        "condition" => $request-> condition,
        "description" => $request-> description,
        "created_at" => now(),
        "updated_at" => now(),
    ]);
    return redirect()->route("products.index2")->with("success","Produk sukses ditambahkan");
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('products'));
    }
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'image' => 'required|string',
            'name' => 'required|string',
            'condition' => 'required|in:baru,bekas',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'weight' => 'required|string',
            'description' => 'required|string',
        ]);

        $product->update([
            'image' => $request->image,
            'name' => $request->name,
            'condition' => $request->condition,
            'stock' => $request->stock,
            'price' => $request->price,
            'weight' => $request->weight,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.index')->with('success', 'Product updated successfully');
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.index')->with('success', 'Product deleted successfully');
    }
    
}
