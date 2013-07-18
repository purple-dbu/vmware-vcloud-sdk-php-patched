<?php
class VMware_VCloud_API_NetworkConnectionType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $needsCustomization = null;
    protected $network = null;
    protected $NetworkConnectionIndex = null;
    protected $IpAddress = null;
    protected $ExternalIpAddress = null;
    protected $IsConnected = null;
    protected $MACAddress = null;
    protected $IpAddressAllocationMode = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $needsCustomization - [optional] an attribute, 
    * @param string $network - [required] an attribute, 
    * @param int $NetworkConnectionIndex - [required] 
    * @param string $IpAddress - [optional] 
    * @param string $ExternalIpAddress - [optional] 
    * @param boolean $IsConnected - [required] 
    * @param string $MACAddress - [optional] 
    * @param string $IpAddressAllocationMode - [required] 
    */
    public function __construct($VCloudExtension=null, $needsCustomization=null, $network=null, $NetworkConnectionIndex=null, $IpAddress=null, $ExternalIpAddress=null, $IsConnected=null, $MACAddress=null, $IpAddressAllocationMode=null) {
        parent::__construct($VCloudExtension);
        $this->needsCustomization = $needsCustomization;
        $this->network = $network;
        $this->NetworkConnectionIndex = $NetworkConnectionIndex;
        $this->IpAddress = $IpAddress;
        $this->ExternalIpAddress = $ExternalIpAddress;
        $this->IsConnected = $IsConnected;
        $this->MACAddress = $MACAddress;
        $this->IpAddressAllocationMode = $IpAddressAllocationMode;
        $this->tagName = 'NetworkConnection';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getNetworkConnectionIndex() {
        return $this->NetworkConnectionIndex;
    }
    public function setNetworkConnectionIndex($NetworkConnectionIndex) { 
        $this->NetworkConnectionIndex = $NetworkConnectionIndex;
    }
    public function getIpAddress() {
        return $this->IpAddress;
    }
    public function setIpAddress($IpAddress) { 
        $this->IpAddress = $IpAddress;
    }
    public function getExternalIpAddress() {
        return $this->ExternalIpAddress;
    }
    public function setExternalIpAddress($ExternalIpAddress) { 
        $this->ExternalIpAddress = $ExternalIpAddress;
    }
    public function getIsConnected() {
        return $this->IsConnected;
    }
    public function setIsConnected($IsConnected) { 
        $this->IsConnected = $IsConnected;
    }
    public function getMACAddress() {
        return $this->MACAddress;
    }
    public function setMACAddress($MACAddress) { 
        $this->MACAddress = $MACAddress;
    }
    public function getIpAddressAllocationMode() {
        return $this->IpAddressAllocationMode;
    }
    public function setIpAddressAllocationMode($IpAddressAllocationMode) { 
        $this->IpAddressAllocationMode = $IpAddressAllocationMode;
    }
    public function get_needsCustomization(){
        return $this->needsCustomization;
    }
    public function set_needsCustomization($needsCustomization) {
        $this->needsCustomization = $needsCustomization;
    }
    public function get_network(){
        return $this->network;
    }
    public function set_network($network) {
        $this->network = $network;
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
        if (!is_null($this->needsCustomization)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'needsCustomization', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'needsCustomization=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->needsCustomization, $input_name='needsCustomization')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'network', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'network=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->network, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='network')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->NetworkConnectionIndex)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'NetworkConnectionIndex', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "NetworkConnectionIndex>" . VMware_VCloud_API_Helper::format_integer($this->NetworkConnectionIndex, $input_name='NetworkConnectionIndex') . "</" . $ns . "NetworkConnectionIndex>\n");
        }
        if (!is_null($this->IpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->IpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='IpAddress')) . "</" . $ns . "IpAddress>\n");
        }
        if (!is_null($this->ExternalIpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ExternalIpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ExternalIpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ExternalIpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ExternalIpAddress')) . "</" . $ns . "ExternalIpAddress>\n");
        }
        if (!is_null($this->IsConnected)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsConnected', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsConnected>" . VMware_VCloud_API_Helper::format_boolean($this->IsConnected, $input_name='IsConnected') . "</" . $ns . "IsConnected>\n");
     }
        if (!is_null($this->MACAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MACAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MACAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MACAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MACAddress')) . "</" . $ns . "MACAddress>\n");
        }
        if (!is_null($this->IpAddressAllocationMode)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IpAddressAllocationMode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IpAddressAllocationMode>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->IpAddressAllocationMode, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='IpAddressAllocationMode')) . "</" . $ns . "IpAddressAllocationMode>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->NetworkConnectionIndex) ||
            !is_null($this->IpAddress) ||
            !is_null($this->ExternalIpAddress) ||
            !is_null($this->IsConnected) ||
            !is_null($this->MACAddress) ||
            !is_null($this->IpAddressAllocationMode) ||
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
        $ndneedsCustomization = $attrs->getNamedItem('needsCustomization');
        if (!is_null($ndneedsCustomization)) {
            $this->needsCustomization = VMware_VCloud_API_Helper::get_boolean($ndneedsCustomization->value);
            if (isset($ndneedsCustomization->prefix)) {
                $this->namespace['needsCustomization'] = $ndneedsCustomization->prefix;
                $nsUri = $ndneedsCustomization->lookupNamespaceURI($ndneedsCustomization->prefix);
            }
            $node->removeAttributeNS($nsUri, 'needsCustomization');
        } else {
            $this->needsCustomization = null;
        }
        $ndnetwork = $attrs->getNamedItem('network');
        if (!is_null($ndnetwork)) {
            $this->network = $ndnetwork->value;
            if (isset($ndnetwork->prefix)) {
                $this->namespace['network'] = $ndnetwork->prefix;
                $nsUri = $ndnetwork->lookupNamespaceURI($ndnetwork->prefix);
            }
            $node->removeAttributeNS($nsUri, 'network');
        } else {
            $this->network = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkConnectionIndex') {
            $sval = $child->nodeValue;
            $this->NetworkConnectionIndex = $sval;
            if (!empty($namespace)) {
                $this->namespace['NetworkConnectionIndex'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpAddress') {
            $sval = $child->nodeValue;
            $this->IpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['IpAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExternalIpAddress') {
            $sval = $child->nodeValue;
            $this->ExternalIpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['ExternalIpAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsConnected') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsConnected = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsConnected'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MACAddress') {
            $sval = $child->nodeValue;
            $this->MACAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['MACAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpAddressAllocationMode') {
            $sval = $child->nodeValue;
            $this->IpAddressAllocationMode = $sval;
            if (!empty($namespace)) {
                $this->namespace['IpAddressAllocationMode'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}