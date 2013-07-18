<?php
class VMware_VCloud_SDK_VAppTemplate extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud vApp template entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getVAppTemplateRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             VAPP_TEMPLATE_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud vApp template entity.
     *
     * @return VMware_VCloud_API_VAppTemplateType
     * @since Version 1.0.0
     */
    public function getVAppTemplate()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this vApp template from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:vapptemplate:' . $this->getUuid();
    }

    /**
     * Get the link to the container of the vApp template.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getVdcRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container of the vApp template.
     *
     * @return VMware_VCloud_API_VdcType|null
     * @since Version 1.0.0
     */
    public function getVdc()
    {
        $ref = $this->getVdcRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Get status of a vApp template.
     *
     * The following are the possible vApp template status:
     * <ul>
     *    <li> -1 -- could not be created
     *    <li>  0 -- unresolved
     *    <li>  1 -- resolved
     *    <li>  6 -- in an unknown state
     *    <li>  7 -- in an unrecognized state
     *    <li>  8 -- powered off
     *    <li> 10 -- VMs in the vApp template are in Mixed state
     *    <li> 11 -- descriptor pending
     *    <li> 12 -- copying contents
     *    <li> 13 -- disk contents pending
     *    <li> 14 -- quarantined
     *    <li> 15 -- quarantine expired
     *    <li> 16 -- rejected
     *    <li> 17 -- transfer timeout
     * </ul>
     *
     * @return int vApp template status
     * @since Version 1.0.0
     */
    public function getStatus()
    {
        return $this->getVAppTemplate()->get_status();
    }

    /**
     * Relocate a VM to a different datastore.
     *
     * @param  VMware_VCloud_API_RelocateParamsType $params
     * @param string $name   Name of the shadow vm
     * @return VMware_VCloud_API_TaskType
     * @since  Version 1.5.0
     * @deprecated since version 5.1.0
     */
    public function relocate($params, $name)
    {
        $vmrefs = $this->getVAppTemplate()->getChildren()->getVm();
        foreach ($vmrefs as $ref)
        {
            if($ref->get_name() == $name)
            $url = $ref->get_href();
        }
        $url = $url . '/action/relocate';
        $type = VMware_VCloud_SDK_Constants::RELOCATE_VM_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Enable a vApp template for downloading.
     *
     * @param boolean $wait     To wait till finish, set to true
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function enableDownload($wait=true)
    {
        $url = $this->url . '/action/enableDownload';
        $task = $this->svc->post($url, 202);
        return ($wait)? $this->svc->waitForTask($task) : $task;
    }

    /**
     * Disable a vApp template for downloading.
     *
     * @return null
     * @since Version 1.0.0
     */
    public function disableDownload()
    {
        $url = $this->url . '/action/disableDownload';
        return $this->svc->post($url, 204);
    }

    /**
     * Download an OVF descriptor.
     *
     * @param string $ovfDescUrl   URL of the OVF descriptor file
     * @param string $ovfFile      Destination of the OVF file descriptor.
     *                             If null, the content will not be dumped
     *                             to a file
     * @return string Content of the OVF descriptor file
     * @access private
     */
    private function downloadOVFDescriptor($ovfDescUrl=null, $ovfFile=null)
    {
        if (is_null($ovfDescUrl))
        {
            $ovfDescUrl = $this->getDownloadOVFDescriptorUrl();
        }
        $resp = $this->svc->get($ovfDescUrl, '', false);
        if (isset($ovfFile))
        {
            $fh = fopen($ovfFile, 'w');
            fwrite($fh, $resp);
            fclose($fh);
        }
        return $resp;
    }

    /**
     * Download files to form OVF package.
     *
     * @param string $destDir   Directory where to save the downloaded file
     * @return null
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function downloadOVFFiles($destDir='.')
    {
        $ovfDescUrl = $this->getDownloadOVFDescriptorUrl();
        if (!$ovfDescUrl)
        {
            throw new VMware_VCloud_SDK_Exception(
                                      "getDownloadOVFDescriptorUrl() failed\n");
        }
        $srcDir = $this->getStringSuffix($ovfDescUrl, False);
        $fnames = $this->getOVFFileNames($ovfDescUrl);
        if (!isset($fnames))
        {
            throw new VMware_VCloud_SDK_Exception("getOVFFileNames() failed\n");
        }
        foreach ($fnames as $fname)
        {
            $src = implode('/', array($srcDir, $fname));
            $dest = implode('/', array($destDir, $fname));
            $this->svc->download($src, $dest);
        }
    }

    /**
     * Get download URL of an OVF descriptor.
     *
     * @return string|null   OVF descriptor URL or null
     * @access private
     */
    private function getDownloadOVFDescriptorUrl()
    {
        $refs = $this->getContainedLinks(null, 'download:default');
        if (1 == count($refs))
        {
            return $refs[0]->get_href();
        }
        return null;
    }

    /**
     * Download lossless vAppTemplate OVF.
     * Lossless download mode generates ovf without loosing any of its configurations.
     *
     * @param string $destDir   Directory where to save the downloaded file
     * @return null
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 5.1.0
     */
    public function downloadLosslessOVFFile($destDir='.')
    {
        $ovfDescUrl = $this->getDownloadLosslessOVFDescriptorUrl();
        if (!$ovfDescUrl)
        {
            throw new VMware_VCloud_SDK_Exception(
                                      "getDownloadLosslessOVFDescriptorUrl() failed\n");
        }
        $srcDir = $this->getStringSuffix($ovfDescUrl, False);
        $fnames = $this->getOVFFileNames($ovfDescUrl);
        if (!isset($fnames))
        {
            throw new VMware_VCloud_SDK_Exception("getOVFFileNames() failed\n");
        }
        foreach ($fnames as $fname)
        {
            $src = implode('/', array($srcDir, $fname));
            $dest = implode('/', array($destDir, $fname));
            $this->svc->download($src, $dest);
        }
    }

    /**
     * Download lossless vAppTemplate OVF.
     * Lossless download mode generates ovf without loosing any of its configurations.
     *
     * @return null
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 5.1.0
     */
    private function getDownloadLosslessOVFDescriptorUrl()
    {
        $refs = $this->getContainedLinks(null, 'download:identity');
        if (1 == count($refs))
        {
            return $refs[0]->get_href();
        }
        return null;
    }

    /**
     * Get names of the component files in the OVF package.
     *
     * @param string $ovfDescUrl   OVF descriptor URL
     * @return array File names
     * @access private
     */
    private function getOVFFileNames($ovfDescUrl)
    {
        $ovfFiles = array();
        $envelope = $this->downloadOVFDescriptor($ovfDescUrl);
        $envObj = VMware_VCloud_API_Helper::parseString($envelope);
        $files = $envObj->getReferences()->getFile();
        foreach ($files as $file)
        {
            $fileName = $file->get_href();
            if ($fileName)
            {
                array_push($ovfFiles, $fileName);
            }
        }
        return $ovfFiles;
    }

    /**
     * Get the network settings of this vApp template.
     *
     * @return VMware_VCloud_API_OVF_NetworkSection_Type
     * @since Version 1.0.0
     */
    public function getNetworkSettings()
    {
        return $this->svc->get($this->url . '/networkSection');
    }

    /**
     * Get the network configure settings of this vApp template.
     *
     * @return VMware_VCloud_API_NetworkConfigSectionType
     * @since Version 1.0.0
     */
    public function getNetworkConfigSettings()
    {
        return $this->svc->get($this->url . '/networkConfigSection');
    }

    /**
     * Get customization information of this vApp template.
     *
     * @return VMware_VCloud_API_CustomizationSectionType
     * @since Version 1.0.0
     */
    public function getCustomizationSettings()
    {
        return $this->svc->get($this->url . '/customizationSection');
    }

    /**
     * Modify customization settings of this vApp template.
     *
     * @param VMware_VCloud_API_CustomizationSectionType $customizationSection
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyCustomizationSettings($customizationSection)
    {
        $url = $this->url . '/customizationSection';
        $type = VMware_VCloud_SDK_Constants::CUSTOMIZATION_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $customizationSection);
    }

    /**
     * Get the lease settings of this vApp template.
     *
     * @return VMware_VCloud_API_LeaseSettingsSectionType
     * @since Version 1.5.0
     */
    public function getLeaseSettings()
    {
        $url = $this->url . '/leaseSettingsSection';
        return $this->svc->get($url);
    }

    /**
     * Modify the lease settings of this vApp template.
     *
     * @param VMware_VCloud_API_LeaseSettingsSectionType $leaseSettings
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function modifyLeaseSettings($leaseSettings)
    {
        $url = $this->url . '/leaseSettingsSection';
        $type = VMware_VCloud_SDK_Constants::LEASE_SETTINGS_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $leaseSettings);
    }

    /**
     * Delete this vApp template.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function delete()
    {
        $this->svc->delete($this->url, 202);
        $this->destroy();
    }

    /**
     * Get a reference to a VMware vCloud catalog entity.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     * @since SDK 5.1.0
     */
    public function getCatalogItemLink()
    {
        $catalogItemReference = null;
        $links = $this->getContainedLinks(null, 'catalogItem');
        foreach ($links as $link)
        {
            if ($link->get_Type() == VMware_VCloud_SDK_Constants::CATALOG_ITEM_CONTENT_TYPE)
            {
                $catalogItemReference = $link;
            }
        }
        return $catalogItemReference;
    }

    /**
     * Returns true if vApp template is in Catalog, otherwise false.
     *
     * @return boolean
     * @since Version 1.5.0
     * @since SDK 5.1.0
     */
    public function isPartOfCatalogItem()
    {
        $links = $this->getCatalogItemLink();
        return ($links != null);
    }

    /**
     * Deletes vApp template and its catalog item. If the vApp template is attached to a catalog item.
     * Deletes vApp template alone. If the vApp template is not attached to any catalog item.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @since SDK 5.1.0
     */
    public function deleteVAppTemplate()
    {
        if($this->isPartOfCatalogItem())
        {
            $this->svc->createSDKObj($this->getCatalogItemLink())->delete();
        }
        $this->svc->delete($this->url, 202);
        $this->destroy();
    }

    /**
     * Modify name or/and description of this vApp template.
     *
     * @param string $name   New name of the vApp template
     * @param string $description   New description of the vApp template
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modify($name=null, $description=null)
    {
        $vAppTemp = new VMware_VCloud_API_VAppTemplateType();
        $name = isset($name)? $name : $this->getVAppTemplate()->get_name();
        $vAppTemp->set_name($name);
        if (!is_null($description))
        {
            $vAppTemp->setDescription($description);
        }
        $type = VMware_VCloud_SDK_Constants::VAPP_TEMPLATE_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $vAppTemp);
    }

    /**
     * Get the suffix or prefix of a string with a seeking pattern.
     *
     * @param string $string  String for which to search (the haystack)
     * @param bool $getSuffix A flag indicates get suffix (true) or prefix(false)
     * @param string $seek    Pattern to search for (the needle)
     * @return string         The suffix or prefix
     * @access private
     */
    private function getStringSuffix($string, $getSuffix=true, $seek='/')
    {
        $pos = strrpos($string, $seek);
        return $getSuffix? substr($string, $pos+1) : substr($string, 0, $pos);
    }

    /**
     * Get contained VMs in the vApp template.
     *
     * @param $name
     * @return array|null VMware_VCloud_API_VmType objects array or null
     * @since Version 1.5.0
     */
    public function getContainedVms($name=null)
    {
        $temp = $this->getVAppTemplate();
        $c = $temp->getChildren();
        return isset($c)?
            VMware_VCloud_SDK_Helper::getObjsByName($c->getVm(), $name) : null;
    }

    /**
     * Get vApp template owner.
     *
     * @return VMware_VCloud_API_OwnerType
     * @since Version 1.5.0
     */
    public function getOwner()
    {
        $url = $this->url . '/owner';
        return $this->svc->get($url);
    }

    /**
     * Get a link to the shadow VMs of the VM in the vApp template.
     *
     * @param $name Name of the VM in the vApp template to search
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    public function getShadowVmsLink($name=null)
    {
        $vms = $this->getContainedVms($name);
        if (0 == count($vms))
        {
            return null;
        }
        foreach ($vms as $vm)
        {
            $links = VMware_VCloud_SDK_Helper::getContainedLinks('shadowVms',
                                                             'shadowVms', $vm);
            if (1 == count($links))
            {
                return $links[0];
            }
        }
        return null;
    }

    /**
     * Get collection of shadow vm references. vAppTemplate VM contains the shadow vm references.
     * @param string $name   Name of the shadow vm to get.
     * @return array         VMware_VCloud_API_ReferenceType object array.
     * @since Version 1.5.0
     * @deprecated since version 5.1.0
     * Instead use VMware_VCloud_SDK_Vm->getShadowVmsRefs()
     */
    public function getShadowVmsRefs($name)
    {
        $vmrefs = $this->getVAppTemplate()->getChildren()->getVm();
        foreach ($vmrefs as $ref)
        {
            if($ref->get_name() == $name)
            $url = $ref->get_href();
        }
        $url = $url . '/shadowVms';
        $shadowvmsRefs = $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getReference', $shadowvmsRefs);
    }

    /**
     * Get metadata associated with the vApp template or metadata associated with
     * the vApp template for the specified key in the specified domain.
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
     * Merges the metadata for a vApp template with the information provided.
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
     * vApp template to the value provided. Note: This will replace any existing
     * metadata information.
     *
     * @param string $key
     * @param VMware_VCloud_API_MetadataValueType $value
     * @param string domain
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
     * the vApp template.
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