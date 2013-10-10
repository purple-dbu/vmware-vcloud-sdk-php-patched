<?php
class VMware_VCloud_API_QueryResultServiceExtensionRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $username = null;
    protected $name = null;
    protected $url = null;
    protected $extensionType = null;
    protected $description = null;
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
    * @param string $username - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $url - [optional] an attribute, 
    * @param string $namespace - [optional] an attribute, 
    * @param string $extensionType - [optional] an attribute, 
    * @param string $description - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $username=null, $name=null, $url=null, $namespace=null, $extensionType=null, $description=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->username = $username;
        $this->name = $name;
        $this->url = $url;
        $this->namespace = $namespace;
        $this->extensionType = $extensionType;
        $this->description = $description;
        $this->tagName = 'ServiceExtensionRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_username(){
        return $this->username;
    }
    public function set_username($username) {
        $this->username = $username;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_url(){
        return $this->url;
    }
    public function set_url($url) {
        $this->url = $url;
    }
    public function get_namespace(){
        return $this->namespace;
    }
    public function set_namespace($namespace) {
        $this->namespace = $namespace;
    }
    public function get_extensionType(){
        return $this->extensionType;
    }
    public function set_extensionType($extensionType) {
        $this->extensionType = $extensionType;
    }
    public function get_description(){
        return $this->description;
    }
    public function set_description($description) {
        $this->description = $description;
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
        if (!is_null($this->username)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'username', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'username=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->username, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='username')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->url)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'url', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'url=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->url, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='url')));
        }
        if (!is_null($this->namespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'namespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'namespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->namespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='namespace')));
        }
        if (!is_null($this->extensionType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'extensionType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'extensionType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->extensionType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='extensionType')));
        }
        if (!is_null($this->description)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'description', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'description=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->description, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='description')));
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
        $ndusername = $attrs->getNamedItem('username');
        if (!is_null($ndusername)) {
            $this->username = $ndusername->value;
            if (isset($ndusername->prefix)) {
                $this->namespace['username'] = $ndusername->prefix;
                $nsUri = $ndusername->lookupNamespaceURI($ndusername->prefix);
            }
            $node->removeAttributeNS($nsUri, 'username');
        } else {
            $this->username = null;
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
        $ndurl = $attrs->getNamedItem('url');
        if (!is_null($ndurl)) {
            $this->url = $ndurl->value;
            if (isset($ndurl->prefix)) {
                $this->namespace['url'] = $ndurl->prefix;
                $nsUri = $ndurl->lookupNamespaceURI($ndurl->prefix);
            }
            $node->removeAttributeNS($nsUri, 'url');
        } else {
            $this->url = null;
        }
        $ndnamespace = $attrs->getNamedItem('namespace');
        if (!is_null($ndnamespace)) {
            $this->namespace = $ndnamespace->value;
            if (isset($ndnamespace->prefix)) {
                $this->namespace['namespace'] = $ndnamespace->prefix;
                $nsUri = $ndnamespace->lookupNamespaceURI($ndnamespace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'namespace');
        } else {
            $this->namespace = null;
        }
        $ndextensionType = $attrs->getNamedItem('extensionType');
        if (!is_null($ndextensionType)) {
            $this->extensionType = $ndextensionType->value;
            if (isset($ndextensionType->prefix)) {
                $this->namespace['extensionType'] = $ndextensionType->prefix;
                $nsUri = $ndextensionType->lookupNamespaceURI($ndextensionType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'extensionType');
        } else {
            $this->extensionType = null;
        }
        $nddescription = $attrs->getNamedItem('description');
        if (!is_null($nddescription)) {
            $this->description = $nddescription->value;
            if (isset($nddescription->prefix)) {
                $this->namespace['description'] = $nddescription->prefix;
                $nsUri = $nddescription->lookupNamespaceURI($nddescription->prefix);
            }
            $node->removeAttributeNS($nsUri, 'description');
        } else {
            $this->description = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}