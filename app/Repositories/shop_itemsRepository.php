<?php

namespace App\Repositories;

use App\Models\shop_items;
use App\Repositories\BaseRepository;

/**
 * Class shop_itemsRepository
 * @package App\Repositories
 * @version November 16, 2020, 8:48 am UTC
*/

class shop_itemsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'main_price',
        'sale_price',
        'main_image',
        'tags',
        'publish'
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
        return shop_items::class;
    }
}
