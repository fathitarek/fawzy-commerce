<?php

namespace App\Repositories;

use App\Models\blogs;
use App\Repositories\BaseRepository;

/**
 * Class blogsRepository
 * @package App\Repositories
 * @version November 15, 2020, 8:58 am UTC
*/

class blogsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'image',
        'date',
        'tags'
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
        return blogs::class;
    }
}
