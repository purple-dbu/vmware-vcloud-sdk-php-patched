<?php
class VMware_VCloud_SDK_AdminVdc extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud admin vDC entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getAdminVdcRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::ADMIN_VDC_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud vDC entity in administrative view.
     *
     * @return VMware_VCloud_API_AdminVdcType
     * @since Version 1.0.0
     */
    public function getAdminVdc()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this vDc from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:vdc:' . $this->getUuid();
    }

    /**
     * Get a link to a VMware vCloud vDC entity.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    public function getVdcRef()
    {
        $links = $this->getContainedLinks('vdc', 'alternate');
        return isset($links)? $links[0] : null;
    }

    /**
     * Get a VMware vCloud vDC entity.
     *
     * @return VMware_VCloud_API_VdcType|null
     * @since Version 1.5.0
     */
    public function getVdc()
    {
        $ref = $this->getVdcRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Get the link to the container entity of the VMware vCloud vDC in an
     * administrator view.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    public function getAdminOrgRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container entity of the VMware vCloud vDC in an administrator
     * view.
     *
     * @return VMware_VCloud_API_AdminOrgType|null
     * @since Version 1.5.0
     */
    public function getAdminOrg()
    {
        $ref = $this->getAdminOrgRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Modify vDC.
     *
     * @param VMware_VCloud_API_AdminVdcType $adminVdc
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modify($adminVdc)
    {
        $type = VMware_VCloud_SDK_Constants::ADMIN_VDC_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $adminVdc);
    }

    /**
     * Check whether the vDC is enabled.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isEnabled()
    {
        return $this->getAdminVdc()->getIsEnabled();
    }

     /**
     * Enable the vDC.
     *
     * @param boolean $enable   To enable, set to true; to disable, set to false
     * @return null
     * @since Version 1.0.0
     */
    public function enable($enable=true)
    {
        $url = $this->url . '/action/';
        if (true === $enable)
        {
            $url .= 'enable';
        }
        else
        {
            $url .= 'disable';
        }
        $this->svc->post($url, 204);
    }

    /**
     * Disable the vDC.
     *
     * @return null
     * @since Version 1.0.0
     */
    public function disable()
    {
        $this->enable(false);
    }

    /**
     * Delete the vDC.
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
     * Check whether fast provisioning is enabled.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isFastProvisioningEnabled()
    {
        $adminVdc = $this->getAdminVdc();
        $fp = $adminVdc->getUsesFastProvisioning();
        return is_null($fp)? false : $fp;
    }

    /**
     * Enable fast provisioning.
     *
     * @param boolean $enable
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function enableFastProvisioning($enable=true)
    {
        $adminVdc = $this->getAdminVdc();
        $adminVdc->setUsesFastProvisioning($enable);
        return $this->modify($adminVdc);
    }

    /**
     * Disable fast provisioning.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function disableFastProvisioning()
    {
        return $this->enableFastProvisioning(false);
    }

    /**
     * Get metadata associated with the vDC or metadata associated with the
     * vDC for the specified key in the specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|
     *         VMware_VCloud_API_MetadataValueType|null
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }

    /**
     * Merges the metadata for the vDC item with the information provided.
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
     * vDC to the value provided. Note: This will replace any existing metadata
     * information.
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
     * the vDC.
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
     * Retrieves resource pools associated with an organization vDC.
     *
     * @return VMware_VCloud_API_Extension_OrganizationResourcePoolSetType|null
     * @since Version 1.5.0
     */
    public function getResourcePools()
    {
        $links = $this->getContainedLinks('OrganizationVdcResourcePoolSet',
                                          'down');
        return isset($links)? $this->svc->get($links[0]->get_href()) : null;
    }

    /**
     * Return an alternate SDK vDC object.
     *
     * @return VMware_VCloud_SDK_Vdc|null
     * @since Version 1.5.0
     */
    public function getSdkVdc()
    {
        $ref = $this->getVdcRef();
        return isset($ref)? $this->svc->createSDKObj($ref) : null;
    }

    /** 
    * List all networks for this Org vDC.
    *
    * @return array|null VMware_VCloud_API_ReferenceType object array or null
    * @since Version 5.1.0
    */
    public function getOrgVdcNetworks($name=null)
    {
        $url = $this->url . '/networks?&format=references';
        $refs= $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getReference',
                                       $refs);
    }

    /**
     * Create an Org vDC network.
     *
     * @param VMware_VCloud_API_OrgVdcNetworkType $vdcNetwork
     * @return VMware_VCloud_API_OrgVdcNetworkType
     * @since Version 5.1.0
     */
    public function addvdcNetwork($vdcNetwork)
    {
        $url = $this->url . '/networks';
        $type = VMware_VCloud_SDK_Constants::ORG_VDC_NETWORK_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $vdcNetwork);
    }

    /**
     * Get vDC storage profile references.
     *
     * @param string $name  Name of the vDC storage profile. If null, returns all
     * @return array|null VMware_VCloud_API_ReferenceType object array or null
     * @since Version 5.1.0
     */
    public function getAdminVdcStorageProfileRefs($name=null)
    {
        return $this->getContainedRefs('vdcStorageProfile', $name,
         'getVdcStorageProfile', $this->getAdminVdc()->getVdcStorageProfiles());
    }

    /**
     * Get vDC storage profiles.
     *
     * @param string $name  Name of the vDC storage profile. If null, returns all
     * @return array|null VMware_VCloud_API_AdminVdcStorageProfileType object
     *                    array or null
     * @since Version 5.1.0
     */
    public function getAdminVdcStorageProfiles($name=null)
    {
         $refs = $this->getAdminVdcStorageProfileRefs($name);
         return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Add or remove vDC storage profiles.
     *
     * @param VMware_VCloud_API_UpdateVdcStorageProfilesType $profile
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function updateVdcStorageProfiles($profile)
    {
        $url = $this->url . '/vdcStorageProfiles';
        $type = VMware_VCloud_SDK_Constants::
                UPDATE_VDC_STORAGE_PROFILES_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $profile);
    }

    /**
     * Get references to all edgegateways for this Org vDC with the given name.
     *
     * @param string $name Name of the edgegateway to get. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 5.1.0
     */
    public function getEdgeGatewayRefs($name=null)
    {
        $url = $this->url . '/edgeGateways?&format=references';
        $gatewayRefs= $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getReference',
                                       $gatewayRefs);
    }

    /**
     * Create a edgegateway.
     *
     * @param VMware_VCloud_API_GatewayType $params
     * @return VMware_VCloud_API_GatewayType
     * @since Version 5.1.0
     */
    public function createEdgeGateways($params)
    {
        $url = $this->url . '/edgeGateways';
        $type = VMware_VCloud_SDK_Constants::
                EDGE_GATEWAYS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }
}