<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner34;
use App\Http\Requests\StoreKuesioner34Request;
use App\Http\Requests\UpdateKuesioner34Request;
use Illuminate\Http\Request;
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
        ]);

        $kuesioner34 = new Kuesioner34();
        $kuesioner34->lokasi_menyenangkan = $request->input('answer')[0];
        $kuesioner34->lokasi_ribut = $request->input('answer')[1];
        $kuesioner34->lokasi_bersemangat = $request->input('answer')[2];
        $kuesioner34->lokasi_sepi = $request->input('answer')[3];
        $kuesioner34->lokasi_tenang = $request->input('answer')[4];
        $kuesioner34->lokasi_mengganggu = $request->input('answer')[5];
        $kuesioner34->lokasi_ramai = $request->input('answer')[6];
        $kuesioner34->lokasi_membosankan = $request->input('answer')[7];
        $kuesioner34->narasi = $request->input('text');
        $kuesioner34->map_id = $request->input('map_id');
        $kuesioner34->save();

        return redirect()->route('home')->with('success', 'Comment added successfully.');
    }
}
