<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class categories
 * @package App\Models
 * @version November 13, 2020, 7:20 pm UTC
 *
 * @property string $name_en
 * @property string $name_ar
 */
class categories extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

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

    public function subcategories(){

        return $this->hasMany('App\Models\sub_categories','category_id');

    }  

    public function shop_items(){

        return $this->hasMany('App\Models\shop_items','category_id');

    } 

    
}
