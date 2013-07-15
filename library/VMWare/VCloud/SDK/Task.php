<?php
class VMware_VCloud_SDK_Task extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a VMware vCloud task entity.
     *
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function getTask()
    {
        return $this->getDataObj();
    }

    /**
     * Cancel a task.
     *
     * @return null
     * @since Version 1.5.0
     */
    public function cancel()
    {
        if ($this->isRunning())
        {
            $url = $this->url . '/action/cancel';
            $this->svc->post($url, 204);
        }
    }

    /**
     * Check whether this task is running.
     *
     * @return boolean
     * @since Version 1.5.0
     */
    public function isRunning()
    {
        $task = $this->getTask();
        return in_array($task->get_status(), array('queued',
                                'preRunning', 'running'));
    }

    /**
     * Wait for a task to finish.
     *
     * @param int $iteration   Wait loops
     * @param int $interval    Wait interval in seconds
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.5.0
     */
    public function wait($iteration=15, $interval=20)
    {
        $task = $this->getTask();
        return $this->svc->waitForTask($task, $iteration, $interval);
    }

    /**
     * Update a task.
     *
     * @param VMware_VCloud_API_TaskType $task
     * @return VMware_VCloud_API_TaskType
     * @since Version 5.1.0
     */
    public function update($task)
    {
        $type = VMware_VCloud_SDK_Constants::TASK_CONTENT_TYPE;
        return $this->svc->put($this->url, 200, $type, $task);
    }
}