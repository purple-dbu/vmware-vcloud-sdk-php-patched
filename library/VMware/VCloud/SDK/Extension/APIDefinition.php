<?php
class VMware_VCloud_SDK_Extension_APIDefinition extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Returns the API definitions registered by this service.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getAPIDefinitionRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::API_DEFINITIONS_CONTENT_TYPE);
    }

    /**
     * Gets the service api definition data object.
     *
     * @return VMware_VCloud_API_Extension_AdminApiDefinitionType
     * @since Version 5.1.0
     */
    public function getAPIDefinition()
    {
        return $this->getDataObj();
    }

    /**
     * Creates file descriptor.
     * @param VMware_VCloud_API_Extension_AdminFileDescriptorType $params
     * @return VMware_VCloud_API_Extension_AdminFileDescriptorType
     * @since Version 5.1.0
     */
    public function createFileDescriptor($params)
    {
        $url = $this->url . '/files';
        $type = VMware_VCloud_SDK_Constants::
                  FILE_DESCRIPTOR_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Retrieve a file descriptor.
     *
     * @return VMware_VCloud_API_Extension_AdminFileDescriptorType
     * @since Version 5.1.0
     */
    public function getFileDescriptor()
    {
        $type='adminFileDescriptor';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Delete APIDefinition.
     *
     *
     * @since Version 5.1.0
     */
    public function delete()
    {
        $this->svc->delete($this->url, 204);
        $this->destroy();
    }
}