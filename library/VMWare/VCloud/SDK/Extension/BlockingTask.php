<?php
class VMware_VCloud_SDK_Extension_BlockingTask extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Gets the blocking task data object.
     *
     * @return VMware_VCloud_API_Extension_BlockingTaskType
     * @since Version 1.5.0
     */
    public function getBlockingTask()
    {
        return $this->getDataObj();
    }

    /**
     * Aborts a request.
     *
     * @param VMware_VCloud_API_Extension_BlockingTaskOperationParamsType $params
     * @return null
     * @since Version 1.5.0
     */
    public function abort($params)
    {
        $url = $this->url . '/action/abort';
        $type = VMware_VCloud_SDK_Constants::
                  BLOCKING_TASK_OPERATION_PARAMS_CONTENT_TYPE;
        $this->svc->post($url, 204, $type, $params);
    }

    /**
     * Fails a request.
     *
     * @param VMware_VCloud_API_Extension_BlockingTaskOperationParamsType $params
     * @return null
     * @since Version 1.5.0
     */
    public function fail($params)
    {
        $url = $this->url . '/action/fail';
        $type = VMware_VCloud_SDK_Constants::
                  BLOCKING_TASK_OPERATION_PARAMS_CONTENT_TYPE;
        $this->svc->post($url, 204, $type, $params);
    }

    /**
     * Resumes a request.
     *
     * @param VMware_VCloud_API_Extension_BlockingTaskOperationParamsType $params
     * @return null
     * @since Version 1.5.0
     */
    public function resume($params)
    {
        $url = $this->url . '/action/resume';
        $type = VMware_VCloud_SDK_Constants::
                  BLOCKING_TASK_OPERATION_PARAMS_CONTENT_TYPE;
        $this->svc->post($url, 204, $type, $params);
    }

    /**
     * Updates progress.
     *
     * @param VMware_VCloud_API_Extension_BlockingTaskUpdateProgressParamsType
     *        $params
     * @return VMware_VCloud_API_Extension_BlockingTaskType
     * @since Version 1.5.0
     */
    public function updateProgress($params)
    {
        $url = $this->url . '/action/updateProgress';
        $type = VMware_VCloud_SDK_Constants::
                  BLOCKING_TASK_UPDPROG_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $params);
    }
}