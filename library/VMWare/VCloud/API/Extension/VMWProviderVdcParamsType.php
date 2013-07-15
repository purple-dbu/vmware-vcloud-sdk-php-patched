<?php
class VMware_VCloud_API_Extension_VMWProviderVdcParamsType extends VMware_VCloud_API_ParamsType {
    protected $ResourcePoolRefs = null;
    protected $VimServer = array();
    protected $HighestSupportedHardwareVersion = null;
    protected $IsEnabled = null;
    protected $StorageProfile = array();
    protected $HostRefs = null;
    protected $DefaultPassword = null;
    protected $DefaultUsername = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_Extension_VimObjectRefsType $ResourcePoolRefs - [required]
    * @param array $VimServer - [optional] an array of VMware_VCloud_API_ReferenceType objects
    * @param string $HighestSupportedHardwareVersion - [optional] 
    * @param boolean $IsEnabled - [optional] 
    * @param array $StorageProfile - [required] an array of string
    * @param VMware_VCloud_API_Extension_HostObjectRefsType $HostRefs - [optional]
    * @param string $DefaultPassword - [optional] 
    * @param string $DefaultUsername - [optional] 
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $ResourcePoolRefs=null, $VimServer=null, $HighestSupportedHardwareVersion=null, $IsEnabled=null, $StorageProfile=null, $HostRefs=null, $DefaultPassword=null, $DefaultUsername=null) {
        parent::__construct($VCloudExtension, $name, $Description);
        $this->ResourcePoolRefs = $ResourcePoolRefs;
        if (!is_null($VimServer)) {
            $this->VimServer = $VimServer;
        }
        $this->HighestSupportedHardwareVersion = $HighestSupportedHardwareVersion;
        $this->IsEnabled = $IsEnabled;
        if (!is_null($StorageProfile)) {
            $this->StorageProfile = $StorageProfile;
        }
        $this->HostRefs = $HostRefs;
        $this->DefaultPassword = $DefaultPassword;
        $this->DefaultUsername = $DefaultUsername;
        $this->tagName = 'VMWProviderVdcParams';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getResourcePoolRefs() {
        return $this->ResourcePoolRefs;
    }
    public function setResourcePoolRefs($ResourcePoolRefs) { 
        $this->ResourcePoolRefs = $ResourcePoolRefs;
    }
    public function getVimServer() {
        return $this->VimServer;
    }
    public function setVimServer($VimServer) { 
        $this->VimServer = $VimServer;
    }
    public function addVimServer($value) { array_push($this->VimServer, $value); }
    public function getHighestSupportedHardwareVersion() {
        return $this->HighestSupportedHardwareVersion;
    }
    public function setHighestSupportedHardwareVersion($HighestSupportedHardwareVersion) { 
        $this->HighestSupportedHardwareVersion = $HighestSupportedHardwareVersion;
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getStorageProfile() {
        return $this->StorageProfile;
    }
    public function setStorageProfile($StorageProfile) { 
        $this->StorageProfile = $StorageProfile;
    }
    public function addStorageProfile($value) { array_push($this->StorageProfile, $value); }
    public function getHostRefs() {
        return $this->HostRefs;
    }
    public function setHostRefs($HostRefs) { 
        $this->HostRefs = $HostRefs;
    }
    public function getDefaultPassword() {
        return $this->DefaultPassword;
    }
    public function setDefaultPassword($DefaultPassword) { 
        $this->DefaultPassword = $DefaultPassword;
    }
    public function getDefaultUsername() {
        return $this->DefaultUsername;
    }
    public function setDefaultUsername($DefaultUsername) { 
        $this->DefaultUsername = $DefaultUsername;
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
        if (!is_null($this->ResourcePoolRefs)) {
            $out = $this->ResourcePoolRefs->export('ResourcePoolRefs', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->VimServer)) {
            foreach ($this->VimServer as $VimServer) {
                $out = $VimServer->export('VimServer', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->HighestSupportedHardwareVersion)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HighestSupportedHardwareVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HighestSupportedHardwareVersion>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->HighestSupportedHardwareVersion, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='HighestSupportedHardwareVersion')) . "</" . $ns . "HighestSupportedHardwareVersion>\n");
        }
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (isset($this->StorageProfile)) {
            foreach ($this->StorageProfile as $StorageProfile) {
                $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'StorageProfile', self::$defaultNS, $namespace, $rootNS);
                $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "StorageProfile>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($StorageProfile, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='StorageProfile')) . "</" . $ns . "StorageProfile>\n");
            }
        }
        if (!is_null($this->HostRefs)) {
            $out = $this->HostRefs->export('HostRefs', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->DefaultPassword)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DefaultPassword', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DefaultPassword>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DefaultPassword, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DefaultPassword')) . "</" . $ns . "DefaultPassword>\n");
        }
        if (!is_null($this->DefaultUsername)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DefaultUsername', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DefaultUsername>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DefaultUsername, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DefaultUsername')) . "</" . $ns . "DefaultUsername>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->ResourcePoolRefs) ||
            !empty($this->VimServer) ||
            !is_null($this->HighestSupportedHardwareVersion) ||
            !is_null($this->IsEnabled) ||
            !empty($this->StorageProfile) ||
            !is_null($this->HostRefs) ||
            !is_null($this->DefaultPassword) ||
            !is_null($this->DefaultUsername) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourcePoolRefs') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefsType();
            $obj->build($child);
            $obj->set_tagName('ResourcePoolRefs');
            $this->setResourcePoolRefs($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourcePoolRefs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimServer') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VimServer');
            array_push($this->VimServer, $obj);
            if (!empty($namespace)) {
                $this->namespace['VimServer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HighestSupportedHardwareVersion') {
            $sval = $child->nodeValue;
            $this->HighestSupportedHardwareVersion = $sval;
            if (!empty($namespace)) {
                $this->namespace['HighestSupportedHardwareVersion'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StorageProfile') {
            $sval = $child->nodeValue;
            array_push($this->StorageProfile, $sval);
            if (!empty($namespace)) {
                $this->namespace['StorageProfile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostRefs') {
            $obj = new VMware_VCloud_API_Extension_HostObjectRefsType();
            $obj->build($child);
            $obj->set_tagName('HostRefs');
            $this->setHostRefs($obj);
            if (!empty($namespace)) {
                $this->namespace['HostRefs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultPassword') {
            $sval = $child->nodeValue;
            $this->DefaultPassword = $sval;
            if (!empty($namespace)) {
                $this->namespace['DefaultPassword'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultUsername') {
            $sval = $child->nodeValue;
            $this->DefaultUsername = $sval;
            if (!empty($namespace)) {
                $this->namespace['DefaultUsername'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}