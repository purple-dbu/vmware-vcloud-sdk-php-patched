<?php
class VMware_VCloud_API_OVFENV_PlatformSection_Type extends VMware_VCloud_API_OVFENV_Section_Type {
    protected $Kind = null;
    protected $Version = null;
    protected $Vendor = null;
    protected $Locale = null;
    protected $Timezone = null;
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/environment/1';

   /**
    * @param VMware_VCloud_API_OVF_cimString $Kind - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Version - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Vendor - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Locale - [optional]
    * @param int $Timezone - [optional] 
    * @param array $Any - [optional] an array of any type of objects
    * @param string $valueOf - [optional]
    */
    public function __construct($Kind=null, $Version=null, $Vendor=null, $Locale=null, $Timezone=null, $Any=null, $valueOf='') {
        parent::__construct($valueOf);
        $this->Kind = $Kind;
        $this->Version = $Version;
        $this->Vendor = $Vendor;
        $this->Locale = $Locale;
        $this->Timezone = $Timezone;
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->tagName = 'PlatformSection';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getKind() {
        return $this->Kind;
    }
    public function setKind($Kind) { 
        $this->Kind = $Kind;
    }
    public function getVersion() {
        return $this->Version;
    }
    public function setVersion($Version) { 
        $this->Version = $Version;
    }
    public function getVendor() {
        return $this->Vendor;
    }
    public function setVendor($Vendor) { 
        $this->Vendor = $Vendor;
    }
    public function getLocale() {
        return $this->Locale;
    }
    public function setLocale($Locale) { 
        $this->Locale = $Locale;
    }
    public function getTimezone() {
        return $this->Timezone;
    }
    public function setTimezone($Timezone) { 
        $this->Timezone = $Timezone;
    }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
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
        if (!is_null($this->Kind)) {
            $out = $this->Kind->export('Kind', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Version)) {
            $out = $this->Version->export('Version', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Vendor)) {
            $out = $this->Vendor->export('Vendor', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Locale)) {
            $out = $this->Locale->export('Locale', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Timezone)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Timezone', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Timezone>" . VMware_VCloud_API_Helper::format_integer($this->Timezone, $input_name='Timezone') . "</" . $ns . "Timezone>\n");
        }
        if (isset($this->Any)) {
            foreach ($this->Any as $Any) {
                if ($Any instanceof SimpleXMLElement) {
                    $elementName = $Any->getName();
                    if (!in_array($elementName, array())) {
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
            !is_null($this->Kind) ||
            !is_null($this->Version) ||
            !is_null($this->Vendor) ||
            !is_null($this->Locale) ||
            !is_null($this->Timezone) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Kind') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Kind');
            $this->setKind($obj);
            if (!empty($namespace)) {
                $this->namespace['Kind'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Vendor') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Vendor');
            $this->setVendor($obj);
            if (!empty($namespace)) {
                $this->namespace['Vendor'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Locale') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Locale');
            $this->setLocale($obj);
            if (!empty($namespace)) {
                $this->namespace['Locale'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Timezone') {
            $sval = $child->nodeValue;
            $this->Timezone = $sval;
            if (!empty($namespace)) {
                $this->namespace['Timezone'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE) {
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