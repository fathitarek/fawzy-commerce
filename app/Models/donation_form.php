<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class donation_form
 * @package App\Models
 * @version January 30, 2021, 1:02 pm UTC
 *
 * @property string $name
 * @property string $email
 * @property string $message
 */
class donation_form extends Model
{
    use SoftDeletes;

    public $table = 'donation_forms';
    

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
