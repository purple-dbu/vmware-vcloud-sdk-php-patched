<?php
class VMware_VCloud_API_OVF_CIM_ResourceAllocationSettingData_Type {
    protected $Address = null;
    protected $AddressOnParent = null;
    protected $AllocationUnits = null;
    protected $AutomaticAllocation = null;
    protected $AutomaticDeallocation = null;
    protected $Caption = null;
    protected $ChangeableType = null;
    protected $ConfigurationName = null;
    protected $Connection = array();
    protected $ConsumerVisibility = null;
    protected $Description = null;
    protected $ElementName = null;
    protected $Generation = null;
    protected $HostResource = array();
    protected $InstanceID = null;
    protected $Limit = null;
    protected $MappingBehavior = null;
    protected $OtherResourceType = null;
    protected $Parent = null;
    protected $PoolID = null;
    protected $Reservation = null;
    protected $ResourceSubType = null;
    protected $ResourceType = null;
    protected $VirtualQuantity = null;
    protected $VirtualQuantityUnits = null;
    protected $Weight = null;
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData';

   /**
    * @param VMware_VCloud_API_OVF_cimString $Address - [optional]
    * @param VMware_VCloud_API_OVF_cimString $AddressOnParent - [optional]
    * @param VMware_VCloud_API_OVF_cimString $AllocationUnits - [optional]
    * @param VMware_VCloud_API_OVF_cimBoolean $AutomaticAllocation - [optional]
    * @param VMware_VCloud_API_OVF_cimBoolean $AutomaticDeallocation - [optional]
    * @param VMware_VCloud_API_OVF_Caption $Caption - [optional]
    * @param VMware_VCloud_API_OVF_ChangeableType $ChangeableType - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationName - [optional]
    * @param array $Connection - [optional] an array of VMware_VCloud_API_OVF_cimString objects
    * @param VMware_VCloud_API_OVF_ConsumerVisibility $ConsumerVisibility - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Description - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ElementName - [required]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $Generation - [optional]
    * @param array $HostResource - [optional] an array of VMware_VCloud_API_OVF_cimString objects
    * @param VMware_VCloud_API_OVF_cimString $InstanceID - [required]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $Limit - [optional]
    * @param VMware_VCloud_API_OVF_MappingBehavior $MappingBehavior - [optional]
    * @param VMware_VCloud_API_OVF_cimString $OtherResourceType - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Parent - [optional]
    * @param VMware_VCloud_API_OVF_cimString $PoolID - [optional]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $Reservation - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ResourceSubType - [optional]
    * @param VMware_VCloud_API_OVF_ResourceType $ResourceType - [optional]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $VirtualQuantity - [optional]
    * @param VMware_VCloud_API_OVF_cimString $VirtualQuantityUnits - [optional]
    * @param VMware_VCloud_API_OVF_cimUnsignedInt $Weight - [optional]
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($Address=null, $AddressOnParent=null, $AllocationUnits=null, $AutomaticAllocation=null, $AutomaticDeallocation=null, $Caption=null, $ChangeableType=null, $ConfigurationName=null, $Connection=null, $ConsumerVisibility=null, $Description=null, $ElementName=null, $Generation=null, $HostResource=null, $InstanceID=null, $Limit=null, $MappingBehavior=null, $OtherResourceType=null, $Parent=null, $PoolID=null, $Reservation=null, $ResourceSubType=null, $ResourceType=null, $VirtualQuantity=null, $VirtualQuantityUnits=null, $Weight=null, $Any=null) {
        $this->Address = $Address;
        $this->AddressOnParent = $AddressOnParent;
        $this->AllocationUnits = $AllocationUnits;
        $this->AutomaticAllocation = $AutomaticAllocation;
        $this->AutomaticDeallocation = $AutomaticDeallocation;
        $this->Caption = $Caption;
        $this->ChangeableType = $ChangeableType;
        $this->ConfigurationName = $ConfigurationName;
        if (!is_null($Connection)) {
            $this->Connection = $Connection;
        }
        $this->ConsumerVisibility = $ConsumerVisibility;
        $this->Description = $Description;
        $this->ElementName = $ElementName;
        $this->Generation = $Generation;
        if (!is_null($HostResource)) {
            $this->HostResource = $HostResource;
        }
        $this->InstanceID = $InstanceID;
        $this->Limit = $Limit;
        $this->MappingBehavior = $MappingBehavior;
        $this->OtherResourceType = $OtherResourceType;
        $this->Parent = $Parent;
        $this->PoolID = $PoolID;
        $this->Reservation = $Reservation;
        $this->ResourceSubType = $ResourceSubType;
        $this->ResourceType = $ResourceType;
        $this->VirtualQuantity = $VirtualQuantity;
        $this->VirtualQuantityUnits = $VirtualQuantityUnits;
        $this->Weight = $Weight;
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->anyAttributes = array();
        $this->tagName = 'CIM_ResourceAllocationSettingData';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAddress() {
        return $this->Address;
    }
    public function setAddress($Address) { 
        $this->Address = $Address;
    }
    public function getAddressOnParent() {
        return $this->AddressOnParent;
    }
    public function setAddressOnParent($AddressOnParent) { 
        $this->AddressOnParent = $AddressOnParent;
    }
    public function getAllocationUnits() {
        return $this->AllocationUnits;
    }
    public function setAllocationUnits($AllocationUnits) { 
        $this->AllocationUnits = $AllocationUnits;
    }
    public function getAutomaticAllocation() {
        return $this->AutomaticAllocation;
    }
    public function setAutomaticAllocation($AutomaticAllocation) { 
        $this->AutomaticAllocation = $AutomaticAllocation;
    }
    public function getAutomaticDeallocation() {
        return $this->AutomaticDeallocation;
    }
    public function setAutomaticDeallocation($AutomaticDeallocation) { 
        $this->AutomaticDeallocation = $AutomaticDeallocation;
    }
    public function getCaption() {
        return $this->Caption;
    }
    public function setCaption($Caption) { 
        $this->Caption = $Caption;
    }
    public function getChangeableType() {
        return $this->ChangeableType;
    }
    public function setChangeableType($ChangeableType) { 
        $this->ChangeableType = $ChangeableType;
    }
    public function getConfigurationName() {
        return $this->ConfigurationName;
    }
    public function setConfigurationName($ConfigurationName) { 
        $this->ConfigurationName = $ConfigurationName;
    }
    public function getConnection() {
        return $this->Connection;
    }
    public function setConnection($Connection) { 
        $this->Connection = $Connection;
    }
    public function addConnection($value) { array_push($this->Connection, $value); }
    public function getConsumerVisibility() {
        return $this->ConsumerVisibility;
    }
    public function setConsumerVisibility($ConsumerVisibility) { 
        $this->ConsumerVisibility = $ConsumerVisibility;
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function getElementName() {
        return $this->ElementName;
    }
    public function setElementName($ElementName) { 
        $this->ElementName = $ElementName;
    }
    public function getGeneration() {
        return $this->Generation;
    }
    public function setGeneration($Generation) { 
        $this->Generation = $Generation;
    }
    public function getHostResource() {
        return $this->HostResource;
    }
    public function setHostResource($HostResource) { 
        $this->HostResource = $HostResource;
    }
    public function addHostResource($value) { array_push($this->HostResource, $value); }
    public function getInstanceID() {
        return $this->InstanceID;
    }
    public function setInstanceID($InstanceID) { 
        $this->InstanceID = $InstanceID;
    }
    public function getLimit() {
        return $this->Limit;
    }
    public function setLimit($Limit) { 
        $this->Limit = $Limit;
    }
    public function getMappingBehavior() {
        return $this->MappingBehavior;
    }
    public function setMappingBehavior($MappingBehavior) { 
        $this->MappingBehavior = $MappingBehavior;
    }
    public function getOtherResourceType() {
        return $this->OtherResourceType;
    }
    public function setOtherResourceType($OtherResourceType) { 
        $this->OtherResourceType = $OtherResourceType;
    }
    public function getParent() {
        return $this->Parent;
    }
    public function setParent($Parent) { 
        $this->Parent = $Parent;
    }
    public function getPoolID() {
        return $this->PoolID;
    }
    public function setPoolID($PoolID) { 
        $this->PoolID = $PoolID;
    }
    public function getReservation() {
        return $this->Reservation;
    }
    public function setReservation($Reservation) { 
        $this->Reservation = $Reservation;
    }
    public function getResourceSubType() {
        return $this->ResourceSubType;
    }
    public function setResourceSubType($ResourceSubType) { 
        $this->ResourceSubType = $ResourceSubType;
    }
    public function getResourceType() {
        return $this->ResourceType;
    }
    public function setResourceType($ResourceType) { 
        $this->ResourceType = $ResourceType;
    }
    public function getVirtualQuantity() {
        return $this->VirtualQuantity;
    }
    public function setVirtualQuantity($VirtualQuantity) { 
        $this->VirtualQuantity = $VirtualQuantity;
    }
    public function getVirtualQuantityUnits() {
        return $this->VirtualQuantityUnits;
    }
    public function setVirtualQuantityUnits($VirtualQuantityUnits) { 
        $this->VirtualQuantityUnits = $VirtualQuantityUnits;
    }
    public function getWeight() {
        return $this->Weight;
    }
    public function setWeight($Weight) { 
        $this->Weight = $Weight;
    }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
    public function get_anyAttributes() { return $this->anyAttributes; }
    public function set_anyAttributes($anyAttributes) { $this->anyAttributes = $anyAttributes; }
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
        if ($this->anyAttributes) {
            foreach ($this->anyAttributes as $name => $value) {
                if (array_key_exists($name, $this->namespace)) {
                    $ns = $this->namespace[$name];
                    if (!empty($ns)) {
                        $name = $ns . ":" . $name;
                    }
                }
                if ('xsi:type' != $name) {
                    $out = VMware_VCloud_API_Helper::addString($out, " $name=" . VMware_VCloud_API_Helper::quote_attrib($value));
                }
            }
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->Address)) {
            $out = $this->Address->export('Address', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AddressOnParent)) {
            $out = $this->AddressOnParent->export('AddressOnParent', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AllocationUnits)) {
            $out = $this->AllocationUnits->export('AllocationUnits', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AutomaticAllocation)) {
            $out = $this->AutomaticAllocation->export('AutomaticAllocation', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AutomaticDeallocation)) {
            $out = $this->AutomaticDeallocation->export('AutomaticDeallocation', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Caption)) {
            $out = $this->Caption->export('Caption', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ChangeableType)) {
            $out = $this->ChangeableType->export('ChangeableType', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ConfigurationName)) {
            $out = $this->ConfigurationName->export('ConfigurationName', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Connection)) {
            foreach ($this->Connection as $Connection) {
                $out = $Connection->export('Connection', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->ConsumerVisibility)) {
            $out = $this->ConsumerVisibility->export('ConsumerVisibility', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Description)) {
            $out = $this->Description->export('Description', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ElementName)) {
            $out = $this->ElementName->export('ElementName', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Generation)) {
            $out = $this->Generation->export('Generation', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->HostResource)) {
            foreach ($this->HostResource as $HostResource) {
                $out = $HostResource->export('HostResource', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->InstanceID)) {
            $out = $this->InstanceID->export('InstanceID', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Limit)) {
            $out = $this->Limit->export('Limit', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->MappingBehavior)) {
            $out = $this->MappingBehavior->export('MappingBehavior', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OtherResourceType)) {
            $out = $this->OtherResourceType->export('OtherResourceType', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Parent)) {
            $out = $this->Parent->export('Parent', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->PoolID)) {
            $out = $this->PoolID->export('PoolID', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Reservation)) {
            $out = $this->Reservation->export('Reservation', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ResourceSubType)) {
            $out = $this->ResourceSubType->export('ResourceSubType', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ResourceType)) {
            $out = $this->ResourceType->export('ResourceType', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VirtualQuantity)) {
            $out = $this->VirtualQuantity->export('VirtualQuantity', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VirtualQuantityUnits)) {
            $out = $this->VirtualQuantityUnits->export('VirtualQuantityUnits', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Weight)) {
            $out = $this->Weight->export('Weight', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Any)) {
            foreach ($this->Any as $Any) {
                if ($Any instanceof SimpleXMLElement) {
                    $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                    $out = VMware_VCloud_API_Helper::addString($out, $Any->asXML() . "\n");
                } else {
                    $tagName = $Any->get_tagName();
                    $namespace = $Any::$defaultNS;
                    $out = $Any->export($tagName, $out, $level, '', $namespace, $rootNS);
                }
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Address) ||
            !is_null($this->AddressOnParent) ||
            !is_null($this->AllocationUnits) ||
            !is_null($this->AutomaticAllocation) ||
            !is_null($this->AutomaticDeallocation) ||
            !is_null($this->Caption) ||
            !is_null($this->ChangeableType) ||
            !is_null($this->ConfigurationName) ||
            !empty($this->Connection) ||
            !is_null($this->ConsumerVisibility) ||
            !is_null($this->Description) ||
            !is_null($this->ElementName) ||
            !is_null($this->Generation) ||
            !empty($this->HostResource) ||
            !is_null($this->InstanceID) ||
            !is_null($this->Limit) ||
            !is_null($this->MappingBehavior) ||
            !is_null($this->OtherResourceType) ||
            !is_null($this->Parent) ||
            !is_null($this->PoolID) ||
            !is_null($this->Reservation) ||
            !is_null($this->ResourceSubType) ||
            !is_null($this->ResourceType) ||
            !is_null($this->VirtualQuantity) ||
            !is_null($this->VirtualQuantityUnits) ||
            !is_null($this->Weight) ||
            !empty($this->Any)
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
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            $this->anyAttributes[$localName] = $attr->value;
            $node->removeAttribute($localName);
            $this->namespace[$localName] = $attr->prefix;
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Address') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Address');
            $this->setAddress($obj);
            if (!empty($namespace)) {
                $this->namespace['Address'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AddressOnParent') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('AddressOnParent');
            $this->setAddressOnParent($obj);
            if (!empty($namespace)) {
                $this->namespace['AddressOnParent'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllocationUnits') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('AllocationUnits');
            $this->setAllocationUnits($obj);
            if (!empty($namespace)) {
                $this->namespace['AllocationUnits'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AutomaticAllocation') {
            $obj = new VMware_VCloud_API_OVF_cimBoolean();
            $obj->build($child);
            $obj->set_tagName('AutomaticAllocation');
            $this->setAutomaticAllocation($obj);
            if (!empty($namespace)) {
                $this->namespace['AutomaticAllocation'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AutomaticDeallocation') {
            $obj = new VMware_VCloud_API_OVF_cimBoolean();
            $obj->build($child);
            $obj->set_tagName('AutomaticDeallocation');
            $this->setAutomaticDeallocation($obj);
            if (!empty($namespace)) {
                $this->namespace['AutomaticDeallocation'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Caption') {
            $obj = new VMware_VCloud_API_OVF_Caption();
            $obj->build($child);
            $obj->set_tagName('Caption');
            $this->setCaption($obj);
            if (!empty($namespace)) {
                $this->namespace['Caption'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ChangeableType') {
            $obj = new VMware_VCloud_API_OVF_ChangeableType();
            $obj->build($child);
            $obj->set_tagName('ChangeableType');
            $this->setChangeableType($obj);
            if (!empty($namespace)) {
                $this->namespace['ChangeableType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ConfigurationName') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('ConfigurationName');
            $this->setConfigurationName($obj);
            if (!empty($namespace)) {
                $this->namespace['ConfigurationName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Connection') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Connection');
            array_push($this->Connection, $obj);
            if (!empty($namespace)) {
                $this->namespace['Connection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ConsumerVisibility') {
            $obj = new VMware_VCloud_API_OVF_ConsumerVisibility();
            $obj->build($child);
            $obj->set_tagName('ConsumerVisibility');
            $this->setConsumerVisibility($obj);
            if (!empty($namespace)) {
                $this->namespace['ConsumerVisibility'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Description');
            $this->setDescription($obj);
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ElementName') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('ElementName');
            $this->setElementName($obj);
            if (!empty($namespace)) {
                $this->namespace['ElementName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Generation') {
            $obj = new VMware_VCloud_API_OVF_cimUnsignedLong();
            $obj->build($child);
            $obj->set_tagName('Generation');
            $this->setGeneration($obj);
            if (!empty($namespace)) {
                $this->namespace['Generation'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostResource') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('HostResource');
            array_push($this->HostResource, $obj);
            if (!empty($namespace)) {
                $this->namespace['HostResource'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstanceID') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('InstanceID');
            $this->setInstanceID($obj);
            if (!empty($namespace)) {
                $this->namespace['InstanceID'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Limit') {
            $obj = new VMware_VCloud_API_OVF_cimUnsignedLong();
            $obj->build($child);
            $obj->set_tagName('Limit');
            $this->setLimit($obj);
            if (!empty($namespace)) {
                $this->namespace['Limit'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MappingBehavior') {
            $obj = new VMware_VCloud_API_OVF_MappingBehavior();
            $obj->build($child);
            $obj->set_tagName('MappingBehavior');
            $this->setMappingBehavior($obj);
            if (!empty($namespace)) {
                $this->namespace['MappingBehavior'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OtherResourceType') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('OtherResourceType');
            $this->setOtherResourceType($obj);
            if (!empty($namespace)) {
                $this->namespace['OtherResourceType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Parent') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Parent');
            $this->setParent($obj);
            if (!empty($namespace)) {
                $this->namespace['Parent'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PoolID') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('PoolID');
            $this->setPoolID($obj);
            if (!empty($namespace)) {
                $this->namespace['PoolID'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Reservation') {
            $obj = new VMware_VCloud_API_OVF_cimUnsignedLong();
            $obj->build($child);
            $obj->set_tagName('Reservation');
            $this->setReservation($obj);
            if (!empty($namespace)) {
                $this->namespace['Reservation'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceSubType') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('ResourceSubType');
            $this->setResourceSubType($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceSubType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceType') {
            $obj = new VMware_VCloud_API_OVF_ResourceType();
            $obj->build($child);
            $obj->set_tagName('ResourceType');
            $this->setResourceType($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualQuantity') {
            $obj = new VMware_VCloud_API_OVF_cimUnsignedLong();
            $obj->build($child);
            $obj->set_tagName('VirtualQuantity');
            $this->setVirtualQuantity($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualQuantity'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualQuantityUnits') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('VirtualQuantityUnits');
            $this->setVirtualQuantityUnits($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualQuantityUnits'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Weight') {
            $obj = new VMware_VCloud_API_OVF_cimUnsignedInt();
            $obj->build($child);
            $obj->set_tagName('Weight');
            $this->setWeight($obj);
            if (!empty($namespace)) {
                $this->namespace['Weight'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE) {
            $type = VMware_VCloud_API_Helper::getClassName($nodeName);
            if (class_exists($type) && method_exists($type, 'build')) {
                $class = new ReflectionClass($type);
                if ($class->isInstantiable()) {
                    $obj = $class->newInstance();
                    $obj->build($child);
                    $obj->set_tagName($nodeName);
                }
            } else {
                $obj = simplexml_import_dom($child);
            }
            array_push($this->Any, $obj);
            if (!empty($namespace)) {
                $this->namespace['Any'] = $namespace;
            }
        }
    }
}