<?php
class VMware_VCloud_SDK_ProviderVdcStorageProfile extends VMware_VCloud_SDK_Abstract
{
    /**
     * Retrieve provider vDC storage profile details.
     *
     * @return VMware_VCloud_API_ProviderVdcStorageProfileType
     * @since Version 5.1.0
     */
    public function getProviderVdcStorageProfile()
    {
        return $this->getDataObj();
    }

    /**
     * Get a reference to a provider vDC storage profile entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getProviderVdcStorageProfileRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                            PROVIDER_VDC_STORAGE_PROFILE_CONTENT_TYPE);
    }

    /**
     * Update a provider vDC storage profile. You can update a provider vDC
     * storage profile to enable or disable it.
     *
     * @param VMware_VCloud_API_ProviderVdcStorageProfileType $profile
     * @return VMware_VCloud_API_ProviderVdcStorageProfileType
     * @since Version 5.1.0
     */
    public function update($profile)
    {
        $type = VMware_VCloud_SDK_Constants::
                PROVIDER_VDC_STORAGE_PROFILE_CONTENT_TYPE;
        return $this->put($url, 200, $type, $profile);
    }

    /**
     * Get metadata associated with the provider vDC storage profile or metadata
     * associated with the provider vDC storage profile for the specified key
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
     * Merges the metadata for the provider vDC storage profile with the
     * information provided.
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
     * provider vDC storage profile to the value provided. Note: This will
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
     * the provider vDC storage profile.
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
}