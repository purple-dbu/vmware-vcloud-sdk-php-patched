<?php
class VMware_VCloud_API_Extension_LicensingManagedServerType {
    protected $cpu = null;
    protected $memoryInstalled = null;
    protected $VimObjectRef = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param int $cpu - [required] an attribute, 
    * @param int $memoryInstalled - [required] an attribute, 
    * @param VMware_VCloud_API_Extension_VimObjectRefType $VimObjectRef - [required]
    */
    public function __construct($cpu=null, $memoryInstalled=null, $VimObjectRef=null) {
        $this->cpu = $cpu;
        $this->memoryInstalled = $memoryInstalled;
        $this->VimObjectRef = $VimObjectRef;
        $this->tagName = 'ManagedServer';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVimObjectRef() {
        return $this->VimObjectRef;
    }
    public function setVimObjectRef($VimObjectRef) { 
        $this->VimObjectRef = $VimObjectRef;
    }
    public function get_cpu(){
        return $this->cpu;
    }
    public function set_cpu($cpu) {
        $this->cpu = $cpu;
    }
    public function get_memoryInstalled(){
        return $this->memoryInstalled;
    }
    public function set_memoryInstalled($memoryInstalled) {
        $this->memoryInstalled = $memoryInstalled;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpu', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpu=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpu, $input_name='cpu')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryInstalled', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryInstalled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryInstalled, $input_name='memoryInstalled')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->VimObjectRef)) {
            $out = $this->VimObjectRef->export('VimObjectRef', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VimObjectRef)
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
        $ndcpu = $attrs->getNamedItem('cpu');
        if (!is_null($ndcpu)) {
            $this->cpu = sprintf('%d', $ndcpu->value);
            if (isset($ndcpu->prefix)) {
                $this->namespace['cpu'] = $ndcpu->prefix;
                $nsUri = $ndcpu->lookupNamespaceURI($ndcpu->prefix);
            }
            $node->removeAttributeNS($nsUri, 'cpu');
        } else {
            $this->cpu = null;
        }
        $ndmemoryInstalled = $attrs->getNamedItem('memoryInstalled');
        if (!is_null($ndmemoryInstalled)) {
            $this->memoryInstalled = sprintf('%d', $ndmemoryInstalled->value);
            if (isset($ndmemoryInstalled->prefix)) {
                $this->namespace['memoryInstalled'] = $ndmemoryInstalled->prefix;
                $nsUri = $ndmemoryInstalled->lookupNamespaceURI($ndmemoryInstalled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryInstalled');
        } else {
            $this->memoryInstalled = null;
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimObjectRef') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefType();
            $obj->build($child);
            $obj->set_tagName('VimObjectRef');
            $this->setVimObjectRef($obj);
            if (!empty($namespace)) {
                $this->namespace['VimObjectRef'] = $namespace;
            }
        }
    }
}