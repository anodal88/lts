<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ;

class Identification
{

    /**
     * @var PseudoCityCodeOrOAC $CustomerID
     */
    protected $CustomerID = null;

    /**
     * @var TextShort $CustomerAppID
     */
    protected $CustomerAppID = null;

    /**
     * @var TrackingID $ConversationID
     */
    protected $ConversationID = null;

    /**
     * @var Identifier $MessageID
     */
    protected $MessageID = null;

    /**
     * @var \DateTime $TimeStamp
     */
    protected $TimeStamp = null;

    /**
     * @param PseudoCityCodeOrOAC $CustomerID
     * @param TrackingID $ConversationID
     * @param Identifier $MessageID
     */
    public function __construct($CustomerID = null, $ConversationID = null, $MessageID = null)
    {
      $this->CustomerID = $CustomerID;
      $this->ConversationID = $ConversationID;
      $this->MessageID = $MessageID;
    }

    /**
     * @return PseudoCityCodeOrOAC
     */
    public function getCustomerID()
    {
      return $this->CustomerID;
    }

    /**
     * @param PseudoCityCodeOrOAC $CustomerID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Identification
     */
    public function setCustomerID($CustomerID)
    {
      $this->CustomerID = $CustomerID;
      return $this;
    }

    /**
     * @return TextShort
     */
    public function getCustomerAppID()
    {
      return $this->CustomerAppID;
    }

    /**
     * @param TextShort $CustomerAppID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Identification
     */
    public function setCustomerAppID($CustomerAppID)
    {
      $this->CustomerAppID = $CustomerAppID;
      return $this;
    }

    /**
     * @return TrackingID
     */
    public function getConversationID()
    {
      return $this->ConversationID;
    }

    /**
     * @param TrackingID $ConversationID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Identification
     */
    public function setConversationID($ConversationID)
    {
      $this->ConversationID = $ConversationID;
      return $this;
    }

    /**
     * @return Identifier
     */
    public function getMessageID()
    {
      return $this->MessageID;
    }

    /**
     * @param Identifier $MessageID
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Identification
     */
    public function setMessageID($MessageID)
    {
      $this->MessageID = $MessageID;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Identification
     */
    public function setTimeStamp(\DateTime $TimeStamp = null)
    {
      if ($TimeStamp == null) {
       $this->TimeStamp = null;
      } else {
        $this->TimeStamp = $TimeStamp->format(\DateTime::ATOM);
      }
      return $this;
    }

}