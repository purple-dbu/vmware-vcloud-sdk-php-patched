<?php
class VMware_VCloud_API_RootComputeCapacityType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Cpu = null;
    protected $Memory = null;
    protected $IsElastic = null;
    protected $IsHA = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param VMware_VCloud_API_ProviderVdcCapacityType $Cpu - [required]
    * @param VMware_VCloud_API_ProviderVdcCapacityType $Memory - [required]
    * @param boolean $IsElastic - [optional] 
    * @param boolean $IsHA - [optional] 
    */
    public function __construct($VCloudExtension=null, $Cpu=null, $Memory=null, $IsElastic=null, $IsHA=null) {
        parent::__construct($VCloudExtension);
        $this->Cpu = $Cpu;
        $this->Memory = $Memory;
        $this->IsElastic = $IsElastic;
        $this->IsHA = $IsHA;
        $this->tagName = 'ComputeCapacity';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getCpu() {
        return $this->Cpu;
    }
    public function setCpu($Cpu) { 
        $this->Cpu = $Cpu;
    }
    public function getMemory() {
        return $this->Memory;
    }
    public function setMemory($Memory) { 
        $this->Memory = $Memory;
    }
    public function getIsElastic() {
        return $this->IsElastic;
    }
    public function setIsElastic($IsElastic) { 
        $this->IsElastic = $IsElastic;
    }
    public function getIsHA() {
        return $this->IsHA;
    }
    public function setIsHA($IsHA) { 
        $this->IsHA = $IsHA;
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
        if (!is_null($this->Cpu)) {
            $out = $this->Cpu->export('Cpu', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Memory)) {
            $out = $this->Memory->export('Memory', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->IsElastic)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsElastic', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsElastic>" . VMware_VCloud_API_Helper::format_boolean($this->IsElastic, $input_name='IsElastic') . "</" . $ns . "IsElastic>\n");
        }
        if (!is_null($this->IsHA)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsHA', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsHA>" . VMware_VCloud_API_Helper::format_boolean($this->IsHA, $input_name='IsHA') . "</" . $ns . "IsHA>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Cpu) ||
            !is_null($this->Memory) ||
            !is_null($this->IsElastic) ||
            !is_null($this->IsHA) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Cpu') {
            $obj = new VMware_VCloud_API_ProviderVdcCapacityType();
            $obj->build($child);
            $obj->set_tagName('Cpu');
            $this->setCpu($obj);
            if (!empty($namespace)) {
                $this->namespace['Cpu'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Memory') {
            $obj = new VMware_VCloud_API_ProviderVdcCapacityType();
            $obj->build($child);
            $obj->set_tagName('Memory');
            $this->setMemory($obj);
            if (!empty($namespace)) {
                $this->namespace['Memory'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsElastic') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsElastic = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsElastic'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsHA') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsHA = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsHA'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}