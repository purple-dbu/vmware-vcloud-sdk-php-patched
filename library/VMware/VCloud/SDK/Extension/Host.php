<?php
class VMware_VCloud_SDK_Extension_Host extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a host entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.5.0
     */
    public function getHostRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::HOST_CONTENT_TYPE);
    }

    /**
     * Get a host object.
     *
     * @return VMware_VCloud_API_Extension_HostType
     * @since Version 1.0.0
     */
    public function getHost()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the host from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:host:' . $this->getUuid();
    }

    /**
     * A common function for host operations.
     *
     * @param string $name  Name of the action.
     * @param int  $expect  Expected return code of the HTTP request on success
     * @param mix    $obj   Represents as the HTTP request body
     * @param string $type  HTTP request Content-Type.
     * @access protected
     */
    protected function action($name, $expect=202, $obj=null, $type=null)
    {
        $url = $this->url . "/action/$name";
        return $this->svc->post($url, $expect, $type, $obj);
    }

    /**
     * Prepare a host.
     *
     * @param string $username   Username of the host.
     * @param string $password   Password of the host.
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function prepare($username, $password)
    {
        $param = new VMware_VCloud_API_Extension_PrepareHostParamsType();
        $param->setUsername($username);
        $param->setPassword($password);
        $type = VMware_VCloud_SDK_Constants::PREPARE_HOST_PARAMS_CONTENT_TYPE;
        return $this->action('prepare', 202, $param, $type);
    }

    /**
     * Unprepare a host.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function unprepare()
    {
        return $this->action('unprepare');
    }

    /**
     * Enable a host.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function enable()
    {
        return $this->action('enable');
    }

    /**
     * Disable a host.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function disable()
    {
        return $this->action('disable');
    }

    /**
     * Check whether the host is enabled or not.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isEnabled()
    {
        return $this->getHost()->getEnabled();
    } 

    /**
     * Check whether the host is ready or not.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isReady()
    {
        return $this->getHost()->getReady();
    }

    /**
     * Repair a host.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function repair()
    {
        return $this->action('repair');
    }

    /**
     * Upgrade a host agent to the current version. If the version of the host
     * is current, no action will be performed.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function upgrade()
    {
        return $this->action('upgrade');
    }
}