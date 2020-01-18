<?php

namespace App\Repositories;

use App\Models\Artist;
use App\Repositories\BaseRepository;

/**
 * Class ArtistRepository
 * @package App\Repositories
 * @version January 18, 2020, 3:27 am UTC
*/

class ArtistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
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
        return Artist::class;
    }
}
