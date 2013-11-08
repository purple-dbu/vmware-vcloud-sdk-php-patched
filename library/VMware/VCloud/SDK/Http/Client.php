<?php
class VMware_VCloud_SDK_Http_Client implements
      VMware_VCloud_SDK_Http_Client_Interface
{
    /**
     * Represents an HTTP_Request2 object
     */
    private $request = null;
    /**
     * User name to log into VMware vCloud
     */
    private $username = null;
    /**
     * Password to log into VMware vCloud
     */
    private $password = null;
    /**
     * HTTP_Request2 configuration parameters
     * @see HTTP_Request2 $config variable
     */
    private $config = null;
    /**
     * HTTP_Request2 configuration parameters
     * @see HTTP_Request2 $apiVersion variable
     */
    private $apiVersion = null;
    /**
     * Authentication token used for login to the session
     */
    private $authToken = null;

    /**
     * Constructor, creates a new HTTP_Request2 instance.
     */
    public function __construct()
    {
        $this->request = new HTTP_Request2();
    }

    /**
     * Set the login user name and password.
     *
     * @param array $auth   In array('username'=><username>,
     *                               'password'=><password>) format
     * @return null
     * @throws VMware_VCloud_SDK_Http_Exception
     * @since Version 1.0.0
     */
    public function setAuth($auth)
    {
        if (array_key_exists('username', $auth) &&
            array_key_exists('password', $auth))
        {
            $this->username = $auth['username'];
            $this->password = $auth['password'];
        }
        else
        {
            // require_once 'VMware/VCloud/Http/Exception.php'; // @amercier #3
            throw new VMware_VCloud_SDK_Http_Exception(
                 "'username' and 'password' are valid keys of array \$auth\n");
        }
    }

    /**
     * Set the HTTP configurations
     *
     * @param array  $config  An HTTP configuration array
     * @since Version 1.0.0
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * Set the API Version
     *
     * @param array  $apiVersion  An API Version
     * @since SDK Version 5.1.1
     */
    public function setAPIVersion($apiVersion)
    {
        $this->apiVersion = $apiVersion;
    }

    /**
     * Gets the vcloud token
     *
     * @return String
     * @since API 5.1.0
     * @since SDK 5.1.0
     */
    public function getVcloudToken()
    {
        if ($this->authToken != null)
        return $this->authToken;
        throw new VMware_VCloud_SDK_Exception("Failed the Vcloud Token \n");
    }

    /**
     * Sets the vcloud token
     *
     * @param string $vcloudToken
     * @since API 5.1.0
     * @since SDK 5.1.0
     */
    public function setVcloudToken($vcloudToken)
    {
        $this->authToken = $vcloudToken;
    }

    /**
     * Send request to vCloud server.
     *
     * @param string $url      URL to send an HTTP request
     * @param string $method   HTTP method
     * @param string $headers  HTTP headers
     * @param string $body     HTTP request body
     * @return VMware_VCloud_SDK_Http_Response_Interface   An Response object
     * @access private
     */
    private function sendRequest($url, $method, $headers=null, $body=null)
    {
        # 'Accept' header is used to identify VMware vCloud Director version
        $headers['Accept'] = VMware_VCloud_SDK_Constants::VCLOUD_ACCEPT_HEADER .
                             ';' .
                             'version=' . $this->apiVersion;
        try
        {
            $request = clone $this->request;
            if ($this->config)
            {
                $request->setConfig($this->config);
            }
            $request->setUrl($url);
            $request->setMethod($method);
            $request->setHeader($headers);
            if ($this->authToken)
            {
                $request->setHeader(VMware_VCloud_SDK_Constants::
                                        VCLOUD_AUTH_TOKEN,
                                    $this->authToken);
            }
            else
            {
                $request->setAuth($this->username, $this->password);
            }
            if ($body)
            {
                $request->setBody($body);
            }
            $response = $request->send();
            if (!$this->authToken)
            {
                $this->authToken = $response->getHeader(
                                VMware_VCloud_SDK_Constants::VCLOUD_AUTH_TOKEN);
            }
            return $response;
        }
        catch (HTTP_Request2_Exception $e)
        {
            // require_once 'VMware/VCloud/Http/Exception.php'; // @amercier #3
            throw new VMware_VCloud_SDK_Http_Exception($e->getMessage(),
                                                       $e->getCode());
        }
    }

    /**
     * Send an HTTP GET request.
     *
     * @param string $url      URL to send an HTTP request
     * @param array $headers   HTTP request headers
     * @return VMware_VCloud_SDK_Http_Response_Interface
     * @since Version 1.0.0
     */
    public function get($url, $headers=null)
    {
        return $this->sendRequest($url,
                                  HTTP_Request2::METHOD_GET,
                                  $headers);
    }

    /**
     * Send an HTTP POST request.
     *
     * @param string $url      URL to send an HTTP request
     * @param array $headers   HTTP request headers
     * @param mixed  $data     HTTP request body
     * @return VMware_VCloud_SDK_Http_Response_Interface
     * @since Version 1.0.0
     */
    public function post($url, $headers=null, $data=null)
    {
        return $this->sendRequest($url,
                                  HTTP_Request2::METHOD_POST,
                                  $headers,
                                  $data);
    }

    /**
     * Send an HTTP PUT request.
     *
     * @param string $url      URL to send an HTTP request
     * @param array $headers   HTTP request headers
     * @param mixed  $data     HTTP request body
     * @return VMware_VCloud_SDK_Http_Response_Interface
     * @since Version 1.0.0
     */
    public function put($url, $headers=null, $data=null)
    {
        return $this->sendRequest($url,
                                  HTTP_Request2::METHOD_PUT,
                                  $headers,
                                  $data);
    }

    /**
     * Send an HTTP DELETE request.
     *
     * @param string $url      URL to send an HTTP request
     * @return VMware_VCloud_SDK_Http_Response_Interface|null
     * @since Version 1.0.0
     */
    public function delete($url)
    {
        return $this->sendRequest($url,
                                  HTTP_Request2::METHOD_DELETE);
    }

    /**
     * Download a file and dump to specified location.
     *
     * @param string $url      Download source
     * @param array $headers   HTTP request headers
     * @param string $dest     Destination of the file to write to
     * @return null
     * @since Version 1.0.0
     */
    public function download($url, $headers, $dest)
    {
        $fd = fopen($dest, 'wb');
        fwrite($fd, $this->get($url, $headers)->getBody());
        fclose($fd);
    }

    /**
     * Upload a file.
     *
     * @param string $url        Target where to upload the file
     * @param array  $headers    HTTP request headers
     * @param string $file       Full path of the file to be uploaded
     * @param int    $windowSize Chunk size in bytes, defaults to 10M
     * @param function $onProgress @yconan
     * @return null
     * @since Version 1.0.0
     */
    public function upload($url, $headers, $file, $windowSize = 10485760, $onProgress = false)
    {
        if( filesize($file) <= $windowSize )
        {
            session_write_close();
            if ($fh = fopen($file, 'rb'))
            {
                $data = fread($fh, filesize($file));
                $this->put($url, $headers, $data);
                flush();
            }
            fclose($fh);
            if ($onProgress) {
                $onProgress(filesize($file)) ;
            }
        }
        else
        {
            $i = 0;

            # 'Accept' header is used to identify VMware vCloud Director version
            $headers['Accept'] = VMware_VCloud_SDK_Constants::VCLOUD_ACCEPT_HEADER .
                                 ';' .
                                 'version=' . $this->apiVersion;

            $transferred = 0;
            $remaining = filesize($file);
            $total = filesize($file);

            session_write_close();
            if ($fh = fopen($file, 'rb'))
            {
                while( $data = fread($fh, $windowSize) )
                {

                    $contentLength = min($remaining, $windowSize);

                    $headers['Content-Range'] = 'bytes ' . $transferred . '-' . ($transferred + $contentLength) . '/' . $total;
                    $headers['Content-Length'] = $contentLength;
                    $this->putAndCheck($url, $headers, $data) ;
                    $transferred += $contentLength;
                    if ($onProgress) {
                        $onProgress($transferred) ;
                    }
                }
                flush();
            }
            fclose($fh);
        }
    }

    /**
     * @yconan #1
     * 
     * upload data and retrieve 3 times if http status is 416
     * @param string $url        Target where to upload the file
     * @param array  $headers    HTTP request headers
     * @param string $data 
     * @param integer $attemptNumber number of attempt to send data
     * @param integer $sendAttemps maximum attempts following a HTTP 416
     */
    public function putAndCheck($url, $headers, $data, $attemptNumber = 0, $sendAttempts = 5) {
        $response = $this->put($url, $headers, $data);
        if ( $response->getStatus() === 416 && $attemptNumber <= $sendAttempts) {
            //echo "An HTTP 416 occured retry sending last chunk. attempt $attemptNumber\n" ;
            $attemptNumber++ ;
            sleep(2) ;
            return $this->putAndCheck($url, $headers, $data,$attemptNumber) ;
        }

        if( $response->getStatus() !== 200 ) {
            throw new Exception('Can\'t upload ' . $file . ' (HTTP ' . $response->getStatus() . '): ' . $response->getBody());
        }
    }

    /**
     * @amercier #2
     *
     * Get the username of a HTTP vCloud authentication token
     * @return string Returns the vCloud username@organization
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @amercier #2
     *
     * Get the vCloud authentication token
     * @return Returns the vCloud authentication token
     */
    public function getToken() {
        return $this->authToken;
    }
}
