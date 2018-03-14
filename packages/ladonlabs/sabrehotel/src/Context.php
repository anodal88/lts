<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/9/18
 * Time: 10:39 PM
 */

namespace ladonlabs\sabrehotel;


class Context
{

    private $config = [];

    private $results = [];

    private $logs = [];

    public function __construct($config = [])
    {
        $this->config = $config;
        $this->results["SECURITY"] = null;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addConfiguration($key, $value)
    {
        $this->config[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return bool
     */
    public function hasConfiguration($key)
    {
        return isset($this->config[$key]);
    }

    /**
     * @param $path
     * @return mixed
     */
    public function getConfiguration($path, $required = false, $default = null)
    {
        $value = array_get($this->config, $path, $default);
        if ($required && !$value) {
            throw new \LogicException("The property '{$path}' is not defined as a configuration of the context.");
        }
        return $value;
    }

    /**
     * @param $key
     * @param $value
     * @return $this
     */
    public function addResult($key, $value)
    {
        $this->results[$key] = $value;
        return $this;
    }

    /**
     * @param $key
     * @return bool
     */
    public function hasResult($key)
    {
        return isset($this->results[$key]);
    }

    /**
     * @param $path
     * @return mixed
     */
    public function getResult($path, $required = false, $default = null)
    {
        $value = array_get($this->results, $path, $default);
        if ($required && !$value) {
            throw new \LogicException("The property '{$path}' is not defined as a result of the context.");
        }
        return $value;
    }

    /**
     * @param $action
     * @param $request
     * @param $response
     * @return $this
     */
    public function log($action, $request, $response)
    {
        $logRecord = ["{$action}" => ['request' => $request, 'response' => $response]];
        $this->logs[] = $logRecord;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthToken()
    {
        return isset($this->results["SECURITY"]->BinarySecurityToken) ? $this->results["SECURITY"]->BinarySecurityToken : null;
    }

    /**
     * @param $authToken
     */
    public function setAuthToken( $authToken){

        $this->results["SECURITY"]=$authToken;
    }

    /**
     * Returns if we have a valida connection created between the API
     * and our integration
     *
     * @return bool
     */
    public function isSessionValid()
    {
        return isset($this->results["SECURITY"]->BinarySecurityToken);
    }
}