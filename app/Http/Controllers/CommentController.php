<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
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
    public function store(Request $request)
    {
    $postId = $request->input('post_id');
        Comment::create([
            'user_id' => $request->input('user_id'),
            'post_id' => $postId,
            'content' => $request->input('content')
        ]);

        return redirect()->route('post', ['id' => $postId]);
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Add 1 upvote to a comment
     */
    public function upvote(string $id)
    {
        // TODO: Check if user is logged in, otherwise don't allow them to upvote
        // TODO: Make sure user can only upvote once
        $comment = Comment::find($id);
        $comment->up_vote ++;
        $comment->save();

        return back();
    }

    /**
     * Add 1 downvote to a comment
     */
    public function downvote(string $id)
    {
        // TODO: Check if user is logged in, otherwise don't allow them to downvote
        // TODO: Make sure user can only upvote once
        $comment = Comment::find($id);
        $comment->down_vote ++;
        $comment->save();

        return back();
    }
}
