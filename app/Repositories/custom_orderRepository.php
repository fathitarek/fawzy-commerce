<?php

namespace App\Repositories;

use App\Models\custom_order;
use App\Repositories\BaseRepository;

/**
 * Class custom_orderRepository
 * @package App\Repositories
 * @version January 30, 2021, 12:17 pm UTC
*/

class custom_orderRepository extends BaseRepository
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
        return custom_order::class;
    }
}
