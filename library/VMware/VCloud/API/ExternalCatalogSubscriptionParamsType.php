<?php
class VMware_VCloud_API_ExternalCatalogSubscriptionParamsType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $SubscribeToExternalFeeds = null;
    protected $Location = null;
    protected $Password = null;
    protected $ExpectedSslThumbprint = null;
    protected $LocalCopy = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $SubscribeToExternalFeeds - [optional] 
    * @param string $Location - [optional] 
    * @param string $Password - [optional] 
    * @param string $ExpectedSslThumbprint - [optional] 
    * @param boolean $LocalCopy - [optional] 
    */
    public function __construct($VCloudExtension=null, $SubscribeToExternalFeeds=null, $Location=null, $Password=null, $ExpectedSslThumbprint=null, $LocalCopy=null) {
        parent::__construct($VCloudExtension);
        $this->SubscribeToExternalFeeds = $SubscribeToExternalFeeds;
        $this->Location = $Location;
        $this->Password = $Password;
        $this->ExpectedSslThumbprint = $ExpectedSslThumbprint;
        $this->LocalCopy = $LocalCopy;
        $this->tagName = 'ExternalCatalogSubscriptionParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSubscribeToExternalFeeds() {
        return $this->SubscribeToExternalFeeds;
    }
    public function setSubscribeToExternalFeeds($SubscribeToExternalFeeds) { 
        $this->SubscribeToExternalFeeds = $SubscribeToExternalFeeds;
    }
    public function getLocation() {
        return $this->Location;
    }
    public function setLocation($Location) { 
        $this->Location = $Location;
    }
    public function getPassword() {
        return $this->Password;
    }
    public function setPassword($Password) { 
        $this->Password = $Password;
    }
    public function getExpectedSslThumbprint() {
        return $this->ExpectedSslThumbprint;
    }
    public function setExpectedSslThumbprint($ExpectedSslThumbprint) { 
        $this->ExpectedSslThumbprint = $ExpectedSslThumbprint;
    }
    public function getLocalCopy() {
        return $this->LocalCopy;
    }
    public function setLocalCopy($LocalCopy) { 
        $this->LocalCopy = $LocalCopy;
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
        if (!is_null($this->SubscribeToExternalFeeds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SubscribeToExternalFeeds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SubscribeToExternalFeeds>" . VMware_VCloud_API_Helper::format_boolean($this->SubscribeToExternalFeeds, $input_name='SubscribeToExternalFeeds') . "</" . $ns . "SubscribeToExternalFeeds>\n");
        }
        if (!is_null($this->Location)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Location', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Location>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Location, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Location')) . "</" . $ns . "Location>\n");
        }
        if (!is_null($this->Password)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Password', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Password>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Password, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Password')) . "</" . $ns . "Password>\n");
        }
        if (!is_null($this->ExpectedSslThumbprint)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ExpectedSslThumbprint', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ExpectedSslThumbprint>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ExpectedSslThumbprint, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ExpectedSslThumbprint')) . "</" . $ns . "ExpectedSslThumbprint>\n");
        }
        if (!is_null($this->LocalCopy)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LocalCopy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LocalCopy>" . VMware_VCloud_API_Helper::format_boolean($this->LocalCopy, $input_name='LocalCopy') . "</" . $ns . "LocalCopy>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->SubscribeToExternalFeeds) ||
            !is_null($this->Location) ||
            !is_null($this->Password) ||
            !is_null($this->ExpectedSslThumbprint) ||
            !is_null($this->LocalCopy) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SubscribeToExternalFeeds') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->SubscribeToExternalFeeds = $sval;
            if (!empty($namespace)) {
                $this->namespace['SubscribeToExternalFeeds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Location') {
            $sval = $child->nodeValue;
            $this->Location = $sval;
            if (!empty($namespace)) {
                $this->namespace['Location'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Password') {
            $sval = $child->nodeValue;
            $this->Password = $sval;
            if (!empty($namespace)) {
                $this->namespace['Password'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExpectedSslThumbprint') {
            $sval = $child->nodeValue;
            $this->ExpectedSslThumbprint = $sval;
            if (!empty($namespace)) {
                $this->namespace['ExpectedSslThumbprint'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LocalCopy') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->LocalCopy = $sval;
            if (!empty($namespace)) {
                $this->namespace['LocalCopy'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}