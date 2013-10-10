<?php
class VMware_VCloud_API_InstantiateOvfParamsType extends VMware_VCloud_API_VAppCreationParamsType {
    protected $transferFormat = null;
    protected $AllEULAsAccepted = null;
    protected $NetworkMapping = array();
    protected $InstantiateOvfProperty = array();
    protected $InstantiateVmParams = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param boolean $powerOn - [optional] an attribute, 
    * @param boolean $deploy - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $VAppParent - [optional]
    * @param VMware_VCloud_API_InstantiationParamsType $InstantiationParams - [optional]
    * @param string $transferFormat - [optional] an attribute, 
    * @param boolean $AllEULAsAccepted - [optional] 
    * @param array $NetworkMapping - [optional] an array of VMware_VCloud_API_NetworkMappingType objects
    * @param array $InstantiateOvfProperty - [optional] an array of VMware_VCloud_API_InstantiateOvfPropertyType objects
    * @param array $InstantiateVmParams - [optional] an array of VMware_VCloud_API_InstantiateVmParamsType objects
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $powerOn=null, $deploy=null, $VAppParent=null, $InstantiationParams=null, $transferFormat=null, $AllEULAsAccepted=null, $NetworkMapping=null, $InstantiateOvfProperty=null, $InstantiateVmParams=null) {
        parent::__construct($VCloudExtension, $name, $Description, $powerOn, $deploy, $VAppParent, $InstantiationParams);
        $this->transferFormat = $transferFormat;
        $this->AllEULAsAccepted = $AllEULAsAccepted;
        if (!is_null($NetworkMapping)) {
            $this->NetworkMapping = $NetworkMapping;
        }
        if (!is_null($InstantiateOvfProperty)) {
            $this->InstantiateOvfProperty = $InstantiateOvfProperty;
        }
        if (!is_null($InstantiateVmParams)) {
            $this->InstantiateVmParams = $InstantiateVmParams;
        }
        $this->tagName = 'InstantiateOvfParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAllEULAsAccepted() {
        return $this->AllEULAsAccepted;
    }
    public function setAllEULAsAccepted($AllEULAsAccepted) { 
        $this->AllEULAsAccepted = $AllEULAsAccepted;
    }
    public function getNetworkMapping() {
        return $this->NetworkMapping;
    }
    public function setNetworkMapping($NetworkMapping) { 
        $this->NetworkMapping = $NetworkMapping;
    }
    public function addNetworkMapping($value) { array_push($this->NetworkMapping, $value); }
    public function getInstantiateOvfProperty() {
        return $this->InstantiateOvfProperty;
    }
    public function setInstantiateOvfProperty($InstantiateOvfProperty) { 
        $this->InstantiateOvfProperty = $InstantiateOvfProperty;
    }
    public function addInstantiateOvfProperty($value) { array_push($this->InstantiateOvfProperty, $value); }
    public function getInstantiateVmParams() {
        return $this->InstantiateVmParams;
    }
    public function setInstantiateVmParams($InstantiateVmParams) { 
        $this->InstantiateVmParams = $InstantiateVmParams;
    }
    public function addInstantiateVmParams($value) { array_push($this->InstantiateVmParams, $value); }
    public function get_transferFormat(){
        return $this->transferFormat;
    }
    public function set_transferFormat($transferFormat) {
        $this->transferFormat = $transferFormat;
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
        if (!is_null($this->transferFormat)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'transferFormat', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'transferFormat=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->transferFormat, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='transferFormat')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->AllEULAsAccepted)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AllEULAsAccepted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AllEULAsAccepted>" . VMware_VCloud_API_Helper::format_boolean($this->AllEULAsAccepted, $input_name='AllEULAsAccepted') . "</" . $ns . "AllEULAsAccepted>\n");
        }
        if (isset($this->NetworkMapping)) {
            foreach ($this->NetworkMapping as $NetworkMapping) {
                $out = $NetworkMapping->export('NetworkMapping', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->InstantiateOvfProperty)) {
            foreach ($this->InstantiateOvfProperty as $InstantiateOvfProperty) {
                $out = $InstantiateOvfProperty->export('InstantiateOvfProperty', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->InstantiateVmParams)) {
            foreach ($this->InstantiateVmParams as $InstantiateVmParams) {
                $out = $InstantiateVmParams->export('InstantiateVmParams', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->AllEULAsAccepted) ||
            !empty($this->NetworkMapping) ||
            !empty($this->InstantiateOvfProperty) ||
            !empty($this->InstantiateVmParams) ||
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
        $ndtransferFormat = $attrs->getNamedItem('transferFormat');
        if (!is_null($ndtransferFormat)) {
            $this->transferFormat = $ndtransferFormat->value;
            if (isset($ndtransferFormat->prefix)) {
                $this->namespace['transferFormat'] = $ndtransferFormat->prefix;
                $nsUri = $ndtransferFormat->lookupNamespaceURI($ndtransferFormat->prefix);
            }
            $node->removeAttributeNS($nsUri, 'transferFormat');
        } else {
            $this->transferFormat = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllEULAsAccepted') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AllEULAsAccepted = $sval;
            if (!empty($namespace)) {
                $this->namespace['AllEULAsAccepted'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkMapping') {
            $obj = new VMware_VCloud_API_NetworkMappingType();
            $obj->build($child);
            $obj->set_tagName('NetworkMapping');
            array_push($this->NetworkMapping, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkMapping'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstantiateOvfProperty') {
            $obj = new VMware_VCloud_API_InstantiateOvfPropertyType();
            $obj->build($child);
            $obj->set_tagName('InstantiateOvfProperty');
            array_push($this->InstantiateOvfProperty, $obj);
            if (!empty($namespace)) {
                $this->namespace['InstantiateOvfProperty'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstantiateVmParams') {
            $obj = new VMware_VCloud_API_InstantiateVmParamsType();
            $obj->build($child);
            $obj->set_tagName('InstantiateVmParams');
            array_push($this->InstantiateVmParams, $obj);
            if (!empty($namespace)) {
                $this->namespace['InstantiateVmParams'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}