<?php
class VMware_VCloud_SDK_Extension_AclRule extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the AclRule entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getAclRuleRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::ACLRULE_CONTENT_TYPE);
    }
    /**
     * Gets the ACL rule data object.
     *
     * @return VMware_VCloud_API_Extension_AclRuleType
     * @since Version 5.1.0
     */
    public function getAclRule()
    {
        return $this->getDataObj();
    }

    /**
     * Delete ACL rule.
     *
     *
     * @since Version 5.1.0
     */
    public function delete()
    {
        $this->svc->delete($this->url, 204);
        $this->destroy();
    }
}