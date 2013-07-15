<?php
class VMware_VCloud_SDK_Extension_VMWNetworkPool extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the network pool entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.5.0
     */
    public function getVMWNetworkPoolRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::NETWORK_POOL_CONTENT_TYPE);
    }

    /**
     * Get the network pool data object.
     *
     * @return VMware_VCloud_API_Extension_PortGroupPoolType |
     *         VMware_VCloud_API_Extension_VlanPoolType |
     *         VMware_VCloud_API_Extension_FencePoolType
     * @since Version 1.0.0
     */
    public function getVMWNetworkPool()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the network pool from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:networkpool:' . $this->getUuid();
    }

    /**
     * Modify this network pool.
     *
     * @param VMware_VCloud_API_Extension_PortGroupPoolType |
     *        VMware_VCloud_API_Extension_VlanPoolType |
     *        VMware_VCloud_API_Extension_FencePoolType $vmwNetPool
     * @return VMware_VCloud_API_Extension_PortGroupPoolType |
     *        VMware_VCloud_API_Extension_VlanPoolType |
     *        VMware_VCloud_API_Extension_FencePoolType
     * @since Version 1.0.0
     */
    public function modify($vmwNetPool)
    {
        $type = VMware_VCloud_SDK_Constants::NETWORK_POOL_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $vmwNetPool);
    }

    /**
     * Retrieve services associated with this network pool.
     *
     * @return VMware_VCloud_API_VendorServicesType
     * @since Version 5.1.0
     */
    public function getVMWVendorServices()
    {
        $url = $this->url . '/vendorServices';
        return $this->svc->get($url);
    }

    /**
     * Delete the network pool.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function delete()
    {
        $ret = $this->svc->delete($this->url, 202);
        $this->destroy();
        return $ret;
    }
}