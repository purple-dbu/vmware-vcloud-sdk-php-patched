<?php
class VMware_VCloud_API_Protocols {
    protected $Tcp = null;
    protected $Udp = null;
    protected $Icmp = null;
    protected $Any = null;
    protected $Other = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param boolean $Tcp - [optional] 
    * @param boolean $Udp - [optional] 
    * @param boolean $Icmp - [optional] 
    * @param boolean $Any - [optional] 
    * @param string $Other - [optional] 
    */
    public function __construct($Tcp=null, $Udp=null, $Icmp=null, $Any=null, $Other=null) {
        $this->Tcp = $Tcp;
        $this->Udp = $Udp;
        $this->Icmp = $Icmp;
        $this->Any = $Any;
        $this->Other = $Other;
        $this->tagName = 'Protocols';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getTcp() {
        return $this->Tcp;
    }
    public function setTcp($Tcp) { 
        $this->Tcp = $Tcp;
    }
    public function getUdp() {
        return $this->Udp;
    }
    public function setUdp($Udp) { 
        $this->Udp = $Udp;
    }
    public function getIcmp() {
        return $this->Icmp;
    }
    public function setIcmp($Icmp) { 
        $this->Icmp = $Icmp;
    }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function getOther() {
        return $this->Other;
    }
    public function setOther($Other) { 
        $this->Other = $Other;
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->Tcp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Tcp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Tcp>" . VMware_VCloud_API_Helper::format_boolean($this->Tcp, $input_name='Tcp') . "</" . $ns . "Tcp>\n");
        }
        if (!is_null($this->Udp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Udp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Udp>" . VMware_VCloud_API_Helper::format_boolean($this->Udp, $input_name='Udp') . "</" . $ns . "Udp>\n");
        }
        if (!is_null($this->Icmp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Icmp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Icmp>" . VMware_VCloud_API_Helper::format_boolean($this->Icmp, $input_name='Icmp') . "</" . $ns . "Icmp>\n");
        }
        if (!is_null($this->Any)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Any', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Any>" . VMware_VCloud_API_Helper::format_boolean($this->Any, $input_name='Any') . "</" . $ns . "Any>\n");
        }
        if (!is_null($this->Other)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Other', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Other>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Other, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Other')) . "</" . $ns . "Other>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Tcp) ||
            !is_null($this->Udp) ||
            !is_null($this->Icmp) ||
            !is_null($this->Any) ||
            !is_null($this->Other)
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
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Tcp') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Tcp = $sval;
            if (!empty($namespace)) {
                $this->namespace['Tcp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Udp') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Udp = $sval;
            if (!empty($namespace)) {
                $this->namespace['Udp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Icmp') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Icmp = $sval;
            if (!empty($namespace)) {
                $this->namespace['Icmp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Any') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Any = $sval;
            if (!empty($namespace)) {
                $this->namespace['Any'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Other') {
            $sval = $child->nodeValue;
            $this->Other = $sval;
            if (!empty($namespace)) {
                $this->namespace['Other'] = $namespace;
            }
        }
    }
}