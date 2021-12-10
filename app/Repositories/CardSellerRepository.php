<?php

namespace App\Repositories;

use App\Models\CardSeller;
use App\Repositories\BaseRepository;

/**
 * Class CardSellerRepository
 * @package App\Repositories
 * @version December 9, 2021, 7:32 pm UTC
*/

class CardSellerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'contact',
        'zone'
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
        return CardSeller::class;
    }
}
