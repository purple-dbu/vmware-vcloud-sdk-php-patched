<?php
class VMware_VCloud_SDK_TasksList extends
      VMware_VCloud_SDK_Abstract
{
    /**
     * Returns the taskslist.
     *
     * @return VMware_VCloud_API_ReferencesType
     * @since Version 5.1.0
     */
    public function getTasksListRef()
    {
        return $this->getRef(
                       VMware_VCloud_SDK_Constants::TASK_LISTS_CONTENT_TYPE);
    }

    /**
     * Gets the taskslist data object.
     *
     * @return VMware_VCloud_API_ReferencesType
     * @since Version 5.1.0
     */
    public function getTasksList()
    {
        return $this->getDataObj();
    }

    /**
     * Create task.
     *
     * @param VMware_VCloud_API_TaskType $params
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function createTasksList($params)
    {
        $type = VMware_VCloud_SDK_Constants::TASK_CONTENT_TYPE;
        return $this->svc->post($this->url, 200, $type, $params);
    }
}