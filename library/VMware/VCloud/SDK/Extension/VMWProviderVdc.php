<?php
class VMware_VCloud_SDK_Extension_VMWProviderVdc extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the provider vDC entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.5.0
     */
    public function getVMWProviderVdcRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::PROVIDER_VDC_CONTENT_TYPE);
    }

    /**
     * Get the provider vDC data object.
     *
     * @return VMware_VCloud_API_Extension_VMWProviderVdcType
     * @since Version 1.0.0
     */
    public function getVMWProviderVdc()
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
     * Get references of network pool settings.
     *
     * @param string $name Name of the network pool to get. If null, returns all
     * @return array       VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getNetworkPoolRefs($name=null)
    {
        return $this->getContainedRefs(null, $name, 'getNetworkPoolReference',
                     $this->getVMWProviderVdc()->getNetworkPoolReferences());
    }

    /**
     * Get references to VMware external network.
     *
     * @return array       VMware_VCloud_API_ReferenceType object array
     * @since Version 5.1.0
     */
    public function getExternalNetworkRefs()
    {
        return $this->getVMWProviderVdc()->getAvailableNetworks()->getNetwork();
    }

    /**
     * Get network pool settings objects.
     *
     * @param string $name Name of the network pool to get. If null, returns all
     * @return array  VMware_VCloud_API_Extension_FencePoolType |
     *                VMware_VCloud_API_Extension_PortGroupPoolType |
     *                VMware_VCloud_API_Extension_VlanPoolType object array
     * @since Version 1.0.0
     */
    public function getNetworkPools($name=null)
    {
        $refs = $this->getNetworkPoolRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Retrieve provider vDC resource pool set.
     *
     * @return VMware_VCloud_API_Extension_VMWProviderVdcResourcePoolSetType
     * @access protected
     */
    protected function getResourcePoolSet()
    {
        $url = $this->url . '/resourcePools';
        return $this->svc->get($url);
    }

    /**
     * Retrieve a list of provider vDC resource pools.
     *
     * @return array|null
     *              VMware_VCloud_API_Extension_VMWProviderVdcResourcePoolType
     *              object array or null
     * @since Version 1.5.0
     */
    public function getResourcePools()
    {
        $set = $this->getResourcePoolSet();
        return isset($set)? $set->getVMWProviderVdcResourcePool() : null;
    }

    /**
     * Retrieve a list of provider vDC resource pool references.
     *
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.5.0
     */
    public function getResourcePoolRefs()
    {
        $pools = $this->getResourcePools();
        if (!isset($pools))
        {
            return null;
        }
        $refs = array();
        foreach ($pools as $pool)
        {
            $ref = $pool->getResourcePoolRef();
            array_push($refs, $ref);
        }
        return $refs;
    }

    /**
     * Update backing resource pools for provider vDC.
     *
     * @param VMware_VCloud_API_Extension_UpdateResourcePoolSetParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function updateResourcePools($params)
    {
        $url = $this->url . '/action/updateResourcePools';
        $type = VMware_VCloud_SDK_Constants::
                RESOURCE_POOL_SET_UPDATE_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Modify a provider vDC.
     *
     * @param VMware_VCloud_API_Extension_VMWProviderVdcType $providerVdc
     * @return VMware_VCloud_API_Extension_VMWProviderVdcType
     * @since Version 1.0.0
     */
    public function modify($providerVdc)
    {
        $type = VMware_VCloud_SDK_Constants::
                EXTENSION_PROVIDER_VDC_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $providerVdc);
    }

    /**
     * Enable this provider vDC.
     *
     * @param boolean $enable  To enable, set to true; to disable, set to false
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
     * Disable this VMware provider vDC.
     *
     * @return null
     * @since Version 1.0.0
     */
    public function disable()
    {
        $this->enable(false);
    }

    /**
     * Check the provide vDC is enabled or not.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isEnabled()
    {
        return $this->getVMWProviderVdc()->getIsEnabled();
    }

    /**
     * Delete a VMware provider vDC.
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
     * Merge provider vDCs. 
     *
     * @param VMware_VCloud_API_Extension_ProviderVdcMergeParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function merge($params)
    {
        $url = $this->url . '/action/merge';
        $type = VMware_VCloud_SDK_Constants::
                    EXTENSION_MERGE_PARAMS_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Migrate a VM to a different resource pool.
     *
     * @param VMware_VCloud_API_Extension_MigrateParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function migrateVms($params)
    {
        $url = $this->url . '/action/migrateVms';
        $type = VMware_VCloud_SDK_Constants::MIGRATE_VM_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Retrieve a list of storage profiles that can be added to the
     * specified provider vDC.
     *
     * @return VMware_VCloud_API_Extension_VMWStorageProfilesType
     * @since Version 5.1.0
     */
    public function getAvailableStorageProfiles()
    {
        $url = $this->url . '/availableStorageProfiles';
        return $this->svc->get($url);
    }

    /**
     * Update storage profiles belonging to a provider vDC. The request
     * parameters specify storage profiles to add or remove.
     *
     * @param VMware_VCloud_API_Extension_UpdateProviderVdcStorageProfilesParamsType
     *         $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function updateStorageProfiles($params)
    {
        $url = $this->url . '/storageProfiles';
        $type = VMware_VCloud_SDK_Constants::
                       UPDATE_PROVIDER_VDC_STORAGE_PROFILES_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Get references of provider vDC storage profiles.
     *
     * @return array|null VMware_VCloud_API_Extension_ReferenceType object array
     *                    or null
     * @since Version 5.1.0
     */
    public function getStorageProfileRefs($name=null)
    {
        return $this->getContainedRefs('vmwPvdcStorageProfile', $name,
                                       'getProviderVdcStorageProfile',
                          $this->getVMWProviderVdc()->getStorageProfiles());
    }

    /**
     * Get provider vDC storage profiles.
     *
     * @return array|null VMware_VCloud_API_Extension_VMWProviderVdcStorageProfileType
     *         object array or null
     * @since Version 5.1.0
     */
    public function getStorageProfiles($name=null)
    {
        $refs = $this->getStorageProfileRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }
}