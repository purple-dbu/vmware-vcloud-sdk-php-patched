<?php
class VMware_VCloud_API_ApiDefinitionType extends VMware_VCloud_API_EntityType {
    protected $EntryPoint = null;
    protected $ApiVendor = null;
    protected $SupportedApiVersions = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

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
    * @param string $EntryPoint - [optional] 
    * @param string $Namespace - [optional] 
    * @param string $ApiVendor - [optional] 
    * @param VMware_VCloud_API_VersionsType $SupportedApiVersions - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $EntryPoint=null, $Namespace=null, $ApiVendor=null, $SupportedApiVersions=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->EntryPoint = $EntryPoint;
        $this->Namespace = $Namespace;
        $this->ApiVendor = $ApiVendor;
        $this->SupportedApiVersions = $SupportedApiVersions;
        $this->tagName = 'ApiDefinition';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getEntryPoint() {
        return $this->EntryPoint;
    }
    public function setEntryPoint($EntryPoint) { 
        $this->EntryPoint = $EntryPoint;
    }
    public function getNamespace() {
        return $this->Namespace;
    }
    public function setNamespace($Namespace) { 
        $this->Namespace = $Namespace;
    }
    public function getApiVendor() {
        return $this->ApiVendor;
    }
    public function setApiVendor($ApiVendor) { 
        $this->ApiVendor = $ApiVendor;
    }
    public function getSupportedApiVersions() {
        return $this->SupportedApiVersions;
    }
    public function setSupportedApiVersions($SupportedApiVersions) { 
        $this->SupportedApiVersions = $SupportedApiVersions;
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
        if (!is_null($this->EntryPoint)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'EntryPoint', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "EntryPoint>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->EntryPoint, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='EntryPoint')) . "</" . $ns . "EntryPoint>\n");
        }
        if (!is_null($this->Namespace)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Namespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Namespace>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Namespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Namespace')) . "</" . $ns . "Namespace>\n");
        }
        if (!is_null($this->ApiVendor)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ApiVendor', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ApiVendor>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ApiVendor, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ApiVendor')) . "</" . $ns . "ApiVendor>\n");
        }
        if (!is_null($this->SupportedApiVersions)) {
            $out = $this->SupportedApiVersions->export('SupportedApiVersions', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->EntryPoint) ||
            !is_null($this->Namespace) ||
            !is_null($this->ApiVendor) ||
            !is_null($this->SupportedApiVersions) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EntryPoint') {
            $sval = $child->nodeValue;
            $this->EntryPoint = $sval;
            if (!empty($namespace)) {
                $this->namespace['EntryPoint'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Namespace') {
            $sval = $child->nodeValue;
            $this->Namespace = $sval;
            if (!empty($namespace)) {
                $this->namespace['Namespace'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiVendor') {
            $sval = $child->nodeValue;
            $this->ApiVendor = $sval;
            if (!empty($namespace)) {
                $this->namespace['ApiVendor'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SupportedApiVersions') {
            $obj = new VMware_VCloud_API_VersionsType();
            $obj->build($child);
            $obj->set_tagName('SupportedApiVersions');
            $this->setSupportedApiVersions($obj);
            if (!empty($namespace)) {
                $this->namespace['SupportedApiVersions'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}