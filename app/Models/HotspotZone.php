<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class HotspotZone
 * @package App\Models
 * @version December 9, 2021, 7:10 pm UTC
 *
 * @property string $zone_id
 * @property string $zone_title
 * @property string $device_brand
 * @property string $device_mac
 * @property string $device_serial
 * @property string $onu_mac
 * @property string $onu_brand
 * @property string $card_seller
 * @property string $status
 */
class HotspotZone extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'hotspot_zones';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'zone_id' => 'string',
        'zone_title' => 'string',
        'device_brand' => 'string',
        'device_mac' => 'string',
        'device_serial' => 'string',
        'onu_mac' => 'string',
        'onu_brand' => 'string',
        'card_seller' => 'string',
        'status' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'zone_id' => 'required',
        'zone_title' => 'required',
        'device_brand' => 'nullable',
        'device_mac' => 'nullable',
        'device_serial' => 'nullable',
        'onu_mac' => 'nullable',
        'onu_brand' => 'nullable',
        'card_seller' => 'nullable',
        'status' => 'required'
    ];

    
}
