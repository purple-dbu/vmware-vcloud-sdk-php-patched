<?php
class VMware_VCloud_SDK_Role extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud role entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getRoleRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::ROLE_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud role entity.
     *
     * @return VMware_VCloud_API_RoleType
     * @since Version 1.0.0
     */
    public function getRole()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this role from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:role:' . $this->getUuid();
    }

    /**
     * Modify a role.
     *
     * @param VMware_VCloud_API_RoleType $role
     * @return VMware_VCloud_API_RoleType
     * @since Version 1.0.0
     */
    public function modify($role)
    {
        $type = VMware_VCloud_SDK_Constants::ROLE_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $role);
    }

    /**
     * Delete a role.
     *
     * @return null
     * @since Version 1.0.0
     */
    public function delete()
    {
        $this->svc->delete($this->url, 204);
        $this->destroy();
    }
}