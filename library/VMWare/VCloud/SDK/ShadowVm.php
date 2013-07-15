<?php
class VMware_VCloud_SDK_ShadowVm extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Returns the shadowVm.
     *
     * @return VMware_VCloud_API_ReferencesType
     * @since Version 5.1.0
     */
    public function getShadowVmRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::SHADOW_VMS_CONTENT_TYPE);
    }

    /**
     * Gets the shadowVm data object.
     *
     * @return VMware_VCloud_API_ReferencesType
     * @since Version 5.1.0
     */
    public function getShadowVm()
    {
        return $this->getDataObj();
    }

    /**
     * Deletes shadow VM.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @deprecated since version 5.1.0
     */
    public function delete()
    {
        $task = $this->svc->delete($this->url, 202);
        $this->destroy();
        return $task;
    }
}