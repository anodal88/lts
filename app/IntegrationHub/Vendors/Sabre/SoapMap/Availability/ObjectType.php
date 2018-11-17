<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class ObjectType
{

    /**
     * @var string $any
     */
    protected $any = null;

    /**
     * @var ID $Id
     */
    protected $Id = null;

    /**
     * @var string $MimeType
     */
    protected $MimeType = null;

    /**
     * @var anyURI $Encoding
     */
    protected $Encoding = null;

    /**
     * @param string $any
     * @param ID $Id
     * @param string $MimeType
     * @param anyURI $Encoding
     */
    public function __construct($any = null, $Id = null, $MimeType = null, $Encoding = null)
    {
      $this->any = $any;
      $this->Id = $Id;
      $this->MimeType = $MimeType;
      $this->Encoding = $Encoding;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ObjectType
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
      return $this->Id;
    }

    /**
     * @param ID $Id
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ObjectType
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
      return $this->MimeType;
    }

    /**
     * @param string $MimeType
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ObjectType
     */
    public function setMimeType($MimeType)
    {
      $this->MimeType = $MimeType;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getEncoding()
    {
      return $this->Encoding;
    }

    /**
     * @param anyURI $Encoding
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ObjectType
     */
    public function setEncoding($Encoding)
    {
      $this->Encoding = $Encoding;
      return $this;
    }

}
