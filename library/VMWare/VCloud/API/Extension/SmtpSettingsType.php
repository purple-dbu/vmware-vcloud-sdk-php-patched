<?php
class VMware_VCloud_API_Extension_SmtpSettingsType extends VMware_VCloud_API_ResourceType {
    protected $UseAuthentication = null;
    protected $SmtpServerName = null;
    protected $SmtpServerPort = null;
    protected $ssl = null;
    protected $UserName = null;
    protected $Password = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param boolean $UseAuthentication - [required] 
    * @param string $SmtpServerName - [optional] 
    * @param int $SmtpServerPort - [optional] 
    * @param boolean $ssl - [optional] 
    * @param string $UserName - [optional] 
    * @param string $Password - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $UseAuthentication=null, $SmtpServerName=null, $SmtpServerPort=null, $ssl=null, $UserName=null, $Password=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->UseAuthentication = $UseAuthentication;
        $this->SmtpServerName = $SmtpServerName;
        $this->SmtpServerPort = $SmtpServerPort;
        $this->ssl = $ssl;
        $this->UserName = $UserName;
        $this->Password = $Password;
        $this->tagName = '';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getUseAuthentication() {
        return $this->UseAuthentication;
    }
    public function setUseAuthentication($UseAuthentication) { 
        $this->UseAuthentication = $UseAuthentication;
    }
    public function getSmtpServerName() {
        return $this->SmtpServerName;
    }
    public function setSmtpServerName($SmtpServerName) { 
        $this->SmtpServerName = $SmtpServerName;
    }
    public function getSmtpServerPort() {
        return $this->SmtpServerPort;
    }
    public function setSmtpServerPort($SmtpServerPort) { 
        $this->SmtpServerPort = $SmtpServerPort;
    }
    public function get_ssl() {
        return $this->ssl;
    }
    public function set_ssl($ssl) { 
        $this->ssl = $ssl;
    }
    public function getUserName() {
        return $this->UserName;
    }
    public function setUserName($UserName) { 
        $this->UserName = $UserName;
    }
    public function getPassword() {
        return $this->Password;
    }
    public function setPassword($Password) { 
        $this->Password = $Password;
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
        if (!is_null($this->UseAuthentication)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UseAuthentication', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UseAuthentication>" . VMware_VCloud_API_Helper::format_boolean($this->UseAuthentication, $input_name='UseAuthentication') . "</" . $ns . "UseAuthentication>\n");
     }
        if (!is_null($this->SmtpServerName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SmtpServerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SmtpServerName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SmtpServerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SmtpServerName')) . "</" . $ns . "SmtpServerName>\n");
        }
        if (!is_null($this->SmtpServerPort)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SmtpServerPort', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SmtpServerPort>" . VMware_VCloud_API_Helper::format_integer($this->SmtpServerPort, $input_name='SmtpServerPort') . "</" . $ns . "SmtpServerPort>\n");
        }
        if (!is_null($this->ssl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ssl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ssl>" . VMware_VCloud_API_Helper::format_boolean($this->ssl, $input_name='ssl') . "</" . $ns . "ssl>\n");
        }
        if (!is_null($this->UserName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UserName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UserName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->UserName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='UserName')) . "</" . $ns . "UserName>\n");
        }
        if (!is_null($this->Password)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Password', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Password>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Password, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Password')) . "</" . $ns . "Password>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->UseAuthentication) ||
            !is_null($this->SmtpServerName) ||
            !is_null($this->SmtpServerPort) ||
            !is_null($this->ssl) ||
            !is_null($this->UserName) ||
            !is_null($this->Password) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UseAuthentication') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->UseAuthentication = $sval;
            if (!empty($namespace)) {
                $this->namespace['UseAuthentication'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SmtpServerName') {
            $sval = $child->nodeValue;
            $this->SmtpServerName = $sval;
            if (!empty($namespace)) {
                $this->namespace['SmtpServerName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SmtpServerPort') {
            $sval = $child->nodeValue;
            $this->SmtpServerPort = $sval;
            if (!empty($namespace)) {
                $this->namespace['SmtpServerPort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ssl') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->ssl = $sval;
            if (!empty($namespace)) {
                $this->namespace['ssl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UserName') {
            $sval = $child->nodeValue;
            $this->UserName = $sval;
            if (!empty($namespace)) {
                $this->namespace['UserName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Password') {
            $sval = $child->nodeValue;
            $this->Password = $sval;
            if (!empty($namespace)) {
                $this->namespace['Password'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}