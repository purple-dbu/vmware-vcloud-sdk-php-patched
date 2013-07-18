<?php
class VMware_VCloud_API_Extension_SystemSettingsType extends VMware_VCloud_API_ResourceType {
    protected $GeneralSettings = null;
    protected $NotificationsSettings = null;
    protected $LdapSettings = null;
    protected $AmqpSettings = null;
    protected $EmailSettings = null;
    protected $License = null;
    protected $BrandingSettings = null;
    protected $BlockingTaskSettings = null;
    protected $PasswordPolicySettings = null;
    protected $KerberosSettings = null;
    protected $LookupServiceSettings = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_Extension_GeneralSettingsType $GeneralSettings - [optional]
    * @param VMware_VCloud_API_Extension_NotificationsSettingsType $NotificationsSettings - [optional]
    * @param VMware_VCloud_API_Extension_LdapSettingsType $LdapSettings - [optional]
    * @param VMware_VCloud_API_Extension_AmqpSettingsType $AmqpSettings - [optional]
    * @param VMware_VCloud_API_Extension_EmailSettingsType $EmailSettings - [optional]
    * @param VMware_VCloud_API_Extension_LicenseType $License - [optional]
    * @param VMware_VCloud_API_Extension_BrandingSettingsType $BrandingSettings - [optional]
    * @param VMware_VCloud_API_Extension_BlockingTaskSettingsType $BlockingTaskSettings - [optional]
    * @param VMware_VCloud_API_Extension_SystemPasswordPolicySettingsType $PasswordPolicySettings - [optional]
    * @param VMware_VCloud_API_Extension_KerberosSettingsType $KerberosSettings - [optional]
    * @param VMware_VCloud_API_Extension_LookupServiceSettingsType $LookupServiceSettings - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $GeneralSettings=null, $NotificationsSettings=null, $LdapSettings=null, $AmqpSettings=null, $EmailSettings=null, $License=null, $BrandingSettings=null, $BlockingTaskSettings=null, $PasswordPolicySettings=null, $KerberosSettings=null, $LookupServiceSettings=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->GeneralSettings = $GeneralSettings;
        $this->NotificationsSettings = $NotificationsSettings;
        $this->LdapSettings = $LdapSettings;
        $this->AmqpSettings = $AmqpSettings;
        $this->EmailSettings = $EmailSettings;
        $this->License = $License;
        $this->BrandingSettings = $BrandingSettings;
        $this->BlockingTaskSettings = $BlockingTaskSettings;
        $this->PasswordPolicySettings = $PasswordPolicySettings;
        $this->KerberosSettings = $KerberosSettings;
        $this->LookupServiceSettings = $LookupServiceSettings;
        $this->tagName = 'SystemSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getGeneralSettings() {
        return $this->GeneralSettings;
    }
    public function setGeneralSettings($GeneralSettings) { 
        $this->GeneralSettings = $GeneralSettings;
    }
    public function getNotificationsSettings() {
        return $this->NotificationsSettings;
    }
    public function setNotificationsSettings($NotificationsSettings) { 
        $this->NotificationsSettings = $NotificationsSettings;
    }
    public function getLdapSettings() {
        return $this->LdapSettings;
    }
    public function setLdapSettings($LdapSettings) { 
        $this->LdapSettings = $LdapSettings;
    }
    public function getAmqpSettings() {
        return $this->AmqpSettings;
    }
    public function setAmqpSettings($AmqpSettings) { 
        $this->AmqpSettings = $AmqpSettings;
    }
    public function getEmailSettings() {
        return $this->EmailSettings;
    }
    public function setEmailSettings($EmailSettings) { 
        $this->EmailSettings = $EmailSettings;
    }
    public function getLicense() {
        return $this->License;
    }
    public function setLicense($License) { 
        $this->License = $License;
    }
    public function getBrandingSettings() {
        return $this->BrandingSettings;
    }
    public function setBrandingSettings($BrandingSettings) { 
        $this->BrandingSettings = $BrandingSettings;
    }
    public function getBlockingTaskSettings() {
        return $this->BlockingTaskSettings;
    }
    public function setBlockingTaskSettings($BlockingTaskSettings) { 
        $this->BlockingTaskSettings = $BlockingTaskSettings;
    }
    public function getPasswordPolicySettings() {
        return $this->PasswordPolicySettings;
    }
    public function setPasswordPolicySettings($PasswordPolicySettings) { 
        $this->PasswordPolicySettings = $PasswordPolicySettings;
    }
    public function getKerberosSettings() {
        return $this->KerberosSettings;
    }
    public function setKerberosSettings($KerberosSettings) { 
        $this->KerberosSettings = $KerberosSettings;
    }
    public function getLookupServiceSettings() {
        return $this->LookupServiceSettings;
    }
    public function setLookupServiceSettings($LookupServiceSettings) { 
        $this->LookupServiceSettings = $LookupServiceSettings;
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
        if (!is_null($this->GeneralSettings)) {
            $out = $this->GeneralSettings->export('GeneralSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->NotificationsSettings)) {
            $out = $this->NotificationsSettings->export('NotificationsSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->LdapSettings)) {
            $out = $this->LdapSettings->export('LdapSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AmqpSettings)) {
            $out = $this->AmqpSettings->export('AmqpSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->EmailSettings)) {
            $out = $this->EmailSettings->export('EmailSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->License)) {
            $out = $this->License->export('License', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->BrandingSettings)) {
            $out = $this->BrandingSettings->export('BrandingSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->BlockingTaskSettings)) {
            $out = $this->BlockingTaskSettings->export('BlockingTaskSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->PasswordPolicySettings)) {
            $out = $this->PasswordPolicySettings->export('PasswordPolicySettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->KerberosSettings)) {
            $out = $this->KerberosSettings->export('KerberosSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->LookupServiceSettings)) {
            $out = $this->LookupServiceSettings->export('LookupServiceSettings', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->GeneralSettings) ||
            !is_null($this->NotificationsSettings) ||
            !is_null($this->LdapSettings) ||
            !is_null($this->AmqpSettings) ||
            !is_null($this->EmailSettings) ||
            !is_null($this->License) ||
            !is_null($this->BrandingSettings) ||
            !is_null($this->BlockingTaskSettings) ||
            !is_null($this->PasswordPolicySettings) ||
            !is_null($this->KerberosSettings) ||
            !is_null($this->LookupServiceSettings) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GeneralSettings') {
            $obj = new VMware_VCloud_API_Extension_GeneralSettingsType();
            $obj->build($child);
            $obj->set_tagName('GeneralSettings');
            $this->setGeneralSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['GeneralSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NotificationsSettings') {
            $obj = new VMware_VCloud_API_Extension_NotificationsSettingsType();
            $obj->build($child);
            $obj->set_tagName('NotificationsSettings');
            $this->setNotificationsSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['NotificationsSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LdapSettings') {
            $obj = new VMware_VCloud_API_Extension_LdapSettingsType();
            $obj->build($child);
            $obj->set_tagName('LdapSettings');
            $this->setLdapSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['LdapSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpSettings') {
            $obj = new VMware_VCloud_API_Extension_AmqpSettingsType();
            $obj->build($child);
            $obj->set_tagName('AmqpSettings');
            $this->setAmqpSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['AmqpSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EmailSettings') {
            $obj = new VMware_VCloud_API_Extension_EmailSettingsType();
            $obj->build($child);
            $obj->set_tagName('EmailSettings');
            $this->setEmailSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['EmailSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'License') {
            $obj = new VMware_VCloud_API_Extension_LicenseType();
            $obj->build($child);
            $obj->set_tagName('License');
            $this->setLicense($obj);
            if (!empty($namespace)) {
                $this->namespace['License'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BrandingSettings') {
            $obj = new VMware_VCloud_API_Extension_BrandingSettingsType();
            $obj->build($child);
            $obj->set_tagName('BrandingSettings');
            $this->setBrandingSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['BrandingSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BlockingTaskSettings') {
            $obj = new VMware_VCloud_API_Extension_BlockingTaskSettingsType();
            $obj->build($child);
            $obj->set_tagName('BlockingTaskSettings');
            $this->setBlockingTaskSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['BlockingTaskSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PasswordPolicySettings') {
            $obj = new VMware_VCloud_API_Extension_SystemPasswordPolicySettingsType();
            $obj->build($child);
            $obj->set_tagName('PasswordPolicySettings');
            $this->setPasswordPolicySettings($obj);
            if (!empty($namespace)) {
                $this->namespace['PasswordPolicySettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'KerberosSettings') {
            $obj = new VMware_VCloud_API_Extension_KerberosSettingsType();
            $obj->build($child);
            $obj->set_tagName('KerberosSettings');
            $this->setKerberosSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['KerberosSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LookupServiceSettings') {
            $obj = new VMware_VCloud_API_Extension_LookupServiceSettingsType();
            $obj->build($child);
            $obj->set_tagName('LookupServiceSettings');
            $this->setLookupServiceSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['LookupServiceSettings'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}