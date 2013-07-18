<?php
class VMware_VCloud_API_NatRuleType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Description = null;
    protected $RuleType = null;
    protected $IsEnabled = null;
    protected $Id = null;
    protected $GatewayNatRule = null;
    protected $OneToOneBasicRule = null;
    protected $OneToOneVmRule = null;
    protected $PortForwardingRule = null;
    protected $VmRule = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Description - [optional] 
    * @param string $RuleType - [optional] 
    * @param boolean $IsEnabled - [optional] 
    * @param int $Id - [optional] 
    * @param VMware_VCloud_API_GatewayNatRuleType $GatewayNatRule - [required]
    * @param VMware_VCloud_API_NatOneToOneBasicRuleType $OneToOneBasicRule - [required]
    * @param VMware_VCloud_API_NatOneToOneVmRuleType $OneToOneVmRule - [required]
    * @param VMware_VCloud_API_NatPortForwardingRuleType $PortForwardingRule - [required]
    * @param VMware_VCloud_API_NatVmRuleType $VmRule - [required]
    */
    public function __construct($VCloudExtension=null, $Description=null, $RuleType=null, $IsEnabled=null, $Id=null, $GatewayNatRule=null, $OneToOneBasicRule=null, $OneToOneVmRule=null, $PortForwardingRule=null, $VmRule=null) {
        parent::__construct($VCloudExtension);
        $this->Description = $Description;
        $this->RuleType = $RuleType;
        $this->IsEnabled = $IsEnabled;
        $this->Id = $Id;
        $this->GatewayNatRule = $GatewayNatRule;
        $this->OneToOneBasicRule = $OneToOneBasicRule;
        $this->OneToOneVmRule = $OneToOneVmRule;
        $this->PortForwardingRule = $PortForwardingRule;
        $this->VmRule = $VmRule;
        $this->tagName = 'NatRule';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function getRuleType() {
        return $this->RuleType;
    }
    public function setRuleType($RuleType) { 
        $this->RuleType = $RuleType;
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getId() {
        return $this->Id;
    }
    public function setId($Id) { 
        $this->Id = $Id;
    }
    public function getGatewayNatRule() {
        return $this->GatewayNatRule;
    }
    public function setGatewayNatRule($GatewayNatRule) { 
        $this->GatewayNatRule = $GatewayNatRule;
    }
    public function getOneToOneBasicRule() {
        return $this->OneToOneBasicRule;
    }
    public function setOneToOneBasicRule($OneToOneBasicRule) { 
        $this->OneToOneBasicRule = $OneToOneBasicRule;
    }
    public function getOneToOneVmRule() {
        return $this->OneToOneVmRule;
    }
    public function setOneToOneVmRule($OneToOneVmRule) { 
        $this->OneToOneVmRule = $OneToOneVmRule;
    }
    public function getPortForwardingRule() {
        return $this->PortForwardingRule;
    }
    public function setPortForwardingRule($PortForwardingRule) { 
        $this->PortForwardingRule = $PortForwardingRule;
    }
    public function getVmRule() {
        return $this->VmRule;
    }
    public function setVmRule($VmRule) { 
        $this->VmRule = $VmRule;
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
        if (!is_null($this->Description)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Description', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Description>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Description, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Description')) . "</" . $ns . "Description>\n");
        }
        if (!is_null($this->RuleType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RuleType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RuleType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->RuleType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='RuleType')) . "</" . $ns . "RuleType>\n");
        }
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (!is_null($this->Id)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Id', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Id>" . VMware_VCloud_API_Helper::format_integer($this->Id, $input_name='Id') . "</" . $ns . "Id>\n");
        }
        if (!is_null($this->GatewayNatRule)) {
            $out = $this->GatewayNatRule->export('GatewayNatRule', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OneToOneBasicRule)) {
            $out = $this->OneToOneBasicRule->export('OneToOneBasicRule', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OneToOneVmRule)) {
            $out = $this->OneToOneVmRule->export('OneToOneVmRule', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->PortForwardingRule)) {
            $out = $this->PortForwardingRule->export('PortForwardingRule', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VmRule)) {
            $out = $this->VmRule->export('VmRule', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Description) ||
            !is_null($this->RuleType) ||
            !is_null($this->IsEnabled) ||
            !is_null($this->Id) ||
            !is_null($this->GatewayNatRule) ||
            !is_null($this->OneToOneBasicRule) ||
            !is_null($this->OneToOneVmRule) ||
            !is_null($this->PortForwardingRule) ||
            !is_null($this->VmRule) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $sval = $child->nodeValue;
            $this->Description = $sval;
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RuleType') {
            $sval = $child->nodeValue;
            $this->RuleType = $sval;
            if (!empty($namespace)) {
                $this->namespace['RuleType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Id') {
            $sval = $child->nodeValue;
            $this->Id = $sval;
            if (!empty($namespace)) {
                $this->namespace['Id'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GatewayNatRule') {
            $obj = new VMware_VCloud_API_GatewayNatRuleType();
            $obj->build($child);
            $obj->set_tagName('GatewayNatRule');
            $this->setGatewayNatRule($obj);
            if (!empty($namespace)) {
                $this->namespace['GatewayNatRule'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OneToOneBasicRule') {
            $obj = new VMware_VCloud_API_NatOneToOneBasicRuleType();
            $obj->build($child);
            $obj->set_tagName('OneToOneBasicRule');
            $this->setOneToOneBasicRule($obj);
            if (!empty($namespace)) {
                $this->namespace['OneToOneBasicRule'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OneToOneVmRule') {
            $obj = new VMware_VCloud_API_NatOneToOneVmRuleType();
            $obj->build($child);
            $obj->set_tagName('OneToOneVmRule');
            $this->setOneToOneVmRule($obj);
            if (!empty($namespace)) {
                $this->namespace['OneToOneVmRule'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PortForwardingRule') {
            $obj = new VMware_VCloud_API_NatPortForwardingRuleType();
            $obj->build($child);
            $obj->set_tagName('PortForwardingRule');
            $this->setPortForwardingRule($obj);
            if (!empty($namespace)) {
                $this->namespace['PortForwardingRule'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmRule') {
            $obj = new VMware_VCloud_API_NatVmRuleType();
            $obj->build($child);
            $obj->set_tagName('VmRule');
            $this->setVmRule($obj);
            if (!empty($namespace)) {
                $this->namespace['VmRule'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}