<?php
class VMware_VCloud_SDK_Extension_VMWProviderVdcResourcePool extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the resource pool entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getResourcePoolRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::PROVIDER_VDC_RESOURCE_POOL_CONTENT_TYPE);
    }

    /**
     * Gets the resource pool data object.
     *
     * @return VMware_VCloud_API_Extension_ContainerType
     * @since Version 5.1.0
     */
    public function getResourcePool()
    {
        return $this->getDataObj();
    }


    /**
     * List all VMs using this resource pool.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getVMWResourcePoolVMList()
    {
        $url = $this->url . '/vmList?&format=references';
        return $this->svc->get($url);
    }
}