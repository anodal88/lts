<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable=[
        'code','name','picture','description','zoom','center'
    ];

    /**
     * Get the users for the city.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }
}
