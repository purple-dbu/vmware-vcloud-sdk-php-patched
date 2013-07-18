<?php
class VMware_VCloud_API_QueryResultBlockingTaskRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $status = null;
    protected $originatingOrg = null;
    protected $task = null;
    protected $timeoutAction = null;
    protected $originatingOrgName = null;
    protected $operationName = null;
    protected $hasOwner = null;
    protected $jobStatus = null;
    protected $ownerName = null;
    protected $owner = null;
    protected $expirationTime = null;
    protected $creationDate = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param string $status - [optional] an attribute, 
    * @param string $originatingOrg - [optional] an attribute, 
    * @param string $task - [optional] an attribute, 
    * @param string $timeoutAction - [optional] an attribute, 
    * @param string $originatingOrgName - [optional] an attribute, 
    * @param string $operationName - [optional] an attribute, 
    * @param boolean $hasOwner - [optional] an attribute, 
    * @param string $jobStatus - [optional] an attribute, 
    * @param string $ownerName - [optional] an attribute, 
    * @param string $owner - [optional] an attribute, 
    * @param dateTime $expirationTime - [optional] an attribute, 
    * @param dateTime $creationDate - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $status=null, $originatingOrg=null, $task=null, $timeoutAction=null, $originatingOrgName=null, $operationName=null, $hasOwner=null, $jobStatus=null, $ownerName=null, $owner=null, $expirationTime=null, $creationDate=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->status = $status;
        $this->originatingOrg = $originatingOrg;
        $this->task = $task;
        $this->timeoutAction = $timeoutAction;
        $this->originatingOrgName = $originatingOrgName;
        $this->operationName = $operationName;
        $this->hasOwner = $hasOwner;
        $this->jobStatus = $jobStatus;
        $this->ownerName = $ownerName;
        $this->owner = $owner;
        $this->expirationTime = $expirationTime;
        $this->creationDate = $creationDate;
        $this->tagName = 'BlockingTaskRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_originatingOrg(){
        return $this->originatingOrg;
    }
    public function set_originatingOrg($originatingOrg) {
        $this->originatingOrg = $originatingOrg;
    }
    public function get_task(){
        return $this->task;
    }
    public function set_task($task) {
        $this->task = $task;
    }
    public function get_timeoutAction(){
        return $this->timeoutAction;
    }
    public function set_timeoutAction($timeoutAction) {
        $this->timeoutAction = $timeoutAction;
    }
    public function get_originatingOrgName(){
        return $this->originatingOrgName;
    }
    public function set_originatingOrgName($originatingOrgName) {
        $this->originatingOrgName = $originatingOrgName;
    }
    public function get_operationName(){
        return $this->operationName;
    }
    public function set_operationName($operationName) {
        $this->operationName = $operationName;
    }
    public function get_hasOwner(){
        return $this->hasOwner;
    }
    public function set_hasOwner($hasOwner) {
        $this->hasOwner = $hasOwner;
    }
    public function get_jobStatus(){
        return $this->jobStatus;
    }
    public function set_jobStatus($jobStatus) {
        $this->jobStatus = $jobStatus;
    }
    public function get_ownerName(){
        return $this->ownerName;
    }
    public function set_ownerName($ownerName) {
        $this->ownerName = $ownerName;
    }
    public function get_owner(){
        return $this->owner;
    }
    public function set_owner($owner) {
        $this->owner = $owner;
    }
    public function get_expirationTime(){
        return $this->expirationTime;
    }
    public function set_expirationTime($expirationTime) {
        $this->expirationTime = $expirationTime;
    }
    public function get_creationDate(){
        return $this->creationDate;
    }
    public function set_creationDate($creationDate) {
        $this->creationDate = $creationDate;
    }
    public function get_tagName() { return $this->tagName; }
    public function set_tagName($tagName) { $this->tagName = $tagName; }
    public function export($name=null, $out='', $level=0, $namespacedef=null, $namespace=null, $rootNS=null) {
        if (!isset($name)) {
            $name = $this->tagName;
        }
        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
        if (is_null($namespace)) {
            $namespace = self::$defaultNS;
        }
        if (is_null($rootNS)) {
            $rootNS = self::$defaultNS;
        }
        if (NULL === $namespacedef) {
            $namespacedef = $this->namespacedef;
            if (0 >= strpos($namespacedef, 'xmlns=')) {
                $namespacedef = ' xmlns="' . self::$defaultNS . '"' . $namespacedef;
            }
        }
        $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, $name, self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, '<' . $ns . $name . $namespacedef);
        $out = $this->exportAttributes($out, $level, $name, $namespacedef, $namespace, $rootNS);
        if ($this->hasContent()) {
            $out = VMware_VCloud_API_Helper::addString($out, ">\n");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportAttributes($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->originatingOrg)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'originatingOrg', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'originatingOrg=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->originatingOrg, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='originatingOrg')));
        }
        if (!is_null($this->task)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'task', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'task=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->task, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='task')));
        }
        if (!is_null($this->timeoutAction)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'timeoutAction', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'timeoutAction=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->timeoutAction, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='timeoutAction')));
        }
        if (!is_null($this->originatingOrgName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'originatingOrgName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'originatingOrgName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->originatingOrgName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='originatingOrgName')));
        }
        if (!is_null($this->operationName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'operationName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'operationName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->operationName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='operationName')));
        }
        if (!is_null($this->hasOwner)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'hasOwner', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'hasOwner=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->hasOwner, $input_name='hasOwner')));
        }
        if (!is_null($this->jobStatus)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'jobStatus', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'jobStatus=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->jobStatus, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='jobStatus')));
        }
        if (!is_null($this->ownerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ownerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ownerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ownerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ownerName')));
        }
        if (!is_null($this->owner)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'owner', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'owner=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->owner, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='owner')));
        }
        if (!is_null($this->expirationTime)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'expirationTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'expirationTime=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->expirationTime, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='expirationTime')));
        }
        if (!is_null($this->creationDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'creationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'creationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->creationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='creationDate')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function hasContent() {
        if (
            parent::hasContent()
            ) {
            return true;
        } else {
            return false;
        }
    }
    public function build($node, $namespaces='') {
        $tagName = $node->tagName;
        $this->tagName = $tagName;
        if (strpos($tagName, ':') > 0) {
            list($namespace, $tagName) = explode(':', $tagName);
            $this->tagName = $tagName;
            $this->namespace[$tagName] = $namespace;
        }
        $this->buildAttributes($node, $namespaces);
        $children = $node->childNodes;
        foreach ($children as $child) {
            if ($child->nodeType == XML_ELEMENT_NODE || $child->nodeType == XML_TEXT_NODE) {
                $namespace = '';
                $nodeName = $child->nodeName;
                if (strpos($nodeName, ':') > 0) {
                    list($namespace, $nodeName) = explode(':', $nodeName);
                }
                $this->buildChildren($child, $nodeName, $namespace);
            }
        }
    }
    protected function buildAttributes($node, $namespaces='') {
        $attrs = $node->attributes;
        if (!empty($namespaces)) {
            $this->namespacedef = VMware_VCloud_API_Helper::constructNS($attrs, $namespaces, $this->namespacedef) . $this->namespacedef;
        }
        $nsUri = self::$defaultNS;
        $ndstatus = $attrs->getNamedItem('status');
        if (!is_null($ndstatus)) {
            $this->status = $ndstatus->value;
            if (isset($ndstatus->prefix)) {
                $this->namespace['status'] = $ndstatus->prefix;
                $nsUri = $ndstatus->lookupNamespaceURI($ndstatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'status');
        } else {
            $this->status = null;
        }
        $ndoriginatingOrg = $attrs->getNamedItem('originatingOrg');
        if (!is_null($ndoriginatingOrg)) {
            $this->originatingOrg = $ndoriginatingOrg->value;
            if (isset($ndoriginatingOrg->prefix)) {
                $this->namespace['originatingOrg'] = $ndoriginatingOrg->prefix;
                $nsUri = $ndoriginatingOrg->lookupNamespaceURI($ndoriginatingOrg->prefix);
            }
            $node->removeAttributeNS($nsUri, 'originatingOrg');
        } else {
            $this->originatingOrg = null;
        }
        $ndtask = $attrs->getNamedItem('task');
        if (!is_null($ndtask)) {
            $this->task = $ndtask->value;
            if (isset($ndtask->prefix)) {
                $this->namespace['task'] = $ndtask->prefix;
                $nsUri = $ndtask->lookupNamespaceURI($ndtask->prefix);
            }
            $node->removeAttributeNS($nsUri, 'task');
        } else {
            $this->task = null;
        }
        $ndtimeoutAction = $attrs->getNamedItem('timeoutAction');
        if (!is_null($ndtimeoutAction)) {
            $this->timeoutAction = $ndtimeoutAction->value;
            if (isset($ndtimeoutAction->prefix)) {
                $this->namespace['timeoutAction'] = $ndtimeoutAction->prefix;
                $nsUri = $ndtimeoutAction->lookupNamespaceURI($ndtimeoutAction->prefix);
            }
            $node->removeAttributeNS($nsUri, 'timeoutAction');
        } else {
            $this->timeoutAction = null;
        }
        $ndoriginatingOrgName = $attrs->getNamedItem('originatingOrgName');
        if (!is_null($ndoriginatingOrgName)) {
            $this->originatingOrgName = $ndoriginatingOrgName->value;
            if (isset($ndoriginatingOrgName->prefix)) {
                $this->namespace['originatingOrgName'] = $ndoriginatingOrgName->prefix;
                $nsUri = $ndoriginatingOrgName->lookupNamespaceURI($ndoriginatingOrgName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'originatingOrgName');
        } else {
            $this->originatingOrgName = null;
        }
        $ndoperationName = $attrs->getNamedItem('operationName');
        if (!is_null($ndoperationName)) {
            $this->operationName = $ndoperationName->value;
            if (isset($ndoperationName->prefix)) {
                $this->namespace['operationName'] = $ndoperationName->prefix;
                $nsUri = $ndoperationName->lookupNamespaceURI($ndoperationName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'operationName');
        } else {
            $this->operationName = null;
        }
        $ndhasOwner = $attrs->getNamedItem('hasOwner');
        if (!is_null($ndhasOwner)) {
            $this->hasOwner = VMware_VCloud_API_Helper::get_boolean($ndhasOwner->value);
            if (isset($ndhasOwner->prefix)) {
                $this->namespace['hasOwner'] = $ndhasOwner->prefix;
                $nsUri = $ndhasOwner->lookupNamespaceURI($ndhasOwner->prefix);
            }
            $node->removeAttributeNS($nsUri, 'hasOwner');
        } else {
            $this->hasOwner = null;
        }
        $ndjobStatus = $attrs->getNamedItem('jobStatus');
        if (!is_null($ndjobStatus)) {
            $this->jobStatus = $ndjobStatus->value;
            if (isset($ndjobStatus->prefix)) {
                $this->namespace['jobStatus'] = $ndjobStatus->prefix;
                $nsUri = $ndjobStatus->lookupNamespaceURI($ndjobStatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'jobStatus');
        } else {
            $this->jobStatus = null;
        }
        $ndownerName = $attrs->getNamedItem('ownerName');
        if (!is_null($ndownerName)) {
            $this->ownerName = $ndownerName->value;
            if (isset($ndownerName->prefix)) {
                $this->namespace['ownerName'] = $ndownerName->prefix;
                $nsUri = $ndownerName->lookupNamespaceURI($ndownerName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ownerName');
        } else {
            $this->ownerName = null;
        }
        $ndowner = $attrs->getNamedItem('owner');
        if (!is_null($ndowner)) {
            $this->owner = $ndowner->value;
            if (isset($ndowner->prefix)) {
                $this->namespace['owner'] = $ndowner->prefix;
                $nsUri = $ndowner->lookupNamespaceURI($ndowner->prefix);
            }
            $node->removeAttributeNS($nsUri, 'owner');
        } else {
            $this->owner = null;
        }
        $ndexpirationTime = $attrs->getNamedItem('expirationTime');
        if (!is_null($ndexpirationTime)) {
            $this->expirationTime = $ndexpirationTime->value;
            if (isset($ndexpirationTime->prefix)) {
                $this->namespace['expirationTime'] = $ndexpirationTime->prefix;
                $nsUri = $ndexpirationTime->lookupNamespaceURI($ndexpirationTime->prefix);
            }
            $node->removeAttributeNS($nsUri, 'expirationTime');
        } else {
            $this->expirationTime = null;
        }
        $ndcreationDate = $attrs->getNamedItem('creationDate');
        if (!is_null($ndcreationDate)) {
            $this->creationDate = $ndcreationDate->value;
            if (isset($ndcreationDate->prefix)) {
                $this->namespace['creationDate'] = $ndcreationDate->prefix;
                $nsUri = $ndcreationDate->lookupNamespaceURI($ndcreationDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'creationDate');
        } else {
            $this->creationDate = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}