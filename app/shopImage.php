<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shopImage extends Model
{
    protected $table = 'shop_images';
     protected $fillable = [
        'images','shop_item_id'
    ];

    public function shop_item() {
        return $this->belongsTo('App\Models\shop_items');
    }
}
