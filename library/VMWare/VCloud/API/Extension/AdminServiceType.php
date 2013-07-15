<?php
class VMware_VCloud_API_Extension_AdminServiceType extends VMware_VCloud_API_EntityType {
    protected $Enabled = null;
    protected $AuthorizationEnabled = null;
    protected $RoutingKey = null;
    protected $Priority = null;
    protected $Exchange = null;
    protected $Vendor = null;
    protected $ApiFilters = null;
    protected $ServiceLinks = null;
    protected $ApiDefinitions = null;
    protected $ResourceClasses = null;
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
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $Namespace=null, $Enabled=null, $AuthorizationEnabled=null, $RoutingKey=null, $Priority=null, $Exchange=null, $Vendor=null, $ApiFilters=null, $ServiceLinks=null, $ApiDefinitions=null, $ResourceClasses=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->Namespace = $Namespace;
        $this->Enabled = $Enabled;
        $this->AuthorizationEnabled = $AuthorizationEnabled;
        $this->RoutingKey = $RoutingKey;
        $this->Priority = $Priority;
        $this->Exchange = $Exchange;
        $this->Vendor = $Vendor;
        $this->ApiFilters = $ApiFilters;
        $this->ServiceLinks = $ServiceLinks;
        $this->ApiDefinitions = $ApiDefinitions;
        $this->ResourceClasses = $ResourceClasses;
        $this->tagName = 'Service';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getNamespace() {
        return $this->Namespace;
    }
    public function setNamespace($Namespace) { 
        $this->Namespace = $Namespace;
    }
    public function getEnabled() {
        return $this->Enabled;
    }
    public function setEnabled($Enabled) { 
        $this->Enabled = $Enabled;
    }
    public function getAuthorizationEnabled() {
        return $this->AuthorizationEnabled;
    }
    public function setAuthorizationEnabled($AuthorizationEnabled) { 
        $this->AuthorizationEnabled = $AuthorizationEnabled;
    }
    public function getRoutingKey() {
        return $this->RoutingKey;
    }
    public function setRoutingKey($RoutingKey) { 
        $this->RoutingKey = $RoutingKey;
    }
    public function getPriority() {
        return $this->Priority;
    }
    public function setPriority($Priority) { 
        $this->Priority = $Priority;
    }
    public function getExchange() {
        return $this->Exchange;
    }
    public function setExchange($Exchange) { 
        $this->Exchange = $Exchange;
    }
    public function getVendor() {
        return $this->Vendor;
    }
    public function setVendor($Vendor) { 
        $this->Vendor = $Vendor;
    }
    public function getApiFilters() {
        return $this->ApiFilters;
    }
    public function setApiFilters($ApiFilters) { 
        $this->ApiFilters = $ApiFilters;
    }
    public function getServiceLinks() {
        return $this->ServiceLinks;
    }
    public function setServiceLinks($ServiceLinks) { 
        $this->ServiceLinks = $ServiceLinks;
    }
    public function getApiDefinitions() {
        return $this->ApiDefinitions;
    }
    public function setApiDefinitions($ApiDefinitions) { 
        $this->ApiDefinitions = $ApiDefinitions;
    }
    public function getResourceClasses() {
        return $this->ResourceClasses;
    }
    public function setResourceClasses($ResourceClasses) { 
        $this->ResourceClasses = $ResourceClasses;
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
        if (!is_null($this->Namespace)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Namespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Namespace>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Namespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Namespace')) . "</" . $ns . "Namespace>\n");
        }
        if (!is_null($this->Enabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Enabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Enabled>" . VMware_VCloud_API_Helper::format_boolean($this->Enabled, $input_name='Enabled') . "</" . $ns . "Enabled>\n");
        }
        if (!is_null($this->AuthorizationEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AuthorizationEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AuthorizationEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->AuthorizationEnabled, $input_name='AuthorizationEnabled') . "</" . $ns . "AuthorizationEnabled>\n");
        }
        if (!is_null($this->RoutingKey)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RoutingKey', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RoutingKey>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->RoutingKey, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='RoutingKey')) . "</" . $ns . "RoutingKey>\n");
        }
        if (!is_null($this->Priority)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Priority', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Priority>" . VMware_VCloud_API_Helper::format_integer($this->Priority, $input_name='Priority') . "</" . $ns . "Priority>\n");
        }
        if (!is_null($this->Exchange)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Exchange', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Exchange>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Exchange, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Exchange')) . "</" . $ns . "Exchange>\n");
        }
        if (!is_null($this->Vendor)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Vendor', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Vendor>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Vendor, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Vendor')) . "</" . $ns . "Vendor>\n");
        }
        if (!is_null($this->ApiFilters)) {
            $out = $this->ApiFilters->export('ApiFilters', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ServiceLinks)) {
            $out = $this->ServiceLinks->export('ServiceLinks', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ApiDefinitions)) {
            $out = $this->ApiDefinitions->export('ApiDefinitions', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ResourceClasses)) {
            $out = $this->ResourceClasses->export('ResourceClasses', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Namespace) ||
            !is_null($this->Enabled) ||
            !is_null($this->AuthorizationEnabled) ||
            !is_null($this->RoutingKey) ||
            !is_null($this->Priority) ||
            !is_null($this->Exchange) ||
            !is_null($this->Vendor) ||
            !is_null($this->ApiFilters) ||
            !is_null($this->ServiceLinks) ||
            !is_null($this->ApiDefinitions) ||
            !is_null($this->ResourceClasses) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Namespace') {
            $sval = $child->nodeValue;
            $this->Namespace = $sval;
            if (!empty($namespace)) {
                $this->namespace['Namespace'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Enabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Enabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['Enabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AuthorizationEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AuthorizationEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['AuthorizationEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RoutingKey') {
            $sval = $child->nodeValue;
            $this->RoutingKey = $sval;
            if (!empty($namespace)) {
                $this->namespace['RoutingKey'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Priority') {
            $sval = $child->nodeValue;
            $this->Priority = $sval;
            if (!empty($namespace)) {
                $this->namespace['Priority'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Exchange') {
            $sval = $child->nodeValue;
            $this->Exchange = $sval;
            if (!empty($namespace)) {
                $this->namespace['Exchange'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Vendor') {
            $sval = $child->nodeValue;
            $this->Vendor = $sval;
            if (!empty($namespace)) {
                $this->namespace['Vendor'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiFilters') {
            $obj = new VMware_VCloud_API_Extension_ApiFiltersType();
            $obj->build($child);
            $obj->set_tagName('ApiFilters');
            $this->setApiFilters($obj);
            if (!empty($namespace)) {
                $this->namespace['ApiFilters'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceLinks') {
            $obj = new VMware_VCloud_API_Extension_AdminServiceLinksType();
            $obj->build($child);
            $obj->set_tagName('ServiceLinks');
            $this->setServiceLinks($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceLinks'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiDefinitions') {
            $obj = new VMware_VCloud_API_Extension_AdminApiDefinitionsType();
            $obj->build($child);
            $obj->set_tagName('ApiDefinitions');
            $this->setApiDefinitions($obj);
            if (!empty($namespace)) {
                $this->namespace['ApiDefinitions'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClasses') {
            $obj = new VMware_VCloud_API_Extension_ResourceClassesType();
            $obj->build($child);
            $obj->set_tagName('ResourceClasses');
            $this->setResourceClasses($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClasses'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}