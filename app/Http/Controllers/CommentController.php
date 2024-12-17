<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\User;

class CommentController extends Controller
{
    public function index()
    {
         $comments = Comment::all();
       
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        $blogs = Blog::all();
        $users = User::all();
        return view('comments.create',compact('blogs','users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required',
            'blog_id' => 'nullable|exists:blogs,id',
            'user_id' => 'nullable|exists:users,id',
        ]);

        Comment::create($request->all());

        return redirect()->route('comments.index')->with('success', 'Comment added successfully.');
    }

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $blogs = Blog::all();
        $users = User::all();
        return view('comments.edit', compact('comment','blogs', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'content' => 'required',
            'blog_id' => 'nullable|exists:blogs,id',
            'user_id' => 'nullable|exists:users,id',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update($request->all());

        return redirect()->route('comments.index')->with('success', 'Comment updated successfully.');
    }

    public function destroy($id)
    {
        Comment::destroy($id);
        return response()->json(['success' => 'Comment deleted successfully.']);
    }
}
