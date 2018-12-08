<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 12/7/18
 * Time: 11:27 PM
 */

namespace App\IntegrationHub\Contracts;


interface IResourceProxy
{

    /**
     * @param array $config
     * @param $path
     * @param bool $required
     * @param null $default
     * @return mixed|null
     */
    public function getConfigValue(array $config, $path, $required = false, $default = null);
}