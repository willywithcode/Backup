<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::isPublished()
            ->isFeatured()
            ->orderBy('order', 'asc')
            ->latest('id')
            ->limit(6)
            ->get();

        return view('guest.business_services', compact('posts'));
    }

    public function about()
    {
        return view('guest.about');
    }

    public function services()
    {
        return view('guest.services');
    }

    public function contact()
    {
        return view('guest.contact');
    }

    public function news()
    {
        $posts = Post::isPublished()
            ->with('categories')
            ->orderBy('order', 'asc')
            ->latest('id')
            ->paginate(15);

        return view('guest.news', compact('posts'));
    }

    public function newsDetail($slug)
    {
        $post = Post::isPublished()
            ->where('slug', $slug)
            ->first();

        if (!$post) {
            abort(404);
        }

        $relatedPosts = Post::isPublished()
            ->orderBy('order', 'asc')
            ->latest('id')
            ->limit(4)
            ->get();

        return view('guest.news_detail', compact('post', 'relatedPosts'));
    }
    public function blog()
{
    $posts = Post::isPublished()
        ->whereHas('categories', function ($query) {
            $query->where('category_id', 1);
        })
        ->with('categories')
        ->orderBy('order', 'asc')
        ->latest('id')
        ->paginate(5);

    return view('guest.blog', compact('posts'));
}


public function blogDetail($slug)
{
    $post = Post::isPublished()
        ->where('slug', $slug)
        ->whereHas('categories', function ($query) {
            $query->where('category_id', 1);
        })
        ->first();

    if (!$post) {
        abort(404);
    }

    $relatedPosts = Post::isPublished()
        ->where('id', '!=', $post->id)
        ->whereHas('categories', function ($query) {
            $query->where('category_id', 1);
        })
        ->orderBy('order', 'asc')
        ->latest('id')
        ->limit(4)
        ->get();

    return view('guest.blog_detail', compact('post', 'relatedPosts'));
}
public function homePage()
{
    $services = Post::whereHas('categories', function ($query) {
        $query->where('category_id', 10);
    })
    ->where('is_published', true)
    ->orderBy('order')
    ->get();

    return view('guest.business_services', compact('services'));
}

}
