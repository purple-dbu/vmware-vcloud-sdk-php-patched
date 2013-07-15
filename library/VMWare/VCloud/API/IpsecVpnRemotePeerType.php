<?php
class VMware_VCloud_API_IpsecVpnRemotePeerType extends VMware_VCloud_API_IpsecVpnManagedPeerType {
    protected $VcdUrl = null;
    protected $VcdOrganization = null;
    protected $VcdUsername = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Id - [required] 
    * @param string $Name - [required] 
    * @param string $VcdUrl - [required] 
    * @param string $VcdOrganization - [required] 
    * @param string $VcdUsername - [required] 
    */
    public function __construct($VCloudExtension=null, $Id=null, $Name=null, $VcdUrl=null, $VcdOrganization=null, $VcdUsername=null) {
        parent::__construct($VCloudExtension, $Id, $Name);
        $this->VcdUrl = $VcdUrl;
        $this->VcdOrganization = $VcdOrganization;
        $this->VcdUsername = $VcdUsername;
        $this->tagName = 'IpsecVpnRemotePeer';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVcdUrl() {
        return $this->VcdUrl;
    }
    public function setVcdUrl($VcdUrl) { 
        $this->VcdUrl = $VcdUrl;
    }
    public function getVcdOrganization() {
        return $this->VcdOrganization;
    }
    public function setVcdOrganization($VcdOrganization) { 
        $this->VcdOrganization = $VcdOrganization;
    }
    public function getVcdUsername() {
        return $this->VcdUsername;
    }
    public function setVcdUsername($VcdUsername) { 
        $this->VcdUsername = $VcdUsername;
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
        if (!is_null($this->VcdUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcdUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcdUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcdUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcdUrl')) . "</" . $ns . "VcdUrl>\n");
        }
        if (!is_null($this->VcdOrganization)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcdOrganization', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcdOrganization>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcdOrganization, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcdOrganization')) . "</" . $ns . "VcdOrganization>\n");
        }
        if (!is_null($this->VcdUsername)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcdUsername', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcdUsername>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcdUsername, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcdUsername')) . "</" . $ns . "VcdUsername>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VcdUrl) ||
            !is_null($this->VcdOrganization) ||
            !is_null($this->VcdUsername) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcdUrl') {
            $sval = $child->nodeValue;
            $this->VcdUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcdUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcdOrganization') {
            $sval = $child->nodeValue;
            $this->VcdOrganization = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcdOrganization'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcdUsername') {
            $sval = $child->nodeValue;
            $this->VcdUsername = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcdUsername'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}