<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class sucess_stories
 * @package App\Models
 * @version November 13, 2020, 7:41 pm UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property string $description_en
 * @property string $description_ar
 * @property string $image
 */
class sucess_stories extends Model
{
    use SoftDeletes;

    public $table = 'sucess_stories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
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
        'description_en' => 'string',
        'description_ar' => 'string',
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
        'description_en' => 'required',
        'description_ar' => 'required',
        'image' => 'required|image|mimes:png,jpeg,gif' //|size:2048
    ];

    public static $rulesUpdate = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
        'image' => 'image|mimes:png,jpeg,gif' //|size:2048
    ];
    
}
