<?php

namespace App\Repositories;

use App\Models\Tema;
use App\Repositories\BaseRepository;

/**
 * Class TemaRepository
 * @package App\Repositories
 * @version January 17, 2020, 2:13 pm UTC
*/

class TemaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'artist_id',
        'album_id',
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
        return Tema::class;
    }
}
