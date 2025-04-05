<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Category::class);
        $categories = Category::with('products.orders')->latest()->get();

        return view('category.index', compact('categories'));
    }

    public function create()
    {
        $this->authorize('create', Category::class);

        return view('category.create');
    }

    public function store(StoreCategoryRequest $request)
    {
        $this->authorize('create', Category::class);
        $filePath = optional($request->file('image'))->store('images', ['disk' => 'public_storage']);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $filePath,
            'status' => $request->status,
        ]);

        return redirect()->route('categories.index')
            ->with('success', __('messages.successfully'));
    }

    public function edit(Category $category)
    {
        $this->authorize('update', $category);

        return view('category.edit', compact('category'));
    }

    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $this->authorize('update', $category);
        $filePath = $category->image_url;
        if ($request->file('image')) {
            $filePath = optional($request->file('image'))->store('images', ['disk' => 'public_storage']);
        }

        $category->update([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $filePath,
            'status' => $request->status,
        ]);

        return redirect()->route('categories.index')
            ->with('success', __('messages.successfully'));
    }

    public function destroy(Category $category)
    {
        $this->authorize('delete', $category);

        return $category->delete();
    }
}
