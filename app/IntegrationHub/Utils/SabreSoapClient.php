<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 12/6/18
 * Time: 1:40 AM
 */

namespace App\IntegrationHub\Utils;


class SabreSoapClient extends \SoapClient
{


    public function __construct($wsdl, $options = [])
    {
        $options = array_merge(array (
            'features' => SOAP_SINGLE_ELEMENT_ARRAYS
        ), $options);
        parent::__construct($wsdl, $options);
    }

    /**
     * @param array $body
     * @return mixed
     */
    public function OTA_HotelAvailRQ(array $body)
    {
        return $this->__soapCall('OTA_HotelAvailRQ', array($body));
    }
}