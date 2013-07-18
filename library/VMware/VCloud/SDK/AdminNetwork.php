<?php
class VMware_VCloud_SDK_AdminNetwork extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud network entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getAdminNetworkRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             ADMIN_NETWORK_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud network entity in an administrative view.
     *
     * @return VMware_VCloud_API_OrgNetworkType|VMware_VCloud_API_ExternalNetworkType
     * @since Version 1.0.0
     */
    public function getAdminNetwork()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this network from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:network:' . $this->getUuid();
    }

    /**
     * Get up link to the admin org vdc reference.
     *
     * @return VMware_VCloud_API_LinkType object
     * @since SDK Version 5.1.0
     */
    public function getAdminVdcRef()
    {
        $vdcReference = null;
        $links = $this->getAdminNetwork()->getLink();
        foreach ($links as $link)
        {
            if (($link->get_rel()== VMware_VCloud_SDK_Constants::RELATION_TYPE_UP) && ($link->get_Type() == VMware_VCloud_SDK_Constants::ADMIN_VDC_CONTENT_TYPE))
            {
                $vdcReference = $link;
            }
        }
        return $vdcReference;
    }

    /**
     * Get admin org vdc this network belongs to.
     *
     * @return VMware_VCloud_API_AdminVdcType object
     * @since SDK Version 5.1.0
     */
    public function getAdminVdc()
    {
        return $this->svc->get($this->getAdminVdcRef()->get_href());
    }

    /**
     * Get a link to a VMware vCloud network entity. 
     * This method works only for API 1.5 which contains Org Networks.
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function getNetworkRef($type='orgNetwork')
    {
        $links = $this->getContainedLinks($type, 'alternate');
        return isset($links)? $links[0] : null;
    }

    /**
     * Get a VMware vCloud network entity.
     *
     * @return VMware_VCloud_API_OrgNetworkType for API 1.5
     * @return VMware_VCloud_API_OrgVdcNetworkType for API 5.1
     * @since Version 1.0.0
     */
    public function getNetwork()
    {
        $ref = $this->getNetworkRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Get the link to the container entity of the organization network in an
     * administrator view.
     * This method works only for API 1.5 which returns Org Networks.
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function getAdminOrgRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container entity of the organization network in an administrator
     * view.
     *
     * @return VMware_VCloud_API_AdminOrgType|null
     * @since Version 1.5.0
     * @deprecated since API version 1.5.0, since SDK 5.1.0
     */
    public function getAdminOrg()
    {
        $ref = $this->getAdminOrgRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Modify an organization network. This method works only for API 1.5.
     *
     * @param VMware_VCloud_API_OrgNetworkType $orgNetwork
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function modify($orgNetwork)
    {
        $type = VMware_VCloud_SDK_Constants::ADMIN_ORG_NETWORK_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $orgNetwork);
    }

    /**
     * Update an organization vdc network.
     *
     * @param VMware_VCloud_API_OrgVdcNetworkType $orgVdcNetwork
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function updateOrgVdcNetwork($orgVdcNetwork)
    {
        $type = VMware_VCloud_SDK_Constants::ORG_VDC_NETWORK_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $orgVdcNetwork);
    }

    /**
     * Reset only Isolated Organization Vdc Network.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @deprecated since API version 5.1.0 and SDK 5.1.0
     * @this method will not work in SDK 5.1.0
     */
    public function reset()
    {
        $url = $this->url . '/action/reset';
        return $this->svc->post($url, 202);
    }

    /**
     * Delete an organization network or an organization Vdc Network.
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
     * Get metadata associated with the network or metadata associated with the
     * organization network for the specified key in the specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|VMware_VCloud_API_MetadataValueType
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }

    /**
     * Merges the metadata for the organization network with the information
     * provided.
     *
     * @param VMware_VCloud_API_MetadataType $meta
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function mergeMetadata($meta)
    {
        $url = $this->getMetadataUrl();
        $type = VMware_VCloud_SDK_Constants::METADATA_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $meta);
    }

    /**
     * Sets the metadata for the particular key in the specified domain for the
     * organization network to the value provided. Note: This will replace any
     * existing metadata information.
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
     * the organization network.
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

    /**
     * Synchronize syslog server settings of a logical network with system
     * defaults. Synchronize operation can be performed on:
     *   - routed organization network
     *   - routed/fenced vApp networks
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function syncSyslogServerSettings()
    {
        $url = $this->url . '/action/syncSyslogServerSettings';
        return $this->svc->post($url, 202);
    }

    /**
     * Return an alternate SDK organization network object.
     *
     * @return VMware_VCloud_SDK_Network|null
     * @since Version 1.5.0
     * @deprecated since API version 5.1.0, since SDK 5.1.0
     */
    public function getSdkNetwork()
    {
        $ref = $this->getNetworkRef();
        return isset($ref)? $this->svc->createSDKObj($ref) : null;
    }

    /**
     * Returns the allocated IPs associated with the network.
     *
     * @return array|null VMware_VCloud_API_AllocatedIpAddressType objects
     *         array or null
     * @since Version 5.1.0
     */
    public function getAllocatedIpAddresses()
    {
        $url = $this->url . '/allocatedAddresses';
        $addrArr = $this->svc->get($url);
        return (0 == sizeof($addrArr)) ? null : $addrArr->getIpAddress();
    }
}