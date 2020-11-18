<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class bank_information
 * @package App\Models
 * @version November 17, 2020, 8:24 am UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property string $image
 * @property string $video_url
 */
class bank_information extends Model
{
    use SoftDeletes;

    public $table = 'bank_informations';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'image',
        'video_url',
        'details_en',
        'details_ar',
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
        'details_en' => 'string',
        'details_ar' => 'string',
        'image' => 'string',
        'video_url' => 'string'
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
        'video_url' => 'required|url',
        'details_en' => 'required',
        'details_ar' => 'required',
    ];

    public static $rulesUpdate = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'image' => 'image|mimes:png,jpeg,gif',
        'video_url' => 'required|url',
        'details_en' => 'required',
        'details_ar' => 'required',
    ];
    
}
