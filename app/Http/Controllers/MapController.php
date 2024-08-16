<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;
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
        return view('video', compact('data', 'id'));
    }
}
