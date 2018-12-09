<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 11/1/18
 * Time: 10:07 PM
 */

namespace App\IntegrationHub\Vendors\Sabre;

use App\Http\Outputs\Common\Hotel\AvailabilityResponse;
use App\IntegrationHub\Contracts\IPropertyProvider;
use App\IntegrationHub\ResourceProxy;
use App\IntegrationHub\Traits\ResourceProxyTrait;
use App\IntegrationHub\Traits\SabrePropertyTrait;
use App\IntegrationHub\Vendors\Sabre\Activities\Hotel\OTA_HotelAvailRQ;
use App\IntegrationHub\Utils\SoapClientWrapper;
use App\IntegrationHub\Utils\XMLSerializer;
use App\IntegrationHub\Vendors\Sabre\Activities\Hotel\SearchActivity;
use App\User;
use Illuminate\Cache\Repository as Cache;
use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Generator;
use Illuminate\Log\Logger;

class SabrePropertyProxy extends ResourceProxy implements IPropertyProvider
{
    use ResourceProxyTrait,SabrePropertyTrait;

    /** @var string */
    protected $endpoint;
    /** @var string */
    protected $organization;

    protected $username;

    protected $password;

    protected $domain;
    /** @var User */
    protected $user;

    /** @var \Illuminate\Log\Logger */
    protected $logger;
    /** @var Cache */
    protected $cacheManager;

    const WSDL_CREATE_SESSION = "http://webservices.sabre.com/wsdl/sabreXML1.0.00/usg/SessionCreateRQ.wsdl";
    const WSDL_OTA_HOTEL_AVAIL = __DIR__."/wsdls/OTA_HotelAvail/OTA_HotelAvailLLS2.3.0RQ_1.wsdl";
    const WSDL_HOTEL_PROPERTY_DESCRIPTION = "http://webservices.sabre.com/wsdl/tpfc/HotelPropertyDescriptionLLS2.3.0RQ.wsdl";
    const WSDL_HOTEL_RATE_DESCRIPTION = "http://webservices.sabre.com/wsdl/tpfc/HotelRateDescriptionLLS2.3.0RQ.wsdl";
    const WSDL_PASSENGER_NAME_RECORD = "http://files.developer.sabre.com/wsdl/sabreXML1.0.00/ServicesPlatform/PassengerDetails3.3.0RQ.wsdl";
    const WSDL_HOTEL_RES = "http://webservices.sabre.com/wsdl/tpfc/OTA_HotelResLLS2.2.0RQ.wsdl";
    const WSDL_END_TRANSACTION = "http://webservices.sabre.com/wsdl/tpfc/EndTransactionLLS2.0.9RQ.wsdl";
    const WSDL_GET_RESERVATION = "http://files.developer.sabre.com/wsdl/sabreXML1.0.00/pnrservices/GetReservation_1.19.0.wsdl";
    const WSDL_CANCEL_RESERVATION = "http://webservices.sabre.com/wsdl/tpfc/OTA_CancelLLS2.0.2RQ.wsdl";


    const  token = "Shared/IDL:IceSess\/SessMgr:1\.0.IDL/Common/!ICESMS\/ACPCRTD!ICESMSLB\/CRT.LB!1544332336152!5724271!262145";


    /**
     * SabrePropertyProxy constructor.
     * @param array $config
     * @param User $user
     * @param Logger $sabreLogger
     * @param Cache $cacheManager
     */
    public function __construct(array $config=[],User $user,Logger $sabreLogger,Cache $cacheManager)
    {
        $this->user = $user;
        $this->config = $config;
        $this->logger = $sabreLogger;
        $this->cacheManager =$cacheManager;

        //TODO put a conditional here based on the environment
        $this->endpoint = $this->getConfigValue($config, 'soap.dev.endpoint', true, '');
        $this->username = $this->getConfigValue($config, 'soap.dev.username', true, '');
        $this->password = $this->getConfigValue($config, 'soap.dev.password', true, '');
        $this->organization = $this->getConfigValue($config, 'soap.dev.organization', true, '');
        $this->domain = $this->getConfigValue($config, 'soap.dev.domain', true, '');
    }

