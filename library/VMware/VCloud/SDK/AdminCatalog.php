<?php
class VMware_VCloud_SDK_AdminCatalog extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud catalog entity in an administrator view.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getAdminCatalogRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             ADMIN_CATALOG_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud catalog entity in an administrator view.
     *
     * @return VMware_VCloud_API_AdminCatalogType
     * @since Version 1.0.0
     */
    public function getAdminCatalog()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this catalog from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:catalog:' . $this->getUuid();
    }

    /**
     * Get a reference to a VMware vCloud catalog entity.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    public function getCatalogRef()
    {
        $links = $this->getContainedLinks('catalog', 'alternate');
        return isset($links)? $links[0] : null;
    }

    /**
     * Get a VMware vCloud catalog entity.
     *
     * @return VMware_VCloud_API_CatalogType
     * @since Version 1.0.0
     */
    public function getCatalog()
    {
        $ref = $this->getCatalogRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Get the link to the container entity of the catalog in an administrator
     * view.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    public function getAdminOrgRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container entity of the catalog in an administrator view.
     *
     * @return VMware_VCloud_API_AdminOrgType|null
     * @since Version 1.5.0
     */
    public function getAdminOrg()
    {
        $ref = $this->getAdminOrgRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Publish a catalog.
     *
     * @param boolean $ispub
     * @return null
     * @since Version 1.0.0
     */
    public function publish($ispub=true)
    {
        $url = $this->url . '/action/publish';
        $params = new VMware_VCloud_API_PublishCatalogParamsType();
        $params->setIsPublished($ispub);
        $type = VMware_VCloud_SDK_Constants::PUBLISH_CATALOG_PARAMS_CONTENT_TYPE;
        $this->svc->post($url, 204, $type, $params);
    }

    /**
     * Unpublish a catalog.
     *
     * @return null
     * @since Version 1.5.0
     */
    public function unpublish()
    {
        $this->publish(false);
    }

    /**
     * Modify a catalog.
     *
     * @param VMware_VCloud_API_AdminCatalogType $catalog
     * @return VMware_VCloud_API_AdminCatalogType
     * @since Version 1.0.0
     */
    public function modify($catalog)
    {
        $type = VMware_VCloud_SDK_Constants::ADMIN_CATALOG_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $catalog);
    }

    /**
     * Delete a catalog.
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
     * Get references to catalog items in this catalog entity.
     *
     * @param string $name   Name of the catalog item to get. If null,
     *                       returns all
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
     * @param string $name   Name of the catalog item to get. If null,
     *                       returns all
     * @return array VMware_VCloud_API_CatalogItemType object array
     * @since Version 1.0.0
     */
    public function getCatalogItems($name=null)
    {
        $refs = $this->getCatalogItemRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Returns owner of the catalog.
     *
     * @return VMware_VCloud_API_OwnerType
     * @since Version 1.5.0
     */
    public function getOwner()
    {
        $url = $this->url . '/owner';
        return $this->svc->get($url);
    }

    /**
     * Changes owner of the catalog.
     *
     * @param VMware_VCloud_API_OwnerType $owner
     * @return null
     * @since Version 1.5.0
     */
    public function changeOwner($owner)
    {
        $url = $this->url . '/owner';
        $type = VMware_VCloud_SDK_Constants::OWNER_CONTENT_TYPE;
        $this->svc->put($url, 204, $type, $owner);
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

    /**
     * Merges the metadata for the catalog with the information provided.
     *
     * @param VMware_VCloud_API_MetadataType $meta
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function mergeMetadata($meta)
    {
        $url = $this->getMetadataUrl();
        $type = VMware_VCloud_SDK_Constants::METADATA_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $meta);
    }

    /**
     * Sets the metadata for the particular key in the specified domain for the
     * catalog to the value provided. Note: This will replace any existing
     * metadata information.
     *
     * @param string $key
     * @param VMware_VCloud_API_MetadataValueType $value
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function setMetadataByKey($key, $value, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        echo "adminCat meta url: $url\n";
        echo $value->export() . "\n";
        $type = VMware_VCloud_SDK_Constants::METADATA_VALUE_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $value);
    }

    /**
     * Deletes the metadata for the particular key in the specified domain for
     * the catalog.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function deleteMetadataByKey($key, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        return $this->svc->delete($url, 202);
    }

    /**
     * Return an alternate SDK catalog object.
     *
     * @return VMware_VCloud_SDK_Catalog|null
     * @since Version 1.5.0
     */
    public function getSdkCatalog()
    {
        $ref = $this->getCatalogRef();
        return isset($ref)? $this->svc->createSDKObj($ref) : null;
    }
}