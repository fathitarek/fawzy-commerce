<?php

namespace App\Repositories;

use App\Models\about_us;
use App\Repositories\BaseRepository;

/**
 * Class about_usRepository
 * @package App\Repositories
 * @version November 19, 2020, 12:03 pm UTC
*/

class about_usRepository extends BaseRepository
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
        return about_us::class;
    }
}
