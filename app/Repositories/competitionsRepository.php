<?php

namespace App\Repositories;

use App\Models\competitions;
use App\Repositories\BaseRepository;

/**
 * Class competitionsRepository
 * @package App\Repositories
 * @version November 18, 2020, 8:50 am UTC
*/

class competitionsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name_en',
        'name_ar',
        'image',
        'video_url'
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
        return competitions::class;
    }
}
