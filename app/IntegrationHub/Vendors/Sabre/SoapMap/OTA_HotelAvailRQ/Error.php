<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Error
{

    /**
     * @var Description $Description
     */
    protected $Description = null;

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ID $id
     */
    protected $id = null;

    /**
     * @var anyURI $codeContext
     */
    protected $codeContext = null;

    /**
     * @var nonemptystring $errorCode
     */
    protected $errorCode = null;

    /**
     * @var severitytype $severity
     */
    protected $severity = null;

    /**
     * @var nonemptystring $location
     */
    protected $location = null;

    /**
     * @param Description $Description
     * @param string $any
     * @param ID $id
     * @param anyURI $codeContext
     * @param nonemptystring $errorCode
     * @param severitytype $severity
     * @param nonemptystring $location
     */
    public function __construct($Description = null, $any = null, $id = null, $codeContext = null, $errorCode = null, $severity = null, $location = null)
    {
      $this->Description = $Description;
      $this->any = $any;
      $this->id = $id;
      $this->codeContext = $codeContext;
      $this->errorCode = $errorCode;
      $this->severity = $severity;
      $this->location = $location;
    }

    /**
     * @return Description
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param Description $Description
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Error
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Error
     */
    public function setAny($any)
    {
      $this->any = $any;
      return $this;
    }

    /**
     * @return ID
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param ID $id
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Error
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getCodeContext()
    {
      return $this->codeContext;
    }

    /**
     * @param anyURI $codeContext
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Error
     */
    public function setCodeContext($codeContext)
    {
      $this->codeContext = $codeContext;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getErrorCode()
    {
      return $this->errorCode;
    }

    /**
     * @param nonemptystring $errorCode
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Error
     */
    public function setErrorCode($errorCode)
    {
      $this->errorCode = $errorCode;
      return $this;
    }

    /**
     * @return severitytype
     */
    public function getSeverity()
    {
      return $this->severity;
    }

    /**
     * @param severitytype $severity
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Error
     */
    public function setSeverity($severity)
    {
      $this->severity = $severity;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param nonemptystring $location
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Error
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

}