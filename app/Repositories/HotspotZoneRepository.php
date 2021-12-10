<?php

namespace App\Repositories;

use App\Models\HotspotZone;
use App\Repositories\BaseRepository;

/**
 * Class HotspotZoneRepository
 * @package App\Repositories
 * @version December 9, 2021, 7:10 pm UTC
*/

class HotspotZoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'zone_id',
        'zone_title',
        'device_brand',
        'device_mac',
        'device_serial',
        'onu_mac',
        'onu_brand',
        'card_seller',
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
        return HotspotZone::class;
    }
}
