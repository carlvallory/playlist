<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tema
 * @package App\Models
 * @version January 17, 2020, 2:13 pm UTC
 *
 * @property string artist_id
 * @property string album_id
 * @property string name
 */
class Tema extends Model
{

    public $table = 'temas';



    public $fillable = [
        'artist_id',
        'album_id',
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'artist_id' => 'string',
        'album_id' => 'string',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
    
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
    
}
