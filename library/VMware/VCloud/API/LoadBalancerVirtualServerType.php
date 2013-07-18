<?php
class VMware_VCloud_API_LoadBalancerVirtualServerType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $IsEnabled = null;
    protected $Name = null;
    protected $Description = null;
    protected $Interface = null;
    protected $IpAddress = null;
    protected $ServiceProfile = array();
    protected $Logging = null;
    protected $Pool = null;
    protected $LoadBalancerTemplates = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $IsEnabled - [optional] 
    * @param string $Name - [optional] 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_ReferenceType $Interface - [optional]
    * @param string $IpAddress - [optional] 
    * @param array $ServiceProfile - [optional] an array of VMware_VCloud_API_LBVirtualServerServiceProfileType objects
    * @param boolean $Logging - [optional] 
    * @param string $Pool - [optional] 
    * @param array $LoadBalancerTemplates - [optional] an array of VMware_VCloud_API_VendorTemplateType objects
    */
    public function __construct($VCloudExtension=null, $IsEnabled=null, $Name=null, $Description=null, $Interface=null, $IpAddress=null, $ServiceProfile=null, $Logging=null, $Pool=null, $LoadBalancerTemplates=null) {
        parent::__construct($VCloudExtension);
        $this->IsEnabled = $IsEnabled;
        $this->Name = $Name;
        $this->Description = $Description;
        $this->Interface = $Interface;
        $this->IpAddress = $IpAddress;
        if (!is_null($ServiceProfile)) {
            $this->ServiceProfile = $ServiceProfile;
        }
        $this->Logging = $Logging;
        $this->Pool = $Pool;
        if (!is_null($LoadBalancerTemplates)) {
            $this->LoadBalancerTemplates = $LoadBalancerTemplates;
        }
        $this->tagName = 'VirtualServer';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
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
    public function getInterface() {
        return $this->Interface;
    }
    public function setInterface($Interface) { 
        $this->Interface = $Interface;
    }
    public function getIpAddress() {
        return $this->IpAddress;
    }
    public function setIpAddress($IpAddress) { 
        $this->IpAddress = $IpAddress;
    }
    public function getServiceProfile() {
        return $this->ServiceProfile;
    }
    public function setServiceProfile($ServiceProfile) { 
        $this->ServiceProfile = $ServiceProfile;
    }
    public function addServiceProfile($value) { array_push($this->ServiceProfile, $value); }
    public function getLogging() {
        return $this->Logging;
    }
    public function setLogging($Logging) { 
        $this->Logging = $Logging;
    }
    public function getPool() {
        return $this->Pool;
    }
    public function setPool($Pool) { 
        $this->Pool = $Pool;
    }
    public function getLoadBalancerTemplates() {
        return $this->LoadBalancerTemplates;
    }
    public function setLoadBalancerTemplates($LoadBalancerTemplates) { 
        $this->LoadBalancerTemplates = $LoadBalancerTemplates;
    }
    public function addLoadBalancerTemplates($value) { array_push($this->LoadBalancerTemplates, $value); }
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
        if (!is_null($this->Interface)) {
            $out = $this->Interface->export('Interface', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->IpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->IpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='IpAddress')) . "</" . $ns . "IpAddress>\n");
        }
        if (isset($this->ServiceProfile)) {
            foreach ($this->ServiceProfile as $ServiceProfile) {
                $out = $ServiceProfile->export('ServiceProfile', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->Logging)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Logging', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Logging>" . VMware_VCloud_API_Helper::format_boolean($this->Logging, $input_name='Logging') . "</" . $ns . "Logging>\n");
        }
        if (!is_null($this->Pool)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Pool', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Pool>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Pool, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Pool')) . "</" . $ns . "Pool>\n");
        }
        if (isset($this->LoadBalancerTemplates)) {
            foreach ($this->LoadBalancerTemplates as $LoadBalancerTemplates) {
                $out = $LoadBalancerTemplates->export('LoadBalancerTemplates', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->IsEnabled) ||
            !is_null($this->Name) ||
            !is_null($this->Description) ||
            !is_null($this->Interface) ||
            !is_null($this->IpAddress) ||
            !empty($this->ServiceProfile) ||
            !is_null($this->Logging) ||
            !is_null($this->Pool) ||
            !empty($this->LoadBalancerTemplates) ||
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Interface') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Interface');
            $this->setInterface($obj);
            if (!empty($namespace)) {
                $this->namespace['Interface'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpAddress') {
            $sval = $child->nodeValue;
            $this->IpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['IpAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceProfile') {
            $obj = new VMware_VCloud_API_LBVirtualServerServiceProfileType();
            $obj->build($child);
            $obj->set_tagName('ServiceProfile');
            array_push($this->ServiceProfile, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceProfile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Logging') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Logging = $sval;
            if (!empty($namespace)) {
                $this->namespace['Logging'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Pool') {
            $sval = $child->nodeValue;
            $this->Pool = $sval;
            if (!empty($namespace)) {
                $this->namespace['Pool'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LoadBalancerTemplates') {
            $obj = new VMware_VCloud_API_VendorTemplateType();
            $obj->build($child);
            $obj->set_tagName('LoadBalancerTemplates');
            array_push($this->LoadBalancerTemplates, $obj);
            if (!empty($namespace)) {
                $this->namespace['LoadBalancerTemplates'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}