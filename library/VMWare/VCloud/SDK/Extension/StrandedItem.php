<?php
class VMware_VCloud_SDK_Extension_StrandedItem extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the stranded item.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getStrandedItemRef()
    {
        return $this->getRef(
                      VMware_VCloud_SDK_Constants::STRANDED_ITEM_CONTENT_TYPE);
    }

    /**
     * Get the stranded item data object.
     *
     * @return VMware_VCloud_API_Extension_StrandedItemType
     * @since Version 5.1.0
     */
    public function getStrandedItem()
    {
        return $this->getDataObj();
    }

    /**
     * Remove stranded item.
     *
     * @return VMware_VCloud_API_TaskType
     * @version Since 5.1.0
     */
    public function removeStrandedItem()
    {
        return $this->svc->delete($this->url);
    }

    /**
     * Remove stranded item and its children.
     *
     * @return VMware_VCloud_API_TaskType
     * @version Since 5.1.0
     */
    public function forceDeleteStrandedItem()
    {
        $url = $this->url . '/action/forceDelete';
        return $this->svc->post($url, 202);
    }
}