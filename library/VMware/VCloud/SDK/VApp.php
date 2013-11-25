<?php
class VMware_VCloud_SDK_VApp extends VMware_VCloud_SDK_VApp_Abstract
{
    /**
     * Get a reference to a VMware vCloud vApp entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getVAppRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::VAPP_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud vApp entity.
     *
     * @return VMware_VCloud_API_VAppType
     * @since Version 1.0.0
     */
    public function getVApp()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this vApp from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:vapp:' . $this->getUuid();
    }

    /**
     * Get the link to the vDC to which this vApp belongs.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getVdcRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the vDC to which this vApp belongs.
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
     * Modify name and/or description of this vApp.
     *
     * @param string $name   New name of the vApp
     * @param string $description   New description of the vApp
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modify($name=null, $description=null)
    {
        $vApp = new VMware_VCloud_API_VAppType();
        $name = isset($name)? $name : $this->getVApp()->get_name();
        $vApp->set_name($name);
        if (!is_null($description))
        {
            $vApp->setDescription($description);
        }
        $type = VMware_VCloud_SDK_Constants::VAPP_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $vApp);
    }

    /**
     * Recompose a vApp.
     *
     * @param VMware_VCloud_API_RecomposeVAppParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function recompose($params)
    {
        $url = $this->url . '/action/recomposeVApp';
        $type = VMware_VCloud_SDK_Constants::RECOMPOSE_VAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Get references to contained vApps or contained vApps with given name.
     *
     * @param string $name   Name of the vApp. If null, returns all contained
     *                       vApps.
     * @return array         VMware_VCloud_API_ReferenceType object array.
     * @since Version 1.0.0
     */
    public function getContainedVAppRefs($name=null)
    {
        $refs = array();
        $vapps = $this->getContainedVApps($name);
        if ($vapps)
        {
            foreach ($vapps as $vapp)
            {
                $type = VMware_VCloud_SDK_Constants::VAPP_CONTENT_TYPE;
                $ref = VMware_VCloud_SDK_Helper::createReferenceTypeObj(
                         $vapp->get_href(), 'Reference', $type);
                array_push($refs, $ref);
            }
        }
        return $refs;
    }

    /**
     * Get references to contained VMs or contained VMs with given name.
     *
     * @param string $name   Name of the VM. If null, returns all contained VMs
     * @return array         VMware_VCloud_API_ReferenceType object array.
     * @since Version 1.0.0
     */
    public function getContainedVmRefs($name=null)
    {
        $refs = array();
        $vms = $this->getContainedVms($name);
        if ($vms)
        {
            foreach ($vms as $vm)
            {
                $t = VMware_VCloud_SDK_Constants::VM_CONTENT_TYPE;
                $n = $vm->get_name();
                $ref = VMware_VCloud_SDK_Helper::createReferenceTypeObj(
                             $vm->get_href(), 'Reference', $t, $n);
                array_push($refs, $ref);
            }
        }
        return $refs;
    }

    /**
     * Get contained vApps.
     *
     * @param string $name   Name of the vApp. If null, returns all contained
     *                       vApps. 
     * @return array         VMware_VCloud_API_VAppType object array.
     * @since Version 1.0.0
     */
    public function getContainedVApps($name=null)
    {
        $arr = array();
        $vAppChildren = $this->getVApp()->getChildren();
        if ($vAppChildren)
        {
            $vapps = $vAppChildren->getVApp();
            if (!$name)
            {
                return $vapps;
            }
            foreach ($vapps as $vapp)
            {
                if ($name == $vapp->get_name())
                {
                    array_push($arr, $vapp);
                }
            }
        }
        return $arr;
    }

    /**
     * Get contained VMs.
     *
     * @param string $name   Name of the VM. If null, returns all contained VMs
     * @return array         VMware_VCloud_API_VmType object array.
     * @since Version 1.0.0
     */
    public function getContainedVms($name=null)
    {
        $arr = array();
        $vAppChildren = $this->getVApp()->getChildren();
        if (isset($vAppChildren))
        {
            $vms = $vAppChildren->getVm();
            if (!isset($name))
            {
                return $vms;
            }
            foreach ($vms as $vm)
            {
                if ($name == $vm->get_name())
                {
                    array_push($arr, $vm);
                }
            }
        }
        return $arr;
    }

    /**
     * Get network configuration settings of the vApp.
     *
     * @return VMware_VCloud_API_NetworkConfigSectionType
     * @since Version 1.0.0
     */
    public function getNetworkConfigSettings()
    {
        $url = $this->url . '/networkConfigSection';
        return $this->svc->get($url);
    }

    /**
     * Modify network configuration settings of the vApp.
     *
     * @param VMware_VCloud_API_NetworkConfigSectionType $netConfig
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyNetworkConfigSettings($netConfig)
    {
        $url = $this->url . '/networkConfigSection';
        $type = VMware_VCloud_SDK_Constants::NETWORK_CONFIG_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $netConfig);
    }

    /**
     * Get the lease settings of this vApp.
     *
     * @return VMware_VCloud_API_LeaseSettingsSectionType
     * @since Version 1.0.0
     */
    public function getLeaseSettings()
    {
        $url = $this->url . '/leaseSettingsSection';
        return $this->svc->get($url);
    }

    /**
     * Modify the lease settings of this vApp.
     *
     * @param VMware_VCloud_API_LeaseSettingsSectionType $leaseSettings
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyLeaseSettings($leaseSettings)
    {
        $url = $this->url . '/leaseSettingsSection';
        $type = VMware_VCloud_SDK_Constants::LEASE_SETTINGS_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $leaseSettings);
    }

    /**
     * Get startup section of the vApp.
     *
     * @return VMware_VCloud_API_OVF_StartupSection_Type
     * @since Version 1.0.0
     */
    public function getStartupSettings()
    {
        $url = $this->url . '/startupSection';
        return $this->svc->get($url);
    }

    /**
     * Modify the startup settings of the vApp.
     *
     * @param VMware_VCloud_API_StartupSection_Type $startupSection
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyStartupSettings($startupSection)
    {
        $url = $this->url . '/startupSection';
        $type = VMware_VCloud_SDK_Constants::STARTUP_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $startupSection);
    }

    /**
     * Get the network settings of this vApp.
     *
     * @return VMware_VCloud_API_OVF_NetworkSection_Type
     * @since Version 1.0.0
     */
    public function getNetworkSettings()
    {
        $url = $this->url . '/networkSection';
        return $this->svc->get($url);
    }

    /**
     * Get the control access of the vApp.
     *
     * @return VMware_VCloud_API_ControlAccessParamsType
     * @since Version 1.0.0
     */
    public function getControlAccess()
    {
        $url = $this->url . '/controlAccess';
        return $this->svc->get($url);
    }

    /**
     * Modify the control access of the vApp.
     *
     * @param VMware_VCloud_API_ControlAccessParamsType $controlAccess
     * @return VMware_VCloud_API_ControlAccessParamsType
     * @since Version 1.0.0
     */
    public function modifyControlAccess($controlAccess)
    {
        $url = $this->url . '/action/controlAccess';
        $type = VMware_VCloud_SDK_Constants::CONTROL_ACCESS_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $controlAccess);
    }

    /**
     * Get the status of this vApp.
     *
     * The following are the possible vApp status:
     * <ul>
     *    <li> -1 -- could not be created
     *    <li>  0 -- unresolved
     *    <li>  1 -- resolved
     *    <li>  3 -- suspended
     *    <li>  4 -- powered on
     *    <li>  5 -- waiting for user input
     *    <li>  6 -- in an unknown state
     *    <li>  7 -- in an unrecognized state
     *    <li>  8 -- powered off
     *    <li>  9 -- in an inconsistent state
     *    <li> 10 -- VMs in the vApp are in mixed states
     * </ul>
     *
     * @return int vApp status
     * @since Version 1.0.0
     */
    public function getStatus()
    {
        $vApp = $this->getVApp();
        return $vApp->get_status();
    }

    /**
     * Get vApp owner.
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
     * Change vApp owner.
     *
     * @param VMware_VCloud_API_OwnerType $owner
     * @return null
     * @since Version 1.5.0
     */
    public function changeOwner($owner)
    {
        $url = $this->url . '/owner';
        $type = VMware_VCloud_SDK_Constants::OWNER_CONTENT_TYPE;
        $this->svc->put($url, 204, $type, $owner);
    }

    /**
     * VApp enters into maintenance mode.
     *
     * @return null
     * @since Version 1.5.0
     */
    public function enterMaintenanceMode()
    {
        $url = $this->url . '/action/enterMaintenanceMode';
        return $this->svc->post($url, 204);
    }

    /**
     * VApp exits maintenance mode.
     *
     * @return null
     * @since Version 1.5.0
     */
    public function exitMaintenanceMode()
    {
        $url = $this->url . '/action/exitMaintenanceMode';
        return $this->svc->post($url, 204);
    }

    /**
     * Resets vApp network.
     *
     * @return VMware_VCloud_API_TaskType|null
     * @since Version 1.5.0
     */
    public function resetVAppNetwork()
    {
        $set = $this->getNetworkConfigSettings();
        if (!isset($set))
        {
            return null;
        }
        $conf = $set->getNetworkConfig();
        if (!isset($conf))
        {
            return null;
        }
        $links = VMware_VCloud_SDK_Helper::getContainedLinks(null,
                                                             'repair', $conf);
        if (1 == count($links))
        {
            $url = $links[0]->get_href();
            return $this->svc->post($url, 202);
        }
        return null;
    }

    /**
     * Retrieve the OVF descriptor of a vApp directly.
     *
     * @return VMware_VCloud_API_OVF_EnvelopeType
     * @since Version 5.1.0
     */
    public function getOVFDescriptor()
    {
        $url = $this->url . '/ovf';
        return $this->svc->get($url);
    }

    /**
     * Retrieve the OVF descriptor of a vApp directly as string.
     *
     * @return String
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function getOVFDescriptorAsString()
    {
        $url = $this->url . '/ovf';
        return $this->svc->get($url, '', false);
    }

    /**
     * Retrieve VM BIOS UUID as described in the OVF Virtual System.
     *
     * @return array VM BIOS UUIDs
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function getVmUUIDs()
    {
        $uuid = array();
        $ovf = $this->getOVFDescriptor();
        $content = $ovf->getContent()->getContent();
        foreach($content as $c)
        {
            $section = $c->getSection();
            foreach($section as $s)
            {
                if(get_class($s) == 'VMware_VCloud_API_OVF_VirtualHardwareSection_Type')
                {
                    $any = $s->getAny();
                    foreach($any as $a)
                    {
                        if($a->get_key() == 'uuid')
                        {
                            array_push($uuid, $a->get_value());
                        }
                    }
                }
            }
        }
        return $uuid;
    }

    /**
     * Retrieve SnapshotSection element for a vApp or VM.
     *
     * @return VMware_VCloud_API_SnapshotSectionType
     * @since Version 5.1.0
     */
    public function getSnapshotSection()
    {
        $url = $this->url . '/snapshotSection';
        return $this->svc->get($url);
    }

    /**
     * Creates new snapshot of a virtual machine or of all the virtual machines in a vApp. Prior to creation of the new 

snapshots, any existing user created snapshots associated with the virtual machines are removed.
     *
     * @param VMware_VCloud_API_CreateSnapshotParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function createSnapshot($params)
    {
        $url = $this->url . '/action/createSnapshot';
        $type = VMware_VCloud_SDK_Constants::
                CREATE_SNAPSHOT_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Hide hardware-assisted CPU virtualization from guest OS.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function disableNestedHypervisor()
    {
        $url = $this->url . '/action/disableNestedHypervisor';
        return $this->svc->post($url, 202);
    }

    /**
     * Expose hardware-assisted CPU virtualization to guest OS.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function enableNestedHypervisor()
    {
        $url = $this->url . '/action/enableNestedHypervisor';
        return $this->svc->post($url, 202);
    }

    /**
     * Removes all user created snapshots for a vApp or virtual machine.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function removeAllSnapshots()
    {
        $url = $this->url . '/action/removeAllSnapshots';
        return $this->svc->post($url, 202);
    }

    /**
     * Reverts a vApp or virtual machine to the current snapshot, if any.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function revertToCurrentSnapshot()
    {
        $url = $this->url . '/action/revertToCurrentSnapshot';
        return $this->svc->post($url, 202);
    }

    /**
     * Disable a vApp for downloading.
     *
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function disableDownload()
    {
        $url = $this->url . '/action/disableDownload';
        $this->svc->post($url, 204);
    }

    /**
     * Enable a vApp for downloading.
     *
     * @param boolean $wait     To wait till finish, set to true
     * @return VMware_VCloud_API_TaskType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function enableDownload($wait=true)
    {
        $url = $this->url . '/action/enableDownload';
        $task = $this->svc->post($url, 202);
        return ($wait)? $this->svc->waitForTask($task) : $task;
    }

    /**
     * Get the suffix or prefix of a string with a seeking pattern.
     *
     * @param string $string  String for which to search (the haystack)
     * @param bool $getSuffix A flag indicates get suffix (true) or prefix(false)
     * @param string $seek    Pattern to search for (the needle)
     * @return string         The suffix or prefix
     * @access protected
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    protected function getStringSuffix($string, $getSuffix=true, $seek='/')
    {
        $pos = strrpos($string, $seek);
        return $getSuffix? substr($string, $pos+1) : substr($string, 0, $pos);
    }

    /**
     * Download an OVF descriptor.
     *
     * @param string $ovfDescUrl   URL of the OVF descriptor file
     * @param string $ovfFile      Destination of the OVF file descriptor.
     *                             If null, the content will not be dumped
     *                             to a file
     * @return string Content of the OVF descriptor file
     * @access protected
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    protected function downloadOVFDescriptor($ovfDescUrl=null, $ovfFile=null)
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
     * Download OVF package.
     *
     * @param string $destDir   Directory where to save the downloaded file
     * @return null
     * @throws VMware_VCloud_SDK_Exception
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function downloadOVFFile($destDir='.')
    {
        $ovfDescUrl = $this->getDownloadOVFDescriptorUrl();
        if (!$ovfDescUrl)
        {
            throw new VMware_VCloud_SDK_Exception(
                                      "getDownloadOVFDescriptorUrl() failed\n");
        }
        $dest = implode('/', array($destDir, 'descriptor.ovf'));
        $this->svc->download($ovfDescUrl, $dest);
        $srcDir = $this->getStringSuffix($ovfDescUrl, False);
        $fnames = $this->getOVFPackageFileNames($ovfDescUrl);
        if (!isset($fnames))
        {
            throw new VMware_VCloud_SDK_Exception("getOVFPackageFileNames() failed\n");
        }
        foreach ($fnames as $fname)
        {
            $src = implode('/', array($srcDir, $fname));
            $dest = implode('/', array($destDir, $fname));
            $this->svc->download($src, $dest);
        }
    }

    /**
     * Download the vApp as an ovf package. The ovf file and its vmdk
     * contents are downloaded to the specified location. Before downloading
     * make sure the vapp is enabled for download.
     * @see Vapp#enableDownload()
     *
     * @param string $destDir   Directory where to save the downloaded file
     * @return null
     * @throws VMware_VCloud_SDK_Exception
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function downloadVapp($destDir='.')
    {
        $ovfDescUrl = $this->getDownloadOVFDescriptorUrl();
        if (!$ovfDescUrl)
        {
            throw new VMware_VCloud_SDK_Exception(
                                      "getDownloadOVFDescriptorUrl() failed\n");
        }
        $dest = implode('/', array($destDir, 'descriptor.ovf'));
        $this->svc->download($ovfDescUrl, $dest);
        $srcDir = $this->getStringSuffix($ovfDescUrl, False);
        $fnames = $this->getOVFPackageFileNames($ovfDescUrl);
        if (!isset($fnames))
        {
            throw new VMware_VCloud_SDK_Exception("getOVFPackageFileNames() failed\n");
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
     * @access protected
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    protected function getDownloadOVFDescriptorUrl()
    {
        $refs = $this->getContainedLinks(null, 'download:default');
        if (1 == count($refs))
        {
            return $refs[0]->get_href();
        }
        return null;
    }

    /**
     * Download lossless vApp OVF.
     * Lossless download mode generates ovf without loosing any of its configurations.
     *
     * @param string $destDir   Directory where to save the downloaded file
     * @return null
     * @throws VMware_VCloud_SDK_Exception
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
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
        $fnames = $this->getOVFPackageFileNames($ovfDescUrl);
        if (!isset($fnames))
        {
            throw new VMware_VCloud_SDK_Exception("getOVFPackageFileNames() failed\n");
        }
        foreach ($fnames as $fname)
        {
            $src = implode('/', array($srcDir, $fname));
            $dest = implode('/', array($destDir, $fname));
            $this->svc->download($src, $dest);
        }
    }

    /**
     * Download lossless vApp OVF.
     * Lossless download mode generates ovf without loosing any of its configurations.
     *
     * @return null
     * @throws VMware_VCloud_SDK_Exception
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    protected function getDownloadLosslessOVFDescriptorUrl()
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
     * @access protected
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    protected function getOVFPackageFileNames($ovfDescUrl)
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
     * Get file information after uploading vApp.
     *
     * @param VMware_VCloud_API_VAppType $vApp
     * @return array VMware_VCloud_API_FileType object array
     * @throws VMware_VCloud_SDK_Exception
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function getUploadedFileNames($vApp)
    {
        $fileList = $vApp->getFiles();
        $outFiles = array();
        if (!is_null($fileList))
        {
            $files = $fileList->getFile();
            foreach ($files as $file)
            {
                $size = $file->get_size();
                $transferred = $file->get_bytesTransferred();
                if (0 != $transferred && $transferred == $size)
                {
                    array_push($outFiles, $file);
                }
            }
        }
        return $outFiles;
    }

    /**
     * Get file information before uploading vApp.
     *
     * @param VMware_VCloud_API_VAppType $vApp
     * @return array VMware_VCloud_API_FileType object array
     * @throws VMware_VCloud_SDK_Exception
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function getUploadFileNames($vApp)
    {
        $fileList = $vApp->getFiles();
        if (!isset($fileList))
        {
            throw new VMware_VCloud_SDK_Exception (
                        "vApp does not contain the upload URLs.\n");
        }
        $files = $fileList->getFile();
        $outFiles = array();
        foreach ($files as $file)
        {
            $size = $file->get_size();
            $transferred = $file->get_bytesTransferred();
            if (0 == $transferred || $transferred < $size)
            {
                array_push($outFiles, $file);
            }
        }
        return $outFiles;
    }

    /**
     * Get upload URL of an OVF descriptor file.
     *
     * @return string|null   OVF descriptor file URL or null
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function getUploadOVFDescriptorUrl($files)
    {
        $refs = VMware_VCloud_SDK_Helper::getContainedLinks(null, 'upload:default', $files[0]);
        if (1 == count($refs))
        {
            return $refs[0]->get_href();
        }
        return null;
    }

    /**
     * Upload OVF descriptor file.
     *
     * @param string $url        HTTP request URL
     * @param string $filename   Path to the OVF descriptor
     * @return null
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function uploadOVFDescriptor($url, $filename)
    {
        $this->svc->upload($url, $filename, 'text/xml');
    }

    /**
     * Upload the vApp related files. This can be vmdk or a manifest.
     *
     * @param array VMware_VCloud_API_FileType object array  $files
     * @param string $ovfDescriptorPath   Path to the OVF descriptor
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function UploadFile($files, $ovfDescriptorPath)
    {
        foreach ($files as $file)
        {
            $refs = $file->getLink();
            $diskUrl = $refs[0]->get_href();
            $name = $file->get_name();
            $diskPath = null;
            $ovfFileName=substr($ovfDescriptorPath, strrpos($ovfDescriptorPath, '/')+1);
            $diskPath=str_replace($ovfFileName, $name, $ovfDescriptorPath);
            $this->svc->upload($diskUrl, $diskPath);
        }
    }
}