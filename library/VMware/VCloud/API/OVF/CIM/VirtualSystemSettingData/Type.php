<?php
class VMware_VCloud_API_OVF_CIM_VirtualSystemSettingData_Type {
    protected $AutomaticRecoveryAction = null;
    protected $AutomaticShutdownAction = null;
    protected $AutomaticStartupAction = null;
    protected $AutomaticStartupActionDelay = null;
    protected $AutomaticStartupActionSequenceNumber = null;
    protected $Caption = null;
    protected $ChangeableType = null;
    protected $ConfigurationDataRoot = null;
    protected $ConfigurationFile = null;
    protected $ConfigurationID = null;
    protected $ConfigurationName = null;
    protected $CreationTime = null;
    protected $Description = null;
    protected $ElementName = null;
    protected $Generation = null;
    protected $InstanceID = null;
    protected $LogDataRoot = null;
    protected $Notes = array();
    protected $RecoveryFile = null;
    protected $SnapshotDataRoot = null;
    protected $SuspendDataRoot = null;
    protected $SwapFileDataRoot = null;
    protected $VirtualSystemIdentifier = null;
    protected $VirtualSystemType = null;
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData';

   /**
    * @param VMware_VCloud_API_OVF_AutomaticRecoveryAction $AutomaticRecoveryAction - [optional]
    * @param VMware_VCloud_API_OVF_AutomaticShutdownAction $AutomaticShutdownAction - [optional]
    * @param VMware_VCloud_API_OVF_AutomaticStartupAction $AutomaticStartupAction - [optional]
    * @param VMware_VCloud_API_OVF_cimDateTime $AutomaticStartupActionDelay - [optional]
    * @param VMware_VCloud_API_OVF_cimUnsignedShort $AutomaticStartupActionSequenceNumber - [optional]
    * @param VMware_VCloud_API_OVF_Caption $Caption - [optional]
    * @param VMware_VCloud_API_OVF_ChangeableType $ChangeableType - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationDataRoot - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationFile - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationID - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationName - [optional]
    * @param VMware_VCloud_API_OVF_cimDateTime $CreationTime - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Description - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ElementName - [required]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $Generation - [optional]
    * @param VMware_VCloud_API_OVF_cimString $InstanceID - [required]
    * @param VMware_VCloud_API_OVF_cimString $LogDataRoot - [optional]
    * @param array $Notes - [optional] an array of VMware_VCloud_API_OVF_cimString objects
    * @param VMware_VCloud_API_OVF_cimString $RecoveryFile - [optional]
    * @param VMware_VCloud_API_OVF_cimString $SnapshotDataRoot - [optional]
    * @param VMware_VCloud_API_OVF_cimString $SuspendDataRoot - [optional]
    * @param VMware_VCloud_API_OVF_cimString $SwapFileDataRoot - [optional]
    * @param VMware_VCloud_API_OVF_cimString $VirtualSystemIdentifier - [optional]
    * @param VMware_VCloud_API_OVF_cimString $VirtualSystemType - [optional]
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($AutomaticRecoveryAction=null, $AutomaticShutdownAction=null, $AutomaticStartupAction=null, $AutomaticStartupActionDelay=null, $AutomaticStartupActionSequenceNumber=null, $Caption=null, $ChangeableType=null, $ConfigurationDataRoot=null, $ConfigurationFile=null, $ConfigurationID=null, $ConfigurationName=null, $CreationTime=null, $Description=null, $ElementName=null, $Generation=null, $InstanceID=null, $LogDataRoot=null, $Notes=null, $RecoveryFile=null, $SnapshotDataRoot=null, $SuspendDataRoot=null, $SwapFileDataRoot=null, $VirtualSystemIdentifier=null, $VirtualSystemType=null, $Any=null) {
        $this->AutomaticRecoveryAction = $AutomaticRecoveryAction;
        $this->AutomaticShutdownAction = $AutomaticShutdownAction;
        $this->AutomaticStartupAction = $AutomaticStartupAction;
        $this->AutomaticStartupActionDelay = $AutomaticStartupActionDelay;
        $this->AutomaticStartupActionSequenceNumber = $AutomaticStartupActionSequenceNumber;
        $this->Caption = $Caption;
        $this->ChangeableType = $ChangeableType;
        $this->ConfigurationDataRoot = $ConfigurationDataRoot;
        $this->ConfigurationFile = $ConfigurationFile;
        $this->ConfigurationID = $ConfigurationID;
        $this->ConfigurationName = $ConfigurationName;
        $this->CreationTime = $CreationTime;
        $this->Description = $Description;
        $this->ElementName = $ElementName;
        $this->Generation = $Generation;
        $this->InstanceID = $InstanceID;
        $this->LogDataRoot = $LogDataRoot;
        if (!is_null($Notes)) {
            $this->Notes = $Notes;
        }
        $this->RecoveryFile = $RecoveryFile;
        $this->SnapshotDataRoot = $SnapshotDataRoot;
        $this->SuspendDataRoot = $SuspendDataRoot;
        $this->SwapFileDataRoot = $SwapFileDataRoot;
        $this->VirtualSystemIdentifier = $VirtualSystemIdentifier;
        $this->VirtualSystemType = $VirtualSystemType;
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->anyAttributes = array();
        $this->tagName = 'CIM_VirtualSystemSettingData';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAutomaticRecoveryAction() {
        return $this->AutomaticRecoveryAction;
    }
    public function setAutomaticRecoveryAction($AutomaticRecoveryAction) { 
        $this->AutomaticRecoveryAction = $AutomaticRecoveryAction;
    }
    public function getAutomaticShutdownAction() {
        return $this->AutomaticShutdownAction;
    }
    public function setAutomaticShutdownAction($AutomaticShutdownAction) { 
        $this->AutomaticShutdownAction = $AutomaticShutdownAction;
    }
    public function getAutomaticStartupAction() {
        return $this->AutomaticStartupAction;
    }
    public function setAutomaticStartupAction($AutomaticStartupAction) { 
        $this->AutomaticStartupAction = $AutomaticStartupAction;
    }
    public function getAutomaticStartupActionDelay() {
        return $this->AutomaticStartupActionDelay;
    }
    public function setAutomaticStartupActionDelay($AutomaticStartupActionDelay) { 
        $this->AutomaticStartupActionDelay = $AutomaticStartupActionDelay;
    }
    public function getAutomaticStartupActionSequenceNumber() {
        return $this->AutomaticStartupActionSequenceNumber;
    }
    public function setAutomaticStartupActionSequenceNumber($AutomaticStartupActionSequenceNumber) { 
        $this->AutomaticStartupActionSequenceNumber = $AutomaticStartupActionSequenceNumber;
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
    public function getConfigurationDataRoot() {
        return $this->ConfigurationDataRoot;
    }
    public function setConfigurationDataRoot($ConfigurationDataRoot) { 
        $this->ConfigurationDataRoot = $ConfigurationDataRoot;
    }
    public function getConfigurationFile() {
        return $this->ConfigurationFile;
    }
    public function setConfigurationFile($ConfigurationFile) { 
        $this->ConfigurationFile = $ConfigurationFile;
    }
    public function getConfigurationID() {
        return $this->ConfigurationID;
    }
    public function setConfigurationID($ConfigurationID) { 
        $this->ConfigurationID = $ConfigurationID;
    }
    public function getConfigurationName() {
        return $this->ConfigurationName;
    }
    public function setConfigurationName($ConfigurationName) { 
        $this->ConfigurationName = $ConfigurationName;
    }
    public function getCreationTime() {
        return $this->CreationTime;
    }
    public function setCreationTime($CreationTime) { 
        $this->CreationTime = $CreationTime;
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
    public function getInstanceID() {
        return $this->InstanceID;
    }
    public function setInstanceID($InstanceID) { 
        $this->InstanceID = $InstanceID;
    }
    public function getLogDataRoot() {
        return $this->LogDataRoot;
    }
    public function setLogDataRoot($LogDataRoot) { 
        $this->LogDataRoot = $LogDataRoot;
    }
    public function getNotes() {
        return $this->Notes;
    }
    public function setNotes($Notes) { 
        $this->Notes = $Notes;
    }
    public function addNotes($value) { array_push($this->Notes, $value); }
    public function getRecoveryFile() {
        return $this->RecoveryFile;
    }
    public function setRecoveryFile($RecoveryFile) { 
        $this->RecoveryFile = $RecoveryFile;
    }
    public function getSnapshotDataRoot() {
        return $this->SnapshotDataRoot;
    }
    public function setSnapshotDataRoot($SnapshotDataRoot) { 
        $this->SnapshotDataRoot = $SnapshotDataRoot;
    }
    public function getSuspendDataRoot() {
        return $this->SuspendDataRoot;
    }
    public function setSuspendDataRoot($SuspendDataRoot) { 
        $this->SuspendDataRoot = $SuspendDataRoot;
    }
    public function getSwapFileDataRoot() {
        return $this->SwapFileDataRoot;
    }
    public function setSwapFileDataRoot($SwapFileDataRoot) { 
        $this->SwapFileDataRoot = $SwapFileDataRoot;
    }
    public function getVirtualSystemIdentifier() {
        return $this->VirtualSystemIdentifier;
    }
    public function setVirtualSystemIdentifier($VirtualSystemIdentifier) { 
        $this->VirtualSystemIdentifier = $VirtualSystemIdentifier;
    }
    public function getVirtualSystemType() {
        return $this->VirtualSystemType;
    }
    public function setVirtualSystemType($VirtualSystemType) { 
        $this->VirtualSystemType = $VirtualSystemType;
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
        if (!is_null($this->AutomaticRecoveryAction)) {
            $out = $this->AutomaticRecoveryAction->export('AutomaticRecoveryAction', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AutomaticShutdownAction)) {
            $out = $this->AutomaticShutdownAction->export('AutomaticShutdownAction', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AutomaticStartupAction)) {
            $out = $this->AutomaticStartupAction->export('AutomaticStartupAction', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AutomaticStartupActionDelay)) {
            $out = $this->AutomaticStartupActionDelay->export('AutomaticStartupActionDelay', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->AutomaticStartupActionSequenceNumber)) {
            $out = $this->AutomaticStartupActionSequenceNumber->export('AutomaticStartupActionSequenceNumber', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Caption)) {
            $out = $this->Caption->export('Caption', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ChangeableType)) {
            $out = $this->ChangeableType->export('ChangeableType', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ConfigurationDataRoot)) {
            $out = $this->ConfigurationDataRoot->export('ConfigurationDataRoot', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ConfigurationFile)) {
            $out = $this->ConfigurationFile->export('ConfigurationFile', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ConfigurationID)) {
            $out = $this->ConfigurationID->export('ConfigurationID', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ConfigurationName)) {
            $out = $this->ConfigurationName->export('ConfigurationName', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->CreationTime)) {
            $out = $this->CreationTime->export('CreationTime', $out, $level, '', $namespace, $rootNS);
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
        if (!is_null($this->InstanceID)) {
            $out = $this->InstanceID->export('InstanceID', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->LogDataRoot)) {
            $out = $this->LogDataRoot->export('LogDataRoot', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Notes)) {
            foreach ($this->Notes as $Notes) {
                $out = $Notes->export('Notes', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->RecoveryFile)) {
            $out = $this->RecoveryFile->export('RecoveryFile', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->SnapshotDataRoot)) {
            $out = $this->SnapshotDataRoot->export('SnapshotDataRoot', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->SuspendDataRoot)) {
            $out = $this->SuspendDataRoot->export('SuspendDataRoot', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->SwapFileDataRoot)) {
            $out = $this->SwapFileDataRoot->export('SwapFileDataRoot', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VirtualSystemIdentifier)) {
            $out = $this->VirtualSystemIdentifier->export('VirtualSystemIdentifier', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VirtualSystemType)) {
            $out = $this->VirtualSystemType->export('VirtualSystemType', $out, $level, '', $namespace, $rootNS);
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
            !is_null($this->AutomaticRecoveryAction) ||
            !is_null($this->AutomaticShutdownAction) ||
            !is_null($this->AutomaticStartupAction) ||
            !is_null($this->AutomaticStartupActionDelay) ||
            !is_null($this->AutomaticStartupActionSequenceNumber) ||
            !is_null($this->Caption) ||
            !is_null($this->ChangeableType) ||
            !is_null($this->ConfigurationDataRoot) ||
            !is_null($this->ConfigurationFile) ||
            !is_null($this->ConfigurationID) ||
            !is_null($this->ConfigurationName) ||
            !is_null($this->CreationTime) ||
            !is_null($this->Description) ||
            !is_null($this->ElementName) ||
            !is_null($this->Generation) ||
            !is_null($this->InstanceID) ||
            !is_null($this->LogDataRoot) ||
            !empty($this->Notes) ||
            !is_null($this->RecoveryFile) ||
            !is_null($this->SnapshotDataRoot) ||
            !is_null($this->SuspendDataRoot) ||
            !is_null($this->SwapFileDataRoot) ||
            !is_null($this->VirtualSystemIdentifier) ||
            !is_null($this->VirtualSystemType) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AutomaticRecoveryAction') {
            $obj = new VMware_VCloud_API_OVF_AutomaticRecoveryAction();
            $obj->build($child);
            $obj->set_tagName('AutomaticRecoveryAction');
            $this->setAutomaticRecoveryAction($obj);
            if (!empty($namespace)) {
                $this->namespace['AutomaticRecoveryAction'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AutomaticShutdownAction') {
            $obj = new VMware_VCloud_API_OVF_AutomaticShutdownAction();
            $obj->build($child);
            $obj->set_tagName('AutomaticShutdownAction');
            $this->setAutomaticShutdownAction($obj);
            if (!empty($namespace)) {
                $this->namespace['AutomaticShutdownAction'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AutomaticStartupAction') {
            $obj = new VMware_VCloud_API_OVF_AutomaticStartupAction();
            $obj->build($child);
            $obj->set_tagName('AutomaticStartupAction');
            $this->setAutomaticStartupAction($obj);
            if (!empty($namespace)) {
                $this->namespace['AutomaticStartupAction'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AutomaticStartupActionDelay') {
            $obj = new VMware_VCloud_API_OVF_cimDateTime();
            $obj->build($child);
            $obj->set_tagName('AutomaticStartupActionDelay');
            $this->setAutomaticStartupActionDelay($obj);
            if (!empty($namespace)) {
                $this->namespace['AutomaticStartupActionDelay'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AutomaticStartupActionSequenceNumber') {
            $obj = new VMware_VCloud_API_OVF_cimUnsignedShort();
            $obj->build($child);
            $obj->set_tagName('AutomaticStartupActionSequenceNumber');
            $this->setAutomaticStartupActionSequenceNumber($obj);
            if (!empty($namespace)) {
                $this->namespace['AutomaticStartupActionSequenceNumber'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ConfigurationDataRoot') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('ConfigurationDataRoot');
            $this->setConfigurationDataRoot($obj);
            if (!empty($namespace)) {
                $this->namespace['ConfigurationDataRoot'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ConfigurationFile') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('ConfigurationFile');
            $this->setConfigurationFile($obj);
            if (!empty($namespace)) {
                $this->namespace['ConfigurationFile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ConfigurationID') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('ConfigurationID');
            $this->setConfigurationID($obj);
            if (!empty($namespace)) {
                $this->namespace['ConfigurationID'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CreationTime') {
            $obj = new VMware_VCloud_API_OVF_cimDateTime();
            $obj->build($child);
            $obj->set_tagName('CreationTime');
            $this->setCreationTime($obj);
            if (!empty($namespace)) {
                $this->namespace['CreationTime'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstanceID') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('InstanceID');
            $this->setInstanceID($obj);
            if (!empty($namespace)) {
                $this->namespace['InstanceID'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LogDataRoot') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('LogDataRoot');
            $this->setLogDataRoot($obj);
            if (!empty($namespace)) {
                $this->namespace['LogDataRoot'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Notes') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Notes');
            array_push($this->Notes, $obj);
            if (!empty($namespace)) {
                $this->namespace['Notes'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RecoveryFile') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('RecoveryFile');
            $this->setRecoveryFile($obj);
            if (!empty($namespace)) {
                $this->namespace['RecoveryFile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SnapshotDataRoot') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('SnapshotDataRoot');
            $this->setSnapshotDataRoot($obj);
            if (!empty($namespace)) {
                $this->namespace['SnapshotDataRoot'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SuspendDataRoot') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('SuspendDataRoot');
            $this->setSuspendDataRoot($obj);
            if (!empty($namespace)) {
                $this->namespace['SuspendDataRoot'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SwapFileDataRoot') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('SwapFileDataRoot');
            $this->setSwapFileDataRoot($obj);
            if (!empty($namespace)) {
                $this->namespace['SwapFileDataRoot'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualSystemIdentifier') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('VirtualSystemIdentifier');
            $this->setVirtualSystemIdentifier($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualSystemIdentifier'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualSystemType') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('VirtualSystemType');
            $this->setVirtualSystemType($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualSystemType'] = $namespace;
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