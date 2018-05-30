<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'parent_id','priority','hierarchy'
    ];

    //To automatically convert serialized Data to the original type
    public function getHierarchyAttribute($value)
    {
        return unserialize($value);
    }
}
