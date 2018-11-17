<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class TrackingID
{

    /**
     * @var Identifier $_
     */
    protected $_ = null;

    /**
     * @var int $seq
     */
    protected $seq = null;

    /**
     * @param Identifier $_
     * @param int $seq
     */
    public function __construct($_ = null, $seq = null)
    {
      $this->_ = $_;
      $this->seq = $seq;
    }

    /**
     * @return Identifier
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param Identifier $_
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\TrackingID
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return int
     */
    public function getSeq()
    {
      return $this->seq;
    }

    /**
     * @param int $seq
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\TrackingID
     */
    public function setSeq($seq)
    {
      $this->seq = $seq;
      return $this;
    }

}