    /**
     * Returl a list of all wsdl address
     * @return array
     */
    public function getWsdlSources(){
        return [
            self::WSDL_CREATE_SESSION,
            self::WSDL_OTA_HOTEL_AVAIL,
            self::WSDL_HOTEL_PROPERTY_DESCRIPTION,
            self::WSDL_HOTEL_RATE_DESCRIPTION,
            self::WSDL_PASSENGER_NAME_RECORD,
            self::WSDL_HOTEL_RES,
            self::WSDL_END_TRANSACTION,
            self::WSDL_GET_RESERVATION,
            self::WSDL_CANCEL_RESERVATION
        ];
    }

    /**
     * Return the SOAP Options used during integration
     * @return array
     */
    private function getOptions()
    {
        return [
            "uri" => $this->endpoint,
            "location" => $this->endpoint,
            "encoding" => "utf-8",
            'soap_version' => SOAP_1_1,
            "trace" => 1,
            'cache_wsdl' => WSDL_CACHE_NONE
        ];
    }

    /**
     * @param $params
     * @return AvailabilityResponse
     */
    public function search($params): AvailabilityResponse
    {
        /** @var AvailabilityResponse $response */
        $response = (new AvailabilityResponse())->setSuccess(true);

        try {
            $service = new SearchActivity(self::WSDL_OTA_HOTEL_AVAIL, $this->getOptions(), $this,$params);
            $service->__setSoapHeaders([$this->createMessageHeader("OTA_HotelAvailLLSRQ"), $this->createSecurityHeader()]);
            $response->setProperties($service->getResponse());
        } catch (\Exception $e) {
            $response->setSuccess(false)->setErrors($this->formatException($e));
        }
        return $response;
    }



    /**
     * @inheritDoc
     */
    public function getProperty($id)
    {
        // TODO: Implement getProperty() method.
    }

    /**
     * @inheritDoc
     */
    public function getRates($params)
    {
        // TODO: Implement getRates() method.
    }

    /**
     * @inheritDoc
     */
    public function createReservation($params)
    {
        // TODO: Implement createReservation() method.
    }

    /**
     * @inheritDoc
     */
    public function retrieveReservation($id)
    {
        // TODO: Implement retrieveReservation() method.
    }

    /**
     * @inheritDoc
     */
    public function updateReservation($params)
    {
        // TODO: Implement updateReservation() method.
    }

    /**
     * @inheritDoc
     */
    public function cancelReservation($id)
    {
        // TODO: Implement cancelReservation() method.
    }



    /**
     * Generate all mapping types from wsdl resources
     */
    public function generateWsdlTypeClasses()
    {
        $generator = new Generator();
        $wsdls=$this->getWsdlSources();

        $config = new Config(array(
            'inputFile'=>null,
            'outputDir' => dirname(__FILE__) . '/SoapMap',
            'namespaceName' => "App\\IntegrationHub\\Vendors\\Sabre\\SoapMap",
            'constructorParamsDefaultToNull' => true,
            'sharedTypes'=>true,
            'soapClientClass'=>"\\App\\IntegrationHub\\Utils\\SoapClientWrapper"
        ));

        foreach ($wsdls as $ws){
            try{
                $config->set('inputFile',$ws);
                $generator->generate($config);
                unlink($config->get('outputDir') . '/autoload.php');
            }catch(\Exception $e){
               dump("Error generating wsdl types for input file: {$ws}, error text: {$e->getMessage()}, {$e->getFile()},{$e->getLine()}");
            }
        }

    }


    /**
     * Creates the Authentication header necessary for communication
     * @return SoapHeader
     */
    private function createSecurityAuthHeader()
    {
        $securityArray = array(
            "UsernameToken" => array(
                "Username" => $this->username,
                "Password" => $this->password,
                "Domain" => $this->domain,
                "Organization" => $this->organization
            )
        );
        return new \SoapHeader("http://schemas.xmlsoap.org/ws/2002/12/secext", "Security", $securityArray, 1);
    }

