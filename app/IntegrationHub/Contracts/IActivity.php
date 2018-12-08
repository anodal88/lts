<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 12/7/18
 * Time: 10:43 PM
 */

namespace App\IntegrationHub\Contracts;


interface IActivity
{


    /**
     * @param array $request
     * @return mixed
     */
    public function run(array $request);


    /**
     * @param array $params
     * @return array
     */
    public function getRequest(): array;

    /**
     * @param array $response
     * @return mixed
     */
    public function getResponse();

    /**
     * @return string
     */
    public function getXmlRequest():string;

    /**
     * @return string
     */
    public function getXmlResponse():string;

    /**
     * @param $response
     * @return bool
     */
    public function isResponseSuccess($response):bool;
}