<?php
class VMware_VCloud_SDK_Factory extends VMware_VCloud_SDK_Abstract
{
     protected static $typeMap = array (
        VMware_VCloud_SDK_Constants::ORG_REFERENCE_CONTENT_TYPE => 'Org',
        VMware_VCloud_SDK_Constants::VDC_CONTENT_TYPE => 'Vdc',
        VMware_VCloud_SDK_Constants::VAPP_CONTENT_TYPE => 'VApp',
        VMware_VCloud_SDK_Constants::VM_CONTENT_TYPE => 'Vm',
        VMware_VCloud_SDK_Constants::VAPP_TEMPLATE_CONTENT_TYPE => 'VAppTemplate',
        VMware_VCloud_SDK_Constants::CATALOG_CONTENT_TYPE => 'Catalog',
        VMware_VCloud_SDK_Constants::CATALOG_ITEM_CONTENT_TYPE => 'CatalogItem',
        VMware_VCloud_SDK_Constants::MEDIA_CONTENT_TYPE => 'Media',
        VMware_VCloud_SDK_Constants::NETWORK_CONTENT_TYPE => 'Network',
        VMware_VCloud_SDK_Constants::ORG_VDC_NETWORK_CONTENT_TYPE => 'Network',
        VMware_VCloud_SDK_Constants::ORG_NETWORK_CONTENT_TYPE => 'Network',
        VMware_VCloud_SDK_Constants::TASK_CONTENT_TYPE => 'Task',
        VMware_VCloud_SDK_Constants::TASK_LISTS_CONTENT_TYPE => 'TasksList',
        VMware_VCloud_SDK_Constants::DISK_CONTENT_TYPE => 'Disk',
        VMware_VCloud_SDK_Constants::ROLE_CONTENT_TYPE => 'Role',
        VMware_VCloud_SDK_Constants::USER_CONTENT_TYPE => 'User',
        VMware_VCloud_SDK_Constants::GROUP_CONTENT_TYPE => 'Group',
        VMware_VCloud_SDK_Constants::RIGHT_CONTENT_TYPE => 'Right',
        VMware_VCloud_SDK_Constants::SHADOW_VMS_CONTENT_TYPE => 'ShadowVm',
        VMware_VCloud_SDK_Constants::USER_SERVICE_CONTENT_TYPE => 'UserService',
        VMware_VCloud_SDK_Constants::APIDEFINITION_CONTENT_TYPE => 'APIDefinition',
        VMware_VCloud_SDK_Constants::VDC_STORAGE_PROFILE_CONTENT_TYPE => 'VdcStorageProfile',
        VMware_VCloud_SDK_Constants::ADMIN_ORGANIZATION_CONTENT_TYPE => 'AdminOrg',
        VMware_VCloud_SDK_Constants::SYSTEM_ORGANIZATION_CONTENT_TYPE => 'AdminOrg',
        VMware_VCloud_SDK_Constants::ADMIN_CATALOG_CONTENT_TYPE => 'AdminCatalog',
        VMware_VCloud_SDK_Constants::ADMIN_NETWORK_CONTENT_TYPE => 'AdminNetwork',
        VMware_VCloud_SDK_Constants::ADMIN_ORG_VDC_NETWORK_CONTENT_TYPE => 'AdminNetwork',
        VMware_VCloud_SDK_Constants::ADMIN_VDC_CONTENT_TYPE => 'AdminVdc',
        VMware_VCloud_SDK_Constants::ADMIN_VDC_STORAGE_PROFILE_CONTENT_TYPE => 'AdminVdcStorageProfile',
        VMware_VCloud_SDK_Constants::PROVIDER_VDC_CONTENT_TYPE => 'ProviderVdc',
        VMware_VCloud_SDK_Constants::PROVIDER_VDC_STORAGE_PROFILE_CONTENT_TYPE => 'ProviderVdcStorageProfile',
        VMware_VCloud_SDK_Constants::DATASTORE_CONTENT_TYPE => 'Extension_Datastore',
        VMware_VCloud_SDK_Constants::HOST_CONTENT_TYPE => 'Extension_Host',
        VMware_VCloud_SDK_Constants::EXTERNAL_NET_CONTENT_TYPE => 'Extension_VMWExternalNetwork',
        VMware_VCloud_SDK_Constants::EXTENSION_NETWORK_CONTENT_TYPE => 'Extension_VMWExternalNetwork',
        VMware_VCloud_SDK_Constants::NETWORK_POOL_CONTENT_TYPE => 'Extension_VMWNetworkPool',
        VMware_VCloud_SDK_Constants::EXTENSION_PROVIDER_VDC_CONTENT_TYPE => 'Extension_VMWProviderVdc',
        VMware_VCloud_SDK_Constants::PROVIDER_VDC_RESOURCE_POOL_CONTENT_TYPE => 'Extension_VMWProviderVdcResourcePool',
        VMware_VCloud_SDK_Constants::BLOCKING_TASK_CONTENT_TYPE => 'Extension_BlockingTask',
        VMware_VCloud_SDK_Constants::VIM_SERVER_CONTENT_TYPE => 'Extension_VimServer',
        VMware_VCloud_SDK_Constants::STRANDED_ITEM_CONTENT_TYPE => 'Extension_StrandedItem',
        VMware_VCloud_SDK_Constants::EXTENSION_SERVICE_CONTENT_TYPE => 'Extension_Service',
        VMware_VCloud_SDK_Constants::LINKS_CONTENT_TYPE => 'Extension_ServiceLink',
        VMware_VCloud_SDK_Constants::API_DEFINITIONS_CONTENT_TYPE => 'Extension_APIDefinition',
        VMware_VCloud_SDK_Constants::RESOURCE_CLASSES_CONTENT_TYPE => 'Extension_ResourceClass',
        VMware_VCloud_SDK_Constants::RESOURCECLASSACTION_CONTENT_TYPE => 'Extension_ResourceClassAction',
        VMware_VCloud_SDK_Constants::ACLRULE_CONTENT_TYPE => 'Extension_AclRule',
        VMware_VCloud_SDK_Constants::SERVICERESOURCES_CLASSES_CONTENT_TYPE => 'Extension_serviceResources',
        VMware_VCloud_SDK_Constants::VMW_PROVIDER_VDC_STORAGE_PROFILE_CONTENT_TYPE => 'Extension_VMWProviderVdcStorageProfile',
        VMware_VCloud_SDK_Constants::FILE_DESCRIPTOR_CONTENT_TYPE => 'Extension_File',
        VMware_VCloud_SDK_Constants::API_FILTERS_CONTENT_TYPE => 'Extension_ApiFilter',
        VMware_VCloud_SDK_Constants::EDGE_GATEWAYS_CONTENT_TYPE => 'EdgeGateway'
    );

