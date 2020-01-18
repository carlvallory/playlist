<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Album
 * @package App\Models
 * @version January 18, 2020, 5:05 am UTC
 *
 * @property string artista_id
 * @property string name
 * @property string images
 */
class Album extends Model
{
    public $table = 'albums';
    


    public $fillable = [
        'artista_id',
        'name',
        'image'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'artista_id' => 'string',
        'name' => 'string',
        'image' => 'string'
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
    
}
