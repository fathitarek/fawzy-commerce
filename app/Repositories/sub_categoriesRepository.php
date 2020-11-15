<?php

namespace App\Repositories;

use App\Models\sub_categories;
use App\Repositories\BaseRepository;

/**
 * Class sub_categoriesRepository
 * @package App\Repositories
 * @version November 13, 2020, 8:43 pm UTC
*/

class sub_categoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'category_id'
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
        return sub_categories::class;
    }
}
