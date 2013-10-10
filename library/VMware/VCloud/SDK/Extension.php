<?php
class VMware_VCloud_SDK_Extension extends VMware_VCloud_SDK_Abstract
{
    /**
     * Constructor
     */
    public function __construct($svc)
    {
        parent::__construct($svc, $svc->getAdminExtensionUrl());
    }

    /**
     * Get the VMware vCloud admin extension entry point.
     *
     * @return VMware_VCloud_API_Extension_VMWExtensionType
     * @since Version 1.0.0
     */
    public function getExtension()
    {
        return $this->getDataObj();
    }

    /**
     * Get the references to all the hosts.
     *
     * @param string $name   Name of the host to get. If null, returns all
     * @return array         VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getHostRefs($name=null)
    {
        $url = $this->url . '/hostReferences';
        $hostRefs = $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getHostReference',
                                       $hostRefs);
    }

    /**
     * Get all hosts.
     *
     * @param string $name   Name of the host. If null, returns all
     * @return array         VMware_VCloud_API_Extension_HostType object array
     * @since Version 1.0.0
     */
    public function getHosts($name=null)
    {
        $refs = $this->getHostRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to VMware vim servers.
     *
     * @param string $name   Name of the vim server to get. If null, returns all
     * @return array         VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getVimServerRefs($name=null)
    {
        $url = $this->url . '/vimServerReferences';
        $refs = $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getVimServerReference',
                                       $refs);
    }

    /**
     * Get VMware vim server objects.
     *
     * @param string $name   Name of the vim server to get. If null, returns all.
     * @return array         VMware_VCloud_API_Extension_VimServerType object
     *                       array. 
     * @since Version 1.0.0
     */
    public function getVimServers($name=null)
    {
        $refs = $this->getVimServerRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to VMware provider vDCs.
     *
     * @param string $name   Name of the VMware provider vDC to get. If null,
     *                       returns all.
     * @return array         VMware_VCloud_API_ReferenceType object array.
     * @since Version 1.0.0
     */
    public function getVMWProviderVdcRefs($name=null)
    {
        $url = $this->url . '/providerVdcReferences';
        $pvdcRefs = $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getProviderVdcReference',
                                       $pvdcRefs);
    }

    /**
     * Get list of provider vDCs by using REST API general QueryHandler. This is read only list and is not bound to specific states. If filter is provided it will be applied to the corresponding result set. Format determines the elements representation - references, records or idrecords. Default format is records.
     *
     * @param string $name   Name of the VMware provider vDC query to get. If null,
     *                       returns all.
     * @return array         VMware_VCloud_API_ReferenceType object array.
     * @since Version 5.1.0
     */
    public function getVMWProviderVdcQueryRefs($name=null)
    {
        $url = $this->url . '/providerVdcReferences/query';
        return $this->svc->get($url);
    }

