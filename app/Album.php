<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'artist_id', 'name', 'image'
    ];

    /**
     * Get the user that owns the order.
     */
    public function artist()
    {
        return $this->belongsTo('App\Artist');
    }
}
