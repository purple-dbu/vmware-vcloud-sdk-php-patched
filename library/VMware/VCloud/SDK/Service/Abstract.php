<?php
abstract class VMware_VCloud_SDK_Service_Abstract
{
    /**
     * reprents a HTTP client object
     */
    protected $httpClient = null;

    /**
     * Set the HTTP client object to use for retrieving the feeds.  If null,
     * use the default client, the VMware_VCloud_SDK_Http_Client object.
     *
     * @param VMware_VCloud_SDK_Http_Client $httpClient
     * @return null
     * @since Version 1.0.0
     */
    final public function setHttpClient($httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Gets the HTTP client object.
     *
     * @return VMware_VCloud_SDK_Http_Client
     * @since Version 1.0.0
     */
    final public function getHttpClient()
    {
        if (!$this->httpClient) {
            $this->httpClient = new VMware_VCloud_SDK_Http_Client();
        }
        return $this->httpClient;
    }

    /**
     * Sets authentication parameters.
     *
     * @param array  $auth   In array('username'=><username>,
     *                                'password'=><password>) format
     */
    protected function setAuth($auth)
    {
        $this->httpClient->setAuth($auth);
    }

    /**
     * Sets HTTP configuration parameters.
     *
     * @param array  $config  An HTTP configuration array
     */
    protected function setConfig($config)
    {
        $this->httpClient->setConfig($config);
    }

    /**
     * Sets the API Version.
     *
     * @return VMware_VCloud_SDK_Http_Client
     * @since SDK Version 5.1.1
     */
    protected function setAPIVersion($apiVersion)
    {
        $this->httpClient->setAPIVersion($apiVersion);
    }

   /**
    * Gets the vcloud token
    *
    * @return String
    * @since API 5.1.0
    * @since SDK 5.1.0
    */
    final public function getToken()
    {
        return $this->httpClient->getVcloudToken();
    }

   /**
    * Sets the vcloud token
    *
    * @param string $vcloudToken
    * @since API 5.1.0
    * @since SDK 5.1.0
    */
    final public function setToken($vcloudToken)
    {
        $this->httpClient->setVcloudToken($vcloudToken);
    }

    /**
     * Sets HTTP configuration
     *
     * @param string $url      URL to send an HTTP request
     * @param string $type     The HTTP request Content-type
     * @param boolean $reObj   Indicates whether return a vCloud data object
     *                         (true) or response body (false)
     * @param string $return   Expected response data type name
     * @return mixed           VMware vCloud data object or response body
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function get($url, $type='', $reObj=true, $return=null)
    {
        $headers=array('Content-Type'=>$type);
        $response = $this->httpClient->get($url, $headers);
        $code = $response->getStatus();
        $body = $response->getBody();
        if (200 != $code)
        {
            throw new VMware_VCloud_SDK_Exception (
                        "GET $url failed, return code: $code, error: $body\n");
        }
        return (true === $reObj)? 
             VMware_VCloud_SDK_Helper::getObjByXml($body, $return) : $body;
    }

    /**
     * Send an HTTP POST request.
     *
     * @param string $url      URL to send an HTTP request
     * @param int $expect      Expected HTTP status code on a successful request
     * @param string $type     HTTP request Content-Type
     * @param mixed  $data     A vCloud data object which has export() method
     *                         defined, or an XML data which will be used as an
     *                         HTTP request body
     * @param string $return   Expected response data type name
     * @param string $auth     Authorization token
     * @return mixed           A VMware vCloud data object
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function post($url, $expect=null, $type=null, $data=null, $return=null, $auth=null)
    {
        $len = 0;
        if (!is_null($data))
        {
            if (method_exists($data, 'export'))
            {
                $data = $data->export();
            }
            $len = strlen($data);
        }
        $headers = array('Content-Type'=>$type,
                         'Content-Length'=>$len);
        if(!is_null($auth))
        {
                $headers = array(
                         'Authorization'=>$auth);
        }

        $response = $this->httpClient->post($url, $headers, $data);
        $code = $response->getStatus();
        $body = $response->getBody();
        if (isset($expect) && $expect != $code)
        {
            throw new VMware_VCloud_SDK_Exception ("POST $url failed, return " .
                           "code: $code, error: $body, request data:\n$data\n");
        }
        return VMware_VCloud_SDK_Helper::getObjByXml($body, $return);
    }

    /**
     * Send an HTTP PUT request.
     *
     * @param string $url   URL to send an HTTP request
     * @param int $expect   Expected HTTP status code on a successful request
     * @param string $type  HTTP request Content-Type
     * @param mixed $data   A VMware vCloud data object, which has export()
     *                      method defined, or an XML data which will be used
     *                      as HTTP request body
     * @return mixed        A VMware vCloud data object
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function put($url, $expect=null, $type=null, $data=null)
    {
        $len = 0;
        if (!is_null($data))
        {
            if (method_exists($data, 'export'))
            {
                $data = $data->export();
            }
            $len = strlen($data);
        }
        $headers = array('Content-Type'=>$type,
                         'Content-Length'=>$len);
        $response = $this->httpClient->put($url, $headers, $data);
        $code = $response->getStatus();
        $body = $response->getBody();
        if (isset($expect) && $expect != $code)
        {
            throw new VMware_VCloud_SDK_Exception ("PUT $url failed, error " .
                          "code: $code, error: $body, request data:\n$data\n");
        }
        return VMware_VCloud_SDK_Helper::getObjByXml($body);
    }

    /**
     * Send an HTTP DELETE request.
     *
     * @param string $url      URL to send an HTTP request
     * @param int    $expect   Expected HTTP status code on a successful request
     * @return VMware_VCloud_API_TaskType|null
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function delete($url, $expect=null)
    {
        $response = $this->httpClient->delete($url);
        $code = $response->getStatus();
        $body = $response->getBody();
        if (isset($expect) && $expect != $code)
        {
            throw new VMware_VCloud_SDK_Exception ("DELETE $url failed, " .
                                          "error code: $code, error: $body\n");
        }
        return VMware_VCloud_SDK_Helper::getObjByXML($body);
    }

    /**
     * Refetch the given VMware vCloud data object from vCloud.
     *
     * @param mixed $obj   A VMware vCloud data object to be refeched.
     *                     The data object should have an href attribute.
     * @return mixed       A VMware vCloud data object
     * @since Version 1.0.0
     */
    public function refetch($obj)
    {
        $class = get_class($obj);
        if (0 == preg_match('/VMware_VCloud_API_/', $class) ||
                 !method_exists($obj, 'get_href'))
        {
            throw new VMware_VCloud_SDK_Exception ("The given object is " .
                  "in class $class type, cannot invoke refetch() function.\n");
        }
        return $this->get($obj->get_href(), '', true, get_class($obj));
    }

    /**
     * Download a file and dump to specified location.
     *
     * @param string $url   Source of the file
     * @param string $dest  Destination of the file to write to
     * @param string $type  HTTP request Content-Type
     * @return null
     * @since Version 1.0.0
     */
    public function download($url, $dest, $type='application/octet-stream')
    {
        $headers = array('Content-Type'=>$type);
        $this->httpClient->download($url, $headers, $dest);
    }

    /**
     * Upload a file.
     *
     * @param string $url   Target to upload the file
     * @param string $file  Full path of a file to be uploaded
     * @param string $type  HTTP request Content-Type
     * @throws VMware_VCloud_SDK_Exception
     * @return null
     * @since Version 1.0.0
     */
    public function upload($url, $file, $type='application/octet-stream')
    {
        $headers = array('Content-Type'=>$type);
        $this->httpClient->upload($url, $headers, $file);
    }
}