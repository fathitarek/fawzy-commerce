<?php

namespace App\Repositories;

use App\Models\info_bank_form;
use App\Repositories\BaseRepository;

/**
 * Class info_bank_formRepository
 * @package App\Repositories
 * @version November 18, 2020, 8:42 am UTC
*/

class info_bank_formRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'mobile',
        'note',
        'address'
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
        return info_bank_form::class;
    }
}
