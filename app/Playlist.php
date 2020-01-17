<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    
    protected $fillable = [
        'tema_id', 'active'
    ];

    /**
     * Get the user that owns the order.
     */
    
    public function temas()
    {
        return $this->hasMany('App\Tema', 'id', 'tema_id');
    }
    
}
