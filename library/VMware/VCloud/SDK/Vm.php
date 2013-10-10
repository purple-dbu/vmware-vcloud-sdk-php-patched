<?php
class VMware_VCloud_SDK_Vm extends VMware_VCloud_SDK_VApp_Abstract
{
    /**
     * Get a reference to a VMware vCloud VM entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getVmRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::VM_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud VM entity.
     *
     * @return VMware_VCloud_API_VmType
     * @since Version 1.0.0
     */
    public function getVm()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs the vCloud entity ID of this VM from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:vm:' . $this->getUuid();
    }

    /**
     * Get the link to the container of the VM.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getContainerVAppRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container of the VM.
     *
     * @return VMware_VCloud_API_VAppType|null
     * @since Version 1.0.0
     */
    public function getContainerVApp()
    {
        $ref = $this->getContainerVAppRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Get virtual hardware settings of this VM.
     *
     * @return VMware_VCloud_API_OVF_VirtualHardwareSection_Type
     * @since Version 1.0.0
     */
    public function getVirtualHardwareSettings()
    {
        $url = $this->url . '/virtualHardwareSection';
        return $this->svc->get($url);
    }

    /**
     * Modify the guest virtual hardware settings.
     *
     * @param VMware_VCloud_API_OVF_VirtualHardwareSection_Type $vhSection
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyVirtualHardwareSettings($vhSection)
    {
        $url = $this->url . '/virtualHardwareSection';
        $type = VMware_VCloud_SDK_Constants::VIRTUAL_HARDWARE_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $vhSection);
    }

    /**
     * Get the CPU settings of this VM.
     *
     * @return VMware_VCloud_API_OVF_RASD_Type
     * @since Version 1.0.0
     */
    public function getVirtualCpu()
    {
        $url = $this->url . '/virtualHardwareSection/cpu';
        return $this->svc->get($url, '', true, 'VMware_VCloud_API_OVF_RASD_Type');
    }

    /**
     * Modify the CPU settings of this VM.
     *
     * @param VMware_VCloud_API_OVF_RASD_Type $cpu
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyVirtualCpu($cpu)
    {
        $url = $this->url . '/virtualHardwareSection/cpu';
        $type = VMware_VCloud_SDK_Constants::RASD_ITEM_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $cpu);
    }

    /**
     * Get the memory settings of this VM.
     *
     * @return VMware_VCloud_API_OVF_RASD_Type
     * @since Version 1.0.0
     */
    public function getVirtualMemory()
    {
        $url = $this->url . '/virtualHardwareSection/memory';
        return $this->svc->get($url, '', true, 'VMware_VCloud_API_OVF_RASD_Type');
    }

    /**
     * Modify the memory settings of this VM.
     *
     * @param VMware_VCloud_API_OVF_RASD_Type $mem
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyVirtualMemory($mem)
    {
        $url = $this->url . '/virtualHardwareSection/memory';
        $type = VMware_VCloud_SDK_Constants::RASD_ITEM_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $mem);
    }

    /**
     * Get a list of virtual hardware items.
     *
     * @param string $item
     * @return VMware_VCloud_API_RasdItemsListType
     * @access private
     */
    private function getVirtualHardwareItems($item)
    {
        $url = $this->url . '/virtualHardwareSection/' . $item;
        return $this->svc->get($url);
    }

    /**
     * Get a RASD list object representing virtual disks of this VM.
     *
     * @return VMware_VCloud_API_RasdItemsListType
     * @since Version 1.0.0
     */
    public function getVirtualDisks()
    {
        return $this->getVirtualHardwareItems('disks');
    }

    /**
     * Modify virtual disk(s) of this VM.
     *
     * @param VMware_VCloud_API_RasdItemsListType $rasdItems
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyVirtualDisks($rasdItems)
    {
        $url = $this->url . '/virtualHardwareSection/disks';
        $type = VMware_VCloud_SDK_Constants::RASD_ITEMS_LIST_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $rasdItems);
    }

    /**
     * Get a RASD list object representing virtual network cards of this VM.
     *
     * @return VMware_VCloud_API_RasdItemsListType
     * @since Version 1.0.0
     */
    public function getVirtualNetworkCards()
    {
        return $this->getVirtualHardwareItems('networkCards');
    }

    /**
     * Modify virtual network card(s) of this VM.
     *
     * @param VMware_VCloud_API_RasdItemsListType $rasdItems
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyVirtualNetworkCards($rasdItems)
    {
        $url = $this->url . '/virtualHardwareSection/networkCards';
        $type = VMware_VCloud_SDK_Constants::RASD_ITEMS_LIST_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $rasdItems);
    }

    /**
     * Get a RASD list object representing virtual floppy and CD/DVD drives
     * of this VM.
     *
     * @return VMware_VCloud_API_RasdItemsListType
     * @since Version 1.0.0
     */
    public function getVirtualMedia()
    {
        return $this->getVirtualHardwareItems('media');
    }

    /**
     * Get the operating system settings of this VM.
     *
     * @return VMware_VCloud_API_OVF_OperatingSystemSection_Type
     * @since Version 1.0.0
     */
    public function getOperatingSystemSettings()
    {
        $url = $this->url . '/operatingSystemSection';
        return $this->svc->get($url);
    }

    /**
     * Modify the operating system settings of this VM.
     *
     * @param VMware_VCloud_API_OVF_OperatingSystemSection_Type $os
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyOperatingSystemSettings($os)
    {
        $url = $this->url . '/operatingSystemSection';
        $type = VMware_VCloud_SDK_Constants::
                OPERATING_SYSTEM_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $os);
    }

    /**
     * Updates Vm name, Description, and any or all of the following sections.
     * VirtualHardwareSection
     * OperatingSystemSection
     * NetworkConnectionSection
     * GuestCustomizationSection
     *
     * @param VMware_VCloud_API_VmType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function reconfigureVm($params)
    {
        $url = $this->url . '/action/reconfigureVm';
        $type = VMware_VCloud_SDK_Constants::VM_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Get the network connection settings of this VM.
     *
     * @return VMware_VCloud_API_NetworkConnectionSectionType
     * @since Version 1.0.0
     */
    public function getNetworkConnectionSettings()
    {
        $url = $this->url . '/networkConnectionSection';
        return $this->svc->get($url);
    }

    /**
     * Modify the network connection settings of this VM.
     *
     * @param VMware_VCloud_API_NetworkConnectionSectionType $net
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyNetworkConnectionSettings($net)
    {
        $url = $this->url . '/networkConnectionSection';
        $type = VMware_VCloud_SDK_Constants::
                NETWORK_CONNECTION_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $net);
    }

    /**
     * Get guest customization settings.
     *
     * @return VMware_VCloud_API_GuestCustomizationSectionType
     * @since Version 1.0.0
     */
    public function getGuestCustomizationSettings()
    {
        $url = $this->url . '/guestCustomizationSection';
        return $this->svc->get($url);
    }

    /**
     * Modify the customization settings of this VM.
     *
     * @param VMware_VCloud_API_GuestCustomizationSectionType $cs
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modifyGuestCustomizationSettings($cs)
    {
        $url = $this->url . '/guestCustomizationSection';
        $type = VMware_VCloud_SDK_Constants::
                GUEST_CUSTOMIZATION_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $cs);
    }

    /**
     * Insert a virtual media.
     *
     * @param VMware_VCloud_API_MediaInsertOrEjectParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function insertMedia($params)
    {
        $url = $this->url . '/media/action/insertMedia';
        $type = VMware_VCloud_SDK_Constants::
                MEDIA_INSERT_OR_EJECT_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Eject a virtual media.
     *
     * @param VMware_VCloud_API_MediaInsertOrEjectParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function ejectMedia($params)
    {
        $url = $this->url . '/media/action/ejectMedia';
        $type = VMware_VCloud_SDK_Constants::
                MEDIA_INSERT_OR_EJECT_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Get a VM screen thumbnail image.
     *
     * @param string $thumbnail   Path of the thumbnail image destination
     * @return null
     * @since Version 1.0.0
     */
    public function getScreenThumbnailImage($thumbnail)
    {
        $url = $this->url . "/screen";
        $this->svc->download($url, $thumbnail, 'image/png');
    }

    /**
     * Get a VM screen ticket.
     *
     * @return VMware_VCloud_API_ScreenTicketType
     * @since Version 1.0.0
     */
    public function getScreenTicket()
    {
        $url = $this->url . '/screen/action/acquireTicket';
        return $this->svc->post($url, 200);
    }

    /**
     * Get a VM screen ticket tokens, in IP address, VM MOF, and encided-ticket
     *
     * @return array String array, keys are:
     * <ul>
     *     <li> ip -- IP address to be connected by the remote console
     *     <li> mof -- managed object reference of the virtual machine
     *     <li> ticket -- decoded screen ticket
     * </ul>
     * @since Version 1.0.0
     */
    public function getScreenTicketTokens()
    {
        $tokens = array();
        $ticketObj = $this->getScreenTicket();
        if ($ticketObj)
        {
            $ticket = $ticketObj->get_valueOf();
            $matches = preg_split('/\/|\?|=/', $ticket);
            $tokens = array ('ip' => $matches[2],
                             'mof' => $matches[3],
                             'ticket' => urldecode($matches[5])
                            );
        }
        return $tokens;
    }

    /**
     * Retrieve a mks ticket that you can use to gain access to the console of a running VM.
     *
     * @return VMware_VCloud_API_MksTicketType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function acquireMksTicket()
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::ACTION_ACQUIRE_MKSTICKET_URL;
        return $this->svc->post($url, 200);
    }

    /**
     * Get a VM pending question.
     *
     * @return VMware_VCloud_API_VmPendingQuestionType
     * @since Version 1.0.0
     */
    public function getPendingQuestion()
    {
        return $this->svc->get($this->url . '/question');
    }

    /**
     * Answer a VM pending question.
     *
     * @param VMware_VCloud_API_VmQuestionAnswerType $answer
     * @return null
     * @since Version 1.0.0
     */
    public function answerPendingQuestion($answer)
    {
        $url = $this->url . '/question/action/answer';
        $type = VMware_VCloud_SDK_Constants::VM_PENDING_ANSWER_CONTENT_TYPE;
        return $this->svc->post($url, 204, $type, $answer);
    }

    /**
     * Get the status of this VM.
     *
     * The following are the possible VM status:
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
     * </ul>
     *
     * @return int VM status
     * @since Version 1.0.0
     */
    public function getStatus()
    {
        return $this->getVm()->get_status();
    }

    /**
     * Modify name and/or description of this VM.
     *
     * @param string $name   New name of the VM
     * @param string $description   New description of the VM
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function modify($name=null, $description=null)
    {
        $vm = new VMware_VCloud_API_VmType();
        $name = (isset($name))? $name : $this->getVm()->get_name();
        $vm->set_name($name);
        if (!is_null($description))
        {
            $vm->setDescription($description);
        }
        $type = VMware_VCloud_SDK_Constants::VM_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $vm);
    }

    /**
     * Installs VMware tools to the VM.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function installVMwareTools()
    {
        $url = $this->url . '/action/installVMwareTools';
        return $this->svc->post($url, 202);
    }

    /**
     * Get the runtime info section of the VM.
     *
     * @return VMware_VCloud_API_RuntimeInfoSectionType
     * @since  Version 1.5.0
     */
    public function getRuntimeInfo()
    {
        $url = $this->url . '/runtimeInfoSection';
        return $this->svc->get($url);
    }

    /**
     * Get the installed software information of the VM.
     *
     * @return array|null VMware_VCloud_API_OVF_ProductSection_Type object array
     *                    or null
     * @since Version 1.5.0
     */
    public function getProductInfo()
    {
        $url = $this->url . '/productSections';
        $list = $this->svc->get($url);
        if (isset($list) && $list->getProductSection())
        {
            return $list->getProductSection();
        }
        return null;
    }

    /**
     * Modify the installed software information of the VM.
     *
     * @param  VMware_VCloud_API_OVF_ProductSection_Type
     * @return VMware_VCloud_API_TaskType
     * @since  Version 1.5.0
     */
    public function modifyProductInfo($productInfo)
    {
        $url = $this->url . '/productSections';
        $type = VMware_VCloud_SDK_Constants::PRODUCT_SECTIONS_CONTENT_TYPE;
        return $this->svc->put($url, 202);
    }

    /**
     * Consolidates the VM.
     *
     * @return VMware_VCloud_API_TaskType
     * @since  Version 1.5.0
     */
    public function consolidate()
    {
        $url = $this->url . '/action/consolidate';
        return $this->svc->post($url, 202);
    }

    /**
     * Relocates the VM.
     *
     * @param  VMware_VCloud_API_RelocateParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since  Version 1.5.0
     * @deprecated since version 5.1.0
     */
    public function relocate($params)
    {
        $url = $this->url . '/action/relocate';
        $type = VMware_VCloud_SDK_Constants::RELOCATE_VM_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Upgrade virtual hardware version of the VM.
     *
     * @return VMware_VCloud_API_TaskType
     * @since  Version 1.5.0
     */
    public function upgradeHardwareVersion()
    {
        $url = $this->url . '/action/upgradeHardwareVersion';
        return $this->svc->post($url, 202);
    }

    /**
     * Attach a disk to a VM.
     *
     * @param VMware_VCloud_API_DiskAttachOrDetachParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since  Version 5.1.0
     */
    public function attachDisk($params)
    {
        $url = $this->url . '/disk/action/attach';
        $type = VMware_VCloud_SDK_Constants::
                  DISK_ATTACH_DETACH_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Detach a disk to a VM.
     *
     * @param VMware_VCloud_API_DiskAttachOrDetachParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since  Version 5.1.0
     */
    public function detachDisk($params)
    {
         $url = $this->url . '/disk/action/detach';
         $type = VMware_VCloud_SDK_Constants::
                   DISK_ATTACH_DETACH_PARAMS_CONTENT_TYPE;
         return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Enable nested hypervisor of the VM.
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
     * Disable nested hypervisor of the VM.
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
     * Perform storage profile compliance check on a VM.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function CheckCompliance()
    {
        $url = $this->url . '/action/checkCompliance';
        return $this->svc->post($url, 202);
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
     * Get storage profile compliance result of the VM.
     *
     * @return VMware_VCloud_API_ComplianceResultType
     * @since Version 5.1.0
     */
    public function getComplianceResult()
    {
        $url = $this->url . '/complianceResult';
        return $this->svc->get($url);
    }

    /**
     * Get capability of the VM.
     *
     * @return VMware_VCloud_API_VmCapabilitiesType
     * @since Version 5.1.0
     */
    public function getVmCapabilities()
    {
        $url = $this->url . '/vmCapabilities';
        return $this->svc->get($url);
    }

    /**
     * Update capability of the VM.
     *
     * @param VMware_VCloud_API_VmCapabilitiesType
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function updateVmCapabilities($capType)
    {
        $url = $this->url . '/vmCapabilities';
        $type = VMware_VCloud_SDK_Constants::VM_CAPABILITIES_SECTION_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $capType);
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
     * Get collection of shadow vm references. vAppTemplate VM contains the shadow vm references.
     * Applicable for vAppTemplate VM not for vApp VM.
     * @param string $name   Name of the shadow vm to get. If null, returns all
     * @return array         VMware_VCloud_API_ReferenceType object array.
     * @since Version 1.5.0
     */
    public function getShadowVmsRefs($name=null)
    {
        $url = $this->url . '/shadowVms';
        $shadowvmsRefs = $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getReference', $shadowvmsRefs);
    }
}