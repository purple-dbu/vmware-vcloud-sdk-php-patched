<?php
class VMware_VCloud_SDK_AdminOrg extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud admin organization entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getAdminOrgRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             ADMIN_ORGANIZATION_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud admin organization entity.
     *
     * @return VMware_VCloud_API_AdminOrgType
     * @since Version 1.0.0
     */
    public function getAdminOrg()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this organization from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:org:' . $this->getUuid();
    }

    /**
     * Get a link to a VMware vCloud organization entity.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    public function getOrgRef()
    {
        $links = $this->getContainedLinks('org', 'alternate');
        return isset($links)? $links[0] : null;
    }

    /**
     * Get a VMware vCloud organization entity.
     *
     * @return VMware_VCloud_API_OrgType|null
     * @since Version 1.5.0
     */
    public function getOrg()
    {
        $ref = $this->getOrgRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Modify a VMware vCloud admin organization.
     *
     * @param  VMware_VCloud_API_AdminOrgType $adminOrg
     * @return VMware_VCloud_API_AdminOrgType
     * @since Version 1.0.0
     */
    public function modify($adminOrg)
    {
        $type = VMware_VCloud_SDK_Constants::ADMIN_ORGANIZATION_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $adminOrg);
    }

    /**
     * Check whether the organization is enabled.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isEnabled()
    {
        return $this->getAdminOrg()->getIsEnabled();
    }

    /**
     * Enable the organization.
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
     * Disable the organization.
     *
     * @return null
     * @since Version 1.0.0
     */
    public function disable()
    {
        $this->enable(false);
    }

    /**
     * Delete the organization.
     *
     * @return null
     * @since Version 1.0.0
     */
    public function delete()
    {
        $this->enable(false);
        $this->svc->delete($this->url, 204);
        $this->destroy();
    }

    /**
     * Allocate a vDC to the organization.
     *
     * @param VMware_VCloud_API_AdminVdcType $adminVdc
     * @return VMware_VCloud_API_AdminVdcType
     * @since Version 1.0.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function createAdminVdc($adminVdc)
    {
        $url = $this->url . '/vdcs';
        $type = VMware_VCloud_SDK_Constants::ADMIN_VDC_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $adminVdc);
    }

    /**
     * Create an organization vDC.
     *
     * @param VMware_VCloud_API_CreateVdcParamsType $params
     * @return VMware_VCloud_API_AdminVdcType
     * @since Version 5.1.0
     */
    public function createAdminOrgVdc($params)
    {
        $url = $this->url . '/vdcsparams';
        $type = VMware_VCloud_SDK_Constants::CREATE_VDC_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Create a catalog.
     *
     * @param VMware_VCloud_API_AdminCatalogType $catalog
     * @return VMware_VCloud_API_AdminCatalogType
     * @since Version 1.0.0
     */
    public function createCatalog($catalog)
    {
        $url = $this->url . '/catalogs';
        $type = VMware_VCloud_SDK_Constants::ADMIN_CATALOG_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $catalog);
    }

    /**
     * Create or import a user.
     *
     * @param VMware_VCloud_API_UserType $user
     * @return VMware_VCloud_API_UserType
     * @since Version 1.0.0
     */
    public function createUser($user)
    {
        $url = $this->url . '/users';
        $type = VMware_VCloud_SDK_Constants::USER_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $user);
    }

    /**
     * Import a group.
     *
     * @param VMware_VCloud_API_GroupType $group
     * @return VMware_VCloud_API_GroupType
     * @since Version 1.0.0
     */
    public function importGroup($group)
    {
        $url = $this->url . '/groups';
        $type = VMware_VCloud_SDK_Constants::GROUP_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $group);
    }

    /**
     * Add a network in an organization.
     *
     * @param VMware_VCloud_API_OrgNetworkType $orgNetwork
     * @return VMware_VCloud_API_OrgNetworkType
     * @since Version 1.0.0
     * @deprecated since version 5.1.0
     */
    public function addOrgNetwork($orgNetwork)
    {
        $url = $this->url . '/networks';
        $type = VMware_VCloud_SDK_Constants::ADMIN_ORG_NETWORK_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $orgNetwork);
    }

    /**
     * Get reference(s) for all users or named user in this organization.
     *
     * @param string $name   Name of the user to get. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getUserRefs($name=null)
    {
        return $this->getContainedRefs('user', $name, 'getUserReference',
                                       $this->getAdminOrg()->getUsers());
    }

    /**
     * Get users.
     *
     * @param string $name   Name of the user to get. If null, returns all
     * @return array VMware_VCloud_API_UserType object array
     * @since Version 1.0.0
     */
    public function getUsers($name=null)
    {
        $refs = $this->getUserRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get reference(s) for all groups or named group in this organization.
     *
     * @param string $name   Name of the group. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getGroupRefs($name=null)
    {
        return $this->getContainedRefs('group', $name, 'getGroupReference',
                                       $this->getAdminOrg()->getGroups());
    }

    /**
     * Get groups.
     *
     * @param string $name   Name of the group. If null, returns all
     * @return array VMware_VCloud_API_GroupType object array
     * @since Version 1.0.0
     */
    public function getGroups($name=null)
    {
        $refs = $this->getGroupRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references for all catalogs or named catalog in this organization.
     *
     * @param string $name   Name of the catalog. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getAdminCatalogRefs($name=null)
    {
        return $this->getContainedRefs('catalog', $name,
                  'getCatalogReference', $this->getAdminOrg()->getCatalogs());
    }

    /**
     * Get catalogs.
     *
     * @param string $name   Name of the catalog to get. If null, returns all
     * @return array VMware_VCloud_API_AdminCatalogType object array
     * @since Version 1.0.0
     */
    public function getAdminCatalogs($name=null)
    {
        $refs = $this->getAdminCatalogRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references for all vDCs or named vDC in this organization.
     *
     * @param string $name   Name of the vDC. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getAdminVdcRefs($name=null)
    {
        return $this->getContainedRefs('vdc', $name, 'getVdc',
                                       $this->getAdminOrg()->getVdcs());
    }

    /**
     * Get vDCs.
     *
     * @param string $name   Name of the vDC to get. If null, returns all
     * @return array VMware_VCloud_API_AdminVdcType object array
     * @since Version 1.0.0
     */
    public function getAdminVdcs($name=null)
    {
        $refs = $this->getAdminVdcRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get reference(s) for all organization networks or organization networks
     * with the given name in administrative representation.
     *
     * @param string $name   Name of the organization network to get. If null,
     *                       returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function getAdminNetworkRefs($name=null)
    {
        return $this->getContainedRefs(null, $name, 'getNetwork',
                                       $this->getAdminOrg()->getNetworks());
    }

    /**
     * Get organization networks entities or organization networks with the
     * given name in administrative representation.
     *
     * @param string $name   Name of the organization network to get. If null,
     *                       returns all
     * @return array VMware_VCloud_API_OrgNetworkType object array for API 1.5
     * @return array VMware_VCloud_API_OrgVdcNetworkType object array for API 5.1
     * @since Version 1.0.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function getAdminNetworks($name=null)
    {
        $refs = $this->getAdminNetworkRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Gets organizational settings for this organization.
     *
     * @return VMware_VCloud_API_OrgSettingsType
     * @since Version 1.5.0
     */
    public function getOrgSettings()
    {
        $url = $this->url . '/settings';
        return $this->svc->get($url);
    }

    /**
     * Updates organization settings for this organization.
     *
     * @param VMware_VCloud_API_OrgSettingsType $settings
     * @return VMware_VCloud_API_OrgSettingsType
     * @since Version 1.5.0
     */
    public function updateOrgSettings($settings)
    {
        $url = $this->url . '/settings';
        $type = VMware_VCloud_SDK_Constants::ORG_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Gets email settings of this organization.
     *
     * @return VMware_VCloud_API_OrgEmailSettingsType
     * @since Version 1.5.0
     */
    public function getOrgEmailSettings()
    {
        $url = $this->url . '/settings/email';
        return $this->svc->get($url);
    }

    /**
     * Updates organization email settings for this organization.
     *
     * @param VMware_VCloud_API_OrgEmailSettingsType $settings
     * @return VMware_VCloud_API_OrgEmailSettingsType
     * @since Version 1.5.0
     */
    public function updateOrgEmailSettings($settings)
    {
        $url = $this->url . '/settings/email';
        $type = VMware_VCloud_SDK_Constants::ORG_EMAIL_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

	/**
     * Retrieve other organization settings.
     *
     * @return VMware_VCloud_API_OrgFederationSettingsType
     * @since API 1.5.0
     * @since SDK 5.1.0
     */
    public function getOrgFederationSettings()
    {
        $url = $this->url . '/settings/federation';
        return $this->svc->get($url);
    }

    /**
     * Update other organization settings.
     *
     * @param VMware_VCloud_API_OrgFederationSettingsType $settings
     * @return VMware_VCloud_API_OrgFederationSettingsType
     * @since  API 1.5.0
     * @since SDK 5.1.0
     */
    public function updateOrgFederationSettings($settings)
    {
        $url = $this->url . '/settings/federation';
        $type = VMware_VCloud_SDK_Constants::ORG_FEDERATION_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }
	
    /**
     * Retrieves the password policy settings for the organization.
     *
     * @return VMware_VCloud_API_OrgPasswordPolicySettingsType
     * @since Version 1.5.0
     */
    public function getOrgPasswordPolicySettings()
    {
        $url = $this->url . '/settings/passwordPolicy';
        return $this->svc->get($url);
    }

    /**
     * Updates the organization password policy settings.
     *
     * @param VMware_VCloud_API_OrgPasswordPolicySettingsType $settings
     * @return VMware_VCloud_API_OrgPasswordPolicySettingsType
     * @since Version 1.5.0
     */
    public function updateOrgPasswordPolicySettings($settings)
    {
        $url = $this->url . '/settings/passwordPolicy';
        $type = 
          VMware_VCloud_SDK_Constants::ORG_PASSWORD_POLICY_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Gets organization vApp lease settings on the level of vApp.
     *
     * @return VMware_VCloud_API_OrgLeaseSettingsType
     * @since Version 1.5.0
     */
    public function getOrgVAppLeaseSettings()
    {
        $url = $this->url . '/settings/vAppLeaseSettings';
        return $this->svc->get($url);
    }

    /**
     * Updates organization vApp lease settings on the level of vApp.
     *
     * @param VMware_VCloud_API_OrgLeaseSettingsType $settings
     * @return VMware_VCloud_API_OrgLeaseSettingsType
     * @since Version 1.5.0
     */
    public function updateOrgVAppLeaseSettings($settings)
    {
        $url = $this->url . '/settings/vAppLeaseSettings';
        $type = VMware_VCloud_SDK_Constants::VAPP_LEASE_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Gets organization vApp template lease settings on the level of vApp.
     *
     * @return VMware_VCloud_API_OrgVAppTemplateLeaseSettingsType
     * @since Version 1.5.0
     */
    public function getOrgVAppTemplateLeaseSettings()
    {
        $url = $this->url . '/settings/vAppTemplateLeaseSettings';
        return $this->svc->get($url);
    }

    /**
     * Updates organization vApp template lease settings on the level of vApp.
     *
     * @param VMware_VCloud_API_OrgVAppTemplateLeaseSettingsType $settings
     * @return VMware_VCloud_API_OrgVAppTemplateLeaseSettingsType
     * @since Version 1.5.0
     */
    public function updateOrgVAppTemplateLeaseSettings($settings)
    {
        $url = $this->url . '/settings/vAppTemplateLeaseSettings';
        $type = VMware_VCloud_SDK_Constants::
                 VAPP_TEMPLATE_LEASE_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Gets organization general settings.
     *
     * @return VMware_VCloud_API_OrgGeneralSettingsType
     * @since Version 1.5.0
     */
    public function getOrgGeneralSettings()
    {
        $url = $this->url . '/settings/general';
        return $this->svc->get($url);
    }

    /**
     * Updates organization general settings.
     *
     * @param VMware_VCloud_API_OrgGeneralSettingsType $settings
     * @return VMware_VCloud_API_OrgGeneralSettingsType
     * @since Version 1.5.0
     */
    public function updateOrgGeneralSettings($settings)
    {
        $url = $this->url . '/settings/general';
        $type = VMware_VCloud_SDK_Constants::ORG_GENERAL_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Gets organization LDAP settings.
     *
     * @return VMware_VCloud_API_OrgLdapSettingsType
     * @since Version 1.5.0
     * @deprecated since version 5.1.0
     */
    public function getOrgLdapSettings()
    {
        $url = $this->url . '/settings/ldap';
        return $this->svc->get($url);
    }

    /**
     * Updates organization LDAP settings.
     *
     * @param VMware_VCloud_API_OrgLdapSettingsType $settings
     * @return VMware_VCloud_API_OrgLdapSettingsType
     * @since Version 1.5.0
     * @deprecated since version 5.1.0
     */
    public function updateOrgLdapSettings($settings)
    {
        $url = $this->url . '/settings/ldap';
        $type = VMware_VCloud_SDK_Constants::ORG_LDAP_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Resets organization LDAP SSL certificate.
     *
     * @since Version 5.1.0
     */
    public function resetLdapCertificate()
    {
        $url = $this->url . '/settings/ldap/action/resetLdapCertificate';
        return $this->svc->post($url, 204);
    }

    /**
     * Resets organization LDAP keystore.
     *
     * @since Version 5.1.0
     */
    public function resetLdapKeyStore()
    {
        $url = $this->url . '/settings/ldap/action/resetLdapKeyStore';
        return $this->svc->post($url, 204);
    }

    /**
     * Resets organization LDAP keytab.
     *
     * @since Version 5.1.0
     */
    public function resetLdapSspiKeytab()
    {
        $url = $this->url . '/settings/ldap/action/resetLdapSspiKeytab';
        return $this->svc->post($url, 204);
    }

    /**
     * Updates organization LDAP SSL certificate.
     * @param VMware_VCloud_API_CertificateUpdateParamsType $params
     * @return VMware_VCloud_API_CertificateUploadSocketType
     * @since Version 5.1.0
     */
    public function updateLdapCertificate($params)
    {
        $url = $this->url . '/settings/ldap/action/updateLdapCertificate';
        $type = VMware_VCloud_SDK_Constants::UPDATE_LDAP_CERTIFICATE_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Updates organization LDAP keystore.
     * @param VMware_VCloud_API_KeystoreUpdateParamsType $params
     * @return VMware_VCloud_API_KeystoreUploadSocketType
     * @since Version 5.1.0
     */
    public function updateLdapKeyStore($params)
    {
        $url = $this->url . '/settings/ldap/action/updateLdapKeyStore';
        $type = VMware_VCloud_SDK_Constants::UPDATE_LDAP_KEYSTORE_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Updates organization LDAP SSPI keytab.
     * @param VMware_VCloud_API_SspiKeytabUpdateParamsType $params
     * @return VMware_VCloud_API_SspiKeytabUploadSocketType
     * @since Version 5.1.0
     */
    public function updateLdapSspiKeytab($params)
    {
        $url = $this->url . '/settings/ldap/action/updateLdapSspiKeytab';
        $type = VMware_VCloud_SDK_Constants::UPDATE_LDAP_SSPI_KEYTAB_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Get metadata associated with the organization or metadata
     * associated with the organization for the specified key in the specified
     * domain.
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
     * Merges the metadata for the organization with the information provided.
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
     * organization to the value provided. Note: This will replace any existing
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
     * the organization.
     *
     * @param string $key
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
     * Return an alternate SDK orgznization object.
     *
     * @return VMware_VCloud_SDK_Org|null
     * @since Version 1.5.0
     */
    public function getSdkOrg()
    {
        $ref = $this->getOrgRef();
        return isset($ref)? $this->svc->createSDKObj($ref) : null;
    }

    /**
     * Posts external event to the system.
     *
     * @param VMware_VCloud_API_EventType $event
     * @return null
     * @since Version 5.1.0
     */
    public function postExtEvent($event)
    {
        $url = $this->url . '/events';
        $type = VMware_VCloud_SDK_Constants::EVENT_CONTENT_TYPE;
        $this->svc->post($url, 204, $type, $event);
    }

    /**
     * Retrieve organization defaults for guest personalization settings.
     *
     * @return VMware_VCloud_API_OrgGuestPersonalizationSettingsType
     * @since Version 5.1.0
     */
    public function getGuestPersonalizationSettings()
    {
        $url = $this->url . '/settings/guestPersonalizationSettings';
        return $this->svc->get($url);
    }

    /**
     * Modify organization defaults for guest personalization settings.
     *
     * @param VMware_VCloud_API_OrgGuestPersonalizationSettingsType
     *        $settings
     * @return VMware_VCloud_API_OrgGuestPersonalizationSettingsType
     * @since Version 5.1.0
     */
    public function modifyGuestPersonalizationSettings($settings)
    {
        $url = $this->url . '/settings/guestPersonalizationSettings';
        $type = VMware_VCloud_SDK_Constants::
                  ORG_GUEST_PERSONALIZATION_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $settings);
    }

    /**
     * Retrieve organization operation limits settings.
     *
     * @return VMware_VCloud_API_OrgOperationLimitsSettingsType
     * @since Version 5.1.0
     */
    public function getOperationLimitsSettings()
    {
        $url = $this->url . '/settings/operationLimitsSettings';
        return $this->svc->get($url);
    }

    /**
     * Modify organization operation limits settings.
     *
     * @param VMware_VCloud_API_OrgOperationLimitsSettingsType $settings
     * @return VMware_VCloud_API_OrgOperationLimitsSettingsType
     * @since Version 5.1.0
     */
    public function modifyOperationLimitsSettings($settings)
    {
        $url = $this->url . '/settings/operationLimitsSettings';
        $type = VMware_VCloud_SDK_Constants::
                  ORG_OPERATION_LIMITS_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $settings);
    }
}