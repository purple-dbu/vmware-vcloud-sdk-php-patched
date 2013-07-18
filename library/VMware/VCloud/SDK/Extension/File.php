<?php
class VMware_VCloud_SDK_Extension_File extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Returns the Files registered by this service.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getFileRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::FILE_DESCRIPTOR_CONTENT_TYPE);
    }

    /**
     * Gets the File data object.
     *
     * @return VMware_VCloud_API_Extension_AdminFileDescriptorType
     * @since Version 5.1.0
     */
    public function getFile()
    {
        return $this->getDataObj();
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
     * Deletes file descriptor.
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