<?php
class VMware_VCloud_SDK_Extension_Datastore extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a data store entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.5.0
     */
    public function getDatastoreRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::DATASTORE_CONTENT_TYPE);
    }

    /**
     * Get a data store settings.
     *
     * @return VMware_VCloud_API_Extension_DatastoreType
     * @since Version 1.5.0
     */
    public function getDatastore()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the data store from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:datastore:' . $this->getUuid();
    }

    /**
     * Get MoRef of the data store.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getMoRef()
    {
        return $this->getDatastore()->getVimObjectRef()->getMoRef();
    }

    /**
     * Get the reference of the Vim server.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.5.0
     */
    public function getVimServerRef()
    {
        return $this->getDatastore()->getVimObjectRef()->getVimServerRef();
    }

    /**
     * Modify the data store.
     *
     * @param VMware_VCloud_API_Extension_DatastoreType $ds
     * @return VMware_VCloud_API_Extension_DatastoreType
     * @since Version 1.5.0
     */
    public function modify($ds)
    {
        $type = VMware_VCloud_SDK_Constants::DATASTORE_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $ds);
    }

    /**
     * Enable the data store.
     *
     * @return VMware_VCloud_API_Extension_DatastoreType
     * @since Version 1.5.0
     */
    public function enable()
    {
        $url = $this->url . '/action/enable';
        return $this->svc->post($url, 200);
    }

    /**
     * Disable the data store.
     *
     * @return VMware_VCloud_API_Extension_DatastoreType
     * @since Version 1.5.0
     */
    public function disable()
    {
        $url = $this->url . '/action/disable';
        return $this->svc->post($url, 200);
    }

    /**
     * Remove the data store.
     *
     * @return null
     * @since Version 1.5.0
     */
    public function delete()
    {
        $this->svc->delete($this->url);
        $this->destroy();
    }
}