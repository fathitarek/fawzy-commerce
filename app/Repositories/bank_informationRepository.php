<?php

namespace App\Repositories;

use App\Models\bank_information;
use App\Repositories\BaseRepository;

/**
 * Class bank_informationRepository
 * @package App\Repositories
 * @version November 17, 2020, 8:24 am UTC
*/

class bank_informationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'image',
        'details_en',
        'details_ar',
        'video_url'
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
        return bank_information::class;
    }
}
