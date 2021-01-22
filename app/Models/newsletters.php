<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class newsletters
 * @package App\Models
 * @version December 23, 2020, 2:36 pm UTC
 *
 * @property string $email
 */
class newsletters extends Model
{
    use SoftDeletes;

    public $table = 'newsletters';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'email'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'email' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'email' => 'required|unique:newsletters|email'
    ];

    
}
