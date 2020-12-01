<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class category_blog
 * @package App\Models
 * @version December 1, 2020, 9:19 am UTC
 *
 * @property string $name_en
 * @property string $name_ar
 */
class category_blog extends Model
{
    use SoftDeletes;

    public $table = 'category_blogs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name_en' => 'string',
        'name_ar' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_en' => 'required',
        'name_ar' => 'required'
    ];

    
}
