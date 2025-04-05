<?php

namespace App\Http\Controllers;

use App\Enums\CategoryType;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    // Hiển thị danh sách bài viết
    public function index()
    {
        $posts = Post::latest()->get();

        return view('posts.index', compact('posts'));
    }

    // Hiển thị form tạo bài viết
    public function create()
    {
        $categories = Category::where('type', CategoryType::POST)->latest()->get();

        return view('posts.create', compact('categories'));
    }

    // Lưu bài viết mới
    public function store(StorePostRequest $request)
    {
        try {
            DB::beginTransaction();
            $filePath = null;

            if ($request->hasFile('thumbnail')) {
                $file = $request->file('thumbnail');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('upload'), $filename);
                $filePath = 'upload/' . $filename;
            }
            
            $post = Post::create([
                'title' => $request->title,
                'slug' => $request->slug,
                'order' => $request->order,
                'excerpt' => $request->excerpt,
                'thumbnail' => $filePath,
                'content' => $request->input('content'),
                'user_id' => Auth::id(),
                'is_published' => $request->input('is_published', false),
                'is_featured' => $request->input('is_featured', false),
            ]);

            $post->categories()->attach($request->category_ids);
            DB::commit();

            return redirect()->route('posts.index')->with('success', 'Bài viết đã được tạo thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Lỗi khi tạo bài viết: ' . $e->getMessage());
        }
    }

    // Hiển thị chi tiết bài viết
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Hiển thị form chỉnh sửa
    public function edit(Post $post)
    {
        $categories = Category::where('type', CategoryType::POST)->latest()->get();

        return view('posts.edit', compact('post', 'categories'));
    }

    // Cập nhật bài viết
    public function update(UpdatePostRequest $request, Post $post)
    {
        try {
            DB::beginTransaction();

            $filePath = $post->thumbnail;

if ($request->hasFile('thumbnail')) {
    $file = $request->file('thumbnail');
    $filename = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('upload'), $filename);
    $filePath = 'upload/' . $filename;
}


            $post->update([
                'title' => $request->title,
                'slug' => $request->slug,
                'order' => $request->order,
                'excerpt' => $request->excerpt,
                'thumbnail' => $filePath,
                'content' => $request->input('content'),
                'user_id' => Auth::id(),
                'is_published' => $request->input('is_published', false),
                'is_featured' => $request->input('is_featured', false),
            ]);

            $post->categories()->sync($request->category_ids);
            DB::commit();

            return redirect()->route('posts.index')->with('success', 'Bài viết đã được cập nhật thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', 'Lỗi khi tạo bài viết: ' . $e->getMessage());
        }
    }

    // Xóa bài viết
    public function destroy(Post $post)
    {
        return $post->delete();
    }

    public function services()
{
    $services = Post::whereHas('categories', function ($query) {
        $query->where('category_id', 10);
    })
    ->where('is_published', true)
    ->orderBy('order')
    ->get();

    return view('guest.service2', compact('services'));
}

public function serviceDetail($slug)
{
    $post = Post::isPublished()
        ->where('slug', $slug)
        ->firstOrFail();

    $otherServices = Post::isPublished()
        ->whereHas('categories', fn($q) => $q->where('category_id', 10))
        ->where('id', '!=', $post->id)
        ->orderBy('order')
        ->limit(4)
        ->get();

    return view('guest.service_detail', compact('post', 'otherServices'));
}


}
