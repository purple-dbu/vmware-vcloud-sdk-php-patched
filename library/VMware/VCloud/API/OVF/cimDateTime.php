<?php
class VMware_VCloud_API_OVF_cimDateTime {
    protected $CIM_DateTime = null;
    protected $Interval = null;
    protected $Date = null;
    protected $Time = null;
    protected $Datetime = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/wbem/wscim/1/common';

   /**
    * @param string $CIM_DateTime - [required] 
    * @param string $Interval - [required] 
    * @param string $Date - [required] 
    * @param string $Time - [required] 
    * @param string $Datetime - [required] 
    */
    public function __construct($CIM_DateTime=null, $Interval=null, $Date=null, $Time=null, $Datetime=null) {
        $this->CIM_DateTime = $CIM_DateTime;
        $this->Interval = $Interval;
        $this->Date = $Date;
        $this->Time = $Time;
        $this->Datetime = $Datetime;
        $this->anyAttributes = array();
        $this->tagName = 'AutomaticStartupActionDelay';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getCIM_DateTime() {
        return $this->CIM_DateTime;
    }
    public function setCIM_DateTime($CIM_DateTime) { 
        $this->CIM_DateTime = $CIM_DateTime;
    }
    public function getInterval() {
        return $this->Interval;
    }
    public function setInterval($Interval) { 
        $this->Interval = $Interval;
    }
    public function getDate() {
        return $this->Date;
    }
    public function setDate($Date) { 
        $this->Date = $Date;
    }
    public function getTime() {
        return $this->Time;
    }
    public function setTime($Time) { 
        $this->Time = $Time;
    }
    public function getDatetime() {
        return $this->Datetime;
    }
    public function setDatetime($Datetime) { 
        $this->Datetime = $Datetime;
    }
    public function get_anyAttributes() { return $this->anyAttributes; }
    public function set_anyAttributes($anyAttributes) { $this->anyAttributes = $anyAttributes; }
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
        if ($this->anyAttributes) {
            foreach ($this->anyAttributes as $name => $value) {
                if (array_key_exists($name, $this->namespace)) {
                    $ns = $this->namespace[$name];
                    if (!empty($ns)) {
                        $name = $ns . ":" . $name;
                    }
                }
                if ('xsi:type' != $name) {
                    $out = VMware_VCloud_API_Helper::addString($out, " $name=" . VMware_VCloud_API_Helper::quote_attrib($value));
                }
            }
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->CIM_DateTime)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CIM_DateTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CIM_DateTime>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->CIM_DateTime, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='CIM_DateTime')) . "</" . $ns . "CIM_DateTime>\n");
        }
        if (!is_null($this->Interval)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Interval', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Interval>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Interval, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Interval')) . "</" . $ns . "Interval>\n");
        }
        if (!is_null($this->Date)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Date', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Date>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Date, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Date')) . "</" . $ns . "Date>\n");
        }
        if (!is_null($this->Time)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Time', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Time>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Time, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Time')) . "</" . $ns . "Time>\n");
        }
        if (!is_null($this->Datetime)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Datetime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Datetime>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Datetime, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Datetime')) . "</" . $ns . "Datetime>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->CIM_DateTime) ||
            !is_null($this->Interval) ||
            !is_null($this->Date) ||
            !is_null($this->Time) ||
            !is_null($this->Datetime)
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
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            $this->anyAttributes[$localName] = $attr->value;
            $node->removeAttribute($localName);
            $this->namespace[$localName] = $attr->prefix;
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CIM_DateTime') {
            $sval = $child->nodeValue;
            $this->CIM_DateTime = $sval;
            if (!empty($namespace)) {
                $this->namespace['CIM_DateTime'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Interval') {
            $sval = $child->nodeValue;
            $this->Interval = $sval;
            if (!empty($namespace)) {
                $this->namespace['Interval'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Date') {
            $sval = $child->nodeValue;
            $this->Date = $sval;
            if (!empty($namespace)) {
                $this->namespace['Date'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Time') {
            $sval = $child->nodeValue;
            $this->Time = $sval;
            if (!empty($namespace)) {
                $this->namespace['Time'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Datetime') {
            $sval = $child->nodeValue;
            $this->Datetime = $sval;
            if (!empty($namespace)) {
                $this->namespace['Datetime'] = $namespace;
            }
        }
    }
}