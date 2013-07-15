<?php
class VMware_VCloud_API_NetworkAssignmentType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $containerNetwork = null;
    protected $innerNetwork = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $containerNetwork - [required] an attribute, 
    * @param string $innerNetwork - [required] an attribute, 
    */
    public function __construct($VCloudExtension=null, $containerNetwork=null, $innerNetwork=null) {
        parent::__construct($VCloudExtension);
        $this->containerNetwork = $containerNetwork;
        $this->innerNetwork = $innerNetwork;
        $this->tagName = 'NetworkAssignment';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_containerNetwork(){
        return $this->containerNetwork;
    }
    public function set_containerNetwork($containerNetwork) {
        $this->containerNetwork = $containerNetwork;
    }
    public function get_innerNetwork(){
        return $this->innerNetwork;
    }
    public function set_innerNetwork($innerNetwork) {
        $this->innerNetwork = $innerNetwork;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'containerNetwork', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'containerNetwork=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->containerNetwork, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='containerNetwork')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'innerNetwork', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'innerNetwork=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->innerNetwork, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='innerNetwork')));
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
        $ndcontainerNetwork = $attrs->getNamedItem('containerNetwork');
        if (!is_null($ndcontainerNetwork)) {
            $this->containerNetwork = $ndcontainerNetwork->value;
            if (isset($ndcontainerNetwork->prefix)) {
                $this->namespace['containerNetwork'] = $ndcontainerNetwork->prefix;
                $nsUri = $ndcontainerNetwork->lookupNamespaceURI($ndcontainerNetwork->prefix);
            }
            $node->removeAttributeNS($nsUri, 'containerNetwork');
        } else {
            $this->containerNetwork = null;
        }
        $ndinnerNetwork = $attrs->getNamedItem('innerNetwork');
        if (!is_null($ndinnerNetwork)) {
            $this->innerNetwork = $ndinnerNetwork->value;
            if (isset($ndinnerNetwork->prefix)) {
                $this->namespace['innerNetwork'] = $ndinnerNetwork->prefix;
                $nsUri = $ndinnerNetwork->lookupNamespaceURI($ndinnerNetwork->prefix);
            }
            $node->removeAttributeNS($nsUri, 'innerNetwork');
        } else {
            $this->innerNetwork = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}