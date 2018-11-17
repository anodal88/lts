<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 11/1/18
 * Time: 10:23 PM
 */

namespace App\IntegrationHub;


use Illuminate\Log\Logger;

abstract class Proxy
{
    const MODE_PROD=1;
    const MODE_DEV=0;

    /**
     * Switch to determine the context of the communication Ex. Production or Development
     * @var int
     */
    protected $mode;

    /**
     * Configuration array to establish communication between lts and provider
     * @var array
     */
    protected $config=[];

    /**
     * Switch to determine if the proxy have to log communications or not
     * @var bool
     */
    protected $debug=true;

    /**
     * @var Logger
     */
    protected $logger;

    /**
     * @return mixed
     */
    public function getMode()
    {
        return $this->mode==self::MODE_PROD?self::MODE_PROD:self::MODE_DEV;
    }

    /**
     * @param mixed $mode
     * @return Proxy
     */
    public function setMode($mode)
    {
        $this->mode = $mode;
        return $this;
    }

    /**
     * @return array
     */
    public function getConfig(): array
    {
        return $this->config;
    }

    /**
     * @param array $config
     * @return Proxy
     */
    public function setConfig(array $config): Proxy
    {
        $this->config = $config;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDebug(): bool
    {
        return $this->debug;
    }

    /**
     * @param bool $debug
     * @return Proxy
     */
    public function setDebug(bool $debug): Proxy
    {
        $this->debug = $debug;
        return $this;
    }

    /**
     * @return Logger
     */
    public function getLogger(): Logger
    {
        return $this->logger;
    }

    /**
     * @param Logger $logger
     * @return Proxy
     */
    public function setLogger(Logger $logger): Proxy
    {
        $this->logger = $logger;
        return $this;
    }



}