<?php

namespace App\Exports;

use App\Models\Kuesioner1;
use App\Models\Kuesioner34;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Votes1Export implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        $kuesionerData = Kuesioner1::with(['user:id,name', 'lokasi1Map:id,name', 'lokasi2Map:id,name', 'lokasi3Map:id,name', 'lokasi4Map:id,name', 'lokasi5Map:id,name'])->get([
            'id',
            'user_id',
            'lokasi1',
            'lokasi2',
            'lokasi3',
            'lokasi4',
            'lokasi5',
            'titik_tambahan',
        ]);

        $formattedData = $kuesionerData->map(function ($item) {
            return [
                'id' => $item->id,
                'user_name' => $item->user->name,
                'lokasi1' => $item->lokasi1Map->name,
                'lokasi2' => $item->lokasi2Map->name,
                'lokasi3' => $item->lokasi3Map->name,
                'lokasi4' => $item->lokasi4Map->name,
                'lokasi5' => $item->lokasi5Map->name,
                'titik_tambahan' => $item->titik_tambahan,
            ];
        });

        return $formattedData;
    }

    public function headings(): array
    {
        return [
            'id',
            'user',
            'lokasi1',
            'lokasi2',
            'lokasi3',
            'lokasi4',
            'lokasi5',
            'titik_tambahan',
        ];
    }
}
