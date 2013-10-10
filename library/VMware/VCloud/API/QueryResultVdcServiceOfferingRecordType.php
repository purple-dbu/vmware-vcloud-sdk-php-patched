<?php
class VMware_VCloud_API_QueryResultVdcServiceOfferingRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $available = null;
    protected $extensionId = null;
    protected $name = null;
    protected $vdcId = null;
    protected $extensionName = null;
    protected $vdcName = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param boolean $available - [optional] an attribute, 
    * @param string $extensionId - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $vdcId - [optional] an attribute, 
    * @param string $extensionName - [optional] an attribute, 
    * @param string $vdcName - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $available=null, $extensionId=null, $name=null, $vdcId=null, $extensionName=null, $vdcName=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->available = $available;
        $this->extensionId = $extensionId;
        $this->name = $name;
        $this->vdcId = $vdcId;
        $this->extensionName = $extensionName;
        $this->vdcName = $vdcName;
        $this->tagName = 'VdcServiceOfferingRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_available(){
        return $this->available;
    }
    public function set_available($available) {
        $this->available = $available;
    }
    public function get_extensionId(){
        return $this->extensionId;
    }
    public function set_extensionId($extensionId) {
        $this->extensionId = $extensionId;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_vdcId(){
        return $this->vdcId;
    }
    public function set_vdcId($vdcId) {
        $this->vdcId = $vdcId;
    }
    public function get_extensionName(){
        return $this->extensionName;
    }
    public function set_extensionName($extensionName) {
        $this->extensionName = $extensionName;
    }
    public function get_vdcName(){
        return $this->vdcName;
    }
    public function set_vdcName($vdcName) {
        $this->vdcName = $vdcName;
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
        if (!is_null($this->available)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'available', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'available=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->available, $input_name='available')));
        }
        if (!is_null($this->extensionId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'extensionId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'extensionId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->extensionId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='extensionId')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->vdcId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcId')));
        }
        if (!is_null($this->extensionName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'extensionName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'extensionName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->extensionName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='extensionName')));
        }
        if (!is_null($this->vdcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcName')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function hasContent() {
        if (
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
        $ndavailable = $attrs->getNamedItem('available');
        if (!is_null($ndavailable)) {
            $this->available = VMware_VCloud_API_Helper::get_boolean($ndavailable->value);
            if (isset($ndavailable->prefix)) {
                $this->namespace['available'] = $ndavailable->prefix;
                $nsUri = $ndavailable->lookupNamespaceURI($ndavailable->prefix);
            }
            $node->removeAttributeNS($nsUri, 'available');
        } else {
            $this->available = null;
        }
        $ndextensionId = $attrs->getNamedItem('extensionId');
        if (!is_null($ndextensionId)) {
            $this->extensionId = $ndextensionId->value;
            if (isset($ndextensionId->prefix)) {
                $this->namespace['extensionId'] = $ndextensionId->prefix;
                $nsUri = $ndextensionId->lookupNamespaceURI($ndextensionId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'extensionId');
        } else {
            $this->extensionId = null;
        }
        $ndname = $attrs->getNamedItem('name');
        if (!is_null($ndname)) {
            $this->name = $ndname->value;
            if (isset($ndname->prefix)) {
                $this->namespace['name'] = $ndname->prefix;
                $nsUri = $ndname->lookupNamespaceURI($ndname->prefix);
            }
            $node->removeAttributeNS($nsUri, 'name');
        } else {
            $this->name = null;
        }
        $ndvdcId = $attrs->getNamedItem('vdcId');
        if (!is_null($ndvdcId)) {
            $this->vdcId = $ndvdcId->value;
            if (isset($ndvdcId->prefix)) {
                $this->namespace['vdcId'] = $ndvdcId->prefix;
                $nsUri = $ndvdcId->lookupNamespaceURI($ndvdcId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdcId');
        } else {
            $this->vdcId = null;
        }
        $ndextensionName = $attrs->getNamedItem('extensionName');
        if (!is_null($ndextensionName)) {
            $this->extensionName = $ndextensionName->value;
            if (isset($ndextensionName->prefix)) {
                $this->namespace['extensionName'] = $ndextensionName->prefix;
                $nsUri = $ndextensionName->lookupNamespaceURI($ndextensionName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'extensionName');
        } else {
            $this->extensionName = null;
        }
        $ndvdcName = $attrs->getNamedItem('vdcName');
        if (!is_null($ndvdcName)) {
            $this->vdcName = $ndvdcName->value;
            if (isset($ndvdcName->prefix)) {
                $this->namespace['vdcName'] = $ndvdcName->prefix;
                $nsUri = $ndvdcName->lookupNamespaceURI($ndvdcName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdcName');
        } else {
            $this->vdcName = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}