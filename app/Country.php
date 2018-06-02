<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['*'];

    /**
     * Get the continent that owns the country.
     */
    public function continet()
    {
        return $this->belongsTo('App\Continent');
    }

    /**
     * Get the states or provinces for the country.
     */
    public function statesProvinces()
    {
        return $this->hasMany('App\StateProvince');
    }
}
