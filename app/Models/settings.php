<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class settings
 * @package App\Models
 * @version November 13, 2020, 8:12 pm UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property string $description_en
 * @property string $description_ar
 * @property string $mobile
 * @property int $working_hours
 * @property string $logo
 */
class settings extends Model
{
    use SoftDeletes;

    public $table = 'settings';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'mobile',
        'working_hours',
        'logo',
        'email',
        'address'
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
        'mobile' => 'string',
        'logo' => 'string',
        'email'=> 'string',
        'address'=> 'string',
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
        'mobile' => 'required|numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        'working_hours' => 'required|numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:1',
        'logo' => 'required|image|mimes:png,jpeg,gif',
        'email'=> 'required',
        'address'=> 'required',
    ];
    
    public static $rulesUpdate = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
        'mobile' => 'required|numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
        'working_hours' => 'required|numeric|regex:/^([0-9\s\-\+\(\)]*)$/|min:1',
        'logo' => 'image|mimes:png,jpeg,gif',
        'email'=> 'required',
        'address'=> 'required',
    ];
    
}
