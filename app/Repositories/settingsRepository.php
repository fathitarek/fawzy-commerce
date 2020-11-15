<?php

namespace App\Repositories;

use App\Models\settings;
use App\Repositories\BaseRepository;

/**
 * Class settingsRepository
 * @package App\Repositories
 * @version November 13, 2020, 8:12 pm UTC
*/

class settingsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'mobile',
        'working_hours',
        'logo'
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
        return settings::class;
    }
}
