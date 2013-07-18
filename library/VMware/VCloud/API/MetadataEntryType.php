<?php
class VMware_VCloud_API_MetadataEntryType extends VMware_VCloud_API_ResourceType {
    protected $Domain = null;
    protected $Key = null;
    protected $Value = null;
    protected $TypedValue = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataDomainTagType $Domain - [optional]
    * @param string $Key - [required] 
    * @param string $Value - [optional] 
    * @param VMware_VCloud_API_MetadataTypedValue $TypedValue - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $Domain=null, $Key=null, $Value=null, $TypedValue=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->Domain = $Domain;
        $this->Key = $Key;
        $this->Value = $Value;
        $this->TypedValue = $TypedValue;
        $this->tagName = 'MetadataEntry';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDomain() {
        return $this->Domain;
    }
    public function setDomain($Domain) { 
        $this->Domain = $Domain;
    }
    public function getKey() {
        return $this->Key;
    }
    public function setKey($Key) { 
        $this->Key = $Key;
    }
    public function getValue() {
        return $this->Value;
    }
    public function setValue($Value) { 
        $this->Value = $Value;
    }
    public function getTypedValue() {
        return $this->TypedValue;
    }
    public function setTypedValue($TypedValue) { 
        $this->TypedValue = $TypedValue;
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
        if (!is_null($this->Domain)) {
            $out = $this->Domain->export('Domain', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Key)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Key', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Key>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Key, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Key')) . "</" . $ns . "Key>\n");
        }
        if (!is_null($this->Value)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Value', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Value>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Value, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Value')) . "</" . $ns . "Value>\n");
        }
        if (!is_null($this->TypedValue)) {
            $out = $this->TypedValue->export('TypedValue', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Domain) ||
            !is_null($this->Key) ||
            !is_null($this->Value) ||
            !is_null($this->TypedValue) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Domain') {
            $obj = new VMware_VCloud_API_MetadataDomainTagType();
            $obj->build($child);
            $obj->set_tagName('Domain');
            $this->setDomain($obj);
            if (!empty($namespace)) {
                $this->namespace['Domain'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Key') {
            $sval = $child->nodeValue;
            $this->Key = $sval;
            if (!empty($namespace)) {
                $this->namespace['Key'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Value') {
            $sval = $child->nodeValue;
            $this->Value = $sval;
            if (!empty($namespace)) {
                $this->namespace['Value'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TypedValue') {
            $t = $child->getAttribute('xsi:type');
            $obj = null;
            if (isset($t)) {
                $type = VMware_VCloud_API_Helper::getClassName($t);
                if (class_exists($type)) {
                    $class = new ReflectionClass($type);
                    if ($class->isInstantiable()) {
                        $obj = $class->newInstance();
                    }
                }
            }
            if (is_null($obj)) {
                $obj = new VMware_VCloud_API_MetadataTypedValue();
            }
            $obj->build($child);
            $obj->set_tagName('TypedValue');
            $this->setTypedValue($obj);
            if (!empty($namespace)) {
                $this->namespace['TypedValue'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}