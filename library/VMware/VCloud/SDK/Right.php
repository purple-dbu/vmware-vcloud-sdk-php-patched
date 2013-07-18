<?php
class VMware_VCloud_SDK_Right extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud right entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getRightRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::RIGHT_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud right entity.
     *
     * @return VMware_VCloud_API_RightType
     * @since Version 5.1.0
     */
    public function getRight()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this right from its UUID.
     *
     * @return string
     * @since Version 5.1.0
     */
    public function getId()
    {
        return 'urn:vcloud:right:' . $this->getUuid();
    }

    /**
     * Updates a right.
     *
     * @param VMware_VCloud_API_RightType $params
     * @return VMware_VCloud_API_RightType
     * @since Version 5.1.0
     */
    public function updateRights($params)
    {
        $type = VMware_VCloud_SDK_Constants::RIGHT_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $params);
    }

    /**
     * Delete a right.
     *
     * @return null
     * @since Version 5.1.0
     */
    public function delete()
    {
        $this->svc->delete($this->url, 204);
        $this->destroy();
    }
}