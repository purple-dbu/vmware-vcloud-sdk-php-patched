<?php
class VMware_VCloud_API_ProviderVdcType extends VMware_VCloud_API_EntityType {
    protected $status = null;
    protected $ComputeCapacity = null;
    protected $StorageCapacity = null;
    protected $AvailableNetworks = null;
    protected $StorageProfiles = null;
    protected $Capabilities = null;
    protected $Vdcs = null;
    protected $IsEnabled = null;
    protected $NetworkPoolReferences = null;
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
    * @param VMware_VCloud_API_RootComputeCapacityType $ComputeCapacity - [optional]
    * @param VMware_VCloud_API_ProviderVdcCapacityType $StorageCapacity - [optional]
    * @param VMware_VCloud_API_AvailableNetworksType $AvailableNetworks - [optional]
    * @param VMware_VCloud_API_ProviderVdcStorageProfilesType $StorageProfiles - [optional]
    * @param VMware_VCloud_API_CapabilitiesType $Capabilities - [optional]
    * @param VMware_VCloud_API_VdcsType $Vdcs - [optional]
    * @param boolean $IsEnabled - [optional] 
    * @param VMware_VCloud_API_NetworkPoolReferencesType $NetworkPoolReferences - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $ComputeCapacity=null, $StorageCapacity=null, $AvailableNetworks=null, $StorageProfiles=null, $Capabilities=null, $Vdcs=null, $IsEnabled=null, $NetworkPoolReferences=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->status = $status;
        $this->ComputeCapacity = $ComputeCapacity;
        $this->StorageCapacity = $StorageCapacity;
        $this->AvailableNetworks = $AvailableNetworks;
        $this->StorageProfiles = $StorageProfiles;
        $this->Capabilities = $Capabilities;
        $this->Vdcs = $Vdcs;
        $this->IsEnabled = $IsEnabled;
        $this->NetworkPoolReferences = $NetworkPoolReferences;
        $this->tagName = 'ProviderVdc';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getComputeCapacity() {
        return $this->ComputeCapacity;
    }
    public function setComputeCapacity($ComputeCapacity) { 
        $this->ComputeCapacity = $ComputeCapacity;
    }
    public function getStorageCapacity() {
        return $this->StorageCapacity;
    }
    public function setStorageCapacity($StorageCapacity) { 
        $this->StorageCapacity = $StorageCapacity;
    }
    public function getAvailableNetworks() {
        return $this->AvailableNetworks;
    }
    public function setAvailableNetworks($AvailableNetworks) { 
        $this->AvailableNetworks = $AvailableNetworks;
    }
    public function getStorageProfiles() {
        return $this->StorageProfiles;
    }
    public function setStorageProfiles($StorageProfiles) { 
        $this->StorageProfiles = $StorageProfiles;
    }
    public function getCapabilities() {
        return $this->Capabilities;
    }
    public function setCapabilities($Capabilities) { 
        $this->Capabilities = $Capabilities;
    }
    public function getVdcs() {
        return $this->Vdcs;
    }
    public function setVdcs($Vdcs) { 
        $this->Vdcs = $Vdcs;
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getNetworkPoolReferences() {
        return $this->NetworkPoolReferences;
    }
    public function setNetworkPoolReferences($NetworkPoolReferences) { 
        $this->NetworkPoolReferences = $NetworkPoolReferences;
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
        if (!is_null($this->ComputeCapacity)) {
            $out = $this->ComputeCapacity->export('ComputeCapacity', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->StorageCapacity)) {
            $out = $this->StorageCapacity->export('StorageCapacity', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AvailableNetworks)) {
            $out = $this->AvailableNetworks->export('AvailableNetworks', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->StorageProfiles)) {
            $out = $this->StorageProfiles->export('StorageProfiles', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Capabilities)) {
            $out = $this->Capabilities->export('Capabilities', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Vdcs)) {
            $out = $this->Vdcs->export('Vdcs', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (!is_null($this->NetworkPoolReferences)) {
            $out = $this->NetworkPoolReferences->export('NetworkPoolReferences', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->ComputeCapacity) ||
            !is_null($this->StorageCapacity) ||
            !is_null($this->AvailableNetworks) ||
            !is_null($this->StorageProfiles) ||
            !is_null($this->Capabilities) ||
            !is_null($this->Vdcs) ||
            !is_null($this->IsEnabled) ||
            !is_null($this->NetworkPoolReferences) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ComputeCapacity') {
            $obj = new VMware_VCloud_API_RootComputeCapacityType();
            $obj->build($child);
            $obj->set_tagName('ComputeCapacity');
            $this->setComputeCapacity($obj);
            if (!empty($namespace)) {
                $this->namespace['ComputeCapacity'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StorageCapacity') {
            $obj = new VMware_VCloud_API_ProviderVdcCapacityType();
            $obj->build($child);
            $obj->set_tagName('StorageCapacity');
            $this->setStorageCapacity($obj);
            if (!empty($namespace)) {
                $this->namespace['StorageCapacity'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StorageProfiles') {
            $obj = new VMware_VCloud_API_ProviderVdcStorageProfilesType();
            $obj->build($child);
            $obj->set_tagName('StorageProfiles');
            $this->setStorageProfiles($obj);
            if (!empty($namespace)) {
                $this->namespace['StorageProfiles'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Vdcs') {
            $obj = new VMware_VCloud_API_VdcsType();
            $obj->build($child);
            $obj->set_tagName('Vdcs');
            $this->setVdcs($obj);
            if (!empty($namespace)) {
                $this->namespace['Vdcs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkPoolReferences') {
            $obj = new VMware_VCloud_API_NetworkPoolReferencesType();
            $obj->build($child);
            $obj->set_tagName('NetworkPoolReferences');
            $this->setNetworkPoolReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkPoolReferences'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}