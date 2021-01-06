<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class orders
 * @package App\Models
 * @version January 6, 2021, 6:14 pm UTC
 *
 * @property string $full_name
 * @property string $address
 * @property string $city
 * @property string $zip
 * @property string $email
 * @property string $order_note
 */
class orders extends Model
{
    use SoftDeletes;

    public $table = 'orders';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'full_name',
        'address',
        'city',
        'zip',
        'email',
        'order_note',
        'mobile',
        'total',
        'customer_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'full_name' => 'string',
        'address' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'email' => 'string',
        'order_note' => 'string',
        'mobile'=> 'string',
        'total'=> 'string',
        'customer_id'=> 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'full_name' => 'required',
        'address' => 'required',
        'city' => 'required',
        'zip' => 'required',
        'email' => 'required',
        'mobile'=> 'required',
        'total'=> 'required',
        'customer_id'=> 'required',
    ];

    

    public function order_details() {
        return $this->hasMany('App\Models\order_details','order_id');
    }
    public function customer() {
        return $this->belongsTo('App\Customer','customer_id');
    }
}
