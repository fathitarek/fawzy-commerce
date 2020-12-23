<?php

namespace App\Repositories;

use App\Models\partners;
use App\Repositories\BaseRepository;

/**
 * Class partnersRepository
 * @package App\Repositories
 * @version December 23, 2020, 3:00 pm UTC
*/

class partnersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
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
        return partners::class;
    }
}
