<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/22/18
 * Time: 12:03 AM
 */

namespace ladonlabs\hotelbeds;


class Client
{


    private $debug;

    public function __construct($debug = false)
    {

        $this->debug = $debug;
    }

    public function configure($uri, $headers)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_URL, $uri);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_ENCODING ,"");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        if ($this->debug) {
            curl_setopt($ch, CURLOPT_VERBOSE, 1);
            curl_setopt($ch, CURLOPT_HEADER, 1);
        }
        return $ch;
    }

    public function post($uri, $body = null, $headers)
    {
        $ch = $this->configure($uri, $headers);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $body); // the SOAP request
        $response = new Response(curl_exec($ch), curl_getinfo($ch));
        curl_close($ch);
        return $response;
    }

    public function put($uri, $body, $headers)
    {
    }

    public function get($uri, $headers)
    {
        $ch = $this->configure($uri, $headers);
        $response = new Response(curl_exec($ch), curl_getinfo($ch));
        curl_close($ch);
        return $response;
    }

    public function delete($uri, $body, $headers)
    {
    }

    public function patch($uri, $body, $headers)
    {
    }


}