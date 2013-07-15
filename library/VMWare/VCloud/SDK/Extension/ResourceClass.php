<?php
class VMware_VCloud_SDK_Extension_ResourceClass extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the ResourceClass entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getResourceClassRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::RESOURCE_CLASSES_CONTENT_TYPE);
    }

    /**
     * Gets the ResourceClass data object.
     *
     * @return VMware_VCloud_API_ResourceClassType
     * @since Version 5.1.0
     */
    public function getResourceClass()
    {
        return $this->getDataObj();
    }

    /**
     * Registers resource class Action for extension service.
     * @param VMware_VCloud_API_Extension_ResourceClassActionType $params
     * @return VMware_VCloud_API_Extension_ResourceClassActionType
     * @since Version 5.1.0
     */
    public function registerResourceClassAction($params)
    {
        $url = $this->url . '/resourceclassactions';
        $type = VMware_VCloud_SDK_Constants::
                  RESOURCECLASSACTION_CONTENT_TYPE;
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
     * Registers resource class Action for extension service.
     * @param VMware_VCloud_API_Extension_ServiceResourceType $params
     * @return VMware_VCloud_API_Extension_ServiceResourceType
     * @since Version 5.1.0
     */
    public function registerServiceResources($params)
    {
        $url = $this->url . '/serviceresources';
        $type = VMware_VCloud_SDK_Constants::
                  SERVICERESOURCES_CLASSES_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
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
     * Deletes resource class.
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