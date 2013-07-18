<?php
class VMware_VCloud_API_VmType extends VMware_VCloud_API_AbstractVAppType {
    protected $needsCustomization = null;
    protected $nestedHypervisorEnabled = null;
    protected $VAppScopedLocalId = null;
    protected $Environment = null;
    protected $VmCapabilities = null;
    protected $StorageProfile = null;
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
    * @param int $status - [optional] an attribute, 
    * @param VMware_VCloud_API_FilesListType $Files - [optional]
    * @param boolean $deployed - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $VAppParent - [optional]
    * @param array $Section - [optional] an array of VMware_VCloud_API_OVF_Section_Type objects
    * @param string $DateCreated - [optional] 
    * @param boolean $needsCustomization - [optional] an attribute, 
    * @param boolean $nestedHypervisorEnabled - [optional] an attribute, 
    * @param string $VAppScopedLocalId - [optional] 
    * @param VMware_VCloud_API_OVFENV_Environment_Type $Environment - [optional]
    * @param VMware_VCloud_API_VmCapabilitiesType $VmCapabilities - [optional]
    * @param VMware_VCloud_API_ReferenceType $StorageProfile - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $Files=null, $deployed=null, $VAppParent=null, $Section=null, $DateCreated=null, $needsCustomization=null, $nestedHypervisorEnabled=null, $VAppScopedLocalId=null, $Environment=null, $VmCapabilities=null, $StorageProfile=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $status, $Files, $deployed, $VAppParent, $Section, $DateCreated);
        $this->needsCustomization = $needsCustomization;
        $this->nestedHypervisorEnabled = $nestedHypervisorEnabled;
        $this->VAppScopedLocalId = $VAppScopedLocalId;
        $this->Environment = $Environment;
        $this->VmCapabilities = $VmCapabilities;
        $this->StorageProfile = $StorageProfile;
        $this->tagName = 'Vm';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVAppScopedLocalId() {
        return $this->VAppScopedLocalId;
    }
    public function setVAppScopedLocalId($VAppScopedLocalId) { 
        $this->VAppScopedLocalId = $VAppScopedLocalId;
    }
    public function getEnvironment() {
        return $this->Environment;
    }
    public function setEnvironment($Environment) { 
        $this->Environment = $Environment;
    }
    public function getVmCapabilities() {
        return $this->VmCapabilities;
    }
    public function setVmCapabilities($VmCapabilities) { 
        $this->VmCapabilities = $VmCapabilities;
    }
    public function getStorageProfile() {
        return $this->StorageProfile;
    }
    public function setStorageProfile($StorageProfile) { 
        $this->StorageProfile = $StorageProfile;
    }
    public function get_needsCustomization(){
        return $this->needsCustomization;
    }
    public function set_needsCustomization($needsCustomization) {
        $this->needsCustomization = $needsCustomization;
    }
    public function get_nestedHypervisorEnabled(){
        return $this->nestedHypervisorEnabled;
    }
    public function set_nestedHypervisorEnabled($nestedHypervisorEnabled) {
        $this->nestedHypervisorEnabled = $nestedHypervisorEnabled;
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
        if (!is_null($this->needsCustomization)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'needsCustomization', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'needsCustomization=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->needsCustomization, $input_name='needsCustomization')));
        }
        if (!is_null($this->nestedHypervisorEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'nestedHypervisorEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'nestedHypervisorEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->nestedHypervisorEnabled, $input_name='nestedHypervisorEnabled')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->VAppScopedLocalId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VAppScopedLocalId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VAppScopedLocalId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VAppScopedLocalId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VAppScopedLocalId')) . "</" . $ns . "VAppScopedLocalId>\n");
        }
        if (!is_null($this->Environment)) {
            $out = $this->Environment->export('Environment', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VmCapabilities)) {
            $out = $this->VmCapabilities->export('VmCapabilities', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->StorageProfile)) {
            $out = $this->StorageProfile->export('StorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VAppScopedLocalId) ||
            !is_null($this->Environment) ||
            !is_null($this->VmCapabilities) ||
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
        $ndneedsCustomization = $attrs->getNamedItem('needsCustomization');
        if (!is_null($ndneedsCustomization)) {
            $this->needsCustomization = VMware_VCloud_API_Helper::get_boolean($ndneedsCustomization->value);
            if (isset($ndneedsCustomization->prefix)) {
                $this->namespace['needsCustomization'] = $ndneedsCustomization->prefix;
                $nsUri = $ndneedsCustomization->lookupNamespaceURI($ndneedsCustomization->prefix);
            }
            $node->removeAttributeNS($nsUri, 'needsCustomization');
        } else {
            $this->needsCustomization = null;
        }
        $ndnestedHypervisorEnabled = $attrs->getNamedItem('nestedHypervisorEnabled');
        if (!is_null($ndnestedHypervisorEnabled)) {
            $this->nestedHypervisorEnabled = VMware_VCloud_API_Helper::get_boolean($ndnestedHypervisorEnabled->value);
            if (isset($ndnestedHypervisorEnabled->prefix)) {
                $this->namespace['nestedHypervisorEnabled'] = $ndnestedHypervisorEnabled->prefix;
                $nsUri = $ndnestedHypervisorEnabled->lookupNamespaceURI($ndnestedHypervisorEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'nestedHypervisorEnabled');
        } else {
            $this->nestedHypervisorEnabled = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppScopedLocalId') {
            $sval = $child->nodeValue;
            $this->VAppScopedLocalId = $sval;
            if (!empty($namespace)) {
                $this->namespace['VAppScopedLocalId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Environment') {
            $obj = new VMware_VCloud_API_OVFENV_Environment_Type();
            $obj->build($child);
            $obj->set_tagName('Environment');
            $this->setEnvironment($obj);
            if (!empty($namespace)) {
                $this->namespace['Environment'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmCapabilities') {
            $obj = new VMware_VCloud_API_VmCapabilitiesType();
            $obj->build($child);
            $obj->set_tagName('VmCapabilities');
            $this->setVmCapabilities($obj);
            if (!empty($namespace)) {
                $this->namespace['VmCapabilities'] = $namespace;
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