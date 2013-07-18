<?php
class VMware_VCloud_API_SourcedCompositionItemParamType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $sourceDelete = null;
    protected $Source = null;
    protected $VAppScopedLocalId = null;
    protected $InstantiationParams = null;
    protected $NetworkAssignment = array();
    protected $StorageProfile = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $sourceDelete - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $Source - [required]
    * @param string $VAppScopedLocalId - [optional] 
    * @param VMware_VCloud_API_InstantiationParamsType $InstantiationParams - [optional]
    * @param array $NetworkAssignment - [optional] an array of VMware_VCloud_API_NetworkAssignmentType objects
    * @param VMware_VCloud_API_ReferenceType $StorageProfile - [optional]
    */
    public function __construct($VCloudExtension=null, $sourceDelete=null, $Source=null, $VAppScopedLocalId=null, $InstantiationParams=null, $NetworkAssignment=null, $StorageProfile=null) {
        parent::__construct($VCloudExtension);
        $this->sourceDelete = $sourceDelete;
        $this->Source = $Source;
        $this->VAppScopedLocalId = $VAppScopedLocalId;
        $this->InstantiationParams = $InstantiationParams;
        if (!is_null($NetworkAssignment)) {
            $this->NetworkAssignment = $NetworkAssignment;
        }
        $this->StorageProfile = $StorageProfile;
        $this->tagName = 'SourcedItem';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSource() {
        return $this->Source;
    }
    public function setSource($Source) { 
        $this->Source = $Source;
    }
    public function getVAppScopedLocalId() {
        return $this->VAppScopedLocalId;
    }
    public function setVAppScopedLocalId($VAppScopedLocalId) { 
        $this->VAppScopedLocalId = $VAppScopedLocalId;
    }
    public function getInstantiationParams() {
        return $this->InstantiationParams;
    }
    public function setInstantiationParams($InstantiationParams) { 
        $this->InstantiationParams = $InstantiationParams;
    }
    public function getNetworkAssignment() {
        return $this->NetworkAssignment;
    }
    public function setNetworkAssignment($NetworkAssignment) { 
        $this->NetworkAssignment = $NetworkAssignment;
    }
    public function addNetworkAssignment($value) { array_push($this->NetworkAssignment, $value); }
    public function getStorageProfile() {
        return $this->StorageProfile;
    }
    public function setStorageProfile($StorageProfile) { 
        $this->StorageProfile = $StorageProfile;
    }
    public function get_sourceDelete(){
        return $this->sourceDelete;
    }
    public function set_sourceDelete($sourceDelete) {
        $this->sourceDelete = $sourceDelete;
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
        if (!is_null($this->sourceDelete)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'sourceDelete', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'sourceDelete=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->sourceDelete, $input_name='sourceDelete')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Source)) {
            $out = $this->Source->export('Source', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VAppScopedLocalId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VAppScopedLocalId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VAppScopedLocalId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VAppScopedLocalId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VAppScopedLocalId')) . "</" . $ns . "VAppScopedLocalId>\n");
        }
        if (!is_null($this->InstantiationParams)) {
            $out = $this->InstantiationParams->export('InstantiationParams', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->NetworkAssignment)) {
            foreach ($this->NetworkAssignment as $NetworkAssignment) {
                $out = $NetworkAssignment->export('NetworkAssignment', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->StorageProfile)) {
            $out = $this->StorageProfile->export('StorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Source) ||
            !is_null($this->VAppScopedLocalId) ||
            !is_null($this->InstantiationParams) ||
            !empty($this->NetworkAssignment) ||
            !is_null($this->StorageProfile) ||
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
        $ndsourceDelete = $attrs->getNamedItem('sourceDelete');
        if (!is_null($ndsourceDelete)) {
            $this->sourceDelete = VMware_VCloud_API_Helper::get_boolean($ndsourceDelete->value);
            if (isset($ndsourceDelete->prefix)) {
                $this->namespace['sourceDelete'] = $ndsourceDelete->prefix;
                $nsUri = $ndsourceDelete->lookupNamespaceURI($ndsourceDelete->prefix);
            }
            $node->removeAttributeNS($nsUri, 'sourceDelete');
        } else {
            $this->sourceDelete = null;
        }
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppScopedLocalId') {
            $sval = $child->nodeValue;
            $this->VAppScopedLocalId = $sval;
            if (!empty($namespace)) {
                $this->namespace['VAppScopedLocalId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstantiationParams') {
            $obj = new VMware_VCloud_API_InstantiationParamsType();
            $obj->build($child);
            $obj->set_tagName('InstantiationParams');
            $this->setInstantiationParams($obj);
            if (!empty($namespace)) {
                $this->namespace['InstantiationParams'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkAssignment') {
            $obj = new VMware_VCloud_API_NetworkAssignmentType();
            $obj->build($child);
            $obj->set_tagName('NetworkAssignment');
            array_push($this->NetworkAssignment, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkAssignment'] = $namespace;
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
        parent::buildChildren($child, $nodeName, $namespace);
    }
}