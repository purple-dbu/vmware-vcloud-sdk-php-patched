<?php
class VMware_VCloud_SDK_User extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud user entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getUserRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::USER_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud user entity.
     *
     * @return VMware_VCloud_API_UserType
     * @since Version 1.0.0
     */
    public function getUser()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this user from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:user:' . $this->getUuid();
    }

    /**
     * Enable a user.
     *
     * @param boolean $enable   To enable, set to true; to disable, set to false
     * @return VMware_VCloud_API_UserType|null
     * @since Version 1.0.0
     */
    public function enable($enable=true)
    {
        $user = $this->getUser();
        $isEnabled = $user->getIsEnabled();
        if ($isEnabled === $enable)
        {
            return null;
        }
        $user->setIsEnabled($enable);
        return $this->modify($user);
    }

    /**
     * Disable a user.
     *
     * @return VMware_VCloud_API_UserType|null
     * @since Version 1.0.0
     */
    public function disable()
    {
        return $this->enable(false);
    }

    /**
     * Modify a user.
     *
     * @param VMware_VCloud_API_UserType $user
     * @return VMware_VCloud_API_UserType
     * @since Version 1.0.0
     */
    public function modify($user)
    {
        $type = VMware_VCloud_SDK_Constants::USER_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $user);
    }

    /**
     * Delete a user.
     *
     * @return null
     * @since Version 1.0.0
     */
    public function delete()
    {
        $this->svc->delete($this->url, 204);
        $this->destroy();
    }

    /**
     * Unlock a user.
     *
     * @return null
     * @since Version 1.5.0
     * @deprecated since version 5.1.0
     */
    public function unlock()
    {
        $url = $this->url . '/action/unlock';
        return $this->svc->post($url, 204);
    }

    /**
     * Queries user privileges on a set of entities.
     *
     * @param VMware_VCloud_API_Extension_EntityReferencesType $refs
     * @return VMware_VCloud_API_Extension_UserEntityRightsType
     * @since Version 5.1.0
     */
    public function getEntityRights($refs)
    {
        $url = $this->url . '/entityRights';
        $type = VMware_VCloud_SDK_Constants::ENTITY_REFERENCES_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $refs);
    }

    /**
     * Queries user granted privileges.
     *
     * @return VMware_VCloud_API_ReferencesType
     * @since Version 5.1.0
     */
    public function getGrantedRights()
    {
        $url = $this->url . '/grantedRights';
        return $this->svc->get($url);
    }
}