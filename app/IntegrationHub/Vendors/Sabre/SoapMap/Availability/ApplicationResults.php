<?php

namespace App\IntegrationHub\Vendors\Sabre\SoapMap\Availability;

class ApplicationResults extends Results
{

    /**
     * @var ProblemInformation[] $Success
     */
    protected $Success = null;

    /**
     * @var ProblemInformation[] $Error
     */
    protected $Error = null;

    /**
     * @var ProblemInformation[] $Warning
     */
    protected $Warning = null;

    /**
     * @var CompletionCodes $status
     */
    protected $status = null;

    /**
     * @param CompletionCodes $status
     */
    public function __construct($status = null)
    {
      $this->status = $status;
    }

    /**
     * @return ProblemInformation[]
     */
    public function getSuccess()
    {
      return $this->Success;
    }

    /**
     * @param ProblemInformation[] $Success
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ApplicationResults
     */
    public function setSuccess(array $Success = null)
    {
      $this->Success = $Success;
      return $this;
    }

    /**
     * @return ProblemInformation[]
     */
    public function getError()
    {
      return $this->Error;
    }

    /**
     * @param ProblemInformation[] $Error
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ApplicationResults
     */
    public function setError(array $Error = null)
    {
      $this->Error = $Error;
      return $this;
    }

    /**
     * @return ProblemInformation[]
     */
    public function getWarning()
    {
      return $this->Warning;
    }

    /**
     * @param ProblemInformation[] $Warning
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ApplicationResults
     */
    public function setWarning(array $Warning = null)
    {
      $this->Warning = $Warning;
      return $this;
    }

    /**
     * @return CompletionCodes
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param CompletionCodes $status
     * @return \App\IntegrationHub\Vendors\Sabre\SoapMap\Availability\ApplicationResults
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
