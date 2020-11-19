<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galleryProjects extends Model
{
    protected $table = 'gallery_project';
     protected $fillable = [
        'images','project_id'
    ];

    public function shop_item() {
        return $this->belongsTo('App\Models\projects');
    }
}
