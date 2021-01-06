<?php

namespace App\Repositories;

use App\Models\order_details;
use App\Repositories\BaseRepository;

/**
 * Class order_detailsRepository
 * @package App\Repositories
 * @version January 6, 2021, 7:15 pm UTC
*/

class order_detailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'customer_id',
        'order_id',
        'product_id',
        'price',
        'quantity'
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
        return order_details::class;
    }
}
