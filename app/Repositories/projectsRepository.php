<?php

namespace App\Repositories;

use App\Models\projects;
use App\Repositories\BaseRepository;

/**
 * Class projectsRepository
 * @package App\Repositories
 * @version November 19, 2020, 9:06 am UTC
*/

class projectsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar'
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
        return projects::class;
    }
}
