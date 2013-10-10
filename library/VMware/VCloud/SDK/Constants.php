<?php
final class VMware_VCloud_SDK_Constants
{
    /**
     * TYPE Constants
     */
    const CAPTURE_VAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.captureVAppParams+xml';
    const CATALOG_CONTENT_TYPE = 'application/vnd.vmware.vcloud.catalog+xml';
    const CATALOG_ITEM_CONTENT_TYPE = 'application/vnd.vmware.vcloud.catalogItem+xml';
    const CLONE_MEDIA_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.cloneMediaParams+xml';
    const CLONE_VAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.cloneVAppParams+xml';
    const CLONE_VAPP_TEMPLATE_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.cloneVAppTemplateParams+xml';
    const COMPOSE_VAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.composeVAppParams+xml';
    const CONTROL_ACCESS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.controlAccess+xml';
    const CUSTOMIZATION_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.customizationSection+xml';
    const DEPLOY_VAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.deployVAppParams+xml';
    const DISK_CONTENT_TYPE = 'application/vnd.vmware.vcloud.disk+xml';
    const DISK_ATTACH_DETACH_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.diskAttachOrDetachParams+xml';
    const DISK_CREATE_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.diskCreateParams+xml';
    const ENABLE_DOWNLOAD_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.enableDownloadParams+xml';
    const ENTITY_CONTENT_TYPE = 'application/vnd.vmware.vcloud.entity+xml';
    const ERROR_CONTENT_TYPE = 'application/vnd.vmware.vcloud.error+xml';
    const GUEST_CUSTOMIZATION_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.guestCustomizationSection+xml';
    const INSTANTIATE_VAPP_TEMPLATE_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.instantiateVAppTemplateParams+xml';
    const LEASE_SETTINGS_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.leaseSettingsSection+xml';
    const MEDIA_CONTENT_TYPE = 'application/vnd.vmware.vcloud.media+xml';
    const MEDIA_INSERT_OR_EJECT_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.mediaInsertOrEjectParams+xml';
    const CREATE_SNAPSHOT_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.createSnapshotParams+xml';
    const METADATA_CONTENT_TYPE = 'application/vnd.vmware.vcloud.metadata+xml';
    const METADATA_VALUE_CONTENT_TYPE = 'application/vnd.vmware.vcloud.metadata.value+xml';
    const NETWORK_CONFIG_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.networkConfigSection+xml';
    const NETWORK_CONNECTION_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.networkConnectionSection+xml';
    const NETWORK_CONTENT_TYPE = 'application/vnd.vmware.vcloud.network+xml';
    const NETWORK_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.networkSection+xml';
    const OPERATING_SYSTEM_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.operatingSystemSection+xml';
    const ORGANIZATION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.organization+xml';
    const ORG_LIST_CONTENT_TYPE = 'application/vnd.vmware.vcloud.orgList+xml';
    const ORG_NETWORK_CONTENT_TYPE = 'application/vnd.vmware.vcloud.orgNetwork+xml';
    const ORG_REFERENCE_CONTENT_TYPE = 'application/vnd.vmware.vcloud.org+xml';
    const OWNER_CONTENT_TYPE = 'application/vnd.vmware.vcloud.owner+xml';
    const PRODUCT_SECTIONS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.productSections+xml';
    const RASD_ITEM_CONTENT_TYPE = 'application/vnd.vmware.vcloud.rasdItem+xml';
    const RASD_ITEMS_LIST_CONTENT_TYPE = 'application/vnd.vmware.vcloud.rasdItemsList+xml';
    const RELOCATE_VM_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.relocateVmParams+xml';
    const RECOMPOSE_VAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.recomposeVAppParams+xml';
    const SCREEN_TICKET_CONTENT_TYPE = 'application/vnd.vmware.vcloud.screenTicket+xml';
    const SHADOW_VMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.shadowvm+xml';
    const STARTUP_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.startupSection+xml';
    const TASK_CONTENT_TYPE = 'application/vnd.vmware.vcloud.task+xml';
    const TASK_LISTS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.tasksList+xml';
    const UPDATE_AMQP_CERTIFICATE_CONTENT_TYPE = 'application/vnd.vmware.admin.certificateUpdateParams+xml';
    const UPDATE_AMQP_TRUSTSTORE_CONTENT_TYPE = 'application/vnd.vmware.admin.trustStoreUpdateParams+xml';
    const UPDATE_LDAP_SSPI_KEYTAB_CONTENT_TYPE = 'application/vnd.vmware.admin.sspiKeytabUpdateParams+xml';
    const UPDATE_LDAP_CERTIFICATE_CONTENT_TYPE = 'application/vnd.vmware.admin.certificateUpdateParams+xml';
    const UPDATE_LDAP_KEYSTORE_CONTENT_TYPE = 'application/vnd.vmware.admin.keystoreUpdateParams+xml';
    const UPDATE_VC_TRUSTSORE_CONTENT_TYPE = 'application/vnd.vmware.admin.vcTrustStoreUpdateParams+xml';
    const UPLOAD_VAPP_TEMPLATE_PARAMS_CONTENT_TYPE ='application/vnd.vmware.vcloud.uploadVAppTemplateParams+xml';
    const UNDEPLOY_VAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.undeployVAppParams+xml';
    const VAPP_CONTENT_TYPE = 'application/vnd.vmware.vcloud.vApp+xml';
    const VAPP_TEMPLATE_CONTENT_TYPE = 'application/vnd.vmware.vcloud.vAppTemplate+xml';
    const VDC_CONTENT_TYPE = 'application/vnd.vmware.vcloud.vdc+xml';
    const VDC_STORAGE_PROFILE_CONTENT_TYPE = 'application/vnd.vmware.vcloud.vdcStorageProfile+xml';
    const VIRTUAL_HARDWARE_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.virtualHardwareSection+xml';
    const VM_CAPABILITIES_SECTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.vmCapabilitiesSection+xml';
    const VM_CONTENT_TYPE = 'application/vnd.vmware.vcloud.vm+xml';
    const VM_PENDING_ANSWER_CONTENT_TYPE = 'application/vnd.vmware.vcloud.vmPendingAnswer+xml';
    const VM_PENDING_QUESTION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.vmPendingQuestion+xml';

