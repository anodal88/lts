<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /**
     * Get the users for the blog post.
     */
    public function users()
    {
        return $this->hasMany('App\User');
    }

    /**
     * Get the sabre security tokens for the company.
     */
    public function sabreConnectionPoolTokens()
    {
        return $this->hasMany('App\SabreConnectionPoolToken');
    }

    /**
     * Get the Sabre Property Configuration that owns the user.
     */
    public function sabrePropertyConfiguration()
    {
        return $this->hasOne('App\SabrePropertyConfiguration','company_id');
    }
}
