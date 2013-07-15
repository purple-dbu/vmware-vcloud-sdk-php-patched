<?php
class VMware_VCloud_API_TaskType extends VMware_VCloud_API_EntityType {
    protected $status = null;
    protected $operationName = null;
    protected $expiryTime = null;
    protected $cancelRequested = null;
    protected $startTime = null;
    protected $operation = null;
    protected $endTime = null;
    protected $serviceNamespace = null;
    protected $Owner = null;
    protected $Error = null;
    protected $User = null;
    protected $Organization = null;
    protected $Progress = null;
    protected $Params = null;
    protected $Details = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param string $status - [required] an attribute, 
    * @param string $operationName - [optional] an attribute, 
    * @param dateTime $expiryTime - [optional] an attribute, 
    * @param boolean $cancelRequested - [optional] an attribute, 
    * @param dateTime $startTime - [optional] an attribute, 
    * @param string $operation - [optional] an attribute, 
    * @param dateTime $endTime - [optional] an attribute, 
    * @param string $serviceNamespace - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $Owner - [optional]
    * @param VMware_VCloud_API_ErrorType $Error - [optional]
    * @param VMware_VCloud_API_ReferenceType $User - [optional]
    * @param VMware_VCloud_API_ReferenceType $Organization - [optional]
    * @param int $Progress - [optional] 
    * @param string $Params - [optional] 
    * @param string $Details - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $operationName=null, $expiryTime=null, $cancelRequested=null, $startTime=null, $operation=null, $endTime=null, $serviceNamespace=null, $Owner=null, $Error=null, $User=null, $Organization=null, $Progress=null, $Params=null, $Details=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->status = $status;
        $this->operationName = $operationName;
        $this->expiryTime = $expiryTime;
        $this->cancelRequested = $cancelRequested;
        $this->startTime = $startTime;
        $this->operation = $operation;
        $this->endTime = $endTime;
        $this->serviceNamespace = $serviceNamespace;
        $this->Owner = $Owner;
        $this->Error = $Error;
        $this->User = $User;
        $this->Organization = $Organization;
        $this->Progress = $Progress;
        $this->Params = $Params;
        $this->Details = $Details;
        $this->tagName = 'Task';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOwner() {
        return $this->Owner;
    }
    public function setOwner($Owner) { 
        $this->Owner = $Owner;
    }
    public function getError() {
        return $this->Error;
    }
    public function setError($Error) { 
        $this->Error = $Error;
    }
    public function getUser() {
        return $this->User;
    }
    public function setUser($User) { 
        $this->User = $User;
    }
    public function getOrganization() {
        return $this->Organization;
    }
    public function setOrganization($Organization) { 
        $this->Organization = $Organization;
    }
    public function getProgress() {
        return $this->Progress;
    }
    public function setProgress($Progress) { 
        $this->Progress = $Progress;
    }
    public function getParams() {
        return $this->Params;
    }
    public function setParams($Params) { 
        $this->Params = $Params;
    }
    public function getDetails() {
        return $this->Details;
    }
    public function setDetails($Details) { 
        $this->Details = $Details;
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_operationName(){
        return $this->operationName;
    }
    public function set_operationName($operationName) {
        $this->operationName = $operationName;
    }
    public function get_expiryTime(){
        return $this->expiryTime;
    }
    public function set_expiryTime($expiryTime) {
        $this->expiryTime = $expiryTime;
    }
    public function get_cancelRequested(){
        return $this->cancelRequested;
    }
    public function set_cancelRequested($cancelRequested) {
        $this->cancelRequested = $cancelRequested;
    }
    public function get_startTime(){
        return $this->startTime;
    }
    public function set_startTime($startTime) {
        $this->startTime = $startTime;
    }
    public function get_operation(){
        return $this->operation;
    }
    public function set_operation($operation) {
        $this->operation = $operation;
    }
    public function get_endTime(){
        return $this->endTime;
    }
    public function set_endTime($endTime) {
        $this->endTime = $endTime;
    }
    public function get_serviceNamespace(){
        return $this->serviceNamespace;
    }
    public function set_serviceNamespace($serviceNamespace) {
        $this->serviceNamespace = $serviceNamespace;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        if (!is_null($this->operationName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'operationName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'operationName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->operationName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='operationName')));
        }
        if (!is_null($this->expiryTime)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'expiryTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'expiryTime=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->expiryTime, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='expiryTime')));
        }
        if (!is_null($this->cancelRequested)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cancelRequested', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cancelRequested=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->cancelRequested, $input_name='cancelRequested')));
        }
        if (!is_null($this->startTime)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'startTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'startTime=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->startTime, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='startTime')));
        }
        if (!is_null($this->operation)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'operation', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'operation=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->operation, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='operation')));
        }
        if (!is_null($this->endTime)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'endTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'endTime=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->endTime, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='endTime')));
        }
        if (!is_null($this->serviceNamespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceNamespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceNamespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceNamespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceNamespace')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Owner)) {
            $out = $this->Owner->export('Owner', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Error)) {
            $out = $this->Error->export('Error', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->User)) {
            $out = $this->User->export('User', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Organization)) {
            $out = $this->Organization->export('Organization', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Progress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Progress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Progress>" . VMware_VCloud_API_Helper::format_integer($this->Progress, $input_name='Progress') . "</" . $ns . "Progress>\n");
        }
        if (!is_null($this->Params)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Params', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Params>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Params, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Params')) . "</" . $ns . "Params>\n");
        }
        if (!is_null($this->Details)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Details', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Details>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Details, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Details')) . "</" . $ns . "Details>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Owner) ||
            !is_null($this->Error) ||
            !is_null($this->User) ||
            !is_null($this->Organization) ||
            !is_null($this->Progress) ||
            !is_null($this->Params) ||
            !is_null($this->Details) ||
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
        $ndexpiryTime = $attrs->getNamedItem('expiryTime');
        if (!is_null($ndexpiryTime)) {
            $this->expiryTime = $ndexpiryTime->value;
            if (isset($ndexpiryTime->prefix)) {
                $this->namespace['expiryTime'] = $ndexpiryTime->prefix;
                $nsUri = $ndexpiryTime->lookupNamespaceURI($ndexpiryTime->prefix);
            }
            $node->removeAttributeNS($nsUri, 'expiryTime');
        } else {
            $this->expiryTime = null;
        }
        $ndcancelRequested = $attrs->getNamedItem('cancelRequested');
        if (!is_null($ndcancelRequested)) {
            $this->cancelRequested = VMware_VCloud_API_Helper::get_boolean($ndcancelRequested->value);
            if (isset($ndcancelRequested->prefix)) {
                $this->namespace['cancelRequested'] = $ndcancelRequested->prefix;
                $nsUri = $ndcancelRequested->lookupNamespaceURI($ndcancelRequested->prefix);
            }
            $node->removeAttributeNS($nsUri, 'cancelRequested');
        } else {
            $this->cancelRequested = null;
        }
        $ndstartTime = $attrs->getNamedItem('startTime');
        if (!is_null($ndstartTime)) {
            $this->startTime = $ndstartTime->value;
            if (isset($ndstartTime->prefix)) {
                $this->namespace['startTime'] = $ndstartTime->prefix;
                $nsUri = $ndstartTime->lookupNamespaceURI($ndstartTime->prefix);
            }
            $node->removeAttributeNS($nsUri, 'startTime');
        } else {
            $this->startTime = null;
        }
        $ndoperation = $attrs->getNamedItem('operation');
        if (!is_null($ndoperation)) {
            $this->operation = $ndoperation->value;
            if (isset($ndoperation->prefix)) {
                $this->namespace['operation'] = $ndoperation->prefix;
                $nsUri = $ndoperation->lookupNamespaceURI($ndoperation->prefix);
            }
            $node->removeAttributeNS($nsUri, 'operation');
        } else {
            $this->operation = null;
        }
        $ndendTime = $attrs->getNamedItem('endTime');
        if (!is_null($ndendTime)) {
            $this->endTime = $ndendTime->value;
            if (isset($ndendTime->prefix)) {
                $this->namespace['endTime'] = $ndendTime->prefix;
                $nsUri = $ndendTime->lookupNamespaceURI($ndendTime->prefix);
            }
            $node->removeAttributeNS($nsUri, 'endTime');
        } else {
            $this->endTime = null;
        }
        $ndserviceNamespace = $attrs->getNamedItem('serviceNamespace');
        if (!is_null($ndserviceNamespace)) {
            $this->serviceNamespace = $ndserviceNamespace->value;
            if (isset($ndserviceNamespace->prefix)) {
                $this->namespace['serviceNamespace'] = $ndserviceNamespace->prefix;
                $nsUri = $ndserviceNamespace->lookupNamespaceURI($ndserviceNamespace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceNamespace');
        } else {
            $this->serviceNamespace = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Owner') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Owner');
            $this->setOwner($obj);
            if (!empty($namespace)) {
                $this->namespace['Owner'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Error') {
            $obj = new VMware_VCloud_API_ErrorType();
            $obj->build($child);
            $obj->set_tagName('Error');
            $this->setError($obj);
            if (!empty($namespace)) {
                $this->namespace['Error'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'User') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('User');
            $this->setUser($obj);
            if (!empty($namespace)) {
                $this->namespace['User'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Organization') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Organization');
            $this->setOrganization($obj);
            if (!empty($namespace)) {
                $this->namespace['Organization'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Progress') {
            $sval = $child->nodeValue;
            $this->Progress = $sval;
            if (!empty($namespace)) {
                $this->namespace['Progress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Params') {
            $sval = $child->nodeValue;
            $this->Params = $sval;
            if (!empty($namespace)) {
                $this->namespace['Params'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Details') {
            $sval = $child->nodeValue;
            $this->Details = $sval;
            if (!empty($namespace)) {
                $this->namespace['Details'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}