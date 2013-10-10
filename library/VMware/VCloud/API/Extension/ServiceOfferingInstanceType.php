<?php
class VMware_VCloud_API_Extension_ServiceOfferingInstanceType extends VMware_VCloud_API_EntityType {
    protected $ServiceOfferingRef = null;
    protected $State = null;
    protected $Params = null;
    protected $ServiceOfferingName = null;
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
    * @param VMware_VCloud_API_Extension_ExtensionObjectRefType $ServiceOfferingRef - [required]
    * @param string $State - [optional] 
    * @param VMware_VCloud_API_Extension_ServiceOfferingInstanceParamsType $Params - [optional]
    * @param string $ServiceOfferingName - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $ServiceOfferingRef=null, $State=null, $Params=null, $ServiceOfferingName=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->ServiceOfferingRef = $ServiceOfferingRef;
        $this->State = $State;
        $this->Params = $Params;
        $this->ServiceOfferingName = $ServiceOfferingName;
        $this->tagName = 'ServiceOfferingInstance';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getServiceOfferingRef() {
        return $this->ServiceOfferingRef;
    }
    public function setServiceOfferingRef($ServiceOfferingRef) { 
        $this->ServiceOfferingRef = $ServiceOfferingRef;
    }
    public function getState() {
        return $this->State;
    }
    public function setState($State) { 
        $this->State = $State;
    }
    public function getParams() {
        return $this->Params;
    }
    public function setParams($Params) { 
        $this->Params = $Params;
    }
    public function getServiceOfferingName() {
        return $this->ServiceOfferingName;
    }
    public function setServiceOfferingName($ServiceOfferingName) { 
        $this->ServiceOfferingName = $ServiceOfferingName;
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
        if (!is_null($this->ServiceOfferingRef)) {
            $out = $this->ServiceOfferingRef->export('ServiceOfferingRef', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->State)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'State', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "State>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->State, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='State')) . "</" . $ns . "State>\n");
        }
        if (!is_null($this->Params)) {
            $out = $this->Params->export('Params', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ServiceOfferingName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ServiceOfferingName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ServiceOfferingName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ServiceOfferingName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ServiceOfferingName')) . "</" . $ns . "ServiceOfferingName>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->ServiceOfferingRef) ||
            !is_null($this->State) ||
            !is_null($this->Params) ||
            !is_null($this->ServiceOfferingName) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceOfferingRef') {
            $obj = new VMware_VCloud_API_Extension_ExtensionObjectRefType();
            $obj->build($child);
            $obj->set_tagName('ServiceOfferingRef');
            $this->setServiceOfferingRef($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceOfferingRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'State') {
            $sval = $child->nodeValue;
            $this->State = $sval;
            if (!empty($namespace)) {
                $this->namespace['State'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Params') {
            $obj = new VMware_VCloud_API_Extension_ServiceOfferingInstanceParamsType();
            $obj->build($child);
            $obj->set_tagName('Params');
            $this->setParams($obj);
            if (!empty($namespace)) {
                $this->namespace['Params'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceOfferingName') {
            $sval = $child->nodeValue;
            $this->ServiceOfferingName = $sval;
            if (!empty($namespace)) {
                $this->namespace['ServiceOfferingName'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}