<?php
class VMware_VCloud_API_OVF_OperatingSystemSection_Type extends VMware_VCloud_API_OVF_Section_Type {
    protected $version = null;
    protected $id = null;
    protected $Description = null;
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param string $required - [optional] an attribute, 
    * @param VMware_VCloud_API_OVF_Msg_Type $Info - [required]
    * @param string $version - [optional] an attribute, 
    * @param unsignedShort $id - [required] an attribute, 
    * @param VMware_VCloud_API_OVF_cimString $Description - [optional]
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($required=null, $Info=null, $version=null, $id=null, $Description=null, $Any=null) {
        parent::__construct($required, $Info);
        $this->version = $version;
        $this->id = $id;
        $this->Description = $Description;
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->tagName = 'OperatingSystemSection';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
    public function get_version(){
        return $this->version;
    }
    public function set_version($version) {
        $this->version = $version;
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
        if (!is_null($this->version)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'version', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'version=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->version, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='version')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'id', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'id=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->id, $input_name='id')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Description)) {
            $out = $this->Description->export('Description', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Any)) {
            foreach ($this->Any as $Any) {
                if ($Any instanceof SimpleXMLElement) {
                    $elementName = $Any->getName();
                    if (!in_array($elementName, array('Info'))) {
                        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                        $out = VMware_VCloud_API_Helper::addString($out, $Any->asXML() . "\n");
                    }
                } else {
                    $tagName = $Any->get_tagName();
                    $namespace = $Any::$defaultNS;
                    $out = $Any->export($tagName, $out, $level, '', $namespace, $rootNS);
                }
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Description) ||
            !empty($this->Any) ||
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
        $ndversion = $attrs->getNamedItem('version');
        if (!is_null($ndversion)) {
            $this->version = $ndversion->value;
            if (isset($ndversion->prefix)) {
                $this->namespace['version'] = $ndversion->prefix;
                $nsUri = $ndversion->lookupNamespaceURI($ndversion->prefix);
            }
            $node->removeAttributeNS($nsUri, 'version');
        } else {
            $this->version = null;
        }
        $ndid = $attrs->getNamedItem('id');
        if (!is_null($ndid)) {
            $this->id = sprintf('%d', $ndid->value);
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Description');
            $this->setDescription($obj);
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && !in_array($nodeName, array('Info'))) {
            $type = VMware_VCloud_API_Helper::getClassName($nodeName);
            if (class_exists($type) && method_exists($type, 'build')) {
                $class = new ReflectionClass($type);
                if ($class->isInstantiable()) {
                    $obj = $class->newInstance();
                    $obj->build($child);
                    $obj->set_tagName($nodeName);
                }
            } else {
                $obj = simplexml_import_dom($child);
            }
            array_push($this->Any, $obj);
            if (!empty($namespace)) {
                $this->namespace['Any'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}