<?php
class VMware_VCloud_API_NatVmRuleType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $ExternalIpAddress = null;
    protected $ExternalPort = null;
    protected $VAppScopedVmId = null;
    protected $VmNicId = null;
    protected $InternalPort = null;
    protected $Protocol = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $ExternalIpAddress - [optional] 
    * @param int $ExternalPort - [required] 
    * @param string $VAppScopedVmId - [required] 
    * @param int $VmNicId - [required] 
    * @param int $InternalPort - [required] 
    * @param string $Protocol - [required] 
    */
    public function __construct($VCloudExtension=null, $ExternalIpAddress=null, $ExternalPort=null, $VAppScopedVmId=null, $VmNicId=null, $InternalPort=null, $Protocol=null) {
        parent::__construct($VCloudExtension);
        $this->ExternalIpAddress = $ExternalIpAddress;
        $this->ExternalPort = $ExternalPort;
        $this->VAppScopedVmId = $VAppScopedVmId;
        $this->VmNicId = $VmNicId;
        $this->InternalPort = $InternalPort;
        $this->Protocol = $Protocol;
        $this->tagName = 'VmRule';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getExternalIpAddress() {
        return $this->ExternalIpAddress;
    }
    public function setExternalIpAddress($ExternalIpAddress) { 
        $this->ExternalIpAddress = $ExternalIpAddress;
    }
    public function getExternalPort() {
        return $this->ExternalPort;
    }
    public function setExternalPort($ExternalPort) { 
        $this->ExternalPort = $ExternalPort;
    }
    public function getVAppScopedVmId() {
        return $this->VAppScopedVmId;
    }
    public function setVAppScopedVmId($VAppScopedVmId) { 
        $this->VAppScopedVmId = $VAppScopedVmId;
    }
    public function getVmNicId() {
        return $this->VmNicId;
    }
    public function setVmNicId($VmNicId) { 
        $this->VmNicId = $VmNicId;
    }
    public function getInternalPort() {
        return $this->InternalPort;
    }
    public function setInternalPort($InternalPort) { 
        $this->InternalPort = $InternalPort;
    }
    public function getProtocol() {
        return $this->Protocol;
    }
    public function setProtocol($Protocol) { 
        $this->Protocol = $Protocol;
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
        if (!is_null($this->ExternalIpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ExternalIpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ExternalIpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ExternalIpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ExternalIpAddress')) . "</" . $ns . "ExternalIpAddress>\n");
        }
        if (!is_null($this->ExternalPort)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ExternalPort', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ExternalPort>" . VMware_VCloud_API_Helper::format_integer($this->ExternalPort, $input_name='ExternalPort') . "</" . $ns . "ExternalPort>\n");
        }
        if (!is_null($this->VAppScopedVmId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VAppScopedVmId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VAppScopedVmId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VAppScopedVmId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VAppScopedVmId')) . "</" . $ns . "VAppScopedVmId>\n");
        }
        if (!is_null($this->VmNicId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VmNicId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VmNicId>" . VMware_VCloud_API_Helper::format_integer($this->VmNicId, $input_name='VmNicId') . "</" . $ns . "VmNicId>\n");
        }
        if (!is_null($this->InternalPort)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'InternalPort', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "InternalPort>" . VMware_VCloud_API_Helper::format_integer($this->InternalPort, $input_name='InternalPort') . "</" . $ns . "InternalPort>\n");
        }
        if (!is_null($this->Protocol)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Protocol', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Protocol>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Protocol, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Protocol')) . "</" . $ns . "Protocol>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->ExternalIpAddress) ||
            !is_null($this->ExternalPort) ||
            !is_null($this->VAppScopedVmId) ||
            !is_null($this->VmNicId) ||
            !is_null($this->InternalPort) ||
            !is_null($this->Protocol) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExternalIpAddress') {
            $sval = $child->nodeValue;
            $this->ExternalIpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['ExternalIpAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExternalPort') {
            $sval = $child->nodeValue;
            $this->ExternalPort = $sval;
            if (!empty($namespace)) {
                $this->namespace['ExternalPort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppScopedVmId') {
            $sval = $child->nodeValue;
            $this->VAppScopedVmId = $sval;
            if (!empty($namespace)) {
                $this->namespace['VAppScopedVmId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmNicId') {
            $sval = $child->nodeValue;
            $this->VmNicId = $sval;
            if (!empty($namespace)) {
                $this->namespace['VmNicId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InternalPort') {
            $sval = $child->nodeValue;
            $this->InternalPort = $sval;
            if (!empty($namespace)) {
                $this->namespace['InternalPort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Protocol') {
            $sval = $child->nodeValue;
            $this->Protocol = $sval;
            if (!empty($namespace)) {
                $this->namespace['Protocol'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}