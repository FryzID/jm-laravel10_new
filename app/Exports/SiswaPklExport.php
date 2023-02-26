<?php

namespace App\Exports;

use App\Models\SiswaPkl;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaPklExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return SiswaPkl::all();
    }
}
