<?php
class VMware_VCloud_API_DhcpPoolServiceType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $IsEnabled = null;
    protected $Network = null;
    protected $DefaultLeaseTime = null;
    protected $MaxLeaseTime = null;
    protected $LowIpAddress = null;
    protected $HighIpAddress = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $IsEnabled - [optional] 
    * @param VMware_VCloud_API_ReferenceType $Network - [optional]
    * @param int $DefaultLeaseTime - [optional] 
    * @param int $MaxLeaseTime - [optional] 
    * @param string $LowIpAddress - [optional] 
    * @param string $HighIpAddress - [optional] 
    */
    public function __construct($VCloudExtension=null, $IsEnabled=null, $Network=null, $DefaultLeaseTime=null, $MaxLeaseTime=null, $LowIpAddress=null, $HighIpAddress=null) {
        parent::__construct($VCloudExtension);
        $this->IsEnabled = $IsEnabled;
        $this->Network = $Network;
        $this->DefaultLeaseTime = $DefaultLeaseTime;
        $this->MaxLeaseTime = $MaxLeaseTime;
        $this->LowIpAddress = $LowIpAddress;
        $this->HighIpAddress = $HighIpAddress;
        $this->tagName = 'Pool';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getNetwork() {
        return $this->Network;
    }
    public function setNetwork($Network) { 
        $this->Network = $Network;
    }
    public function getDefaultLeaseTime() {
        return $this->DefaultLeaseTime;
    }
    public function setDefaultLeaseTime($DefaultLeaseTime) { 
        $this->DefaultLeaseTime = $DefaultLeaseTime;
    }
    public function getMaxLeaseTime() {
        return $this->MaxLeaseTime;
    }
    public function setMaxLeaseTime($MaxLeaseTime) { 
        $this->MaxLeaseTime = $MaxLeaseTime;
    }
    public function getLowIpAddress() {
        return $this->LowIpAddress;
    }
    public function setLowIpAddress($LowIpAddress) { 
        $this->LowIpAddress = $LowIpAddress;
    }
    public function getHighIpAddress() {
        return $this->HighIpAddress;
    }
    public function setHighIpAddress($HighIpAddress) { 
        $this->HighIpAddress = $HighIpAddress;
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
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (!is_null($this->Network)) {
            $out = $this->Network->export('Network', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->DefaultLeaseTime)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DefaultLeaseTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DefaultLeaseTime>" . VMware_VCloud_API_Helper::format_integer($this->DefaultLeaseTime, $input_name='DefaultLeaseTime') . "</" . $ns . "DefaultLeaseTime>\n");
        }
        if (!is_null($this->MaxLeaseTime)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MaxLeaseTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MaxLeaseTime>" . VMware_VCloud_API_Helper::format_integer($this->MaxLeaseTime, $input_name='MaxLeaseTime') . "</" . $ns . "MaxLeaseTime>\n");
        }
        if (!is_null($this->LowIpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LowIpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LowIpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->LowIpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='LowIpAddress')) . "</" . $ns . "LowIpAddress>\n");
        }
        if (!is_null($this->HighIpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HighIpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HighIpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->HighIpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='HighIpAddress')) . "</" . $ns . "HighIpAddress>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->IsEnabled) ||
            !is_null($this->Network) ||
            !is_null($this->DefaultLeaseTime) ||
            !is_null($this->MaxLeaseTime) ||
            !is_null($this->LowIpAddress) ||
            !is_null($this->HighIpAddress) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Network') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Network');
            $this->setNetwork($obj);
            if (!empty($namespace)) {
                $this->namespace['Network'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultLeaseTime') {
            $sval = $child->nodeValue;
            $this->DefaultLeaseTime = $sval;
            if (!empty($namespace)) {
                $this->namespace['DefaultLeaseTime'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MaxLeaseTime') {
            $sval = $child->nodeValue;
            $this->MaxLeaseTime = $sval;
            if (!empty($namespace)) {
                $this->namespace['MaxLeaseTime'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LowIpAddress') {
            $sval = $child->nodeValue;
            $this->LowIpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['LowIpAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HighIpAddress') {
            $sval = $child->nodeValue;
            $this->HighIpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['HighIpAddress'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}