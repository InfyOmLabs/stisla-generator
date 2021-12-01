<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Package
 * @package App\Models
 * @version November 21, 2021, 7:38 am UTC
 *
 * @property string $title
 * @property integer $price
 * @property string $descriptoin
 */
class Package extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'packages';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'price',
        'descriptoin'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'title' => 'string',
        'price' => 'integer',
        'descriptoin' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required',
        'price' => 'required',
        'descriptoin' => 'nullable'
    ];
    
}
