<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBrandRequest;
use App\Http\Requests\UpdateBrandRequest;
use App\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        $this->authorize('viewAny', Brand::class);
        $brands = Brand::latest()->get();

        return view('brand.index', compact('brands'));
    }

    public function create()
    {
        $this->authorize('create', Brand::class);

        return view('brand.create');
    }

    public function store(StoreBrandRequest $request)
    {
        $this->authorize('create', Brand::class);
        $filePath = optional($request->file('image'))->store('images', ['disk' => 'public_storage']);

        Brand::create([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $filePath,
            'status' => $request->status,
        ]);

        return redirect()->route('brands.index')
            ->with('success', __('messages.successfully'));
    }

    public function edit(Brand $brand)
    {
        $this->authorize('update', $brand);

        return view('brand.edit', compact('brand'));
    }

    public function update(UpdateBrandRequest $request, Brand $brand)
    {
        $this->authorize('update', $brand);

        $filePath = $brand->image_url;
        if ($request->file('image')) {
            $filePath = optional($request->file('image'))->store('images', ['disk' => 'public_storage']);
        }

        $brand->update([
            'name' => $request->name,
            'description' => $request->description,
            'image_url' => $filePath,
            'status' => $request->status,
        ]);

        return redirect()->route('brands.index')
            ->with('success', __('messages.successfully'));
    }

    public function destroy(Brand $brand)
    {
        $this->authorize('delete', $brand);

        return $brand->delete();
    }
}
