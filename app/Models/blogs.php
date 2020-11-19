<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class blogs
 * @package App\Models
 * @version November 15, 2020, 8:58 am UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property string $description_en
 * @property string $description_ar
 * @property string $image
 * @property string $date
 * @property string $tags
 */
class blogs extends Model
{
    use SoftDeletes;

    public $table = 'blogs';
    
    // public $todayDate = date('Y-m-d');

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'image',
        'date',
        'tags'
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
        'description_en' => 'string',
        'description_ar' => 'string',
        'image' => 'string',
        'date' => 'date',
        'tags' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
        'image' => 'required|image|mimes:png,jpeg,gif',
        'date' => 'required', //|after_or_equal:'.$this->todayDate
        'tags' => 'required',
    ];


    public static $rulesUpdate = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
        'image' => 'image|mimes:png,jpeg,gif',
        'date' => 'required', //|after_or_equal:'.$this->todayDate
        'tags' => 'required',
    ];
    
}
