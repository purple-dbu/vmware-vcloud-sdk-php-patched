<?php
class VMware_VCloud_API_QueryResultExternalLocalizationRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $locale = null;
    protected $serviceNamespace = null;
    protected $value = null;
    protected $key = null;
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
    * @param string $locale - [optional] an attribute, 
    * @param string $serviceNamespace - [optional] an attribute, 
    * @param string $value - [optional] an attribute, 
    * @param string $key - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $locale=null, $serviceNamespace=null, $value=null, $key=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->locale = $locale;
        $this->serviceNamespace = $serviceNamespace;
        $this->value = $value;
        $this->key = $key;
        $this->tagName = 'ExternalLocalizationRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_locale(){
        return $this->locale;
    }
    public function set_locale($locale) {
        $this->locale = $locale;
    }
    public function get_serviceNamespace(){
        return $this->serviceNamespace;
    }
    public function set_serviceNamespace($serviceNamespace) {
        $this->serviceNamespace = $serviceNamespace;
    }
    public function get_value(){
        return $this->value;
    }
    public function set_value($value) {
        $this->value = $value;
    }
    public function get_key(){
        return $this->key;
    }
    public function set_key($key) {
        $this->key = $key;
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
        if (!is_null($this->locale)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'locale', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'locale=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->locale, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='locale')));
        }
        if (!is_null($this->serviceNamespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceNamespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceNamespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceNamespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceNamespace')));
        }
        if (!is_null($this->value)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'value', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'value=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->value, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='value')));
        }
        if (!is_null($this->key)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'key', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'key=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->key, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='key')));
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
        $ndlocale = $attrs->getNamedItem('locale');
        if (!is_null($ndlocale)) {
            $this->locale = $ndlocale->value;
            if (isset($ndlocale->prefix)) {
                $this->namespace['locale'] = $ndlocale->prefix;
                $nsUri = $ndlocale->lookupNamespaceURI($ndlocale->prefix);
            }
            $node->removeAttributeNS($nsUri, 'locale');
        } else {
            $this->locale = null;
        }
        $ndserviceNamespace = $attrs->getNamedItem('serviceNamespace');
        if (!is_null($ndserviceNamespace)) {
            $this->serviceNamespace = $ndserviceNamespace->value;
            if (isset($ndserviceNamespace->prefix)) {
                $this->namespace['serviceNamespace'] = $ndserviceNamespace->prefix;
                $nsUri = $ndserviceNamespace->lookupNamespaceURI($ndserviceNamespace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceNamespace');
        } else {
            $this->serviceNamespace = null;
        }
        $ndvalue = $attrs->getNamedItem('value');
        if (!is_null($ndvalue)) {
            $this->value = $ndvalue->value;
            if (isset($ndvalue->prefix)) {
                $this->namespace['value'] = $ndvalue->prefix;
                $nsUri = $ndvalue->lookupNamespaceURI($ndvalue->prefix);
            }
            $node->removeAttributeNS($nsUri, 'value');
        } else {
            $this->value = null;
        }
        $ndkey = $attrs->getNamedItem('key');
        if (!is_null($ndkey)) {
            $this->key = $ndkey->value;
            if (isset($ndkey->prefix)) {
                $this->namespace['key'] = $ndkey->prefix;
                $nsUri = $ndkey->lookupNamespaceURI($ndkey->prefix);
            }
            $node->removeAttributeNS($nsUri, 'key');
        } else {
            $this->key = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}