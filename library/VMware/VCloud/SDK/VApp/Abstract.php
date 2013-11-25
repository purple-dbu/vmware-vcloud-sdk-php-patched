<?php
abstract class VMware_VCloud_SDK_VApp_Abstract extends
               VMware_VCloud_SDK_Abstract
{
    /**
     * Deploy the vApp or VM.
     *
     * @param VMware_VCloud_API_DeployVAppParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function deploy($params)
    {
        $url = $this->url . '/action/deploy';
        $type = VMware_VCloud_SDK_Constants::DEPLOY_VAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Undeploy the vApp or VM.
     *
     * @param VMware_VCloud_API_UndeployVAppParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function undeploy($params)
    {
        $url = $this->url . '/action/undeploy';
        $type = VMware_VCloud_SDK_Constants::UNDEPLOY_VAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Delete the vApp or VM. The vApp or VM has to be powered off and
     * undeployed before it can be deleted.
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
     * Power on the VM or all Vms contained in the vApp.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function powerOn()
    {
        return $this->action('powerOn');
    }

    /**
     * Power off the VM or all VMs contained in the vApp.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function powerOff()
    {
        return $this->action('powerOff');
    }

    /**
     * Reset the VM or all VMs contained in the vApp.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function reset()
    {
        return $this->action('reset');
    }

    /**
     * Reboot the VM or all VMs contained in the vApp.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function reboot()
    {
        return $this->action('reboot');
    }

    /**
     * Suspend the VM or all VMs contained in the vApp.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function suspend()
    {
        return $this->action('suspend');
    }

    /**
     * Discard suspended state of the VM or all VMs contained in the vApp.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function discardSuspendedState()
    {
        $url = $this->url . '/action/discardSuspendedState';
        return $this->svc->post($url, 202);
    }

    /**
     * Shutdown the VM or all VMs contained in the vApp.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function shutdown()
    {
        return $this->action('shutdown');
    }

    /**
     * Get metadata associated with the vApp/VM or metadata associated with
     * the vApp/VM for the specified key in the specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|VMware_VCloud_API_MetadataValueType|null
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }

    /**
     * Merges the metadata for the vApp or VM with the information provided.
     *
     * @param VMware_VCloud_API_MetadataType $meta
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function mergeMetadata($meta)
    {
        $url = $this->getMetadataUrl();
        $type = VMware_VCloud_SDK_Constants::METADATA_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $meta);
    }

    /**
     * Sets the metadata for the particular key in the specified domain for the
     * vApp or VM to the value provided. Note: This will replace any existing
     * metadata information.
     *
     * @param string $key
     * @param VMware_VCloud_API_MetadataValueType $value
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function setMetadataByKey($key, $value, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        $type = VMware_VCloud_SDK_Constants::METADATA_VALUE_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $value);
    }

    /**
     * Deletes the metadata for the particular key in the specified domain for
     * the vApp or VM.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function deleteMetadataByKey($key, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        return $this->svc->delete($url, 202);
    }

    /**
     * Common function of operation on the VM or all VMs contained in
     * the vApp.
     *
     * @param string $op    Name of the operation
     * @param int $expect   Expected return code
     * @return VMware_VCloud_API_TaskType
     * @access protected
     */
    protected function action($op, $expect=202)
    {
        $url = $this->url . '/power/action/' . $op;
        return $this->svc->post($url, $expect);
    }

    /**
     * The abstract getStatus() function.
     */
    abstract protected function getStatus();
}