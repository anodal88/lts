<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class OTA_HotelAvailRQ
{

    /**
     * @var AvailRequestSegment $AvailRequestSegment
     */
    protected $AvailRequestSegment = null;

    /**
     * @var boolean $ReturnHostCommand
     */
    protected $ReturnHostCommand = null;

    /**
     * @var \DateTime $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @var string $Version
     */
    protected $Version = null;

    /**
     * @param AvailRequestSegment $AvailRequestSegment
     * @param boolean $ReturnHostCommand
     * @param \DateTime $TimeStamp
     * @param string $Version
     */
    public function __construct($AvailRequestSegment = null, $ReturnHostCommand = null, \DateTime $TimeStamp = null, $Version = null)
    {
      $this->AvailRequestSegment = $AvailRequestSegment;
      $this->ReturnHostCommand = $ReturnHostCommand;
      $this->TimeStamp = $TimeStamp ? $TimeStamp->format(\DateTime::ATOM) : null;
      $this->Version = $Version;
    }

    /**
     * @return AvailRequestSegment
     */
    public function getAvailRequestSegment()
    {
      return $this->AvailRequestSegment;
    }

    /**
     * @param AvailRequestSegment $AvailRequestSegment
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRQ
     */
    public function setAvailRequestSegment($AvailRequestSegment)
    {
      $this->AvailRequestSegment = $AvailRequestSegment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnHostCommand()
    {
      return $this->ReturnHostCommand;
    }

    /**
     * @param boolean $ReturnHostCommand
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRQ
     */
    public function setReturnHostCommand($ReturnHostCommand)
    {
      $this->ReturnHostCommand = $ReturnHostCommand;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeStamp()
    {
      if ($this->TimeStamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeStamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeStamp
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRQ
     */
    public function setTimeStamp(\DateTime $TimeStamp)
    {
      $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
      return $this->Version;
    }

    /**
     * @param string $Version
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\OTA_HotelAvailRQ
     */
    public function setVersion($Version)
    {
      $this->Version = $Version;
      return $this;
    }

}
