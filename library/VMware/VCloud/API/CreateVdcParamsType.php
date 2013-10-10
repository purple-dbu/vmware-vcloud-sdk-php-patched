<?php
class VMware_VCloud_API_CreateVdcParamsType extends VMware_VCloud_API_ParamsType {
    protected $AllocationModel = null;
    protected $ComputeCapacity = null;
    protected $NicQuota = null;
    protected $NetworkQuota = null;
    protected $VmQuota = null;
    protected $IsEnabled = null;
    protected $VdcStorageProfile = array();
    protected $ResourceGuaranteedMemory = null;
    protected $ResourceGuaranteedCpu = null;
    protected $VCpuInMhz = null;
    protected $IsThinProvision = null;
    protected $NetworkPoolReference = null;
    protected $ProviderVdcReference = null;
    protected $UsesFastProvisioning = null;
    protected $OverCommitAllowed = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param string $AllocationModel - [required] 
    * @param VMware_VCloud_API_ComputeCapacityType $ComputeCapacity - [required]
    * @param int $NicQuota - [required] 
    * @param int $NetworkQuota - [required] 
    * @param int $VmQuota - [optional] 
    * @param boolean $IsEnabled - [optional] 
    * @param array $VdcStorageProfile - [required] an array of VMware_VCloud_API_VdcStorageProfileParamsType objects
    * @param float $ResourceGuaranteedMemory - [optional] 
    * @param float $ResourceGuaranteedCpu - [optional] 
    * @param int $VCpuInMhz - [optional] 
    * @param boolean $IsThinProvision - [optional] 
    * @param VMware_VCloud_API_ReferenceType $NetworkPoolReference - [optional]
    * @param VMware_VCloud_API_ReferenceType $ProviderVdcReference - [optional]
    * @param boolean $UsesFastProvisioning - [optional] 
    * @param boolean $OverCommitAllowed - [optional] default 'true'
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $AllocationModel=null, $ComputeCapacity=null, $NicQuota=null, $NetworkQuota=null, $VmQuota=null, $IsEnabled=null, $VdcStorageProfile=null, $ResourceGuaranteedMemory=null, $ResourceGuaranteedCpu=null, $VCpuInMhz=null, $IsThinProvision=null, $NetworkPoolReference=null, $ProviderVdcReference=null, $UsesFastProvisioning=null, $OverCommitAllowed=True) {
        parent::__construct($VCloudExtension, $name, $Description);
        $this->AllocationModel = $AllocationModel;
        $this->ComputeCapacity = $ComputeCapacity;
        $this->NicQuota = $NicQuota;
        $this->NetworkQuota = $NetworkQuota;
        $this->VmQuota = $VmQuota;
        $this->IsEnabled = $IsEnabled;
        if (!is_null($VdcStorageProfile)) {
            $this->VdcStorageProfile = $VdcStorageProfile;
        }
        $this->ResourceGuaranteedMemory = $ResourceGuaranteedMemory;
        $this->ResourceGuaranteedCpu = $ResourceGuaranteedCpu;
        $this->VCpuInMhz = $VCpuInMhz;
        $this->IsThinProvision = $IsThinProvision;
        $this->NetworkPoolReference = $NetworkPoolReference;
        $this->ProviderVdcReference = $ProviderVdcReference;
        $this->UsesFastProvisioning = $UsesFastProvisioning;
        $this->OverCommitAllowed = $OverCommitAllowed;
        $this->tagName = 'CreateVdcParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAllocationModel() {
        return $this->AllocationModel;
    }
    public function setAllocationModel($AllocationModel) { 
        $this->AllocationModel = $AllocationModel;
    }
    public function getComputeCapacity() {
        return $this->ComputeCapacity;
    }
    public function setComputeCapacity($ComputeCapacity) { 
        $this->ComputeCapacity = $ComputeCapacity;
    }
    public function getNicQuota() {
        return $this->NicQuota;
    }
    public function setNicQuota($NicQuota) { 
        $this->NicQuota = $NicQuota;
    }
    public function getNetworkQuota() {
        return $this->NetworkQuota;
    }
    public function setNetworkQuota($NetworkQuota) { 
        $this->NetworkQuota = $NetworkQuota;
    }
    public function getVmQuota() {
        return $this->VmQuota;
    }
    public function setVmQuota($VmQuota) { 
        $this->VmQuota = $VmQuota;
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getVdcStorageProfile() {
        return $this->VdcStorageProfile;
    }
    public function setVdcStorageProfile($VdcStorageProfile) { 
        $this->VdcStorageProfile = $VdcStorageProfile;
    }
    public function addVdcStorageProfile($value) { array_push($this->VdcStorageProfile, $value); }
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
        if (!is_null($this->AllocationModel)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AllocationModel', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AllocationModel>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AllocationModel, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AllocationModel')) . "</" . $ns . "AllocationModel>\n");
        }
        if (!is_null($this->ComputeCapacity)) {
            $out = $this->ComputeCapacity->export('ComputeCapacity', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->NicQuota)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'NicQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "NicQuota>" . VMware_VCloud_API_Helper::format_integer($this->NicQuota, $input_name='NicQuota') . "</" . $ns . "NicQuota>\n");
        }
        if (!is_null($this->NetworkQuota)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'NetworkQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "NetworkQuota>" . VMware_VCloud_API_Helper::format_integer($this->NetworkQuota, $input_name='NetworkQuota') . "</" . $ns . "NetworkQuota>\n");
        }
        if (!is_null($this->VmQuota)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VmQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VmQuota>" . VMware_VCloud_API_Helper::format_integer($this->VmQuota, $input_name='VmQuota') . "</" . $ns . "VmQuota>\n");
        }
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (isset($this->VdcStorageProfile)) {
            foreach ($this->VdcStorageProfile as $VdcStorageProfile) {
                $out = $VdcStorageProfile->export('VdcStorageProfile', $out, $level, '', $namespace, $rootNS);
            }
        }
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
            !is_null($this->AllocationModel) ||
            !is_null($this->ComputeCapacity) ||
            !is_null($this->NicQuota) ||
            !is_null($this->NetworkQuota) ||
            !is_null($this->VmQuota) ||
            !is_null($this->IsEnabled) ||
            !empty($this->VdcStorageProfile) ||
            !is_null($this->ResourceGuaranteedMemory) ||
            !is_null($this->ResourceGuaranteedCpu) ||
            !is_null($this->VCpuInMhz) ||
            !is_null($this->IsThinProvision) ||
            !is_null($this->NetworkPoolReference) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllocationModel') {
            $sval = $child->nodeValue;
            $this->AllocationModel = $sval;
            if (!empty($namespace)) {
                $this->namespace['AllocationModel'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ComputeCapacity') {
            $obj = new VMware_VCloud_API_ComputeCapacityType();
            $obj->build($child);
            $obj->set_tagName('ComputeCapacity');
            $this->setComputeCapacity($obj);
            if (!empty($namespace)) {
                $this->namespace['ComputeCapacity'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NicQuota') {
            $sval = $child->nodeValue;
            $this->NicQuota = $sval;
            if (!empty($namespace)) {
                $this->namespace['NicQuota'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkQuota') {
            $sval = $child->nodeValue;
            $this->NetworkQuota = $sval;
            if (!empty($namespace)) {
                $this->namespace['NetworkQuota'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmQuota') {
            $sval = $child->nodeValue;
            $this->VmQuota = $sval;
            if (!empty($namespace)) {
                $this->namespace['VmQuota'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VdcStorageProfile') {
            $obj = new VMware_VCloud_API_VdcStorageProfileParamsType();
            $obj->build($child);
            $obj->set_tagName('VdcStorageProfile');
            array_push($this->VdcStorageProfile, $obj);
            if (!empty($namespace)) {
                $this->namespace['VdcStorageProfile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceGuaranteedMemory') {
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