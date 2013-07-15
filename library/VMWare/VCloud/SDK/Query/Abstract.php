<?php
abstract class VMware_VCloud_SDK_Query_Abstract
{
    /**
     * Requests a query which returns a list of object references.
     *
     * @param string $type   Name of the query type.
     * @param array or VMware_VCloud_SDK_QueryParam $params Query parameters map.
     * @return VMware_VCloud_API_ReferencesType
     * @since Version 1.5.0
     */
    public abstract function queryReferences($type, $params=null);

    /**
     * Requests a query which returns a list of object records.
     *
     * @param string $type   Name of the query type.
     * @param array or VMware_VCloud_SDK_QueryParam $params Query parameters map.
     * @return VMware_VCloud_API_QueryResultRecordsType
     * @since Version 1.5.0
     */
    public abstract function queryRecords($type, $params=null);

    /**
     * Requests a query which returns a list of object idrecords.
     *
     * @param string $type   Name of the query type.
     * @param array or VMware_VCloud_SDK_QueryParam $params Query parameters map.
     * @return VMware_VCloud_API_QueryResultRecordsType
     * @since Version 1.5.0
     */
    public abstract function queryIdRecords($type, $params=null);

    /**
     * Returns a list of supported query types used to query in references
     * format.
     *
     * @return array
     * @since Version 1.5.0
     */
    public static final function getSupportedQueryReferencesTypes()
    {
        return array (
            VMware_VCloud_SDK_Query_Types::ADMIN_CATALOG,
            VMware_VCloud_SDK_Query_Types::ADMIN_CATALOG_ITEM,
            VMware_VCloud_SDK_Query_Types::ADMIN_GROUP,
            VMware_VCloud_SDK_Query_Types::ADMIN_MEDIA,
    /**
     * @deprecated since API version5.1.0, since SDK version 5.1.0
     */
            VMware_VCloud_SDK_Query_Types::ADMIN_ORG_NETWORK,

            VMware_VCloud_SDK_Query_Types::ADMIN_ORG_VDC,
            VMware_VCloud_SDK_Query_Types::ADMIN_SHADOW_VM,
            VMware_VCloud_SDK_Query_Types::ADMIN_TASK,
            VMware_VCloud_SDK_Query_Types::ADMIN_USER,
            VMware_VCloud_SDK_Query_Types::ADMIN_VAPP,
            VMware_VCloud_SDK_Query_Types::ADMIN_VAPP_NETWORK,
            VMware_VCloud_SDK_Query_Types::ADMIN_VAPP_TEMPLATE,
            VMware_VCloud_SDK_Query_Types::ADMIN_VM,
            VMware_VCloud_SDK_Query_Types::BLOCKING_TASK,
            VMware_VCloud_SDK_Query_Types::CATALOG,
            VMware_VCloud_SDK_Query_Types::CATALOG_ITEM,
            VMware_VCloud_SDK_Query_Types::DATASTORE,
            VMware_VCloud_SDK_Query_Types::GROUP,
            VMware_VCloud_SDK_Query_Types::HOST,
            VMware_VCloud_SDK_Query_Types::EXTERNAL_NETWORK,
            VMware_VCloud_SDK_Query_Types::MEDIA,
            VMware_VCloud_SDK_Query_Types::NETWORK_POOL,
            VMware_VCloud_SDK_Query_Types::ORGANIZATION,
    /**
     * @deprecated since API version5.1.0, since SDK version 5.1.0
     */
            VMware_VCloud_SDK_Query_Types::ORG_NETWORK,
            VMware_VCloud_SDK_Query_Types::ORG_VDC,
            VMware_VCloud_SDK_Query_Types::PROVIDER_VDC,
            VMware_VCloud_SDK_Query_Types::RIGHT,
            VMware_VCloud_SDK_Query_Types::ROLE,
            VMware_VCloud_SDK_Query_Types::STRANDED_USER,
            VMware_VCloud_SDK_Query_Types::TASK,
            VMware_VCloud_SDK_Query_Types::USER,
            VMware_VCloud_SDK_Query_Types::VAPP,
            VMware_VCloud_SDK_Query_Types::VAPP_NETWORK,
    /**
     * @deprecated since API version5.1.0, since SDK version 5.1.0
     */
            VMware_VCloud_SDK_Query_Types::VAPP_ORG_NET_RELATION,

            VMware_VCloud_SDK_Query_Types::VAPP_TEMPLATE,
            VMware_VCloud_SDK_Query_Types::VC,
            VMware_VCloud_SDK_Query_Types::VM,
            VMware_VCloud_SDK_Query_Types::USER_SERVICE,
            VMware_VCloud_SDK_Query_Types::EXTENSION_SERVICE_LINK,
            VMware_VCloud_SDK_Query_Types::USER_API_DEFINITION,
            VMware_VCloud_SDK_Query_Types::EXTENSION_ACLRULE,
            VMware_VCloud_SDK_Query_Types::EXTENSION_SERVICE_RESOURCES,
            VMware_VCloud_SDK_Query_Types::EXTENSION_RESOURCE_CLASS,
            VMware_VCloud_SDK_Query_Types::EXTENSION_RESOURCE_CLASS_ACTION,
            VMware_VCloud_SDK_Query_Types::EXTENSION_API_FILTER,
            VMware_VCloud_SDK_Query_Types::EXTENSION_SERVICE,
            VMware_VCloud_SDK_Query_Types::EXTENSION_APIDEFINITION,
            VMware_VCloud_SDK_Query_Types::EXTENSION_FILE_DESCRIPTOR,
            /**
             * @since SDK 5.1.0
             */
            VMware_VCloud_SDK_Query_Types::EDGE_GATEWAY,
            VMware_VCloud_SDK_Query_Types::ORG_VDC_NETWORK,
            VMware_VCloud_SDK_Query_Types::RESOURCEPOOL_VMLIST,
            VMware_VCloud_SDK_Query_Types::ADMIN_DISK,
            VMware_VCloud_SDK_Query_Types::DISK,
            VMware_VCloud_SDK_Query_Types::STRANDED_ITEM,
            VMware_VCloud_SDK_Query_Types::ORG_VDC_STORAGE_PROFILE,
            VMware_VCloud_SDK_Query_Types::ADMIN_ORG_VDC_STORAGE_PROFILE,
            VMware_VCloud_SDK_Query_Types::PROVIDER_VDC_STORAGE_PROFILE,
            VMware_VCloud_SDK_Query_Types::VAPP_ORG_VDC_NETWORK_RELATION
        );
    }

