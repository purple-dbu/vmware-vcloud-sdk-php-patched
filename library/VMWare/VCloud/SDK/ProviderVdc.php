<?php
class VMware_VCloud_SDK_ProviderVdc extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud provider vDC entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0
     */
    public function getProviderVdcRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             PROVIDER_VDC_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud provider vDC object.
     *
     * @return VMware_VCloud_API_ProviderVdcType
     * @since Version 1.5.0
     */
    public function getProviderVdc()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the provider vDC from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:providervdc:' . $this->getUuid();
    }

    /**
     * Retrieves all organization vDCs for the given provider vDC.
     *
     * @return array|null An array of VMware_VCloud_API_ReferenceType or null.
     * @since Version 1.5.0
     */
    public function getVdcRefs($name=null)
    {
        $url = $this->url . '/vdcReferences';
        $refs = $this->svc->get($url);
        return VMware_VCloud_SDK_Helper::getObjsByName($refs->getVdcReference(),
                                                       $name);
    }

    /**
     * Get provider vDC storage profile.
     *
     * @return an array of VMware_VCloud_API_ReferenceType objects
     * @since Version 5.1.0
     */
    public function getProviderVdcStorageProfileRefs()
    {
         return $this->getProviderVdc()->getStorageProfiles()->getProviderVdcStorageProfile();
    }

    /**
     * Get references to VMware network pools.
     *
     * @return array         VMware_VCloud_API_ReferenceType object array
     * @since Version 5.1.0
     */
    public function getVMWNetworkPoolRefs()
    {
         return $this->getProviderVdc()->getNetworkPoolReferences()->getNetworkPoolReference();
    }

    /**
     * Get references to VMware external network.
     *
     * @return array         VMware_VCloud_API_ReferenceType object
     *                       array
     * @since Version 5.1.0
     */
    public function getExternalNetworkRefs()
    {
        return $this->getProviderVdc()->getAvailableNetworks()->getNetwork();
    }

    /**
     * Get metadata associated with the provider vDC or metadata associated with
     * the provider vDC for the specified key in the specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|VMware_VCloud_API_MetadataValueType
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }

    /**
     * Merges the metadata for the provider vDC with the information provided.
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
     * provider vDC to the value provided. Note: This will replace any existing
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
     * the provider vDC.
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
}