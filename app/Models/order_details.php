<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class order_details
 * @package App\Models
 * @version January 6, 2021, 7:15 pm UTC
 *
 * @property integer $customer_id
 * @property integer $order_id
 * @property integer $product_id
 * @property string $price
 * @property integer $quantity
 */
class order_details extends Model
{
    use SoftDeletes;

    public $table = 'order_details';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'customer_id',
        'order_id',
        'product_id',
        'price',
        'quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'order_id' => 'integer',
        'product_id' => 'integer',
        'price' => 'string',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'order_id' => 'required',
        'product_id' => 'required',
        'price' => 'required',
        'quantity' => 'required'
    ];
    public function shop_item() {
        return $this->belongsTo('App\Models\shop_items','product_id');
    }
    
}
