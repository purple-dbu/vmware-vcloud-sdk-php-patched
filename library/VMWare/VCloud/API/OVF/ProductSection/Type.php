<?php
class VMware_VCloud_API_OVF_ProductSection_Type extends VMware_VCloud_API_OVF_Section_Type {
    protected $instance = null;
    protected $class = null;
    protected $Product = null;
    protected $Vendor = null;
    protected $Version = null;
    protected $FullVersion = null;
    protected $ProductUrl = null;
    protected $VendorUrl = null;
    protected $AppUrl = null;
    protected $Icon = array();
    protected $Category = array();
    protected $Property = array();
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param string $required - [optional] an attribute, 
    * @param VMware_VCloud_API_OVF_Msg_Type $Info - [required]
    * @param string $instance - [optional] an attribute, default ''
    * @param string $class - [optional] an attribute, default ''
    * @param VMware_VCloud_API_OVF_Msg_Type $Product - [optional]
    * @param VMware_VCloud_API_OVF_Msg_Type $Vendor - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Version - [optional]
    * @param VMware_VCloud_API_OVF_cimString $FullVersion - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ProductUrl - [optional]
    * @param VMware_VCloud_API_OVF_cimString $VendorUrl - [optional]
    * @param VMware_VCloud_API_OVF_cimString $AppUrl - [optional]
    * @param array $Icon - [optional] an array of VMware_VCloud_API_OVF_Icon objects
    * @param array $Category - [optional] an array of VMware_VCloud_API_OVF_Msg_Type objects
    * @param array $Property - [optional] an array of VMware_VCloud_API_OVF_Property objects
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($required=null, $Info=null, $instance='', $classxx='', $Product=null, $Vendor=null, $Version=null, $FullVersion=null, $ProductUrl=null, $VendorUrl=null, $AppUrl=null, $Icon=null, $Category=null, $Property=null, $Any=null) {
        parent::__construct($required, $Info);
        $this->instance = $instance;
        $this->classxx = $classxx;
        $this->Product = $Product;
        $this->Vendor = $Vendor;
        $this->Version = $Version;
        $this->FullVersion = $FullVersion;
        $this->ProductUrl = $ProductUrl;
        $this->VendorUrl = $VendorUrl;
        $this->AppUrl = $AppUrl;
        if (!is_null($Icon)) {
            $this->Icon = $Icon;
        }
        if (!is_null($Category)) {
            $this->Category = $Category;
        }
        if (!is_null($Property)) {
            $this->Property = $Property;
        }
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->tagName = 'ProductSection';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getProduct() {
        return $this->Product;
    }
    public function setProduct($Product) { 
        $this->Product = $Product;
    }
    public function getVendor() {
        return $this->Vendor;
    }
    public function setVendor($Vendor) { 
        $this->Vendor = $Vendor;
    }
    public function getVersion() {
        return $this->Version;
    }
    public function setVersion($Version) { 
        $this->Version = $Version;
    }
    public function getFullVersion() {
        return $this->FullVersion;
    }
    public function setFullVersion($FullVersion) { 
        $this->FullVersion = $FullVersion;
    }
    public function getProductUrl() {
        return $this->ProductUrl;
    }
    public function setProductUrl($ProductUrl) { 
        $this->ProductUrl = $ProductUrl;
    }
    public function getVendorUrl() {
        return $this->VendorUrl;
    }
    public function setVendorUrl($VendorUrl) { 
        $this->VendorUrl = $VendorUrl;
    }
    public function getAppUrl() {
        return $this->AppUrl;
    }
    public function setAppUrl($AppUrl) { 
        $this->AppUrl = $AppUrl;
    }
    public function getIcon() {
        return $this->Icon;
    }
    public function setIcon($Icon) { 
        $this->Icon = $Icon;
    }
    public function addIcon($value) { array_push($this->Icon, $value); }
    public function getCategory() {
        return $this->Category;
    }
    public function setCategory($Category) { 
        $this->Category = $Category;
    }
    public function addCategory($value) { array_push($this->Category, $value); }
    public function getProperty() {
        return $this->Property;
    }
    public function setProperty($Property) { 
        $this->Property = $Property;
    }
    public function addProperty($value) { array_push($this->Property, $value); }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
    public function get_instance(){
        return $this->instance;
    }
    public function set_instance($instance) {
        $this->instance = $instance;
    }
    public function get_class(){
        return $this->classxx;
    }
    public function set_class($classxx) {
        $this->classxx = $classxx;
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
        if (!is_null($this->instance)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'instance', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'instance=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->instance, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='instance')));
        }
        if (!is_null($this->classxx)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'classxx', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'class=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->classxx, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='class')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Product)) {
            $out = $this->Product->export('Product', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Vendor)) {
            $out = $this->Vendor->export('Vendor', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Version)) {
            $out = $this->Version->export('Version', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->FullVersion)) {
            $out = $this->FullVersion->export('FullVersion', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ProductUrl)) {
            $out = $this->ProductUrl->export('ProductUrl', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VendorUrl)) {
            $out = $this->VendorUrl->export('VendorUrl', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AppUrl)) {
            $out = $this->AppUrl->export('AppUrl', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Icon)) {
            foreach ($this->Icon as $Icon) {
                $out = $Icon->export('Icon', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->Category)) {
            foreach ($this->Category as $Category) {
                $out = $Category->export('Category', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->Property)) {
            foreach ($this->Property as $Property) {
                $out = $Property->export('Property', $out, $level, '', $namespace, $rootNS);
            }
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
            !is_null($this->Product) ||
            !is_null($this->Vendor) ||
            !is_null($this->Version) ||
            !is_null($this->FullVersion) ||
            !is_null($this->ProductUrl) ||
            !is_null($this->VendorUrl) ||
            !is_null($this->AppUrl) ||
            !empty($this->Icon) ||
            !empty($this->Category) ||
            !empty($this->Property) ||
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
        $ndinstance = $attrs->getNamedItem('instance');
        if (!is_null($ndinstance)) {
            $this->instance = $ndinstance->value;
            if (isset($ndinstance->prefix)) {
                $this->namespace['instance'] = $ndinstance->prefix;
                $nsUri = $ndinstance->lookupNamespaceURI($ndinstance->prefix);
            }
            $node->removeAttributeNS($nsUri, 'instance');
        } else {
            $this->instance = null;
        }
        $ndclass = $attrs->getNamedItem('class');
        if (!is_null($ndclass)) {
            $this->classxx = $ndclass->value;
            if (isset($ndclassxx->prefix)) {
                $this->namespace['classxx'] = $ndclass->prefix;
                $nsUri = $ndclassxx->lookupNamespaceURI($ndclass->prefix);
            }
            $node->removeAttributeNS($nsUri, 'class');
        } else {
            $this->classxx = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Product') {
            $obj = new VMware_VCloud_API_OVF_Msg_Type();
            $obj->build($child);
            $obj->set_tagName('Product');
            $this->setProduct($obj);
            if (!empty($namespace)) {
                $this->namespace['Product'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Vendor') {
            $obj = new VMware_VCloud_API_OVF_Msg_Type();
            $obj->build($child);
            $obj->set_tagName('Vendor');
            $this->setVendor($obj);
            if (!empty($namespace)) {
                $this->namespace['Vendor'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Version') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Version');
            $this->setVersion($obj);
            if (!empty($namespace)) {
                $this->namespace['Version'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FullVersion') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('FullVersion');
            $this->setFullVersion($obj);
            if (!empty($namespace)) {
                $this->namespace['FullVersion'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProductUrl') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('ProductUrl');
            $this->setProductUrl($obj);
            if (!empty($namespace)) {
                $this->namespace['ProductUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VendorUrl') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('VendorUrl');
            $this->setVendorUrl($obj);
            if (!empty($namespace)) {
                $this->namespace['VendorUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AppUrl') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('AppUrl');
            $this->setAppUrl($obj);
            if (!empty($namespace)) {
                $this->namespace['AppUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Icon') {
            $obj = new VMware_VCloud_API_OVF_Icon();
            $obj->build($child);
            $obj->set_tagName('Icon');
            array_push($this->Icon, $obj);
            if (!empty($namespace)) {
                $this->namespace['Icon'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Category') {
            $obj = new VMware_VCloud_API_OVF_Msg_Type();
            $obj->build($child);
            $obj->set_tagName('Category');
            array_push($this->Category, $obj);
            if (!empty($namespace)) {
                $this->namespace['Category'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Property') {
            $obj = new VMware_VCloud_API_OVF_Property();
            $obj->build($child);
            $obj->set_tagName('Property');
            array_push($this->Property, $obj);
            if (!empty($namespace)) {
                $this->namespace['Property'] = $namespace;
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