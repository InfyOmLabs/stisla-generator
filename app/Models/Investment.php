<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Investment
 * @package App\Models
 * @version December 1, 2021, 9:35 pm UTC
 *
 * @property string $type
 * @property string $purpose
 * @property integer $amount
 * @property string $invested_by
 * @property string $description
 */
class Investment extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'investments';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'type',
        'purpose',
        'amount',
        'invested_by',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type' => 'string',
        'purpose' => 'string',
        'amount' => 'integer',
        'invested_by' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'type' => 'nullable',
        'purpose' => 'nullable',
        'amount' => 'required',
        'invested_by' => 'nullable',
        'description' => 'nullable'
    ];

    
}
