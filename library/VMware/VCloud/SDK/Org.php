<?php
class VMware_VCloud_SDK_Org extends VMware_VCloud_SDK_Abstract
{
    /**
     * Return a reference to a VMware vCloud organization entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getOrgRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             ORGANIZATION_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud organization entity.
     *
     * @return VMware_VCloud_API_OrgType
     * @since Version 1.0.0
     */
    public function getOrg()
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
     * Get references to VMware vCloud vDC entities.
     *
     * @param string $name  Name of the VMware vCloud vDC. If null, returns all
     * @return array VMware_VCloud_API_LinkType object array
     * @since Version 1.0.0
     */
    public function getVdcRefs($name=null)
    {
        return $this->getContainedRefs('vdc', $name);
    }

    /**
     * Get all VMware vCloud vDCs or vDCs with a given name in the organization.
     *
     * @param string $name  Name of the VMware vCloud vDC. If null, returns all
     * @return array VMware_VCloud_API_VdcType object array
     * @since Version 1.0.0
     */
    public function getVdcs($name=null)
    {
        $refs = $this->getVdcRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to VMware vCloud catalog entities.
     *
     * @param string $name  Name of the catalog. If null, returns all
     * @return array        VMware_VCloud_API_LinkType object array
     * @since Version 1.0.0
     */
    public function getCatalogRefs($name=null)
    {
        return $this->getContainedRefs('vcloud.catalog', $name);
    }

    /**
     * Get all catalogs or catalogs with a given name in the organization.
     *
     * @param string $name  Name of the catalog. If null, returns all
     * @return array        VMware_VCloud_API_CatalogType object array
     * @since Version 1.0.0
     */
    public function getCatalogs($name=null)
    {
        $refs = $this->getCatalogRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to VMware vCloud organization network entities.
     *
     * @param string $name  Name of the network. If null, returns all
     * @return array        VMware_VCloud_API_LinkType object array
     * @since Version 1.0.0
     * @deprecated since SDK 5.1.0
     */
    public function getOrgNetworkRefs($name=null)
    {
        return $this->getContainedRefs('orgNetwork', $name);
    }

    /**
     * Get VMware vCloud organization network entity.
     *
     * @param string $name  Name of the network. If null, returns all
     * @return array        VMware_VCloud_API_OrgNetworkType object array
     * @since Version 1.0.0
     * @deprecated since SDK 5.1.0
     */
    public function getOrgNetworks($name=null)
    {
        $refs = $this->getOrgNetworkRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get a reference to VMware vCloud tasks list entity.
     *
     * @return VMware_VCloud_API_LinkType
     * @since Version 1.0.0
     */
    public function getTasksListRef()
    {
        $refs = $this->getContainedRefs('tasksList');
        return $refs[0];
    }

    /**
     * Get a VMware vCloud tasks list entity.
     *
     * @return VMware_VCloud_API_TasksListType
     * @since Version 1.0.0
     */
    public function getTasksList()
    {
        $ref = $this->getTasksListRef();
        return $this->svc->get($ref->get_href());
    }

    /**
     * Get all the tasks in the organization.
     *
     * @return array VMware_VCloud_API_TaskType object array
     * @since Version 1.5.0
     */
    public function getTasks()
    {
        $list = $this->getTasksList();
        return $list->getTask();
    }

    /**
     * Get metadata associated with the organization or metadata associated
     * with the organization for the specified key in the specified domain.
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
}