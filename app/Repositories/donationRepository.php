<?php

namespace App\Repositories;

use App\Models\donation;
use App\Repositories\BaseRepository;

/**
 * Class donationRepository
 * @package App\Repositories
 * @version January 30, 2021, 12:55 pm UTC
*/

class donationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'image',
        'description_en',
        'description_ar'
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
        return donation::class;
    }
}
