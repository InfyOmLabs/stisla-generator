<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CardSeller
 * @package App\Models
 * @version December 9, 2021, 7:32 pm UTC
 *
 * @property string $name
 * @property string $contact
 * @property string $zone
 */
class CardSeller extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'card_sellers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'contact',
        'zone'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'contact' => 'string',
        'zone' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'contact' => 'required',
        'zone' => 'required'
    ];

    
}
