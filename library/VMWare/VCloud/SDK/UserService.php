<?php
class VMware_VCloud_SDK_UserService extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the user service entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getUserServiceRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::USER_SERVICE_CONTENT_TYPE);
    }
    /**
     * Gets the user service data object.
     *
     * @return VMware_VCloud_API_ServiceType
     * @since Version 5.1.0
     */
    public function getUserService()
    {
        return $this->getDataObj();
    }

	/**
     * Retrieves API Definition.
     *
     * @return VMware_VCloud_API_ApiDefinitionType
     * @since Version 5.1.0
     */
    public function getAPIDefinitionRefs()
    {
        $type = 'apiDefinition';
        return $this->svc->queryReferencesByType($type);
    }
}