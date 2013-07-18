<?php
class VMware_VCloud_API_OVF_VirtualSystemCollection_Type extends VMware_VCloud_API_OVF_Content_Type {
    protected $Content = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param string $id - [required] an attribute, 
    * @param VMware_VCloud_API_OVF_Msg_Type $Info - [required]
    * @param VMware_VCloud_API_OVF_Msg_Type $Name - [optional]
    * @param array $Section - [optional] an array of VMware_VCloud_API_OVF_Section_Type objects
    * @param array $Content - [optional] an array of VMware_VCloud_API_OVF_Content_Type objects
    */
    public function __construct($id=null, $Info=null, $Name=null, $Section=null, $Content=null) {
        parent::__construct($id, $Info, $Name, $Section);
        if (!is_null($Content)) {
            $this->Content = $Content;
        }
        $this->tagName = 'VirtualSystemCollection';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getContent() {
        return $this->Content;
    }
    public function setContent($Content) { 
        $this->Content = $Content;
    }
    public function addContent($value) { array_push($this->Content, $value); }
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
        if (isset($this->Content)) {
            foreach ($this->Content as $Content) {
                $tagName = $Content->get_tagName();
                if (empty($tagName)) {
                    $tagName = 'Content';
                }
                $out = $Content->export($tagName, $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Content) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Content') {
            $obj = new VMware_VCloud_API_OVF_Content_Type();
            $obj->build($child);
            $obj->set_tagName('Content');
            array_push($this->Content, $obj);
            if (!empty($namespace)) {
                $this->namespace['Content'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualSystem') {
            $obj = new VMware_VCloud_API_OVF_VirtualSystem_Type();
            $obj->build($child);
            $obj->set_tagName('VirtualSystem');
            array_push($this->Content, $obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualSystem'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualSystemCollection') {
            $obj = new VMware_VCloud_API_OVF_VirtualSystemCollection_Type();
            $obj->build($child);
            $obj->set_tagName('VirtualSystemCollection');
            array_push($this->Content, $obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualSystemCollection'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}