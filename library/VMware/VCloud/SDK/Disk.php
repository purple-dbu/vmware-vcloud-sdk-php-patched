<?php
class VMware_VCloud_SDK_Disk extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud disk entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getDiskRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::DISK_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud disk entity.
     *
     * @return VMware_VCloud_API_DiskType
     * @since Version 5.1.0
     */
    public function getDisk()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this disk from its UUID.
     *
     * @return string
     * @since Version 5.1.0
     */
    public function getId()
    {
        return 'urn:vcloud:disk:' . $this->getUuid();
    }

    /**
     * Modify the name, description, and storage profile of a disk.
     *
     * @param VMware_VCloud_API_DiskType
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function modify($disk)
    {
        $type = VMware_VCloud_SDK_Constants::DISK_CONTENT_TYPE;
        return $this->svc->put($this->url, 202, $type, $disk);
    }

    /**
     * Delete a disk.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function delete()
    {
        return $this->svc->delete($this->url, 202);
    }

    /**
     * Retrieve a list of all VMs attached to a disk.
     *
     * @return array|null VMware_VCloud_API_ReferenceType object array or null.
     * @since Version 5.1.0
     */
    public function getAttachedVms()
    {
        $url = $this->url . '/attachedVms';
        $vmsArr = $this->svc->get($url);
        return (0 == sizeof($vmsArr)) ? null : $vmsArr->getVmReference();
    }

    /**
     * Retrieve the owner of a disk.
     *
     * @return VMware_VCloud_API_OwnerType
     * @since Version 5.1.0
     */
    public function getOwner()
    {
        $url = $this->url . '/owner';
        return $this->svc->get($url);
    }

    /**
     * Change the owner of a disk.
     *
     * @param VMware_VCloud_API_OwnerType $owner
     * @return null
     * @since Version 5.1.0
     */
    public function changeOwner($owner)
    {
        $url = $this->url . '/owner';
        $type = VMware_VCloud_SDK_Constants::OWNER_CONTENT_TYPE;
        $this->svc->put($url, 204, $type, $owner);
    }

    /**
     * Get metadata associated with the disk or metadata
     * associated with the disk for the specified key in the
     * specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|VMware_VCloud_API_MetadataValueType|null
     * @since Version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }

    /**
     * Merges the metadata for the disk with the information provided.
     *
     * @param VMware_VCloud_API_MetadataType $meta
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function mergeMetadata($meta)
    {
        $url = $this->getMetadataUrl();
        $type = VMware_VCloud_SDK_Constants::METADATA_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $meta);
    }

    /**
     * Sets the metadata for the particular key in the specified domain for the
     * disk to the value provided. Note: This will replace any existing
     * metadata information.
     *
     * @param string $key
     * @param VMware_VCloud_API_MetadataValueType $value
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
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
     * the disk.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_TaskType
     * @version 5.1.0
     */
    public function deleteMetadataByKey($key, $domain=null)
    {
        $url = $this->getMetadataUrl($key, $domain);
        return $this->svc->delete($url, 202);
    }
}