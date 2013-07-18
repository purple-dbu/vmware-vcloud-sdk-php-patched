<?php
class VMware_VCloud_API_Extension_VmObjectRefsListType {
    protected $numberOfPages = null;
    protected $page = null;
    protected $VmObjectRef = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param int $numberOfPages - [optional] an attribute, 
    * @param int $page - [optional] an attribute, 
    * @param array $VmObjectRef - [optional] an array of VMware_VCloud_API_Extension_VmObjectRefType objects
    */
    public function __construct($numberOfPages=null, $page=null, $VmObjectRef=null) {
        $this->numberOfPages = $numberOfPages;
        $this->page = $page;
        if (!is_null($VmObjectRef)) {
            $this->VmObjectRef = $VmObjectRef;
        }
        $this->tagName = 'VmObjectRefsList';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVmObjectRef() {
        return $this->VmObjectRef;
    }
    public function setVmObjectRef($VmObjectRef) { 
        $this->VmObjectRef = $VmObjectRef;
    }
    public function addVmObjectRef($value) { array_push($this->VmObjectRef, $value); }
    public function get_numberOfPages(){
        return $this->numberOfPages;
    }
    public function set_numberOfPages($numberOfPages) {
        $this->numberOfPages = $numberOfPages;
    }
    public function get_page(){
        return $this->page;
    }
    public function set_page($page) {
        $this->page = $page;
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
        if (!is_null($this->numberOfPages)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfPages', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfPages=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfPages, $input_name='numberOfPages')));
        }
        if (!is_null($this->page)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'page', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'page=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->page, $input_name='page')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (isset($this->VmObjectRef)) {
            foreach ($this->VmObjectRef as $VmObjectRef) {
                $out = $VmObjectRef->export('VmObjectRef', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->VmObjectRef)
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
        $ndnumberOfPages = $attrs->getNamedItem('numberOfPages');
        if (!is_null($ndnumberOfPages)) {
            $this->numberOfPages = sprintf('%d', $ndnumberOfPages->value);
            if (isset($ndnumberOfPages->prefix)) {
                $this->namespace['numberOfPages'] = $ndnumberOfPages->prefix;
                $nsUri = $ndnumberOfPages->lookupNamespaceURI($ndnumberOfPages->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfPages');
        } else {
            $this->numberOfPages = null;
        }
        $ndpage = $attrs->getNamedItem('page');
        if (!is_null($ndpage)) {
            $this->page = sprintf('%d', $ndpage->value);
            if (isset($ndpage->prefix)) {
                $this->namespace['page'] = $ndpage->prefix;
                $nsUri = $ndpage->lookupNamespaceURI($ndpage->prefix);
            }
            $node->removeAttributeNS($nsUri, 'page');
        } else {
            $this->page = null;
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmObjectRef') {
            $obj = new VMware_VCloud_API_Extension_VmObjectRefType();
            $obj->build($child);
            $obj->set_tagName('VmObjectRef');
            array_push($this->VmObjectRef, $obj);
            if (!empty($namespace)) {
                $this->namespace['VmObjectRef'] = $namespace;
            }
        }
    }
}