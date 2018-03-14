<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/9/18
 * Time: 10:14 PM
 */


namespace ladonlabs\sabrehotel;


use ladonlabs\sabrehotel\Utils\XmlTrait;
use SoapClient,SoapVar,SoapHeader;

class SabreClient
{
    use XmlTrait;

    private $securityToken;

    /** @var Context */
    private $context;

    private $lastInFlow;

    public function __construct(Context $context)
    {
        $this->context = $context;
        $this->lastInFlow = true;
    }


    /**
     * Request a valid auth token
     *
     * @return mixed
     */
    public function createSession()
    {

        $client = new SoapClient($this->context->getConfiguration('soap.create_session_wsdl', true),
            array("uri" => $this->context->getConfiguration('soap.endpoint', true),
                "location" => $this->context->getConfiguration('soap.endpoint', true),
                "encoding" => "utf-8",
                "trace" => true,
                'cache_wsdl' => WSDL_CACHE_NONE));
        $responseHeaders = NULL;

        try {
            $response = $client->__soapCall("SessionCreateRQ",
                $this->createOpenSessionRequestBody(),
                null,
                array($this->createMessageHeader("SessionCreateRQ"),
                    $this->createSecurityAuthHeader()),
                $responseHeaders);
        } catch (SoapFault $e) {
            dump($e);
            exit;
        }
        $this->context->setAuthToken($responseHeaders["Security"]);
        return $responseHeaders["Security"];
    }


    /**
     * Close session invalidating current token
     * @return mixed
     */
    public function closeSession()
    {
        $client = new SoapClient($this->context->getConfiguration('soap.close_session_wsdl', true),
            array("uri" => $this->context->getConfiguration('soap.endpoint', true),
                "location" => $this->context->getConfiguration('soap.endpoint', true),
                "encoding" => "utf-8",
                "trace" => true,
                'cache_wsdl' => WSDL_CACHE_NONE));

        try {
            $result = $client->__soapCall("SessionCloseRQ",
                $this->createCloseSessionRequestBody(),
                null,
                array($this->createMessageHeader("SessionCloseRQ"),
                    $this->createSecurityCloseAndIgnoreHeader()));
            $this->context->setAuthToken(null);
        } catch (SoapFault $e) {
            var_dump($e);
        }

        return $result;
    }

    /**
     * Ignores any change
     */
    public function ignore()
    {
        try {
            $client = new SoapClient($this->context->getConfiguration('soap.ignore_transaction_wsdl', true),
                array("uri" => $this->context->getConfiguration('soap.endpoint', true),
                    "location" => $this->context->getConfiguration('soap.endpoint', true),
                    "encoding" => "utf-8",
                    "trace" => true,
                    'cache_wsdl' => WSDL_CACHE_NONE));
            $client->__soapCall("IgnoreTransactionRQ",
                $this->createRequestBodyForIgnore(),
                null,
                array($this->createMessageHeader("IgnoreTransactionLLSRQ"),
                    $this->createSecurityCloseAndIgnoreHeader()));
        } catch (SoapFault $e) {
            dump($e);
        }

    }

    /**
     * Ignores previous changes and close current session
     */
    private function ignoreAndCloseSession()
    {
        $this->ignore();
        $this->closeSession();
    }

    /**
     * Create Request for ignore
     * @return array
     */
    private function createRequestBodyForIgnore()
    {
        $result = array("IgnoreTransactionRQ" => array(
            "_attributes" => array("Version" => $this->context->getConfiguration('soap.ignore_transaction_rq_version', true))
        )
        );
        return $result;
    }

    /**
     * @return array
     */
    private function createCloseSessionRequestBody()
    {

        $result = array("SessionCloseRQ" => array(
            "POS" => array(
                "Source" => array(
                    "PseudeCityCode" => $this->context->getConfiguration('soap.ipcc', true)
                )
            )
        ));

        return $result;
    }

    /**
     * @return SoapHeader
     */
    private function createSecurityCloseAndIgnoreHeader()
    {

        $securityArray = array(
            "BinarySecurityToken" => $this->context->getAuthToken()
        );
        return new SoapHeader("http://schemas.xmlsoap.org/ws/2002/12/secext", "Security", $securityArray, 1);
    }

    /**
     * @return SoapHeader
     */
    private function createSecurityAuthHeader()
    {
        $securityArray = array(
            "UsernameToken" => array(
                "Username" => $this->context->getConfiguration('soap.username', true),
                "Password" => $this->context->getConfiguration('soap.password', true),
                "Domain" => $this->context->getConfiguration('soap.domain', true),
                "Organization" => $this->context->getConfiguration('soap.ipcc', true)
            )
        );
        return new SoapHeader("http://schemas.xmlsoap.org/ws/2002/12/secext", "Security", $securityArray, 1);
    }

