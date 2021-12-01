<?php

namespace App\Repositories;

use App\Models\Investment;
use App\Repositories\BaseRepository;

/**
 * Class InvestmentRepository
 * @package App\Repositories
 * @version December 1, 2021, 9:35 pm UTC
*/

class InvestmentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'type',
        'purpose',
        'amount',
        'invested_by',
        'description'
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
        return Investment::class;
    }
}
