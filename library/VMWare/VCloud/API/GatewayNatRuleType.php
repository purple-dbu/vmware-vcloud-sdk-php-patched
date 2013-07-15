<?php
class VMware_VCloud_API_GatewayNatRuleType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Interface = null;
    protected $OriginalIp = null;
    protected $OriginalPort = null;
    protected $TranslatedIp = null;
    protected $TranslatedPort = null;
    protected $Protocol = null;
    protected $IcmpSubType = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param VMware_VCloud_API_ReferenceType $Interface - [optional]
    * @param string $OriginalIp - [optional] 
    * @param string $OriginalPort - [optional] 
    * @param string $TranslatedIp - [optional] 
    * @param string $TranslatedPort - [optional] 
    * @param string $Protocol - [optional] 
    * @param string $IcmpSubType - [optional] 
    */
    public function __construct($VCloudExtension=null, $Interface=null, $OriginalIp=null, $OriginalPort=null, $TranslatedIp=null, $TranslatedPort=null, $Protocol=null, $IcmpSubType=null) {
        parent::__construct($VCloudExtension);
        $this->Interface = $Interface;
        $this->OriginalIp = $OriginalIp;
        $this->OriginalPort = $OriginalPort;
        $this->TranslatedIp = $TranslatedIp;
        $this->TranslatedPort = $TranslatedPort;
        $this->Protocol = $Protocol;
        $this->IcmpSubType = $IcmpSubType;
        $this->tagName = 'GatewayNatRule';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getInterface() {
        return $this->Interface;
    }
    public function setInterface($Interface) { 
        $this->Interface = $Interface;
    }
    public function getOriginalIp() {
        return $this->OriginalIp;
    }
    public function setOriginalIp($OriginalIp) { 
        $this->OriginalIp = $OriginalIp;
    }
    public function getOriginalPort() {
        return $this->OriginalPort;
    }
    public function setOriginalPort($OriginalPort) { 
        $this->OriginalPort = $OriginalPort;
    }
    public function getTranslatedIp() {
        return $this->TranslatedIp;
    }
    public function setTranslatedIp($TranslatedIp) { 
        $this->TranslatedIp = $TranslatedIp;
    }
    public function getTranslatedPort() {
        return $this->TranslatedPort;
    }
    public function setTranslatedPort($TranslatedPort) { 
        $this->TranslatedPort = $TranslatedPort;
    }
    public function getProtocol() {
        return $this->Protocol;
    }
    public function setProtocol($Protocol) { 
        $this->Protocol = $Protocol;
    }
    public function getIcmpSubType() {
        return $this->IcmpSubType;
    }
    public function setIcmpSubType($IcmpSubType) { 
        $this->IcmpSubType = $IcmpSubType;
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
        if (!is_null($this->Interface)) {
            $out = $this->Interface->export('Interface', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OriginalIp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'OriginalIp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "OriginalIp>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->OriginalIp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='OriginalIp')) . "</" . $ns . "OriginalIp>\n");
        }
        if (!is_null($this->OriginalPort)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'OriginalPort', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "OriginalPort>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->OriginalPort, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='OriginalPort')) . "</" . $ns . "OriginalPort>\n");
        }
        if (!is_null($this->TranslatedIp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'TranslatedIp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "TranslatedIp>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->TranslatedIp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='TranslatedIp')) . "</" . $ns . "TranslatedIp>\n");
        }
        if (!is_null($this->TranslatedPort)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'TranslatedPort', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "TranslatedPort>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->TranslatedPort, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='TranslatedPort')) . "</" . $ns . "TranslatedPort>\n");
        }
        if (!is_null($this->Protocol)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Protocol', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Protocol>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Protocol, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Protocol')) . "</" . $ns . "Protocol>\n");
        }
        if (!is_null($this->IcmpSubType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IcmpSubType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IcmpSubType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->IcmpSubType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='IcmpSubType')) . "</" . $ns . "IcmpSubType>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Interface) ||
            !is_null($this->OriginalIp) ||
            !is_null($this->OriginalPort) ||
            !is_null($this->TranslatedIp) ||
            !is_null($this->TranslatedPort) ||
            !is_null($this->Protocol) ||
            !is_null($this->IcmpSubType) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Interface') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Interface');
            $this->setInterface($obj);
            if (!empty($namespace)) {
                $this->namespace['Interface'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OriginalIp') {
            $sval = $child->nodeValue;
            $this->OriginalIp = $sval;
            if (!empty($namespace)) {
                $this->namespace['OriginalIp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OriginalPort') {
            $sval = $child->nodeValue;
            $this->OriginalPort = $sval;
            if (!empty($namespace)) {
                $this->namespace['OriginalPort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TranslatedIp') {
            $sval = $child->nodeValue;
            $this->TranslatedIp = $sval;
            if (!empty($namespace)) {
                $this->namespace['TranslatedIp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TranslatedPort') {
            $sval = $child->nodeValue;
            $this->TranslatedPort = $sval;
            if (!empty($namespace)) {
                $this->namespace['TranslatedPort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Protocol') {
            $sval = $child->nodeValue;
            $this->Protocol = $sval;
            if (!empty($namespace)) {
                $this->namespace['Protocol'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IcmpSubType') {
            $sval = $child->nodeValue;
            $this->IcmpSubType = $sval;
            if (!empty($namespace)) {
                $this->namespace['IcmpSubType'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}