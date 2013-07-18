<?php
class VMware_VCloud_SDK_Extension_VMWExternalNetwork extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the external network entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.5.0
     */
    public function getVMWExternalNetworkRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::EXTERNAL_NET_CONTENT_TYPE);
    }

    /**
     * Get the external network data object.
     *
     * @return VMware_VCloud_API_Extension_VMWExternalNetworkType
     * @since Version 1.0.0
     */
    public function getVMWExternalNetwork()
    {
        return $this->getDataObj();
    }

    /**
     * Construct vCloud ID of the external network from its UUID. 
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:network:' . $this->getUuid();
    }

    /**
     * Modify the external network.
     *
     * @param VMware_VCloud_API_Extension_VMWExternalNetworkType $externalNet
     * @return VMware_VCloud_API_Extension_VMWExternalNetworkType
     * @since Version 1.0.0
     */
    public function modify($externalNet)
    {
        $type = VMware_VCloud_SDK_Constants::EXTERNAL_NET_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $externalNet);
    }

    /**
     * Delete the external network.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function delete()
    {
        $task = $this->svc->delete($this->url, 202);
        $this->destroy();
        return $task;
    }

    /**
     * Reset the external network.
     *
     * @return VMware_VCloud_API_TaskType|null
     * @since Version 1.5.0
     * @deprecated since API version 5.1.0 and SDK 5.1.0
     * @this method will not work in SDK 5.1.0
     */
    public function reset()
    {
        $url = str_replace('extension/externalnet', 'network', $this->url);
        $url = $url . '/action/reset';
        return $this->svc->post($url, 202);
    }
}