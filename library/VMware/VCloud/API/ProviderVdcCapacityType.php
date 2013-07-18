<?php
class VMware_VCloud_API_ProviderVdcCapacityType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Units = null;
    protected $Allocation = null;
    protected $Reserved = null;
    protected $Total = null;
    protected $Used = null;
    protected $Overhead = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Units - [required] 
    * @param int $Allocation - [optional] 
    * @param int $Reserved - [optional] 
    * @param int $Total - [required] 
    * @param int $Used - [optional] 
    * @param int $Overhead - [optional] 
    */
    public function __construct($VCloudExtension=null, $Units=null, $Allocation=null, $Reserved=null, $Total=null, $Used=null, $Overhead=null) {
        parent::__construct($VCloudExtension);
        $this->Units = $Units;
        $this->Allocation = $Allocation;
        $this->Reserved = $Reserved;
        $this->Total = $Total;
        $this->Used = $Used;
        $this->Overhead = $Overhead;
        $this->tagName = 'StorageCapacity';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getUnits() {
        return $this->Units;
    }
    public function setUnits($Units) { 
        $this->Units = $Units;
    }
    public function getAllocation() {
        return $this->Allocation;
    }
    public function setAllocation($Allocation) { 
        $this->Allocation = $Allocation;
    }
    public function getReserved() {
        return $this->Reserved;
    }
    public function setReserved($Reserved) { 
        $this->Reserved = $Reserved;
    }
    public function getTotal() {
        return $this->Total;
    }
    public function setTotal($Total) { 
        $this->Total = $Total;
    }
    public function getUsed() {
        return $this->Used;
    }
    public function setUsed($Used) { 
        $this->Used = $Used;
    }
    public function getOverhead() {
        return $this->Overhead;
    }
    public function setOverhead($Overhead) { 
        $this->Overhead = $Overhead;
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
        if (!is_null($this->Units)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Units', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Units>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Units, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Units')) . "</" . $ns . "Units>\n");
        }
        if (!is_null($this->Allocation)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Allocation', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Allocation>" . VMware_VCloud_API_Helper::format_integer($this->Allocation, $input_name='Allocation') . "</" . $ns . "Allocation>\n");
        }
        if (!is_null($this->Reserved)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Reserved', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Reserved>" . VMware_VCloud_API_Helper::format_integer($this->Reserved, $input_name='Reserved') . "</" . $ns . "Reserved>\n");
        }
        if (!is_null($this->Total)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Total', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Total>" . VMware_VCloud_API_Helper::format_integer($this->Total, $input_name='Total') . "</" . $ns . "Total>\n");
        }
        if (!is_null($this->Used)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Used', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Used>" . VMware_VCloud_API_Helper::format_integer($this->Used, $input_name='Used') . "</" . $ns . "Used>\n");
        }
        if (!is_null($this->Overhead)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Overhead', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Overhead>" . VMware_VCloud_API_Helper::format_integer($this->Overhead, $input_name='Overhead') . "</" . $ns . "Overhead>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Units) ||
            !is_null($this->Allocation) ||
            !is_null($this->Reserved) ||
            !is_null($this->Total) ||
            !is_null($this->Used) ||
            !is_null($this->Overhead) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Units') {
            $sval = $child->nodeValue;
            $this->Units = $sval;
            if (!empty($namespace)) {
                $this->namespace['Units'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Allocation') {
            $sval = $child->nodeValue;
            $this->Allocation = $sval;
            if (!empty($namespace)) {
                $this->namespace['Allocation'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Reserved') {
            $sval = $child->nodeValue;
            $this->Reserved = $sval;
            if (!empty($namespace)) {
                $this->namespace['Reserved'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Total') {
            $sval = $child->nodeValue;
            $this->Total = $sval;
            if (!empty($namespace)) {
                $this->namespace['Total'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Used') {
            $sval = $child->nodeValue;
            $this->Used = $sval;
            if (!empty($namespace)) {
                $this->namespace['Used'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Overhead') {
            $sval = $child->nodeValue;
            $this->Overhead = $sval;
            if (!empty($namespace)) {
                $this->namespace['Overhead'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}