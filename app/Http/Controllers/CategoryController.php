<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Hiển thị danh sách thể loại
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Form thêm mới
    public function create()
    {
        return view('categories.create');
    }

    // Xử lý lưu thể loại mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Thêm thể loại thành công!');
    }

    // Form sửa
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // Xử lý update
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|max:255',
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index')->with('success', 'Cập nhật thể loại thành công!');
    }

    // Xóa thể loại
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Xóa thể loại thành công!');
    }
}
