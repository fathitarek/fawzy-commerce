<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class projects_form
 * @package App\Models
 * @version November 19, 2020, 9:27 am UTC
 *
 * @property string $name
 * @property integer $mobile
 * @property string $address
 * @property string $note
 * @property integer $project_id
 */
class projects_form extends Model
{
    use SoftDeletes;

    public $table = 'projects_forms';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'mobile',
        'address',
        'note',
        'project_id'
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
        'project_id' => 'integer'
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
        'project_id' => 'required|integer'
    ];

    public function project() {
        return $this->belongsTo('App\Models\projects');
    }
}
