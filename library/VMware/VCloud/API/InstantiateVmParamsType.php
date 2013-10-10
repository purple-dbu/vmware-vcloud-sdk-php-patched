<?php
class VMware_VCloud_API_InstantiateVmParamsType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $id = null;
    protected $NetworkConnectionSection = null;
    protected $ComputerName = null;
    protected $VdcStorageProfile = null;
    protected $HardwareCustomization = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $id - [optional] an attribute, 
    * @param VMware_VCloud_API_NetworkConnectionSectionType $NetworkConnectionSection - [optional]
    * @param string $ComputerName - [optional] 
    * @param VMware_VCloud_API_ReferenceType $VdcStorageProfile - [optional]
    * @param VMware_VCloud_API_InstantiateVmHardwareCustomizationParamsType $HardwareCustomization - [optional]
    */
    public function __construct($VCloudExtension=null, $id=null, $NetworkConnectionSection=null, $ComputerName=null, $VdcStorageProfile=null, $HardwareCustomization=null) {
        parent::__construct($VCloudExtension);
        $this->id = $id;
        $this->NetworkConnectionSection = $NetworkConnectionSection;
        $this->ComputerName = $ComputerName;
        $this->VdcStorageProfile = $VdcStorageProfile;
        $this->HardwareCustomization = $HardwareCustomization;
        $this->tagName = 'InstantiateVmParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getNetworkConnectionSection() {
        return $this->NetworkConnectionSection;
    }
    public function setNetworkConnectionSection($NetworkConnectionSection) { 
        $this->NetworkConnectionSection = $NetworkConnectionSection;
    }
    public function getComputerName() {
        return $this->ComputerName;
    }
    public function setComputerName($ComputerName) { 
        $this->ComputerName = $ComputerName;
    }
    public function getVdcStorageProfile() {
        return $this->VdcStorageProfile;
    }
    public function setVdcStorageProfile($VdcStorageProfile) { 
        $this->VdcStorageProfile = $VdcStorageProfile;
    }
    public function getHardwareCustomization() {
        return $this->HardwareCustomization;
    }
    public function setHardwareCustomization($HardwareCustomization) { 
        $this->HardwareCustomization = $HardwareCustomization;
    }
    public function get_id(){
        return $this->id;
    }
    public function set_id($id) {
        $this->id = $id;
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
        if (!is_null($this->id)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'id', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'id=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->id, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='id')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->NetworkConnectionSection)) {
            $out = $this->NetworkConnectionSection->export('NetworkConnectionSection', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ComputerName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ComputerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ComputerName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ComputerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ComputerName')) . "</" . $ns . "ComputerName>\n");
        }
        if (!is_null($this->VdcStorageProfile)) {
            $out = $this->VdcStorageProfile->export('VdcStorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->HardwareCustomization)) {
            $out = $this->HardwareCustomization->export('HardwareCustomization', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->NetworkConnectionSection) ||
            !is_null($this->ComputerName) ||
            !is_null($this->VdcStorageProfile) ||
            !is_null($this->HardwareCustomization) ||
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
        $ndid = $attrs->getNamedItem('id');
        if (!is_null($ndid)) {
            $this->id = $ndid->value;
            if (isset($ndid->prefix)) {
                $this->namespace['id'] = $ndid->prefix;
                $nsUri = $ndid->lookupNamespaceURI($ndid->prefix);
            }
            $node->removeAttributeNS($nsUri, 'id');
        } else {
            $this->id = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkConnectionSection') {
            $obj = new VMware_VCloud_API_NetworkConnectionSectionType();
            $obj->build($child);
            $obj->set_tagName('NetworkConnectionSection');
            $this->setNetworkConnectionSection($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkConnectionSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ComputerName') {
            $sval = $child->nodeValue;
            $this->ComputerName = $sval;
            if (!empty($namespace)) {
                $this->namespace['ComputerName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VdcStorageProfile') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VdcStorageProfile');
            $this->setVdcStorageProfile($obj);
            if (!empty($namespace)) {
                $this->namespace['VdcStorageProfile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HardwareCustomization') {
            $obj = new VMware_VCloud_API_InstantiateVmHardwareCustomizationParamsType();
            $obj->build($child);
            $obj->set_tagName('HardwareCustomization');
            $this->setHardwareCustomization($obj);
            if (!empty($namespace)) {
                $this->namespace['HardwareCustomization'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}