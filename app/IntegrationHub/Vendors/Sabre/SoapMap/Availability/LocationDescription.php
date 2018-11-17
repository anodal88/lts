<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class LocationDescription
{

    /**
     * @var string $Text
     */
    protected $Text = null;

    /**
     * @var string $Code
     */
    protected $Code = null;

    /**
     * @param string $Text
     * @param string $Code
     */
    public function __construct($Text = null, $Code = null)
    {
      $this->Text = $Text;
      $this->Code = $Code;
    }

    /**
     * @return string
     */
    public function getText()
    {
      return $this->Text;
    }

    /**
     * @param string $Text
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\LocationDescription
     */
    public function setText($Text)
    {
      $this->Text = $Text;
      return $this;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param string $Code
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\LocationDescription
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

}
