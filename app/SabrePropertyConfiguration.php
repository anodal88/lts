<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class SabrePropertyConfiguration extends Model
{
    protected $table='sabre_property_configurations';

    protected $fillable= ['*'];

    /**
     * Get the company that owns this configuration.
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function setDomainDevAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['domain_dev'] = $encryptedToken;
    }

    public function getDomainDevAttribute($value){
        if(!$value)return;
        return Crypt::decrypt($value,false);
    }

    public function setOrganizationDevAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['organization_dev'] = $encryptedToken;
    }

    public function getOrganizationDevAttribute($value){
        if(!$value)return;
        return Crypt::decrypt($value,false);
    }

    public function setUsernameDevAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['username_dev'] = $encryptedToken;
    }

    public function getUsernameDevAttribute($value){
        if(!$value)return;
        return Crypt::decrypt($value,false);
    }

    public function setPasswordDevAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['password_dev'] = $encryptedToken;
    }

    public function getPasswordDevAttribute($value){
        if(!$value)return;
        return Crypt::decrypt($value,false);
    }


    public function setDomainProdAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['domain_prod'] = $encryptedToken;
    }

    public function getDomainProdAttribute($value){
        if(!$value)return;
        return Crypt::decrypt($value,false);
    }

    public function setOrganizationProdAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['organization_prod'] = $encryptedToken;
    }

    public function getOrganizationProdAttribute($value){
        if(!$value)return;
        return Crypt::decrypt($value,false);
    }

    public function setUsernameProdAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['username_prod'] = $encryptedToken;
    }

    public function getUsernameProdAttribute($value){
        if(!$value)return;
        return Crypt::decrypt($value,false);
    }

    public function setPasswordProdAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['password_prod'] = $encryptedToken;
    }

    public function getPasswordProdAttribute($value){
        if(!$value)return;
        return Crypt::decrypt($value,false);
    }
}

