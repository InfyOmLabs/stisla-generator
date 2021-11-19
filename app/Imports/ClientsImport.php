<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;
use Maatwebsite\Excel\Concerns\Importable;
class ClientsImport implements ToModel, WithHeadingRow, WithProgressBar
{
    use Importable;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Client([
            "name"=>$row['name'],
            "contact"=>$row['contact'],
            "address"=>$row['address'],
            "package"=>$row['package'],
            "username"=>$row['username'],
        ]);
    }

    
}
