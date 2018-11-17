<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class Description
{

    /**
     * @var string $_
     */
    protected $_ = null;

    /**
     * @var language $lang
     */
    protected $lang = null;

    /**
     * @param string $_
     * @param language $lang
     */
    public function __construct($_ = null, $lang = null)
    {
      $this->_ = $_;
      $this->lang = $lang;
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
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Description
     */
    public function set_($_)
    {
      $this->_ = $_;
      return $this;
    }

    /**
     * @return language
     */
    public function getLang()
    {
      return $this->lang;
    }

    /**
     * @param language $lang
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\Description
     */
    public function setLang($lang)
    {
      $this->lang = $lang;
      return $this;
    }

}
