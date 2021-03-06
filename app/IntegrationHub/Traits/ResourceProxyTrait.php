<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 11/1/18
 * Time: 10:14 PM
 */

namespace App\IntegrationHub\Traits;



trait ResourceProxyTrait
{
    /**
     * @param array $config
     * @param $path
     * @param bool $required
     * @param null $default
     * @return mixed|null
     */
    public function getConfigValue(array $config, $path, $required = false, $default = null)
    {
        $value = array_get($config, $path, null);
        if (is_null($value)) {
            if ($required) {
                throw new \LogicException("Required value is not set.");
            }
            return $default;
        }
        return $value;
    }


}