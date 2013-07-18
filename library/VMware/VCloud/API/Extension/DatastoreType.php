<?php
class VMware_VCloud_API_Extension_DatastoreType extends VMware_VCloud_API_EntityType {
    protected $VimObjectRef = null;
    protected $Enabled = null;
    protected $Busy = null;
    protected $VAAIForFpEnabled = null;
    protected $ThresholdYellowGb = null;
    protected $ThresholdRedGb = null;
    protected $SystemMessages = null;
    protected $DatastoreFsType = null;
    protected $VcDisplayName = null;
    protected $MountHost = null;
    protected $MountDirectory = null;
    protected $TotalCapacityMb = null;
    protected $TotalCapacityGb = null;
    protected $UsedCapacityMb = null;
    protected $UsedCapacityGb = null;
    protected $UsedCapacityPercent = null;
    protected $ProvisionedSpaceMb = null;
    protected $ProvisionedSpaceGb = null;
    protected $RequestedStorageMb = null;
    protected $RequestedStorageGb = null;
    protected $vimPropertyPageUrl = null;
    protected $Members = null;
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
    * @param VMware_VCloud_API_Extension_VimObjectRefType $VimObjectRef - [optional]
    * @param boolean $Enabled - [optional] 
    * @param boolean $Busy - [optional] 
    * @param boolean $VAAIForFpEnabled - [optional] 
    * @param string $ThresholdYellowGb - [required] 
    * @param string $ThresholdRedGb - [required] 
    * @param string $SystemMessages - [optional] 
    * @param string $DatastoreFsType - [optional] 
    * @param string $VcDisplayName - [optional] 
    * @param string $MountHost - [optional] 
    * @param string $MountDirectory - [optional] 
    * @param float $TotalCapacityMb - [optional] 
    * @param float $TotalCapacityGb - [optional] 
    * @param float $UsedCapacityMb - [optional] 
    * @param float $UsedCapacityGb - [optional] 
    * @param float $UsedCapacityPercent - [optional] 
    * @param float $ProvisionedSpaceMb - [optional] 
    * @param float $ProvisionedSpaceGb - [optional] 
    * @param float $RequestedStorageMb - [optional] 
    * @param float $RequestedStorageGb - [optional] 
    * @param string $vimPropertyPageUrl - [optional] 
    * @param VMware_VCloud_API_Extension_VimObjectRefsType $Members - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $VimObjectRef=null, $Enabled=null, $Busy=null, $VAAIForFpEnabled=null, $ThresholdYellowGb=null, $ThresholdRedGb=null, $SystemMessages=null, $DatastoreFsType=null, $VcDisplayName=null, $MountHost=null, $MountDirectory=null, $TotalCapacityMb=null, $TotalCapacityGb=null, $UsedCapacityMb=null, $UsedCapacityGb=null, $UsedCapacityPercent=null, $ProvisionedSpaceMb=null, $ProvisionedSpaceGb=null, $RequestedStorageMb=null, $RequestedStorageGb=null, $vimPropertyPageUrl=null, $Members=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->VimObjectRef = $VimObjectRef;
        $this->Enabled = $Enabled;
        $this->Busy = $Busy;
        $this->VAAIForFpEnabled = $VAAIForFpEnabled;
        $this->ThresholdYellowGb = $ThresholdYellowGb;
        $this->ThresholdRedGb = $ThresholdRedGb;
        $this->SystemMessages = $SystemMessages;
        $this->DatastoreFsType = $DatastoreFsType;
        $this->VcDisplayName = $VcDisplayName;
        $this->MountHost = $MountHost;
        $this->MountDirectory = $MountDirectory;
        $this->TotalCapacityMb = $TotalCapacityMb;
        $this->TotalCapacityGb = $TotalCapacityGb;
        $this->UsedCapacityMb = $UsedCapacityMb;
        $this->UsedCapacityGb = $UsedCapacityGb;
        $this->UsedCapacityPercent = $UsedCapacityPercent;
        $this->ProvisionedSpaceMb = $ProvisionedSpaceMb;
        $this->ProvisionedSpaceGb = $ProvisionedSpaceGb;
        $this->RequestedStorageMb = $RequestedStorageMb;
        $this->RequestedStorageGb = $RequestedStorageGb;
        $this->vimPropertyPageUrl = $vimPropertyPageUrl;
        $this->Members = $Members;
        $this->tagName = 'Datastore';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVimObjectRef() {
        return $this->VimObjectRef;
    }
    public function setVimObjectRef($VimObjectRef) { 
        $this->VimObjectRef = $VimObjectRef;
    }
    public function getEnabled() {
        return $this->Enabled;
    }
    public function setEnabled($Enabled) { 
        $this->Enabled = $Enabled;
    }
    public function getBusy() {
        return $this->Busy;
    }
    public function setBusy($Busy) { 
        $this->Busy = $Busy;
    }
    public function getVAAIForFpEnabled() {
        return $this->VAAIForFpEnabled;
    }
    public function setVAAIForFpEnabled($VAAIForFpEnabled) { 
        $this->VAAIForFpEnabled = $VAAIForFpEnabled;
    }
    public function getThresholdYellowGb() {
        return $this->ThresholdYellowGb;
    }
    public function setThresholdYellowGb($ThresholdYellowGb) { 
        $this->ThresholdYellowGb = $ThresholdYellowGb;
    }
    public function getThresholdRedGb() {
        return $this->ThresholdRedGb;
    }
    public function setThresholdRedGb($ThresholdRedGb) { 
        $this->ThresholdRedGb = $ThresholdRedGb;
    }
    public function getSystemMessages() {
        return $this->SystemMessages;
    }
    public function setSystemMessages($SystemMessages) { 
        $this->SystemMessages = $SystemMessages;
    }
    public function getDatastoreFsType() {
        return $this->DatastoreFsType;
    }
    public function setDatastoreFsType($DatastoreFsType) { 
        $this->DatastoreFsType = $DatastoreFsType;
    }
    public function getVcDisplayName() {
        return $this->VcDisplayName;
    }
    public function setVcDisplayName($VcDisplayName) { 
        $this->VcDisplayName = $VcDisplayName;
    }
    public function getMountHost() {
        return $this->MountHost;
    }
    public function setMountHost($MountHost) { 
        $this->MountHost = $MountHost;
    }
    public function getMountDirectory() {
        return $this->MountDirectory;
    }
    public function setMountDirectory($MountDirectory) { 
        $this->MountDirectory = $MountDirectory;
    }
    public function getTotalCapacityMb() {
        return $this->TotalCapacityMb;
    }
    public function setTotalCapacityMb($TotalCapacityMb) { 
        $this->TotalCapacityMb = $TotalCapacityMb;
    }
    public function getTotalCapacityGb() {
        return $this->TotalCapacityGb;
    }
    public function setTotalCapacityGb($TotalCapacityGb) { 
        $this->TotalCapacityGb = $TotalCapacityGb;
    }
    public function getUsedCapacityMb() {
        return $this->UsedCapacityMb;
    }
    public function setUsedCapacityMb($UsedCapacityMb) { 
        $this->UsedCapacityMb = $UsedCapacityMb;
    }
    public function getUsedCapacityGb() {
        return $this->UsedCapacityGb;
    }
    public function setUsedCapacityGb($UsedCapacityGb) { 
        $this->UsedCapacityGb = $UsedCapacityGb;
    }
    public function getUsedCapacityPercent() {
        return $this->UsedCapacityPercent;
    }
    public function setUsedCapacityPercent($UsedCapacityPercent) { 
        $this->UsedCapacityPercent = $UsedCapacityPercent;
    }
    public function getProvisionedSpaceMb() {
        return $this->ProvisionedSpaceMb;
    }
    public function setProvisionedSpaceMb($ProvisionedSpaceMb) { 
        $this->ProvisionedSpaceMb = $ProvisionedSpaceMb;
    }
    public function getProvisionedSpaceGb() {
        return $this->ProvisionedSpaceGb;
    }
    public function setProvisionedSpaceGb($ProvisionedSpaceGb) { 
        $this->ProvisionedSpaceGb = $ProvisionedSpaceGb;
    }
    public function getRequestedStorageMb() {
        return $this->RequestedStorageMb;
    }
    public function setRequestedStorageMb($RequestedStorageMb) { 
        $this->RequestedStorageMb = $RequestedStorageMb;
    }
    public function getRequestedStorageGb() {
        return $this->RequestedStorageGb;
    }
    public function setRequestedStorageGb($RequestedStorageGb) { 
        $this->RequestedStorageGb = $RequestedStorageGb;
    }
    public function get_vimPropertyPageUrl() {
        return $this->vimPropertyPageUrl;
    }
    public function set_vimPropertyPageUrl($vimPropertyPageUrl) { 
        $this->vimPropertyPageUrl = $vimPropertyPageUrl;
    }
    public function getMembers() {
        return $this->Members;
    }
    public function setMembers($Members) { 
        $this->Members = $Members;
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
        if (!is_null($this->VimObjectRef)) {
            $out = $this->VimObjectRef->export('VimObjectRef', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Enabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Enabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Enabled>" . VMware_VCloud_API_Helper::format_boolean($this->Enabled, $input_name='Enabled') . "</" . $ns . "Enabled>\n");
        }
        if (!is_null($this->Busy)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Busy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Busy>" . VMware_VCloud_API_Helper::format_boolean($this->Busy, $input_name='Busy') . "</" . $ns . "Busy>\n");
        }
        if (!is_null($this->VAAIForFpEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VAAIForFpEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VAAIForFpEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->VAAIForFpEnabled, $input_name='VAAIForFpEnabled') . "</" . $ns . "VAAIForFpEnabled>\n");
        }
        if (!is_null($this->ThresholdYellowGb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ThresholdYellowGb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ThresholdYellowGb>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ThresholdYellowGb, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ThresholdYellowGb')) . "</" . $ns . "ThresholdYellowGb>\n");
        }
        if (!is_null($this->ThresholdRedGb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ThresholdRedGb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ThresholdRedGb>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ThresholdRedGb, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ThresholdRedGb')) . "</" . $ns . "ThresholdRedGb>\n");
        }
        if (!is_null($this->SystemMessages)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SystemMessages', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SystemMessages>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SystemMessages, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SystemMessages')) . "</" . $ns . "SystemMessages>\n");
        }
        if (!is_null($this->DatastoreFsType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DatastoreFsType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DatastoreFsType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DatastoreFsType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DatastoreFsType')) . "</" . $ns . "DatastoreFsType>\n");
        }
        if (!is_null($this->VcDisplayName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcDisplayName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcDisplayName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcDisplayName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcDisplayName')) . "</" . $ns . "VcDisplayName>\n");
        }
        if (!is_null($this->MountHost)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MountHost', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MountHost>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MountHost, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MountHost')) . "</" . $ns . "MountHost>\n");
        }
        if (!is_null($this->MountDirectory)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MountDirectory', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MountDirectory>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MountDirectory, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MountDirectory')) . "</" . $ns . "MountDirectory>\n");
        }
        if (!is_null($this->TotalCapacityMb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'TotalCapacityMb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "TotalCapacityMb>" . VMware_VCloud_API_Helper::format_double($this->TotalCapacityMb, $input_name='TotalCapacityMb') . "</" . $ns . "TotalCapacityMb>\n");
        }
        if (!is_null($this->TotalCapacityGb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'TotalCapacityGb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "TotalCapacityGb>" . VMware_VCloud_API_Helper::format_double($this->TotalCapacityGb, $input_name='TotalCapacityGb') . "</" . $ns . "TotalCapacityGb>\n");
        }
        if (!is_null($this->UsedCapacityMb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UsedCapacityMb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UsedCapacityMb>" . VMware_VCloud_API_Helper::format_double($this->UsedCapacityMb, $input_name='UsedCapacityMb') . "</" . $ns . "UsedCapacityMb>\n");
        }
        if (!is_null($this->UsedCapacityGb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UsedCapacityGb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UsedCapacityGb>" . VMware_VCloud_API_Helper::format_double($this->UsedCapacityGb, $input_name='UsedCapacityGb') . "</" . $ns . "UsedCapacityGb>\n");
        }
        if (!is_null($this->UsedCapacityPercent)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UsedCapacityPercent', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UsedCapacityPercent>" . VMware_VCloud_API_Helper::format_double($this->UsedCapacityPercent, $input_name='UsedCapacityPercent') . "</" . $ns . "UsedCapacityPercent>\n");
        }
        if (!is_null($this->ProvisionedSpaceMb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ProvisionedSpaceMb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ProvisionedSpaceMb>" . VMware_VCloud_API_Helper::format_double($this->ProvisionedSpaceMb, $input_name='ProvisionedSpaceMb') . "</" . $ns . "ProvisionedSpaceMb>\n");
        }
        if (!is_null($this->ProvisionedSpaceGb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ProvisionedSpaceGb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ProvisionedSpaceGb>" . VMware_VCloud_API_Helper::format_double($this->ProvisionedSpaceGb, $input_name='ProvisionedSpaceGb') . "</" . $ns . "ProvisionedSpaceGb>\n");
        }
        if (!is_null($this->RequestedStorageMb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RequestedStorageMb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RequestedStorageMb>" . VMware_VCloud_API_Helper::format_double($this->RequestedStorageMb, $input_name='RequestedStorageMb') . "</" . $ns . "RequestedStorageMb>\n");
        }
        if (!is_null($this->RequestedStorageGb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RequestedStorageGb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RequestedStorageGb>" . VMware_VCloud_API_Helper::format_double($this->RequestedStorageGb, $input_name='RequestedStorageGb') . "</" . $ns . "RequestedStorageGb>\n");
        }
        if (!is_null($this->vimPropertyPageUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'vimPropertyPageUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "vimPropertyPageUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vimPropertyPageUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vimPropertyPageUrl')) . "</" . $ns . "vimPropertyPageUrl>\n");
        }
        if (!is_null($this->Members)) {
            $out = $this->Members->export('Members', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VimObjectRef) ||
            !is_null($this->Enabled) ||
            !is_null($this->Busy) ||
            !is_null($this->VAAIForFpEnabled) ||
            !is_null($this->ThresholdYellowGb) ||
            !is_null($this->ThresholdRedGb) ||
            !is_null($this->SystemMessages) ||
            !is_null($this->DatastoreFsType) ||
            !is_null($this->VcDisplayName) ||
            !is_null($this->MountHost) ||
            !is_null($this->MountDirectory) ||
            !is_null($this->TotalCapacityMb) ||
            !is_null($this->TotalCapacityGb) ||
            !is_null($this->UsedCapacityMb) ||
            !is_null($this->UsedCapacityGb) ||
            !is_null($this->UsedCapacityPercent) ||
            !is_null($this->ProvisionedSpaceMb) ||
            !is_null($this->ProvisionedSpaceGb) ||
            !is_null($this->RequestedStorageMb) ||
            !is_null($this->RequestedStorageGb) ||
            !is_null($this->vimPropertyPageUrl) ||
            !is_null($this->Members) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimObjectRef') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefType();
            $obj->build($child);
            $obj->set_tagName('VimObjectRef');
            $this->setVimObjectRef($obj);
            if (!empty($namespace)) {
                $this->namespace['VimObjectRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Enabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Enabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['Enabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Busy') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Busy = $sval;
            if (!empty($namespace)) {
                $this->namespace['Busy'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAAIForFpEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->VAAIForFpEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['VAAIForFpEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ThresholdYellowGb') {
            $sval = $child->nodeValue;
            $this->ThresholdYellowGb = $sval;
            if (!empty($namespace)) {
                $this->namespace['ThresholdYellowGb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ThresholdRedGb') {
            $sval = $child->nodeValue;
            $this->ThresholdRedGb = $sval;
            if (!empty($namespace)) {
                $this->namespace['ThresholdRedGb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SystemMessages') {
            $sval = $child->nodeValue;
            $this->SystemMessages = $sval;
            if (!empty($namespace)) {
                $this->namespace['SystemMessages'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DatastoreFsType') {
            $sval = $child->nodeValue;
            $this->DatastoreFsType = $sval;
            if (!empty($namespace)) {
                $this->namespace['DatastoreFsType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcDisplayName') {
            $sval = $child->nodeValue;
            $this->VcDisplayName = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcDisplayName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MountHost') {
            $sval = $child->nodeValue;
            $this->MountHost = $sval;
            if (!empty($namespace)) {
                $this->namespace['MountHost'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MountDirectory') {
            $sval = $child->nodeValue;
            $this->MountDirectory = $sval;
            if (!empty($namespace)) {
                $this->namespace['MountDirectory'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TotalCapacityMb') {
            $sval = $child->nodeValue;
            $this->TotalCapacityMb = $sval;
            if (!empty($namespace)) {
                $this->namespace['TotalCapacityMb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TotalCapacityGb') {
            $sval = $child->nodeValue;
            $this->TotalCapacityGb = $sval;
            if (!empty($namespace)) {
                $this->namespace['TotalCapacityGb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UsedCapacityMb') {
            $sval = $child->nodeValue;
            $this->UsedCapacityMb = $sval;
            if (!empty($namespace)) {
                $this->namespace['UsedCapacityMb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UsedCapacityGb') {
            $sval = $child->nodeValue;
            $this->UsedCapacityGb = $sval;
            if (!empty($namespace)) {
                $this->namespace['UsedCapacityGb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UsedCapacityPercent') {
            $sval = $child->nodeValue;
            $this->UsedCapacityPercent = $sval;
            if (!empty($namespace)) {
                $this->namespace['UsedCapacityPercent'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProvisionedSpaceMb') {
            $sval = $child->nodeValue;
            $this->ProvisionedSpaceMb = $sval;
            if (!empty($namespace)) {
                $this->namespace['ProvisionedSpaceMb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProvisionedSpaceGb') {
            $sval = $child->nodeValue;
            $this->ProvisionedSpaceGb = $sval;
            if (!empty($namespace)) {
                $this->namespace['ProvisionedSpaceGb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RequestedStorageMb') {
            $sval = $child->nodeValue;
            $this->RequestedStorageMb = $sval;
            if (!empty($namespace)) {
                $this->namespace['RequestedStorageMb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RequestedStorageGb') {
            $sval = $child->nodeValue;
            $this->RequestedStorageGb = $sval;
            if (!empty($namespace)) {
                $this->namespace['RequestedStorageGb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'vimPropertyPageUrl') {
            $sval = $child->nodeValue;
            $this->vimPropertyPageUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['vimPropertyPageUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Members') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefsType();
            $obj->build($child);
            $obj->set_tagName('Members');
            $this->setMembers($obj);
            if (!empty($namespace)) {
                $this->namespace['Members'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}