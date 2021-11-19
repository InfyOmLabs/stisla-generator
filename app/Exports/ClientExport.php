<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

use Maatwebsite\Excel\Concerns\ShouldAutoSize;
class ClientExport implements FromCollection , WithHeadings,ShouldAutoSize
{
    public function headings():array{
        return [
           
            'Name',
            'Contact',
            'Address',
            'Package' ,
            'Username',
            'Password',
            'Onu_mac',
            'Cable (Meter)' ,
            'Status'
        ];
    }
    public function collection()
    {
        return Client::select('name',
        'contact',
        'address',
        'package' ,
        'username',
        'password',
        'Onu_mac',
        'cable' ,
        'status')->get();
    }
}
