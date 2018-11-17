<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class DSAKeyValueType
{

    /**
     * @var CryptoBinary $P
     */
    protected $P = null;

    /**
     * @var CryptoBinary $Q
     */
    protected $Q = null;

    /**
     * @var CryptoBinary $G
     */
    protected $G = null;

    /**
     * @var CryptoBinary $Y
     */
    protected $Y = null;

    /**
     * @var CryptoBinary $J
     */
    protected $J = null;

    /**
     * @var CryptoBinary $Seed
     */
    protected $Seed = null;

    /**
     * @var CryptoBinary $PgenCounter
     */
    protected $PgenCounter = null;

    /**
     * @param CryptoBinary $P
     * @param CryptoBinary $Q
     * @param CryptoBinary $Y
     * @param CryptoBinary $Seed
     * @param CryptoBinary $PgenCounter
     */
    public function __construct($P = null, $Q = null, $Y = null, $Seed = null, $PgenCounter = null)
    {
      $this->P = $P;
      $this->Q = $Q;
      $this->Y = $Y;
      $this->Seed = $Seed;
      $this->PgenCounter = $PgenCounter;
    }

    /**
     * @return CryptoBinary
     */
    public function getP()
    {
      return $this->P;
    }

    /**
     * @param CryptoBinary $P
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\DSAKeyValueType
     */
    public function setP($P)
    {
      $this->P = $P;
      return $this;
    }

    /**
     * @return CryptoBinary
     */
    public function getQ()
    {
      return $this->Q;
    }

    /**
     * @param CryptoBinary $Q
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\DSAKeyValueType
     */
    public function setQ($Q)
    {
      $this->Q = $Q;
      return $this;
    }

    /**
     * @return CryptoBinary
     */
    public function getG()
    {
      return $this->G;
    }

    /**
     * @param CryptoBinary $G
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\DSAKeyValueType
     */
    public function setG($G)
    {
      $this->G = $G;
      return $this;
    }

    /**
     * @return CryptoBinary
     */
    public function getY()
    {
      return $this->Y;
    }

    /**
     * @param CryptoBinary $Y
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\DSAKeyValueType
     */
    public function setY($Y)
    {
      $this->Y = $Y;
      return $this;
    }

    /**
     * @return CryptoBinary
     */
    public function getJ()
    {
      return $this->J;
    }

    /**
     * @param CryptoBinary $J
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\DSAKeyValueType
     */
    public function setJ($J)
    {
      $this->J = $J;
      return $this;
    }

    /**
     * @return CryptoBinary
     */
    public function getSeed()
    {
      return $this->Seed;
    }

    /**
     * @param CryptoBinary $Seed
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\DSAKeyValueType
     */
    public function setSeed($Seed)
    {
      $this->Seed = $Seed;
      return $this;
    }

    /**
     * @return CryptoBinary
     */
    public function getPgenCounter()
    {
      return $this->PgenCounter;
    }

    /**
     * @param CryptoBinary $PgenCounter
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\DSAKeyValueType
     */
    public function setPgenCounter($PgenCounter)
    {
      $this->PgenCounter = $PgenCounter;
      return $this;
    }

}
