<?php

namespace App\Repositories;

use App\Models\orders;
use App\Repositories\BaseRepository;

/**
 * Class ordersRepository
 * @package App\Repositories
 * @version January 6, 2021, 6:14 pm UTC
*/

class ordersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'full_name',
        'address',
        'city',
        'zip',
        'email',
        'order_note'
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
        return orders::class;
    }
}
