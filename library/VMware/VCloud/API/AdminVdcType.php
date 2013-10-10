<?php
class VMware_VCloud_API_AdminVdcType extends VMware_VCloud_API_VdcType {
    protected $ResourceGuaranteedMemory = null;
    protected $ResourceGuaranteedCpu = null;
    protected $VCpuInMhz = null;
    protected $IsThinProvision = null;
    protected $NetworkPoolReference = null;
    protected $VendorServices = null;
    protected $ProviderVdcReference = null;
    protected $UsesFastProvisioning = null;
    protected $OverCommitAllowed = null;
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
    * @param int $status - [optional] an attribute, 
    * @param string $AllocationModel - [required] 
    * @param VMware_VCloud_API_CapacityWithUsageType $StorageCapacity - [optional]
    * @param VMware_VCloud_API_ComputeCapacityType $ComputeCapacity - [required]
    * @param VMware_VCloud_API_ResourceEntitiesType $ResourceEntities - [optional]
    * @param VMware_VCloud_API_AvailableNetworksType $AvailableNetworks - [optional]
    * @param VMware_VCloud_API_CapabilitiesType $Capabilities - [optional]
    * @param int $NicQuota - [required] 
    * @param int $NetworkQuota - [required] 
    * @param int $UsedNetworkCount - [optional] 
    * @param int $VmQuota - [optional] 
    * @param boolean $IsEnabled - [optional] 
    * @param VMware_VCloud_API_VdcStorageProfilesType $VdcStorageProfiles - [optional]
    * @param float $ResourceGuaranteedMemory - [optional] 
    * @param float $ResourceGuaranteedCpu - [optional] 
    * @param int $VCpuInMhz - [optional] 
    * @param boolean $IsThinProvision - [optional] 
    * @param VMware_VCloud_API_ReferenceType $NetworkPoolReference - [optional]
    * @param VMware_VCloud_API_VendorServicesType $VendorServices - [optional]
    * @param VMware_VCloud_API_ReferenceType $ProviderVdcReference - [optional]
    * @param boolean $UsesFastProvisioning - [optional] 
    * @param boolean $OverCommitAllowed - [optional] default 'true'
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $AllocationModel=null, $StorageCapacity=null, $ComputeCapacity=null, $ResourceEntities=null, $AvailableNetworks=null, $Capabilities=null, $NicQuota=null, $NetworkQuota=null, $UsedNetworkCount=null, $VmQuota=null, $IsEnabled=null, $VdcStorageProfiles=null, $ResourceGuaranteedMemory=null, $ResourceGuaranteedCpu=null, $VCpuInMhz=null, $IsThinProvision=null, $NetworkPoolReference=null, $VendorServices=null, $ProviderVdcReference=null, $UsesFastProvisioning=null, $OverCommitAllowed=True) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $status, $AllocationModel, $StorageCapacity, $ComputeCapacity, $ResourceEntities, $AvailableNetworks, $Capabilities, $NicQuota, $NetworkQuota, $UsedNetworkCount, $VmQuota, $IsEnabled, $VdcStorageProfiles);
        $this->ResourceGuaranteedMemory = $ResourceGuaranteedMemory;
        $this->ResourceGuaranteedCpu = $ResourceGuaranteedCpu;
        $this->VCpuInMhz = $VCpuInMhz;
        $this->IsThinProvision = $IsThinProvision;
        $this->NetworkPoolReference = $NetworkPoolReference;
        $this->VendorServices = $VendorServices;
        $this->ProviderVdcReference = $ProviderVdcReference;
        $this->UsesFastProvisioning = $UsesFastProvisioning;
        $this->OverCommitAllowed = $OverCommitAllowed;
        $this->tagName = 'AdminVdc';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getResourceGuaranteedMemory() {
        return $this->ResourceGuaranteedMemory;
    }
    public function setResourceGuaranteedMemory($ResourceGuaranteedMemory) { 
        $this->ResourceGuaranteedMemory = $ResourceGuaranteedMemory;
    }
    public function getResourceGuaranteedCpu() {
        return $this->ResourceGuaranteedCpu;
    }
    public function setResourceGuaranteedCpu($ResourceGuaranteedCpu) { 
        $this->ResourceGuaranteedCpu = $ResourceGuaranteedCpu;
    }
    public function getVCpuInMhz() {
        return $this->VCpuInMhz;
    }
    public function setVCpuInMhz($VCpuInMhz) { 
        $this->VCpuInMhz = $VCpuInMhz;
    }
    public function getIsThinProvision() {
        return $this->IsThinProvision;
    }
    public function setIsThinProvision($IsThinProvision) { 
        $this->IsThinProvision = $IsThinProvision;
    }
    public function getNetworkPoolReference() {
        return $this->NetworkPoolReference;
    }
    public function setNetworkPoolReference($NetworkPoolReference) { 
        $this->NetworkPoolReference = $NetworkPoolReference;
    }
    public function getVendorServices() {
        return $this->VendorServices;
    }
    public function setVendorServices($VendorServices) { 
        $this->VendorServices = $VendorServices;
    }
    public function getProviderVdcReference() {
        return $this->ProviderVdcReference;
    }
    public function setProviderVdcReference($ProviderVdcReference) { 
        $this->ProviderVdcReference = $ProviderVdcReference;
    }
    public function getUsesFastProvisioning() {
        return $this->UsesFastProvisioning;
    }
    public function setUsesFastProvisioning($UsesFastProvisioning) { 
        $this->UsesFastProvisioning = $UsesFastProvisioning;
    }
    public function getOverCommitAllowed() {
        return $this->OverCommitAllowed;
    }
    public function setOverCommitAllowed($OverCommitAllowed) { 
        $this->OverCommitAllowed = $OverCommitAllowed;
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
        if (!is_null($this->ResourceGuaranteedMemory)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ResourceGuaranteedMemory', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ResourceGuaranteedMemory>" . VMware_VCloud_API_Helper::format_double($this->ResourceGuaranteedMemory, $input_name='ResourceGuaranteedMemory') . "</" . $ns . "ResourceGuaranteedMemory>\n");
        }
        if (!is_null($this->ResourceGuaranteedCpu)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ResourceGuaranteedCpu', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ResourceGuaranteedCpu>" . VMware_VCloud_API_Helper::format_double($this->ResourceGuaranteedCpu, $input_name='ResourceGuaranteedCpu') . "</" . $ns . "ResourceGuaranteedCpu>\n");
        }
        if (!is_null($this->VCpuInMhz)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VCpuInMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VCpuInMhz>" . VMware_VCloud_API_Helper::format_integer($this->VCpuInMhz, $input_name='VCpuInMhz') . "</" . $ns . "VCpuInMhz>\n");
        }
        if (!is_null($this->IsThinProvision)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsThinProvision', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsThinProvision>" . VMware_VCloud_API_Helper::format_boolean($this->IsThinProvision, $input_name='IsThinProvision') . "</" . $ns . "IsThinProvision>\n");
        }
        if (!is_null($this->NetworkPoolReference)) {
            $out = $this->NetworkPoolReference->export('NetworkPoolReference', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VendorServices)) {
            $out = $this->VendorServices->export('VendorServices', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ProviderVdcReference)) {
            $out = $this->ProviderVdcReference->export('ProviderVdcReference', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->UsesFastProvisioning)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UsesFastProvisioning', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UsesFastProvisioning>" . VMware_VCloud_API_Helper::format_boolean($this->UsesFastProvisioning, $input_name='UsesFastProvisioning') . "</" . $ns . "UsesFastProvisioning>\n");
        }
        if (!is_null($this->OverCommitAllowed)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'OverCommitAllowed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "OverCommitAllowed>" . VMware_VCloud_API_Helper::format_boolean($this->OverCommitAllowed, $input_name='OverCommitAllowed') . "</" . $ns . "OverCommitAllowed>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->ResourceGuaranteedMemory) ||
            !is_null($this->ResourceGuaranteedCpu) ||
            !is_null($this->VCpuInMhz) ||
            !is_null($this->IsThinProvision) ||
            !is_null($this->NetworkPoolReference) ||
            !is_null($this->VendorServices) ||
            !is_null($this->ProviderVdcReference) ||
            !is_null($this->UsesFastProvisioning) ||
            !is_null($this->OverCommitAllowed) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceGuaranteedMemory') {
            $sval = $child->nodeValue;
            $this->ResourceGuaranteedMemory = $sval;
            if (!empty($namespace)) {
                $this->namespace['ResourceGuaranteedMemory'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceGuaranteedCpu') {
            $sval = $child->nodeValue;
            $this->ResourceGuaranteedCpu = $sval;
            if (!empty($namespace)) {
                $this->namespace['ResourceGuaranteedCpu'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VCpuInMhz') {
            $sval = $child->nodeValue;
            $this->VCpuInMhz = $sval;
            if (!empty($namespace)) {
                $this->namespace['VCpuInMhz'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsThinProvision') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsThinProvision = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsThinProvision'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkPoolReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('NetworkPoolReference');
            $this->setNetworkPoolReference($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkPoolReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VendorServices') {
            $obj = new VMware_VCloud_API_VendorServicesType();
            $obj->build($child);
            $obj->set_tagName('VendorServices');
            $this->setVendorServices($obj);
            if (!empty($namespace)) {
                $this->namespace['VendorServices'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderVdcReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ProviderVdcReference');
            $this->setProviderVdcReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ProviderVdcReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UsesFastProvisioning') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->UsesFastProvisioning = $sval;
            if (!empty($namespace)) {
                $this->namespace['UsesFastProvisioning'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OverCommitAllowed') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->OverCommitAllowed = $sval;
            if (!empty($namespace)) {
                $this->namespace['OverCommitAllowed'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}