<?php
class VMware_VCloud_SDK_Group extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud group entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getGroupRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::GROUP_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud group entity.
     *
     * @return VMware_VCloud_API_GroupType
     * @since Version 1.0.0
     */
    public function getGroup()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this group from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:group:' . $this->getUuid();
    }

    /**
     * Modify a group.
     *
     * @param VMware_VCloud_API_GroupType $group
     * @return VMware_VCloud_API_GroupType
     * @since Version 1.0.0
     */
    public function modify($group)
    {
        $type = VMware_VCloud_SDK_Constants::GROUP_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $group);
    }

    /**
     * Delete a group.
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