<?php

namespace App\Exports;

use App\Models\Kuesioner1;
use Maatwebsite\Excel\Concerns\FromCollection;

class VotesExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kuesioner1::all();
    }
}
