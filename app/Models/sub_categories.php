<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class sub_categories
 * @package App\Models
 * @version November 13, 2020, 8:43 pm UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property integer $category_id
 */
class sub_categories extends Model
{
    use SoftDeletes;

    public $table = 'sub_categories';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'category_id'
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
        'category_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'category_id' => 'required'
    ];

    public function category() {
        return $this->belongsTo('App\Models\categories');
    }
    public function shop_items() {
        return $this->hasMany('App\Models\shop_items','sub_category_id');
    }
}