    /**
     * Create a Extension service.
     *
     * @param VMware_VCloud_API_Extension_AdminServiceType $params
     * @return VMware_VCloud_API_Extension_AdminServiceType
     * @since Version 5.1.0
     */
    public function createService($params)
    {
        $url = $this->url . '/service';
        $type = VMware_VCloud_SDK_Constants::EXTENSION_SERVICE_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Get a Extension service.
     *
     *
     * @return list of all the extension services.
     * @since Version 5.1.0
     */
    public function getExtensionService()
    {
        $type = 'adminService';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Get VMware provider vDC objects.
     *
     * @param string $name   Name of the VMware provider vDC to get. If null,
     *                       returns all
     * @return array         VMware_VCloud_API_Extension_VMWProviderVdcType
     *                       objects array
     * @since Version 1.0.0
     */
    public function getVMWProviderVdcs($name=null)
    {
        $refs = $this->getVMWProviderVdcRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to VMware external network.
     *
     * @param string $name   Name of the VMware external network to get. If null,
     *                       returns all
     * @return array         VMware_VCloud_API_ReferenceType object
     *                       array
     * @since Version 1.0.0
     */
    public function getVMWExternalNetworkRefs($name=null)
    {
        $url = $this->url . '/externalNetworkReferences';
        $exnetRefs = $this->svc->get($url);
        return $this->getContainedRefs(null, $name,
                                   'getExternalNetworkReference', $exnetRefs);
    }

    /**
     * Get external network objects.
     *
     * @param string $name   Name of the external network to get. If null,
     *                       returns all
     * @return array         VMware_VCloud_API_Extension_VMWExternalNetworkType
     *                       object array
     * @since Version 1.0.0
     */
    public function getVMWExternalNetworks($name=null)
    {
        $refs = $this->getVMWExternalNetworkRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to VMware network pools.
     *
     * @param string $name   Name of the VMware network pool. If null, returns
     *                       all
     * @return array         VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getVMWNetworkPoolRefs($name=null)
    {
        $url = $this->url . '/networkPoolReferences';
        $poolRefs = $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getNetworkPoolReference',
                                       $poolRefs);
    }

    /**
     * Get VMware network pool objects.
     *
     * @param string $name   Name of the VMware network pool. If null, returns all
     * @return array         VMware_VCloud_API_Extension_VMWNetworkPoolType
     *                       object array.
     * @since Version 1.0.0
     */
    public function getVMWNetworkPools($name=null)
    {
        $refs = $this->getVMWNetworkPoolRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get the references of data stores.
     *
     * @param string $name   Name of the data store to get. If null, returns all
     * @return array         VMware_VCloud_API_ReferenceType object array
     * @since Version 1.5.0
     */
    public function getDatastoreRefs($name=null)
    {
        $url = $this->url . '/datastores';
        $dsRefs = $this->svc->get($url);
        return $this->getContainedRefs(null, $name, 'getReference', $dsRefs);
    }

    /**
     * Get the data store objects.
     *
     * @param string $name   Name of the data store to get. If null, returns all.
     * @return array         VMware_VCloud_API_Extension_DatastoreType object
     *                       array.
     * @since Version 1.5.0
     */
    public function getDatastores($name=null)
    {
        $refs = $this->getDatastoreRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get the references of the blocking tasks.
     *
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.5.0
     */
    public function getBlockingTaskRefs()
    {
        $url = $this->url . '/blockingTasks';
        $refs = $this->svc->get($url);
        return $refs->getReference();
    }

    /**
     * Get the blocking tasks objects.
     *
     * @return array VMware_VCloud_API_Extension_BlockingTaskType object
     *               array.
     * @since Version 1.5.0
     */
    public function getBlockingTasks()
    {
        $refs = $this->getBlockingTaskRefs();
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get the references of the licensing report objects.
     *
     * @return array VMware_VCloud_API_LinkType object array
     * @since Version 1.5.0
     * @deprecated since version 5.5.0
     */
    public function getLicensingReportRefs()
    {
        $url = $this->url . '/licensing/reports';
        $lrRefs = $this->svc->get($url);
        return $lrRefs->getReport();
    }

    /**
     * Get the licensing report objects.
     *
     * @return array VMware_VCloud_API_Extension_LicensingReportType object array
     * @since Version 1.5.0
     * @deprecated since version 5.5.0
     */
    public function getLicensingReports()
    {
        $refs = $this->getLicensingReportRefs();
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Create a provider vDC.
     *
     * @param VMware_VCloud_API_Extension_VMWProviderVdcType $providerVdc
     * @return VMware_VCloud_API_Extension_VMWProviderVdcType
     * @since Version 1.0.0
     * @deprecated deprecated since version 5.1.0
     */
    public function createVMWProviderVdc($providerVdc)
    {
        $url = $this->url . '/providervdcs';
        $type = VMware_VCloud_SDK_Constants::EXTENSION_PROVIDER_VDC_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $providerVdc);
    }

    /**
     * Create a provider vDC.
     *
     * @param VMware_VCloud_API_Extension_VMWProviderVdcParamsType $params
     * @return VMware_VCloud_API_Extension_VMWProviderVdcType
     * @since Version 5.1.0
     */
    public function createProviderVdc($params)
    {
        $url = $this->url . '/providervdcsparams';
        $type = VMware_VCloud_SDK_Constants::CREATE_PROVIDER_VDC_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Create an external network.
     *
     * @param VMware_VCloud_API_Extension_VMWExternalNetworkType $externalNet
     * @return VMware_VCloud_API_Extension_VMWExternalNetworkType
     * @since Version 1.0.0
     */
    public function createVMWExternalNetwork($externalNet)
    {
        $url = $this->url . '/externalnets';
        $type = VMware_VCloud_SDK_Constants::EXTERNAL_NET_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $externalNet);
    }

    /**
     * Create a network pool.
     *
     * @param VMware_VCloud_API_Extension_PortGroupPoolType |
     *        VMware_VCloud_API_Extension_VlanPoolType |
     *        VMware_VCloud_API_Extension_FencePoolType $vmwNetPool
     * @return VMware_VCloud_API_Extension_PortGroupPoolType |
     *        VMware_VCloud_API_Extension_VlanPoolType |
     *        VMware_VCloud_API_Extension_FencePoolType
     * @since Version 1.0.0
     */
    public function createVMWNetworkPool($vmwNetPool)
    {
        $url = $this->url . '/networkPools';
        $type = VMware_VCloud_SDK_Constants::NETWORK_POOL_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $vmwNetPool);
    }

    /**
     * Register a Vim Server and a vShield manager.
     *
     * @param VMware_VCloud_API_Extension_RegisterVimServerParamsType $params
     * @return VMware_VCloud_API_Extension_RegisterVimServerParamsType
     * @since Version 1.0.0
     */
    public function registerVimServer($params)
    {
        $url = $this->url . '/action/registervimserver';
        $type = VMware_VCloud_SDK_Constants::
                REGISTER_VIM_SERVER_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Unregister Vim Server and vShield manager.
     *
     * @param VMware_VCloud_API_ReferenceType $vimServerRef   Reference to the
     *                                                        vim server to be
     *                                                        unregistered
     * @param boolean $disable Indicates whether disable the vim server first.
     * @return VMware_VCloud_API_TaskType
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function unregisterVimServer($vimServerRef, $disable=true)
    {
        $url = $vimServerRef->get_href() . '/action/unregister';
        if (true === $disable)
        {
            $sdkVimServer = $this->svc->createSDKObj($vimServerRef);
            try
            {
                $task = $sdkVimServer->disable();
                if ('VMware_VClous_API_TaskType' == get_class($task))
                {
                    $this->svc->wait($task, get_status, array('success'),
                                    $iteration=2, $interval=10);
                }
            }
            catch (Exception $e)
            {
                throw $e;
            }
        }
        return $this->svc->post($url, 202);
    }

    /**
     * Retrieves the system settings.
     *
     * @return VMware_VCloud_API_Extension_SystemSettingsType
     * @since Version 1.5.0
     */
    public function getSystemSettings()
    {
        $url = $this->url . '/settings';
        return $this->svc->get($url);
    }

    /**
     * Updates the system settings.
     *
     * @param VMware_VCloud_API_Extension_SystemSettingsType $settings
     * @return VMware_VCloud_API_Extension_SystemSettingsType
     * @since Version 1.5.0
     */
    public function updateSystemSettings($settings)
    {
        $url = $this->url . '/settings';
        $type = VMware_VCloud_SDK_Constants::SYSTEM_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Retrieves the AMQP settings.
     *
     * @return VMware_VCloud_API_Extension_AmqpSettingsType
     * @since Version 1.5.0
     */
    public function getAmqpSettings()
    {
        $url = $this->url . '/settings/amqp';
        return $this->svc->get($url);
    }

    /**
     * Updates the AMQP settings.
     *
     * @param VMware_VCloud_API_Extension_AmqpSettingsType $settings
     * @return VMware_VCloud_API_Extension_AmqpSettingsType
     * @since Version 1.5.0
     */
    public function updateAmqpSettings($settings)
    {
        $url = $this->url . '/settings/amqp';
        $type = VMware_VCloud_SDK_Constants::AMQP_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Resets AMQP certificate.
     * 
     * @since Version 5.1.0
     */
    public function resetAmqpCertificate()
    {
        $url = $this->url . '/settings/amqp/action/resetAmqpCertificate';
        return $this->svc->post($url, 204);
    }

    /**
     * Resets AMQP truststore.
     *
     * @since Version 5.1.0
     */
    public function resetAmqpTruststore()
    {
        $url = $this->url . '/settings/amqp/action/resetAmqpTruststore';
        return $this->svc->post($url, 204);
    }

    /**
     * Updates AMQP certificate. AMQP certificate and trust store are mutually exclusive. Overrides AMQP trust store, if update is successful.
     * @param VMware_VCloud_API_CertificateUpdateParamsType $params
     * @return VMware_VCloud_API_CertificateUploadSocketType
     * @since Version 5.1.0
     */
    public function updateAmqpCertificate($params)
    {
        $url = $this->url . '/settings/amqp/action/updateAmqpCertificate';
        $type = VMware_VCloud_SDK_Constants::UPDATE_AMQP_CERTIFICATE_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Updates AMQP trust store. AMQP certificate and trust store are mutually exclusive. Overrides AMQP certificate, if update is successful.
     * @param VMware_VCloud_API_TrustStoreUpdateParamsType $params
     * @return VMware_VCloud_API_TrustStoreUploadSocketType
     * @since Version 5.1.0
     */
    public function updateAmqpTruststore($params)
    {
        $url = $this->url . '/settings/amqp/action/updateAmqpTruststore';
        $type = VMware_VCloud_SDK_Constants::UPDATE_AMQP_TRUSTSTORE_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Tests the AMQP connection.
     * @param VMware_VCloud_API_Extension_AmqpSettingsType $settings
     * @return boolean
     * @since Version 1.5.0
     */
    public function testAmqpConnection($settings)
    {
        $url = $this->url . '/settings/amqp/action/test';
        $type = VMware_VCloud_SDK_Constants::AMQP_SETTINGS_CONTENT_TYPE;
        $test = $this->svc->post($url, 200, $type, $settings);
        return $test->getValid();
    }

    /**
     * Returns global blocking task settings.
     *
     * @return VMware_VCloud_API_Extension_BlockingTaskSettingsType
     * @since Version 1.5.0
     */
    public function getBlockingTaskSettings()
    {
        $url = $this->url . '/settings/blockingTask';
        return $this->svc->get($url);
    }

    /**
     * Updates global blocking task settings.
     *
     * @param VMware_VCloud_API_Extension_BlockingTaskSettingsType $settings
     * @return VMware_VCloud_API_Extension_BlockingTaskSettingsType
     * @since Version 1.5.0
     */
    public function updateBlockingTaskSettings($settings)
    {
        $url = $this->url . '/settings/blockingTask';
        $type = VMware_VCloud_SDK_Constants::
                  BLOCKING_TASK_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Gets blocking task operations which are enabled.
     *
     * @return VMware_VCloud_API_TaskOperationListType
     * @since Version 1.5.0
     */
    public function getEnabledBlockingTaskOperations()
    {
        $url = $this->url . '/settings/blockingTask/operations';
        return $this->svc->get($url);
    }

    /** 
     * Updates the blocking task operations which are enabled.
     *
     * @param VMware_VCloud_API_TaskOperationListType $list
     * @return VMware_VCloud_API_TaskOperationListType
     * @since Version 1.5.0
     */
    public function updateEnabledBlockingTaskOperations($list)
    {
        $url = $this->url . '/settings/blockingTask/operations';
        $list->set_tagName('vmext:BlockingTaskOperations');
        $type = VMware_VCloud_SDK_Constants::TASK_OPERATION_LIST_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $list);
    }

    /**
     * Retrieves the product branding settings.
     *
     * @return VMware_VCloud_API_Extension_BrandingSettingsType
     * @since Version 1.5.0
     */
    public function getBrandingSettings()
    {
        $url = $this->url . '/settings/branding';
        return $this->svc->get($url);
    }

    /**
     * Updates the product branding settings.
     *
     * @param VMware_VCloud_API_Extension_BrandingSettingsType $settings
     * @return VMware_VCloud_API_Extension_BrandingSettingsType
     * @since Version 1.5.0
     */
    public function updateBrandingSettings($settings)
    {
        $url = $this->url . '/settings/branding';
        $type = VMware_VCloud_SDK_Constants::BRANDING_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Retrieves the email related settings.
     *
     * @return VMware_VCloud_API_Extension_EmailSettingsType
     * @since Version 1.5.0
     */
    public function getEmailSettings()
    {
        $url = $this->url . '/settings/email';
        return $this->svc->get($url);
    }

    /**
     * Updates email related settings.
     *
     * @param VMware_VCloud_API_Extension_EmailSettingsType $settings
     * @return VMware_VCloud_API_Extension_EmailSettingsType
     * @since Version 1.5.0
     */
    public function updateEmailSettings($settings)
    {
        $url = $this->url . '/settings/email';
        $type = VMware_VCloud_SDK_Constants::EMAIL_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Retrieves the general settings.
     *
     * @return VMware_VCloud_API_Extension_GeneralSettingsType
     * @since Version 1.5.0
     */
    public function getGeneralSettings()
    {
        $url = $this->url . '/settings/general';
        return $this->svc->get($url);
    }

    /**
     * Updates the general settings.
     *
     * @param VMware_VCloud_API_Extension_GeneralSettingsType $settings
     * @return VMware_VCloud_API_Extension_GeneralSettingsType
     * @since Version 1.5.0
     */
    public function updateGeneralSettings($settings)
    {
        $url = $this->url . '/settings/general';
        $type = VMware_VCloud_SDK_Constants::GENERAL_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Resets vCenter trust store.
     *
     * @since Version 5.1.0
     */
    public function resetVcTrustsore()
    {
        $url = $this->url . '/settings/general/action/resetVcTrustsore';
        return $this->svc->post($url, 204);
    }

    /**
     * Updates vCenter trust store.
     *
     * @param VMware_VCloud_API_Extension_VcTrustStoreUpdateParamsType $params
     * @return VMware_VCloud_API_Extension_VcTrustStoreUploadSocketType
     * @since Version 5.1.0
     */
    public function updateVcTrustsore($params)
    {
        $url = $this->url . '/settings/general/action/updateVcTrustsore';
        $type = VMware_VCloud_SDK_Constants::UPDATE_VC_TRUSTSORE_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Retrieves the LDAP settings.
     *
     * @return VMware_VCloud_API_Extension_LdapSettingsType
     * @since Version 1.5.0
     * @deprecated deprecated since version 5.1.0
     */
    public function getLdapSettings()
    {
        $url = $this->url . '/settings/ldapSettings';
        return $this->svc->get($url);
    }

    /**
     * Updates the LDAP settings.
     *
     * @param VMware_VCloud_API_Extension_LdapSettingsType $settings
     * @return VMware_VCloud_API_Extension_LdapSettingsType
     * @since Version 1.5.0
     * @deprecated since version 5.1.0
     */
    public function updateLdapSettings($settings)
    {
        $url = $this->url . '/settings/ldapSettings';
        $type = VMware_VCloud_SDK_Constants::LDAP_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Resets system LDAP SSL certificate.
     *
     * @since Version 5.1.0
     */
    public function resetLdapCertificate()
    {
        $url = $this->url . '/settings/ldapSettings/action/resetLdapCertificate';
        return $this->svc->post($url, 204);
    }

    /**
     * Resets system LDAP keystore.
     *
     * @since Version 5.1.0
     */
    public function resetLdapKeyStore()
    {
        $url = $this->url . '/settings/ldapSettings/action/resetLdapKeyStore';
        return $this->svc->post($url, 204);
    }

    /**
     * Resets system LDAP SSPI key tab.
     *
     * @since Version 5.1.0
     */
    public function resetLdapSspiKeytab()
    {
        $url = $this->url . '/settings/ldapSettings/action/resetLdapSspiKeytab';
        return $this->svc->post($url, 204);
    }

    /**
     * Updates system LDAP SSL certificate.
     *
     * @param VMware_VCloud_API_CertificateUpdateParamsType $params
     * @return VMware_VCloud_API_CertificateUploadSocketType
     * @since Version 5.1.0
     */
    public function updateLdapCertificate($params)
    {
        $url = $this->url . '/settings/ldapSettings/action/updateLdapCertificate';
        $type = VMware_VCloud_SDK_Constants::UPDATE_LDAP_CERTIFICATE_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Updates system LDAP keystore.
     *
     * @param VMware_VCloud_API_KeystoreUpdateParamsType $params
     * @return VMware_VCloud_API_KeystoreUploadSocketType
     * @since Version 5.1.0
     */
    public function updateLdapKeyStore($params)
    {
        $url = $this->url . '/settings/ldapSettings/action/updateLdapKeyStore';
        $type = VMware_VCloud_SDK_Constants::UPDATE_LDAP_KEYSTORE_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Updates system LDAP SSPI key tab.
     *
     * @param VMware_VCloud_API_SspiKeytabUpdateParamsType $params
     * @return VMware_VCloud_API_SspiKeytabUploadSocketType
     * @since Version 5.1.0
     */
    public function updateLdapSspiKeytab($params)
    {
        $url = $this->url . '/settings/ldapSettings/action/updateLdapSspiKeytab';
        $type = VMware_VCloud_SDK_Constants::UPDATE_LDAP_SSPI_KEYTAB_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Retrieves the license settings.
     *
     * @return VMware_VCloud_API_Extension_LicenseType
     * @since Version 1.5.0
     */
    public function getLicenseSettings()
    {
        $url = $this->url . '/settings/license';
        return $this->svc->get($url);
    }

    /**
     * Updates the license settings.
     *
     * @param VMware_VCloud_API_Extension_LicenseType $settings
     * @return VMware_VCloud_API_Extension_LicenseType
     * @since Version 1.5.0
     */
    public function updateLicenseSettings($settings)
    {
        $url = $this->url . '/settings/license';
        $type = VMware_VCloud_SDK_Constants::LICENSE_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Retrieves the notifications settings.
     *
     * @return VMware_VCloud_API_Extension_NotificationsSettingsType
     * @since Version 1.5.0
     */
    public function getNotificationsSettings()
    {
        $url = $this->url . '/settings/notifications';
        return $this->svc->get($url);
    }

    /**
     * Updates the notifications settings.
     *
     * @param VMware_VCloud_API_Extension_NotificationsSettingsType $settings
     * @return VMware_VCloud_API_Extension_NotificationsSettingsType
     * @since Version 1.5.0
     */
    public function updateNotificationsSettings($settings)
    {
        $url = $this->url . '/settings/notifications';
        $type = VMware_VCloud_SDK_Constants::NOTIFICATIONS_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Checks non-blocking extensions is enabled or not.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isNotificationEnabled()
    {
        $n = $this->getNotificationsSettings();
        return $n->getEnableNotifications();
    }

    /**
     * Enables non-blocking extensions.
     *
     * @return VMware_VCloud_API_Extension_NotificationsSettingsType
     * @since Version 1.5.0
     */
    public function enableNotification($enable=true)
    {
        $sets = new VMware_VCloud_API_Extension_NotificationsSettingsType();
        $sets->setEnableNotifications($enable);
        return $this->updateNotificationsSettings($sets);
    }

    /**
     * Disables non-blocking extensions.
     *
     * @return VMware_VCloud_API_Extension_NotificationsSettingsType
     * @since Version 1.5.0
     */
    public function disableNotification()
    {
        return $this->enableNotification(false);
    }

    /**
     * Retrieves the password policy settings at the system level.
     *
     * @return VMware_VCloud_API_Extension_SystemPasswordPolicySettingsType
     * @since Version 1.5.0
     */
    public function getPasswordPolicySettings()
    {
        $url = $this->url . '/settings/passwordPolicy';
        return $this->svc->get($url);
    }

    /**
     * Updates the system password policy settings.
     *
     * @param VMware_VCloud_API_Extension_SystemPasswordPolicySettingsType $settings
     * @return VMware_VCloud_API_Extension_SystemPasswordPolicySettingsType
     * @since Version 1.5.0
     */
    public function updatePasswordPolicySettings($settings)
    {
        $url = $this->url . '/settings/passwordPolicy';
        $type = 
          VMware_VCloud_SDK_Constants::SYSTEM_PASSWORD_POLICY_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Retrieves the kerberos settings.
     *
     * @return VMware_VCloud_API_Extension_KerberosSettingsType
     * @since Version 5.1.0
     */
    public function getKerberosSettings()
    {
        $url = $this->url . '/settings/kerberosSettings';
        return $this->svc->get($url);
    }

    /** 
     * Updates the system kerberos settings.
     *
     * @param VMware_VCloud_API_Extension_KerberosSettingsType $settings
     * @return VMware_VCloud_API_Extension_KerberosSettingsType
     * @since Version 5.1.0
     */
    public function updateKerberosSettings($settings)
    {
        $url = $this->url . '/settings/kerberosSettings';
        $type = VMware_VCloud_SDK_Constants::KERBEROS_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Retrieves the lookupService settings.
     *
     * @return VMware_VCloud_API_Extension_LookupServiceSettingsType
     * @since Version 5.1.0
     */
    public function getLookUpServiceSettings()
    {
        $url = $this->url . '/settings/lookupService';
        return $this->svc->get($url);
    }

    /**
     * Register / unregister Lookup Service to / from vCD. In LookupServiceParamsType 1. If LookupServiceUrl is set and not empty, the action is for register lookup service. 2. If LookupServiceUrl is unset or empty, the action is for unregister lookup service.
     *
     * @param VMware_VCloud_API_Extension_LookupServiceParamsType $settings
     * @return VMware_VCloud_API_Extension_TaskType
     * @since Version 5.1.0
     * @deprecated since version 5.1.0
     */
    public function updateLookUpServiceSettings($settings)
    {
        $url = $this->url . '/settings/lookupService';
        $type = VMware_VCloud_SDK_Constants::LOOKUPSERVICE_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $settings);
    }

    /**
     * Retrieve vCloud Director catalog setting details.
     *
     * @return VMware_VCloud_API_Extension_CatalogSettingsType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function getCatalogSettings()
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::CATALOG_SETTINGS_URL;
        return $this->svc->get($url);
    }

    /**
     * Update catalog settings details.
     *
     * @param VMware_VCloud_API_Extension_CatalogSettingsType $settings
     * @return VMware_VCloud_API_Extension_CatalogSettingsType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function updateCatalogSettings($settings)
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::CATALOG_SETTINGS_URL;
        $type = VMware_VCloud_SDK_Constants::CATALOG_SETTINGS_CONTENT_TYPE;
        return $this->svc->put($url, 200, $type, $settings);
    }

    /**
     * Gets the representation of a strandedItem.
     *
     * @return VMware_VCloud_API_Extension_StrandedItemType
     * @since Version 5.1.0
     */
    public function getStrandedItems()
    {
        $type = 'strandedItem';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Clears all the rights that are not associated with a role or acl rule and which extension service is already deleted.
     *
     * @return null
     * @version Since 5.1.0
     */
    public function clearUnusedRights()
    {
        $url = $this->url . '/service/action/clearunusedrights';
        return $this->svc->post($url, 204);
    }

    /**
     * Cleanup for unused external localization resources.
     *
     * @return null
     * @version Since 5.1.0
     */
    public function clearUnusedLocalizationBundles()
    {
        $url = $this->url . '/service/action/clearunusedlocalizationbundles';
        $this->svc->post($url, 204);
    }

    /**
     * Checks user authorization for all services with enabled authorization, URL and request verb.
     * @param VMware_VCloud_API_Extension_AuthorizationCheckParamsType $params
     * @return boolean
     * @since Version 5.1.0
     */
    public function isAuthorized($params)
    {
        $url = $this->url . '/service/authorizationcheck';
        $type = VMware_VCloud_SDK_Constants::
                  AUTHORIZATION_CHECK_CONTENT_TYPE;
        $authorizedresponse= $this->svc->post($url, 200, $type, $params);
        return $authorizedresponse->getIsAuthorized();
    }

    /**
     * Initiates localization bundle upload.
     * @param VMware_VCloud_API_Extension_BundleUploadParamsType $params
     * @return VMware_VCloud_API_Extension_BundleUploadSocketType
     * @since Version 5.1.0
     */
    public function initiatesLocalizationBundles($params)
    {
        $url = $this->url . '/service/localizationbundles';
        $type = VMware_VCloud_SDK_Constants::
                  LOCALIZATION_BUNDLES_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * Retrieve extension services query.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @version Since 5.1.0
     */
    public function getQueryExtensionServices()
    {
        $url = $this->url . '/service/query?&format=references';
        return $this->svc->get($url);
    }
}