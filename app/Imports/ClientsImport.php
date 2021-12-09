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
            "name"=>$row['firstname'],
            "contact"=>$row['mobile'],
            "address"=>$row['address'],
            "package"=>$row['srvname'],
            "username"=>$row['username'],
            "status"=>$row['status'],
        ]);
    }

    
}
