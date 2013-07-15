<?php
class VMware_VCloud_API_GatewayConfigurationType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $BackwardCompatibilityMode = null;
    protected $GatewayBackingConfig = null;
    protected $GatewayInterfaces = null;
    protected $EdgeGatewayServiceConfiguration = null;
    protected $HaEnabled = null;
    protected $UseDefaultRouteForDnsRelay = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $BackwardCompatibilityMode - [optional] 
    * @param string $GatewayBackingConfig - [optional] 
    * @param VMware_VCloud_API_GatewayInterfacesType $GatewayInterfaces - [optional]
    * @param VMware_VCloud_API_GatewayFeaturesType $EdgeGatewayServiceConfiguration - [optional]
    * @param boolean $HaEnabled - [optional] 
    * @param boolean $UseDefaultRouteForDnsRelay - [optional] 
    */
    public function __construct($VCloudExtension=null, $BackwardCompatibilityMode=null, $GatewayBackingConfig=null, $GatewayInterfaces=null, $EdgeGatewayServiceConfiguration=null, $HaEnabled=null, $UseDefaultRouteForDnsRelay=null) {
        parent::__construct($VCloudExtension);
        $this->BackwardCompatibilityMode = $BackwardCompatibilityMode;
        $this->GatewayBackingConfig = $GatewayBackingConfig;
        $this->GatewayInterfaces = $GatewayInterfaces;
        $this->EdgeGatewayServiceConfiguration = $EdgeGatewayServiceConfiguration;
        $this->HaEnabled = $HaEnabled;
        $this->UseDefaultRouteForDnsRelay = $UseDefaultRouteForDnsRelay;
        $this->tagName = 'Configuration';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getBackwardCompatibilityMode() {
        return $this->BackwardCompatibilityMode;
    }
    public function setBackwardCompatibilityMode($BackwardCompatibilityMode) { 
        $this->BackwardCompatibilityMode = $BackwardCompatibilityMode;
    }
    public function getGatewayBackingConfig() {
        return $this->GatewayBackingConfig;
    }
    public function setGatewayBackingConfig($GatewayBackingConfig) { 
        $this->GatewayBackingConfig = $GatewayBackingConfig;
    }
    public function getGatewayInterfaces() {
        return $this->GatewayInterfaces;
    }
    public function setGatewayInterfaces($GatewayInterfaces) { 
        $this->GatewayInterfaces = $GatewayInterfaces;
    }
    public function getEdgeGatewayServiceConfiguration() {
        return $this->EdgeGatewayServiceConfiguration;
    }
    public function setEdgeGatewayServiceConfiguration($EdgeGatewayServiceConfiguration) { 
        $this->EdgeGatewayServiceConfiguration = $EdgeGatewayServiceConfiguration;
    }
    public function getHaEnabled() {
        return $this->HaEnabled;
    }
    public function setHaEnabled($HaEnabled) { 
        $this->HaEnabled = $HaEnabled;
    }
    public function getUseDefaultRouteForDnsRelay() {
        return $this->UseDefaultRouteForDnsRelay;
    }
    public function setUseDefaultRouteForDnsRelay($UseDefaultRouteForDnsRelay) { 
        $this->UseDefaultRouteForDnsRelay = $UseDefaultRouteForDnsRelay;
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
        if (!is_null($this->BackwardCompatibilityMode)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'BackwardCompatibilityMode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "BackwardCompatibilityMode>" . VMware_VCloud_API_Helper::format_boolean($this->BackwardCompatibilityMode, $input_name='BackwardCompatibilityMode') . "</" . $ns . "BackwardCompatibilityMode>\n");
        }
        if (!is_null($this->GatewayBackingConfig)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'GatewayBackingConfig', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "GatewayBackingConfig>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->GatewayBackingConfig, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='GatewayBackingConfig')) . "</" . $ns . "GatewayBackingConfig>\n");
        }
        if (!is_null($this->GatewayInterfaces)) {
            $out = $this->GatewayInterfaces->export('GatewayInterfaces', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->EdgeGatewayServiceConfiguration)) {
            $out = $this->EdgeGatewayServiceConfiguration->export('EdgeGatewayServiceConfiguration', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->HaEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HaEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HaEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->HaEnabled, $input_name='HaEnabled') . "</" . $ns . "HaEnabled>\n");
        }
        if (!is_null($this->UseDefaultRouteForDnsRelay)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UseDefaultRouteForDnsRelay', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UseDefaultRouteForDnsRelay>" . VMware_VCloud_API_Helper::format_boolean($this->UseDefaultRouteForDnsRelay, $input_name='UseDefaultRouteForDnsRelay') . "</" . $ns . "UseDefaultRouteForDnsRelay>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->BackwardCompatibilityMode) ||
            !is_null($this->GatewayBackingConfig) ||
            !is_null($this->GatewayInterfaces) ||
            !is_null($this->EdgeGatewayServiceConfiguration) ||
            !is_null($this->HaEnabled) ||
            !is_null($this->UseDefaultRouteForDnsRelay) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BackwardCompatibilityMode') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->BackwardCompatibilityMode = $sval;
            if (!empty($namespace)) {
                $this->namespace['BackwardCompatibilityMode'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GatewayBackingConfig') {
            $sval = $child->nodeValue;
            $this->GatewayBackingConfig = $sval;
            if (!empty($namespace)) {
                $this->namespace['GatewayBackingConfig'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GatewayInterfaces') {
            $obj = new VMware_VCloud_API_GatewayInterfacesType();
            $obj->build($child);
            $obj->set_tagName('GatewayInterfaces');
            $this->setGatewayInterfaces($obj);
            if (!empty($namespace)) {
                $this->namespace['GatewayInterfaces'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EdgeGatewayServiceConfiguration') {
            $obj = new VMware_VCloud_API_GatewayFeaturesType();
            $obj->build($child);
            $obj->set_tagName('EdgeGatewayServiceConfiguration');
            $this->setEdgeGatewayServiceConfiguration($obj);
            if (!empty($namespace)) {
                $this->namespace['EdgeGatewayServiceConfiguration'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HaEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->HaEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['HaEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UseDefaultRouteForDnsRelay') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->UseDefaultRouteForDnsRelay = $sval;
            if (!empty($namespace)) {
                $this->namespace['UseDefaultRouteForDnsRelay'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}