<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Mail\WelcomeUser;
use App\Models\Blog;
use App\Models\SavedBlog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('blog.index', compact('blogs'));
    }

    /**
     * Show the form for saving a new resource.
     */
    public function save(Blog $blog)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            SavedBlog::create(['user_id' => $user->id, 'blog_id' => $blog->id,]);
            return redirect()->back()->with('success', 'Blog saved successfully!');
        }else{
            return redirect()->back()->with('error', 'Please login to save the blog!');
        }
    }
    public function unsave(Blog $blog)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            SavedBlog::where('user_id', $user->id)->where('blog_id', $blog->id)->delete();
            return redirect()->back()->with('success', 'Blog unsaved successfully!');
        }else{
            return redirect()->back()->with('error', 'Please login to unsave the blog!');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return view('blog.detail', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
    public function account()
    {
        return view('account.index');
    }
    public function savedBlogs()
    {
        $user = Auth::user();
        $savedBlogs = $user->savedBlogs()->with('blog')->get();
        return view('account.saved_blogs', compact('savedBlogs'));
    }

    public function sendEmail()
    {
        Mail::to('abdullah.term369@gmail.com')->send(new WelcomeUser());
        return 'Email sent successfully!';
    }
}
