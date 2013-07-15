<?php
class VMware_VCloud_API_OVF_File_Type {
    protected $compression = null;
    protected $href = null;
    protected $chunkSize = null;
    protected $id = null;
    protected $size = null;
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param string $compression - [optional] an attribute, default ''
    * @param anyURI $href - [required] an attribute, 
    * @param long $chunkSize - [optional] an attribute, 
    * @param string $id - [required] an attribute, 
    * @param unsignedLong $size - [optional] an attribute, 
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($compression='', $href=null, $chunkSize=null, $id=null, $size=null, $Any=null) {
        $this->compression = $compression;
        $this->href = $href;
        $this->chunkSize = $chunkSize;
        $this->id = $id;
        $this->size = $size;
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->anyAttributes = array();
        $this->tagName = 'File';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
    public function get_compression(){
        return $this->compression;
    }
    public function set_compression($compression) {
        $this->compression = $compression;
    }
    public function get_href(){
        return $this->href;
    }
    public function set_href($href) {
        $this->href = $href;
    }
    public function get_chunkSize(){
        return $this->chunkSize;
    }
    public function set_chunkSize($chunkSize) {
        $this->chunkSize = $chunkSize;
    }
    public function get_id(){
        return $this->id;
    }
    public function set_id($id) {
        $this->id = $id;
    }
    public function get_size(){
        return $this->size;
    }
    public function set_size($size) {
        $this->size = $size;
    }
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
        if (!is_null($this->compression)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'compression', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'compression=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->compression, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='compression')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'href', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'href=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->href, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='href')));
        if (!is_null($this->chunkSize)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'chunkSize', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'chunkSize=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->chunkSize, $input_name='chunkSize')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'id', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'id=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->id, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='id')));
        if (!is_null($this->size)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'size', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'size=' . VMware_VCloud_API_Helper::quote_attrib($this->size));
        }
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
        if (isset($this->Any)) {
            foreach ($this->Any as $Any) {
                if ($Any instanceof SimpleXMLElement) {
                    $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                    $out = VMware_VCloud_API_Helper::addString($out, $Any->asXML() . "\n");
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
            !empty($this->Any)
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
        $ndcompression = $attrs->getNamedItem('compression');
        if (!is_null($ndcompression)) {
            $this->compression = $ndcompression->value;
            if (isset($ndcompression->prefix)) {
                $this->namespace['compression'] = $ndcompression->prefix;
                $nsUri = $ndcompression->lookupNamespaceURI($ndcompression->prefix);
            }
            $node->removeAttributeNS($nsUri, 'compression');
        } else {
            $this->compression = null;
        }
        $ndhref = $attrs->getNamedItem('href');
        if (!is_null($ndhref)) {
            $this->href = $ndhref->value;
            if (isset($ndhref->prefix)) {
                $this->namespace['href'] = $ndhref->prefix;
                $nsUri = $ndhref->lookupNamespaceURI($ndhref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'href');
        } else {
            $this->href = null;
        }
        $ndchunkSize = $attrs->getNamedItem('chunkSize');
        if (!is_null($ndchunkSize)) {
            $this->chunkSize = sprintf('%d', $ndchunkSize->value);
            if (isset($ndchunkSize->prefix)) {
                $this->namespace['chunkSize'] = $ndchunkSize->prefix;
                $nsUri = $ndchunkSize->lookupNamespaceURI($ndchunkSize->prefix);
            }
            $node->removeAttributeNS($nsUri, 'chunkSize');
        } else {
            $this->chunkSize = null;
        }
        $ndid = $attrs->getNamedItem('id');
        if (!is_null($ndid)) {
            $this->id = $ndid->value;
            if (isset($ndid->prefix)) {
                $this->namespace['id'] = $ndid->prefix;
                $nsUri = $ndid->lookupNamespaceURI($ndid->prefix);
            }
            $node->removeAttributeNS($nsUri, 'id');
        } else {
            $this->id = null;
        }
        $ndsize = $attrs->getNamedItem('size');
        if (!is_null($ndsize)) {
            $this->size = $ndsize->value;
            if (isset($ndsize->prefix)) {
                $this->namespace['size'] = $ndsize->prefix;
                $nsUri = $ndsize->lookupNamespaceURI($ndsize->prefix);
            }
            $node->removeAttributeNS($nsUri, 'size');
        } else {
            $this->size = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "compression"  && $localName != "href"  && $localName != "chunkSize"  && $localName != "id"  && $localName != "size" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE) {
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
    }
}