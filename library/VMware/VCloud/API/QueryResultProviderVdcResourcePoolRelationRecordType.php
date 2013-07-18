<?php
class VMware_VCloud_API_QueryResultProviderVdcResourcePoolRelationRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $vc = null;
    protected $resourcePoolMoref = null;
    protected $name = null;
    protected $cpuReservationLimitMhz = null;
    protected $providerVdc = null;
    protected $numberOfVMs = null;
    protected $isEnabled = null;
    protected $cpuReservationAllocationMhz = null;
    protected $memoryReservationLimitMB = null;
    protected $memoryReservationAllocationMB = null;
    protected $isPrimary = null;
    protected $vcName = null;
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
    * @param string $vc - [optional] an attribute, 
    * @param string $resourcePoolMoref - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param long $cpuReservationLimitMhz - [optional] an attribute, 
    * @param string $providerVdc - [optional] an attribute, 
    * @param int $numberOfVMs - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param long $cpuReservationAllocationMhz - [optional] an attribute, 
    * @param long $memoryReservationLimitMB - [optional] an attribute, 
    * @param long $memoryReservationAllocationMB - [optional] an attribute, 
    * @param boolean $isPrimary - [optional] an attribute, 
    * @param string $vcName - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $vc=null, $resourcePoolMoref=null, $name=null, $cpuReservationLimitMhz=null, $providerVdc=null, $numberOfVMs=null, $isEnabled=null, $cpuReservationAllocationMhz=null, $memoryReservationLimitMB=null, $memoryReservationAllocationMB=null, $isPrimary=null, $vcName=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->vc = $vc;
        $this->resourcePoolMoref = $resourcePoolMoref;
        $this->name = $name;
        $this->cpuReservationLimitMhz = $cpuReservationLimitMhz;
        $this->providerVdc = $providerVdc;
        $this->numberOfVMs = $numberOfVMs;
        $this->isEnabled = $isEnabled;
        $this->cpuReservationAllocationMhz = $cpuReservationAllocationMhz;
        $this->memoryReservationLimitMB = $memoryReservationLimitMB;
        $this->memoryReservationAllocationMB = $memoryReservationAllocationMB;
        $this->isPrimary = $isPrimary;
        $this->vcName = $vcName;
        $this->tagName = 'ProviderVdcResourcePoolRelationRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_vc(){
        return $this->vc;
    }
    public function set_vc($vc) {
        $this->vc = $vc;
    }
    public function get_resourcePoolMoref(){
        return $this->resourcePoolMoref;
    }
    public function set_resourcePoolMoref($resourcePoolMoref) {
        $this->resourcePoolMoref = $resourcePoolMoref;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_cpuReservationLimitMhz(){
        return $this->cpuReservationLimitMhz;
    }
    public function set_cpuReservationLimitMhz($cpuReservationLimitMhz) {
        $this->cpuReservationLimitMhz = $cpuReservationLimitMhz;
    }
    public function get_providerVdc(){
        return $this->providerVdc;
    }
    public function set_providerVdc($providerVdc) {
        $this->providerVdc = $providerVdc;
    }
    public function get_numberOfVMs(){
        return $this->numberOfVMs;
    }
    public function set_numberOfVMs($numberOfVMs) {
        $this->numberOfVMs = $numberOfVMs;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_cpuReservationAllocationMhz(){
        return $this->cpuReservationAllocationMhz;
    }
    public function set_cpuReservationAllocationMhz($cpuReservationAllocationMhz) {
        $this->cpuReservationAllocationMhz = $cpuReservationAllocationMhz;
    }
    public function get_memoryReservationLimitMB(){
        return $this->memoryReservationLimitMB;
    }
    public function set_memoryReservationLimitMB($memoryReservationLimitMB) {
        $this->memoryReservationLimitMB = $memoryReservationLimitMB;
    }
    public function get_memoryReservationAllocationMB(){
        return $this->memoryReservationAllocationMB;
    }
    public function set_memoryReservationAllocationMB($memoryReservationAllocationMB) {
        $this->memoryReservationAllocationMB = $memoryReservationAllocationMB;
    }
    public function get_isPrimary(){
        return $this->isPrimary;
    }
    public function set_isPrimary($isPrimary) {
        $this->isPrimary = $isPrimary;
    }
    public function get_vcName(){
        return $this->vcName;
    }
    public function set_vcName($vcName) {
        $this->vcName = $vcName;
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
        if (!is_null($this->vc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vc')));
        }
        if (!is_null($this->resourcePoolMoref)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'resourcePoolMoref', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'resourcePoolMoref=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->resourcePoolMoref, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='resourcePoolMoref')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->cpuReservationLimitMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuReservationLimitMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuReservationLimitMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuReservationLimitMhz, $input_name='cpuReservationLimitMhz')));
        }
        if (!is_null($this->providerVdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'providerVdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'providerVdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->providerVdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='providerVdc')));
        }
        if (!is_null($this->numberOfVMs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVMs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVMs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVMs, $input_name='numberOfVMs')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->cpuReservationAllocationMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuReservationAllocationMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuReservationAllocationMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuReservationAllocationMhz, $input_name='cpuReservationAllocationMhz')));
        }
        if (!is_null($this->memoryReservationLimitMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryReservationLimitMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryReservationLimitMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryReservationLimitMB, $input_name='memoryReservationLimitMB')));
        }
        if (!is_null($this->memoryReservationAllocationMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryReservationAllocationMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryReservationAllocationMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryReservationAllocationMB, $input_name='memoryReservationAllocationMB')));
        }
        if (!is_null($this->isPrimary)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isPrimary', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isPrimary=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isPrimary, $input_name='isPrimary')));
        }
        if (!is_null($this->vcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vcName')));
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
        $ndvc = $attrs->getNamedItem('vc');
        if (!is_null($ndvc)) {
            $this->vc = $ndvc->value;
            if (isset($ndvc->prefix)) {
                $this->namespace['vc'] = $ndvc->prefix;
                $nsUri = $ndvc->lookupNamespaceURI($ndvc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vc');
        } else {
            $this->vc = null;
        }
        $ndresourcePoolMoref = $attrs->getNamedItem('resourcePoolMoref');
        if (!is_null($ndresourcePoolMoref)) {
            $this->resourcePoolMoref = $ndresourcePoolMoref->value;
            if (isset($ndresourcePoolMoref->prefix)) {
                $this->namespace['resourcePoolMoref'] = $ndresourcePoolMoref->prefix;
                $nsUri = $ndresourcePoolMoref->lookupNamespaceURI($ndresourcePoolMoref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'resourcePoolMoref');
        } else {
            $this->resourcePoolMoref = null;
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
        $ndcpuReservationLimitMhz = $attrs->getNamedItem('cpuReservationLimitMhz');
        if (!is_null($ndcpuReservationLimitMhz)) {
            $this->cpuReservationLimitMhz = sprintf('%d', $ndcpuReservationLimitMhz->value);
            if (isset($ndcpuReservationLimitMhz->prefix)) {
                $this->namespace['cpuReservationLimitMhz'] = $ndcpuReservationLimitMhz->prefix;
                $nsUri = $ndcpuReservationLimitMhz->lookupNamespaceURI($ndcpuReservationLimitMhz->prefix);
            }
            $node->removeAttributeNS($nsUri, 'cpuReservationLimitMhz');
        } else {
            $this->cpuReservationLimitMhz = null;
        }
        $ndproviderVdc = $attrs->getNamedItem('providerVdc');
        if (!is_null($ndproviderVdc)) {
            $this->providerVdc = $ndproviderVdc->value;
            if (isset($ndproviderVdc->prefix)) {
                $this->namespace['providerVdc'] = $ndproviderVdc->prefix;
                $nsUri = $ndproviderVdc->lookupNamespaceURI($ndproviderVdc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'providerVdc');
        } else {
            $this->providerVdc = null;
        }
        $ndnumberOfVMs = $attrs->getNamedItem('numberOfVMs');
        if (!is_null($ndnumberOfVMs)) {
            $this->numberOfVMs = sprintf('%d', $ndnumberOfVMs->value);
            if (isset($ndnumberOfVMs->prefix)) {
                $this->namespace['numberOfVMs'] = $ndnumberOfVMs->prefix;
                $nsUri = $ndnumberOfVMs->lookupNamespaceURI($ndnumberOfVMs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVMs');
        } else {
            $this->numberOfVMs = null;
        }
        $ndisEnabled = $attrs->getNamedItem('isEnabled');
        if (!is_null($ndisEnabled)) {
            $this->isEnabled = VMware_VCloud_API_Helper::get_boolean($ndisEnabled->value);
            if (isset($ndisEnabled->prefix)) {
                $this->namespace['isEnabled'] = $ndisEnabled->prefix;
                $nsUri = $ndisEnabled->lookupNamespaceURI($ndisEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isEnabled');
        } else {
            $this->isEnabled = null;
        }
        $ndcpuReservationAllocationMhz = $attrs->getNamedItem('cpuReservationAllocationMhz');
        if (!is_null($ndcpuReservationAllocationMhz)) {
            $this->cpuReservationAllocationMhz = sprintf('%d', $ndcpuReservationAllocationMhz->value);
            if (isset($ndcpuReservationAllocationMhz->prefix)) {
                $this->namespace['cpuReservationAllocationMhz'] = $ndcpuReservationAllocationMhz->prefix;
                $nsUri = $ndcpuReservationAllocationMhz->lookupNamespaceURI($ndcpuReservationAllocationMhz->prefix);
            }
            $node->removeAttributeNS($nsUri, 'cpuReservationAllocationMhz');
        } else {
            $this->cpuReservationAllocationMhz = null;
        }
        $ndmemoryReservationLimitMB = $attrs->getNamedItem('memoryReservationLimitMB');
        if (!is_null($ndmemoryReservationLimitMB)) {
            $this->memoryReservationLimitMB = sprintf('%d', $ndmemoryReservationLimitMB->value);
            if (isset($ndmemoryReservationLimitMB->prefix)) {
                $this->namespace['memoryReservationLimitMB'] = $ndmemoryReservationLimitMB->prefix;
                $nsUri = $ndmemoryReservationLimitMB->lookupNamespaceURI($ndmemoryReservationLimitMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryReservationLimitMB');
        } else {
            $this->memoryReservationLimitMB = null;
        }
        $ndmemoryReservationAllocationMB = $attrs->getNamedItem('memoryReservationAllocationMB');
        if (!is_null($ndmemoryReservationAllocationMB)) {
            $this->memoryReservationAllocationMB = sprintf('%d', $ndmemoryReservationAllocationMB->value);
            if (isset($ndmemoryReservationAllocationMB->prefix)) {
                $this->namespace['memoryReservationAllocationMB'] = $ndmemoryReservationAllocationMB->prefix;
                $nsUri = $ndmemoryReservationAllocationMB->lookupNamespaceURI($ndmemoryReservationAllocationMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryReservationAllocationMB');
        } else {
            $this->memoryReservationAllocationMB = null;
        }
        $ndisPrimary = $attrs->getNamedItem('isPrimary');
        if (!is_null($ndisPrimary)) {
            $this->isPrimary = VMware_VCloud_API_Helper::get_boolean($ndisPrimary->value);
            if (isset($ndisPrimary->prefix)) {
                $this->namespace['isPrimary'] = $ndisPrimary->prefix;
                $nsUri = $ndisPrimary->lookupNamespaceURI($ndisPrimary->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isPrimary');
        } else {
            $this->isPrimary = null;
        }
        $ndvcName = $attrs->getNamedItem('vcName');
        if (!is_null($ndvcName)) {
            $this->vcName = $ndvcName->value;
            if (isset($ndvcName->prefix)) {
                $this->namespace['vcName'] = $ndvcName->prefix;
                $nsUri = $ndvcName->lookupNamespaceURI($ndvcName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vcName');
        } else {
            $this->vcName = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}