<?php
class VMware_VCloud_API_VAppType extends VMware_VCloud_API_AbstractVAppType {
    protected $ovfDescriptorUploaded = null;
    protected $Owner = null;
    protected $InMaintenanceMode = null;
    protected $Children = null;
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
    * @param boolean $ovfDescriptorUploaded - [optional] an attribute, 
    * @param VMware_VCloud_API_OwnerType $Owner - [optional]
    * @param boolean $InMaintenanceMode - [optional] 
    * @param VMware_VCloud_API_VAppChildrenType $Children - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $Files=null, $deployed=null, $VAppParent=null, $Section=null, $DateCreated=null, $ovfDescriptorUploaded=null, $Owner=null, $InMaintenanceMode=null, $Children=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $status, $Files, $deployed, $VAppParent, $Section, $DateCreated);
        $this->ovfDescriptorUploaded = $ovfDescriptorUploaded;
        $this->Owner = $Owner;
        $this->InMaintenanceMode = $InMaintenanceMode;
        $this->Children = $Children;
        $this->tagName = 'VApp';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOwner() {
        return $this->Owner;
    }
    public function setOwner($Owner) { 
        $this->Owner = $Owner;
    }
    public function getInMaintenanceMode() {
        return $this->InMaintenanceMode;
    }
    public function setInMaintenanceMode($InMaintenanceMode) { 
        $this->InMaintenanceMode = $InMaintenanceMode;
    }
    public function getChildren() {
        return $this->Children;
    }
    public function setChildren($Children) { 
        $this->Children = $Children;
    }
    public function get_ovfDescriptorUploaded(){
        return $this->ovfDescriptorUploaded;
    }
    public function set_ovfDescriptorUploaded($ovfDescriptorUploaded) {
        $this->ovfDescriptorUploaded = $ovfDescriptorUploaded;
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
        if (!is_null($this->ovfDescriptorUploaded)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ovfDescriptorUploaded', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ovfDescriptorUploaded=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->ovfDescriptorUploaded, $input_name='ovfDescriptorUploaded')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Owner)) {
            $out = $this->Owner->export('Owner', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->InMaintenanceMode)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'InMaintenanceMode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "InMaintenanceMode>" . VMware_VCloud_API_Helper::format_boolean($this->InMaintenanceMode, $input_name='InMaintenanceMode') . "</" . $ns . "InMaintenanceMode>\n");
        }
        if (!is_null($this->Children)) {
            $out = $this->Children->export('Children', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Owner) ||
            !is_null($this->InMaintenanceMode) ||
            !is_null($this->Children) ||
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
        $ndovfDescriptorUploaded = $attrs->getNamedItem('ovfDescriptorUploaded');
        if (!is_null($ndovfDescriptorUploaded)) {
            $this->ovfDescriptorUploaded = VMware_VCloud_API_Helper::get_boolean($ndovfDescriptorUploaded->value);
            if (isset($ndovfDescriptorUploaded->prefix)) {
                $this->namespace['ovfDescriptorUploaded'] = $ndovfDescriptorUploaded->prefix;
                $nsUri = $ndovfDescriptorUploaded->lookupNamespaceURI($ndovfDescriptorUploaded->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ovfDescriptorUploaded');
        } else {
            $this->ovfDescriptorUploaded = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Owner') {
            $obj = new VMware_VCloud_API_OwnerType();
            $obj->build($child);
            $obj->set_tagName('Owner');
            $this->setOwner($obj);
            if (!empty($namespace)) {
                $this->namespace['Owner'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InMaintenanceMode') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->InMaintenanceMode = $sval;
            if (!empty($namespace)) {
                $this->namespace['InMaintenanceMode'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Children') {
            $obj = new VMware_VCloud_API_VAppChildrenType();
            $obj->build($child);
            $obj->set_tagName('Children');
            $this->setChildren($obj);
            if (!empty($namespace)) {
                $this->namespace['Children'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}