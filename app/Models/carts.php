<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class carts
 * @package App\Models
 * @version April 10, 2019, 8:26 am UTC
 *
 * @property integer product_id
 * @property integer type
 * @property integer user_id
 * @property string website_id
 */
class carts extends Model
{
    use SoftDeletes;

    public $table = 'carts';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'product_id',
        'customer_id',
        'quantity',
        'is_order'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'product_id' => 'integer',
        'customer_id' => 'integer',
        'quantity'=>'integer',
        'is_order'=>'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'product_id' => 'required',
        'customer_id' => 'required',
        'quantity'=>'required'
    ];

    public function shop_item() {
        return $this->belongsTo('App\Models\shop_items','product_id');
    }
}