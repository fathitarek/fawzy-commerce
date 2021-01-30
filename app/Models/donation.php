<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class donation
 * @package App\Models
 * @version January 30, 2021, 12:55 pm UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property string $image
 * @property string $description_en
 * @property string $description_ar
 */
class donation extends Model
{
    use SoftDeletes;

    public $table = 'donations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'image',
        'description_en',
        'description_ar'
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
        'image' => 'string',
        'description_en' => 'string',
        'description_ar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'image' => 'required|image|mimes:png,jpeg,gif',
        'description_en' => 'required',
        'description_ar' => 'required'
    ];

    public static $rulesUpdate = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'image' => 'image|mimes:png,jpeg,gif',
        'description_en' => 'required',
        'description_ar' => 'required'
    ];
}
