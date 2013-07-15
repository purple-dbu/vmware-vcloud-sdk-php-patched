<?php
class VMware_VCloud_API_OrgGuestPersonalizationSettingsType extends VMware_VCloud_API_ResourceType {
    protected $DomainUsername = null;
    protected $DomainPassword = null;
    protected $DomainName = null;
    protected $AllowDomainSettings = null;
    protected $AccountOrganizationalUnit = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $DomainUsername - [optional] 
    * @param string $DomainPassword - [optional] 
    * @param string $DomainName - [optional] 
    * @param boolean $AllowDomainSettings - [optional] 
    * @param string $AccountOrganizationalUnit - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $DomainUsername=null, $DomainPassword=null, $DomainName=null, $AllowDomainSettings=null, $AccountOrganizationalUnit=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->DomainUsername = $DomainUsername;
        $this->DomainPassword = $DomainPassword;
        $this->DomainName = $DomainName;
        $this->AllowDomainSettings = $AllowDomainSettings;
        $this->AccountOrganizationalUnit = $AccountOrganizationalUnit;
        $this->tagName = 'OrgGuestPersonalizationSettings';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDomainUsername() {
        return $this->DomainUsername;
    }
    public function setDomainUsername($DomainUsername) { 
        $this->DomainUsername = $DomainUsername;
    }
    public function getDomainPassword() {
        return $this->DomainPassword;
    }
    public function setDomainPassword($DomainPassword) { 
        $this->DomainPassword = $DomainPassword;
    }
    public function getDomainName() {
        return $this->DomainName;
    }
    public function setDomainName($DomainName) { 
        $this->DomainName = $DomainName;
    }
    public function getAllowDomainSettings() {
        return $this->AllowDomainSettings;
    }
    public function setAllowDomainSettings($AllowDomainSettings) { 
        $this->AllowDomainSettings = $AllowDomainSettings;
    }
    public function getAccountOrganizationalUnit() {
        return $this->AccountOrganizationalUnit;
    }
    public function setAccountOrganizationalUnit($AccountOrganizationalUnit) { 
        $this->AccountOrganizationalUnit = $AccountOrganizationalUnit;
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
        if (!is_null($this->DomainUsername)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DomainUsername', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DomainUsername>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DomainUsername, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DomainUsername')) . "</" . $ns . "DomainUsername>\n");
        }
        if (!is_null($this->DomainPassword)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DomainPassword', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DomainPassword>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DomainPassword, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DomainPassword')) . "</" . $ns . "DomainPassword>\n");
        }
        if (!is_null($this->DomainName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DomainName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DomainName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DomainName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DomainName')) . "</" . $ns . "DomainName>\n");
        }
        if (!is_null($this->AllowDomainSettings)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AllowDomainSettings', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AllowDomainSettings>" . VMware_VCloud_API_Helper::format_boolean($this->AllowDomainSettings, $input_name='AllowDomainSettings') . "</" . $ns . "AllowDomainSettings>\n");
        }
        if (!is_null($this->AccountOrganizationalUnit)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AccountOrganizationalUnit', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AccountOrganizationalUnit>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AccountOrganizationalUnit, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AccountOrganizationalUnit')) . "</" . $ns . "AccountOrganizationalUnit>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->DomainUsername) ||
            !is_null($this->DomainPassword) ||
            !is_null($this->DomainName) ||
            !is_null($this->AllowDomainSettings) ||
            !is_null($this->AccountOrganizationalUnit) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DomainUsername') {
            $sval = $child->nodeValue;
            $this->DomainUsername = $sval;
            if (!empty($namespace)) {
                $this->namespace['DomainUsername'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DomainPassword') {
            $sval = $child->nodeValue;
            $this->DomainPassword = $sval;
            if (!empty($namespace)) {
                $this->namespace['DomainPassword'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DomainName') {
            $sval = $child->nodeValue;
            $this->DomainName = $sval;
            if (!empty($namespace)) {
                $this->namespace['DomainName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllowDomainSettings') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AllowDomainSettings = $sval;
            if (!empty($namespace)) {
                $this->namespace['AllowDomainSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AccountOrganizationalUnit') {
            $sval = $child->nodeValue;
            $this->AccountOrganizationalUnit = $sval;
            if (!empty($namespace)) {
                $this->namespace['AccountOrganizationalUnit'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}