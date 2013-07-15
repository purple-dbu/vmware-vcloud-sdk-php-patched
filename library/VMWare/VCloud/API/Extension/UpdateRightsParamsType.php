<?php
class VMware_VCloud_API_Extension_UpdateRightsParamsType {
    protected $AddRight = array();
    protected $RemoveRight = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $AddRight - [optional] an array of VMware_VCloud_API_RightType objects
    * @param array $RemoveRight - [optional] an array of string
    */
    public function __construct($AddRight=null, $RemoveRight=null) {
        if (!is_null($AddRight)) {
            $this->AddRight = $AddRight;
        }
        if (!is_null($RemoveRight)) {
            $this->RemoveRight = $RemoveRight;
        }
        $this->tagName = 'UpdateRightsParams';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAddRight() {
        return $this->AddRight;
    }
    public function setAddRight($AddRight) { 
        $this->AddRight = $AddRight;
    }
    public function addAddRight($value) { array_push($this->AddRight, $value); }
    public function getRemoveRight() {
        return $this->RemoveRight;
    }
    public function setRemoveRight($RemoveRight) { 
        $this->RemoveRight = $RemoveRight;
    }
    public function addRemoveRight($value) { array_push($this->RemoveRight, $value); }
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
        if (isset($this->AddRight)) {
            foreach ($this->AddRight as $AddRight) {
                $out = $AddRight->export('AddRight', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->RemoveRight)) {
            foreach ($this->RemoveRight as $RemoveRight) {
                $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RemoveRight', self::$defaultNS, $namespace, $rootNS);
                $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RemoveRight>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($RemoveRight, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='RemoveRight')) . "</" . $ns . "RemoveRight>\n");
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->AddRight) ||
            !empty($this->RemoveRight)
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AddRight') {
            $obj = new VMware_VCloud_API_RightType();
            $obj->build($child);
            $obj->set_tagName('AddRight');
            array_push($this->AddRight, $obj);
            if (!empty($namespace)) {
                $this->namespace['AddRight'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RemoveRight') {
            $sval = $child->nodeValue;
            array_push($this->RemoveRight, $sval);
            if (!empty($namespace)) {
                $this->namespace['RemoveRight'] = $namespace;
            }
        }
    }
}