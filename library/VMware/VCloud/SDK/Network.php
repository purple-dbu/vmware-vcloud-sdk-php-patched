<?php
class VMware_VCloud_SDK_Network extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud organization network entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getNetworkRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::NETWORK_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud organization network entity.
     *
     * @return VMware_VCloud_API_OrgNetworkType
     * @since Version 1.0.0
     */
    public function getNetwork()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the network from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:network:' . $this->getUuid();
    }

    /**
     * Get up link to the org vdc reference.
     *
     * @return VMware_VCloud_API_LinkType object
     * @since SDK Version 5.1.0
     */
    public function getVdcRef()
    {
        $vdcReference = null;
        $links = $this->getNetwork()->getLink();
        foreach ($links as $link)
        {
            if (($link->get_rel()== VMware_VCloud_SDK_Constants::RELATION_TYPE_UP) && ($link->get_Type() == VMware_VCloud_SDK_Constants::VDC_CONTENT_TYPE))
            {
                $vdcReference = $link;
            }
        }
        return $vdcReference;
    }

    /**
     * Get the org vdc this network belongs to.
     *
     * @return VMware_VCloud_API_VdcType object
     * @since SDK Version 5.1.0
     */
    public function getVdc()
    {
        return $this->svc->get($this->getVdcRef()->get_href());
    }

    /**
     * Get the link to the organization to which this network belongs.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     * @deprecated since API version 1.5.0, since SDK 5.1.0
     * @This method works only for API 1.5
     */
    public function getOrgRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the organization this network belongs to.
     *
     * @return VMware_VCloud_API_OrgType|null
     * @since Version 1.5.0
     * @deprecated since API version 1.5.0, since SDK 5.1.0
     * @This method works only for API 1.5
     */
    public function getOrg()
    {
        $ref = $this->getOrgRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Get metadata associated with the organization network or metadata
     * associated with the organization network for the specified key in the
     * specified domain.
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
     * Retrieve a list of IP addresses allocated to the network.
     *
     * @return array|null VMware_VCloud_API_AllocatedIpAddressType objects array
     *         or null
     * @since Version 5.1.0
     */
    public function getAllocatedIpAddresses()
    {
        $url = $this->url . '/allocatedAddresses';
        $addrArr = $this->svc->get($url);
        if ((is_array($addrArr) || $addrArr instanceof Countable) && sizeof($addrArr) > 0) {
            return $addrArr->getIpAddress();
        }
        return null;
    }
}