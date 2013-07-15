<?php
class VMware_VCloud_API_LBPoolServicePortType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $IsEnabled = null;
    protected $Protocol = null;
    protected $Algorithm = null;
    protected $Port = null;
    protected $HealthCheckPort = null;
    protected $HealthCheck = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $IsEnabled - [optional] 
    * @param string $Protocol - [optional] 
    * @param string $Algorithm - [optional] 
    * @param string $Port - [optional] 
    * @param string $HealthCheckPort - [optional] 
    * @param array $HealthCheck - [optional] an array of VMware_VCloud_API_LBPoolHealthCheckType objects
    */
    public function __construct($VCloudExtension=null, $IsEnabled=null, $Protocol=null, $Algorithm=null, $Port=null, $HealthCheckPort=null, $HealthCheck=null) {
        parent::__construct($VCloudExtension);
        $this->IsEnabled = $IsEnabled;
        $this->Protocol = $Protocol;
        $this->Algorithm = $Algorithm;
        $this->Port = $Port;
        $this->HealthCheckPort = $HealthCheckPort;
        if (!is_null($HealthCheck)) {
            $this->HealthCheck = $HealthCheck;
        }
        $this->tagName = 'ServicePort';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getProtocol() {
        return $this->Protocol;
    }
    public function setProtocol($Protocol) { 
        $this->Protocol = $Protocol;
    }
    public function getAlgorithm() {
        return $this->Algorithm;
    }
    public function setAlgorithm($Algorithm) { 
        $this->Algorithm = $Algorithm;
    }
    public function getPort() {
        return $this->Port;
    }
    public function setPort($Port) { 
        $this->Port = $Port;
    }
    public function getHealthCheckPort() {
        return $this->HealthCheckPort;
    }
    public function setHealthCheckPort($HealthCheckPort) { 
        $this->HealthCheckPort = $HealthCheckPort;
    }
    public function getHealthCheck() {
        return $this->HealthCheck;
    }
    public function setHealthCheck($HealthCheck) { 
        $this->HealthCheck = $HealthCheck;
    }
    public function addHealthCheck($value) { array_push($this->HealthCheck, $value); }
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
        if (!is_null($this->Protocol)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Protocol', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Protocol>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Protocol, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Protocol')) . "</" . $ns . "Protocol>\n");
        }
        if (!is_null($this->Algorithm)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Algorithm', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Algorithm>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Algorithm, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Algorithm')) . "</" . $ns . "Algorithm>\n");
        }
        if (!is_null($this->Port)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Port', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Port>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Port, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Port')) . "</" . $ns . "Port>\n");
        }
        if (!is_null($this->HealthCheckPort)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HealthCheckPort', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HealthCheckPort>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->HealthCheckPort, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='HealthCheckPort')) . "</" . $ns . "HealthCheckPort>\n");
        }
        if (isset($this->HealthCheck)) {
            foreach ($this->HealthCheck as $HealthCheck) {
                $out = $HealthCheck->export('HealthCheck', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->IsEnabled) ||
            !is_null($this->Protocol) ||
            !is_null($this->Algorithm) ||
            !is_null($this->Port) ||
            !is_null($this->HealthCheckPort) ||
            !empty($this->HealthCheck) ||
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Protocol') {
            $sval = $child->nodeValue;
            $this->Protocol = $sval;
            if (!empty($namespace)) {
                $this->namespace['Protocol'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Algorithm') {
            $sval = $child->nodeValue;
            $this->Algorithm = $sval;
            if (!empty($namespace)) {
                $this->namespace['Algorithm'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Port') {
            $sval = $child->nodeValue;
            $this->Port = $sval;
            if (!empty($namespace)) {
                $this->namespace['Port'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HealthCheckPort') {
            $sval = $child->nodeValue;
            $this->HealthCheckPort = $sval;
            if (!empty($namespace)) {
                $this->namespace['HealthCheckPort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HealthCheck') {
            $obj = new VMware_VCloud_API_LBPoolHealthCheckType();
            $obj->build($child);
            $obj->set_tagName('HealthCheck');
            array_push($this->HealthCheck, $obj);
            if (!empty($namespace)) {
                $this->namespace['HealthCheck'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}