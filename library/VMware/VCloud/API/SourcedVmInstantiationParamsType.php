<?php
class VMware_VCloud_API_SourcedVmInstantiationParamsType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Source = null;
    protected $StorageProfile = null;
    protected $LocalityParams = null;
    protected $HardwareCustomization = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param VMware_VCloud_API_ReferenceType $Source - [required]
    * @param VMware_VCloud_API_ReferenceType $StorageProfile - [optional]
    * @param VMware_VCloud_API_LocalityParamsType $LocalityParams - [optional]
    * @param VMware_VCloud_API_InstantiateVmHardwareCustomizationParamsType $HardwareCustomization - [optional]
    */
    public function __construct($VCloudExtension=null, $Source=null, $StorageProfile=null, $LocalityParams=null, $HardwareCustomization=null) {
        parent::__construct($VCloudExtension);
        $this->Source = $Source;
        $this->StorageProfile = $StorageProfile;
        $this->LocalityParams = $LocalityParams;
        $this->HardwareCustomization = $HardwareCustomization;
        $this->tagName = 'SourcedVmInstantiationParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSource() {
        return $this->Source;
    }
    public function setSource($Source) { 
        $this->Source = $Source;
    }
    public function getStorageProfile() {
        return $this->StorageProfile;
    }
    public function setStorageProfile($StorageProfile) { 
        $this->StorageProfile = $StorageProfile;
    }
    public function getLocalityParams() {
        return $this->LocalityParams;
    }
    public function setLocalityParams($LocalityParams) { 
        $this->LocalityParams = $LocalityParams;
    }
    public function getHardwareCustomization() {
        return $this->HardwareCustomization;
    }
    public function setHardwareCustomization($HardwareCustomization) { 
        $this->HardwareCustomization = $HardwareCustomization;
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
        if (!is_null($this->Source)) {
            $out = $this->Source->export('Source', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->StorageProfile)) {
            $out = $this->StorageProfile->export('StorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->LocalityParams)) {
            $out = $this->LocalityParams->export('LocalityParams', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->HardwareCustomization)) {
            $out = $this->HardwareCustomization->export('HardwareCustomization', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Source) ||
            !is_null($this->StorageProfile) ||
            !is_null($this->LocalityParams) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Source') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Source');
            $this->setSource($obj);
            if (!empty($namespace)) {
                $this->namespace['Source'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StorageProfile') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('StorageProfile');
            $this->setStorageProfile($obj);
            if (!empty($namespace)) {
                $this->namespace['StorageProfile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LocalityParams') {
            $obj = new VMware_VCloud_API_LocalityParamsType();
            $obj->build($child);
            $obj->set_tagName('LocalityParams');
            $this->setLocalityParams($obj);
            if (!empty($namespace)) {
                $this->namespace['LocalityParams'] = $namespace;
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