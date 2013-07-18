<?php
class VMware_VCloud_API_StaticRouteType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Name = null;
    protected $Network = null;
    protected $NextHopIp = null;
    protected $Interface = null;
    protected $GatewayInterface = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Name - [required] 
    * @param string $Network - [required] 
    * @param string $NextHopIp - [required] 
    * @param string $Interface - [optional] 
    * @param VMware_VCloud_API_ReferenceType $GatewayInterface - [optional]
    */
    public function __construct($VCloudExtension=null, $Name=null, $Network=null, $NextHopIp=null, $Interface=null, $GatewayInterface=null) {
        parent::__construct($VCloudExtension);
        $this->Name = $Name;
        $this->Network = $Network;
        $this->NextHopIp = $NextHopIp;
        $this->Interface = $Interface;
        $this->GatewayInterface = $GatewayInterface;
        $this->tagName = 'StaticRoute';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) { 
        $this->Name = $Name;
    }
    public function getNetwork() {
        return $this->Network;
    }
    public function setNetwork($Network) { 
        $this->Network = $Network;
    }
    public function getNextHopIp() {
        return $this->NextHopIp;
    }
    public function setNextHopIp($NextHopIp) { 
        $this->NextHopIp = $NextHopIp;
    }
    public function getInterface() {
        return $this->Interface;
    }
    public function setInterface($Interface) { 
        $this->Interface = $Interface;
    }
    public function getGatewayInterface() {
        return $this->GatewayInterface;
    }
    public function setGatewayInterface($GatewayInterface) { 
        $this->GatewayInterface = $GatewayInterface;
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
        if (!is_null($this->Name)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Name>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Name')) . "</" . $ns . "Name>\n");
        }
        if (!is_null($this->Network)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Network', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Network>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Network, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Network')) . "</" . $ns . "Network>\n");
        }
        if (!is_null($this->NextHopIp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'NextHopIp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "NextHopIp>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->NextHopIp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='NextHopIp')) . "</" . $ns . "NextHopIp>\n");
        }
        if (!is_null($this->Interface)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Interface', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Interface>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Interface, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Interface')) . "</" . $ns . "Interface>\n");
        }
        if (!is_null($this->GatewayInterface)) {
            $out = $this->GatewayInterface->export('GatewayInterface', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Name) ||
            !is_null($this->Network) ||
            !is_null($this->NextHopIp) ||
            !is_null($this->Interface) ||
            !is_null($this->GatewayInterface) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Name') {
            $sval = $child->nodeValue;
            $this->Name = $sval;
            if (!empty($namespace)) {
                $this->namespace['Name'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Network') {
            $sval = $child->nodeValue;
            $this->Network = $sval;
            if (!empty($namespace)) {
                $this->namespace['Network'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NextHopIp') {
            $sval = $child->nodeValue;
            $this->NextHopIp = $sval;
            if (!empty($namespace)) {
                $this->namespace['NextHopIp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Interface') {
            $sval = $child->nodeValue;
            $this->Interface = $sval;
            if (!empty($namespace)) {
                $this->namespace['Interface'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GatewayInterface') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('GatewayInterface');
            $this->setGatewayInterface($obj);
            if (!empty($namespace)) {
                $this->namespace['GatewayInterface'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}