    /**
     * @param $actionString
     * @return SoapHeader
     */
    public function createMessageHeader($actionString)
    {
        $messageHeaderXml = $this->getMessageHeaderXml($actionString);
        $soapVar = new SoapVar($messageHeaderXml, XSD_ANYXML, null, null, null);
        return new SoapHeader("http://www.ebxml.org/namespaces/messageHeader", "MessageHeader", $soapVar, 1);
    }

    /**
     * @param $actionString
     * @return mixed
     */
    private function getMessageHeaderXml($actionString)
    {
        $messageHeader = array("MessageHeader" => array(
            "_namespace" => "http://www.ebxml.org/namespaces/messageHeader",
            "From" => array("PartyId" => "sample.url.of.sabre.client.com"),
            "To" => array("PartyId" => "webservices.sabre.com"),
            "CPAId" => "UC6I",
            "ConversationId" => "sws",
            "Action" => $actionString,
            "MessageData" => array(
                "MessageId" => "1000",
                "Timestamp" => "2001-02-15T11:15:12Z",
                "TimeToLive" => "2001-02-15T11:15:12Z"
            )
        )
        );

        return $this->generateValidXmlFromArray($messageHeader);
    }

    /**
     * @return array
     */
    private function createOpenSessionRequestBody()
    {
        $result = array("SessionCreateRQ" => array(
            "POS" => array(
                "Source" => array(
                    "PseudeCityCode" => $this->context->getConfiguration('soap.ipcc', true)
                )
            )
        ));
        return $result;
    }

    /**
     * @return string
     */
    private function createSecurityHeader()
    {
        $securityNode = $this->context->getAuthToken();
        $request = array("Security" => array(
            "_namespace" => "http://schemas.xmlsoap.org/ws/2002/12/secext",
            "BinarySecurityToken" => array(
                "_attributes" => array("EncodingType" => "Base64Binary", "valueType" => "String"),
                "_value" => $securityNode->BinarySecurityToken
            )
        )
        );

        return $this->generateValidXmlFromArray($request);
    }

    /**
     * @param $request
     * @return mixed
     */
    public function doCall($request)
    {
        if (!$this->context->isSessionValid()) {
            $this->createSession();
        }

        $result = $this->Call($this->getMessageHeaderXml($this->actionName) . $this->createSecurityHeader(), $request, $this->actionName);

        if ($this->lastInFlow) {
            $this->ignoreAndCloseSession();
            $this->context->setAuthToken(null);
        }

        return $result;
    }

    /**
     * Executes a call to the sabre api
     *
     * @param $headersXml
     * @param $body
     * @param $action
     * @return mixed
     */
    public function call($headersXml, $body, $action)
    {
        $xml_post_string = '<SOAP-ENV:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/">'
            . '<SOAP-ENV:Header>'
            . $headersXml
            . '</SOAP-ENV:Header>'
            . '<SOAP-ENV:Body>'
            . $body
            . '</SOAP-ENV:Body>'
            . '</SOAP-ENV:Envelope>';

        $headers = array(
            "Content-type: text/xml;charset=\"utf-8\"",
            "Accept: text/xml",
            "Cache-Control: no-cache",
            "Pragma: no-cache",
            "SOAPAction: " . $action,
            "Content-length: " . strlen($xml_post_string)
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_URL, $this->context->getConfiguration('soap.endpoint', true));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->context->getConfiguration('soap.client.timeout', true));
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_VERBOSE, $this->context->getConfiguration('soap.client.debug', true));
        curl_setopt($ch, CURLOPT_HEADER, $this->context->getConfiguration('soap.client.debug', true));

        $response = curl_exec($ch);

        if (
            $this->context->getConfiguration('soap.logs_enabled', true)
            &&
            strlen($this->context->getConfiguration('soap.log_file', true)) > 0
        ) {
            $this->logCall($action, $xml_post_string, $response);
        }

        if (!$response) {
            throw CommunicationFailedException::communicationFailed();
        }
        curl_close($ch);


        return $response;

    }

    /**
     * @param boolean $lastInflow
     */
    public function setLastInFlow($lastInflow)
    {
        $this->lastInFlow = $lastInflow;
    }

    /**
     * @param $action
     * @param $request
     * @param $response
     */
    public function logCall($action, $request, $response)
    {

        $filename = $this->context->getConfiguration('soap.log_file', true);
        file_put_contents($filename, $request, FILE_APPEND);
        file_put_contents($filename, $response, FILE_APPEND);
    }
}