<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function addComment(Request $request)
    {
        $request->validate([
            'comment' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
            'map_id' => 'required|integer|exists:maps,id',
        ]);

        Comment::create([
            'comment' => $request('comment'),
            'user_id' => $request('user_id'),
            'map_id' => $request('map_id'),
        ]);

        return redirect()->route('video')->with('success', 'Comment added successfully.');
    }
}
