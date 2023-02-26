<?php

namespace App\Exports;

use App\Models\Tapel;
use Maatwebsite\Excel\Concerns\FromCollection;

class TapelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tapel::all();
    }
}