    /**
     *  Attach to every request the security header containing the previously obtained token
     * @return \SoapHeader
     */
    private function createSecurityHeader()
    {

        $request = array("Security" => array(
            "_namespace" => "http://schemas.xmlsoap.org/ws/2002/12/secext",
            "BinarySecurityToken" => array(
                "_attributes" => array("EncodingType" => "Base64Binary", "valueType" => "String"),
                "_value" => $this->createSession()
            )
        )
        );


        $securityHeader = XMLSerializer::generateValidXmlFromArray($request);
        $soapVar = new \SoapVar($securityHeader, XSD_ANYXML, null, null, null);
        return new \SoapHeader("http://schemas.xmlsoap.org/ws/2002/12/secext", "Security", $soapVar, 1);
    }

    /**
     * This function generates all the message headers to handle any call
     * @param $actionName
     * @param bool $includeServiceNode
     * @return \SoapHeader
     */
    private function createMessageHeader($actionName, $includeServiceNode = false)
    {
        $messageHeader = array("MessageHeader" => array(
            "_namespace" => "http://www.ebxml.org/namespaces/messageHeader",
            "From" => array("PartyId" => "sample.url.of.sabre.client.com"),
            "To" => array("PartyId" => "webservices.sabre.com"),
            "CPAId" => $this->organization,
            "ConversationId" => "sws",
            "Action" => $actionName,
            "MessageData" => array(
                "MessageId" => "1000",
                "Timestamp" => "2001-02-15T11:15:12Z",
                "TimeToLive" => "2001-02-15T11:15:12Z"
            )
        )
        );
        if ($includeServiceNode) {
            $messageHeader["MessageHeader"]["Service"] = $actionName;
        }

        $messageHeaderXml = XMLSerializer::generateValidXmlFromArray($messageHeader);
        $soapVar = new \SoapVar($messageHeaderXml, XSD_ANYXML, null, null, null);
        return new \SoapHeader("http://www.ebxml.org/namespaces/messageHeader", "MessageHeader", $soapVar, 1);
    }


    /**
     * Request a valid auth token
     * @return null
     */
    public function createSession()
    {
        $wsdl = __DIR__ . '/wsdls/SessionCreateRQ/SessionCreateRQ.wsdl';
        $client = new \SoapClient($wsdl,
            array(
                "uri" => $this->endpoint,
                "location" => $this->endpoint,
                "encoding" => "utf-8",
                "trace" => 1,
                'cache_wsdl' => WSDL_CACHE_NONE
            ));
        $responseHeaders = NULL;
        $body = array("SessionCreateRQ" => array(
            "POS" => array(
                "Source" => array(
                    "PseudeCityCode" => $this->organization
                )
            )
        ));

        $response = $client->__soapCall("SessionCreateRQ",
            $body,
            null,
            array($this->createMessageHeader("SessionCreateRQ"),
                $this->createSecurityAuthHeader()),
            $responseHeaders);


        return $responseHeaders["Security"]->BinarySecurityToken ?? null;
    }

    /**
     * Return the version for the endpoint
     * @return mixed|null
     */
    public function getOtaAvailVersion()
    {
        if ($this->getMode() == self::MODE_PROD) {
            return $this->getConfigValue($this->config, 'soap.prod.ota_hotel_avail_rq_version', true);
        }
        return $this->getConfigValue($this->config, 'soap.dev.ota_hotel_avail_rq_version', true);
    }

    /**
     * Transform an Exception object into an api readable array
     * @param \Exception $e
     * @return array
     */
    private function formatException(\Exception $e){

        $error = [
            'code'=>$e->getCode(),
            'error'=>$e->getMessage(),
            'line'=>$e->getLine(),
            'file'=>$e->getFile()
        ];
        if($e instanceof \SoapFault){
            $error['code']= $e->faultcode;
        }
        return $error;
    }

}