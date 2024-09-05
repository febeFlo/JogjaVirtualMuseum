<?php

namespace App\Http\Controllers;

use App\Models\Kuesioner1;
use App\Http\Requests\StoreKuesioner1Request;
use App\Http\Requests\UpdateKuesioner1Request;
use App\Models\Map;
use Illuminate\Http\Request;

class Kuesioner1Controller extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'location' => 'required|array|size:5',
            'location.*' => 'required|string',
            'user_id' => 'required|integer|exists:users,id'
        ]);

        $kuesioner1 = new Kuesioner1();
        $kuesioner1->lokasi1 = $request->input('location')[0];
        $kuesioner1->lokasi2 = $request->input('location')[1];
        $kuesioner1->lokasi3 = $request->input('location')[2];
        $kuesioner1->lokasi4 = $request->input('location')[3];
        $kuesioner1->lokasi5 = $request->input('location')[4];
        $kuesioner1->user_id = $request->input('user_id');
        $kuesioner1->save();

        return redirect()->route('home')->with('success', 'Registration successful!');
    }

    public function show()
    {
        $data = Map::all();

        return view('vote', compact('data'));
    }

}