    /**
     * Returns a list of supported query types used to query in records format.
     *
     * @return array
     * @since Version 1.5.0
     */
    public static final function getSupportedQueryRecordsTypes()
    {
        return array (
    /**
     * @deprecated since API version5.1.0, since SDK version 5.1.0
     */
            VMware_VCloud_SDK_Query_Types::ADMIN_ALLOCATED_EXT_ADDR,

            VMware_VCloud_SDK_Query_Types::ADMIN_CATALOG,
            VMware_VCloud_SDK_Query_Types::ADMIN_CATALOG_ITEM,
            VMware_VCloud_SDK_Query_Types::ADMIN_GROUP,
            VMware_VCloud_SDK_Query_Types::ADMIN_MEDIA,
    /**
     * @deprecated since API version5.1.0, since SDK version 5.1.0
     */
            VMware_VCloud_SDK_Query_Types::ADMIN_ORG_NETWORK,

            VMware_VCloud_SDK_Query_Types::ADMIN_ORG_VDC,
            VMware_VCloud_SDK_Query_Types::ADMIN_SHADOW_VM,
            VMware_VCloud_SDK_Query_Types::ADMIN_TASK,
            VMware_VCloud_SDK_Query_Types::ADMIN_USER,
            VMware_VCloud_SDK_Query_Types::ADMIN_VAPP,
            VMware_VCloud_SDK_Query_Types::ADMIN_VAPP_NETWORK,
            VMware_VCloud_SDK_Query_Types::ADMIN_VAPP_TEMPLATE,
            VMware_VCloud_SDK_Query_Types::ADMIN_VM,
    /**
     * @deprecated since API version5.1.0, since SDK version 5.1.0
     */
            VMware_VCloud_SDK_Query_Types::ALLOCATED_EXT_ADDRESS,

            VMware_VCloud_SDK_Query_Types::BLOCKING_TASK,
            VMware_VCloud_SDK_Query_Types::CATALOG,
            VMware_VCloud_SDK_Query_Types::CATALOG_ITEM,
            VMware_VCloud_SDK_Query_Types::CELL,
            VMware_VCloud_SDK_Query_Types::DATASTORE,
            VMware_VCloud_SDK_Query_Types::DATASTORE_PROV_VDC_RELATION,
            VMware_VCloud_SDK_Query_Types::DV_SWITCH,
            VMware_VCloud_SDK_Query_Types::EVENT,
            VMware_VCloud_SDK_Query_Types::GROUP,
            VMware_VCloud_SDK_Query_Types::HOST,
            VMware_VCloud_SDK_Query_Types::EXTERNAL_NETWORK,
            VMware_VCloud_SDK_Query_Types::MEDIA,
            VMware_VCloud_SDK_Query_Types::NETWORK_POOL,
            VMware_VCloud_SDK_Query_Types::ORGANIZATION,
    /**
     * @deprecated since API version5.1.0, since SDK version 5.1.0
     */
            VMware_VCloud_SDK_Query_Types::ORG_NETWORK,
            VMware_VCloud_SDK_Query_Types::ORG_VDC,
            VMware_VCloud_SDK_Query_Types::ORG_VDC_RESOURCE_POOL_RELATION,
            VMware_VCloud_SDK_Query_Types::PORTGROUP,
            VMware_VCloud_SDK_Query_Types::PROVIDER_VDC,
            VMware_VCloud_SDK_Query_Types::PROVIDER_VDC_RESOURCE_POOL_RELATION,
            VMware_VCloud_SDK_Query_Types::RESOURCE_POOL,
            VMware_VCloud_SDK_Query_Types::RIGHT,
            VMware_VCloud_SDK_Query_Types::ROLE,
            VMware_VCloud_SDK_Query_Types::STRANDED_USER,
            VMware_VCloud_SDK_Query_Types::TASK,
            VMware_VCloud_SDK_Query_Types::USER,
            VMware_VCloud_SDK_Query_Types::VAPP,
            VMware_VCloud_SDK_Query_Types::VAPP_NETWORK,
    /**
     * @deprecated since API version5.1.0, since SDK version 5.1.0
     */
            VMware_VCloud_SDK_Query_Types::VAPP_ORG_NET_RELATION,

            VMware_VCloud_SDK_Query_Types::VAPP_TEMPLATE,
            VMware_VCloud_SDK_Query_Types::VC,
            VMware_VCloud_SDK_Query_Types::VM,
            VMware_VCloud_SDK_Query_Types::USER_SERVICE,
            VMware_VCloud_SDK_Query_Types::EXTENSION_SERVICE_LINK,
            VMware_VCloud_SDK_Query_Types::USER_API_DEFINITION,
            VMware_VCloud_SDK_Query_Types::EXTENSION_ACLRULE,
            VMware_VCloud_SDK_Query_Types::EXTENSION_SERVICE_RESOURCES,
            VMware_VCloud_SDK_Query_Types::EXTENSION_RESOURCE_CLASS,
            VMware_VCloud_SDK_Query_Types::EXTENSION_RESOURCE_CLASS_ACTION,
            VMware_VCloud_SDK_Query_Types::USER_FILE_DESCRIPTOR,
            VMware_VCloud_SDK_Query_Types::EXTENSION_API_FILTER,
            VMware_VCloud_SDK_Query_Types::EXTENSION_SERVICE,
            VMware_VCloud_SDK_Query_Types::EXTENSION_APIDEFINITION,
            VMware_VCloud_SDK_Query_Types::EXTENSION_FILE_DESCRIPTOR,
            /**
             * @since SDK 5.1.0
             */
            VMware_VCloud_SDK_Query_Types::ADMIN_EVENT,
            VMware_VCloud_SDK_Query_Types::EDGE_GATEWAY,
            VMware_VCloud_SDK_Query_Types::ORG_VDC_NETWORK,
            VMware_VCloud_SDK_Query_Types::EXTERNAL_LOCALIZATION,
            VMware_VCloud_SDK_Query_Types::RESOURCEPOOL_VMLIST,
            VMware_VCloud_SDK_Query_Types::DISK,
            VMware_VCloud_SDK_Query_Types::VM_DISK_RELATION,
            VMware_VCloud_SDK_Query_Types::ADMIN_DISK,
            VMware_VCloud_SDK_Query_Types::ADMIN_VM_DISK_RELATION,
            VMware_VCloud_SDK_Query_Types::CONDITION,
            VMware_VCloud_SDK_Query_Types::STRANDED_ITEM,
            VMware_VCloud_SDK_Query_Types::ORG_VDC_STORAGE_PROFILE,
            VMware_VCloud_SDK_Query_Types::ADMIN_ORG_VDC_STORAGE_PROFILE,
            VMware_VCloud_SDK_Query_Types::PROVIDER_VDC_STORAGE_PROFILE,
            VMware_VCloud_SDK_Query_Types::VAPP_ORG_VDC_NETWORK_RELATION
        );
    }

    /**
     * Returns a list of supported query types used to query in idrecords format.
     *
     * @return array
     * @since Version 1.5.0
     */
    public static final function getSupportedQueryIdRecordsTypes()
    {
        return self::getSupportedQueryRecordsTypes();
    }
}