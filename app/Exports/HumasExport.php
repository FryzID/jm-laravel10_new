<?php

namespace App\Exports;

use App\Models\Humas;
use Maatwebsite\Excel\Concerns\FromCollection;

class HumasExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Humas::all();
    }
}
