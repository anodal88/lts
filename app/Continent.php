<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{

    protected $fillable=['*'];

    /**
     * Get the countries for the continent.
     */
    public function countries()
    {
        return $this->hasMany('App\Country');
    }
}
