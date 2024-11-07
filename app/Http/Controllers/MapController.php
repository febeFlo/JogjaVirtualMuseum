<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Comment;
use App\Http\Requests\StoreMapRequest;
use App\Http\Requests\UpdateMapRequest;
use App\Models\User;
use App\Models\Kuesioner34;
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
        $userId = Auth::user()->id;
        $mapData = Map::find($id);

        if (empty($userId) || is_null($mapData)) {
            return redirect('/');
        }

        $getSelected = Kuesioner34::where('user_id', $userId)->where('map_id', $id)->first();

        $answers = [
            'lokasi_menyenangkan' => $getSelected->lokasi_menyenangkan ?? '',
            'lokasi_ribut' => $getSelected->lokasi_ribut ?? '',
            'lokasi_bersemangat' => $getSelected->lokasi_bersemangat ?? '',
            'lokasi_sepi' => $getSelected->lokasi_sepi ?? '',
            'lokasi_tenang' => $getSelected->lokasi_tenang ?? '',
            'lokasi_mengganggu' => $getSelected->lokasi_mengganggu ?? '',
            'lokasi_ramai' => $getSelected->lokasi_ramai ?? '',
            'lokasi_membosankan' => $getSelected->lokasi_membosankan ?? ''
        ];
        $previousNarrative = $getSelected->narasi ?? '';

        return view('video', compact('data', 'answers', 'previousNarrative', 'locations', 'id'));
    }
}
