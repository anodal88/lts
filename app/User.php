<?php

namespace App;

use Collective\Html\Eloquent\FormAccessible;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class User extends Authenticatable
{
    use Notifiable;
    use FormAccessible;

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
        return $this->roles()->orderBy('security_level','asc')->first();
    }

    public function hasRole($role_name){
        return $this->roles()->where('role',$role_name)->first() instanceof Role;
    }

    public function isImpersonated(){
        return Session::has('original_user') && Session::get('original_user')!=$this->id;
    }

}
