<?php
class VMware_VCloud_API_Extension_VimObjectRefType {
    protected $VimServerRef = null;
    protected $MoRef = null;
    protected $VimObjectType = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param VMware_VCloud_API_ReferenceType $VimServerRef - [required]
    * @param string $MoRef - [required] 
    * @param string $VimObjectType - [required] 
    */
    public function __construct($VimServerRef=null, $MoRef=null, $VimObjectType=null) {
        $this->VimServerRef = $VimServerRef;
        $this->MoRef = $MoRef;
        $this->VimObjectType = $VimObjectType;
        $this->tagName = 'VimObjectRef';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVimServerRef() {
        return $this->VimServerRef;
    }
    public function setVimServerRef($VimServerRef) { 
        $this->VimServerRef = $VimServerRef;
    }
    public function getMoRef() {
        return $this->MoRef;
    }
    public function setMoRef($MoRef) { 
        $this->MoRef = $MoRef;
    }
    public function getVimObjectType() {
        return $this->VimObjectType;
    }
    public function setVimObjectType($VimObjectType) { 
        $this->VimObjectType = $VimObjectType;
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->VimServerRef)) {
            $out = $this->VimServerRef->export('VimServerRef', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->MoRef)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MoRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MoRef>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MoRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MoRef')) . "</" . $ns . "MoRef>\n");
        }
        if (!is_null($this->VimObjectType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VimObjectType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VimObjectType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VimObjectType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VimObjectType')) . "</" . $ns . "VimObjectType>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VimServerRef) ||
            !is_null($this->MoRef) ||
            !is_null($this->VimObjectType)
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
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimServerRef') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VimServerRef');
            $this->setVimServerRef($obj);
            if (!empty($namespace)) {
                $this->namespace['VimServerRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MoRef') {
            $sval = $child->nodeValue;
            $this->MoRef = $sval;
            if (!empty($namespace)) {
                $this->namespace['MoRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimObjectType') {
            $sval = $child->nodeValue;
            $this->VimObjectType = $sval;
            if (!empty($namespace)) {
                $this->namespace['VimObjectType'] = $namespace;
            }
        }
    }
}