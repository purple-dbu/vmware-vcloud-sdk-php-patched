<?php
class VMware_VCloud_API_Extension_EmailSettingsType extends VMware_VCloud_API_ResourceType {
    protected $SenderEmailAddress = null;
    protected $EmailSubjectPrefix = null;
    protected $AlertEmailToAllAdmins = null;
    protected $AlertEmailTo = null;
    protected $SmtpSettings = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $SenderEmailAddress - [optional] 
    * @param string $EmailSubjectPrefix - [optional] 
    * @param boolean $AlertEmailToAllAdmins - [required] 
    * @param string $AlertEmailTo - [optional] 
    * @param VMware_VCloud_API_Extension_SmtpSettingsType $SmtpSettings - [required]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $SenderEmailAddress=null, $EmailSubjectPrefix=null, $AlertEmailToAllAdmins=null, $AlertEmailTo=null, $SmtpSettings=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->SenderEmailAddress = $SenderEmailAddress;
        $this->EmailSubjectPrefix = $EmailSubjectPrefix;
        $this->AlertEmailToAllAdmins = $AlertEmailToAllAdmins;
        $this->AlertEmailTo = $AlertEmailTo;
        $this->SmtpSettings = $SmtpSettings;
        $this->tagName = 'EmailSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSenderEmailAddress() {
        return $this->SenderEmailAddress;
    }
    public function setSenderEmailAddress($SenderEmailAddress) { 
        $this->SenderEmailAddress = $SenderEmailAddress;
    }
    public function getEmailSubjectPrefix() {
        return $this->EmailSubjectPrefix;
    }
    public function setEmailSubjectPrefix($EmailSubjectPrefix) { 
        $this->EmailSubjectPrefix = $EmailSubjectPrefix;
    }
    public function getAlertEmailToAllAdmins() {
        return $this->AlertEmailToAllAdmins;
    }
    public function setAlertEmailToAllAdmins($AlertEmailToAllAdmins) { 
        $this->AlertEmailToAllAdmins = $AlertEmailToAllAdmins;
    }
    public function getAlertEmailTo() {
        return $this->AlertEmailTo;
    }
    public function setAlertEmailTo($AlertEmailTo) { 
        $this->AlertEmailTo = $AlertEmailTo;
    }
    public function getSmtpSettings() {
        return $this->SmtpSettings;
    }
    public function setSmtpSettings($SmtpSettings) { 
        $this->SmtpSettings = $SmtpSettings;
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
        if (!is_null($this->SenderEmailAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SenderEmailAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SenderEmailAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SenderEmailAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SenderEmailAddress')) . "</" . $ns . "SenderEmailAddress>\n");
        }
        if (!is_null($this->EmailSubjectPrefix)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'EmailSubjectPrefix', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "EmailSubjectPrefix>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->EmailSubjectPrefix, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='EmailSubjectPrefix')) . "</" . $ns . "EmailSubjectPrefix>\n");
        }
        if (!is_null($this->AlertEmailToAllAdmins)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AlertEmailToAllAdmins', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AlertEmailToAllAdmins>" . VMware_VCloud_API_Helper::format_boolean($this->AlertEmailToAllAdmins, $input_name='AlertEmailToAllAdmins') . "</" . $ns . "AlertEmailToAllAdmins>\n");
     }
        if (!is_null($this->AlertEmailTo)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AlertEmailTo', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AlertEmailTo>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AlertEmailTo, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AlertEmailTo')) . "</" . $ns . "AlertEmailTo>\n");
        }
        if (!is_null($this->SmtpSettings)) {
            $out = $this->SmtpSettings->export('SmtpSettings', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->SenderEmailAddress) ||
            !is_null($this->EmailSubjectPrefix) ||
            !is_null($this->AlertEmailToAllAdmins) ||
            !is_null($this->AlertEmailTo) ||
            !is_null($this->SmtpSettings) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SenderEmailAddress') {
            $sval = $child->nodeValue;
            $this->SenderEmailAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['SenderEmailAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EmailSubjectPrefix') {
            $sval = $child->nodeValue;
            $this->EmailSubjectPrefix = $sval;
            if (!empty($namespace)) {
                $this->namespace['EmailSubjectPrefix'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AlertEmailToAllAdmins') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AlertEmailToAllAdmins = $sval;
            if (!empty($namespace)) {
                $this->namespace['AlertEmailToAllAdmins'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AlertEmailTo') {
            $sval = $child->nodeValue;
            $this->AlertEmailTo = $sval;
            if (!empty($namespace)) {
                $this->namespace['AlertEmailTo'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SmtpSettings') {
            $obj = new VMware_VCloud_API_Extension_SmtpSettingsType();
            $obj->build($child);
            $obj->set_tagName('SmtpSettings');
            $this->setSmtpSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['SmtpSettings'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}