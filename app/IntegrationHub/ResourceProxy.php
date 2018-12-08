<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 11/1/18
 * Time: 10:23 PM
 */

namespace App\IntegrationHub;


use App\IntegrationHub\Contracts\IResourceProxy;
use Illuminate\Log\Logger;

abstract class ResourceProxy implements IResourceProxy
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
     * @return ResourceProxy
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
     * @return ResourceProxy
     */
    public function setConfig(array $config): ResourceProxy
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
     * @return ResourceProxy
     */
    public function setDebug(bool $debug): ResourceProxy
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
     * @return ResourceProxy
     */
    public function setLogger(Logger $logger): ResourceProxy
    {
        $this->logger = $logger;
        return $this;
    }



}