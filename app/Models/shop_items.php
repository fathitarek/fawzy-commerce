<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class shop_items
 * @package App\Models
 * @version November 16, 2020, 8:48 am UTC
 *
 * @property string $name_en
 * @property string $name_ar
 * @property string $description_en
 * @property string $description_ar
 * @property integer $main_price
 * @property integer $sale_price
 * @property string $main_image
 * @property integer $category_id
 * @property integer $sub_category_id
 * @property string $tags
 * @property integer $publish
 */
class shop_items extends Model
{
    use SoftDeletes;

    public $table = 'shop_items';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'main_price',
        'sale_price',
        'main_image',
        'category_id',
        'sub_category_id',
        'tags',
        'publish'
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
        'main_price' => 'integer',
        'sale_price' => 'integer',
        'main_image' => 'string',
        'category_id' => 'integer',
        'sub_category_id' => 'integer',
        'tags' => 'string',
        'publish' => 'integer'
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
        'main_price' => 'required|integer',
        'sale_price' => 'integer|lt:main_price',
        'main_image' => 'required|image|mimes:png,jpeg,gif',
        'category_id' => 'required|integer',
        'sub_category_id' => 'required|integer',
        'tags' => 'required',
        'publish' => 'required'
    ];


    public static $rulesUpdate = [
        'name_en' => 'required',
        'name_ar' => 'required',
        'description_en' => 'required',
        'description_ar' => 'required',
        'main_price' => 'required|integer',
        'sale_price' => 'integer',
        'main_image' => 'image|mimes:png,jpeg,gif',
        'category_id' => 'required|integer',
        'sub_category_id' => 'required|integer',
        'tags' => 'required',
        'publish' => 'required'
    ];

    public function category() {
        return $this->belongsTo('App\Models\categories');
    }

    public function sub_category() {
        return $this->belongsTo('App\Models\sub_categories');
    }

    public function shopImages() {
        return $this->hasMany('App\shopImage','shop_item_id');
    }
}
