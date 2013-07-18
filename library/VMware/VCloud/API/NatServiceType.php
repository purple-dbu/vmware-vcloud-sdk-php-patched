<?php
class VMware_VCloud_API_NatServiceType extends VMware_VCloud_API_NetworkServiceType {
    protected $NatType = null;
    protected $Policy = null;
    protected $NatRule = array();
    protected $ExternalIp = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $IsEnabled - [optional] 
    * @param string $NatType - [optional] 
    * @param string $Policy - [optional] 
    * @param array $NatRule - [optional] an array of VMware_VCloud_API_NatRuleType objects
    * @param string $ExternalIp - [optional] 
    */
    public function __construct($VCloudExtension=null, $IsEnabled=null, $NatType=null, $Policy=null, $NatRule=null, $ExternalIp=null) {
        parent::__construct($VCloudExtension, $IsEnabled);
        $this->NatType = $NatType;
        $this->Policy = $Policy;
        if (!is_null($NatRule)) {
            $this->NatRule = $NatRule;
        }
        $this->ExternalIp = $ExternalIp;
        $this->tagName = 'NatService';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getNatType() {
        return $this->NatType;
    }
    public function setNatType($NatType) { 
        $this->NatType = $NatType;
    }
    public function getPolicy() {
        return $this->Policy;
    }
    public function setPolicy($Policy) { 
        $this->Policy = $Policy;
    }
    public function getNatRule() {
        return $this->NatRule;
    }
    public function setNatRule($NatRule) { 
        $this->NatRule = $NatRule;
    }
    public function addNatRule($value) { array_push($this->NatRule, $value); }
    public function getExternalIp() {
        return $this->ExternalIp;
    }
    public function setExternalIp($ExternalIp) { 
        $this->ExternalIp = $ExternalIp;
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
        if (!is_null($this->NatType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'NatType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "NatType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->NatType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='NatType')) . "</" . $ns . "NatType>\n");
        }
        if (!is_null($this->Policy)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Policy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Policy>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Policy, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Policy')) . "</" . $ns . "Policy>\n");
        }
        if (isset($this->NatRule)) {
            foreach ($this->NatRule as $NatRule) {
                $out = $NatRule->export('NatRule', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->ExternalIp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ExternalIp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ExternalIp>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ExternalIp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ExternalIp')) . "</" . $ns . "ExternalIp>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->NatType) ||
            !is_null($this->Policy) ||
            !empty($this->NatRule) ||
            !is_null($this->ExternalIp) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NatType') {
            $sval = $child->nodeValue;
            $this->NatType = $sval;
            if (!empty($namespace)) {
                $this->namespace['NatType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Policy') {
            $sval = $child->nodeValue;
            $this->Policy = $sval;
            if (!empty($namespace)) {
                $this->namespace['Policy'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NatRule') {
            $obj = new VMware_VCloud_API_NatRuleType();
            $obj->build($child);
            $obj->set_tagName('NatRule');
            array_push($this->NatRule, $obj);
            if (!empty($namespace)) {
                $this->namespace['NatRule'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExternalIp') {
            $sval = $child->nodeValue;
            $this->ExternalIp = $sval;
            if (!empty($namespace)) {
                $this->namespace['ExternalIp'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}