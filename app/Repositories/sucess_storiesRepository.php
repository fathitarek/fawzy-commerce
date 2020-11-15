<?php

namespace App\Repositories;

use App\Models\sucess_stories;
use App\Repositories\BaseRepository;

/**
 * Class sucess_storiesRepository
 * @package App\Repositories
 * @version November 13, 2020, 7:41 pm UTC
*/

class sucess_storiesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'image'
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
        return sucess_stories::class;
    }
}
