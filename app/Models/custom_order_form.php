<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class custom_order_form
 * @package App\Models
 * @version January 30, 2021, 12:28 pm UTC
 *
 * @property string $name
 * @property string $address
 * @property string $message
 */
class custom_order_form extends Model
{
    use SoftDeletes;

    public $table = 'custom_order_forms';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'email',
        'message'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'message' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'required',
        'message' => 'required'
    ];

    
}
