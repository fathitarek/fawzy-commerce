<?php

namespace App\Repositories;

use App\Models\slider;
use App\Repositories\BaseRepository;

/**
 * Class sliderRepository
 * @package App\Repositories
 * @version November 15, 2020, 8:20 am UTC
*/

class sliderRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title_en',
        'title_ar',
        'description_en',
        'description_ar',
        'image',
        'slide_order'
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
        return slider::class;
    }
}
