<?php
class VMware_VCloud_API_Extension_VimServerType extends VMware_VCloud_API_Extension_ServerType {
    protected $IsEnabled = null;
    protected $IsConnected = null;
    protected $ShieldManagerHost = null;
    protected $ShieldManagerUserName = null;
    protected $Uuid = null;
    protected $VcProxy = null;
    protected $VcVersion = null;
    protected $UseVsphereService = null;
    protected $VsphereWebClientServerUrl = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param string $Username - [required] 
    * @param string $Password - [optional] 
    * @param string $Url - [required] 
    * @param boolean $IsEnabled - [required] 
    * @param boolean $IsConnected - [optional] 
    * @param string $ShieldManagerHost - [optional] 
    * @param string $ShieldManagerUserName - [optional] 
    * @param string $Uuid - [optional] 
    * @param string $VcProxy - [optional] 
    * @param string $VcVersion - [optional] 
    * @param boolean $UseVsphereService - [optional] 
    * @param string $VsphereWebClientServerUrl - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $Username=null, $Password=null, $Url=null, $IsEnabled=null, $IsConnected=null, $ShieldManagerHost=null, $ShieldManagerUserName=null, $Uuid=null, $VcProxy=null, $VcVersion=null, $UseVsphereService=null, $VsphereWebClientServerUrl=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $Username, $Password, $Url);
        $this->IsEnabled = $IsEnabled;
        $this->IsConnected = $IsConnected;
        $this->ShieldManagerHost = $ShieldManagerHost;
        $this->ShieldManagerUserName = $ShieldManagerUserName;
        $this->Uuid = $Uuid;
        $this->VcProxy = $VcProxy;
        $this->VcVersion = $VcVersion;
        $this->UseVsphereService = $UseVsphereService;
        $this->VsphereWebClientServerUrl = $VsphereWebClientServerUrl;
        $this->tagName = 'VimServer';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getIsConnected() {
        return $this->IsConnected;
    }
    public function setIsConnected($IsConnected) { 
        $this->IsConnected = $IsConnected;
    }
    public function getShieldManagerHost() {
        return $this->ShieldManagerHost;
    }
    public function setShieldManagerHost($ShieldManagerHost) { 
        $this->ShieldManagerHost = $ShieldManagerHost;
    }
    public function getShieldManagerUserName() {
        return $this->ShieldManagerUserName;
    }
    public function setShieldManagerUserName($ShieldManagerUserName) { 
        $this->ShieldManagerUserName = $ShieldManagerUserName;
    }
    public function getUuid() {
        return $this->Uuid;
    }
    public function setUuid($Uuid) { 
        $this->Uuid = $Uuid;
    }
    public function getVcProxy() {
        return $this->VcProxy;
    }
    public function setVcProxy($VcProxy) { 
        $this->VcProxy = $VcProxy;
    }
    public function getVcVersion() {
        return $this->VcVersion;
    }
    public function setVcVersion($VcVersion) { 
        $this->VcVersion = $VcVersion;
    }
    public function getUseVsphereService() {
        return $this->UseVsphereService;
    }
    public function setUseVsphereService($UseVsphereService) { 
        $this->UseVsphereService = $UseVsphereService;
    }
    public function getVsphereWebClientServerUrl() {
        return $this->VsphereWebClientServerUrl;
    }
    public function setVsphereWebClientServerUrl($VsphereWebClientServerUrl) { 
        $this->VsphereWebClientServerUrl = $VsphereWebClientServerUrl;
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
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
     }
        if (!is_null($this->IsConnected)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsConnected', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsConnected>" . VMware_VCloud_API_Helper::format_boolean($this->IsConnected, $input_name='IsConnected') . "</" . $ns . "IsConnected>\n");
        }
        if (!is_null($this->ShieldManagerHost)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ShieldManagerHost', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ShieldManagerHost>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ShieldManagerHost, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ShieldManagerHost')) . "</" . $ns . "ShieldManagerHost>\n");
        }
        if (!is_null($this->ShieldManagerUserName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ShieldManagerUserName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ShieldManagerUserName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ShieldManagerUserName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ShieldManagerUserName')) . "</" . $ns . "ShieldManagerUserName>\n");
        }
        if (!is_null($this->Uuid)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Uuid', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Uuid>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Uuid, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Uuid')) . "</" . $ns . "Uuid>\n");
        }
        if (!is_null($this->VcProxy)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcProxy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcProxy>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcProxy, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcProxy')) . "</" . $ns . "VcProxy>\n");
        }
        if (!is_null($this->VcVersion)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcVersion>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcVersion, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcVersion')) . "</" . $ns . "VcVersion>\n");
        }
        if (!is_null($this->UseVsphereService)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UseVsphereService', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UseVsphereService>" . VMware_VCloud_API_Helper::format_boolean($this->UseVsphereService, $input_name='UseVsphereService') . "</" . $ns . "UseVsphereService>\n");
        }
        if (!is_null($this->VsphereWebClientServerUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VsphereWebClientServerUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VsphereWebClientServerUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VsphereWebClientServerUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VsphereWebClientServerUrl')) . "</" . $ns . "VsphereWebClientServerUrl>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->IsEnabled) ||
            !is_null($this->IsConnected) ||
            !is_null($this->ShieldManagerHost) ||
            !is_null($this->ShieldManagerUserName) ||
            !is_null($this->Uuid) ||
            !is_null($this->VcProxy) ||
            !is_null($this->VcVersion) ||
            !is_null($this->UseVsphereService) ||
            !is_null($this->VsphereWebClientServerUrl) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsConnected') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsConnected = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsConnected'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ShieldManagerHost') {
            $sval = $child->nodeValue;
            $this->ShieldManagerHost = $sval;
            if (!empty($namespace)) {
                $this->namespace['ShieldManagerHost'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ShieldManagerUserName') {
            $sval = $child->nodeValue;
            $this->ShieldManagerUserName = $sval;
            if (!empty($namespace)) {
                $this->namespace['ShieldManagerUserName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Uuid') {
            $sval = $child->nodeValue;
            $this->Uuid = $sval;
            if (!empty($namespace)) {
                $this->namespace['Uuid'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcProxy') {
            $sval = $child->nodeValue;
            $this->VcProxy = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcProxy'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcVersion') {
            $sval = $child->nodeValue;
            $this->VcVersion = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcVersion'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UseVsphereService') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->UseVsphereService = $sval;
            if (!empty($namespace)) {
                $this->namespace['UseVsphereService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VsphereWebClientServerUrl') {
            $sval = $child->nodeValue;
            $this->VsphereWebClientServerUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['VsphereWebClientServerUrl'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}