<?php
/**
 * Created by PhpStorm.
 * User: Antonio Nodal
 * Email: <antonio.nodal88@gmail.com>
 * Date: 3/13/18
 * Time: 9:16 PM
 */

namespace ladonlabs\sabrehotel\Utils;


trait XmlTrait
{
    /**
     * @param $array
     * @param string $node_block
     * @param string $node_name
     * @return string
     */
    public  function generateValidXmlFromArray($array, $node_block = 'nodes', $node_name = 'node')
    {
        $xml = $this->generateXmlFromArray($array, $node_name);
        return $xml;
    }

    /**
     * @param $array
     * @param $node_name
     * @return string
     */
    public  function generateXmlFromArray($array, $node_name)
    {
        $xml = '';

        if ((is_array($array) || is_object($array))) {
            foreach ($array as $key => $value) {
                if (is_numeric($key)) {
                    $key = $node_name;
                }
                if ($key != '_namespace' && $key != '_attributes' && $key != '_value') {
                    $xml .= '<' . $key . self::generateAttributesFromArray($value)
                        . $this->generateNamespace($value)
                        . '>'
                        . $this->generateXmlFromArray($value, $node_name) . '</' . $key . '>';
                }
                if ($key == '_value') {
                    $xml = htmlspecialchars($value, ENT_QUOTES);
                }
            }
        } else {
            $xml = htmlspecialchars($array, ENT_QUOTES);
        }

        return $xml;
    }

    /**
     * @param $array
     * @return string
     */
    private  function generateAttributesFromArray($array)
    {
        if (isset($array['_attributes']) && is_array($array['_attributes'])) {

            $attributes = ' ';
            foreach ($array['_attributes'] as $key => $value) {
                $attributes .= $key . '="' . $value . '" ';
            }
            return $attributes;
        } else {
            return '';
        }
    }

    /**
     * @param $namespace
     * @return string
     */
    private  function generateNamespace($namespace)
    {
        if (isset($namespace['_namespace']) && $namespace['_namespace']) {
            return ' xmlns="' . $namespace['_namespace'] . '"';
        } else {
            return '';
        }
    }

    /******************************** Common FUnction to Handle Responses ******************************/

    /**
     * Return true if given response was success and false if not
     * @param \SimpleXMLElement $response
     * @return bool
     */
    public function isSuccess(\SimpleXMLElement $response, $ns = 'http://services.sabre.com/STL/v01')
    {
        return isset($response->children($ns)->ApplicationResults->Success);
    }

    /**
     * Returns the time mark of the response
     * @param \SimpleXMLElement $response
     * @param string $ns
     * @return null|string
     */
    public function getTimesTamp(\SimpleXMLElement $response, $ns = 'http://services.sabre.com/STL/v01')
    {
        if ($this->isSuccess($response, $ns)) {
            return $response->children($ns)->ApplicationResults->Success->attributes()->timeStamp->__toString();
        }
        return null;
    }

    /**
     * Determine if the response is valid
     * @param \SimpleXMLElement $response
     * @return bool
     */
    public function isValidResponse(\SimpleXMLElement $response, $elementName, $ns)
    {
        return isset($response->children('http://schemas.xmlsoap.org/soap/envelope/')->Body->children($ns)->{$elementName});
    }

    /**
     * Returns the status of the given response
     * @param \SimpleXMLElement $response
     * @return string
     */
    public function getStatus(\SimpleXMLElement $response, $ns = "http://services.sabre.com/STL/v01")
    {
        return $response->children($ns)->ApplicationResults->attributes()->status->__toString();
    }


    /**
     * @param $xmlResponseText
     * @param $ns
     * @param $nodeName
     * @return \SimpleXMLElement
     */
    public function getValidXmlResponse($xmlResponseText, $ns, $nodeName)
    {
        try {
            $response = simplexml_load_string($xmlResponseText);
        } catch (\Exception $e) {
            dump($e);
            exit;
            throw CommunicationFailedException::invalidXmlDocument($xmlResponseText);
        }

        if (!$this->isValidResponse($response, $nodeName, $ns)) {
            throw CommunicationFailedException::invalidResponse($xmlResponseText);
        }
        return $response->children('http://schemas.xmlsoap.org/soap/envelope/')->Body->children($ns)->{$nodeName};

    }

    /**
     * Returns a list of errors of the given response
     * Error types are:
     * Application: <Inside the Response>
     * BusinessLogic: <Inside the Response>
     * Transport: <SoapFault>
     * Validation: <SoapFault>
     * @param \SimpleXMLElement $response
     * @param string $type
     * @param string $ns
     * @return array
     */
    public function handleErrors(\SimpleXMLElement $response, $type = "Error", $ns = "http://services.sabre.com/STL/v01")
    {
        $errors = [];
        $ar = $response->children($ns)->ApplicationResults;
        if (isset($ar->$type)) {
            foreach ($ar->$type as $errorItem) {
                $ssr = $errorItem->SystemSpecificResults;
                $shortText = isset($ssr->ShortText) ? $ssr->ShortText->__toString() : "";
                $error['shortText'] = $shortText;
                $error['type'] = $errorItem->attributes()->type->__toString();
                $error['messages'] = [];
                foreach ($ssr->Message as $errMesg) {
                    $msg['code'] = isset($errMesg->attributes()->code) ? $errMesg->attributes()->code->__toString() : -1;
                    $msg['text'] = $errMesg->__toString();
                    $error['messages'][] = $msg;
                }
                $errors[] = $error;
            }
        }


        return $errors;
    }

    /**
     * @param $root
     * @param $path
     * @param null $default_value
     * @return \SimpleXMLElement|null
     */
    public function getNode($root, $path, $default_value = null)
    {
        if (!$root) {
            return $default_value;
        }
        $pathElements = explode('.', $path);
        $value = $root;
        foreach ($pathElements as $pe) {
            if (!isset($value->{$pe})) {
                return $default_value;
            }
            $value = $value->{$pe};
        }

        return $value;
    }

    /**
     * @param $node
     * @param $path
     * @param null $default
     * @return null|string
     */
    public function getNodeValue($node, $path, $default = null)
    {
        $nodeHolder = $this->getNode($node, $path);
        if ($nodeHolder) {
            return $nodeHolder->__toString();
        }
        return $default;
    }

    /**
     * @param $root
     * @param $attrName
     * @param null $default
     * @return null|string
     */
    public function getNodeAttributeValue($root, $attrName, $default = null)
    {
        if (!($root instanceof \SimpleXMLElement))
            return $default;
        return isset($root->attributes()->$attrName) ? $root->attributes()->$attrName->__toString() : $default;
    }

    /**
     * @param $root
     * @param array $defaultStructure
     * @return array|mixed
     */
    public function getAttributesAsArray($root, $defaultStructure = [])
    {
        $attributes = $defaultStructure;
        if ($root instanceof \SimpleXMLElement) {
            $attr = (array)$root->attributes();
            $attributes = isset($attr['@attributes']) ? $attr['@attributes'] : [];
            if (!empty($defaultStructure)) {
                $attributes = array_merge($defaultStructure, $attributes);
            }
        }

        return $attributes;
    }
}