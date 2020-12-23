<?php

namespace App\Repositories;

use App\Models\newsletters;
use App\Repositories\BaseRepository;

/**
 * Class newslettersRepository
 * @package App\Repositories
 * @version December 23, 2020, 2:36 pm UTC
*/

class newslettersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'email'
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
        return newsletters::class;
    }
}
