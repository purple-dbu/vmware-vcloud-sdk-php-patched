<?php
class VMware_VCloud_API_IpScopeType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $IsInherited = null;
    protected $Gateway = null;
    protected $Netmask = null;
    protected $Dns1 = null;
    protected $Dns2 = null;
    protected $DnsSuffix = null;
    protected $IsEnabled = null;
    protected $IpRanges = null;
    protected $AllocatedIpAddresses = null;
    protected $SubAllocations = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $IsInherited - [required] 
    * @param string $Gateway - [optional] 
    * @param string $Netmask - [optional] 
    * @param string $Dns1 - [optional] 
    * @param string $Dns2 - [optional] 
    * @param string $DnsSuffix - [optional] 
    * @param boolean $IsEnabled - [optional] 
    * @param VMware_VCloud_API_IpRangesType $IpRanges - [optional]
    * @param VMware_VCloud_API_IpAddressesType $AllocatedIpAddresses - [optional]
    * @param VMware_VCloud_API_SubAllocationsType $SubAllocations - [optional]
    */
    public function __construct($VCloudExtension=null, $IsInherited=null, $Gateway=null, $Netmask=null, $Dns1=null, $Dns2=null, $DnsSuffix=null, $IsEnabled=null, $IpRanges=null, $AllocatedIpAddresses=null, $SubAllocations=null) {
        parent::__construct($VCloudExtension);
        $this->IsInherited = $IsInherited;
        $this->Gateway = $Gateway;
        $this->Netmask = $Netmask;
        $this->Dns1 = $Dns1;
        $this->Dns2 = $Dns2;
        $this->DnsSuffix = $DnsSuffix;
        $this->IsEnabled = $IsEnabled;
        $this->IpRanges = $IpRanges;
        $this->AllocatedIpAddresses = $AllocatedIpAddresses;
        $this->SubAllocations = $SubAllocations;
        $this->tagName = 'IpScope';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getIsInherited() {
        return $this->IsInherited;
    }
    public function setIsInherited($IsInherited) { 
        $this->IsInherited = $IsInherited;
    }
    public function getGateway() {
        return $this->Gateway;
    }
    public function setGateway($Gateway) { 
        $this->Gateway = $Gateway;
    }
    public function getNetmask() {
        return $this->Netmask;
    }
    public function setNetmask($Netmask) { 
        $this->Netmask = $Netmask;
    }
    public function getDns1() {
        return $this->Dns1;
    }
    public function setDns1($Dns1) { 
        $this->Dns1 = $Dns1;
    }
    public function getDns2() {
        return $this->Dns2;
    }
    public function setDns2($Dns2) { 
        $this->Dns2 = $Dns2;
    }
    public function getDnsSuffix() {
        return $this->DnsSuffix;
    }
    public function setDnsSuffix($DnsSuffix) { 
        $this->DnsSuffix = $DnsSuffix;
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getIpRanges() {
        return $this->IpRanges;
    }
    public function setIpRanges($IpRanges) { 
        $this->IpRanges = $IpRanges;
    }
    public function getAllocatedIpAddresses() {
        return $this->AllocatedIpAddresses;
    }
    public function setAllocatedIpAddresses($AllocatedIpAddresses) { 
        $this->AllocatedIpAddresses = $AllocatedIpAddresses;
    }
    public function getSubAllocations() {
        return $this->SubAllocations;
    }
    public function setSubAllocations($SubAllocations) { 
        $this->SubAllocations = $SubAllocations;
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
        if (!is_null($this->IsInherited)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsInherited', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsInherited>" . VMware_VCloud_API_Helper::format_boolean($this->IsInherited, $input_name='IsInherited') . "</" . $ns . "IsInherited>\n");
     }
        if (!is_null($this->Gateway)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Gateway', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Gateway>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Gateway, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Gateway')) . "</" . $ns . "Gateway>\n");
        }
        if (!is_null($this->Netmask)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Netmask', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Netmask>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Netmask, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Netmask')) . "</" . $ns . "Netmask>\n");
        }
        if (!is_null($this->Dns1)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Dns1', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Dns1>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Dns1, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Dns1')) . "</" . $ns . "Dns1>\n");
        }
        if (!is_null($this->Dns2)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Dns2', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Dns2>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Dns2, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Dns2')) . "</" . $ns . "Dns2>\n");
        }
        if (!is_null($this->DnsSuffix)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DnsSuffix', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DnsSuffix>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DnsSuffix, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DnsSuffix')) . "</" . $ns . "DnsSuffix>\n");
        }
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (!is_null($this->IpRanges)) {
            $out = $this->IpRanges->export('IpRanges', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AllocatedIpAddresses)) {
            $out = $this->AllocatedIpAddresses->export('AllocatedIpAddresses', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->SubAllocations)) {
            $out = $this->SubAllocations->export('SubAllocations', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->IsInherited) ||
            !is_null($this->Gateway) ||
            !is_null($this->Netmask) ||
            !is_null($this->Dns1) ||
            !is_null($this->Dns2) ||
            !is_null($this->DnsSuffix) ||
            !is_null($this->IsEnabled) ||
            !is_null($this->IpRanges) ||
            !is_null($this->AllocatedIpAddresses) ||
            !is_null($this->SubAllocations) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsInherited') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsInherited = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsInherited'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Gateway') {
            $sval = $child->nodeValue;
            $this->Gateway = $sval;
            if (!empty($namespace)) {
                $this->namespace['Gateway'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Netmask') {
            $sval = $child->nodeValue;
            $this->Netmask = $sval;
            if (!empty($namespace)) {
                $this->namespace['Netmask'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Dns1') {
            $sval = $child->nodeValue;
            $this->Dns1 = $sval;
            if (!empty($namespace)) {
                $this->namespace['Dns1'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Dns2') {
            $sval = $child->nodeValue;
            $this->Dns2 = $sval;
            if (!empty($namespace)) {
                $this->namespace['Dns2'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DnsSuffix') {
            $sval = $child->nodeValue;
            $this->DnsSuffix = $sval;
            if (!empty($namespace)) {
                $this->namespace['DnsSuffix'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpRanges') {
            $obj = new VMware_VCloud_API_IpRangesType();
            $obj->build($child);
            $obj->set_tagName('IpRanges');
            $this->setIpRanges($obj);
            if (!empty($namespace)) {
                $this->namespace['IpRanges'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllocatedIpAddresses') {
            $obj = new VMware_VCloud_API_IpAddressesType();
            $obj->build($child);
            $obj->set_tagName('AllocatedIpAddresses');
            $this->setAllocatedIpAddresses($obj);
            if (!empty($namespace)) {
                $this->namespace['AllocatedIpAddresses'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SubAllocations') {
            $obj = new VMware_VCloud_API_SubAllocationsType();
            $obj->build($child);
            $obj->set_tagName('SubAllocations');
            $this->setSubAllocations($obj);
            if (!empty($namespace)) {
                $this->namespace['SubAllocations'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}