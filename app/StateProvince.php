<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StateProvince extends Model
{

    protected $fillable = ['*'];

    /**
     * Get the country that owns the state.
     */
    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    /**
     * Get the cities  for the state.
     */
    public function cities()
    {
        return $this->hasMany('App\City');
    }

    /**
     * Get the users for the State.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
