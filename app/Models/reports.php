<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class reports
 * @package App\Models
 * @version January 30, 2021, 9:54 am UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property string $description_en
 * @property string $description_ar
 * @property string $image
 * @property string $file
 */
class reports extends Model
{
    use SoftDeletes;

    public $table = 'reports';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'image',
        'file'
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
        'file' => 'string'
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
        'file' => 'required|mimes:pdf,doc'
    ];
    public static $rulesUpdate = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
        'image' => 'image|mimes:png,jpeg,gif',
        'file' => 'mimes:pdf,doc'
    ];
    
}
