<?php
class VMware_VCloud_API_GuestCustomizationSectionType extends VMware_VCloud_API_OVF_Section_Type {
    protected $href = null;
    protected $type = null;
    protected $Enabled = null;
    protected $ChangeSid = null;
    protected $VirtualMachineId = null;
    protected $JoinDomainEnabled = null;
    protected $UseOrgSettings = null;
    protected $DomainName = null;
    protected $DomainUserName = null;
    protected $DomainUserPassword = null;
    protected $MachineObjectOU = null;
    protected $AdminPasswordEnabled = null;
    protected $AdminPasswordAuto = null;
    protected $AdminPassword = null;
    protected $ResetPasswordRequired = null;
    protected $CustomizationScript = null;
    protected $ComputerName = null;
    protected $Link = array();
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param string $required - [optional] an attribute, 
    * @param VMware_VCloud_API_OVF_Msg_Type $Info - [required]
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param boolean $Enabled - [optional] 
    * @param boolean $ChangeSid - [optional] 
    * @param string $VirtualMachineId - [optional] 
    * @param boolean $JoinDomainEnabled - [optional] 
    * @param boolean $UseOrgSettings - [optional] 
    * @param string $DomainName - [optional] 
    * @param string $DomainUserName - [optional] 
    * @param string $DomainUserPassword - [optional] 
    * @param string $MachineObjectOU - [optional] 
    * @param boolean $AdminPasswordEnabled - [optional] 
    * @param boolean $AdminPasswordAuto - [optional] 
    * @param string $AdminPassword - [optional] 
    * @param boolean $ResetPasswordRequired - [optional] 
    * @param string $CustomizationScript - [optional] 
    * @param string $ComputerName - [optional] 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($required=null, $Info=null, $href=null, $type=null, $Enabled=null, $ChangeSid=null, $VirtualMachineId=null, $JoinDomainEnabled=null, $UseOrgSettings=null, $DomainName=null, $DomainUserName=null, $DomainUserPassword=null, $MachineObjectOU=null, $AdminPasswordEnabled=null, $AdminPasswordAuto=null, $AdminPassword=null, $ResetPasswordRequired=null, $CustomizationScript=null, $ComputerName=null, $Link=null, $Any=null) {
        parent::__construct($required, $Info);
        $this->href = $href;
        $this->type = $type;
        $this->Enabled = $Enabled;
        $this->ChangeSid = $ChangeSid;
        $this->VirtualMachineId = $VirtualMachineId;
        $this->JoinDomainEnabled = $JoinDomainEnabled;
        $this->UseOrgSettings = $UseOrgSettings;
        $this->DomainName = $DomainName;
        $this->DomainUserName = $DomainUserName;
        $this->DomainUserPassword = $DomainUserPassword;
        $this->MachineObjectOU = $MachineObjectOU;
        $this->AdminPasswordEnabled = $AdminPasswordEnabled;
        $this->AdminPasswordAuto = $AdminPasswordAuto;
        $this->AdminPassword = $AdminPassword;
        $this->ResetPasswordRequired = $ResetPasswordRequired;
        $this->CustomizationScript = $CustomizationScript;
        $this->ComputerName = $ComputerName;
        if (!is_null($Link)) {
            $this->Link = $Link;
        }
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->tagName = 'GuestCustomizationSection';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getEnabled() {
        return $this->Enabled;
    }
    public function setEnabled($Enabled) { 
        $this->Enabled = $Enabled;
    }
    public function getChangeSid() {
        return $this->ChangeSid;
    }
    public function setChangeSid($ChangeSid) { 
        $this->ChangeSid = $ChangeSid;
    }
    public function getVirtualMachineId() {
        return $this->VirtualMachineId;
    }
    public function setVirtualMachineId($VirtualMachineId) { 
        $this->VirtualMachineId = $VirtualMachineId;
    }
    public function getJoinDomainEnabled() {
        return $this->JoinDomainEnabled;
    }
    public function setJoinDomainEnabled($JoinDomainEnabled) { 
        $this->JoinDomainEnabled = $JoinDomainEnabled;
    }
    public function getUseOrgSettings() {
        return $this->UseOrgSettings;
    }
    public function setUseOrgSettings($UseOrgSettings) { 
        $this->UseOrgSettings = $UseOrgSettings;
    }
    public function getDomainName() {
        return $this->DomainName;
    }
    public function setDomainName($DomainName) { 
        $this->DomainName = $DomainName;
    }
    public function getDomainUserName() {
        return $this->DomainUserName;
    }
    public function setDomainUserName($DomainUserName) { 
        $this->DomainUserName = $DomainUserName;
    }
    public function getDomainUserPassword() {
        return $this->DomainUserPassword;
    }
    public function setDomainUserPassword($DomainUserPassword) { 
        $this->DomainUserPassword = $DomainUserPassword;
    }
    public function getMachineObjectOU() {
        return $this->MachineObjectOU;
    }
    public function setMachineObjectOU($MachineObjectOU) { 
        $this->MachineObjectOU = $MachineObjectOU;
    }
    public function getAdminPasswordEnabled() {
        return $this->AdminPasswordEnabled;
    }
    public function setAdminPasswordEnabled($AdminPasswordEnabled) { 
        $this->AdminPasswordEnabled = $AdminPasswordEnabled;
    }
    public function getAdminPasswordAuto() {
        return $this->AdminPasswordAuto;
    }
    public function setAdminPasswordAuto($AdminPasswordAuto) { 
        $this->AdminPasswordAuto = $AdminPasswordAuto;
    }
    public function getAdminPassword() {
        return $this->AdminPassword;
    }
    public function setAdminPassword($AdminPassword) { 
        $this->AdminPassword = $AdminPassword;
    }
    public function getResetPasswordRequired() {
        return $this->ResetPasswordRequired;
    }
    public function setResetPasswordRequired($ResetPasswordRequired) { 
        $this->ResetPasswordRequired = $ResetPasswordRequired;
    }
    public function getCustomizationScript() {
        return $this->CustomizationScript;
    }
    public function setCustomizationScript($CustomizationScript) { 
        $this->CustomizationScript = $CustomizationScript;
    }
    public function getComputerName() {
        return $this->ComputerName;
    }
    public function setComputerName($ComputerName) { 
        $this->ComputerName = $ComputerName;
    }
    public function getLink() {
        return $this->Link;
    }
    public function setLink($Link) { 
        $this->Link = $Link;
    }
    public function addLink($value) { array_push($this->Link, $value); }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
    public function get_href(){
        return $this->href;
    }
    public function set_href($href) {
        $this->href = $href;
    }
    public function get_type(){
        return $this->type;
    }
    public function set_type($type) {
        $this->type = $type;
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
        if (!is_null($this->href)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'href', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'href=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->href, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='href')));
        }
        if (!is_null($this->type)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'type', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'type=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->type, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='type')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Enabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Enabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Enabled>" . VMware_VCloud_API_Helper::format_boolean($this->Enabled, $input_name='Enabled') . "</" . $ns . "Enabled>\n");
        }
        if (!is_null($this->ChangeSid)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ChangeSid', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ChangeSid>" . VMware_VCloud_API_Helper::format_boolean($this->ChangeSid, $input_name='ChangeSid') . "</" . $ns . "ChangeSid>\n");
        }
        if (!is_null($this->VirtualMachineId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VirtualMachineId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VirtualMachineId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VirtualMachineId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VirtualMachineId')) . "</" . $ns . "VirtualMachineId>\n");
        }
        if (!is_null($this->JoinDomainEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'JoinDomainEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "JoinDomainEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->JoinDomainEnabled, $input_name='JoinDomainEnabled') . "</" . $ns . "JoinDomainEnabled>\n");
        }
        if (!is_null($this->UseOrgSettings)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UseOrgSettings', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UseOrgSettings>" . VMware_VCloud_API_Helper::format_boolean($this->UseOrgSettings, $input_name='UseOrgSettings') . "</" . $ns . "UseOrgSettings>\n");
        }
        if (!is_null($this->DomainName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DomainName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DomainName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DomainName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DomainName')) . "</" . $ns . "DomainName>\n");
        }
        if (!is_null($this->DomainUserName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DomainUserName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DomainUserName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DomainUserName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DomainUserName')) . "</" . $ns . "DomainUserName>\n");
        }
        if (!is_null($this->DomainUserPassword)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DomainUserPassword', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DomainUserPassword>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DomainUserPassword, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DomainUserPassword')) . "</" . $ns . "DomainUserPassword>\n");
        }
        if (!is_null($this->MachineObjectOU)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MachineObjectOU', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MachineObjectOU>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MachineObjectOU, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MachineObjectOU')) . "</" . $ns . "MachineObjectOU>\n");
        }
        if (!is_null($this->AdminPasswordEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AdminPasswordEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AdminPasswordEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->AdminPasswordEnabled, $input_name='AdminPasswordEnabled') . "</" . $ns . "AdminPasswordEnabled>\n");
        }
        if (!is_null($this->AdminPasswordAuto)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AdminPasswordAuto', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AdminPasswordAuto>" . VMware_VCloud_API_Helper::format_boolean($this->AdminPasswordAuto, $input_name='AdminPasswordAuto') . "</" . $ns . "AdminPasswordAuto>\n");
        }
        if (!is_null($this->AdminPassword)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AdminPassword', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AdminPassword>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AdminPassword, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AdminPassword')) . "</" . $ns . "AdminPassword>\n");
        }
        if (!is_null($this->ResetPasswordRequired)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ResetPasswordRequired', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ResetPasswordRequired>" . VMware_VCloud_API_Helper::format_boolean($this->ResetPasswordRequired, $input_name='ResetPasswordRequired') . "</" . $ns . "ResetPasswordRequired>\n");
        }
        if (!is_null($this->CustomizationScript)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CustomizationScript', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CustomizationScript>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->CustomizationScript, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='CustomizationScript')) . "</" . $ns . "CustomizationScript>\n");
        }
        if (!is_null($this->ComputerName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ComputerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ComputerName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ComputerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ComputerName')) . "</" . $ns . "ComputerName>\n");
        }
        if (isset($this->Link)) {
            foreach ($this->Link as $Link) {
                $out = $Link->export('Link', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->Any)) {
            foreach ($this->Any as $Any) {
                if ($Any instanceof SimpleXMLElement) {
                    $elementName = $Any->getName();
                    if (!in_array($elementName, array('Info'))) {
                        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                        $out = VMware_VCloud_API_Helper::addString($out, $Any->asXML() . "\n");
                    }
                } else {
                    $tagName = $Any->get_tagName();
                    $namespace = $Any::$defaultNS;
                    $out = $Any->export($tagName, $out, $level, '', $namespace, $rootNS);
                }
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Enabled) ||
            !is_null($this->ChangeSid) ||
            !is_null($this->VirtualMachineId) ||
            !is_null($this->JoinDomainEnabled) ||
            !is_null($this->UseOrgSettings) ||
            !is_null($this->DomainName) ||
            !is_null($this->DomainUserName) ||
            !is_null($this->DomainUserPassword) ||
            !is_null($this->MachineObjectOU) ||
            !is_null($this->AdminPasswordEnabled) ||
            !is_null($this->AdminPasswordAuto) ||
            !is_null($this->AdminPassword) ||
            !is_null($this->ResetPasswordRequired) ||
            !is_null($this->CustomizationScript) ||
            !is_null($this->ComputerName) ||
            !empty($this->Link) ||
            !empty($this->Any) ||
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
        $ndhref = $attrs->getNamedItem('href');
        if (!is_null($ndhref)) {
            $this->href = $ndhref->value;
            if (isset($ndhref->prefix)) {
                $this->namespace['href'] = $ndhref->prefix;
                $nsUri = $ndhref->lookupNamespaceURI($ndhref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'href');
        } else {
            $this->href = null;
        }
        $ndtype = $attrs->getNamedItem('type');
        if (!is_null($ndtype)) {
            $this->type = $ndtype->value;
            if (isset($ndtype->prefix)) {
                $this->namespace['type'] = $ndtype->prefix;
                $nsUri = $ndtype->lookupNamespaceURI($ndtype->prefix);
            }
            $node->removeAttributeNS($nsUri, 'type');
        } else {
            $this->type = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Enabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Enabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['Enabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ChangeSid') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->ChangeSid = $sval;
            if (!empty($namespace)) {
                $this->namespace['ChangeSid'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualMachineId') {
            $sval = $child->nodeValue;
            $this->VirtualMachineId = $sval;
            if (!empty($namespace)) {
                $this->namespace['VirtualMachineId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'JoinDomainEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->JoinDomainEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['JoinDomainEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UseOrgSettings') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->UseOrgSettings = $sval;
            if (!empty($namespace)) {
                $this->namespace['UseOrgSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DomainName') {
            $sval = $child->nodeValue;
            $this->DomainName = $sval;
            if (!empty($namespace)) {
                $this->namespace['DomainName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DomainUserName') {
            $sval = $child->nodeValue;
            $this->DomainUserName = $sval;
            if (!empty($namespace)) {
                $this->namespace['DomainUserName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DomainUserPassword') {
            $sval = $child->nodeValue;
            $this->DomainUserPassword = $sval;
            if (!empty($namespace)) {
                $this->namespace['DomainUserPassword'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MachineObjectOU') {
            $sval = $child->nodeValue;
            $this->MachineObjectOU = $sval;
            if (!empty($namespace)) {
                $this->namespace['MachineObjectOU'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminPasswordEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AdminPasswordEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['AdminPasswordEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminPasswordAuto') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AdminPasswordAuto = $sval;
            if (!empty($namespace)) {
                $this->namespace['AdminPasswordAuto'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminPassword') {
            $sval = $child->nodeValue;
            $this->AdminPassword = $sval;
            if (!empty($namespace)) {
                $this->namespace['AdminPassword'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResetPasswordRequired') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->ResetPasswordRequired = $sval;
            if (!empty($namespace)) {
                $this->namespace['ResetPasswordRequired'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CustomizationScript') {
            $sval = $child->nodeValue;
            $this->CustomizationScript = $sval;
            if (!empty($namespace)) {
                $this->namespace['CustomizationScript'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ComputerName') {
            $sval = $child->nodeValue;
            $this->ComputerName = $sval;
            if (!empty($namespace)) {
                $this->namespace['ComputerName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Link') {
            $obj = new VMware_VCloud_API_LinkType();
            $obj->build($child);
            $obj->set_tagName('Link');
            array_push($this->Link, $obj);
            if (!empty($namespace)) {
                $this->namespace['Link'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && !in_array($nodeName, array('Info'))) {
            $type = VMware_VCloud_API_Helper::getClassName($nodeName);
            if (class_exists($type) && method_exists($type, 'build')) {
                $class = new ReflectionClass($type);
                if ($class->isInstantiable()) {
                    $obj = $class->newInstance();
                    $obj->build($child);
                    $obj->set_tagName($nodeName);
                }
            } else {
                $obj = simplexml_import_dom($child);
            }
            array_push($this->Any, $obj);
            if (!empty($namespace)) {
                $this->namespace['Any'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}