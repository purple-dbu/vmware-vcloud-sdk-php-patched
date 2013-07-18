<?php
class VMware_VCloud_API_LoadBalancerPoolType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Id = null;
    protected $Name = null;
    protected $Description = null;
    protected $ServicePort = array();
    protected $Member = array();
    protected $Operational = null;
    protected $ErrorDetails = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Id - [optional] 
    * @param string $Name - [optional] 
    * @param string $Description - [optional] 
    * @param array $ServicePort - [optional] an array of VMware_VCloud_API_LBPoolServicePortType objects
    * @param array $Member - [optional] an array of VMware_VCloud_API_LBPoolMemberType objects
    * @param boolean $Operational - [optional] 
    * @param string $ErrorDetails - [optional] 
    */
    public function __construct($VCloudExtension=null, $Id=null, $Name=null, $Description=null, $ServicePort=null, $Member=null, $Operational=null, $ErrorDetails=null) {
        parent::__construct($VCloudExtension);
        $this->Id = $Id;
        $this->Name = $Name;
        $this->Description = $Description;
        if (!is_null($ServicePort)) {
            $this->ServicePort = $ServicePort;
        }
        if (!is_null($Member)) {
            $this->Member = $Member;
        }
        $this->Operational = $Operational;
        $this->ErrorDetails = $ErrorDetails;
        $this->tagName = 'Pool';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getId() {
        return $this->Id;
    }
    public function setId($Id) { 
        $this->Id = $Id;
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) { 
        $this->Name = $Name;
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function getServicePort() {
        return $this->ServicePort;
    }
    public function setServicePort($ServicePort) { 
        $this->ServicePort = $ServicePort;
    }
    public function addServicePort($value) { array_push($this->ServicePort, $value); }
    public function getMember() {
        return $this->Member;
    }
    public function setMember($Member) { 
        $this->Member = $Member;
    }
    public function addMember($value) { array_push($this->Member, $value); }
    public function getOperational() {
        return $this->Operational;
    }
    public function setOperational($Operational) { 
        $this->Operational = $Operational;
    }
    public function getErrorDetails() {
        return $this->ErrorDetails;
    }
    public function setErrorDetails($ErrorDetails) { 
        $this->ErrorDetails = $ErrorDetails;
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Id)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Id', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Id>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Id, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Id')) . "</" . $ns . "Id>\n");
        }
        if (!is_null($this->Name)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Name>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Name')) . "</" . $ns . "Name>\n");
        }
        if (!is_null($this->Description)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Description', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Description>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Description, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Description')) . "</" . $ns . "Description>\n");
        }
        if (isset($this->ServicePort)) {
            foreach ($this->ServicePort as $ServicePort) {
                $out = $ServicePort->export('ServicePort', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->Member)) {
            foreach ($this->Member as $Member) {
                $out = $Member->export('Member', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->Operational)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Operational', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Operational>" . VMware_VCloud_API_Helper::format_boolean($this->Operational, $input_name='Operational') . "</" . $ns . "Operational>\n");
        }
        if (!is_null($this->ErrorDetails)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ErrorDetails', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ErrorDetails>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ErrorDetails, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ErrorDetails')) . "</" . $ns . "ErrorDetails>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Id) ||
            !is_null($this->Name) ||
            !is_null($this->Description) ||
            !empty($this->ServicePort) ||
            !empty($this->Member) ||
            !is_null($this->Operational) ||
            !is_null($this->ErrorDetails) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Id') {
            $sval = $child->nodeValue;
            $this->Id = $sval;
            if (!empty($namespace)) {
                $this->namespace['Id'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Name') {
            $sval = $child->nodeValue;
            $this->Name = $sval;
            if (!empty($namespace)) {
                $this->namespace['Name'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $sval = $child->nodeValue;
            $this->Description = $sval;
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServicePort') {
            $obj = new VMware_VCloud_API_LBPoolServicePortType();
            $obj->build($child);
            $obj->set_tagName('ServicePort');
            array_push($this->ServicePort, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServicePort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Member') {
            $obj = new VMware_VCloud_API_LBPoolMemberType();
            $obj->build($child);
            $obj->set_tagName('Member');
            array_push($this->Member, $obj);
            if (!empty($namespace)) {
                $this->namespace['Member'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Operational') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Operational = $sval;
            if (!empty($namespace)) {
                $this->namespace['Operational'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ErrorDetails') {
            $sval = $child->nodeValue;
            $this->ErrorDetails = $sval;
            if (!empty($namespace)) {
                $this->namespace['ErrorDetails'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}