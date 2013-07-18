<?php
class VMware_VCloud_API_Extension_LookupServiceParamsType extends VMware_VCloud_API_Extension_LookupServiceSettingsType {
    protected $userName = null;
    protected $password = null;
    protected $VCDUrl = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $LookupServiceUrl - [optional] 
    * @param string $userName - [required] an attribute, 
    * @param string $password - [required] an attribute, 
    * @param string $VCDUrl - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $LookupServiceUrl=null, $userName=null, $password=null, $VCDUrl=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $LookupServiceUrl);
        $this->userName = $userName;
        $this->password = $password;
        $this->VCDUrl = $VCDUrl;
        $this->tagName = 'LookupServiceParams';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVCDUrl() {
        return $this->VCDUrl;
    }
    public function setVCDUrl($VCDUrl) { 
        $this->VCDUrl = $VCDUrl;
    }
    public function get_userName(){
        return $this->userName;
    }
    public function set_userName($userName) {
        $this->userName = $userName;
    }
    public function get_password(){
        return $this->password;
    }
    public function set_password($password) {
        $this->password = $password;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'userName', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'userName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->userName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='userName')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'password', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'password=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->password, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='password')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->VCDUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VCDUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VCDUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VCDUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VCDUrl')) . "</" . $ns . "VCDUrl>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VCDUrl) ||
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
        $nduserName = $attrs->getNamedItem('userName');
        if (!is_null($nduserName)) {
            $this->userName = $nduserName->value;
            if (isset($nduserName->prefix)) {
                $this->namespace['userName'] = $nduserName->prefix;
                $nsUri = $nduserName->lookupNamespaceURI($nduserName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'userName');
        } else {
            $this->userName = null;
        }
        $ndpassword = $attrs->getNamedItem('password');
        if (!is_null($ndpassword)) {
            $this->password = $ndpassword->value;
            if (isset($ndpassword->prefix)) {
                $this->namespace['password'] = $ndpassword->prefix;
                $nsUri = $ndpassword->lookupNamespaceURI($ndpassword->prefix);
            }
            $node->removeAttributeNS($nsUri, 'password');
        } else {
            $this->password = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VCDUrl') {
            $sval = $child->nodeValue;
            $this->VCDUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['VCDUrl'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}