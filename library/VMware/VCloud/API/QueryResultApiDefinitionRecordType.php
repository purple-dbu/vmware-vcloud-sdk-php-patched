<?php
class VMware_VCloud_API_QueryResultApiDefinitionRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $name = null;
    protected $service = null;
    protected $serviceName = null;
    protected $entryPoint = null;
    protected $serviceVendor = null;
    protected $serviceNamespace = null;
    protected $apiVendor = null;
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
    * @param string $name - [optional] an attribute, 
    * @param string $service - [optional] an attribute, 
    * @param string $namespace - [optional] an attribute, 
    * @param string $serviceName - [optional] an attribute, 
    * @param string $entryPoint - [optional] an attribute, 
    * @param string $serviceVendor - [optional] an attribute, 
    * @param string $serviceNamespace - [optional] an attribute, 
    * @param string $apiVendor - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $name=null, $service=null, $namespace=null, $serviceName=null, $entryPoint=null, $serviceVendor=null, $serviceNamespace=null, $apiVendor=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->name = $name;
        $this->service = $service;
        $this->namespace = $namespace;
        $this->serviceName = $serviceName;
        $this->entryPoint = $entryPoint;
        $this->serviceVendor = $serviceVendor;
        $this->serviceNamespace = $serviceNamespace;
        $this->apiVendor = $apiVendor;
        $this->tagName = 'ApiDefinitionRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_service(){
        return $this->service;
    }
    public function set_service($service) {
        $this->service = $service;
    }
    public function get_namespace(){
        return $this->namespace;
    }
    public function set_namespace($namespace) {
        $this->namespace = $namespace;
    }
    public function get_serviceName(){
        return $this->serviceName;
    }
    public function set_serviceName($serviceName) {
        $this->serviceName = $serviceName;
    }
    public function get_entryPoint(){
        return $this->entryPoint;
    }
    public function set_entryPoint($entryPoint) {
        $this->entryPoint = $entryPoint;
    }
    public function get_serviceVendor(){
        return $this->serviceVendor;
    }
    public function set_serviceVendor($serviceVendor) {
        $this->serviceVendor = $serviceVendor;
    }
    public function get_serviceNamespace(){
        return $this->serviceNamespace;
    }
    public function set_serviceNamespace($serviceNamespace) {
        $this->serviceNamespace = $serviceNamespace;
    }
    public function get_apiVendor(){
        return $this->apiVendor;
    }
    public function set_apiVendor($apiVendor) {
        $this->apiVendor = $apiVendor;
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
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->service)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'service', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'service=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->service, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='service')));
        }
        if (!is_null($this->namespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'namespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'namespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->namespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='namespace')));
        }
        if (!is_null($this->serviceName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceName')));
        }
        if (!is_null($this->entryPoint)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'entryPoint', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'entryPoint=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->entryPoint, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='entryPoint')));
        }
        if (!is_null($this->serviceVendor)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceVendor', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceVendor=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceVendor, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceVendor')));
        }
        if (!is_null($this->serviceNamespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceNamespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceNamespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceNamespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceNamespace')));
        }
        if (!is_null($this->apiVendor)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'apiVendor', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'apiVendor=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->apiVendor, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='apiVendor')));
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
        $ndservice = $attrs->getNamedItem('service');
        if (!is_null($ndservice)) {
            $this->service = $ndservice->value;
            if (isset($ndservice->prefix)) {
                $this->namespace['service'] = $ndservice->prefix;
                $nsUri = $ndservice->lookupNamespaceURI($ndservice->prefix);
            }
            $node->removeAttributeNS($nsUri, 'service');
        } else {
            $this->service = null;
        }
        $ndnamespace = $attrs->getNamedItem('namespace');
        if (!is_null($ndnamespace)) {
            $this->namespace = array();
            if (isset($ndnamespace->prefix)) {
                $this->namespace['namespace'] = $ndnamespace->prefix;
                $nsUri = $ndnamespace->lookupNamespaceURI($ndnamespace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'namespace');
        } else {
            $this->namespace = null;
        }
        $ndserviceName = $attrs->getNamedItem('serviceName');
        if (!is_null($ndserviceName)) {
            $this->serviceName = $ndserviceName->value;
            if (isset($ndserviceName->prefix)) {
                $this->namespace['serviceName'] = $ndserviceName->prefix;
                $nsUri = $ndserviceName->lookupNamespaceURI($ndserviceName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceName');
        } else {
            $this->serviceName = null;
        }
        $ndentryPoint = $attrs->getNamedItem('entryPoint');
        if (!is_null($ndentryPoint)) {
            $this->entryPoint = $ndentryPoint->value;
            if (isset($ndentryPoint->prefix)) {
                $this->namespace['entryPoint'] = $ndentryPoint->prefix;
                $nsUri = $ndentryPoint->lookupNamespaceURI($ndentryPoint->prefix);
            }
            $node->removeAttributeNS($nsUri, 'entryPoint');
        } else {
            $this->entryPoint = null;
        }
        $ndserviceVendor = $attrs->getNamedItem('serviceVendor');
        if (!is_null($ndserviceVendor)) {
            $this->serviceVendor = $ndserviceVendor->value;
            if (isset($ndserviceVendor->prefix)) {
                $this->namespace['serviceVendor'] = $ndserviceVendor->prefix;
                $nsUri = $ndserviceVendor->lookupNamespaceURI($ndserviceVendor->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceVendor');
        } else {
            $this->serviceVendor = null;
        }
        $ndserviceNamespace = $attrs->getNamedItem('serviceNamespace');
        if (!is_null($ndserviceNamespace)) {
            $this->serviceNamespace = $ndserviceNamespace->value;
            if (isset($ndserviceNamespace->prefix)) {
                $this->namespace['serviceNamespace'] = $ndserviceNamespace->prefix;
                $nsUri = $ndserviceNamespace->lookupNamespaceURI($ndserviceNamespace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceNamespace');
        } else {
            $this->serviceNamespace = null;
        }
        $ndapiVendor = $attrs->getNamedItem('apiVendor');
        if (!is_null($ndapiVendor)) {
            $this->apiVendor = $ndapiVendor->value;
            if (isset($ndapiVendor->prefix)) {
                $this->namespace['apiVendor'] = $ndapiVendor->prefix;
                $nsUri = $ndapiVendor->lookupNamespaceURI($ndapiVendor->prefix);
            }
            $node->removeAttributeNS($nsUri, 'apiVendor');
        } else {
            $this->apiVendor = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}