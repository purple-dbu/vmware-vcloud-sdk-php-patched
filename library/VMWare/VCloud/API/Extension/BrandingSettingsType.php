<?php
class VMware_VCloud_API_Extension_BrandingSettingsType extends VMware_VCloud_API_ResourceType {
    protected $CompanyName = null;
    protected $LoginPageCustomizationTheme = null;
    protected $Theme = null;
    protected $PreviewCustomTheme = null;
    protected $FinalCustomTheme = null;
    protected $AboutCompanyUrl = null;
    protected $SupportUrl = null;
    protected $SignUpUrl = null;
    protected $ForgotUserNameOrPasswordURL = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $CompanyName - [required] 
    * @param string $LoginPageCustomizationTheme - [optional] 
    * @param string $Theme - [optional] 
    * @param string $PreviewCustomTheme - [optional] 
    * @param string $FinalCustomTheme - [optional] 
    * @param string $AboutCompanyUrl - [optional] 
    * @param string $SupportUrl - [optional] 
    * @param string $SignUpUrl - [optional] 
    * @param string $ForgotUserNameOrPasswordURL - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $CompanyName=null, $LoginPageCustomizationTheme=null, $Theme=null, $PreviewCustomTheme=null, $FinalCustomTheme=null, $AboutCompanyUrl=null, $SupportUrl=null, $SignUpUrl=null, $ForgotUserNameOrPasswordURL=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->CompanyName = $CompanyName;
        $this->LoginPageCustomizationTheme = $LoginPageCustomizationTheme;
        $this->Theme = $Theme;
        $this->PreviewCustomTheme = $PreviewCustomTheme;
        $this->FinalCustomTheme = $FinalCustomTheme;
        $this->AboutCompanyUrl = $AboutCompanyUrl;
        $this->SupportUrl = $SupportUrl;
        $this->SignUpUrl = $SignUpUrl;
        $this->ForgotUserNameOrPasswordURL = $ForgotUserNameOrPasswordURL;
        $this->tagName = 'BrandingSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getCompanyName() {
        return $this->CompanyName;
    }
    public function setCompanyName($CompanyName) { 
        $this->CompanyName = $CompanyName;
    }
    public function getLoginPageCustomizationTheme() {
        return $this->LoginPageCustomizationTheme;
    }
    public function setLoginPageCustomizationTheme($LoginPageCustomizationTheme) { 
        $this->LoginPageCustomizationTheme = $LoginPageCustomizationTheme;
    }
    public function getTheme() {
        return $this->Theme;
    }
    public function setTheme($Theme) { 
        $this->Theme = $Theme;
    }
    public function getPreviewCustomTheme() {
        return $this->PreviewCustomTheme;
    }
    public function setPreviewCustomTheme($PreviewCustomTheme) { 
        $this->PreviewCustomTheme = $PreviewCustomTheme;
    }
    public function getFinalCustomTheme() {
        return $this->FinalCustomTheme;
    }
    public function setFinalCustomTheme($FinalCustomTheme) { 
        $this->FinalCustomTheme = $FinalCustomTheme;
    }
    public function getAboutCompanyUrl() {
        return $this->AboutCompanyUrl;
    }
    public function setAboutCompanyUrl($AboutCompanyUrl) { 
        $this->AboutCompanyUrl = $AboutCompanyUrl;
    }
    public function getSupportUrl() {
        return $this->SupportUrl;
    }
    public function setSupportUrl($SupportUrl) { 
        $this->SupportUrl = $SupportUrl;
    }
    public function getSignUpUrl() {
        return $this->SignUpUrl;
    }
    public function setSignUpUrl($SignUpUrl) { 
        $this->SignUpUrl = $SignUpUrl;
    }
    public function getForgotUserNameOrPasswordURL() {
        return $this->ForgotUserNameOrPasswordURL;
    }
    public function setForgotUserNameOrPasswordURL($ForgotUserNameOrPasswordURL) { 
        $this->ForgotUserNameOrPasswordURL = $ForgotUserNameOrPasswordURL;
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
        if (!is_null($this->CompanyName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CompanyName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CompanyName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->CompanyName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='CompanyName')) . "</" . $ns . "CompanyName>\n");
        }
        if (!is_null($this->LoginPageCustomizationTheme)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LoginPageCustomizationTheme', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LoginPageCustomizationTheme>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->LoginPageCustomizationTheme, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='LoginPageCustomizationTheme')) . "</" . $ns . "LoginPageCustomizationTheme>\n");
        }
        if (!is_null($this->Theme)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Theme', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Theme>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Theme, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Theme')) . "</" . $ns . "Theme>\n");
        }
        if (!is_null($this->PreviewCustomTheme)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PreviewCustomTheme', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PreviewCustomTheme>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->PreviewCustomTheme, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='PreviewCustomTheme')) . "</" . $ns . "PreviewCustomTheme>\n");
        }
        if (!is_null($this->FinalCustomTheme)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'FinalCustomTheme', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "FinalCustomTheme>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->FinalCustomTheme, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='FinalCustomTheme')) . "</" . $ns . "FinalCustomTheme>\n");
        }
        if (!is_null($this->AboutCompanyUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AboutCompanyUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AboutCompanyUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AboutCompanyUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AboutCompanyUrl')) . "</" . $ns . "AboutCompanyUrl>\n");
        }
        if (!is_null($this->SupportUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SupportUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SupportUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SupportUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SupportUrl')) . "</" . $ns . "SupportUrl>\n");
        }
        if (!is_null($this->SignUpUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SignUpUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SignUpUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SignUpUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SignUpUrl')) . "</" . $ns . "SignUpUrl>\n");
        }
        if (!is_null($this->ForgotUserNameOrPasswordURL)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ForgotUserNameOrPasswordURL', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ForgotUserNameOrPasswordURL>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ForgotUserNameOrPasswordURL, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ForgotUserNameOrPasswordURL')) . "</" . $ns . "ForgotUserNameOrPasswordURL>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->CompanyName) ||
            !is_null($this->LoginPageCustomizationTheme) ||
            !is_null($this->Theme) ||
            !is_null($this->PreviewCustomTheme) ||
            !is_null($this->FinalCustomTheme) ||
            !is_null($this->AboutCompanyUrl) ||
            !is_null($this->SupportUrl) ||
            !is_null($this->SignUpUrl) ||
            !is_null($this->ForgotUserNameOrPasswordURL) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CompanyName') {
            $sval = $child->nodeValue;
            $this->CompanyName = $sval;
            if (!empty($namespace)) {
                $this->namespace['CompanyName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LoginPageCustomizationTheme') {
            $sval = $child->nodeValue;
            $this->LoginPageCustomizationTheme = $sval;
            if (!empty($namespace)) {
                $this->namespace['LoginPageCustomizationTheme'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Theme') {
            $sval = $child->nodeValue;
            $this->Theme = $sval;
            if (!empty($namespace)) {
                $this->namespace['Theme'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PreviewCustomTheme') {
            $sval = $child->nodeValue;
            $this->PreviewCustomTheme = $sval;
            if (!empty($namespace)) {
                $this->namespace['PreviewCustomTheme'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FinalCustomTheme') {
            $sval = $child->nodeValue;
            $this->FinalCustomTheme = $sval;
            if (!empty($namespace)) {
                $this->namespace['FinalCustomTheme'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AboutCompanyUrl') {
            $sval = $child->nodeValue;
            $this->AboutCompanyUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['AboutCompanyUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SupportUrl') {
            $sval = $child->nodeValue;
            $this->SupportUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['SupportUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SignUpUrl') {
            $sval = $child->nodeValue;
            $this->SignUpUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['SignUpUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ForgotUserNameOrPasswordURL') {
            $sval = $child->nodeValue;
            $this->ForgotUserNameOrPasswordURL = $sval;
            if (!empty($namespace)) {
                $this->namespace['ForgotUserNameOrPasswordURL'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}