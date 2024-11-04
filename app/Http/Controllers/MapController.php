<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Comment;
use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MapController extends Controller
{

    public function show()
    {

        $id = Auth::user()->id;

        if (empty($id)) {
            return redirect('/'); // Mengarahkan ke halaman '/'
        }

        $linkqmethod = User::where('id', $id)
            ->first()
            ->userLinkAdmin
            ->link ?? null;

        return view('home', [
            'data' => Map::all(),
            'qmethod' => $linkqmethod
        ]);
    }

    public function getLink($id)
    {
        $data = Map::find($id);
        $locations = Map::all();

        return view('video', compact('data', 'locations', 'id'));
    }
}
