<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Client
 * @package App\Models
 * @version November 16, 2021, 8:36 pm UTC
 *
 * @property string $name
 * @property string $contact
 * @property string $address
 * @property string $package
 * @property string $username
 * @property string $password
 * @property string $Onu_mac
 * @property integer $cable
 * @property boolean $status
 */
class Client extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'clients';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'contact' => 'string',
        'address' => 'string',
        'package' => 'string',
        'username' => 'string',
        'password' => 'string',
        'Onu_mac' => 'string',
        'cable' => 'integer',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'contact' => 'nullable',
        'address' => 'nullable',
        'package' => 'required',
        'username' => 'nullable',
        'password' => 'nullable',
        'Onu_mac' => 'nullable',
        'cable' => 'nullable',
        'status' => 'required'
    ];

    
}
