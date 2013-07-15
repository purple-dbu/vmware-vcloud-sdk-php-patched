<?php
interface VMware_VCloud_SDK_Http_Client_Interface
{
    /**
     * Set the login user name and password.
     *
     * @param array $auth   In array('username'=><username>,
     *                               'password'=><password>) format
     * @since Version 1.0.0
     */
    public function setAuth($auth);

    /**
     * Set the HTTP configurations used by HTTP request.
     *
     * @param array $config   In array('<param1>'=><value1>,
     *                                 '<param2>'=><value2>, ...
     *                                 '<paramn>'=><valuen>) format
     * @since Version 1.0.0
     */
    public function setConfig($config);

    /**
     * HTTP GET request
     *
     * @param string $url       URL to send an HTTP request
     * @param array  $headers   HTTP request headers
     * @return VMware_VCloud_SDK_Http_Response_Interface
     * @since Version 1.0.0
     */
    public function get($url, $headers=null);

    /**
     * HTTP POST request
     *
     * @param string $url       URL to send an HTTP request
     * @param array $headers    HTTP request headers
     * @param mixed $data       HTTP request body
     * @return VMware_VCloud_SDK_Http_Response_Interface
     * @since Version 1.0.0
     */
    public function post($url, $headers, $data);

    /**
     * HTTP POST request
     *
     * @param string $url       URL to send an HTTP request
     * @param array $headers    HTTP request headers
     * @param mixed $data       HTTP request body
     * @return VMware_VCloud_SDK_Http_Response_Interface
     * @since Version 1.0.0
     */
    public function put($url, $headers, $data);

    /**
     * HTTP DELETE request
     *
     * @param string $url       URL to send an HTTP request
     * @return VMware_VCloud_SDK_Http_Response_Interface|null
     * @since Version 1.0.0
     */
    public function delete($url);

    /**
     * Download a file and dump to specified location.
     *
     * @param string $url      Download source
     * @param array $headers   HTTP request headers
     * @param string $dest  Destination of the file to write to
     * @since Version 1.0.0
     */
    public function download($url, $headers, $dest);

    /**
     * Upload a file.
     *
     * @param string $url      Target to upload the file
     * @param array $headers   HTTP request headers
     * @param string $file     Full path of the file to be uploaded
     * @since Version 1.0.0
     */
    public function upload($url, $headers, $file);
}