<?php
class VMware_VCloud_API_Extension_SystemPasswordPolicySettingsType extends VMware_VCloud_API_ResourceType {
    protected $AccountLockoutEnabled = null;
    protected $AdminAccountLockoutEnabled = null;
    protected $InvalidLoginsBeforeLockout = null;
    protected $AccountLockoutIntervalMinutes = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param boolean $AccountLockoutEnabled - [required] 
    * @param boolean $AdminAccountLockoutEnabled - [required] 
    * @param int $InvalidLoginsBeforeLockout - [required] 
    * @param string $AccountLockoutIntervalMinutes - [required] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $AccountLockoutEnabled=null, $AdminAccountLockoutEnabled=null, $InvalidLoginsBeforeLockout=null, $AccountLockoutIntervalMinutes=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->AccountLockoutEnabled = $AccountLockoutEnabled;
        $this->AdminAccountLockoutEnabled = $AdminAccountLockoutEnabled;
        $this->InvalidLoginsBeforeLockout = $InvalidLoginsBeforeLockout;
        $this->AccountLockoutIntervalMinutes = $AccountLockoutIntervalMinutes;
        $this->tagName = 'SystemPasswordPolicySettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAccountLockoutEnabled() {
        return $this->AccountLockoutEnabled;
    }
    public function setAccountLockoutEnabled($AccountLockoutEnabled) { 
        $this->AccountLockoutEnabled = $AccountLockoutEnabled;
    }
    public function getAdminAccountLockoutEnabled() {
        return $this->AdminAccountLockoutEnabled;
    }
    public function setAdminAccountLockoutEnabled($AdminAccountLockoutEnabled) { 
        $this->AdminAccountLockoutEnabled = $AdminAccountLockoutEnabled;
    }
    public function getInvalidLoginsBeforeLockout() {
        return $this->InvalidLoginsBeforeLockout;
    }
    public function setInvalidLoginsBeforeLockout($InvalidLoginsBeforeLockout) { 
        $this->InvalidLoginsBeforeLockout = $InvalidLoginsBeforeLockout;
    }
    public function getAccountLockoutIntervalMinutes() {
        return $this->AccountLockoutIntervalMinutes;
    }
    public function setAccountLockoutIntervalMinutes($AccountLockoutIntervalMinutes) { 
        $this->AccountLockoutIntervalMinutes = $AccountLockoutIntervalMinutes;
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
        if (!is_null($this->AccountLockoutEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AccountLockoutEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AccountLockoutEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->AccountLockoutEnabled, $input_name='AccountLockoutEnabled') . "</" . $ns . "AccountLockoutEnabled>\n");
     }
        if (!is_null($this->AdminAccountLockoutEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AdminAccountLockoutEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AdminAccountLockoutEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->AdminAccountLockoutEnabled, $input_name='AdminAccountLockoutEnabled') . "</" . $ns . "AdminAccountLockoutEnabled>\n");
     }
        if (!is_null($this->InvalidLoginsBeforeLockout)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'InvalidLoginsBeforeLockout', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "InvalidLoginsBeforeLockout>" . VMware_VCloud_API_Helper::format_integer($this->InvalidLoginsBeforeLockout, $input_name='InvalidLoginsBeforeLockout') . "</" . $ns . "InvalidLoginsBeforeLockout>\n");
        }
        if (!is_null($this->AccountLockoutIntervalMinutes)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AccountLockoutIntervalMinutes', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AccountLockoutIntervalMinutes>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AccountLockoutIntervalMinutes, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AccountLockoutIntervalMinutes')) . "</" . $ns . "AccountLockoutIntervalMinutes>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->AccountLockoutEnabled) ||
            !is_null($this->AdminAccountLockoutEnabled) ||
            !is_null($this->InvalidLoginsBeforeLockout) ||
            !is_null($this->AccountLockoutIntervalMinutes) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AccountLockoutEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AccountLockoutEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['AccountLockoutEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminAccountLockoutEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AdminAccountLockoutEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['AdminAccountLockoutEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InvalidLoginsBeforeLockout') {
            $sval = $child->nodeValue;
            $this->InvalidLoginsBeforeLockout = $sval;
            if (!empty($namespace)) {
                $this->namespace['InvalidLoginsBeforeLockout'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AccountLockoutIntervalMinutes') {
            $sval = $child->nodeValue;
            $this->AccountLockoutIntervalMinutes = $sval;
            if (!empty($namespace)) {
                $this->namespace['AccountLockoutIntervalMinutes'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}