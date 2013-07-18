<?php
class VMware_VCloud_SDK_VdcStorageProfile extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a VMware vCloud vDC storage profile entity.
     *
     * @return VMware_VCloud_API_VdcStorageProfileType
     * @since Version 5.1.0
     */
    public function getVdcStorageProfile()
    {
        return $this->getDataObj();
    }

    /**
     * Get a reference to a vDC storage profile entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getVdcStorageProfileRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             VDC_STORAGE_PROFILE_CONTENT_TYPE);
    }

    /**
     * Get metadata associated with the vDC storage profile or metadata
     * associated with the vDC storage profile for the specified key in the
     * specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|VMware_VCloud_API_MetadataValueType|null
     * @since Version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }
}