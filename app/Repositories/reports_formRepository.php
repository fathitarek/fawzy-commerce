<?php

namespace App\Repositories;

use App\Models\reports_form;
use App\Repositories\BaseRepository;

/**
 * Class reports_formRepository
 * @package App\Repositories
 * @version January 30, 2021, 10:32 am UTC
*/

class reports_formRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mobile',
        'address',
        'note',
        'report_id'
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
        return reports_form::class;
    }
}
