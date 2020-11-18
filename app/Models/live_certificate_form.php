<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class live_certificate_form
 * @package App\Models
 * @version November 18, 2020, 9:37 am UTC
 *
 * @property string $name
 * @property integer $mobile
 * @property string $note
 * @property string $address
 * @property integer $live_certificates_id
 */
class live_certificate_form extends Model
{
    use SoftDeletes;

    public $table = 'live_certificate_forms';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'mobile',
        'note',
        'address',
        'live_certificates_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'mobile' => 'integer',
        'note' => 'string',
        'address' => 'string',
        'live_certificates_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'mobile' => 'required|integer',
        'note' => 'required',
        'address' => 'required',
        'live_certificates_id' => 'required'
    ];

    
}
