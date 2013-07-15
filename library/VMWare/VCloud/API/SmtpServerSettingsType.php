<?php
class VMware_VCloud_API_SmtpServerSettingsType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $IsUseAuthentication = null;
    protected $Host = null;
    protected $Port = null;
    protected $Username = null;
    protected $Password = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $IsUseAuthentication - [required] 
    * @param string $Host - [required] 
    * @param int $Port - [optional] 
    * @param string $Username - [required] 
    * @param string $Password - [optional] 
    */
    public function __construct($VCloudExtension=null, $IsUseAuthentication=null, $Host=null, $Port=null, $Username=null, $Password=null) {
        parent::__construct($VCloudExtension);
        $this->IsUseAuthentication = $IsUseAuthentication;
        $this->Host = $Host;
        $this->Port = $Port;
        $this->Username = $Username;
        $this->Password = $Password;
        $this->tagName = 'SmtpServerSettings';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getIsUseAuthentication() {
        return $this->IsUseAuthentication;
    }
    public function setIsUseAuthentication($IsUseAuthentication) { 
        $this->IsUseAuthentication = $IsUseAuthentication;
    }
    public function getHost() {
        return $this->Host;
    }
    public function setHost($Host) { 
        $this->Host = $Host;
    }
    public function getPort() {
        return $this->Port;
    }
    public function setPort($Port) { 
        $this->Port = $Port;
    }
    public function getUsername() {
        return $this->Username;
    }
    public function setUsername($Username) { 
        $this->Username = $Username;
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
        if (!is_null($this->IsUseAuthentication)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsUseAuthentication', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsUseAuthentication>" . VMware_VCloud_API_Helper::format_boolean($this->IsUseAuthentication, $input_name='IsUseAuthentication') . "</" . $ns . "IsUseAuthentication>\n");
     }
        if (!is_null($this->Host)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Host', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Host>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Host, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Host')) . "</" . $ns . "Host>\n");
        }
        if (!is_null($this->Port)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Port', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Port>" . VMware_VCloud_API_Helper::format_integer($this->Port, $input_name='Port') . "</" . $ns . "Port>\n");
        }
        if (!is_null($this->Username)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Username', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Username>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Username, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Username')) . "</" . $ns . "Username>\n");
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
            !is_null($this->IsUseAuthentication) ||
            !is_null($this->Host) ||
            !is_null($this->Port) ||
            !is_null($this->Username) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsUseAuthentication') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsUseAuthentication = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsUseAuthentication'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Host') {
            $sval = $child->nodeValue;
            $this->Host = $sval;
            if (!empty($namespace)) {
                $this->namespace['Host'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Port') {
            $sval = $child->nodeValue;
            $this->Port = $sval;
            if (!empty($namespace)) {
                $this->namespace['Port'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Username') {
            $sval = $child->nodeValue;
            $this->Username = $sval;
            if (!empty($namespace)) {
                $this->namespace['Username'] = $namespace;
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