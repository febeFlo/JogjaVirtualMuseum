<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Comment;
use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;
use App\Models\User;
use Illuminate\Http\Request;

class MapController extends Controller
{

    public function show()
    {
        return view('home', [
            'data' => Map::all()
        ]);
    }

    public function getLink($id)
    {
        $data = Map::find($id);
        $comments = Comment::where('map_id', $id)->get();

        return view('video', compact('data', 'comments', 'id'));
    }
}
