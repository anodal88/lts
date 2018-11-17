<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Reference
{

    /**
     * @var Schema $Schema
     */
    protected $Schema = null;

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
     * @var anonymous169 $type
     */
    protected $type = null;

    /**
     * @var anyURI $href
     */
    protected $href = null;

    /**
     * @var anyURI $role
     */
    protected $role = null;

    /**
     * @param Schema $Schema
     * @param Description $Description
     * @param string $any
     * @param ID $id
     * @param anonymous169 $type
     * @param anyURI $href
     * @param anyURI $role
     */
    public function __construct($Schema = null, $Description = null, $any = null, $id = null, $type = null, $href = null, $role = null)
    {
      $this->Schema = $Schema;
      $this->Description = $Description;
      $this->any = $any;
      $this->id = $id;
      $this->type = $type;
      $this->href = $href;
      $this->role = $role;
    }

    /**
     * @return Schema
     */
    public function getSchema()
    {
      return $this->Schema;
    }

    /**
     * @param Schema $Schema
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Reference
     */
    public function setSchema($Schema)
    {
      $this->Schema = $Schema;
      return $this;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Reference
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Reference
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Reference
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return anonymous169
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param anonymous169 $type
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Reference
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getHref()
    {
      return $this->href;
    }

    /**
     * @param anyURI $href
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Reference
     */
    public function setHref($href)
    {
      $this->href = $href;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param anyURI $role
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Reference
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

}
