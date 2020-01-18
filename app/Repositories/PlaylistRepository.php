<?php

namespace App\Repositories;

use App\Models\Playlist;
use App\Repositories\BaseRepository;

/**
 * Class PlaylistRepository
 * @package App\Repositories
 * @version January 18, 2020, 6:13 am UTC
*/

class PlaylistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tema_id',
        'active'
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
        return Playlist::class;
    }
}
