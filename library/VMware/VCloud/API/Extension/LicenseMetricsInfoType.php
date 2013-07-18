<?php
class VMware_VCloud_API_Extension_LicenseMetricsInfoType extends VMware_VCloud_API_ResourceType {
    protected $vRAM = null;
    protected $vCPU = null;
    protected $RunningVMs = null;
    protected $PhysicalMemoryUsed = null;
    protected $PhysicalSocketCount = null;
    protected $AvailablePhysicalMemory = null;
    protected $LastUpdate = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param int $vRAM - [optional] 
    * @param int $vCPU - [optional] 
    * @param int $RunningVMs - [optional] 
    * @param int $PhysicalMemoryUsed - [optional] 
    * @param int $PhysicalSocketCount - [optional] 
    * @param int $AvailablePhysicalMemory - [optional] 
    * @param string $LastUpdate - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $vRAM=null, $vCPU=null, $RunningVMs=null, $PhysicalMemoryUsed=null, $PhysicalSocketCount=null, $AvailablePhysicalMemory=null, $LastUpdate=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->vRAM = $vRAM;
        $this->vCPU = $vCPU;
        $this->RunningVMs = $RunningVMs;
        $this->PhysicalMemoryUsed = $PhysicalMemoryUsed;
        $this->PhysicalSocketCount = $PhysicalSocketCount;
        $this->AvailablePhysicalMemory = $AvailablePhysicalMemory;
        $this->LastUpdate = $LastUpdate;
        $this->tagName = '';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_vRAM() {
        return $this->vRAM;
    }
    public function set_vRAM($vRAM) { 
        $this->vRAM = $vRAM;
    }
    public function get_vCPU() {
        return $this->vCPU;
    }
    public function set_vCPU($vCPU) { 
        $this->vCPU = $vCPU;
    }
    public function getRunningVMs() {
        return $this->RunningVMs;
    }
    public function setRunningVMs($RunningVMs) { 
        $this->RunningVMs = $RunningVMs;
    }
    public function getPhysicalMemoryUsed() {
        return $this->PhysicalMemoryUsed;
    }
    public function setPhysicalMemoryUsed($PhysicalMemoryUsed) { 
        $this->PhysicalMemoryUsed = $PhysicalMemoryUsed;
    }
    public function getPhysicalSocketCount() {
        return $this->PhysicalSocketCount;
    }
    public function setPhysicalSocketCount($PhysicalSocketCount) { 
        $this->PhysicalSocketCount = $PhysicalSocketCount;
    }
    public function getAvailablePhysicalMemory() {
        return $this->AvailablePhysicalMemory;
    }
    public function setAvailablePhysicalMemory($AvailablePhysicalMemory) { 
        $this->AvailablePhysicalMemory = $AvailablePhysicalMemory;
    }
    public function getLastUpdate() {
        return $this->LastUpdate;
    }
    public function setLastUpdate($LastUpdate) { 
        $this->LastUpdate = $LastUpdate;
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
        if (!is_null($this->vRAM)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'vRAM', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "vRAM>" . VMware_VCloud_API_Helper::format_integer($this->vRAM, $input_name='vRAM') . "</" . $ns . "vRAM>\n");
        }
        if (!is_null($this->vCPU)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'vCPU', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "vCPU>" . VMware_VCloud_API_Helper::format_integer($this->vCPU, $input_name='vCPU') . "</" . $ns . "vCPU>\n");
        }
        if (!is_null($this->RunningVMs)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RunningVMs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RunningVMs>" . VMware_VCloud_API_Helper::format_integer($this->RunningVMs, $input_name='RunningVMs') . "</" . $ns . "RunningVMs>\n");
        }
        if (!is_null($this->PhysicalMemoryUsed)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PhysicalMemoryUsed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PhysicalMemoryUsed>" . VMware_VCloud_API_Helper::format_integer($this->PhysicalMemoryUsed, $input_name='PhysicalMemoryUsed') . "</" . $ns . "PhysicalMemoryUsed>\n");
        }
        if (!is_null($this->PhysicalSocketCount)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PhysicalSocketCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PhysicalSocketCount>" . VMware_VCloud_API_Helper::format_integer($this->PhysicalSocketCount, $input_name='PhysicalSocketCount') . "</" . $ns . "PhysicalSocketCount>\n");
        }
        if (!is_null($this->AvailablePhysicalMemory)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AvailablePhysicalMemory', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AvailablePhysicalMemory>" . VMware_VCloud_API_Helper::format_integer($this->AvailablePhysicalMemory, $input_name='AvailablePhysicalMemory') . "</" . $ns . "AvailablePhysicalMemory>\n");
        }
        if (!is_null($this->LastUpdate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LastUpdate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LastUpdate>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->LastUpdate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='LastUpdate')) . "</" . $ns . "LastUpdate>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->vRAM) ||
            !is_null($this->vCPU) ||
            !is_null($this->RunningVMs) ||
            !is_null($this->PhysicalMemoryUsed) ||
            !is_null($this->PhysicalSocketCount) ||
            !is_null($this->AvailablePhysicalMemory) ||
            !is_null($this->LastUpdate) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'vRAM') {
            $sval = $child->nodeValue;
            $this->vRAM = $sval;
            if (!empty($namespace)) {
                $this->namespace['vRAM'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'vCPU') {
            $sval = $child->nodeValue;
            $this->vCPU = $sval;
            if (!empty($namespace)) {
                $this->namespace['vCPU'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RunningVMs') {
            $sval = $child->nodeValue;
            $this->RunningVMs = $sval;
            if (!empty($namespace)) {
                $this->namespace['RunningVMs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PhysicalMemoryUsed') {
            $sval = $child->nodeValue;
            $this->PhysicalMemoryUsed = $sval;
            if (!empty($namespace)) {
                $this->namespace['PhysicalMemoryUsed'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PhysicalSocketCount') {
            $sval = $child->nodeValue;
            $this->PhysicalSocketCount = $sval;
            if (!empty($namespace)) {
                $this->namespace['PhysicalSocketCount'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AvailablePhysicalMemory') {
            $sval = $child->nodeValue;
            $this->AvailablePhysicalMemory = $sval;
            if (!empty($namespace)) {
                $this->namespace['AvailablePhysicalMemory'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LastUpdate') {
            $sval = $child->nodeValue;
            $this->LastUpdate = $sval;
            if (!empty($namespace)) {
                $this->namespace['LastUpdate'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}