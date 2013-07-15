<?php
class VMware_VCloud_API_VdcType extends VMware_VCloud_API_EntityType {
    protected $status = null;
    protected $AllocationModel = null;
    protected $StorageCapacity = null;
    protected $ComputeCapacity = null;
    protected $ResourceEntities = null;
    protected $AvailableNetworks = null;
    protected $Capabilities = null;
    protected $NicQuota = null;
    protected $NetworkQuota = null;
    protected $UsedNetworkCount = null;
    protected $VmQuota = null;
    protected $IsEnabled = null;
    protected $VdcStorageProfiles = null;
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
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $AllocationModel=null, $StorageCapacity=null, $ComputeCapacity=null, $ResourceEntities=null, $AvailableNetworks=null, $Capabilities=null, $NicQuota=null, $NetworkQuota=null, $UsedNetworkCount=null, $VmQuota=null, $IsEnabled=null, $VdcStorageProfiles=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->status = $status;
        $this->AllocationModel = $AllocationModel;
        $this->StorageCapacity = $StorageCapacity;
        $this->ComputeCapacity = $ComputeCapacity;
        $this->ResourceEntities = $ResourceEntities;
        $this->AvailableNetworks = $AvailableNetworks;
        $this->Capabilities = $Capabilities;
        $this->NicQuota = $NicQuota;
        $this->NetworkQuota = $NetworkQuota;
        $this->UsedNetworkCount = $UsedNetworkCount;
        $this->VmQuota = $VmQuota;
        $this->IsEnabled = $IsEnabled;
        $this->VdcStorageProfiles = $VdcStorageProfiles;
        $this->tagName = 'Vdc';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAllocationModel() {
        return $this->AllocationModel;
    }
    public function setAllocationModel($AllocationModel) { 
        $this->AllocationModel = $AllocationModel;
    }
    public function getStorageCapacity() {
        return $this->StorageCapacity;
    }
    public function setStorageCapacity($StorageCapacity) { 
        $this->StorageCapacity = $StorageCapacity;
    }
    public function getComputeCapacity() {
        return $this->ComputeCapacity;
    }
    public function setComputeCapacity($ComputeCapacity) { 
        $this->ComputeCapacity = $ComputeCapacity;
    }
    public function getResourceEntities() {
        return $this->ResourceEntities;
    }
    public function setResourceEntities($ResourceEntities) { 
        $this->ResourceEntities = $ResourceEntities;
    }
    public function getAvailableNetworks() {
        return $this->AvailableNetworks;
    }
    public function setAvailableNetworks($AvailableNetworks) { 
        $this->AvailableNetworks = $AvailableNetworks;
    }
    public function getCapabilities() {
        return $this->Capabilities;
    }
    public function setCapabilities($Capabilities) { 
        $this->Capabilities = $Capabilities;
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
    public function getUsedNetworkCount() {
        return $this->UsedNetworkCount;
    }
    public function setUsedNetworkCount($UsedNetworkCount) { 
        $this->UsedNetworkCount = $UsedNetworkCount;
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
    public function getVdcStorageProfiles() {
        return $this->VdcStorageProfiles;
    }
    public function setVdcStorageProfiles($VdcStorageProfiles) { 
        $this->VdcStorageProfiles = $VdcStorageProfiles;
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
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
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->status, $input_name='status')));
        }
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
        if (!is_null($this->StorageCapacity)) {
            $out = $this->StorageCapacity->export('StorageCapacity', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ComputeCapacity)) {
            $out = $this->ComputeCapacity->export('ComputeCapacity', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ResourceEntities)) {
            $out = $this->ResourceEntities->export('ResourceEntities', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AvailableNetworks)) {
            $out = $this->AvailableNetworks->export('AvailableNetworks', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Capabilities)) {
            $out = $this->Capabilities->export('Capabilities', $out, $level, '', $namespace, $rootNS);
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
        if (!is_null($this->UsedNetworkCount)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UsedNetworkCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UsedNetworkCount>" . VMware_VCloud_API_Helper::format_integer($this->UsedNetworkCount, $input_name='UsedNetworkCount') . "</" . $ns . "UsedNetworkCount>\n");
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
        if (!is_null($this->VdcStorageProfiles)) {
            $out = $this->VdcStorageProfiles->export('VdcStorageProfiles', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->AllocationModel) ||
            !is_null($this->StorageCapacity) ||
            !is_null($this->ComputeCapacity) ||
            !is_null($this->ResourceEntities) ||
            !is_null($this->AvailableNetworks) ||
            !is_null($this->Capabilities) ||
            !is_null($this->NicQuota) ||
            !is_null($this->NetworkQuota) ||
            !is_null($this->UsedNetworkCount) ||
            !is_null($this->VmQuota) ||
            !is_null($this->IsEnabled) ||
            !is_null($this->VdcStorageProfiles) ||
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
        $ndstatus = $attrs->getNamedItem('status');
        if (!is_null($ndstatus)) {
            $this->status = sprintf('%d', $ndstatus->value);
            if (isset($ndstatus->prefix)) {
                $this->namespace['status'] = $ndstatus->prefix;
                $nsUri = $ndstatus->lookupNamespaceURI($ndstatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'status');
        } else {
            $this->status = null;
        }
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StorageCapacity') {
            $obj = new VMware_VCloud_API_CapacityWithUsageType();
            $obj->build($child);
            $obj->set_tagName('StorageCapacity');
            $this->setStorageCapacity($obj);
            if (!empty($namespace)) {
                $this->namespace['StorageCapacity'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceEntities') {
            $obj = new VMware_VCloud_API_ResourceEntitiesType();
            $obj->build($child);
            $obj->set_tagName('ResourceEntities');
            $this->setResourceEntities($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceEntities'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AvailableNetworks') {
            $obj = new VMware_VCloud_API_AvailableNetworksType();
            $obj->build($child);
            $obj->set_tagName('AvailableNetworks');
            $this->setAvailableNetworks($obj);
            if (!empty($namespace)) {
                $this->namespace['AvailableNetworks'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Capabilities') {
            $obj = new VMware_VCloud_API_CapabilitiesType();
            $obj->build($child);
            $obj->set_tagName('Capabilities');
            $this->setCapabilities($obj);
            if (!empty($namespace)) {
                $this->namespace['Capabilities'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UsedNetworkCount') {
            $sval = $child->nodeValue;
            $this->UsedNetworkCount = $sval;
            if (!empty($namespace)) {
                $this->namespace['UsedNetworkCount'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VdcStorageProfiles') {
            $obj = new VMware_VCloud_API_VdcStorageProfilesType();
            $obj->build($child);
            $obj->set_tagName('VdcStorageProfiles');
            $this->setVdcStorageProfiles($obj);
            if (!empty($namespace)) {
                $this->namespace['VdcStorageProfiles'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}