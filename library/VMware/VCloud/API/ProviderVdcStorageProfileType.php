<?php
class VMware_VCloud_API_ProviderVdcStorageProfileType extends VMware_VCloud_API_EntityType {
    protected $Enabled = null;
    protected $Units = null;
    protected $CapacityTotal = null;
    protected $CapacityUsed = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param boolean $Enabled - [optional] 
    * @param string $Units - [required] 
    * @param float $CapacityTotal - [optional] 
    * @param float $CapacityUsed - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $Enabled=null, $Units=null, $CapacityTotal=null, $CapacityUsed=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->Enabled = $Enabled;
        $this->Units = $Units;
        $this->CapacityTotal = $CapacityTotal;
        $this->CapacityUsed = $CapacityUsed;
        $this->tagName = 'ProviderVdcStorageProfile';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getEnabled() {
        return $this->Enabled;
    }
    public function setEnabled($Enabled) { 
        $this->Enabled = $Enabled;
    }
    public function getUnits() {
        return $this->Units;
    }
    public function setUnits($Units) { 
        $this->Units = $Units;
    }
    public function getCapacityTotal() {
        return $this->CapacityTotal;
    }
    public function setCapacityTotal($CapacityTotal) { 
        $this->CapacityTotal = $CapacityTotal;
    }
    public function getCapacityUsed() {
        return $this->CapacityUsed;
    }
    public function setCapacityUsed($CapacityUsed) { 
        $this->CapacityUsed = $CapacityUsed;
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
        if (!is_null($this->Enabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Enabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Enabled>" . VMware_VCloud_API_Helper::format_boolean($this->Enabled, $input_name='Enabled') . "</" . $ns . "Enabled>\n");
        }
        if (!is_null($this->Units)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Units', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Units>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Units, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Units')) . "</" . $ns . "Units>\n");
        }
        if (!is_null($this->CapacityTotal)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CapacityTotal', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CapacityTotal>" . VMware_VCloud_API_Helper::format_double($this->CapacityTotal, $input_name='CapacityTotal') . "</" . $ns . "CapacityTotal>\n");
        }
        if (!is_null($this->CapacityUsed)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CapacityUsed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CapacityUsed>" . VMware_VCloud_API_Helper::format_double($this->CapacityUsed, $input_name='CapacityUsed') . "</" . $ns . "CapacityUsed>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Enabled) ||
            !is_null($this->Units) ||
            !is_null($this->CapacityTotal) ||
            !is_null($this->CapacityUsed) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Enabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Enabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['Enabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Units') {
            $sval = $child->nodeValue;
            $this->Units = $sval;
            if (!empty($namespace)) {
                $this->namespace['Units'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CapacityTotal') {
            $sval = $child->nodeValue;
            $this->CapacityTotal = $sval;
            if (!empty($namespace)) {
                $this->namespace['CapacityTotal'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CapacityUsed') {
            $sval = $child->nodeValue;
            $this->CapacityUsed = $sval;
            if (!empty($namespace)) {
                $this->namespace['CapacityUsed'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}