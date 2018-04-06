<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/24/18
 * Time: 1:36 AM
 */

namespace ladonlabs\hotelbeds\Hotels;

/**
 * Class AuditData
 * @package ladonlabs\hotelbeds\Hotels
 */
class AuditData
{
    /**
     * @var float
     */
    private $processTime;

    /**
     * @var string
     */
    private $timestamp;

    /**
     * @var string
     */
    private $requestHost;

    /**
     * @var string
     */
    private $serverId;

    /**
     * @var string
     */
    private $environment;

    /**
     * @var
     */
    private $release;

    /**
     * @var string
     */
    private $token;

    /**
     * @var string
     */
    private $internal;

    /**
     * @return float
     */
    public function getProcessTime(): float
    {
        return $this->processTime;
    }

    /**
     * @param float $processTime
     * @return AuditData
     */
    public function setProcessTime(float $processTime): AuditData
    {
        $this->processTime = $processTime;
        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return AuditData
     */
    public function setTimestamp(string $timestamp): AuditData
    {
        $this->timestamp = $timestamp;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestHost(): string
    {
        return $this->requestHost;
    }

    /**
     * @param string $requestHost
     * @return AuditData
     */
    public function setRequestHost(string $requestHost): AuditData
    {
        $this->requestHost = $requestHost;
        return $this;
    }

    /**
     * @return string
     */
    public function getServerId(): string
    {
        return $this->serverId;
    }

    /**
     * @param string $serverId
     * @return AuditData
     */
    public function setServerId(string $serverId): AuditData
    {
        $this->serverId = $serverId;
        return $this;
    }

    /**
     * @return string
     */
    public function getEnvironment(): string
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     * @return AuditData
     */
    public function setEnvironment(string $environment): AuditData
    {
        $this->environment = $environment;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelease()
    {
        return $this->release;
    }

    /**
     * @param mixed $release
     * @return AuditData
     */
    public function setRelease($release)
    {
        $this->release = $release;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return AuditData
     */
    public function setToken(string $token): AuditData
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return string
     */
    public function getInternal(): string
    {
        return $this->internal;
    }

    /**
     * @param string $internal
     * @return AuditData
     */
    public function setInternal(string $internal): AuditData
    {
        $this->internal = $internal;
        return $this;
    }


}