<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <anodal@reloquest.com>
 * Date: 11/1/18
 * Time: 10:07 PM
 */

namespace App\IntegrationHub\Vendors\Sabre;


use App\IntegrationHub\Contracts\IPropertyProvider;
use App\IntegrationHub\Proxy;
use App\IntegrationHub\Traits\ProxyTrait;
use App\IntegrationHub\Utils\XMLSerializer;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\AvailRequestSegment;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\Criterion;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\GuestCounts;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\HotelRef;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\HotelSearchCriteria;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\OTA_HotelAvailRQ;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\OTA_HotelAvailRS;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\OTA_HotelAvailService;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\SessionCreateRQ;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\SessionCreateRQService;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\SessionCreateRS;
use App\IntegrationHub\Vendors\Sabre\SoapMap\OTA_HotelAvailRQ\TimeSpan;
use Illuminate\Support\Facades\Log;
use Monolog\Logger;
use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Generator;

class PropertyProxy extends Proxy implements IPropertyProvider
{
    use ProxyTrait;

    /** @var string */
    protected $endpoint;
    /** @var string */
    protected $organization;

    protected $username;

    protected $password;

    protected $domain;

    /** @var \Illuminate\Log\Logger */
    protected $logger;

    const WSDL_CREATE_SESSION = "http://webservices.sabre.com/wsdl/sabreXML1.0.00/usg/SessionCreateRQ.wsdl";
    const WSDL_OTA_HOTELAVAIL = "http://webservices.sabre.com/wsdl/tpfc/OTA_HotelAvailLLS2.3.0RQ.wsdl";
    const  token = "Shared/IDL:IceSess\/SessMgr:1\.0.IDL/Common/!ICESMS\/ACPCRTD!ICESMSLB\/CRT.LB!1541737629814!171198!262145";

    /**
     * PropertyProxy constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->config = $config;
        $this->logger = Log::channel('sabre');

        //TODO put a conditional here based on the environment
        $this->endpoint = $this->getConfigValue($config, 'soap.dev.endpoint', true, '');
        $this->username = $this->getConfigValue($config, 'soap.dev.username', true, '');
        $this->password = $this->getConfigValue($config, 'soap.dev.password', true, '');
        $this->organization = $this->getConfigValue($config, 'soap.dev.organization', true, '');
        $this->domain = $this->getConfigValue($config, 'soap.dev.domain', true, '');
    }

    private function getOptions()
    {
        return [
            "uri" => $this->endpoint,
            "location" => $this->endpoint,
            "encoding" => "utf-8",
            "trace" => 1,
            'cache_wsdl' => WSDL_CACHE_NONE
        ];
    }

    /**
     * @inheritDoc
     */
    public function search($params)
    {
        $service = new OTA_HotelAvailService($this->getOptions(), self::WSDL_OTA_HOTELAVAIL);
        try {
            $service->__setSoapHeaders([$this->createMessageHeader("OTA_HotelAvailLLSRQ"), $this->createSecurityHeader()]);
            $version = $this->getOtaAvailVersion();
            $guests = new GuestCounts(2);
            $geoRefNode = new HotelRef();
            $geoRefNode->setUnitOfMeasure("MI")->setLatitude(25.76)->setLongitude(-80.18);
            $criterion = new Criterion();
            $criterion->setHotelRef($geoRefNode);
            $criteria = new HotelSearchCriteria($criterion, 100);
            $dates = new TimeSpan('2019-01-20', '2019-01-19');
            $availabilitySegment = new AvailRequestSegment();
            $availabilitySegment->setGuestCounts($guests)->setHotelSearchCriteria($criteria)->setTimeSpan($dates);
            $request = new OTA_HotelAvailRQ($availabilitySegment, true, new \DateTime(), $version);
            /** @var OTA_HotelAvailRS $response */
            $response = $service->OTA_HotelAvailRQ($request);
            return $response;
        } catch (\Exception $e) {
            dd($service->__getLastRequest(),$service->__getLastResponse());
        }

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
     * Generate the WSDL types for availability session
     */
    public function generateOTAvailWsdlTypeClasses()
    {
        $generator = new Generator();
        $generator->generate(
            new Config(array(
                'inputFile' => self::WSDL_OTA_HOTELAVAIL,
                'outputDir' => dirname(__FILE__) . '/SoapMap/OTA_HotelAvailRQ',
                'namespaceName' => "App\\IntegrationHub\\Vendors\\Sabre\\SoapMap\\OTA_HotelAvailRQ",
                'constructorParamsDefaultToNull' => true,
            ))
        );
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

}