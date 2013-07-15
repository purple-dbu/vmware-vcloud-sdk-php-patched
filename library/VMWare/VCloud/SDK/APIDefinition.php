<?php
class VMware_VCloud_SDK_APIDefinition extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Returns the API definitions registered by this service.
     *
     * @return VMware_VCloud_API_ApiDefinitionType
     * @since Version 5.1.0
     */
    public function getAPIDefinitionRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::APIDEFINITION_CONTENT_TYPE);
    }

    /**
     * Gets the service api definition data object.
     *
     * @return VMware_VCloud_API_ApiDefinitionType
     * @since Version 5.1.0
     */
    public function getAPIDefinition()
    {
        return $this->getDataObj();
    }

    /**
     * Returns all file descriptors for the API definition.
     *
     * @return VMware_VCloud_API_ContainerType
     * @since Version 5.1.0
     */
    public function getFileDescriptor()
    {
        $url = $this->url . '/files';
        return $this->svc->get($url);
    }
}