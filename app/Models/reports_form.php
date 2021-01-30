<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class reports_form
 * @package App\Models
 * @version January 30, 2021, 10:32 am UTC
 *
 * @property string $name
 * @property string $mobile
 * @property string $address
 * @property string $note
 * @property integer $report_id
 */
class reports_form extends Model
{
    use SoftDeletes;

    public $table = 'reports_forms';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'mobile',
        'address',
        'note',
        'report_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'mobile' => 'string',
        'address' => 'string',
        'note' => 'string',
        'report_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'mobile' => 'required',
        'address' => 'required',
        'note' => 'required',
        'report_id' => 'required'
    ];

    public function report() {
        return $this->belongsTo('App\Models\reports');
    }
}
