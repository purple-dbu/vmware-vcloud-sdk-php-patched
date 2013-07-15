<?php
class VMware_VCloud_SDK_Extension_ApiFilter extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to the api filter entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getApiFilterRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::API_FILTERS_CONTENT_TYPE);
    }

    /**
     * Gets the api filter data object.
     *
     * @return VMware_VCloud_API_Extension_ApiFilterType
     * @since Version 5.1.0
     */
    public function getApiFilter()
    {
        return $this->getDataObj();
    }
	
    /**
     * Deletes API filter.
     *
     * @return null
     * @since Version 5.1.0
     */
    public function delete()
    {
        $this->svc->delete($this->url);
        $this->destroy();
    }
}