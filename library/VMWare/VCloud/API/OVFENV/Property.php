<?php
class VMware_VCloud_API_OVFENV_Property {
    protected $value = null;
    protected $key = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/environment/1';

   /**
    * @param string $value - [required] an attribute, 
    * @param string $key - [required] an attribute, 
    * @param string $valueOf - [optional]
    */
    public function __construct($value=null, $key=null, $valueOf='') {
        $this->value = $value;
        $this->key = $key;
        $this->valueOf = $valueOf;
        $this->anyAttributes = array();
        $this->tagName = 'Property';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
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
    public function get_valueOf() { return $this->valueOf; }
    public function set_valueOf($valueOf) { $this->valueOf = $valueOf; }
    public function get_anyAttributes() { return $this->anyAttributes; }
    public function set_anyAttributes($anyAttributes) { $this->anyAttributes = $anyAttributes; }
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
            $out = VMware_VCloud_API_Helper::addString($out, ">");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'value', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'value=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->value, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='value')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'key', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'key=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->key, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='key')));
        if ($this->anyAttributes) {
            foreach ($this->anyAttributes as $name => $value) {
                if (array_key_exists($name, $this->namespace)) {
                    $ns = $this->namespace[$name];
                    if (!empty($ns)) {
                        $name = $ns . ":" . $name;
                    }
                }
                if ('xsi:type' != $name) {
                    $out = VMware_VCloud_API_Helper::addString($out, " $name=" . VMware_VCloud_API_Helper::quote_attrib($value));
                }
            }
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->valueOf)) {
            $out = VMware_VCloud_API_Helper::addString($out, VMware_VCloud_API_Helper::quote_xml($this->valueOf));
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->valueOf)
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
        $this->valueOf = '';
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
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "value"  && $localName != "key" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_TEXT_NODE) {
            $this->valueOf = $child->nodeValue;
            $this->tagName = $nodeName;
        }
    }
}