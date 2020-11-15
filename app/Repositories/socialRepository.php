<?php

namespace App\Repositories;

use App\Models\social;
use App\Repositories\BaseRepository;

/**
 * Class socialRepository
 * @package App\Repositories
 * @version November 13, 2020, 8:26 pm UTC
*/

class socialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'facebook',
        'instgram',
        'linkedin',
        'twitter',
        'youtube'
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
        return social::class;
    }
}
