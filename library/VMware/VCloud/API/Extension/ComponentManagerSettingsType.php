<?php
class VMware_VCloud_API_Extension_ComponentManagerSettingsType extends VMware_VCloud_API_ResourceType {
    protected $CMUrl = null;
    protected $SSOAdminUsername = null;
    protected $SSOAdminPassword = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $CMUrl - [optional] 
    * @param string $SSOAdminUsername - [optional] 
    * @param string $SSOAdminPassword - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $CMUrl=null, $SSOAdminUsername=null, $SSOAdminPassword=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->CMUrl = $CMUrl;
        $this->SSOAdminUsername = $SSOAdminUsername;
        $this->SSOAdminPassword = $SSOAdminPassword;
        $this->tagName = 'ComponentManagerSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getCMUrl() {
        return $this->CMUrl;
    }
    public function setCMUrl($CMUrl) { 
        $this->CMUrl = $CMUrl;
    }
    public function getSSOAdminUsername() {
        return $this->SSOAdminUsername;
    }
    public function setSSOAdminUsername($SSOAdminUsername) { 
        $this->SSOAdminUsername = $SSOAdminUsername;
    }
    public function getSSOAdminPassword() {
        return $this->SSOAdminPassword;
    }
    public function setSSOAdminPassword($SSOAdminPassword) { 
        $this->SSOAdminPassword = $SSOAdminPassword;
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
        if (!is_null($this->CMUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CMUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CMUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->CMUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='CMUrl')) . "</" . $ns . "CMUrl>\n");
        }
        if (!is_null($this->SSOAdminUsername)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SSOAdminUsername', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SSOAdminUsername>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SSOAdminUsername, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SSOAdminUsername')) . "</" . $ns . "SSOAdminUsername>\n");
        }
        if (!is_null($this->SSOAdminPassword)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SSOAdminPassword', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SSOAdminPassword>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SSOAdminPassword, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SSOAdminPassword')) . "</" . $ns . "SSOAdminPassword>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->CMUrl) ||
            !is_null($this->SSOAdminUsername) ||
            !is_null($this->SSOAdminPassword) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CMUrl') {
            $sval = $child->nodeValue;
            $this->CMUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['CMUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SSOAdminUsername') {
            $sval = $child->nodeValue;
            $this->SSOAdminUsername = $sval;
            if (!empty($namespace)) {
                $this->namespace['SSOAdminUsername'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SSOAdminPassword') {
            $sval = $child->nodeValue;
            $this->SSOAdminPassword = $sval;
            if (!empty($namespace)) {
                $this->namespace['SSOAdminPassword'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}