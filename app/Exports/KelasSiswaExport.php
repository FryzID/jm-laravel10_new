<?php

namespace App\Exports;

use App\Models\KelasSiswa;
use Maatwebsite\Excel\Concerns\FromCollection;

class KelasSiswaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return KelasSiswa::all();
    }
}
