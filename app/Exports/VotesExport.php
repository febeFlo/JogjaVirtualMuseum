<?php

namespace App\Exports;

use App\Models\Kuesioner34;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class VotesExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        $kuesionerData = Kuesioner34::with(['user:id,name', 'map:id,name'])->get([
            'id',
            'user_id',
            'map_id',
            'lokasi_menyenangkan',
            'lokasi_ribut',
            'lokasi_bersemangat',
            'lokasi_sepi',
            'lokasi_tenang',
            'lokasi_mengganggu',
            'lokasi_ramai',
            'lokasi_membosankan',
            'narasi',
        ]);

        $formattedData = $kuesionerData->map(function ($item) {
            return [
                'id' => $item->id,
                'user_name' => $item->user->name,
                'map_name' => $item->map->name,
                'lokasi_menyenangkan' => $item->lokasi_menyenangkan,
                'lokasi_ribut' => $item->lokasi_ribut,
                'lokasi_bersemangat' => $item->lokasi_bersemangat,
                'lokasi_sepi' => $item->lokasi_sepi,
                'lokasi_tenang' => $item->lokasi_tenang,
                'lokasi_mengganggu' => $item->lokasi_mengganggu,
                'lokasi_ramai' => $item->lokasi_ramai,
                'lokasi_membosankan' => $item->lokasi_membosankan,
                'narasi' => $item->narasi,
            ];
        });

        return $formattedData;
    }

    public function headings(): array
    {
        return [
            'id',
            'user',
            'map',
            'lokasi_menyenangkan',
            'lokasi_ribut',
            'lokasi_bersemangat',
            'lokasi_sepi',
            'lokasi_tenang',
            'lokasi_mengganggu',
            'lokasi_ramai',
            'lokasi_membosankan',
            'narasi',
        ];
    }
}
