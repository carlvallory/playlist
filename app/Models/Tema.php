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
    use SoftDeletes;

    public $table = 'temas';
    

    protected $dates = ['deleted_at'];



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

    
}
