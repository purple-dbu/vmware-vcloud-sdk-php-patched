<?php
class VMware_VCloud_API_Extension_CbmDataType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $VimServer = null;
    protected $BackingRef = null;
    protected $BackingRefType = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param VMware_VCloud_API_ReferenceType $VimServer - [optional]
    * @param string $BackingRef - [optional] 
    * @param string $BackingRefType - [optional] 
    */
    public function __construct($VCloudExtension=null, $VimServer=null, $BackingRef=null, $BackingRefType=null) {
        parent::__construct($VCloudExtension);
        $this->VimServer = $VimServer;
        $this->BackingRef = $BackingRef;
        $this->BackingRefType = $BackingRefType;
        $this->tagName = 'CbmData';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVimServer() {
        return $this->VimServer;
    }
    public function setVimServer($VimServer) { 
        $this->VimServer = $VimServer;
    }
    public function getBackingRef() {
        return $this->BackingRef;
    }
    public function setBackingRef($BackingRef) { 
        $this->BackingRef = $BackingRef;
    }
    public function getBackingRefType() {
        return $this->BackingRefType;
    }
    public function setBackingRefType($BackingRefType) { 
        $this->BackingRefType = $BackingRefType;
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->VimServer)) {
            $out = $this->VimServer->export('VimServer', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->BackingRef)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'BackingRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "BackingRef>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->BackingRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='BackingRef')) . "</" . $ns . "BackingRef>\n");
        }
        if (!is_null($this->BackingRefType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'BackingRefType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "BackingRefType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->BackingRefType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='BackingRefType')) . "</" . $ns . "BackingRefType>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VimServer) ||
            !is_null($this->BackingRef) ||
            !is_null($this->BackingRefType) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimServer') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VimServer');
            $this->setVimServer($obj);
            if (!empty($namespace)) {
                $this->namespace['VimServer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BackingRef') {
            $sval = $child->nodeValue;
            $this->BackingRef = $sval;
            if (!empty($namespace)) {
                $this->namespace['BackingRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BackingRefType') {
            $sval = $child->nodeValue;
            $this->BackingRefType = $sval;
            if (!empty($namespace)) {
                $this->namespace['BackingRefType'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}