<?php
class VMware_VCloud_API_Extension_VmVimInfoType {
    protected $VmVimObjectRef = null;
    protected $DatastoreVimObjectRef = null;
    protected $HostVimObjectRef = null;
    protected $VirtualDisksMaxChainLength = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param VMware_VCloud_API_Extension_VimObjectRefType $VmVimObjectRef - [required]
    * @param VMware_VCloud_API_Extension_VimObjectRefType $DatastoreVimObjectRef - [required]
    * @param VMware_VCloud_API_Extension_VimObjectRefType $HostVimObjectRef - [required]
    * @param int $VirtualDisksMaxChainLength - [required] 
    */
    public function __construct($VmVimObjectRef=null, $DatastoreVimObjectRef=null, $HostVimObjectRef=null, $VirtualDisksMaxChainLength=null) {
        $this->VmVimObjectRef = $VmVimObjectRef;
        $this->DatastoreVimObjectRef = $DatastoreVimObjectRef;
        $this->HostVimObjectRef = $HostVimObjectRef;
        $this->VirtualDisksMaxChainLength = $VirtualDisksMaxChainLength;
        $this->tagName = 'VmVimInfo';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVmVimObjectRef() {
        return $this->VmVimObjectRef;
    }
    public function setVmVimObjectRef($VmVimObjectRef) { 
        $this->VmVimObjectRef = $VmVimObjectRef;
    }
    public function getDatastoreVimObjectRef() {
        return $this->DatastoreVimObjectRef;
    }
    public function setDatastoreVimObjectRef($DatastoreVimObjectRef) { 
        $this->DatastoreVimObjectRef = $DatastoreVimObjectRef;
    }
    public function getHostVimObjectRef() {
        return $this->HostVimObjectRef;
    }
    public function setHostVimObjectRef($HostVimObjectRef) { 
        $this->HostVimObjectRef = $HostVimObjectRef;
    }
    public function getVirtualDisksMaxChainLength() {
        return $this->VirtualDisksMaxChainLength;
    }
    public function setVirtualDisksMaxChainLength($VirtualDisksMaxChainLength) { 
        $this->VirtualDisksMaxChainLength = $VirtualDisksMaxChainLength;
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
        if (!is_null($this->VmVimObjectRef)) {
            $out = $this->VmVimObjectRef->export('VmVimObjectRef', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->DatastoreVimObjectRef)) {
            $out = $this->DatastoreVimObjectRef->export('DatastoreVimObjectRef', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->HostVimObjectRef)) {
            $out = $this->HostVimObjectRef->export('HostVimObjectRef', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VirtualDisksMaxChainLength)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VirtualDisksMaxChainLength', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VirtualDisksMaxChainLength>" . VMware_VCloud_API_Helper::format_integer($this->VirtualDisksMaxChainLength, $input_name='VirtualDisksMaxChainLength') . "</" . $ns . "VirtualDisksMaxChainLength>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VmVimObjectRef) ||
            !is_null($this->DatastoreVimObjectRef) ||
            !is_null($this->HostVimObjectRef) ||
            !is_null($this->VirtualDisksMaxChainLength)
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmVimObjectRef') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefType();
            $obj->build($child);
            $obj->set_tagName('VmVimObjectRef');
            $this->setVmVimObjectRef($obj);
            if (!empty($namespace)) {
                $this->namespace['VmVimObjectRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DatastoreVimObjectRef') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefType();
            $obj->build($child);
            $obj->set_tagName('DatastoreVimObjectRef');
            $this->setDatastoreVimObjectRef($obj);
            if (!empty($namespace)) {
                $this->namespace['DatastoreVimObjectRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostVimObjectRef') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefType();
            $obj->build($child);
            $obj->set_tagName('HostVimObjectRef');
            $this->setHostVimObjectRef($obj);
            if (!empty($namespace)) {
                $this->namespace['HostVimObjectRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualDisksMaxChainLength') {
            $sval = $child->nodeValue;
            $this->VirtualDisksMaxChainLength = $sval;
            if (!empty($namespace)) {
                $this->namespace['VirtualDisksMaxChainLength'] = $namespace;
            }
        }
    }
}