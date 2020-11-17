<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class slider
 * @package App\Models
 * @version November 15, 2020, 8:20 am UTC
 *
 * @property string $title_en
 * @property string $title_ar
 * @property string $description_en
 * @property string $description_ar
 * @property string $image
 * @property integer $slide_order
 */
class slider extends Model
{
    use SoftDeletes;

    public $table = 'sliders';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'image',
        'slide_order'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title_en' => 'string',
        'title_ar' => 'string',
        'description_en' => 'string',
        'description_ar' => 'string',
        'image' => 'string',
        'slide_order' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title_en' => 'required',
        'title_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
        'image' => 'required|image|mimes:png,jpeg,gif',
        'slide_order' => 'required|integer'
    ];
    public static $rulesUpdate = [
        'title_en' => 'required',
        'title_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
        'image' => 'image|mimes:png,jpeg,gif',
        'slide_order' => 'required|integer'
    ];
    
}
