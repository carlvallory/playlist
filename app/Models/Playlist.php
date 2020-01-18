<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Playlist
 * @package App\Models
 * @version January 18, 2020, 6:13 am UTC
 *
 * @property string tema_id
 * @property string active
 */
class Playlist extends Model
{
    use SoftDeletes;

    public $table = 'playlists';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'tema_id',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'tema_id' => 'string',
        'active' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
    
    public function temas()
    {
        return $this->hasMany('App\Tema', 'id', 'tema_id');
    }

    
}
