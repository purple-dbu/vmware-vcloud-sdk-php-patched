<?php
class VMware_VCloud_SDK_CatalogItem extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud catalog item entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getCatalogItemRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::
                             CATALOG_ITEM_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud catalog item entity.
     *
     * @return VMware_VCloud_API_CatalogItemType
     * @since Version 1.0.0
     */
    public function getCatalogItem()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the catalog item from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:catalogitem:' . $this->getUuid();
    }

    /**
     * Get the link to the catalog to which this catalog item belongs.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    public function getCatalogRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the catalog to which this catalog item belongs.
     *
     * @return VMware_VCloud_API_CatalogType
     * @since Version 1.5.0
     */
    public function getCatalog()
    {
        $ref = $this->getCatalogRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Modify a VMware vCloud catalog item.
     *
     * @param VMware_VCloud_API_CatalogItemType $catalogItem
     * @return VMware_VCloud_API_CatalogItemType
     * @since Version 1.0.0
     */
    public function modify($catalogItem)
    {
        $type = VMware_VCloud_SDK_Constants::CATALOG_ITEM_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $catalogItem);
    }

    /**
     * Force sync the library item to the remote subscribed library.
     *
     * @return VMware_VCloud_API_TaskType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function sync()
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::ACTION_SYNC_URL;
        return $this->svc->post($url, 202);
    }

    /**
     * Delete a VMware vCloud catalog item entity.
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
     * Get metadata associated with the catalog item or metadata associated
     * with the catalog item for the specified key in the specified domain.
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
     * Merges the metadata for the catalog item with the information provided.
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
     * catalog item to thevalue provided. Note: This will replace any existing
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
        $type = VMware_VCloud_SDK_Constants::METADATA_VALUE_CONTENT_TYPE;
        return $this->svc->put($url, 202, $type, $value);
    }

    /**
     * Deletes the metadata for the particular key in the specified domain for
     * the catalog item.
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
}