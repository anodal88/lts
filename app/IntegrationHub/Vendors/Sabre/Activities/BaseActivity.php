<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 12/7/18
 * Time: 11:25 PM
 */

namespace App\IntegrationHub\Vendors\Sabre\Activities;


use App\IntegrationHub\Contracts\IActivity;
use App\IntegrationHub\Contracts\IResourceProxy;

abstract class BaseActivity extends \SoapClient implements IActivity
{
    /** @var IResourceProxy */
    protected $proxy;

    /** @var array */
    protected $paramsBag;

    /**
     * BaseActivity constructor.
     * @param $wsdl
     * @param array $options
     * @param IResourceProxy $proxy
     * @param array $params
     */
    public function __construct($wsdl, array $options,IResourceProxy $proxy, array $params)
    {
        parent::__construct($wsdl, $options);
        $this->proxy = $proxy;
        $this->paramsBag = $params;
    }

    /**
     * @inheritDoc
     */
    public function run(array $request)
    {
        // TODO: Implement run() method.
    }

    /**
     * @inheritDoc
     */
    public function getRequest(): array
    {
        return [];
    }

    /**
     * @inheritDoc
     */
    public function getResponse()
    {
        return 'You must implement the method `getResponse` for your class';
    }

    /**
     * @inheritDoc
     */
    public function getXmlRequest(): string
    {
       return $this->__getLastRequest();
    }

    /**
     * @inheritDoc
     */
    public function getXmlResponse(): string
    {
        return $this->__getLastResponse();
    }


}