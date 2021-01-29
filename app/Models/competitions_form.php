<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class competitions_form
 * @package App\Models
 * @version November 18, 2020, 8:58 am UTC
 *
 * @property string $name
 * @property integer $mobile
 * @property string $note
 * @property string $address
 * @property integer $competition_id
 */
class competitions_form extends Model
{
    use SoftDeletes;

    public $table = 'competitions_forms';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'mobile',
        'note',
        'address',
        'competition_id'
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
        'note' => 'string',
        'address' => 'string',
        'competition_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'mobile' => 'required',
        'note' => 'required',
        'address' => 'required',
        'competition_id' => 'required'
    ];

    public function competition() {
        return $this->belongsTo('App\Models\competitions');
    } 
}
