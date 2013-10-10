<?php
class VMware_VCloud_API_Extension_AdminServiceExtensionType extends VMware_VCloud_API_Extension_AdminServiceType {
    protected $Username = null;
    protected $Password = null;
    protected $ExtensionType = null;
    protected $Url = null;
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
    * @param string $Namespace - [optional] 
    * @param boolean $Enabled - [optional] 
    * @param boolean $AuthorizationEnabled - [optional] 
    * @param string $RoutingKey - [optional] 
    * @param int $Priority - [optional] 
    * @param string $Exchange - [optional] 
    * @param string $Vendor - [optional] 
    * @param VMware_VCloud_API_Extension_ApiFiltersType $ApiFilters - [optional]
    * @param VMware_VCloud_API_Extension_AdminServiceLinksType $ServiceLinks - [optional]
    * @param VMware_VCloud_API_Extension_AdminApiDefinitionsType $ApiDefinitions - [optional]
    * @param VMware_VCloud_API_Extension_ResourceClassesType $ResourceClasses - [optional]
    * @param string $Username - [optional] 
    * @param string $Password - [optional] 
    * @param string $ExtensionType - [optional] 
    * @param string $Url - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $Namespace=null, $Enabled=null, $AuthorizationEnabled=null, $RoutingKey=null, $Priority=null, $Exchange=null, $Vendor=null, $ApiFilters=null, $ServiceLinks=null, $ApiDefinitions=null, $ResourceClasses=null, $Username=null, $Password=null, $ExtensionType=null, $Url=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $Namespace, $Enabled, $AuthorizationEnabled, $RoutingKey, $Priority, $Exchange, $Vendor, $ApiFilters, $ServiceLinks, $ApiDefinitions, $ResourceClasses);
        $this->Username = $Username;
        $this->Password = $Password;
        $this->ExtensionType = $ExtensionType;
        $this->Url = $Url;
        $this->tagName = 'ServiceExtension';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
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
    public function getExtensionType() {
        return $this->ExtensionType;
    }
    public function setExtensionType($ExtensionType) { 
        $this->ExtensionType = $ExtensionType;
    }
    public function getUrl() {
        return $this->Url;
    }
    public function setUrl($Url) { 
        $this->Url = $Url;
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
        if (!is_null($this->ExtensionType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ExtensionType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ExtensionType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ExtensionType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ExtensionType')) . "</" . $ns . "ExtensionType>\n");
        }
        if (!is_null($this->Url)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Url', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Url>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Url, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Url')) . "</" . $ns . "Url>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Username) ||
            !is_null($this->Password) ||
            !is_null($this->ExtensionType) ||
            !is_null($this->Url) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Username') {
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExtensionType') {
            $sval = $child->nodeValue;
            $this->ExtensionType = $sval;
            if (!empty($namespace)) {
                $this->namespace['ExtensionType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Url') {
            $sval = $child->nodeValue;
            $this->Url = $sval;
            if (!empty($namespace)) {
                $this->namespace['Url'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}