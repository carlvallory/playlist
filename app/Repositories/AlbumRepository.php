<?php

namespace App\Repositories;

use App\Models\Album;
use App\Repositories\BaseRepository;

/**
 * Class AlbumRepository
 * @package App\Repositories
 * @version January 18, 2020, 5:05 am UTC
*/

class AlbumRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'artista_id',
        'name',
        'images'
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
        return Album::class;
    }
}
