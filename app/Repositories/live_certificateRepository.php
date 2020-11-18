<?php

namespace App\Repositories;

use App\Models\live_certificate;
use App\Repositories\BaseRepository;

/**
 * Class live_certificateRepository
 * @package App\Repositories
 * @version November 18, 2020, 9:09 am UTC
*/

class live_certificateRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'description_en',
        'description_ar',
        'company_en',
        'company_ar',
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
        return live_certificate::class;
    }
}
