<?php

namespace App\Repositories;

use App\Models\projects_form;
use App\Repositories\BaseRepository;

/**
 * Class projects_formRepository
 * @package App\Repositories
 * @version November 19, 2020, 9:27 am UTC
*/

class projects_formRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mobile',
        'address',
        'note'
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
        return projects_form::class;
    }
}
