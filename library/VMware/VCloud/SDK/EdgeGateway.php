<?php
class VMware_VCloud_SDK_EdgeGateway extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud edgegateway entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 5.1.0
     */
    public function getEdgeGatewayRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::EDGE_GATEWAYS_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud edgegateway entity.
     *
     * @return VMware_VCloud_API_GatewayType
     * @since Version 5.1.0
     */
    public function getEdgeGateway()
    {
        return $this->getDataObj();
    }

    /**
     * Get up link to the admin org vdc reference.
     *
     * @return VMware_VCloud_API_LinkType object
     * @since SDK Version 5.1.0
     */
    public function getAdminVdcRef()
    {
        $vdcReference = null;
        $links = $this->getEdgeGateway()->getLink();
        foreach ($links as $link)
        {
            if (($link->get_rel()== VMware_VCloud_SDK_Constants::RELATION_TYPE_UP) && ($link->get_Type() == VMware_VCloud_SDK_Constants::ADMIN_VDC_CONTENT_TYPE))
            {
                $vdcReference = $link;
            }
        }
        return $vdcReference;
    }

    /**
     * Modify a edgeGateway.
     *
     * @param VMware_VCloud_API_GatewayType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function modify($params)
    {
        $type = VMware_VCloud_SDK_Constants::EDGE_GATEWAYS_CONTENT_TYPE;
        // return $this->svc->put($this->url, 200, $type, $params);
        return $this->svc->put($this->url, 202, $type, $params); // @amercier #5
    }

    /**
     * Update edgeGateway configuration.
     *
     * @param VMware_VCloud_API_GatewayFeaturesType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function configureServices($params)
    {
        $url = $this->url . '/action/configureServices';
        $type = VMware_VCloud_SDK_Constants::EDGEGATEWAY_SERVICECONFIGURATION_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Reapply services on an edgeGateway.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function createReapplyServices()
    {
        $url = $this->url . '/action/reapplyServices';
        return $this->svc->post($url, 202);
    }

    /**
     * Redeploy edgeGateway.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function createRedeploy()
    {
        $url = $this->url . '/action/redeploy';
        return $this->svc->post($url, 202);
    }

    /**
     * Synchronize syslog server settings on an edgeGateway.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function createSyncSyslogServerSettings()
    {
        $url = $this->url . '/action/syncSyslogServerSettings';
        return $this->svc->post($url, 202);
    }

    /**
     * Upgrade edgeGateway configuration from compact to full.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function createUpgradeConfig()
    {
        $url = $this->url . '/action/upgradeConfig';
        return $this->svc->post($url, 202);
    }

    /**
     * Delete a edgegateway.
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