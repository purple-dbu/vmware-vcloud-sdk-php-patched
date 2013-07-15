<?php
class VMware_VCloud_SDK_Extension_ServiceLink extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the service link entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getServiceLinkRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::LINKS_CONTENT_TYPE);
    }

     /**
     * Gets the service link data object.
     *
     * @return VMware_VCloud_API_Extension_AdminServiceLinkType
     * @since Version 5.1.0
     */
    public function getServiceLink()
    {
        return $this->getDataObj();
    }

    /**
     * Delete Service link.
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