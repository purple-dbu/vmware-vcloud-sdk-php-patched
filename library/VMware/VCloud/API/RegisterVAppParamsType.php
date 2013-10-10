<?php
class VMware_VCloud_API_RegisterVAppParamsType extends VMware_VCloud_API_ParamsType {
    protected $Ovf = null;
    protected $VsToVmxMap = null;
    protected $OvfToVdcNetworkMap = null;
    protected $ExternalNatIpMap = null;
    protected $NicIpMap = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param string $Ovf - [required] 
    * @param VMware_VCloud_API_VsToVmxMapType $VsToVmxMap - [optional]
    * @param VMware_VCloud_API_OvfToVdcNetworkMapType $OvfToVdcNetworkMap - [optional]
    * @param VMware_VCloud_API_ExternalNatIpMapType $ExternalNatIpMap - [optional]
    * @param VMware_VCloud_API_NicIpMapType $NicIpMap - [optional]
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $Ovf=null, $VsToVmxMap=null, $OvfToVdcNetworkMap=null, $ExternalNatIpMap=null, $NicIpMap=null) {
        parent::__construct($VCloudExtension, $name, $Description);
        $this->Ovf = $Ovf;
        $this->VsToVmxMap = $VsToVmxMap;
        $this->OvfToVdcNetworkMap = $OvfToVdcNetworkMap;
        $this->ExternalNatIpMap = $ExternalNatIpMap;
        $this->NicIpMap = $NicIpMap;
        $this->tagName = 'RegisterVAppParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOvf() {
        return $this->Ovf;
    }
    public function setOvf($Ovf) { 
        $this->Ovf = $Ovf;
    }
    public function getVsToVmxMap() {
        return $this->VsToVmxMap;
    }
    public function setVsToVmxMap($VsToVmxMap) { 
        $this->VsToVmxMap = $VsToVmxMap;
    }
    public function getOvfToVdcNetworkMap() {
        return $this->OvfToVdcNetworkMap;
    }
    public function setOvfToVdcNetworkMap($OvfToVdcNetworkMap) { 
        $this->OvfToVdcNetworkMap = $OvfToVdcNetworkMap;
    }
    public function getExternalNatIpMap() {
        return $this->ExternalNatIpMap;
    }
    public function setExternalNatIpMap($ExternalNatIpMap) { 
        $this->ExternalNatIpMap = $ExternalNatIpMap;
    }
    public function getNicIpMap() {
        return $this->NicIpMap;
    }
    public function setNicIpMap($NicIpMap) { 
        $this->NicIpMap = $NicIpMap;
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
        if (!is_null($this->Ovf)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Ovf', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Ovf>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Ovf, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Ovf')) . "</" . $ns . "Ovf>\n");
        }
        if (!is_null($this->VsToVmxMap)) {
            $out = $this->VsToVmxMap->export('VsToVmxMap', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OvfToVdcNetworkMap)) {
            $out = $this->OvfToVdcNetworkMap->export('OvfToVdcNetworkMap', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ExternalNatIpMap)) {
            $out = $this->ExternalNatIpMap->export('ExternalNatIpMap', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->NicIpMap)) {
            $out = $this->NicIpMap->export('NicIpMap', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Ovf) ||
            !is_null($this->VsToVmxMap) ||
            !is_null($this->OvfToVdcNetworkMap) ||
            !is_null($this->ExternalNatIpMap) ||
            !is_null($this->NicIpMap) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Ovf') {
            $sval = $child->nodeValue;
            $this->Ovf = $sval;
            if (!empty($namespace)) {
                $this->namespace['Ovf'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VsToVmxMap') {
            $obj = new VMware_VCloud_API_VsToVmxMapType();
            $obj->build($child);
            $obj->set_tagName('VsToVmxMap');
            $this->setVsToVmxMap($obj);
            if (!empty($namespace)) {
                $this->namespace['VsToVmxMap'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OvfToVdcNetworkMap') {
            $obj = new VMware_VCloud_API_OvfToVdcNetworkMapType();
            $obj->build($child);
            $obj->set_tagName('OvfToVdcNetworkMap');
            $this->setOvfToVdcNetworkMap($obj);
            if (!empty($namespace)) {
                $this->namespace['OvfToVdcNetworkMap'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExternalNatIpMap') {
            $obj = new VMware_VCloud_API_ExternalNatIpMapType();
            $obj->build($child);
            $obj->set_tagName('ExternalNatIpMap');
            $this->setExternalNatIpMap($obj);
            if (!empty($namespace)) {
                $this->namespace['ExternalNatIpMap'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NicIpMap') {
            $obj = new VMware_VCloud_API_NicIpMapType();
            $obj->build($child);
            $obj->set_tagName('NicIpMap');
            $this->setNicIpMap($obj);
            if (!empty($namespace)) {
                $this->namespace['NicIpMap'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}