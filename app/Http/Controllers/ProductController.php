<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Banner;
class ProductController extends Controller
{
    public function publicHome(Request $request)
    {
        $categories = Category::all();
        $banners = Banner::all();
        $products = Product::latest()->paginate(8); // ✅ 8 sản phẩm / trang

        if ($request->ajax()) {
            return view('partials.product-items', compact('products'))->render();
        }


        return view('home', compact('categories', 'banners', 'products'));
    }
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi',
            'category_id' => 'required|exists:categories,id',
        ]);

        $path = null;
        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('uploads', 'public');
        }

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'media' => $path,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Thêm sản phẩm thành công!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required|max:255',
            'media' => 'nullable|file|mimes:jpg,jpeg,png,mp4,mov,avi',
            'category_id' => 'required|exists:categories,id',
        ]);

        $path = $product->media;
        if ($request->hasFile('media')) {
            $path = $request->file('media')->store('uploads', 'public');
        }

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'media' => $path,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('products.index')->with('success', 'Cập nhật sản phẩm thành công!');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Xóa sản phẩm thành công!');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all(); // để load menu header
        $banners = \App\Models\Banner::all(); // để load banner nếu cần

        return view('products.detail', compact('product', 'categories', 'banners'));
    }

}
