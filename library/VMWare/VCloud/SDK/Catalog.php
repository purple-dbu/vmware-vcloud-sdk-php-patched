<?php
class VMware_VCloud_SDK_Catalog extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud catalog entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getCatalogRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::CATALOG_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud catalog entity.
     *
     * @return VMware_VCloud_API_CatalogType
     * @since Version 1.0.0
     */
    public function getCatalog()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the catalog from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:catalog:' . $this->getUuid();
    }

    /**
     * Get the link to the container of the catalog.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getOrgRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container of the catalog.
     *
     * @return VMware_VCloud_API_OrgType|null
     * @since Version 1.0.0
     */
    public function getOrg()
    {
        $ref = $this->getOrgRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Get references to catalog items entity in this catalog entity.
     *
     * @param string $name   Name of the catalog item. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getCatalogItemRefs($name=null)
    {
        return $this->getContainedRefs('catalogItem', $name, 'getCatalogItem',
                              $this->getCatalog()->getCatalogItems());
    }

    /**
     * Get all catalog items or catalog items with the given name in this
     * catalog.
     *
     * @param string $name   Name of the catalog item. If null, returns all
     * @return array VMware_VCloud_API_CatalogItemType object array
     * @since Version 1.0.0
     */
    public function getCatalogItems($name=null)
    {
        $refs = $this->getCatalogItemRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Add a catalog item to this VMware vCloud catalog.
     *
     * @param VMware_VCloud_API_CatalogItemType $catalogItem
     * @return VMware_VCloud_API_CatalogItemType Represents the newly created
     *                                           catalog item
     * @since Version 1.0.0
     */
    public function addCatalogItem($catalogItem)
    {
        $url = $this->url . '/catalogItems';
        $type = VMware_VCloud_SDK_Constants::CATALOG_ITEM_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $catalogItem);
    }

    /**
     * Delete this vCloud catalog.
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
     * Construct control access url for a catalog.
     *
     * @param  string $action   Operation on the control access
     * @return string
     * @access private
     */
    private function getControlAccessUrl($action=null)
    {
        $orgUrl = $this->getOrgRef()->get_href();
        $url = $orgUrl . "/catalog/" . $this->getUuid();
        $url = ("action" == $action)? "$url/$action" : $url;
        return "$url/controlAccess";
    }

    /**
     * Get the control access of this catalog.
     *
     * @return VMware_VCloud_API_ControlAccessParamsType
     * @since Version 1.0.0
     */
    public function getControlAccess()
    {
        $url = $this->getControlAccessUrl();
        return $this->svc->get($url);
    }

    /**
     * Modify the control access of this catalog. Modify catalog sharing can
     * be done with this function.
     *
     * @param VMware_VCloud_API_ControlAccessParamsType $controlAccess
     * @return VMware_VCloud_API_ControlAccessParamsType
     * @since Version 1.0.0
     */
    public function modifyControlAccess($controlAccess)
    {
        $url = $this->getControlAccessUrl('action');
        $type = VMware_VCloud_SDK_Constants::CONTROL_ACCESS_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $controlAccess);
    }

    /**
     * Get metadata associated with the catalog or metadata associated with
     * the catalog for the specified key in the specified domain.
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