    const ADMIN_CATALOG_CONTENT_TYPE = 'application/vnd.vmware.admin.catalog+xml';
    const ADMIN_NETWORK_CONTENT_TYPE = 'application/vnd.vmware.admin.network+xml';
    const ADMIN_ORG_NETWORK_CONTENT_TYPE = 'application/vnd.vmware.admin.orgNetwork+xml';
    const ORG_VDC_NETWORK_CONTENT_TYPE = 'application/vnd.vmware.vcloud.orgVdcNetwork+xml';
    const ADMIN_ORGANIZATION_CONTENT_TYPE = 'application/vnd.vmware.admin.organization+xml';
    const ADMIN_VCLOUD_CONTENT_TYPE = 'application/vnd.vmware.admin.vcloud+xml';
    const ADMIN_VDC_CONTENT_TYPE = 'application/vnd.vmware.admin.vdc+xml';
    const ADMIN_VDC_STORAGE_PROFILE_CONTENT_TYPE = 'application/vnd.vmware.admin.vdcStorageProfile+xml';
    const ADMIN_ORG_VDC_NETWORK_CONTENT_TYPE = 'application/vnd.vmware.admin.orgVdcNetwork+xml';
    const AMQP_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.amqpSettings+xml';
    const CREATE_VDC_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.createVdcParams+xml';
    const EMAIL_TEMPLATE_CONTENT_TYPE = 'application/vnd.vmware.admin.emailTemplate+xml';
    const EVENT_CONTENT_TYPE = 'application/vnd.vmware.admin.event+xml';
    const EXTENSION_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.extensionSettings+xml';
    const GROUP_CONTENT_TYPE = 'application/vnd.vmware.admin.group+xml';
    const NOTIFICATIONS_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.notificationsSettings+xml';
    const ORG_EMAIL_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.organizationEmailSettings+xml';
    const ORG_FEDERATION_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.organizationFederationSettings+xml';
    const ORG_GENERAL_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.organizationGeneralSettings+xml';
    const ORG_GUEST_PERSONALIZATION_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.guestPersonalizationSettings+xml';
    const ORG_LDAP_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.organizationLdapSettings+xml';
    const ORG_OPERATION_LIMITS_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.orgOperationLimitsSettings+xml';
    const ORG_PASSWORD_POLICY_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.organizationPasswordPolicySettings+xml';
    const ORG_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.orgSettings+xml';
    const PROVIDER_VDC_CONTENT_TYPE = 'application/vnd.vmware.admin.providervdc+xml';
    const PROVIDER_VDC_STORAGE_PROFILE_CONTENT_TYPE = 'application/vnd.vmware.admin.pvdcStorageProfile+xml';
    const PUBLISH_CATALOG_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.publishCatalogParams+xml';
    const PUBLISH_TO_EXTERNAL_ORGANIZATIONS_CONTENT_TYPE= 'application/vnd.vmware.admin.publishExternalCatalogParams+xml';
    const RIGHT_CONTENT_TYPE = 'application/vnd.vmware.admin.right+xml';
    const ROLE_CONTENT_TYPE = 'application/vnd.vmware.admin.role+xml';
    const UPDATE_VDC_STORAGE_PROFILES_CONTENT_TYPE = 'application/vnd.vmware.admin.updateVdcStorageProfiles+xml';
    const USER_CONTENT_TYPE = 'application/vnd.vmware.admin.user+xml';
    const VAPP_LEASE_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.vAppLeaseSettings+xml';
    const VAPP_TEMPLATE_LEASE_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.vAppTemplateLeaseSettings+xml';
    const AUTHORIZATION_CHECK_CONTENT_TYPE = 'application/vnd.vmware.admin.authorizationCheckParams+xml';
    const BLOCKING_TASK_OPERATION_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.blockingTaskOperationParams+xml';
    const BLOCKING_TASK_CONTENT_TYPE = 'application/vnd.vmware.admin.blockingTask+xml';
    const BLOCKING_TASK_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.blockingTaskSettings+xml';
    const BLOCKING_TASK_UPDPROG_PARAMS_CONTENT_TYPE =
                         'application/vnd.vmware.admin.blockingTaskUpdateProgressOperationParams+xml';
    const BRANDING_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.brandingSettings+xml';
    const CREATE_PROVIDER_VDC_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.createProviderVdcParams+xml';
    const DATASTORE_CONTENT_TYPE = 'application/vnd.vmware.admin.datastore+xml';
    const EMAIL_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.emailSettings+xml';
    const EMAIL_SMTP_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.emailSmtpSettings+xml';
    const ENTITY_REFERENCES_CONTENT_TYPE = 'application/vnd.vmware.admin.entityReferences+xml';
    const EXTENSION_PROVIDER_VDC_CONTENT_TYPE = 'application/vnd.vmware.admin.vmwprovidervdc+xml';
    const EXTENSION_MERGE_PARAMS_TYPE = 'application/vnd.vmware.admin.providerVdcMergeParams+xml';
    const EXTERNAL_NET_CONTENT_TYPE = 'application/vnd.vmware.admin.vmwexternalnet+xml';
    const EXTENSION_NETWORK_CONTENT_TYPE = 'application/vnd.vmware.admin.extension.network+xml';
    const GENERAL_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.generalSettings+xml';
    const HOST_CONTENT_TYPE = 'application/vnd.vmware.admin.host+xml';
    const IMPORT_MEDIA_CONTENT_TYPE = 'application/vnd.vmware.admin.importMediaParams+xml';
    const IMPORT_VMASVAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.importVmAsVAppParams+xml';
    const IMPORT_VMASVAPPTEMPLATE_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.importVmAsVAppTemplateParams+xml';
    const IMPORT_VM_INTO_EXISTING_VAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.importVmIntoExistingVAppParams+xml';
    const IMPORT_VM_INTO_EXISTING_VAPPTEMPLATE_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.importVmIntoExistingVAppTemplateParams+xml';
    const INSTANTIATE_OVF_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.vcloud.instantiateOvfParams+xml';
    const LDAP_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.ldapSettings+xml';
    const LDAP_GROUP_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.ldapGroupSettings+xml';
    const LDAP_USER_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.ldapUserSettings+xml';
    const LICENSING_REPORT_CONTENT_TYPE = 'application/vnd.vmware.admin.licensingReport+xml';
    const LICENSE_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.licenseSettings+xml';
    const MIGRATE_VM_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.migrateVmParams+xml';
    const NETWORK_POOL_CONTENT_TYPE = 'application/vnd.vmware.admin.networkPool+xml';
    const PREPARE_HOST_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.prepareHostParams+xml';
    const PROVIDER_VDC_RESOURCE_POOL_CONTENT_TYPE = 'application/vnd.vmware.admin.vmwProviderVdcResourcePool+xml';
    const REGISTER_VIM_SERVER_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.registerVimServerParams+xml';
    const REGISTER_VAPP_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.registerVAppParams+xml';
    const RESOURCE_POOL_SET_UPDATE_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.resourcePoolSetUpdateParams+xml';
    const STRANDED_ITEM_CONTENT_TYPE = 'application/vnd.vmware.admin.strandedItem+xml';
    const SYSTEM_ORGANIZATION_CONTENT_TYPE = 'application/vnd.vmware.admin.systemOrganization+xml';
    const SYSTEM_PASSWORD_POLICY_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.systemPasswordPolicySettings+xml';
    const SUBSCRIBE_TO_EXTERNAL_CATALOG_CONTENT_TYPE = 'application/vnd.vmware.admin.externalCatalogSubscriptionParams+xml';
    const KERBEROS_SETTINGS_CONTENT_TYPE='application/vnd.vmware.admin.kerberosSettings+xml';
    const LOOKUPSERVICE_SETTINGS_CONTENT_TYPE ='application/vnd.vmware.admin.lookupServiceParams+xml';
    const CATALOG_SETTINGS_CONTENT_TYPE ='application/vnd.vmware.admin.catalogSettings+xml';
    const ACLRULE_CONTENT_TYPE= 'application/vnd.vmware.admin.aclRule+xml';
    const API_DEFINITIONS_CONTENT_TYPE='application/vnd.vmware.admin.apiDefinition+xml';
    const LINKS_CONTENT_TYPE='application/vnd.vmware.admin.serviceLink+xml';
    const LOCALIZATION_BUNDLES_CONTENT_TYPE='application/vnd.vmware.admin.bundleUploadParams+xml';
    const API_FILTERS_CONTENT_TYPE='application/vnd.vmware.admin.apiFilter+xml';
    const RESOURCE_CLASSES_CONTENT_TYPE='application/vnd.vmware.admin.resourceClass+xml';
    const UPDATE_RIGHTS_CONTENT_TYPE='application/vnd.vmware.admin.updateRightsParams+xml';
    const RESOURCECLASSACTION_CONTENT_TYPE= 'application/vnd.vmware.admin.resourceClassAction+xml';
    const SERVICERESOURCES_CLASSES_CONTENT_TYPE= 'application/vnd.vmware.admin.serviceResource+xml';
    const SYSTEM_SETTINGS_CONTENT_TYPE = 'application/vnd.vmware.admin.systemSettings+xml';
    const TASK_OPERATION_LIST_CONTENT_TYPE = 'application/vnd.vmware.admin.taskOperationList+xml';
    const UPDATE_PROVIDER_VDC_STORAGE_PROFILES_PARAMS_CONTENT_TYPE = 'application/vnd.vmware.admin.updateProviderVdcStorageProfiles+xml';
    const VIM_SERVER_CONTENT_TYPE = 'application/vnd.vmware.admin.vmwvirtualcenter+xml';
    const VMWEXTENSION_CONTENT_TYPE = 'application/vnd.vmware.admin.vmwExtension+xml';
    const VMW_PROVIDER_VDC_STORAGE_PROFILE_CONTENT_TYPE = 'application/vnd.vmware.admin.vmwPvdcStorageProfile+xml';
    const VSHIELD_MANAGER_CONTENT_TYPE = 'application/vnd.vmware.admin.vshieldmanager+xml';
    const EXTENSION_SERVICE_CONTENT_TYPE = 'application/vnd.vmware.admin.service+xml';
    const EDGE_GATEWAYS_CONTENT_TYPE = 'application/vnd.vmware.admin.edgeGateway+xml';
    const EDGEGATEWAY_SERVICECONFIGURATION_CONTENT_TYPE = 'application/vnd.vmware.admin.edgeGatewayServiceConfiguration+xml';
    const FILE_DESCRIPTOR_CONTENT_TYPE = 'application/vnd.vmware.admin.fileDescriptor+xml';
    const APIDEFINITION_CONTENT_TYPE = 'application/vnd.vmware.vcloud.apidefinition+xml';
    const COPY_OR_MOVE_CATALOGITEM_CONTENT_TYPE= 'application/vnd.vmware.vcloud.copyOrMoveCatalogItemParams+xml';
    const USER_SERVICE_CONTENT_TYPE = 'application/vnd.vmware.vcloud.service+xml';
    const RELATION_TYPE_UP = 'up';
    const OVF_TRANSFER_FORMAT = 'application/ovf+xml';
    const OVF_NAMESPACE = 'http://schemas.dmtf.org/ovf/envelope/1';
    const VCLOUD_AUTH_TOKEN = 'x-vcloud-authorization';
    const VCLOUD_ACCEPT_HEADER = 'application/*+xml';
    const SYSTEM_ORG = 'System';
    const SIGN_ATTRIBUTE = 'SIGN';
    const TOKEN_ATTRIBUTE = 'token';
    const ORG_ATTRIBUTE = 'org';
    const SIGNATURE_ATTRIBUTE = 'signature';
    const SIGNATURE_ALGORITHM_ATTRIBUTE = 'signature_alg';



    /**
     * URL Constants
     */

    // User Constants
    const ACTION_INSTANTIATE_OVF_URL = '/action/instantiateOvf';
    const ACTION_COPY_CATALOGITEM_URL = '/action/copy';
    const ACTION_MOVE_CATALOGITEM_URL = '/action/move';
    const ACTION_ENABLE_DOWNLOAD_URL = '/action/enableDownload';
    const ACTION_CAPTURE_VAPP_URL = '/action/captureVApp';
    const ACTION_SYNC_URL = '/action/sync';
    const ACTION_ACQUIRE_MKSTICKET_URL = '/screen/action/acquireMksTicket';

    // Admin Constants
    const ACTION_PUBLISH_TO_EXTERNAL_ORGANIZATIONS_URL = '/action/publishToExternalOrganizations';
    const ACTION_SUBSCRIBE_TO_EXTERNAL_CATALOG_URL = '/action/subscribeToExternalCatalog';
    const ACTION_REGISTER_VAPP_URL = '/action/registerVApp';

    // Admin Extension Constants
    const CATALOG_SETTINGS_URL = '/settings/catalog';
}