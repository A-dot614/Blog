<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSavedBlogRequest;
use App\Http\Requests\UpdateSavedBlogRequest;
use App\Models\SavedBlog;

class SavedBlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSavedBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SavedBlog $savedBlog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SavedBlog $savedBlog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSavedBlogRequest $request, SavedBlog $savedBlog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SavedBlog $savedBlog)
    {
        //
    }
}
