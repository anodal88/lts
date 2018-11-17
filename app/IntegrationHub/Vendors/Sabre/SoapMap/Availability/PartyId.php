<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class PartyId
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var nonemptystring $type
     */
    protected $type = null;

    /**
     * @param string $_
     * @param nonemptystring $type
     */
    public function __construct($_ = null, $type = null)
    {
      $this->_ = $_;
      $this->type = $type;
    }

    /**
     * @return string
     */
    public function get_()
    {
      return $this->_;
    }

    /**
     * @param string $_
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\PartyId
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return nonemptystring
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param nonemptystring $type
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\PartyId
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
