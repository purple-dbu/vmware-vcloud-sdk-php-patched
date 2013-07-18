<?php
class VMware_VCloud_SDK_Extension_VimServer extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a Vim server entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.5.0
     */
    public function getVimServerRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             VIM_SERVER_CONTENT_TYPE);
    }

    /**
     * Get a Vim server settings.
     *
     * @return VMware_VCloud_API_Extension_VimServerType
     * @since Version 1.0.0
     */
    public function getVimServer()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the Vim server from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:vimserver:' . $this->getUuid();
    }

    /**
     * Modify a vim server.
     *
     * @param VMware_VCloud_API_Extension_VimServerType $vc
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modify($vc)
    {
        $type = VMware_VCloud_SDK_Constants::VIM_SERVER_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $vc);
    }

    /**
     * Enable the Vim server.
     *
     * @param boolean $enable  To enable, set to true; to disable, set to false
     * @return VMware_VCloud_API_TaskType
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function enable($enable=true)
    {
        $vc = $this->getVimServer();
        if ($vc instanceof VMware_VCloud_API_Extension_VimServerType)
        {
            if ($enable xor $vc->getIsEnabled())
            {
                $vc->setIsEnabled($enable);
                return $this->modify($vc);
            }
        }
        else
        {
            throw new VMware_VCloud_SDK_Exception("Retrieve Vim Server error\n");
        }
    }

    /**
     * Disable the Vim server.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function disable()
    {
        return $this->enable(false);
    }

    /**
     * Check whether the Vim server is enabled or not.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isEnabled()
    {
        return $this->getVimServer()->getIsEnabled();
    }
    /**
     * Get references to all VMs.
     *
     * @return VMware_VCloud_API_Extension_VmObjectRefsListType
     * @since Version 1.0.0
     */
    public function getVmRefsList()
    {
        return $this->svc->get($this->url . '/vmsList');
    }

    /**
     * Get VMs list by page number.
     *
     * @param int $page   Page number, starts from 1. Default to 0.
     * @param int $size   Page size, maximum to 100. Default to null.
     * @return VMware_VCloud_API_Extension_VmObjectRefsListType
     * @since Version 1.0.0
     */
    public function getVmRefsListByPage($page=1, $size=null)
    {
       $url = $this->url . '/vmsList?page=' . $page;
       if ($size && $size >= 1)
       {
           $url = $url . '&pageSize=' . $size;
       }
       return $this->svc->get($url);
    }

    /**
     * Retrieves references to all resource pools.  Resource pools that are
     * not assigned to org or provider vDC.
     *
     * @return VMware_VCloud_API_Extension_ResourcePoolListType
     * @since Version 1.0.0
     */
    public function getResourcePoolList()
    {
        return $this->svc->get($this->url . '/resourcePoolList');
    }

    /**
     * Get resource pools or resource pool with specified name.
     *
     * @param string $name   Name of the resource pool to retrieve. If null,
     *                       returns all
     * @return array|null   VMware_VCloud_API_Extension_ResourcePoolType array
     *                       object or null.
     * @since Version 1.0.0
     */
    public function getResourcePools($name=null)
    {
        $list = $this->getResourcePoolList();
        if (!isset($list))
        {
            return null;
        }
        $pools = $list->getResourcePool();
        if (isset($name))
        {
            $ret = array();
            foreach ($pools as $pool)
            {
                if ($name == $pool->get_name())
                {
                    array_push($ret, $pool);
                    return $ret;
                }
            }
            return null;
        }
        return $pools;
    }

    /**
     * Get references for all the available networks for the Vim server.
     *
     * @return array|null VMware_VCloud_API_Extension_VimObjectRefType objects
     *                    array or null
     * @since Version 1.5.0
     */
    public function getAvailableNetworks()
    {
        $url = $this->url . '/networks';
        $refList = $this->svc->get($url);
        $refs = $refList->getVimObjectRefs();
        if ($refs)
        {
            return $refs->getVimObjectRef();
        }
        return null;
    }

    /**
     * Imports a VM from vSphere to a vDC as a vApp.
     *
     * @param VMware_VCloud_API_Extension_ImportVmAsVAppParamsType $params
     * @return VMware_VCloud_API_VAppType
     * @since Version 1.0.0
     */
    public function importVmAsVApp($params)
    {
        $url = $this->url . '/importVmAsVApp';
        $type = VMware_VCloud_SDK_Constants::IMPORT_VMASVAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Imports a VM from vSphere to a vDC as a vApp template.
     *
     * @param VMware_VCloud_API_Extension_ImportVmAsVAppTemplateParamsType $params
     * @return VMware_VCloud_API_VAppTemplateType
     * @since Version 1.0.0
     */
    public function importVmAsVAppTemplate($params)
    {
        $url = $this->url . '/importVmAsVAppTemplate';
        $type = VMware_VCloud_SDK_Constants::
                IMPORT_VMASVAPPTEMPLATE_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Import media from vSphere to a vDC.
     *
     * @param VMware_VCloud_API_Extension_ImportMediaParamsType $params
     * @return VMware_VCloud_API_MediaType
     * @since Version 1.5.0
     */
    public function importMedia($params)
    {
        $url = $this->url . '/importMedia';
        $type = VMware_VCloud_SDK_Constants::IMPORT_MEDIA_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Import a vSphere VM into an existing vApp.
     *
     * @param VMware_VCloud_API_Extension_ImportVmIntoExistingVAppParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */ 
    public function importVmIntoExistingVApp($params)
    {
        $url = $this->url . '/importVmIntoExistingVApp';
        $type = VMware_VCloud_SDK_Constants::
                IMPORT_VM_INTO_EXISTING_VAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Force Vim server reconnect.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function forceReconnect()
    {
        $url = $this->url . '/action/forcevimserverreconnect';
        return $this->svc->post($url, 202);
    }

    /**
     * Refresh storage profiles data from a registered Vim server.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function refreshStorageProfiles()
    {
        $url = $this->url . '/action/refreshStorageProfiles';
        return $this->svc->post($url, 202);
    }

    /**
     * Refresh vCenter server.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function refresh()
    {
        $url = $this->url . '/action/refresh';
        return $this->svc->post($url, 202);
    }

    /**
     * Gets all the references for each host attached to the Vim server.
     *
     * @return array|null VMware_VCloud_API_ReferenceType object array or null
     * @since Version 1.5.0
     */
    public function getHostRefs()
    {
        $url = $this->url . '/hostReferences';
        $list = $this->svc->get($url);
        return (0 == sizeof($list))? null : $list->getHostReference();
    }

    /**
     * Retrieves all storage profiles in the Vim server.
     *
     * @return VMware_VCloud_API_Extension_VMWStorageProfilesType
     * @since Version 5.1.0
     *
     */
    public function getStorageProfiles()
    {
        $url = $this->url . '/storageProfiles';
        return $this->svc->get($url);
    }

    /**
     * Get a link to the registered vShield Manager.
     *
     * @return VMware_VCloud_API_LinkType
     * @since Version 5.1.0
     */
    public function getVsmRef()
    {
        $links = $this->getContainedLinks('vshieldmanager', 'down');
        return (0 == sizeof($links))? null : $links[0]; 
    }

    /**
     * Get configuration details of registered vShield Manager.
     *
     * @return VMware_VCloud_API_Extension_ShieldManagerType
     * @since Version 5.1.0
     */
    public function getVsm()
    {
        $link = $this->getVsmRef();
        if ($link == null)
        {
            return null;
        }
        else
        {
            return $this->svc->get($link->get_href());
        }
    }

    /**
     * Update configuration details of registered vShield Manager. 
     *
     * @param VMware_VCloud_API_Extension_ShieldManagerType $vsm
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function updateVsm($vsm)
    {
        $link = $this->getVsmRef();
        if ($link == null)
        {
            return null;
        }
        else
        {
            $url = $link->get_href();
            $type = VMware_VCloud_SDK_Constants::VSHIELD_MANAGER_CONTENT_TYPE;
            return $this->svc->put($url, 202, $type, $vsm);
        }
    }

    /**
     * Retrieve the vSphere URL of an object.
     *
     * @param vimObjectType
     * @param vimObjectMoref
     * @return VMware_VCloud_API_Extension_VSphereWebClientUrlType
     * @since  Version 5.1.0
     */
    public function getVSphereWebClientUrl($vimObjectType,$vimObjectMoref)
    {
        $url = $this->url . '/'.$vimObjectType.'/'.$vimObjectMoref.'/vSphereWebClientUrl';
        return $this->svc->get($url, 200);
    }
}