<?php
class VMware_VCloud_SDK_Extension_serviceResources extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the serviceResources entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getserviceResourcesRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::SERVICERESOURCES_CLASSES_CONTENT_TYPE);
    }

    /**
     * Gets the service Resources data object.
     *
     * @return VMware_VCloud_API_Extension_ServiceResourceType
     * @since Version 5.1.0
     */
    public function getserviceResource()
    {
        return $this->getDataObj();
    }

    /**
     * Delete service Resource.
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