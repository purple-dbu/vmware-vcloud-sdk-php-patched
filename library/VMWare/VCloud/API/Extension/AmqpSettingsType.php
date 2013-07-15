<?php
class VMware_VCloud_API_Extension_AmqpSettingsType extends VMware_VCloud_API_ResourceType {
    protected $AmqpHost = null;
    protected $AmqpPort = null;
    protected $AmqpUsername = null;
    protected $AmqpPassword = null;
    protected $AmqpExchange = null;
    protected $AmqpVHost = null;
    protected $AmqpUseSSL = null;
    protected $AmqpPrefix = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $AmqpHost - [required] 
    * @param int $AmqpPort - [required] 
    * @param string $AmqpUsername - [required] 
    * @param string $AmqpPassword - [optional] 
    * @param string $AmqpExchange - [required] 
    * @param string $AmqpVHost - [required] 
    * @param boolean $AmqpUseSSL - [required] 
    * @param string $AmqpPrefix - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $AmqpHost=null, $AmqpPort=null, $AmqpUsername=null, $AmqpPassword=null, $AmqpExchange=null, $AmqpVHost=null, $AmqpUseSSL=null, $AmqpPrefix=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->AmqpHost = $AmqpHost;
        $this->AmqpPort = $AmqpPort;
        $this->AmqpUsername = $AmqpUsername;
        $this->AmqpPassword = $AmqpPassword;
        $this->AmqpExchange = $AmqpExchange;
        $this->AmqpVHost = $AmqpVHost;
        $this->AmqpUseSSL = $AmqpUseSSL;
        $this->AmqpPrefix = $AmqpPrefix;
        $this->tagName = 'AmqpSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAmqpHost() {
        return $this->AmqpHost;
    }
    public function setAmqpHost($AmqpHost) { 
        $this->AmqpHost = $AmqpHost;
    }
    public function getAmqpPort() {
        return $this->AmqpPort;
    }
    public function setAmqpPort($AmqpPort) { 
        $this->AmqpPort = $AmqpPort;
    }
    public function getAmqpUsername() {
        return $this->AmqpUsername;
    }
    public function setAmqpUsername($AmqpUsername) { 
        $this->AmqpUsername = $AmqpUsername;
    }
    public function getAmqpPassword() {
        return $this->AmqpPassword;
    }
    public function setAmqpPassword($AmqpPassword) { 
        $this->AmqpPassword = $AmqpPassword;
    }
    public function getAmqpExchange() {
        return $this->AmqpExchange;
    }
    public function setAmqpExchange($AmqpExchange) { 
        $this->AmqpExchange = $AmqpExchange;
    }
    public function getAmqpVHost() {
        return $this->AmqpVHost;
    }
    public function setAmqpVHost($AmqpVHost) { 
        $this->AmqpVHost = $AmqpVHost;
    }
    public function getAmqpUseSSL() {
        return $this->AmqpUseSSL;
    }
    public function setAmqpUseSSL($AmqpUseSSL) { 
        $this->AmqpUseSSL = $AmqpUseSSL;
    }
    public function getAmqpPrefix() {
        return $this->AmqpPrefix;
    }
    public function setAmqpPrefix($AmqpPrefix) { 
        $this->AmqpPrefix = $AmqpPrefix;
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
        if (!is_null($this->AmqpHost)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AmqpHost', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AmqpHost>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AmqpHost, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AmqpHost')) . "</" . $ns . "AmqpHost>\n");
        }
        if (!is_null($this->AmqpPort)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AmqpPort', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AmqpPort>" . VMware_VCloud_API_Helper::format_integer($this->AmqpPort, $input_name='AmqpPort') . "</" . $ns . "AmqpPort>\n");
        }
        if (!is_null($this->AmqpUsername)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AmqpUsername', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AmqpUsername>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AmqpUsername, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AmqpUsername')) . "</" . $ns . "AmqpUsername>\n");
        }
        if (!is_null($this->AmqpPassword)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AmqpPassword', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AmqpPassword>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AmqpPassword, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AmqpPassword')) . "</" . $ns . "AmqpPassword>\n");
        }
        if (!is_null($this->AmqpExchange)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AmqpExchange', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AmqpExchange>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AmqpExchange, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AmqpExchange')) . "</" . $ns . "AmqpExchange>\n");
        }
        if (!is_null($this->AmqpVHost)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AmqpVHost', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AmqpVHost>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AmqpVHost, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AmqpVHost')) . "</" . $ns . "AmqpVHost>\n");
        }
        if (!is_null($this->AmqpUseSSL)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AmqpUseSSL', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AmqpUseSSL>" . VMware_VCloud_API_Helper::format_boolean($this->AmqpUseSSL, $input_name='AmqpUseSSL') . "</" . $ns . "AmqpUseSSL>\n");
     }
        if (!is_null($this->AmqpPrefix)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AmqpPrefix', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AmqpPrefix>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AmqpPrefix, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AmqpPrefix')) . "</" . $ns . "AmqpPrefix>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->AmqpHost) ||
            !is_null($this->AmqpPort) ||
            !is_null($this->AmqpUsername) ||
            !is_null($this->AmqpPassword) ||
            !is_null($this->AmqpExchange) ||
            !is_null($this->AmqpVHost) ||
            !is_null($this->AmqpUseSSL) ||
            !is_null($this->AmqpPrefix) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpHost') {
            $sval = $child->nodeValue;
            $this->AmqpHost = $sval;
            if (!empty($namespace)) {
                $this->namespace['AmqpHost'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpPort') {
            $sval = $child->nodeValue;
            $this->AmqpPort = $sval;
            if (!empty($namespace)) {
                $this->namespace['AmqpPort'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpUsername') {
            $sval = $child->nodeValue;
            $this->AmqpUsername = $sval;
            if (!empty($namespace)) {
                $this->namespace['AmqpUsername'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpPassword') {
            $sval = $child->nodeValue;
            $this->AmqpPassword = $sval;
            if (!empty($namespace)) {
                $this->namespace['AmqpPassword'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpExchange') {
            $sval = $child->nodeValue;
            $this->AmqpExchange = $sval;
            if (!empty($namespace)) {
                $this->namespace['AmqpExchange'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpVHost') {
            $sval = $child->nodeValue;
            $this->AmqpVHost = $sval;
            if (!empty($namespace)) {
                $this->namespace['AmqpVHost'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpUseSSL') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AmqpUseSSL = $sval;
            if (!empty($namespace)) {
                $this->namespace['AmqpUseSSL'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AmqpPrefix') {
            $sval = $child->nodeValue;
            $this->AmqpPrefix = $sval;
            if (!empty($namespace)) {
                $this->namespace['AmqpPrefix'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}