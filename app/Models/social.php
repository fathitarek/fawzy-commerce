<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class social
 * @package App\Models
 * @version November 13, 2020, 8:26 pm UTC
 *
 * @property string $facebook
 * @property string $instgram
 * @property string $linkedin
 * @property string $twitter
 * @property string $youtube
 */
class social extends Model
{
    use SoftDeletes;

    public $table = 'socials';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'facebook',
        'instgram',
        'linkedin',
        'twitter',
        'youtube'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'facebook' => 'string',
        'instgram' => 'string',
        'linkedin' => 'string',
        'twitter' => 'string',
        'youtube' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        // 'facebook' => 'required|url',
        // 'instgram' => 'required|url',
        // 'linkedin' => 'required|url',
        // 'twitter' => 'required|url',
        // 'youtube' => 'required|url'
    ];

    
}
