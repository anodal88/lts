<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class UsernameToken
{

    /**
     * @var string $Username
     */
    protected $Username = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $NewPassword
     */
    protected $NewPassword = null;

    /**
     * @var string $Organization
     */
    protected $Organization = null;

    /**
     * @var string $Domain
     */
    protected $Domain = null;

    /**
     * @param string $Username
     * @param string $Password
     * @param string $NewPassword
     * @param string $Organization
     * @param string $Domain
     */
    public function __construct($Username = null, $Password = null, $NewPassword = null, $Organization = null, $Domain = null)
    {
      $this->Username = $Username;
      $this->Password = $Password;
      $this->NewPassword = $NewPassword;
      $this->Organization = $Organization;
      $this->Domain = $Domain;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->Username;
    }

    /**
     * @param string $Username
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\UsernameToken
     */
    public function setUsername($Username)
    {
      $this->Username = $Username;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\UsernameToken
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->NewPassword;
    }

    /**
     * @param string $NewPassword
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\UsernameToken
     */
    public function setNewPassword($NewPassword)
    {
      $this->NewPassword = $NewPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
      return $this->Organization;
    }

    /**
     * @param string $Organization
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\UsernameToken
     */
    public function setOrganization($Organization)
    {
      $this->Organization = $Organization;
      return $this;
    }

    /**
     * @return string
     */
    public function getDomain()
    {
      return $this->Domain;
    }

    /**
     * @param string $Domain
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\UsernameToken
     */
    public function setDomain($Domain)
    {
      $this->Domain = $Domain;
      return $this;
    }

}