<?php
class VMware_VCloud_API_QueryResultAdminServiceRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $vendor = null;
    protected $routingKey = null;
    protected $exchange = null;
    protected $enabled = null;
    protected $priority = null;
    protected $isAuthorizationEnabled = null;
    protected $name = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param string $vendor - [optional] an attribute, 
    * @param string $routingKey - [optional] an attribute, 
    * @param string $exchange - [optional] an attribute, 
    * @param string $namespace - [optional] an attribute, 
    * @param boolean $enabled - [optional] an attribute, 
    * @param int $priority - [optional] an attribute, 
    * @param boolean $isAuthorizationEnabled - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $vendor=null, $routingKey=null, $exchange=null, $namespace=null, $enabled=null, $priority=null, $isAuthorizationEnabled=null, $name=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->vendor = $vendor;
        $this->routingKey = $routingKey;
        $this->exchange = $exchange;
        $this->namespace = $namespace;
        $this->enabled = $enabled;
        $this->priority = $priority;
        $this->isAuthorizationEnabled = $isAuthorizationEnabled;
        $this->name = $name;
        $this->tagName = 'AdminServiceRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_vendor(){
        return $this->vendor;
    }
    public function set_vendor($vendor) {
        $this->vendor = $vendor;
    }
    public function get_routingKey(){
        return $this->routingKey;
    }
    public function set_routingKey($routingKey) {
        $this->routingKey = $routingKey;
    }
    public function get_exchange(){
        return $this->exchange;
    }
    public function set_exchange($exchange) {
        $this->exchange = $exchange;
    }
    public function get_namespace(){
        return $this->namespace;
    }
    public function set_namespace($namespace) {
        $this->namespace = $namespace;
    }
    public function get_enabled(){
        return $this->enabled;
    }
    public function set_enabled($enabled) {
        $this->enabled = $enabled;
    }
    public function get_priority(){
        return $this->priority;
    }
    public function set_priority($priority) {
        $this->priority = $priority;
    }
    public function get_isAuthorizationEnabled(){
        return $this->isAuthorizationEnabled;
    }
    public function set_isAuthorizationEnabled($isAuthorizationEnabled) {
        $this->isAuthorizationEnabled = $isAuthorizationEnabled;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
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
        if (!is_null($this->vendor)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vendor', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vendor=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vendor, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vendor')));
        }
        if (!is_null($this->routingKey)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'routingKey', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'routingKey=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->routingKey, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='routingKey')));
        }
        if (!is_null($this->exchange)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'exchange', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'exchange=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->exchange, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='exchange')));
        }
        if (!is_null($this->namespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'namespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'namespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->namespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='namespace')));
        }
        if (!is_null($this->enabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'enabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'enabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->enabled, $input_name='enabled')));
        }
        if (!is_null($this->priority)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'priority', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'priority=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->priority, $input_name='priority')));
        }
        if (!is_null($this->isAuthorizationEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isAuthorizationEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isAuthorizationEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isAuthorizationEnabled, $input_name='isAuthorizationEnabled')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function hasContent() {
        if (
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
        $ndvendor = $attrs->getNamedItem('vendor');
        if (!is_null($ndvendor)) {
            $this->vendor = $ndvendor->value;
            if (isset($ndvendor->prefix)) {
                $this->namespace['vendor'] = $ndvendor->prefix;
                $nsUri = $ndvendor->lookupNamespaceURI($ndvendor->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vendor');
        } else {
            $this->vendor = null;
        }
        $ndroutingKey = $attrs->getNamedItem('routingKey');
        if (!is_null($ndroutingKey)) {
            $this->routingKey = $ndroutingKey->value;
            if (isset($ndroutingKey->prefix)) {
                $this->namespace['routingKey'] = $ndroutingKey->prefix;
                $nsUri = $ndroutingKey->lookupNamespaceURI($ndroutingKey->prefix);
            }
            $node->removeAttributeNS($nsUri, 'routingKey');
        } else {
            $this->routingKey = null;
        }
        $ndexchange = $attrs->getNamedItem('exchange');
        if (!is_null($ndexchange)) {
            $this->exchange = $ndexchange->value;
            if (isset($ndexchange->prefix)) {
                $this->namespace['exchange'] = $ndexchange->prefix;
                $nsUri = $ndexchange->lookupNamespaceURI($ndexchange->prefix);
            }
            $node->removeAttributeNS($nsUri, 'exchange');
        } else {
            $this->exchange = null;
        }
        $ndnamespace = $attrs->getNamedItem('namespace');
        if (!is_null($ndnamespace)) {
            $this->namespace = $ndnamespace->value;
            if (isset($ndnamespace->prefix)) {
                $this->namespace['namespace'] = $ndnamespace->prefix;
                $nsUri = $ndnamespace->lookupNamespaceURI($ndnamespace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'namespace');
        } else {
            $this->namespace = null;
        }
        $ndenabled = $attrs->getNamedItem('enabled');
        if (!is_null($ndenabled)) {
            $this->enabled = VMware_VCloud_API_Helper::get_boolean($ndenabled->value);
            if (isset($ndenabled->prefix)) {
                $this->namespace['enabled'] = $ndenabled->prefix;
                $nsUri = $ndenabled->lookupNamespaceURI($ndenabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'enabled');
        } else {
            $this->enabled = null;
        }
        $ndpriority = $attrs->getNamedItem('priority');
        if (!is_null($ndpriority)) {
            $this->priority = sprintf('%d', $ndpriority->value);
            if (isset($ndpriority->prefix)) {
                $this->namespace['priority'] = $ndpriority->prefix;
                $nsUri = $ndpriority->lookupNamespaceURI($ndpriority->prefix);
            }
            $node->removeAttributeNS($nsUri, 'priority');
        } else {
            $this->priority = null;
        }
        $ndisAuthorizationEnabled = $attrs->getNamedItem('isAuthorizationEnabled');
        if (!is_null($ndisAuthorizationEnabled)) {
            $this->isAuthorizationEnabled = VMware_VCloud_API_Helper::get_boolean($ndisAuthorizationEnabled->value);
            if (isset($ndisAuthorizationEnabled->prefix)) {
                $this->namespace['isAuthorizationEnabled'] = $ndisAuthorizationEnabled->prefix;
                $nsUri = $ndisAuthorizationEnabled->lookupNamespaceURI($ndisAuthorizationEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isAuthorizationEnabled');
        } else {
            $this->isAuthorizationEnabled = null;
        }
        $ndname = $attrs->getNamedItem('name');
        if (!is_null($ndname)) {
            $this->name = $ndname->value;
            if (isset($ndname->prefix)) {
                $this->namespace['name'] = $ndname->prefix;
                $nsUri = $ndname->lookupNamespaceURI($ndname->prefix);
            }
            $node->removeAttributeNS($nsUri, 'name');
        } else {
            $this->name = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}