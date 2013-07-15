<?php
class VMware_VCloud_API_FirewallRuleType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Id = null;
    protected $IsEnabled = null;
    protected $MatchOnTranslate = null;
    protected $Description = null;
    protected $Policy = null;
    protected $Protocols = null;
    protected $IcmpSubType = null;
    protected $Port = null;
    protected $DestinationPortRange = null;
    protected $DestinationIp = null;
    protected $DestinationVm = null;
    protected $SourcePort = null;
    protected $SourcePortRange = null;
    protected $SourceIp = null;
    protected $SourceVm = null;
    protected $Direction = null;
    protected $EnableLogging = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Id - [optional] 
    * @param boolean $IsEnabled - [optional] 
    * @param boolean $MatchOnTranslate - [optional] 
    * @param string $Description - [optional] 
    * @param string $Policy - [optional] 
    * @param VMware_VCloud_API_Protocols $Protocols - [optional]
    * @param string $IcmpSubType - [optional] 
    * @param int $Port - [optional] 
    * @param string $DestinationPortRange - [optional] 
    * @param string $DestinationIp - [required] 
    * @param VMware_VCloud_API_VmSelectionType $DestinationVm - [required]
    * @param int $SourcePort - [optional] 
    * @param string $SourcePortRange - [optional] 
    * @param string $SourceIp - [required] 
    * @param VMware_VCloud_API_VmSelectionType $SourceVm - [required]
    * @param string $Direction - [optional] 
    * @param boolean $EnableLogging - [optional] 
    */
    public function __construct($VCloudExtension=null, $Id=null, $IsEnabled=null, $MatchOnTranslate=null, $Description=null, $Policy=null, $Protocols=null, $IcmpSubType=null, $Port=null, $DestinationPortRange=null, $DestinationIp=null, $DestinationVm=null, $SourcePort=null, $SourcePortRange=null, $SourceIp=null, $SourceVm=null, $Direction=null, $EnableLogging=null) {
        parent::__construct($VCloudExtension);
        $this->Id = $Id;
        $this->IsEnabled = $IsEnabled;
        $this->MatchOnTranslate = $MatchOnTranslate;
        $this->Description = $Description;
        $this->Policy = $Policy;
        $this->Protocols = $Protocols;
        $this->IcmpSubType = $IcmpSubType;
        $this->Port = $Port;
        $this->DestinationPortRange = $DestinationPortRange;
        $this->DestinationIp = $DestinationIp;
        $this->DestinationVm = $DestinationVm;
        $this->SourcePort = $SourcePort;
        $this->SourcePortRange = $SourcePortRange;
        $this->SourceIp = $SourceIp;
        $this->SourceVm = $SourceVm;
        $this->Direction = $Direction;
        $this->EnableLogging = $EnableLogging;
        $this->tagName = 'FirewallRule';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getId() {
        return $this->Id;
    }
    public function setId($Id) { 
        $this->Id = $Id;
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getMatchOnTranslate() {
        return $this->MatchOnTranslate;
    }
    public function setMatchOnTranslate($MatchOnTranslate) { 
        $this->MatchOnTranslate = $MatchOnTranslate;
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function getPolicy() {
        return $this->Policy;
    }
    public function setPolicy($Policy) { 
        $this->Policy = $Policy;
    }
    public function getProtocols() {
        return $this->Protocols;
    }
    public function setProtocols($Protocols) { 
        $this->Protocols = $Protocols;
    }
    public function getIcmpSubType() {
        return $this->IcmpSubType;
    }
    public function setIcmpSubType($IcmpSubType) { 
        $this->IcmpSubType = $IcmpSubType;
    }
    public function getPort() {
        return $this->Port;
    }
    public function setPort($Port) { 
        $this->Port = $Port;
    }
    public function getDestinationPortRange() {
        return $this->DestinationPortRange;
    }
    public function setDestinationPortRange($DestinationPortRange) { 
        $this->DestinationPortRange = $DestinationPortRange;
    }
    public function getDestinationIp() {
        return $this->DestinationIp;
    }
    public function setDestinationIp($DestinationIp) { 
        $this->DestinationIp = $DestinationIp;
    }
    public function getDestinationVm() {
        return $this->DestinationVm;
    }
    public function setDestinationVm($DestinationVm) { 
        $this->DestinationVm = $DestinationVm;
    }
    public function getSourcePort() {
        return $this->SourcePort;
    }
    public function setSourcePort($SourcePort) { 
        $this->SourcePort = $SourcePort;
    }
    public function getSourcePortRange() {
        return $this->SourcePortRange;
    }
    public function setSourcePortRange($SourcePortRange) { 
        $this->SourcePortRange = $SourcePortRange;
    }
    public function getSourceIp() {
        return $this->SourceIp;
    }
    public function setSourceIp($SourceIp) { 
        $this->SourceIp = $SourceIp;
    }
    public function getSourceVm() {
        return $this->SourceVm;
    }
    public function setSourceVm($SourceVm) { 
        $this->SourceVm = $SourceVm;
    }
    public function getDirection() {
        return $this->Direction;
    }
    public function setDirection($Direction) { 
        $this->Direction = $Direction;
    }
    public function getEnableLogging() {
        return $this->EnableLogging;
    }
    public function setEnableLogging($EnableLogging) { 
        $this->EnableLogging = $EnableLogging;
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
        if (!is_null($this->Id)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Id', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Id>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Id, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Id')) . "</" . $ns . "Id>\n");
        }
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (!is_null($this->MatchOnTranslate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MatchOnTranslate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MatchOnTranslate>" . VMware_VCloud_API_Helper::format_boolean($this->MatchOnTranslate, $input_name='MatchOnTranslate') . "</" . $ns . "MatchOnTranslate>\n");
        }
        if (!is_null($this->Description)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Description', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Description>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Description, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Description')) . "</" . $ns . "Description>\n");
        }
        if (!is_null($this->Policy)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Policy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Policy>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Policy, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Policy')) . "</" . $ns . "Policy>\n");
        }
        if (!is_null($this->Protocols)) {
            $out = $this->Protocols->export('Protocols', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->IcmpSubType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IcmpSubType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IcmpSubType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->IcmpSubType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='IcmpSubType')) . "</" . $ns . "IcmpSubType>\n");
        }
        if (!is_null($this->Port)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Port', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Port>" . VMware_VCloud_API_Helper::format_integer($this->Port, $input_name='Port') . "</" . $ns . "Port>\n");
        }
        if (!is_null($this->DestinationPortRange)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DestinationPortRange', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DestinationPortRange>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DestinationPortRange, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DestinationPortRange')) . "</" . $ns . "DestinationPortRange>\n");
        }
        if (!is_null($this->DestinationIp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DestinationIp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DestinationIp>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DestinationIp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DestinationIp')) . "</" . $ns . "DestinationIp>\n");
        }
        if (!is_null($this->DestinationVm)) {
            $out = $this->DestinationVm->export('DestinationVm', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->SourcePort)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SourcePort', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SourcePort>" . VMware_VCloud_API_Helper::format_integer($this->SourcePort, $input_name='SourcePort') . "</" . $ns . "SourcePort>\n");
        }
        if (!is_null($this->SourcePortRange)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SourcePortRange', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SourcePortRange>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SourcePortRange, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SourcePortRange')) . "</" . $ns . "SourcePortRange>\n");
        }
        if (!is_null($this->SourceIp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SourceIp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SourceIp>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SourceIp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SourceIp')) . "</" . $ns . "SourceIp>\n");
        }
        if (!is_null($this->SourceVm)) {
            $out = $this->SourceVm->export('SourceVm', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Direction)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Direction', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Direction>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Direction, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Direction')) . "</" . $ns . "Direction>\n");
        }
        if (!is_null($this->EnableLogging)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'EnableLogging', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "EnableLogging>" . VMware_VCloud_API_Helper::format_boolean($this->EnableLogging, $input_name='EnableLogging') . "</" . $ns . "EnableLogging>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Id) ||
            !is_null($this->IsEnabled) ||
            !is_null($this->MatchOnTranslate) ||
            !is_null($this->Description) ||
            !is_null($this->Policy) ||
            !is_null($this->Protocols) ||
            !is_null($this->IcmpSubType) ||
            !is_null($this->Port) ||
            !is_null($this->DestinationPortRange) ||
            !is_null($this->DestinationIp) ||
            !is_null($this->DestinationVm) ||
            !is_null($this->SourcePort) ||
            !is_null($this->SourcePortRange) ||
            !is_null($this->SourceIp) ||
            !is_null($this->SourceVm) ||
            !is_null($this->Direction) ||
            !is_null($this->EnableLogging) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Id') {
            $sval = $child->nodeValue;
            $this->Id = $sval;
            if (!empty($namespace)) {
                $this->namespace['Id'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MatchOnTranslate') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->MatchOnTranslate = $sval;
            if (!empty($namespace)) {
                $this->namespace['MatchOnTranslate'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $sval = $child->nodeValue;
            $this->Description = $sval;
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Policy') {
            $sval = $child->nodeValue;
            $this->Policy = $sval;
            if (!empty($namespace)) {
                $this->namespace['Policy'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Protocols') {
            $obj = new VMware_VCloud_API_Protocols();
            $obj->build($child);
            $obj->set_tagName('Protocols');
            $this->setProtocols($obj);
            if (!empty($namespace)) {
                $this->namespace['Protocols'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IcmpSubType') {
            $sval = $child->nodeValue;
            $this->IcmpSubType = $sval;
            if (!empty($namespace)) {
                $this->namespace['IcmpSubType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Port') {
            $sval = $child->nodeValue;
            $this->Port = $sval;
            if (!empty($namespace)) {
                $this->namespace['Port'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DestinationPortRange') {
            $sval = $child->nodeValue;
            $this->DestinationPortRange = $sval;
            if (!empty($namespace)) {
                $this->namespace['DestinationPortRange'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DestinationIp') {
            $sval = $child->nodeValue;
            $this->DestinationIp = $sval;
            if (!empty($namespace)) {
                $this->namespace['DestinationIp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DestinationVm') {
            $obj = new VMware_VCloud_API_VmSelectionType();
            $obj->build($child);
            $obj->set_tagName('DestinationVm');
            $this->setDestinationVm($obj);
            if (!empty($namespace)) {
                $this->namespace['DestinationVm'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SourcePort') {
            $sval = $child->nodeValue;
            $this->SourcePort = $sval;
            if (!empty($namespace)) {
                $this->namespace['SourcePort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SourcePortRange') {
            $sval = $child->nodeValue;
            $this->SourcePortRange = $sval;
            if (!empty($namespace)) {
                $this->namespace['SourcePortRange'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SourceIp') {
            $sval = $child->nodeValue;
            $this->SourceIp = $sval;
            if (!empty($namespace)) {
                $this->namespace['SourceIp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SourceVm') {
            $obj = new VMware_VCloud_API_VmSelectionType();
            $obj->build($child);
            $obj->set_tagName('SourceVm');
            $this->setSourceVm($obj);
            if (!empty($namespace)) {
                $this->namespace['SourceVm'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Direction') {
            $sval = $child->nodeValue;
            $this->Direction = $sval;
            if (!empty($namespace)) {
                $this->namespace['Direction'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EnableLogging') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->EnableLogging = $sval;
            if (!empty($namespace)) {
                $this->namespace['EnableLogging'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}