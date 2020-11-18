<?php

namespace App\Repositories;

use App\Models\live_certificate_form;
use App\Repositories\BaseRepository;

/**
 * Class live_certificate_formRepository
 * @package App\Repositories
 * @version November 18, 2020, 9:37 am UTC
*/

class live_certificate_formRepository extends BaseRepository
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
        return live_certificate_form::class;
    }
}
