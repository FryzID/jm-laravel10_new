<?php

namespace App\Exports;

use App\Models\Dudi;
use Maatwebsite\Excel\Concerns\FromCollection;

class DudiExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Dudi::all();
    }
}