    protected static $urlMap = array (
        'org' => 'Org',
        'vdc' => 'Vdc',
        'vapp' => 'VApp',
        'vm' => 'Vm',
        'vappTemplate' => 'VAppTemplate',
        'catalog' => 'Catalog',
        'catalogItem' => 'CatalogItem',
        'media' => 'Media',
        'network' => 'Network',
        'orgNetwork' => 'Network',
        'service' => 'UserService',
        'apidefinition' => 'APIDefinition',
        'shadowVms' => 'ShadowVm',
        'task' => 'Task',
        'tasksList' => 'TasksList',
        'disk' => 'Disk',
        'vdcStorageProfile' => 'VdcStorageProfile',
        'admin' => 'Admin',
        'admin/role' => 'Role',
        'admin/user' => 'User',
        'admin/edgeGateway' => 'EdgeGateway',
        'admin/group' => 'Group',
        'admin/providervdc' => 'ProviderVdc',
        'admin/org' => 'AdminOrg',
        'admin/vdc' => 'AdminVdc',
        'admin/catalog' => 'AdminCatalog',
        'admin/network' => 'AdminNetwork',
        'admin/vdcStorageProfile' => 'AdminVdcStorageProfile',
        'admin/pvdcStorageProfile' => 'ProviderVdcStorageProfile',
        'admin/right' => 'Right',
        'admin/extension' => 'Extension',
        'admin/extension/datastore' => 'Extension_Datastore',
        'admin/extension/host' => 'Extension_Host',
        'admin/extension/externalnet' => 'Extension_VMWExternalNetwork',
        'admin/extension/networkPool' => 'Extension_VMWNetworkPool',
        'admin/extension/providervdc' => 'Extension_VMWProviderVdc',
        'admin/extension/resourcePool' => 'Extension_VMWProviderVdcResourcePool',
        'admin/extension/blockingTask' => 'Extension_BlockingTask',
        'admin/extension/vimServer' => 'Extension_VimServer',
        'admin/extension/strandedItem' => 'Extension_StrandedItem',
        'admin/extension/pvdcStorageProfile' => 'Extension_VMWProviderVdcStorageProfile',
        'admin/extension/service' => 'Extension_Service',
        'admin/extension/service/link' => 'Extension_ServiceLink',
        'admin/extension/service/apidefinition' => 'Extension_APIDefinition',
        'admin/extension/service/resourceclass' => 'Extension_ResourceClass',
        'admin/extension/service/resourceclassaction' => 'Extension_ResourceClassAction',
        'admin/extension/service/aclrule' => 'Extension_AclRule',
        'admin/extension/service/serviceresource' => 'Extension_serviceResources',
        'admin/extension/service/apifilter' => 'Extension_ApiFilter'
    );

