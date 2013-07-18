<?php
class VMware_VCloud_API_LBPoolHealthCheckType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Mode = null;
    protected $Uri = null;
    protected $HealthThreshold = null;
    protected $UnhealthThreshold = null;
    protected $Interval = null;
    protected $Timeout = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Mode - [optional] 
    * @param string $Uri - [optional] 
    * @param string $HealthThreshold - [optional] 
    * @param string $UnhealthThreshold - [optional] 
    * @param string $Interval - [optional] 
    * @param string $Timeout - [optional] 
    */
    public function __construct($VCloudExtension=null, $Mode=null, $Uri=null, $HealthThreshold=null, $UnhealthThreshold=null, $Interval=null, $Timeout=null) {
        parent::__construct($VCloudExtension);
        $this->Mode = $Mode;
        $this->Uri = $Uri;
        $this->HealthThreshold = $HealthThreshold;
        $this->UnhealthThreshold = $UnhealthThreshold;
        $this->Interval = $Interval;
        $this->Timeout = $Timeout;
        $this->tagName = 'HealthCheck';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getMode() {
        return $this->Mode;
    }
    public function setMode($Mode) { 
        $this->Mode = $Mode;
    }
    public function getUri() {
        return $this->Uri;
    }
    public function setUri($Uri) { 
        $this->Uri = $Uri;
    }
    public function getHealthThreshold() {
        return $this->HealthThreshold;
    }
    public function setHealthThreshold($HealthThreshold) { 
        $this->HealthThreshold = $HealthThreshold;
    }
    public function getUnhealthThreshold() {
        return $this->UnhealthThreshold;
    }
    public function setUnhealthThreshold($UnhealthThreshold) { 
        $this->UnhealthThreshold = $UnhealthThreshold;
    }
    public function getInterval() {
        return $this->Interval;
    }
    public function setInterval($Interval) { 
        $this->Interval = $Interval;
    }
    public function getTimeout() {
        return $this->Timeout;
    }
    public function setTimeout($Timeout) { 
        $this->Timeout = $Timeout;
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
        if (!is_null($this->Mode)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Mode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Mode>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Mode, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Mode')) . "</" . $ns . "Mode>\n");
        }
        if (!is_null($this->Uri)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Uri', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Uri>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Uri, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Uri')) . "</" . $ns . "Uri>\n");
        }
        if (!is_null($this->HealthThreshold)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HealthThreshold', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HealthThreshold>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->HealthThreshold, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='HealthThreshold')) . "</" . $ns . "HealthThreshold>\n");
        }
        if (!is_null($this->UnhealthThreshold)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UnhealthThreshold', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UnhealthThreshold>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->UnhealthThreshold, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='UnhealthThreshold')) . "</" . $ns . "UnhealthThreshold>\n");
        }
        if (!is_null($this->Interval)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Interval', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Interval>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Interval, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Interval')) . "</" . $ns . "Interval>\n");
        }
        if (!is_null($this->Timeout)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Timeout', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Timeout>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Timeout, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Timeout')) . "</" . $ns . "Timeout>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Mode) ||
            !is_null($this->Uri) ||
            !is_null($this->HealthThreshold) ||
            !is_null($this->UnhealthThreshold) ||
            !is_null($this->Interval) ||
            !is_null($this->Timeout) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Mode') {
            $sval = $child->nodeValue;
            $this->Mode = $sval;
            if (!empty($namespace)) {
                $this->namespace['Mode'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Uri') {
            $sval = $child->nodeValue;
            $this->Uri = $sval;
            if (!empty($namespace)) {
                $this->namespace['Uri'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HealthThreshold') {
            $sval = $child->nodeValue;
            $this->HealthThreshold = $sval;
            if (!empty($namespace)) {
                $this->namespace['HealthThreshold'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UnhealthThreshold') {
            $sval = $child->nodeValue;
            $this->UnhealthThreshold = $sval;
            if (!empty($namespace)) {
                $this->namespace['UnhealthThreshold'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Interval') {
            $sval = $child->nodeValue;
            $this->Interval = $sval;
            if (!empty($namespace)) {
                $this->namespace['Interval'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Timeout') {
            $sval = $child->nodeValue;
            $this->Timeout = $sval;
            if (!empty($namespace)) {
                $this->namespace['Timeout'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}