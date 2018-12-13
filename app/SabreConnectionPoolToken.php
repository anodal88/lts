<?php
/**
 * Created by PhpStorm.
 * User: antonionodal
 * Date: 2018-12-12
 * Time: 23:34
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class SabreConnectionPoolToken extends Model
{
    protected $table="sabre_connection_pool_tokens";

    protected $fillable=['token','in_use','created_at','updated_at'];

    public function setTokenAttribute($value){
        $encryptedToken = Crypt::encrypt($value,false);
        $this->attributes['token'] = $encryptedToken;
    }

    public function getTokenAttribute($value){
        return Crypt::decrypt($value,false);
    }


    /**
     * Get the company that owns the token.
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }
}