<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class info_bank_form
 * @package App\Models
 * @version November 18, 2020, 8:42 am UTC
 *
 * @property string $name
 * @property integer $mobile
 * @property string $note
 * @property string $address
 * @property integer $bank_informations_id
 */
class info_bank_form extends Model
{
    use SoftDeletes;

    public $table = 'info_bank_forms';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'mobile',
        'note',
        'address',
        'bank_informations_id'
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
        'bank_informations_id' => 'integer'
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
        'bank_informations_id' => 'required'
    ];

    public function info_bank() {
        return $this->belongsTo('App\Models\bank_information','bank_informations_id');
    }  
}
