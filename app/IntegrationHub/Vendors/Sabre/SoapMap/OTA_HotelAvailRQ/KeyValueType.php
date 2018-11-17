<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class KeyValueType
{

    /**
     * @var DSAKeyValueType $DSAKeyValue
     */
    protected $DSAKeyValue = null;

    /**
     * @var RSAKeyValueType $RSAKeyValue
     */
    protected $RSAKeyValue = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @param DSAKeyValueType $DSAKeyValue
     * @param RSAKeyValueType $RSAKeyValue
     * @param string $any
     */
    public function __construct($DSAKeyValue = null, $RSAKeyValue = null, $any = null)
    {
      $this->DSAKeyValue = $DSAKeyValue;
      $this->RSAKeyValue = $RSAKeyValue;
      $this->any = $any;
    }

    /**
     * @return DSAKeyValueType
     */
    public function getDSAKeyValue()
    {
      return $this->DSAKeyValue;
    }

    /**
     * @param DSAKeyValueType $DSAKeyValue
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\KeyValueType
     */
    public function setDSAKeyValue($DSAKeyValue)
    {
      $this->DSAKeyValue = $DSAKeyValue;
      return $this;
    }

    /**
     * @return RSAKeyValueType
     */
    public function getRSAKeyValue()
    {
      return $this->RSAKeyValue;
    }

    /**
     * @param RSAKeyValueType $RSAKeyValue
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\KeyValueType
     */
    public function setRSAKeyValue($RSAKeyValue)
    {
      $this->RSAKeyValue = $RSAKeyValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getAny()
    {
      return $this->any;
    }

    /**
     * @param string $any
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\KeyValueType
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

}
