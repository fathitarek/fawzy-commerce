<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class partners
 * @package App\Models
 * @version December 23, 2020, 3:00 pm UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property string $image
 */
class partners extends Model
{
    use SoftDeletes;

    public $table = 'partners';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name_en' => 'string',
        'name_ar' => 'string',
        'image' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'image' => 'required|image|mimes:png,jpeg,gif'
    ];

    public static $rulesUpdate = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'image' => 'image|mimes:png,jpeg,gif'
    ];
}
