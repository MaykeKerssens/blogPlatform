<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('dashboard',[
            'posts' => $posts
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $this->middleware(['role:author']);
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->middleware(['role:author']);
        Post::create($request->post());
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->middleware(['role:author']);
    }

    /**
     * Display the specified resource.
     */
    public function post(string $id)
    {
        $post = Post::find($id);
        return view('posts.index',[
            'post' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->middleware(['role:author']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->middleware(['role:author']);
    }
}
