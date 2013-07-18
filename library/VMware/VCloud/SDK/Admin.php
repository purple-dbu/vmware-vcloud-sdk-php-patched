<?php
class VMware_VCloud_SDK_Admin extends VMware_VCloud_SDK_Abstract
{
    /**
     * Constructor
     */
    public function __construct($svc)
    {
        parent::__construct($svc, $svc->getAdminUrl());
    }

    /**
     * Get a VMware vCloud admin entity.
     *
     * @return VMware_VCloud_API_VCloudType
     * @since Version 1.0.0
     */
    public function getVCloud()
    {
        return $this->getDataObj();
    }

    /**
     * Get a link for adding a role operation.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getAddRoleRef()
    {
        $links = $this->getContainedLinks('role', 'add');
        return (1 == count($links))? $links[0] : null;
    }

    /**
     * Get a link for adding an organization operation.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getAddOrgRef()
    {
        $links = $this->getContainedLinks('organization', 'add');
        return (1 == count($links))? $links[0] : null;
    }

    /**
     * Get references to admin organization entities.
     *
     * @param string $name   Name of the admin organization to get. If null,
     *                       returns all
     * @return array VMware_VCloud_API_OrganizationReferenceType object array
     * @since Version 1.0.0
     */
    public function getAdminOrgRefs($name=null)
    {
        return $this->getContainedRefs('organization', $name,
                          'getOrganizationReference',
                          $this->getVCloud()->getOrganizationReferences());
    }

    /**
     * Get all admin organization or admin organization with the given name.
     *
     * @param string $name   Name of the admin organization to get. If null,
     *                       returns all.
     * @return array VMware_VCloud_API_AdminOrgType object array
     * @since Version 1.0.0
     */
    public function getAdminOrgs($name=null)
    {
        $refs = $this->getAdminOrgRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to all provider vDCs or provider vDC with the given name.
     *
     * @param string $name   Name of the provider vDC. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getProviderVdcRefs($name=null)
    {
        return $this->getContainedRefs('providervdc', $name,
                          'getProviderVdcReference',
                          $this->getVCloud()->getProviderVdcReferences());
    }

    /**
     * Get all provider vDCs or provider vDC with the given name.
     *
     * @param string $name   Name of the provider vDC. If null, returns all
     * @return array VMware_VCloud_API_ProviderVdcType object array
     * @since Version 1.0.0
     */
    public function getProviderVdcs($name=null)
    {
        $refs = $this->getProviderVdcRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to all right entities or right entity with the given name.
     *
     * @param string $name   Name of the right. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getRightRefs($name=null)
    {
        return $this->getContainedRefs('right', $name, 'getRightReference',
                                  $this->getVCloud()->getRightReferences());
    }

    /**
     * Get all right entities or right entity with the given name.
     *
     * @param string $name   Name of the right. If null, returns all
     * @return array VMware_VCloud_API_RightType object array
     * @since Version 1.0.0
     */
    public function getRights($name=null)
    {
        $refs = $this->getRightRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to all role entities or role entity with the given name.
     *
     * @param string $name   Name of the role. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getRoleRefs($name=null)
    {
        return $this->getContainedRefs('role', $name, 'getRoleReference',
                                 $this->getVCloud()->getRoleReferences());
    }

    /**
     * Get all role entities or role entity with the given name.
     *
     * @param string $name   Name of the role. If null, returns all
     * @return array VMware_VCloud_API_RoleType object array
     * @since Version 1.0.0
     */
    public function getRoles($name=null)
    {
        $refs = $this->getRoleRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to all external network entities or external
     * network entity with the given name.
     *
     * @param string $name   Name of the external network. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getExternalNetworkRefs($name=null)
    {
        return $this->getContainedRefs(null, $name, 'getNetwork',
                                       $this->getVCloud()->getNetworks());
    }

    /**
     * Get all external network entities or external network entity
     * with the given name.
     *
     * @param string $name   Name of the external network. If null, returns all
     * @return array VMware_VCloud_API_ExternalNetworkType object array
     * @since Version 1.0.0
     */
    public function getExternalNetworks($name=null)
    {
        $refs = $this->getExternalNetworkRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Create an organization entity in vCloud.
     *
     * @param VMware_VCloud_API_AdminOrgType $adminOrg
     * @return VMware_VCloud_API_AdminOrgType|null
     * @since Version 1.0.0
     */
    public function createOrganization($adminOrg)
    {
        $url = $this->url . '/orgs';
        $type = VMware_VCloud_SDK_Constants::ADMIN_ORGANIZATION_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $adminOrg);
    }

    /**
     * Create a role in vCloud.
     *
     * @param VMware_VCloud_API_RoleType $role
     * @return VMware_VCloud_API_RoleType
     * @since Version 1.0.0
     */
    public function createRole($role)
    {
        $url = $this->url . '/roles';
        $type = VMware_VCloud_SDK_Constants::ROLE_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $role);
    }

    /**
     * Get a link to the system organization.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    public function getSystemOrgRef()
    {
        $links = $this->getContainedLinks('systemOrganization', 'down');
        return (1 == count($links))? $links[0] : null;
    }

    /**
     * Get a system organization data object.
     *
     * @return VMware_VCloud_API_AdminOrgType|null
     * @since Version 1.5.0
     */
    public function getSystemOrg()
    {
        $ref = $this->getSystemOrgRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Retrieves a list of groups for organization the org admin belongs to by using REST API general QueryHandler; If filter is provided it will be applied to the corresponding result set. Format determines the elements representation - references or records. Default format is references.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getGroupQuery()
    {
        $url = $this->url . '/groups/query?&format=references';
        return $this->svc->get($url, 200);
    }
}