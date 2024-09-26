<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

   
    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

     
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

       
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'amount' => $request->price,
            'image' => $imagePath,
        ]);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    
    public function edit(Product $product)
    {
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

      
        $product->name = $request->name;
        $product->description = $request->description;
        $product->amount = $request->price;

        
        if ($request->hasFile('image')) {
           
            Storage::disk('public')->delete($product->image);
            $imagePath = $request->file('image')->store('products', 'public');
            $product->image = $imagePath;
        }
    
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    
    public function destroy(Product $product)
    {
    
        Storage::disk('public')->delete($product->image);

     
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
