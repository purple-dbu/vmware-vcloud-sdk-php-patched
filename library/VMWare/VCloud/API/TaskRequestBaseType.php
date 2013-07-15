<?php
class VMware_VCloud_API_TaskRequestBaseType extends VMware_VCloud_API_EntityType {
    protected $createdTime = null;
    protected $timeoutAction = null;
    protected $timeoutDate = null;
    protected $Organization = null;
    protected $User = null;
    protected $TaskOwner = null;
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
    * @param dateTime $createdTime - [required] an attribute, 
    * @param string $timeoutAction - [required] an attribute, 
    * @param dateTime $timeoutDate - [required] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $Organization - [required]
    * @param VMware_VCloud_API_ReferenceType $User - [optional]
    * @param VMware_VCloud_API_ReferenceType $TaskOwner - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $createdTime=null, $timeoutAction=null, $timeoutDate=null, $Organization=null, $User=null, $TaskOwner=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->createdTime = $createdTime;
        $this->timeoutAction = $timeoutAction;
        $this->timeoutDate = $timeoutDate;
        $this->Organization = $Organization;
        $this->User = $User;
        $this->TaskOwner = $TaskOwner;
        $this->tagName = 'Entity';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOrganization() {
        return $this->Organization;
    }
    public function setOrganization($Organization) { 
        $this->Organization = $Organization;
    }
    public function getUser() {
        return $this->User;
    }
    public function setUser($User) { 
        $this->User = $User;
    }
    public function getTaskOwner() {
        return $this->TaskOwner;
    }
    public function setTaskOwner($TaskOwner) { 
        $this->TaskOwner = $TaskOwner;
    }
    public function get_createdTime(){
        return $this->createdTime;
    }
    public function set_createdTime($createdTime) {
        $this->createdTime = $createdTime;
    }
    public function get_timeoutAction(){
        return $this->timeoutAction;
    }
    public function set_timeoutAction($timeoutAction) {
        $this->timeoutAction = $timeoutAction;
    }
    public function get_timeoutDate(){
        return $this->timeoutDate;
    }
    public function set_timeoutDate($timeoutDate) {
        $this->timeoutDate = $timeoutDate;
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
            if (0 >= strpos($namespacedef, 'xsi:type')) {
                $namespacedef = $namespacedef . " xsi:type='TaskRequestBaseType'";
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'createdTime', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'createdTime=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->createdTime, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='createdTime')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'timeoutAction', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'timeoutAction=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->timeoutAction, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='timeoutAction')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'timeoutDate', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'timeoutDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->timeoutDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='timeoutDate')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Organization)) {
            $out = $this->Organization->export('Organization', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->User)) {
            $out = $this->User->export('User', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->TaskOwner)) {
            $out = $this->TaskOwner->export('TaskOwner', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Organization) ||
            !is_null($this->User) ||
            !is_null($this->TaskOwner) ||
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
        $ndcreatedTime = $attrs->getNamedItem('createdTime');
        if (!is_null($ndcreatedTime)) {
            $this->createdTime = $ndcreatedTime->value;
            if (isset($ndcreatedTime->prefix)) {
                $this->namespace['createdTime'] = $ndcreatedTime->prefix;
                $nsUri = $ndcreatedTime->lookupNamespaceURI($ndcreatedTime->prefix);
            }
            $node->removeAttributeNS($nsUri, 'createdTime');
        } else {
            $this->createdTime = null;
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
        $ndtimeoutDate = $attrs->getNamedItem('timeoutDate');
        if (!is_null($ndtimeoutDate)) {
            $this->timeoutDate = $ndtimeoutDate->value;
            if (isset($ndtimeoutDate->prefix)) {
                $this->namespace['timeoutDate'] = $ndtimeoutDate->prefix;
                $nsUri = $ndtimeoutDate->lookupNamespaceURI($ndtimeoutDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'timeoutDate');
        } else {
            $this->timeoutDate = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Organization') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Organization');
            $this->setOrganization($obj);
            if (!empty($namespace)) {
                $this->namespace['Organization'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TaskOwner') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('TaskOwner');
            $this->setTaskOwner($obj);
            if (!empty($namespace)) {
                $this->namespace['TaskOwner'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}