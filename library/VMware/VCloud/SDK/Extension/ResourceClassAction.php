<?php
class VMware_VCloud_SDK_Extension_ResourceClassAction extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the ResourceClassAction entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getResourceClassActionRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::RESOURCECLASSACTION_CONTENT_TYPE);
    }
    /**
     * Gets the ResourceClassAction data object.
     *
     * @return VMware_VCloud_API_Extension_ResourceClassActionType
     * @since Version 5.1.0
     */
    public function getResourceClassAction()
    {
        return $this->getDataObj();
    }

    /**
     * Registers resource class ACL rule for extension service.
     * @param VMware_VCloud_API_Extension_AclRuleType $params
     * @return VMware_VCloud_API_Extension_AclRuleType
     * @since Version 5.1.0
     */
    public function createAclRule($params)
    {
        $url = $this->url . '/aclrules';
        $type = VMware_VCloud_SDK_Constants::
                  ACLRULE_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * List registered resource class ACL rule for extension service.
     *
     * @return VMware_VCloud_API_ContainerType
     * @since Version 5.1.0
     */
    public function getAclRuleRef()
    {
        $type = 'aclRule';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Deletes resource class action.
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