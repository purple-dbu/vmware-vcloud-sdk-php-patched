<?php
class VMware_VCloud_SDK_AdminVdcStorageProfile extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a VMware vCloud vDC storage profile entity in an administrative view.
     *
     * @return VMware_VCloud_API_AdminVdcStorageProfileType
     * @since Version 5.1.0
     */
    public function getAdminVdcStorageProfile()
    {
        return $this->getDataObj();
    }

    /**
     * Get a reference to a vDC storage profile entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getAdminVdcStorageProfileRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                            ADMIN_VDC_STORAGE_PROFILE_CONTENT_TYPE);
    }

    /**
     * Updates a single vDC storage profile.
     *
     * @param VMware_VCloud_API_AdminVdcStorageProfileType $profile
     * @return VMware_VCloud_API_AdminVdcStorageProfileType
     * @since Version 5.1.0
     */
    public function update($profile)
    {
        $type = VMware_VCloud_SDK_Constants::
                ADMIN_VDC_STORAGE_PROFILE_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $profile);
    }

    /**
     * Get metadata associated with the vDC storage profile or metadata
     * associated with the vDC storage profile for the specified key
     * in the specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|
     *         VMware_VCloud_API_MetadataValueType|null
     * @since Version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }

    /**
     * Merges the metadata for the vDC storage profile with the information
     * provided.
     *
     * @param VMware_VCloud_API_MetadataType $meta
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function mergeMetadata($meta)
    {
        $url = $this->getMetadataUrl();
        $type = VMware_VCloud_SDK_Constants::METADATA_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $meta);
    }

    /**
     * Sets the metadata for the particular key in the specified domain for the
     * vDC storage profile to the value provided. Note: This will
     * replace any existing metadata information.
     *
     * @param string $key
     * @param VMware_VCloud_API_MetadataValueType $value
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function setMetadataByKey($key, $value, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        $type = VMware_VCloud_SDK_Constants::METADATA_VALUE_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $value);
    }

    /**
     * Deletes the metadata for the particular key in the specified domain for
     * the vDC storage profile.
     *
     * @param string $key
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function deleteMetadataByKey($key, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        return $this->svc->delete($url, 202);
    }

    /**
     * Get provider vDC storage profile reference.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getProviderVdcStorageProfileRef()
    {
        return $this->getAdminVdcStorageProfile()->getProviderVdcStorageProfile();
    }

    /**
     * Get provider vDC storage profile.
     *
     * @return VMware_VCloud_API_ProviderVdcStorageProfileType
     * @since Version 5.1.0
     */
    public function getProviderVdcStorageProfile()
    {
         $ref = $this->getProviderVdcStorageProfileRef();
         return $this->svc->get($ref->get_href());
    }
}