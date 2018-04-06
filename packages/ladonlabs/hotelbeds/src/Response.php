<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/22/18
 * Time: 12:27 AM
 */

namespace ladonlabs\hotelbeds;


class Response
{
    private $responseStats;
    private $body;

    /**
     * Response constructor.
     * @param $responseStats
     * @param $body
     */
    public function __construct($body, $responseStats)
    {
        $this->responseStats = $responseStats;
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getResponseStats()
    {
        return $this->responseStats;
    }

    /**
     * @param mixed $responseStats
     * @return Response
     */
    public function setResponseStats($responseStats)
    {
        $this->responseStats = $responseStats;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     * @return Response
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return int
     */
    public function getResponseCode()
    {
        return isset($this->responseStats['http_code']) ? $this->responseStats['http_code'] : 500;
    }

}