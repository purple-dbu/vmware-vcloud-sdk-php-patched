<?php
class VMware_VCloud_API_QueryResultResourceClassRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $mimeType = null;
    protected $name = null;
    protected $service = null;
    protected $urnPattern = null;
    protected $nid = null;
    protected $urlTemplate = null;
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
    * @param string $mimeType - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $service - [optional] an attribute, 
    * @param string $urnPattern - [optional] an attribute, 
    * @param string $nid - [optional] an attribute, 
    * @param string $urlTemplate - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $mimeType=null, $name=null, $service=null, $urnPattern=null, $nid=null, $urlTemplate=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->mimeType = $mimeType;
        $this->name = $name;
        $this->service = $service;
        $this->urnPattern = $urnPattern;
        $this->nid = $nid;
        $this->urlTemplate = $urlTemplate;
        $this->tagName = 'ResourceClassRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_mimeType(){
        return $this->mimeType;
    }
    public function set_mimeType($mimeType) {
        $this->mimeType = $mimeType;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_service(){
        return $this->service;
    }
    public function set_service($service) {
        $this->service = $service;
    }
    public function get_urnPattern(){
        return $this->urnPattern;
    }
    public function set_urnPattern($urnPattern) {
        $this->urnPattern = $urnPattern;
    }
    public function get_nid(){
        return $this->nid;
    }
    public function set_nid($nid) {
        $this->nid = $nid;
    }
    public function get_urlTemplate(){
        return $this->urlTemplate;
    }
    public function set_urlTemplate($urlTemplate) {
        $this->urlTemplate = $urlTemplate;
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
        if (!is_null($this->mimeType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'mimeType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'mimeType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->mimeType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='mimeType')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->service)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'service', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'service=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->service, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='service')));
        }
        if (!is_null($this->urnPattern)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'urnPattern', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'urnPattern=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->urnPattern, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='urnPattern')));
        }
        if (!is_null($this->nid)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'nid', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'nid=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->nid, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='nid')));
        }
        if (!is_null($this->urlTemplate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'urlTemplate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'urlTemplate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->urlTemplate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='urlTemplate')));
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
        $ndmimeType = $attrs->getNamedItem('mimeType');
        if (!is_null($ndmimeType)) {
            $this->mimeType = $ndmimeType->value;
            if (isset($ndmimeType->prefix)) {
                $this->namespace['mimeType'] = $ndmimeType->prefix;
                $nsUri = $ndmimeType->lookupNamespaceURI($ndmimeType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'mimeType');
        } else {
            $this->mimeType = null;
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
        $ndservice = $attrs->getNamedItem('service');
        if (!is_null($ndservice)) {
            $this->service = $ndservice->value;
            if (isset($ndservice->prefix)) {
                $this->namespace['service'] = $ndservice->prefix;
                $nsUri = $ndservice->lookupNamespaceURI($ndservice->prefix);
            }
            $node->removeAttributeNS($nsUri, 'service');
        } else {
            $this->service = null;
        }
        $ndurnPattern = $attrs->getNamedItem('urnPattern');
        if (!is_null($ndurnPattern)) {
            $this->urnPattern = $ndurnPattern->value;
            if (isset($ndurnPattern->prefix)) {
                $this->namespace['urnPattern'] = $ndurnPattern->prefix;
                $nsUri = $ndurnPattern->lookupNamespaceURI($ndurnPattern->prefix);
            }
            $node->removeAttributeNS($nsUri, 'urnPattern');
        } else {
            $this->urnPattern = null;
        }
        $ndnid = $attrs->getNamedItem('nid');
        if (!is_null($ndnid)) {
            $this->nid = $ndnid->value;
            if (isset($ndnid->prefix)) {
                $this->namespace['nid'] = $ndnid->prefix;
                $nsUri = $ndnid->lookupNamespaceURI($ndnid->prefix);
            }
            $node->removeAttributeNS($nsUri, 'nid');
        } else {
            $this->nid = null;
        }
        $ndurlTemplate = $attrs->getNamedItem('urlTemplate');
        if (!is_null($ndurlTemplate)) {
            $this->urlTemplate = $ndurlTemplate->value;
            if (isset($ndurlTemplate->prefix)) {
                $this->namespace['urlTemplate'] = $ndurlTemplate->prefix;
                $nsUri = $ndurlTemplate->lookupNamespaceURI($ndurlTemplate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'urlTemplate');
        } else {
            $this->urlTemplate = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}