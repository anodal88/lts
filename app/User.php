<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'company_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the company that owns the user.
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    /**
     * The roles that belong to the user.
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }

    /**
     * Return the highgest role from the user
     * @return Role $maxRole
     */
    public function maxRole()
    {
        $maxRole = null;
        foreach ($this->roles as $role) {
            if (is_null($maxRole)) {
                $maxRole = $role;
            } else if ($role->priority < $maxRole->priority) {
                $maxRole = $role;
            }
        }
        return $maxRole;
    }
}
