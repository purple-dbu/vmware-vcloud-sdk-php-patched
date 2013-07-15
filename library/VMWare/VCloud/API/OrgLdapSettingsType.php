<?php
class VMware_VCloud_API_OrgLdapSettingsType extends VMware_VCloud_API_ResourceType {
    protected $OrgLdapMode = null;
    protected $CustomUsersOu = null;
    protected $CustomOrgLdapSettings = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $OrgLdapMode - [optional] 
    * @param string $CustomUsersOu - [optional] 
    * @param VMware_VCloud_API_CustomOrgLdapSettingsType $CustomOrgLdapSettings - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $OrgLdapMode=null, $CustomUsersOu=null, $CustomOrgLdapSettings=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->OrgLdapMode = $OrgLdapMode;
        $this->CustomUsersOu = $CustomUsersOu;
        $this->CustomOrgLdapSettings = $CustomOrgLdapSettings;
        $this->tagName = 'OrgLdapSettings';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOrgLdapMode() {
        return $this->OrgLdapMode;
    }
    public function setOrgLdapMode($OrgLdapMode) { 
        $this->OrgLdapMode = $OrgLdapMode;
    }
    public function getCustomUsersOu() {
        return $this->CustomUsersOu;
    }
    public function setCustomUsersOu($CustomUsersOu) { 
        $this->CustomUsersOu = $CustomUsersOu;
    }
    public function getCustomOrgLdapSettings() {
        return $this->CustomOrgLdapSettings;
    }
    public function setCustomOrgLdapSettings($CustomOrgLdapSettings) { 
        $this->CustomOrgLdapSettings = $CustomOrgLdapSettings;
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
        if (!is_null($this->OrgLdapMode)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'OrgLdapMode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "OrgLdapMode>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->OrgLdapMode, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='OrgLdapMode')) . "</" . $ns . "OrgLdapMode>\n");
        }
        if (!is_null($this->CustomUsersOu)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CustomUsersOu', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CustomUsersOu>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->CustomUsersOu, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='CustomUsersOu')) . "</" . $ns . "CustomUsersOu>\n");
        }
        if (!is_null($this->CustomOrgLdapSettings)) {
            $out = $this->CustomOrgLdapSettings->export('CustomOrgLdapSettings', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->OrgLdapMode) ||
            !is_null($this->CustomUsersOu) ||
            !is_null($this->CustomOrgLdapSettings) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgLdapMode') {
            $sval = $child->nodeValue;
            $this->OrgLdapMode = $sval;
            if (!empty($namespace)) {
                $this->namespace['OrgLdapMode'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CustomUsersOu') {
            $sval = $child->nodeValue;
            $this->CustomUsersOu = $sval;
            if (!empty($namespace)) {
                $this->namespace['CustomUsersOu'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CustomOrgLdapSettings') {
            $obj = new VMware_VCloud_API_CustomOrgLdapSettingsType();
            $obj->build($child);
            $obj->set_tagName('CustomOrgLdapSettings');
            $this->setCustomOrgLdapSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['CustomOrgLdapSettings'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}