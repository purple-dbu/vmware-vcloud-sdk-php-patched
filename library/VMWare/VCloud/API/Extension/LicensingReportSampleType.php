<?php
class VMware_VCloud_API_Extension_LicensingReportSampleType {
    protected $observationDate = null;
    protected $ManagedServerMetrics = null;
    protected $VirtualMachineMetrics = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param dateTime $observationDate - [required] an attribute, 
    * @param VMware_VCloud_API_Extension_ManagedServerMetrics $ManagedServerMetrics - [required]
    * @param VMware_VCloud_API_Extension_VirtualMachineMetrics $VirtualMachineMetrics - [required]
    */
    public function __construct($observationDate=null, $ManagedServerMetrics=null, $VirtualMachineMetrics=null) {
        $this->observationDate = $observationDate;
        $this->ManagedServerMetrics = $ManagedServerMetrics;
        $this->VirtualMachineMetrics = $VirtualMachineMetrics;
        $this->tagName = 'Sample';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getManagedServerMetrics() {
        return $this->ManagedServerMetrics;
    }
    public function setManagedServerMetrics($ManagedServerMetrics) { 
        $this->ManagedServerMetrics = $ManagedServerMetrics;
    }
    public function getVirtualMachineMetrics() {
        return $this->VirtualMachineMetrics;
    }
    public function setVirtualMachineMetrics($VirtualMachineMetrics) { 
        $this->VirtualMachineMetrics = $VirtualMachineMetrics;
    }
    public function get_observationDate(){
        return $this->observationDate;
    }
    public function set_observationDate($observationDate) {
        $this->observationDate = $observationDate;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'observationDate', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'observationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->observationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='observationDate')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->ManagedServerMetrics)) {
            $out = $this->ManagedServerMetrics->export('ManagedServerMetrics', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VirtualMachineMetrics)) {
            $out = $this->VirtualMachineMetrics->export('VirtualMachineMetrics', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->ManagedServerMetrics) ||
            !is_null($this->VirtualMachineMetrics)
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
        $ndobservationDate = $attrs->getNamedItem('observationDate');
        if (!is_null($ndobservationDate)) {
            $this->observationDate = $ndobservationDate->value;
            if (isset($ndobservationDate->prefix)) {
                $this->namespace['observationDate'] = $ndobservationDate->prefix;
                $nsUri = $ndobservationDate->lookupNamespaceURI($ndobservationDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'observationDate');
        } else {
            $this->observationDate = null;
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ManagedServerMetrics') {
            $obj = new VMware_VCloud_API_Extension_ManagedServerMetrics();
            $obj->build($child);
            $obj->set_tagName('ManagedServerMetrics');
            $this->setManagedServerMetrics($obj);
            if (!empty($namespace)) {
                $this->namespace['ManagedServerMetrics'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualMachineMetrics') {
            $obj = new VMware_VCloud_API_Extension_VirtualMachineMetrics();
            $obj->build($child);
            $obj->set_tagName('VirtualMachineMetrics');
            $this->setVirtualMachineMetrics($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualMachineMetrics'] = $namespace;
            }
        }
    }
}