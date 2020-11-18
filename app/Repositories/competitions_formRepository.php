<?php

namespace App\Repositories;

use App\Models\competitions_form;
use App\Repositories\BaseRepository;

/**
 * Class competitions_formRepository
 * @package App\Repositories
 * @version November 18, 2020, 8:58 am UTC
*/

class competitions_formRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mobile',
        'note',
        'address'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return competitions_form::class;
    }
}
