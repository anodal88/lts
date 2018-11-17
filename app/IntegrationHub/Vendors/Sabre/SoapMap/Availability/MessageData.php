<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class MessageData
{

    /**
     * @var nonemptystring $MessageId
     */
    protected $MessageId = null;

    /**
     * @var string $Timestamp
     */
    protected $Timestamp = null;

    /**
     * @var nonemptystring $RefToMessageId
     */
    protected $RefToMessageId = null;

    /**
     * @var \DateTime $TimeToLive
     */
    protected $TimeToLive = null;

    /**
     * @var int $Timeout
     */
    protected $Timeout = null;

    /**
     * @param nonemptystring $MessageId
     * @param string $Timestamp
     * @param nonemptystring $RefToMessageId
     * @param \DateTime $TimeToLive
     * @param int $Timeout
     */
    public function __construct($MessageId = null, $Timestamp = null, $RefToMessageId = null, \DateTime $TimeToLive = null, $Timeout = null)
    {
      $this->MessageId = $MessageId;
      $this->Timestamp = $Timestamp;
      $this->RefToMessageId = $RefToMessageId;
      $this->TimeToLive = $TimeToLive ? $TimeToLive->format(\DateTime::ATOM) : null;
      $this->Timeout = $Timeout;
    }

    /**
     * @return nonemptystring
     */
    public function getMessageId()
    {
      return $this->MessageId;
    }

    /**
     * @param nonemptystring $MessageId
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\MessageData
     */
    public function setMessageId($MessageId)
    {
      $this->MessageId = $MessageId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
      return $this->Timestamp;
    }

    /**
     * @param string $Timestamp
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\MessageData
     */
    public function setTimestamp($Timestamp)
    {
      $this->Timestamp = $Timestamp;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getRefToMessageId()
    {
      return $this->RefToMessageId;
    }

    /**
     * @param nonemptystring $RefToMessageId
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\MessageData
     */
    public function setRefToMessageId($RefToMessageId)
    {
      $this->RefToMessageId = $RefToMessageId;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTimeToLive()
    {
      if ($this->TimeToLive == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TimeToLive);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TimeToLive
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\MessageData
     */
    public function setTimeToLive(\DateTime $TimeToLive)
    {
      $this->TimeToLive = $TimeToLive->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getTimeout()
    {
      return $this->Timeout;
    }

    /**
     * @param int $Timeout
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\MessageData
     */
    public function setTimeout($Timeout)
    {
      $this->Timeout = $Timeout;
      return $this;
    }

}
