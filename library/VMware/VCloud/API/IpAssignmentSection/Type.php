<?php
class VMware_VCloud_API_IpAssignmentSection_Type extends VMware_VCloud_API_OVF_Section_Type {
    protected $schemes = null;
    protected $protocols = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/schema/ovf';

   /**
    * @param string $required - [optional] an attribute, 
    * @param VMware_VCloud_API_OVF_Msg_Type $Info - [required]
    * @param string $schemes - [optional] an attribute, default ''
    * @param string $protocols - [optional] an attribute, default 'IPv4'
    */
    public function __construct($required=null, $Info=null, $schemes='', $protocols='IPv4') {
        parent::__construct($required, $Info);
        $this->schemes = $schemes;
        $this->protocols = $protocols;
        $this->anyAttributes = array();
        $this->tagName = 'IpAssignmentSection';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_schemes(){
        return $this->schemes;
    }
    public function set_schemes($schemes) {
        $this->schemes = $schemes;
    }
    public function get_protocols(){
        return $this->protocols;
    }
    public function set_protocols($protocols) {
        $this->protocols = $protocols;
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
        $out = parent::exportAttributes($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->schemes)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'schemes', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'schemes=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->schemes, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='schemes')));
        }
        if (!is_null($this->protocols)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'protocols', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'protocols=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->protocols, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='protocols')));
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
        $ndschemes = $attrs->getNamedItem('schemes');
        if (!is_null($ndschemes)) {
            $this->schemes = $ndschemes->value;
            if (isset($ndschemes->prefix)) {
                $this->namespace['schemes'] = $ndschemes->prefix;
                $nsUri = $ndschemes->lookupNamespaceURI($ndschemes->prefix);
            }
            $node->removeAttributeNS($nsUri, 'schemes');
        } else {
            $this->schemes = null;
        }
        $ndprotocols = $attrs->getNamedItem('protocols');
        if (!is_null($ndprotocols)) {
            $this->protocols = $ndprotocols->value;
            if (isset($ndprotocols->prefix)) {
                $this->namespace['protocols'] = $ndprotocols->prefix;
                $nsUri = $ndprotocols->lookupNamespaceURI($ndprotocols->prefix);
            }
            $node->removeAttributeNS($nsUri, 'protocols');
        } else {
            $this->protocols = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "schemes"  && $localName != "protocols" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}