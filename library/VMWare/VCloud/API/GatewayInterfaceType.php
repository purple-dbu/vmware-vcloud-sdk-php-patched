<?php
class VMware_VCloud_API_GatewayInterfaceType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Name = null;
    protected $DisplayName = null;
    protected $Network = null;
    protected $InterfaceType = null;
    protected $SubnetParticipation = array();
    protected $ApplyRateLimit = null;
    protected $InRateLimit = null;
    protected $OutRateLimit = null;
    protected $UseForDefaultRoute = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Name - [optional] 
    * @param string $DisplayName - [optional] 
    * @param VMware_VCloud_API_ReferenceType $Network - [optional]
    * @param string $InterfaceType - [optional] 
    * @param array $SubnetParticipation - [optional] an array of VMware_VCloud_API_SubnetParticipationType objects
    * @param boolean $ApplyRateLimit - [optional] 
    * @param float $InRateLimit - [optional] 
    * @param float $OutRateLimit - [optional] 
    * @param boolean $UseForDefaultRoute - [optional] 
    */
    public function __construct($VCloudExtension=null, $Name=null, $DisplayName=null, $Network=null, $InterfaceType=null, $SubnetParticipation=null, $ApplyRateLimit=null, $InRateLimit=null, $OutRateLimit=null, $UseForDefaultRoute=null) {
        parent::__construct($VCloudExtension);
        $this->Name = $Name;
        $this->DisplayName = $DisplayName;
        $this->Network = $Network;
        $this->InterfaceType = $InterfaceType;
        if (!is_null($SubnetParticipation)) {
            $this->SubnetParticipation = $SubnetParticipation;
        }
        $this->ApplyRateLimit = $ApplyRateLimit;
        $this->InRateLimit = $InRateLimit;
        $this->OutRateLimit = $OutRateLimit;
        $this->UseForDefaultRoute = $UseForDefaultRoute;
        $this->tagName = 'GatewayInterface';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) { 
        $this->Name = $Name;
    }
    public function getDisplayName() {
        return $this->DisplayName;
    }
    public function setDisplayName($DisplayName) { 
        $this->DisplayName = $DisplayName;
    }
    public function getNetwork() {
        return $this->Network;
    }
    public function setNetwork($Network) { 
        $this->Network = $Network;
    }
    public function getInterfaceType() {
        return $this->InterfaceType;
    }
    public function setInterfaceType($InterfaceType) { 
        $this->InterfaceType = $InterfaceType;
    }
    public function getSubnetParticipation() {
        return $this->SubnetParticipation;
    }
    public function setSubnetParticipation($SubnetParticipation) { 
        $this->SubnetParticipation = $SubnetParticipation;
    }
    public function addSubnetParticipation($value) { array_push($this->SubnetParticipation, $value); }
    public function getApplyRateLimit() {
        return $this->ApplyRateLimit;
    }
    public function setApplyRateLimit($ApplyRateLimit) { 
        $this->ApplyRateLimit = $ApplyRateLimit;
    }
    public function getInRateLimit() {
        return $this->InRateLimit;
    }
    public function setInRateLimit($InRateLimit) { 
        $this->InRateLimit = $InRateLimit;
    }
    public function getOutRateLimit() {
        return $this->OutRateLimit;
    }
    public function setOutRateLimit($OutRateLimit) { 
        $this->OutRateLimit = $OutRateLimit;
    }
    public function getUseForDefaultRoute() {
        return $this->UseForDefaultRoute;
    }
    public function setUseForDefaultRoute($UseForDefaultRoute) { 
        $this->UseForDefaultRoute = $UseForDefaultRoute;
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
        if (!is_null($this->Name)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Name>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Name')) . "</" . $ns . "Name>\n");
        }
        if (!is_null($this->DisplayName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DisplayName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DisplayName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DisplayName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DisplayName')) . "</" . $ns . "DisplayName>\n");
        }
        if (!is_null($this->Network)) {
            $out = $this->Network->export('Network', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->InterfaceType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'InterfaceType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "InterfaceType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->InterfaceType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='InterfaceType')) . "</" . $ns . "InterfaceType>\n");
        }
        if (isset($this->SubnetParticipation)) {
            foreach ($this->SubnetParticipation as $SubnetParticipation) {
                $out = $SubnetParticipation->export('SubnetParticipation', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->ApplyRateLimit)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ApplyRateLimit', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ApplyRateLimit>" . VMware_VCloud_API_Helper::format_boolean($this->ApplyRateLimit, $input_name='ApplyRateLimit') . "</" . $ns . "ApplyRateLimit>\n");
        }
        if (!is_null($this->InRateLimit)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'InRateLimit', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "InRateLimit>" . VMware_VCloud_API_Helper::format_double($this->InRateLimit, $input_name='InRateLimit') . "</" . $ns . "InRateLimit>\n");
        }
        if (!is_null($this->OutRateLimit)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'OutRateLimit', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "OutRateLimit>" . VMware_VCloud_API_Helper::format_double($this->OutRateLimit, $input_name='OutRateLimit') . "</" . $ns . "OutRateLimit>\n");
        }
        if (!is_null($this->UseForDefaultRoute)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UseForDefaultRoute', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UseForDefaultRoute>" . VMware_VCloud_API_Helper::format_boolean($this->UseForDefaultRoute, $input_name='UseForDefaultRoute') . "</" . $ns . "UseForDefaultRoute>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Name) ||
            !is_null($this->DisplayName) ||
            !is_null($this->Network) ||
            !is_null($this->InterfaceType) ||
            !empty($this->SubnetParticipation) ||
            !is_null($this->ApplyRateLimit) ||
            !is_null($this->InRateLimit) ||
            !is_null($this->OutRateLimit) ||
            !is_null($this->UseForDefaultRoute) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Name') {
            $sval = $child->nodeValue;
            $this->Name = $sval;
            if (!empty($namespace)) {
                $this->namespace['Name'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DisplayName') {
            $sval = $child->nodeValue;
            $this->DisplayName = $sval;
            if (!empty($namespace)) {
                $this->namespace['DisplayName'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InterfaceType') {
            $sval = $child->nodeValue;
            $this->InterfaceType = $sval;
            if (!empty($namespace)) {
                $this->namespace['InterfaceType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SubnetParticipation') {
            $obj = new VMware_VCloud_API_SubnetParticipationType();
            $obj->build($child);
            $obj->set_tagName('SubnetParticipation');
            array_push($this->SubnetParticipation, $obj);
            if (!empty($namespace)) {
                $this->namespace['SubnetParticipation'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApplyRateLimit') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->ApplyRateLimit = $sval;
            if (!empty($namespace)) {
                $this->namespace['ApplyRateLimit'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InRateLimit') {
            $sval = $child->nodeValue;
            $this->InRateLimit = $sval;
            if (!empty($namespace)) {
                $this->namespace['InRateLimit'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OutRateLimit') {
            $sval = $child->nodeValue;
            $this->OutRateLimit = $sval;
            if (!empty($namespace)) {
                $this->namespace['OutRateLimit'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UseForDefaultRoute') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->UseForDefaultRoute = $sval;
            if (!empty($namespace)) {
                $this->namespace['UseForDefaultRoute'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}