<?php
class VMware_VCloud_API_Extension_VxlanPoolType extends VMware_VCloud_API_Extension_VMWNetworkPoolType {
    protected $VimSwitchRef = null;
    protected $UsedNetworksCount = null;
    protected $PromiscuousMode = null;
    protected $VdsContexts = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param int $status - [optional] an attribute, 
    * @param VMware_VCloud_API_FilesListType $Files - [optional]
    * @param VMware_VCloud_API_Extension_VimObjectRefType $VimSwitchRef - [optional]
    * @param int $UsedNetworksCount - [optional] 
    * @param boolean $PromiscuousMode - [optional] 
    * @param array $VdsContexts - [optional] an array of VMware_VCloud_API_Extension_VdsContextType objects
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $Files=null, $VimSwitchRef=null, $UsedNetworksCount=null, $PromiscuousMode=null, $VdsContexts=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $status, $Files);
        $this->VimSwitchRef = $VimSwitchRef;
        $this->UsedNetworksCount = $UsedNetworksCount;
        $this->PromiscuousMode = $PromiscuousMode;
        if (!is_null($VdsContexts)) {
            $this->VdsContexts = $VdsContexts;
        }
        $this->tagName = 'VMWNetworkPool';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVimSwitchRef() {
        return $this->VimSwitchRef;
    }
    public function setVimSwitchRef($VimSwitchRef) { 
        $this->VimSwitchRef = $VimSwitchRef;
    }
    public function getUsedNetworksCount() {
        return $this->UsedNetworksCount;
    }
    public function setUsedNetworksCount($UsedNetworksCount) { 
        $this->UsedNetworksCount = $UsedNetworksCount;
    }
    public function getPromiscuousMode() {
        return $this->PromiscuousMode;
    }
    public function setPromiscuousMode($PromiscuousMode) { 
        $this->PromiscuousMode = $PromiscuousMode;
    }
    public function getVdsContexts() {
        return $this->VdsContexts;
    }
    public function setVdsContexts($VdsContexts) { 
        $this->VdsContexts = $VdsContexts;
    }
    public function addVdsContexts($value) { array_push($this->VdsContexts, $value); }
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
            if (0 >= strpos($namespacedef, 'xsi:type')) {
                $namespacedef = $namespacedef . " xsi:type='VxlanPoolType'";
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
        if (!is_null($this->VimSwitchRef)) {
            $out = $this->VimSwitchRef->export('VimSwitchRef', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->UsedNetworksCount)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UsedNetworksCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UsedNetworksCount>" . VMware_VCloud_API_Helper::format_integer($this->UsedNetworksCount, $input_name='UsedNetworksCount') . "</" . $ns . "UsedNetworksCount>\n");
        }
        if (!is_null($this->PromiscuousMode)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PromiscuousMode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PromiscuousMode>" . VMware_VCloud_API_Helper::format_boolean($this->PromiscuousMode, $input_name='PromiscuousMode') . "</" . $ns . "PromiscuousMode>\n");
        }
        if (isset($this->VdsContexts)) {
            foreach ($this->VdsContexts as $VdsContexts) {
                $out = $VdsContexts->export('VdsContexts', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VimSwitchRef) ||
            !is_null($this->UsedNetworksCount) ||
            !is_null($this->PromiscuousMode) ||
            !empty($this->VdsContexts) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimSwitchRef') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefType();
            $obj->build($child);
            $obj->set_tagName('VimSwitchRef');
            $this->setVimSwitchRef($obj);
            if (!empty($namespace)) {
                $this->namespace['VimSwitchRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UsedNetworksCount') {
            $sval = $child->nodeValue;
            $this->UsedNetworksCount = $sval;
            if (!empty($namespace)) {
                $this->namespace['UsedNetworksCount'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PromiscuousMode') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->PromiscuousMode = $sval;
            if (!empty($namespace)) {
                $this->namespace['PromiscuousMode'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VdsContexts') {
            $obj = new VMware_VCloud_API_Extension_VdsContextType();
            $obj->build($child);
            $obj->set_tagName('VdsContexts');
            array_push($this->VdsContexts, $obj);
            if (!empty($namespace)) {
                $this->namespace['VdsContexts'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}