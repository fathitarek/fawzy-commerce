<?php

namespace App\Repositories;

use App\Models\custom_order_form;
use App\Repositories\BaseRepository;

/**
 * Class custom_order_formRepository
 * @package App\Repositories
 * @version January 30, 2021, 12:28 pm UTC
*/

class custom_order_formRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'address',
        'message'
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
        return custom_order_form::class;
    }
}
