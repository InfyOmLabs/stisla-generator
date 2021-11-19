<?php

namespace App\Repositories;

use App\Models\Client;
use App\Repositories\BaseRepository;

/**
 * Class ClientRepository
 * @package App\Repositories
 * @version November 16, 2021, 8:36 pm UTC
*/

class ClientRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'contact',
        'address',
        'package',
        'username',
        'password',
        'Onu_mac',
        'cable',
        'status'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Client::class;
    }
}
