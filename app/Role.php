<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ROLE_USER = 'ROLE_USER';
    const SUPER_ADMIN = 'SUPER_ADMIN';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'parent_id', 'priority', 'hierarchy'
    ];

    //To automatically convert serialized Data to the original type
    public function getHierarchyAttribute($value)
    {
        return unserialize($value);
    }

    /**
     * The users that belong to the role.
     */
    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

}
