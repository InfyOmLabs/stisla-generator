<?php

namespace App\Repositories;

use App\Models\Package;
use App\Repositories\BaseRepository;

/**
 * Class PackageRepository
 * @package App\Repositories
 * @version November 21, 2021, 7:38 am UTC
*/

class PackageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'price',
        'descriptoin'
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
        return Package::class;
    }
}
