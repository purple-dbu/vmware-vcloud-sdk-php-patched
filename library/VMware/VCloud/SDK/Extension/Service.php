<?php
class VMware_VCloud_SDK_Extension_Service extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the service entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getServiceRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::EXTENSION_SERVICE_CONTENT_TYPE);
    }
    /**
     * Gets the service data object.
     *
     * @return VMware_VCloud_API_Extension_AdminServiceType
     * @since Version 5.1.0
     */
    public function getService()
    {
        return $this->getDataObj();
    }

    /**
     * Updates the Extension service.
     *
     * @param VMware_VCloud_API_Extension_AdminServiceType $settings
     * @return VMware_VCloud_API_Extension_AdminServiceType
     * @since Version 5.1.0
     */
    public function updatesService($settings)
    {
        $type = VMware_VCloud_SDK_Constants::EXTENSION_SERVICE_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $settings);
    }

    /**
     * Returns the API definitions registered by this service.
     *
     * @return VMware_VCloud_API_Extension_AdminApiDefinitionType
     * @since Version 5.1.0
     */
    public function getAPIDefinitions()
    {
        $type = 'adminApiDefinition';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     *Creates API definition.
     * @param VMware_VCloud_API_Extension_AdminApiDefinitionType $params
     * @return VMware_VCloud_API_Extension_AdminApiDefinitionType
     * @since Version 5.1.0
     */
    public function addAPIDefinitions($params)
    {
        $url = $this->url . '/apidefinitions';
        $type = VMware_VCloud_SDK_Constants::
                  API_DEFINITIONS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Returns the Links registered by this service.
     *
     * @return VMware_VCloud_API_Extension_AdminServiceLinkType
     * @since Version 5.1.0
     */
    public function getServiceLinks()
    {
        $type = 'serviceLink';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Create service link.
     * @param VMware_VCloud_API_Extension_AdminServiceLinkType $params
     * @return VMware_VCloud_API_Extension_AdminServiceLinkType
     * @since Version 5.1.0
     */
    public function createServiceLinks($params)
    {
        $url = $this->url . '/links';
        $type = VMware_VCloud_SDK_Constants::
                  LINKS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Retrieves API filter.
     *
     * @return VMware_VCloud_API_Extension_ApiFilterType
     * @since Version 5.1.0
     */
    public function getApiFilterRefs()
    {
        $type = 'apiFilter';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Creates API filter.
     * @param VMware_VCloud_API_Extension_ApiFilterType $params
     * @return VMware_VCloud_API_Extension_ApiFilterType
     * @since Version 5.1.0
     */
    public function createApiFilter($params)
    {
        $url = $this->url . '/apifilters';
        $type = VMware_VCloud_SDK_Constants::
                  API_FILTERS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * List registered resource class for extension service.
     *
     * @return VMware_VCloud_API_ContainerType
     * @since Version 5.1.0
     */
    public function getResourceClass()
    {
        $type='resourceClass';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Registers resource class for extension service.
     * @param VMware_VCloud_API_Extension_ResourceClassType $params
     * @return VMware_VCloud_API_Extension_ResourceClassType
     * @since Version 5.1.0
     */
    public function registerResourceClass($params)
    {
        $url = $this->url . '/resourceclasses';
        $type = VMware_VCloud_SDK_Constants::
                  RESOURCE_CLASSES_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * List registered resource class actions for extension service.
     *
     * @return VMware_VCloud_API_ResourceClassActionType
     * @since Version 5.1.0
     */
    public function getResourceClassAction()
    {
        $type='resourceClassAction';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * List registered service resources for extension service.
     *
     * @return VMware_VCloud_API_ContainerType
     * @since Version 5.1.0
     */
    public function getServiceResources()
    {
        $type='serviceResource';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Gives the rights registered by this extension service.
     *
     * @return VMware_VCloud_API_Extension_RightRefsType
     * @since Version 5.1.0
     */
    public function getRights()
    {
        $url = $this->url . '/rights';
        return $this->svc->get($url);

    }

    /**
     * Registers right to the rights managed by this extension service.
     * @param VMware_VCloud_API_RightType $params
     * @return VMware_VCloud_API_RightType
     * @since Version 5.1.0
     */
    public function registerRights($params)
    {
        $url = $this->url . '/rights';
        $type = VMware_VCloud_SDK_Constants::
                  RIGHT_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Registers right to the rights managed by this extension service.
     * @param VMware_VCloud_API_UpdateRightsParamsType $params
     * @return VMware_VCloud_API_RightRefsType
     * @since Version 5.1.0
     */
    public function updateRights($params)
    {
        $url = $this->url . '/rights/action/updateRights';
        $type = VMware_VCloud_SDK_Constants::
                  UPDATE_RIGHTS_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }

    /**
     * List registered resource class ACL rule for extension service.
     *
     * @return VMware_VCloud_API_ContainerType
     * @since Version 5.1.0
     */
    public function getAclRule()
    {
        $type = 'aclRule';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Checks user authorization for service, URL and request verb.
     * @param VMware_VCloud_API_Extension_AuthorizationCheckParamsType $params
     * @return boolean
     * @since Version 5.1.0
     */
    public function isAuthorized($params)
    {
        $url = $this->url . '/authorizationcheck';
        $type = VMware_VCloud_SDK_Constants::
                  AUTHORIZATION_CHECK_CONTENT_TYPE;
        $authorizedresponse= $this->svc->post($url, 200, $type, $params);
        return $authorizedresponse->getIsAuthorized();
    }

    /**
     * Retrieve a file descriptor.
     *
     * @return VMware_VCloud_API_Extension_AdminFileDescriptorType
     * @since Version 5.1.0
     */
    public function getFileDescriptor()
    {
        $type='adminFileDescriptor';
        return $this->svc->queryReferencesByType($type);
    }

    /**
     * Delete Service.
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