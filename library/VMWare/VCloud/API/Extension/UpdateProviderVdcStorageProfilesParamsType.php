<?php
class VMware_VCloud_API_Extension_UpdateProviderVdcStorageProfilesParamsType extends VMware_VCloud_API_ParamsType {
    protected $AddStorageProfile = array();
    protected $RemoveStorageProfile = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param array $AddStorageProfile - [optional] an array of string
    * @param array $RemoveStorageProfile - [optional] an array of VMware_VCloud_API_ReferenceType objects
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $AddStorageProfile=null, $RemoveStorageProfile=null) {
        parent::__construct($VCloudExtension, $name, $Description);
        if (!is_null($AddStorageProfile)) {
            $this->AddStorageProfile = $AddStorageProfile;
        }
        if (!is_null($RemoveStorageProfile)) {
            $this->RemoveStorageProfile = $RemoveStorageProfile;
        }
        $this->tagName = 'UpdateProviderVdcStorageProfiles';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAddStorageProfile() {
        return $this->AddStorageProfile;
    }
    public function setAddStorageProfile($AddStorageProfile) { 
        $this->AddStorageProfile = $AddStorageProfile;
    }
    public function addAddStorageProfile($value) { array_push($this->AddStorageProfile, $value); }
    public function getRemoveStorageProfile() {
        return $this->RemoveStorageProfile;
    }
    public function setRemoveStorageProfile($RemoveStorageProfile) { 
        $this->RemoveStorageProfile = $RemoveStorageProfile;
    }
    public function addRemoveStorageProfile($value) { array_push($this->RemoveStorageProfile, $value); }
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
        if (isset($this->AddStorageProfile)) {
            foreach ($this->AddStorageProfile as $AddStorageProfile) {
                $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AddStorageProfile', self::$defaultNS, $namespace, $rootNS);
                $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AddStorageProfile>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($AddStorageProfile, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AddStorageProfile')) . "</" . $ns . "AddStorageProfile>\n");
            }
        }
        if (isset($this->RemoveStorageProfile)) {
            foreach ($this->RemoveStorageProfile as $RemoveStorageProfile) {
                $out = $RemoveStorageProfile->export('RemoveStorageProfile', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->AddStorageProfile) ||
            !empty($this->RemoveStorageProfile) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AddStorageProfile') {
            $sval = $child->nodeValue;
            array_push($this->AddStorageProfile, $sval);
            if (!empty($namespace)) {
                $this->namespace['AddStorageProfile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RemoveStorageProfile') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('RemoveStorageProfile');
            array_push($this->RemoveStorageProfile, $obj);
            if (!empty($namespace)) {
                $this->namespace['RemoveStorageProfile'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}