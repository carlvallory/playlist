<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tema extends Model
{
    protected $fillable = [
        'artist_id', 'album_id', 'name'
    ];

    /**
     * Get the user that owns the order.
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
    
    public function album()
    {
        return $this->belongsTo('App\Album');
    }
    
}
