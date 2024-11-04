<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Http\Requests\StoreCommentRequest;
use App\Http\Requests\UpdateCommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'answer1' => 'required|string',
            'map_id' => 'required|integer|exists:maps,id',
        ]);

        Comment::create([
            'answer1' => $request('answer1'),
            'map_id' => $request('map_id'),
        ]);

        return redirect()->route('video')->with('success', 'Comment added successfully.');
    }
}
