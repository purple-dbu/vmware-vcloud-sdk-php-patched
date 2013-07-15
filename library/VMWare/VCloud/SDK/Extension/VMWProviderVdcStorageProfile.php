<?php
class VMware_VCloud_SDK_Extension_VMWProviderVdcStorageProfile extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the provider vDC storage profile entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getProviderVdcStorageProfileRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             VMW_PROVIDER_VDC_STORAGE_PROFILE_CONTENT_TYPE);
    }

    /**
     * Get the provider vDC storage profile data object.
     *
     * @return VMware_VCloud_API_Extension_VMWProviderVdcStorageProfileType
     * @since Version 5.1.0
     */
    public function getProviderVdcStorageProfile()
    {
        return $this->getDataObj();
    }

    /**
     * Modify the provider vDC storage profile.
     *
     * @param VMware_VCloud_API_Extension_VMWProviderVdcStorageProfileType $profile
     * @return VMware_VCloud_API_Extension_VMWProviderVdcStorageProfileType
     * @since Version 5.1.0
     */
    public function modify($profile)
    {
        $type = VMware_VCloud_SDK_Constants::
                VMW_PROVIDER_VDC_STORAGE_PROFILE_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $profile);
    }
}