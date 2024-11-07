<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner34;
use App\Http\Requests\StoreKuesioner34Request;
use App\Http\Requests\UpdateKuesioner34Request;
use App\Models\Map;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class Kuesioner34Controller extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'answer' => 'required|array|size:8',
            'answer.*' => 'required|string',
            'text' => 'required|string',
            'map_id' => 'required|integer|exists:maps,id',
            'user_id' => 'required|integer|exists:users,id'
        ]);

        // Check if the user already has a submission
        $kuesioner34 = Kuesioner34::where('user_id', $request->input('user_id'))->where('map_id', $request->input('map_id'))->first();

        if (is_null($kuesioner34)) {
            $kuesioner34 = new Kuesioner34();
            $kuesioner34->user_id = $request->input('user_id');
            $kuesioner34->map_id = $request->input('map_id');
        }

        // Update the fields
        $kuesioner34->lokasi_menyenangkan = $request->input('answer')[0];
        $kuesioner34->lokasi_ribut = $request->input('answer')[1];
        $kuesioner34->lokasi_bersemangat = $request->input('answer')[2];
        $kuesioner34->lokasi_sepi = $request->input('answer')[3];
        $kuesioner34->lokasi_tenang = $request->input('answer')[4];
        $kuesioner34->lokasi_mengganggu = $request->input('answer')[5];
        $kuesioner34->lokasi_ramai = $request->input('answer')[6];
        $kuesioner34->lokasi_membosankan = $request->input('answer')[7];
        $kuesioner34->narasi = $request->input('text');

        $kuesioner34->save();

        return redirect()->route('home')->with('success', 'Comment updated successfully.');
    }

    public function show($id)
    {
        $userId = Auth::user()->id;
        $data = Map::find($id);

        if (empty($userId) || is_null($data)) {
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

        return view('video', compact('data', 'answers', 'previousNarrative'));
    }

}
