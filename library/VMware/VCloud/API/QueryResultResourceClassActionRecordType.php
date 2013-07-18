<?php
class VMware_VCloud_API_QueryResultResourceClassActionRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $httpMethod = null;
    protected $resourceClass = null;
    protected $name = null;
    protected $urlPattern = null;
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
    * @param string $httpMethod - [optional] an attribute, 
    * @param string $resourceClass - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $urlPattern - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $httpMethod=null, $resourceClass=null, $name=null, $urlPattern=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->httpMethod = $httpMethod;
        $this->resourceClass = $resourceClass;
        $this->name = $name;
        $this->urlPattern = $urlPattern;
        $this->tagName = 'ResourceClassActionRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_httpMethod(){
        return $this->httpMethod;
    }
    public function set_httpMethod($httpMethod) {
        $this->httpMethod = $httpMethod;
    }
    public function get_resourceClass(){
        return $this->resourceClass;
    }
    public function set_resourceClass($resourceClass) {
        $this->resourceClass = $resourceClass;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_urlPattern(){
        return $this->urlPattern;
    }
    public function set_urlPattern($urlPattern) {
        $this->urlPattern = $urlPattern;
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
        if (!is_null($this->httpMethod)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'httpMethod', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'httpMethod=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->httpMethod, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='httpMethod')));
        }
        if (!is_null($this->resourceClass)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'resourceClass', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'resourceClass=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->resourceClass, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='resourceClass')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->urlPattern)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'urlPattern', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'urlPattern=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->urlPattern, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='urlPattern')));
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
        $ndhttpMethod = $attrs->getNamedItem('httpMethod');
        if (!is_null($ndhttpMethod)) {
            $this->httpMethod = $ndhttpMethod->value;
            if (isset($ndhttpMethod->prefix)) {
                $this->namespace['httpMethod'] = $ndhttpMethod->prefix;
                $nsUri = $ndhttpMethod->lookupNamespaceURI($ndhttpMethod->prefix);
            }
            $node->removeAttributeNS($nsUri, 'httpMethod');
        } else {
            $this->httpMethod = null;
        }
        $ndresourceClass = $attrs->getNamedItem('resourceClass');
        if (!is_null($ndresourceClass)) {
            $this->resourceClass = $ndresourceClass->value;
            if (isset($ndresourceClass->prefix)) {
                $this->namespace['resourceClass'] = $ndresourceClass->prefix;
                $nsUri = $ndresourceClass->lookupNamespaceURI($ndresourceClass->prefix);
            }
            $node->removeAttributeNS($nsUri, 'resourceClass');
        } else {
            $this->resourceClass = null;
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
        $ndurlPattern = $attrs->getNamedItem('urlPattern');
        if (!is_null($ndurlPattern)) {
            $this->urlPattern = $ndurlPattern->value;
            if (isset($ndurlPattern->prefix)) {
                $this->namespace['urlPattern'] = $ndurlPattern->prefix;
                $nsUri = $ndurlPattern->lookupNamespaceURI($ndurlPattern->prefix);
            }
            $node->removeAttributeNS($nsUri, 'urlPattern');
        } else {
            $this->urlPattern = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}