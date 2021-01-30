<?php

namespace App\Repositories;

use App\Models\donation_form;
use App\Repositories\BaseRepository;

/**
 * Class donation_formRepository
 * @package App\Repositories
 * @version January 30, 2021, 1:02 pm UTC
*/

class donation_formRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'message'
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
        return donation_form::class;
    }
}
