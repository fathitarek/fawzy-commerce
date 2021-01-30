<?php

namespace App\Repositories;

use App\Models\reports;
use App\Repositories\BaseRepository;

/**
 * Class reportsRepository
 * @package App\Repositories
 * @version January 30, 2021, 9:54 am UTC
*/

class reportsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'image',
        'file'
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
        return reports::class;
    }
}