    /**
     *  Static method for creating a VMware vCloud SDK object. The object type
     *  is constructed based on the type of the input vCloud data object or a
     *  URL string, which represents an VMware vCloud resource entity or the
     *  entry point of these resource entities, from where to get references or
     *  links of the resource entities.
     *
     *  Table below lists how to get a reference type for a VMware vCloud
     *  entity. To be simple, here omits the package name (VMware_VCloud_SDK)
     *  from the class name. Each line is in the following format:
     *
     *  [SDK Object to creat] <= [SDK Object to invoke the get reference method]
     *                           ->[Method to get ReferenceType object]
     *  <ul>
     *    <li>Org          <= Service->getOrgRefs()
     *
     *    <li>Vdc          <= Org->getVdcRefs()
     *    <li>Catalog      <= Org->getCatalogRefs()
     *    <li>Task         <= Org->getTasks()
     *    <li>CatalogItem  <= Catalog->getCatalogItemRefs()
     *    <li>Media        <= Vdc->getMediaRefs()
     *    <li>Network      <= Vdc->getAvailableNetworkRefs()
     *    <li>VApp         <= Vdc->getVAppRefs() or VApp->getContainedVAppRefs()
     *    <li>VAppTemplate <= Vdc->getVAppTemplateRefs()
     *    <li>Vm           <= VApp->getContainedVmRefs() or VAppTemplate->getContainedVms()
     *    <li>Disk         <= Vdc->getDiskRefs()
     *    <li>VdcStorageProfile <= Vdc->getVdcStorageProfileRefs()
     *
     *    <li>AdminOrg     <= Admin->getAdminOrgRefs()
     *    <li>ProviderVdc  <= Admin->getProviderVdcRefs()
     *    <li>Role         <= Admin->getRoleRefs()
     *    <li>AdminVdc     <= AdminOrg->getAdminVdcRefs()
     *    <li>AdminCatalog <= AdminOrg->getAdminCatalogRefs()
     *    <li>AdminNetwork <= AdminOrg->getAdminNetworkRefs()
     *    <li>Group        <= AdminOrg->getGroupRefs()
     *    <li>User         <= AdminOrg->getUserRefs()
     *    <li>Right        <= Admin->getRightRefs()
     *    <li>AdminVdcStorageProfile <= AdminVdc->getAdminVdcStorageProfileRefs()
     *    <li>ProviderVdcStorageProfile <= AdminVdcStorageProfile->getProviderVdcStorageProfileRefs()
     *
     *    <li>Extension_Datastore           <= Extension->getDatastoreRefs()
     *    <li>Extension_Host                <= Extension->getHostRefs()
     *    <li>Extension_VMWExternalNetwork  <= Extension->getVMWExternalNetworkRefs()
     *    <li>Extension_VMWNetworkPool      <= Extension->getVMWNetworkPoolRefs()
     *    <li>Extension_VMWProviderVdc      <= Extension->getVMWProviderVdcRefs()
     *    <li>Extension_VimServer           <= Extension->getVimServerRefs()
     *    <li>Extension_BlockingTask        <= Extension->getBlockingTaskRefs()
     *    <li>Extension_StrandedItem        <= Extension->getStrandedItems()
     *    <li>Extension_VMWProviderVdcStorageProfile <= Extension_VMWProviderVdc->getProviderVdcStorageProfileRefs()
     *    <li>Extension_Service             <= Extension->getServiceRef()
     *    <li>Extension_ServiceLink         <= Extension->getServiceLinkRef()
     *    <li>Extension_APIDefinition       <= Extension->getAPIDefinitionRef()
     *    <li>Extension_ResourceClass       <= Extension->getResourceClassRef()
     *    <li>Extension_ResourceClassAction <= Extension->getResourceClassActionRef()
     *    <li>Extension_AclRule             <= Extension->getAclRuleRef()
     *    <li>Extension_serviceResources    <= Extension->getserviceResourcesRef()
     *  </ul>
     *
     * @param VMware_VCloud_SDK_Service $svc
     * @param mixed $obj A data object represents or references a vCloud entity
     *                   or the URL of a vCloud entity.
     * @return mixed A VMware vCloud SDK object
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public static function create($svc, $obj)
    {
        if (!isset($obj))
        {
            return null;
        }
        $url = null;
        if (method_exists($obj, 'get_type')) //assume it is a data object
        {
            $type = $obj->get_type();
            if ($type)
            {
                $className = self::getClassnameByType($type);
                if ($className)
                {
                    return new $className($svc, $obj->get_href());
                }
                throw new VMware_VCloud_SDK_Exception("Create SDK object " .
                                            "error: no class name found\n");
            }
        }
        else if (is_string($obj))  //assume it is an URL
        {
            $url = $obj;
        }
        else if(method_exists($obj, 'get_href'))
        {
            $url = $obj->get_href();
        }
        $className = self::getClassnameByUrl($svc, $url);
        if ($className)
        {
            return new $className($svc, $url);
        }
        throw new VMware_VCloud_SDK_Exception("Create SDK object error: " .
                                               "no class name found\n");
    }

    /**
     * Get a class name of an SDK object from a type attribute of a VMware
     * vCloud ReferenceType or LinkType data object.
     *
     * @param string $type  The 'type' attribute of a vCloud data object
     * @return string|null
     * @access protected
     */
    protected static function getClassnameByType($type)
    {
        $typeMap = self::$typeMap;
        $className = "VMware_VCloud_SDK_{$typeMap[$type]}";
        return class_exists($className)? $className : null;
    }

    /**
     * Get a class name of an SDK object from a URI of a VMware
     * vCloud resource entity or the entry point of resource entity.
     *
     * @param VMware_VCloud_SDK_Service $svc
     * @param string $url    URL of the resource entity or the entry point
     * @return string|null
     * @access protected
     */
    protected static function getClassnameByUrl($svc, $url)
    {
        $urlMap = self::$urlMap;
        $baseUrl = $svc->getBaseUrl();
        $rest = substr($url, strlen($baseUrl)+1);
        $restArr = explode('/', $rest);
        if (preg_match('/^vm-|vapp-|vappTemplate-/', end($restArr), $matches))
        {
            $key = substr_replace($matches[0], '', -1);
        }
        else
        {
            if (!preg_match('/^admin|extension$/', end($restArr)))
            {
                array_splice($restArr, count($restArr)-1); //remove id
            }
            $key = implode('/', $restArr);
        }
        $className = "VMware_VCloud_SDK_{$urlMap[$key]}";
        return class_exists($className)? $className : null;
    }
}