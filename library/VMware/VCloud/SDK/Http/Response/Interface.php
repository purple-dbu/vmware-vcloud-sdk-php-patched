<?php
Interface VMware_VCloud_SDK_Http_Response_Interface
{
    /**
     * Set response
     *
     * @param mix $response   A response object
     * @since Version 1.0.0
     */
    public function setResponse($response);

    /**
     * Get HTTP response status code
     *
     * @since Version 1.0.0
     */
    public function getStatus();

    /**
     * Get HTTP response body
     *
     * @since Version 1.0.0
     */
    public function getBody();

    /**
     * Get HTTP response header
     *
     * @param string $key   The key name of the HTTP header, if null,
     *                      returns all headers
     * @since Version 1.0.0
     */
    public function getHeader($key=null);
}