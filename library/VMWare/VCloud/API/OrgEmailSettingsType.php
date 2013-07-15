<?php
class VMware_VCloud_API_OrgEmailSettingsType extends VMware_VCloud_API_ResourceType {
    protected $IsDefaultSmtpServer = null;
    protected $IsDefaultOrgEmail = null;
    protected $FromEmailAddress = null;
    protected $DefaultSubjectPrefix = null;
    protected $IsAlertEmailToAllAdmins = null;
    protected $AlertEmailTo = array();
    protected $SmtpServerSettings = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param boolean $IsDefaultSmtpServer - [required] 
    * @param boolean $IsDefaultOrgEmail - [required] 
    * @param string $FromEmailAddress - [required] 
    * @param string $DefaultSubjectPrefix - [required] 
    * @param boolean $IsAlertEmailToAllAdmins - [required] 
    * @param array $AlertEmailTo - [optional] an array of string
    * @param VMware_VCloud_API_SmtpServerSettingsType $SmtpServerSettings - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $IsDefaultSmtpServer=null, $IsDefaultOrgEmail=null, $FromEmailAddress=null, $DefaultSubjectPrefix=null, $IsAlertEmailToAllAdmins=null, $AlertEmailTo=null, $SmtpServerSettings=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->IsDefaultSmtpServer = $IsDefaultSmtpServer;
        $this->IsDefaultOrgEmail = $IsDefaultOrgEmail;
        $this->FromEmailAddress = $FromEmailAddress;
        $this->DefaultSubjectPrefix = $DefaultSubjectPrefix;
        $this->IsAlertEmailToAllAdmins = $IsAlertEmailToAllAdmins;
        if (!is_null($AlertEmailTo)) {
            $this->AlertEmailTo = $AlertEmailTo;
        }
        $this->SmtpServerSettings = $SmtpServerSettings;
        $this->tagName = 'OrgEmailSettings';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getIsDefaultSmtpServer() {
        return $this->IsDefaultSmtpServer;
    }
    public function setIsDefaultSmtpServer($IsDefaultSmtpServer) { 
        $this->IsDefaultSmtpServer = $IsDefaultSmtpServer;
    }
    public function getIsDefaultOrgEmail() {
        return $this->IsDefaultOrgEmail;
    }
    public function setIsDefaultOrgEmail($IsDefaultOrgEmail) { 
        $this->IsDefaultOrgEmail = $IsDefaultOrgEmail;
    }
    public function getFromEmailAddress() {
        return $this->FromEmailAddress;
    }
    public function setFromEmailAddress($FromEmailAddress) { 
        $this->FromEmailAddress = $FromEmailAddress;
    }
    public function getDefaultSubjectPrefix() {
        return $this->DefaultSubjectPrefix;
    }
    public function setDefaultSubjectPrefix($DefaultSubjectPrefix) { 
        $this->DefaultSubjectPrefix = $DefaultSubjectPrefix;
    }
    public function getIsAlertEmailToAllAdmins() {
        return $this->IsAlertEmailToAllAdmins;
    }
    public function setIsAlertEmailToAllAdmins($IsAlertEmailToAllAdmins) { 
        $this->IsAlertEmailToAllAdmins = $IsAlertEmailToAllAdmins;
    }
    public function getAlertEmailTo() {
        return $this->AlertEmailTo;
    }
    public function setAlertEmailTo($AlertEmailTo) { 
        $this->AlertEmailTo = $AlertEmailTo;
    }
    public function addAlertEmailTo($value) { array_push($this->AlertEmailTo, $value); }
    public function getSmtpServerSettings() {
        return $this->SmtpServerSettings;
    }
    public function setSmtpServerSettings($SmtpServerSettings) { 
        $this->SmtpServerSettings = $SmtpServerSettings;
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
        if (!is_null($this->IsDefaultSmtpServer)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsDefaultSmtpServer', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsDefaultSmtpServer>" . VMware_VCloud_API_Helper::format_boolean($this->IsDefaultSmtpServer, $input_name='IsDefaultSmtpServer') . "</" . $ns . "IsDefaultSmtpServer>\n");
     }
        if (!is_null($this->IsDefaultOrgEmail)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsDefaultOrgEmail', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsDefaultOrgEmail>" . VMware_VCloud_API_Helper::format_boolean($this->IsDefaultOrgEmail, $input_name='IsDefaultOrgEmail') . "</" . $ns . "IsDefaultOrgEmail>\n");
     }
        if (!is_null($this->FromEmailAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'FromEmailAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "FromEmailAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->FromEmailAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='FromEmailAddress')) . "</" . $ns . "FromEmailAddress>\n");
        }
        if (!is_null($this->DefaultSubjectPrefix)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DefaultSubjectPrefix', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DefaultSubjectPrefix>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DefaultSubjectPrefix, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DefaultSubjectPrefix')) . "</" . $ns . "DefaultSubjectPrefix>\n");
        }
        if (!is_null($this->IsAlertEmailToAllAdmins)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsAlertEmailToAllAdmins', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsAlertEmailToAllAdmins>" . VMware_VCloud_API_Helper::format_boolean($this->IsAlertEmailToAllAdmins, $input_name='IsAlertEmailToAllAdmins') . "</" . $ns . "IsAlertEmailToAllAdmins>\n");
     }
        if (isset($this->AlertEmailTo)) {
            foreach ($this->AlertEmailTo as $AlertEmailTo) {
                $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AlertEmailTo', self::$defaultNS, $namespace, $rootNS);
                $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AlertEmailTo>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($AlertEmailTo, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AlertEmailTo')) . "</" . $ns . "AlertEmailTo>\n");
            }
        }
        if (!is_null($this->SmtpServerSettings)) {
            $out = $this->SmtpServerSettings->export('SmtpServerSettings', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->IsDefaultSmtpServer) ||
            !is_null($this->IsDefaultOrgEmail) ||
            !is_null($this->FromEmailAddress) ||
            !is_null($this->DefaultSubjectPrefix) ||
            !is_null($this->IsAlertEmailToAllAdmins) ||
            !empty($this->AlertEmailTo) ||
            !is_null($this->SmtpServerSettings) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsDefaultSmtpServer') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsDefaultSmtpServer = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsDefaultSmtpServer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsDefaultOrgEmail') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsDefaultOrgEmail = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsDefaultOrgEmail'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FromEmailAddress') {
            $sval = $child->nodeValue;
            $this->FromEmailAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['FromEmailAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultSubjectPrefix') {
            $sval = $child->nodeValue;
            $this->DefaultSubjectPrefix = $sval;
            if (!empty($namespace)) {
                $this->namespace['DefaultSubjectPrefix'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsAlertEmailToAllAdmins') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsAlertEmailToAllAdmins = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsAlertEmailToAllAdmins'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AlertEmailTo') {
            $sval = $child->nodeValue;
            array_push($this->AlertEmailTo, $sval);
            if (!empty($namespace)) {
                $this->namespace['AlertEmailTo'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SmtpServerSettings') {
            $obj = new VMware_VCloud_API_SmtpServerSettingsType();
            $obj->build($child);
            $obj->set_tagName('SmtpServerSettings');
            $this->setSmtpServerSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['SmtpServerSettings'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}