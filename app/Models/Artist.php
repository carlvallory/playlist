<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Artist
 * @package App\Models
 * @version January 18, 2020, 3:27 am UTC
 *
 * @property string name
 */
class Artist extends Model
{

    public $table = 'artists';
    


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    public function albums()
    {
        return $this->hasMany('App\Comment');
    }
}
