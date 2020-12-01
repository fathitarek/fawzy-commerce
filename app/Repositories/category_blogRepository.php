<?php

namespace App\Repositories;

use App\Models\category_blog;
use App\Repositories\BaseRepository;

/**
 * Class category_blogRepository
 * @package App\Repositories
 * @version December 1, 2020, 9:19 am UTC
*/

class category_blogRepository extends BaseRepository
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
        return category_blog::class;
    }
}
