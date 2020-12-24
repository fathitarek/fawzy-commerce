<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class slider
 * @package App\Models
 * @version February 17, 2019, 1:29 pm UTC
 *
 * @property string title
 * @property string image
 * @property string title_btn
 * @property string website_id
 */
class wishlist extends Model
{
    use SoftDeletes;

    public $table = 'wishlists';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'customer_id',
        'product_id',
        
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'customer_id' => 'integer',
        'product_id' => 'integer',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'customer_id' => 'required',
        'product_id' => 'required',      
       
    ];

    
}