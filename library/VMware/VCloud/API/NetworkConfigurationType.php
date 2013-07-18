<?php
class VMware_VCloud_API_NetworkConfigurationType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $BackwardCompatibilityMode = null;
    protected $IpScope = null;
    protected $IpScopes = null;
    protected $ParentNetwork = null;
    protected $FenceMode = null;
    protected $RetainNetInfoAcrossDeployments = null;
    protected $Features = null;
    protected $SyslogServerSettings = null;
    protected $RouterInfo = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $BackwardCompatibilityMode - [optional] 
    * @param VMware_VCloud_API_IpScopeType $IpScope - [optional]
    * @param VMware_VCloud_API_IpScopesType $IpScopes - [optional]
    * @param VMware_VCloud_API_ReferenceType $ParentNetwork - [optional]
    * @param string $FenceMode - [required] 
    * @param boolean $RetainNetInfoAcrossDeployments - [optional] 
    * @param VMware_VCloud_API_NetworkFeaturesType $Features - [optional]
    * @param VMware_VCloud_API_SyslogServerSettingsType $SyslogServerSettings - [optional]
    * @param VMware_VCloud_API_RouterInfoType $RouterInfo - [optional]
    */
    public function __construct($VCloudExtension=null, $BackwardCompatibilityMode=null, $IpScope=null, $IpScopes=null, $ParentNetwork=null, $FenceMode=null, $RetainNetInfoAcrossDeployments=null, $Features=null, $SyslogServerSettings=null, $RouterInfo=null) {
        parent::__construct($VCloudExtension);
        $this->BackwardCompatibilityMode = $BackwardCompatibilityMode;
        $this->IpScope = $IpScope;
        $this->IpScopes = $IpScopes;
        $this->ParentNetwork = $ParentNetwork;
        $this->FenceMode = $FenceMode;
        $this->RetainNetInfoAcrossDeployments = $RetainNetInfoAcrossDeployments;
        $this->Features = $Features;
        $this->SyslogServerSettings = $SyslogServerSettings;
        $this->RouterInfo = $RouterInfo;
        $this->tagName = 'Configuration';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getBackwardCompatibilityMode() {
        return $this->BackwardCompatibilityMode;
    }
    public function setBackwardCompatibilityMode($BackwardCompatibilityMode) { 
        $this->BackwardCompatibilityMode = $BackwardCompatibilityMode;
    }
    public function getIpScope() {
        return $this->IpScope;
    }
    public function setIpScope($IpScope) { 
        $this->IpScope = $IpScope;
    }
    public function getIpScopes() {
        return $this->IpScopes;
    }
    public function setIpScopes($IpScopes) { 
        $this->IpScopes = $IpScopes;
    }
    public function getParentNetwork() {
        return $this->ParentNetwork;
    }
    public function setParentNetwork($ParentNetwork) { 
        $this->ParentNetwork = $ParentNetwork;
    }
    public function getFenceMode() {
        return $this->FenceMode;
    }
    public function setFenceMode($FenceMode) { 
        $this->FenceMode = $FenceMode;
    }
    public function getRetainNetInfoAcrossDeployments() {
        return $this->RetainNetInfoAcrossDeployments;
    }
    public function setRetainNetInfoAcrossDeployments($RetainNetInfoAcrossDeployments) { 
        $this->RetainNetInfoAcrossDeployments = $RetainNetInfoAcrossDeployments;
    }
    public function getFeatures() {
        return $this->Features;
    }
    public function setFeatures($Features) { 
        $this->Features = $Features;
    }
    public function getSyslogServerSettings() {
        return $this->SyslogServerSettings;
    }
    public function setSyslogServerSettings($SyslogServerSettings) { 
        $this->SyslogServerSettings = $SyslogServerSettings;
    }
    public function getRouterInfo() {
        return $this->RouterInfo;
    }
    public function setRouterInfo($RouterInfo) { 
        $this->RouterInfo = $RouterInfo;
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
        if (!is_null($this->IpScope)) {
            $out = $this->IpScope->export('IpScope', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->IpScopes)) {
            $out = $this->IpScopes->export('IpScopes', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ParentNetwork)) {
            $out = $this->ParentNetwork->export('ParentNetwork', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->FenceMode)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'FenceMode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "FenceMode>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->FenceMode, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='FenceMode')) . "</" . $ns . "FenceMode>\n");
        }
        if (!is_null($this->RetainNetInfoAcrossDeployments)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RetainNetInfoAcrossDeployments', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RetainNetInfoAcrossDeployments>" . VMware_VCloud_API_Helper::format_boolean($this->RetainNetInfoAcrossDeployments, $input_name='RetainNetInfoAcrossDeployments') . "</" . $ns . "RetainNetInfoAcrossDeployments>\n");
        }
        if (!is_null($this->Features)) {
            $out = $this->Features->export('Features', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->SyslogServerSettings)) {
            $out = $this->SyslogServerSettings->export('SyslogServerSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->RouterInfo)) {
            $out = $this->RouterInfo->export('RouterInfo', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->BackwardCompatibilityMode) ||
            !is_null($this->IpScope) ||
            !is_null($this->IpScopes) ||
            !is_null($this->ParentNetwork) ||
            !is_null($this->FenceMode) ||
            !is_null($this->RetainNetInfoAcrossDeployments) ||
            !is_null($this->Features) ||
            !is_null($this->SyslogServerSettings) ||
            !is_null($this->RouterInfo) ||
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpScope') {
            $obj = new VMware_VCloud_API_IpScopeType();
            $obj->build($child);
            $obj->set_tagName('IpScope');
            $this->setIpScope($obj);
            if (!empty($namespace)) {
                $this->namespace['IpScope'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpScopes') {
            $obj = new VMware_VCloud_API_IpScopesType();
            $obj->build($child);
            $obj->set_tagName('IpScopes');
            $this->setIpScopes($obj);
            if (!empty($namespace)) {
                $this->namespace['IpScopes'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ParentNetwork') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ParentNetwork');
            $this->setParentNetwork($obj);
            if (!empty($namespace)) {
                $this->namespace['ParentNetwork'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FenceMode') {
            $sval = $child->nodeValue;
            $this->FenceMode = $sval;
            if (!empty($namespace)) {
                $this->namespace['FenceMode'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RetainNetInfoAcrossDeployments') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->RetainNetInfoAcrossDeployments = $sval;
            if (!empty($namespace)) {
                $this->namespace['RetainNetInfoAcrossDeployments'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Features') {
            $obj = new VMware_VCloud_API_NetworkFeaturesType();
            $obj->build($child);
            $obj->set_tagName('Features');
            $this->setFeatures($obj);
            if (!empty($namespace)) {
                $this->namespace['Features'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SyslogServerSettings') {
            $obj = new VMware_VCloud_API_SyslogServerSettingsType();
            $obj->build($child);
            $obj->set_tagName('SyslogServerSettings');
            $this->setSyslogServerSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['SyslogServerSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RouterInfo') {
            $obj = new VMware_VCloud_API_RouterInfoType();
            $obj->build($child);
            $obj->set_tagName('RouterInfo');
            $this->setRouterInfo($obj);
            if (!empty($namespace)) {
                $this->namespace['RouterInfo'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}