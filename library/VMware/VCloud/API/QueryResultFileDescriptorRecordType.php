<?php
class VMware_VCloud_API_QueryResultFileDescriptorRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $service = null;
    protected $apiDefinition = null;
    protected $fileMimeType = null;
    protected $serviceName = null;
    protected $serviceVendor = null;
    protected $apiName = null;
    protected $apiNamespace = null;
    protected $fileUrl = null;
    protected $apiVendor = null;
    protected $serviceNamespace = null;
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
    * @param string $service - [optional] an attribute, 
    * @param string $apiDefinition - [optional] an attribute, 
    * @param string $fileMimeType - [optional] an attribute, 
    * @param string $serviceName - [optional] an attribute, 
    * @param string $serviceVendor - [optional] an attribute, 
    * @param string $apiName - [optional] an attribute, 
    * @param string $apiNamespace - [optional] an attribute, 
    * @param string $fileUrl - [optional] an attribute, 
    * @param string $apiVendor - [optional] an attribute, 
    * @param string $serviceNamespace - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $service=null, $apiDefinition=null, $fileMimeType=null, $serviceName=null, $serviceVendor=null, $apiName=null, $apiNamespace=null, $fileUrl=null, $apiVendor=null, $serviceNamespace=null, $name=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->service = $service;
        $this->apiDefinition = $apiDefinition;
        $this->fileMimeType = $fileMimeType;
        $this->serviceName = $serviceName;
        $this->serviceVendor = $serviceVendor;
        $this->apiName = $apiName;
        $this->apiNamespace = $apiNamespace;
        $this->fileUrl = $fileUrl;
        $this->apiVendor = $apiVendor;
        $this->serviceNamespace = $serviceNamespace;
        $this->name = $name;
        $this->tagName = 'FileDescriptorRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_service(){
        return $this->service;
    }
    public function set_service($service) {
        $this->service = $service;
    }
    public function get_apiDefinition(){
        return $this->apiDefinition;
    }
    public function set_apiDefinition($apiDefinition) {
        $this->apiDefinition = $apiDefinition;
    }
    public function get_fileMimeType(){
        return $this->fileMimeType;
    }
    public function set_fileMimeType($fileMimeType) {
        $this->fileMimeType = $fileMimeType;
    }
    public function get_serviceName(){
        return $this->serviceName;
    }
    public function set_serviceName($serviceName) {
        $this->serviceName = $serviceName;
    }
    public function get_serviceVendor(){
        return $this->serviceVendor;
    }
    public function set_serviceVendor($serviceVendor) {
        $this->serviceVendor = $serviceVendor;
    }
    public function get_apiName(){
        return $this->apiName;
    }
    public function set_apiName($apiName) {
        $this->apiName = $apiName;
    }
    public function get_apiNamespace(){
        return $this->apiNamespace;
    }
    public function set_apiNamespace($apiNamespace) {
        $this->apiNamespace = $apiNamespace;
    }
    public function get_fileUrl(){
        return $this->fileUrl;
    }
    public function set_fileUrl($fileUrl) {
        $this->fileUrl = $fileUrl;
    }
    public function get_apiVendor(){
        return $this->apiVendor;
    }
    public function set_apiVendor($apiVendor) {
        $this->apiVendor = $apiVendor;
    }
    public function get_serviceNamespace(){
        return $this->serviceNamespace;
    }
    public function set_serviceNamespace($serviceNamespace) {
        $this->serviceNamespace = $serviceNamespace;
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
        if (!is_null($this->service)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'service', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'service=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->service, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='service')));
        }
        if (!is_null($this->apiDefinition)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'apiDefinition', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'apiDefinition=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->apiDefinition, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='apiDefinition')));
        }
        if (!is_null($this->fileMimeType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'fileMimeType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'fileMimeType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->fileMimeType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='fileMimeType')));
        }
        if (!is_null($this->serviceName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceName')));
        }
        if (!is_null($this->serviceVendor)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceVendor', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceVendor=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceVendor, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceVendor')));
        }
        if (!is_null($this->apiName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'apiName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'apiName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->apiName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='apiName')));
        }
        if (!is_null($this->apiNamespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'apiNamespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'apiNamespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->apiNamespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='apiNamespace')));
        }
        if (!is_null($this->fileUrl)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'fileUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'fileUrl=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->fileUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='fileUrl')));
        }
        if (!is_null($this->apiVendor)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'apiVendor', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'apiVendor=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->apiVendor, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='apiVendor')));
        }
        if (!is_null($this->serviceNamespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceNamespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceNamespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceNamespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceNamespace')));
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
        $ndapiDefinition = $attrs->getNamedItem('apiDefinition');
        if (!is_null($ndapiDefinition)) {
            $this->apiDefinition = $ndapiDefinition->value;
            if (isset($ndapiDefinition->prefix)) {
                $this->namespace['apiDefinition'] = $ndapiDefinition->prefix;
                $nsUri = $ndapiDefinition->lookupNamespaceURI($ndapiDefinition->prefix);
            }
            $node->removeAttributeNS($nsUri, 'apiDefinition');
        } else {
            $this->apiDefinition = null;
        }
        $ndfileMimeType = $attrs->getNamedItem('fileMimeType');
        if (!is_null($ndfileMimeType)) {
            $this->fileMimeType = $ndfileMimeType->value;
            if (isset($ndfileMimeType->prefix)) {
                $this->namespace['fileMimeType'] = $ndfileMimeType->prefix;
                $nsUri = $ndfileMimeType->lookupNamespaceURI($ndfileMimeType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'fileMimeType');
        } else {
            $this->fileMimeType = null;
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
        $ndapiName = $attrs->getNamedItem('apiName');
        if (!is_null($ndapiName)) {
            $this->apiName = $ndapiName->value;
            if (isset($ndapiName->prefix)) {
                $this->namespace['apiName'] = $ndapiName->prefix;
                $nsUri = $ndapiName->lookupNamespaceURI($ndapiName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'apiName');
        } else {
            $this->apiName = null;
        }
        $ndapiNamespace = $attrs->getNamedItem('apiNamespace');
        if (!is_null($ndapiNamespace)) {
            $this->apiNamespace = $ndapiNamespace->value;
            if (isset($ndapiNamespace->prefix)) {
                $this->namespace['apiNamespace'] = $ndapiNamespace->prefix;
                $nsUri = $ndapiNamespace->lookupNamespaceURI($ndapiNamespace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'apiNamespace');
        } else {
            $this->apiNamespace = null;
        }
        $ndfileUrl = $attrs->getNamedItem('fileUrl');
        if (!is_null($ndfileUrl)) {
            $this->fileUrl = $ndfileUrl->value;
            if (isset($ndfileUrl->prefix)) {
                $this->namespace['fileUrl'] = $ndfileUrl->prefix;
                $nsUri = $ndfileUrl->lookupNamespaceURI($ndfileUrl->prefix);
            }
            $node->removeAttributeNS($nsUri, 'fileUrl');
        } else {
            $this->fileUrl = null;
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