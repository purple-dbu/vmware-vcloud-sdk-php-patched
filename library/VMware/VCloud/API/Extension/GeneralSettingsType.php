<?php
class VMware_VCloud_API_Extension_GeneralSettingsType extends VMware_VCloud_API_ResourceType {
    protected $AbsoluteSessionTimeoutMinutes = null;
    protected $ActivityLogDisplayDays = null;
    protected $ActivityLogKeepDays = null;
    protected $AllowOverlappingExtNets = null;
    protected $ChargebackEventsKeepDays = null;
    protected $ChargebackTablesCleanupJobTimeInSeconds = null;
    protected $ConsoleProxyExternalAddress = null;
    protected $HostCheckDelayInSeconds = null;
    protected $HostCheckTimeoutSeconds = null;
    protected $InstallationId = null;
    protected $IpReservationTimeoutSeconds = null;
    protected $SyslogServerSettings = null;
    protected $LoginNameOnly = null;
    protected $PrePopDefaultName = null;
    protected $QuarantineEnabled = null;
    protected $QuarantineResponseTimeoutSeconds = null;
    protected $RestApiBaseUri = null;
    protected $SessionTimeoutMinutes = null;
    protected $ShowStackTraces = null;
    protected $SyncStartDate = null;
    protected $SyncIntervalInHours = null;
    protected $SystemExternalAddress = null;
    protected $TransferSessionTimeoutSeconds = null;
    protected $VerifyVcCertificates = null;
    protected $VcTruststorePassword = null;
    protected $VcTruststoreContents = null;
    protected $VcTruststoreType = null;
    protected $VmrcVersion = null;
    protected $VerifyVsmCertificates = null;
    protected $ElasticAllocationPool = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param int $AbsoluteSessionTimeoutMinutes - [required] 
    * @param int $ActivityLogDisplayDays - [required] 
    * @param int $ActivityLogKeepDays - [required] 
    * @param boolean $AllowOverlappingExtNets - [required] 
    * @param int $ChargebackEventsKeepDays - [required] 
    * @param int $ChargebackTablesCleanupJobTimeInSeconds - [required] 
    * @param string $ConsoleProxyExternalAddress - [optional] 
    * @param int $HostCheckDelayInSeconds - [required] 
    * @param int $HostCheckTimeoutSeconds - [required] 
    * @param int $InstallationId - [optional] 
    * @param int $IpReservationTimeoutSeconds - [required] 
    * @param VMware_VCloud_API_SyslogServerSettingsType $SyslogServerSettings - [required]
    * @param boolean $LoginNameOnly - [required] 
    * @param boolean $PrePopDefaultName - [required] 
    * @param boolean $QuarantineEnabled - [required] 
    * @param int $QuarantineResponseTimeoutSeconds - [required] 
    * @param string $RestApiBaseUri - [optional] 
    * @param int $SessionTimeoutMinutes - [required] 
    * @param boolean $ShowStackTraces - [required] 
    * @param string $SyncStartDate - [required] 
    * @param int $SyncIntervalInHours - [required] 
    * @param string $SystemExternalAddress - [optional] 
    * @param int $TransferSessionTimeoutSeconds - [required] 
    * @param boolean $VerifyVcCertificates - [required] 
    * @param string $VcTruststorePassword - [optional] 
    * @param string $VcTruststoreContents - [optional] 
    * @param string $VcTruststoreType - [required] 
    * @param string $VmrcVersion - [optional] 
    * @param boolean $VerifyVsmCertificates - [optional] 
    * @param boolean $ElasticAllocationPool - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $AbsoluteSessionTimeoutMinutes=null, $ActivityLogDisplayDays=null, $ActivityLogKeepDays=null, $AllowOverlappingExtNets=null, $ChargebackEventsKeepDays=null, $ChargebackTablesCleanupJobTimeInSeconds=null, $ConsoleProxyExternalAddress=null, $HostCheckDelayInSeconds=null, $HostCheckTimeoutSeconds=null, $InstallationId=null, $IpReservationTimeoutSeconds=null, $SyslogServerSettings=null, $LoginNameOnly=null, $PrePopDefaultName=null, $QuarantineEnabled=null, $QuarantineResponseTimeoutSeconds=null, $RestApiBaseUri=null, $SessionTimeoutMinutes=null, $ShowStackTraces=null, $SyncStartDate=null, $SyncIntervalInHours=null, $SystemExternalAddress=null, $TransferSessionTimeoutSeconds=null, $VerifyVcCertificates=null, $VcTruststorePassword=null, $VcTruststoreContents=null, $VcTruststoreType=null, $VmrcVersion=null, $VerifyVsmCertificates=null, $ElasticAllocationPool=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->AbsoluteSessionTimeoutMinutes = $AbsoluteSessionTimeoutMinutes;
        $this->ActivityLogDisplayDays = $ActivityLogDisplayDays;
        $this->ActivityLogKeepDays = $ActivityLogKeepDays;
        $this->AllowOverlappingExtNets = $AllowOverlappingExtNets;
        $this->ChargebackEventsKeepDays = $ChargebackEventsKeepDays;
        $this->ChargebackTablesCleanupJobTimeInSeconds = $ChargebackTablesCleanupJobTimeInSeconds;
        $this->ConsoleProxyExternalAddress = $ConsoleProxyExternalAddress;
        $this->HostCheckDelayInSeconds = $HostCheckDelayInSeconds;
        $this->HostCheckTimeoutSeconds = $HostCheckTimeoutSeconds;
        $this->InstallationId = $InstallationId;
        $this->IpReservationTimeoutSeconds = $IpReservationTimeoutSeconds;
        $this->SyslogServerSettings = $SyslogServerSettings;
        $this->LoginNameOnly = $LoginNameOnly;
        $this->PrePopDefaultName = $PrePopDefaultName;
        $this->QuarantineEnabled = $QuarantineEnabled;
        $this->QuarantineResponseTimeoutSeconds = $QuarantineResponseTimeoutSeconds;
        $this->RestApiBaseUri = $RestApiBaseUri;
        $this->SessionTimeoutMinutes = $SessionTimeoutMinutes;
        $this->ShowStackTraces = $ShowStackTraces;
        $this->SyncStartDate = $SyncStartDate;
        $this->SyncIntervalInHours = $SyncIntervalInHours;
        $this->SystemExternalAddress = $SystemExternalAddress;
        $this->TransferSessionTimeoutSeconds = $TransferSessionTimeoutSeconds;
        $this->VerifyVcCertificates = $VerifyVcCertificates;
        $this->VcTruststorePassword = $VcTruststorePassword;
        $this->VcTruststoreContents = $VcTruststoreContents;
        $this->VcTruststoreType = $VcTruststoreType;
        $this->VmrcVersion = $VmrcVersion;
        $this->VerifyVsmCertificates = $VerifyVsmCertificates;
        $this->ElasticAllocationPool = $ElasticAllocationPool;
        $this->tagName = 'GeneralSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAbsoluteSessionTimeoutMinutes() {
        return $this->AbsoluteSessionTimeoutMinutes;
    }
    public function setAbsoluteSessionTimeoutMinutes($AbsoluteSessionTimeoutMinutes) { 
        $this->AbsoluteSessionTimeoutMinutes = $AbsoluteSessionTimeoutMinutes;
    }
    public function getActivityLogDisplayDays() {
        return $this->ActivityLogDisplayDays;
    }
    public function setActivityLogDisplayDays($ActivityLogDisplayDays) { 
        $this->ActivityLogDisplayDays = $ActivityLogDisplayDays;
    }
    public function getActivityLogKeepDays() {
        return $this->ActivityLogKeepDays;
    }
    public function setActivityLogKeepDays($ActivityLogKeepDays) { 
        $this->ActivityLogKeepDays = $ActivityLogKeepDays;
    }
    public function getAllowOverlappingExtNets() {
        return $this->AllowOverlappingExtNets;
    }
    public function setAllowOverlappingExtNets($AllowOverlappingExtNets) { 
        $this->AllowOverlappingExtNets = $AllowOverlappingExtNets;
    }
    public function getChargebackEventsKeepDays() {
        return $this->ChargebackEventsKeepDays;
    }
    public function setChargebackEventsKeepDays($ChargebackEventsKeepDays) { 
        $this->ChargebackEventsKeepDays = $ChargebackEventsKeepDays;
    }
    public function getChargebackTablesCleanupJobTimeInSeconds() {
        return $this->ChargebackTablesCleanupJobTimeInSeconds;
    }
    public function setChargebackTablesCleanupJobTimeInSeconds($ChargebackTablesCleanupJobTimeInSeconds) { 
        $this->ChargebackTablesCleanupJobTimeInSeconds = $ChargebackTablesCleanupJobTimeInSeconds;
    }
    public function getConsoleProxyExternalAddress() {
        return $this->ConsoleProxyExternalAddress;
    }
    public function setConsoleProxyExternalAddress($ConsoleProxyExternalAddress) { 
        $this->ConsoleProxyExternalAddress = $ConsoleProxyExternalAddress;
    }
    public function getHostCheckDelayInSeconds() {
        return $this->HostCheckDelayInSeconds;
    }
    public function setHostCheckDelayInSeconds($HostCheckDelayInSeconds) { 
        $this->HostCheckDelayInSeconds = $HostCheckDelayInSeconds;
    }
    public function getHostCheckTimeoutSeconds() {
        return $this->HostCheckTimeoutSeconds;
    }
    public function setHostCheckTimeoutSeconds($HostCheckTimeoutSeconds) { 
        $this->HostCheckTimeoutSeconds = $HostCheckTimeoutSeconds;
    }
    public function getInstallationId() {
        return $this->InstallationId;
    }
    public function setInstallationId($InstallationId) { 
        $this->InstallationId = $InstallationId;
    }
    public function getIpReservationTimeoutSeconds() {
        return $this->IpReservationTimeoutSeconds;
    }
    public function setIpReservationTimeoutSeconds($IpReservationTimeoutSeconds) { 
        $this->IpReservationTimeoutSeconds = $IpReservationTimeoutSeconds;
    }
    public function getSyslogServerSettings() {
        return $this->SyslogServerSettings;
    }
    public function setSyslogServerSettings($SyslogServerSettings) { 
        $this->SyslogServerSettings = $SyslogServerSettings;
    }
    public function getLoginNameOnly() {
        return $this->LoginNameOnly;
    }
    public function setLoginNameOnly($LoginNameOnly) { 
        $this->LoginNameOnly = $LoginNameOnly;
    }
    public function getPrePopDefaultName() {
        return $this->PrePopDefaultName;
    }
    public function setPrePopDefaultName($PrePopDefaultName) { 
        $this->PrePopDefaultName = $PrePopDefaultName;
    }
    public function getQuarantineEnabled() {
        return $this->QuarantineEnabled;
    }
    public function setQuarantineEnabled($QuarantineEnabled) { 
        $this->QuarantineEnabled = $QuarantineEnabled;
    }
    public function getQuarantineResponseTimeoutSeconds() {
        return $this->QuarantineResponseTimeoutSeconds;
    }
    public function setQuarantineResponseTimeoutSeconds($QuarantineResponseTimeoutSeconds) { 
        $this->QuarantineResponseTimeoutSeconds = $QuarantineResponseTimeoutSeconds;
    }
    public function getRestApiBaseUri() {
        return $this->RestApiBaseUri;
    }
    public function setRestApiBaseUri($RestApiBaseUri) { 
        $this->RestApiBaseUri = $RestApiBaseUri;
    }
    public function getSessionTimeoutMinutes() {
        return $this->SessionTimeoutMinutes;
    }
    public function setSessionTimeoutMinutes($SessionTimeoutMinutes) { 
        $this->SessionTimeoutMinutes = $SessionTimeoutMinutes;
    }
    public function getShowStackTraces() {
        return $this->ShowStackTraces;
    }
    public function setShowStackTraces($ShowStackTraces) { 
        $this->ShowStackTraces = $ShowStackTraces;
    }
    public function getSyncStartDate() {
        return $this->SyncStartDate;
    }
    public function setSyncStartDate($SyncStartDate) { 
        $this->SyncStartDate = $SyncStartDate;
    }
    public function getSyncIntervalInHours() {
        return $this->SyncIntervalInHours;
    }
    public function setSyncIntervalInHours($SyncIntervalInHours) { 
        $this->SyncIntervalInHours = $SyncIntervalInHours;
    }
    public function getSystemExternalAddress() {
        return $this->SystemExternalAddress;
    }
    public function setSystemExternalAddress($SystemExternalAddress) { 
        $this->SystemExternalAddress = $SystemExternalAddress;
    }
    public function getTransferSessionTimeoutSeconds() {
        return $this->TransferSessionTimeoutSeconds;
    }
    public function setTransferSessionTimeoutSeconds($TransferSessionTimeoutSeconds) { 
        $this->TransferSessionTimeoutSeconds = $TransferSessionTimeoutSeconds;
    }
    public function getVerifyVcCertificates() {
        return $this->VerifyVcCertificates;
    }
    public function setVerifyVcCertificates($VerifyVcCertificates) { 
        $this->VerifyVcCertificates = $VerifyVcCertificates;
    }
    public function getVcTruststorePassword() {
        return $this->VcTruststorePassword;
    }
    public function setVcTruststorePassword($VcTruststorePassword) { 
        $this->VcTruststorePassword = $VcTruststorePassword;
    }
    public function getVcTruststoreContents() {
        return $this->VcTruststoreContents;
    }
    public function setVcTruststoreContents($VcTruststoreContents) { 
        $this->VcTruststoreContents = $VcTruststoreContents;
    }
    public function getVcTruststoreType() {
        return $this->VcTruststoreType;
    }
    public function setVcTruststoreType($VcTruststoreType) { 
        $this->VcTruststoreType = $VcTruststoreType;
    }
    public function getVmrcVersion() {
        return $this->VmrcVersion;
    }
    public function setVmrcVersion($VmrcVersion) { 
        $this->VmrcVersion = $VmrcVersion;
    }
    public function getVerifyVsmCertificates() {
        return $this->VerifyVsmCertificates;
    }
    public function setVerifyVsmCertificates($VerifyVsmCertificates) { 
        $this->VerifyVsmCertificates = $VerifyVsmCertificates;
    }
    public function getElasticAllocationPool() {
        return $this->ElasticAllocationPool;
    }
    public function setElasticAllocationPool($ElasticAllocationPool) { 
        $this->ElasticAllocationPool = $ElasticAllocationPool;
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
        if (!is_null($this->AbsoluteSessionTimeoutMinutes)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AbsoluteSessionTimeoutMinutes', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AbsoluteSessionTimeoutMinutes>" . VMware_VCloud_API_Helper::format_integer($this->AbsoluteSessionTimeoutMinutes, $input_name='AbsoluteSessionTimeoutMinutes') . "</" . $ns . "AbsoluteSessionTimeoutMinutes>\n");
        }
        if (!is_null($this->ActivityLogDisplayDays)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ActivityLogDisplayDays', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ActivityLogDisplayDays>" . VMware_VCloud_API_Helper::format_integer($this->ActivityLogDisplayDays, $input_name='ActivityLogDisplayDays') . "</" . $ns . "ActivityLogDisplayDays>\n");
        }
        if (!is_null($this->ActivityLogKeepDays)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ActivityLogKeepDays', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ActivityLogKeepDays>" . VMware_VCloud_API_Helper::format_integer($this->ActivityLogKeepDays, $input_name='ActivityLogKeepDays') . "</" . $ns . "ActivityLogKeepDays>\n");
        }
        if (!is_null($this->AllowOverlappingExtNets)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AllowOverlappingExtNets', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AllowOverlappingExtNets>" . VMware_VCloud_API_Helper::format_boolean($this->AllowOverlappingExtNets, $input_name='AllowOverlappingExtNets') . "</" . $ns . "AllowOverlappingExtNets>\n");
     }
        if (!is_null($this->ChargebackEventsKeepDays)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ChargebackEventsKeepDays', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ChargebackEventsKeepDays>" . VMware_VCloud_API_Helper::format_integer($this->ChargebackEventsKeepDays, $input_name='ChargebackEventsKeepDays') . "</" . $ns . "ChargebackEventsKeepDays>\n");
        }
        if (!is_null($this->ChargebackTablesCleanupJobTimeInSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ChargebackTablesCleanupJobTimeInSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ChargebackTablesCleanupJobTimeInSeconds>" . VMware_VCloud_API_Helper::format_integer($this->ChargebackTablesCleanupJobTimeInSeconds, $input_name='ChargebackTablesCleanupJobTimeInSeconds') . "</" . $ns . "ChargebackTablesCleanupJobTimeInSeconds>\n");
        }
        if (!is_null($this->ConsoleProxyExternalAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ConsoleProxyExternalAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ConsoleProxyExternalAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ConsoleProxyExternalAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ConsoleProxyExternalAddress')) . "</" . $ns . "ConsoleProxyExternalAddress>\n");
        }
        if (!is_null($this->HostCheckDelayInSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HostCheckDelayInSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HostCheckDelayInSeconds>" . VMware_VCloud_API_Helper::format_integer($this->HostCheckDelayInSeconds, $input_name='HostCheckDelayInSeconds') . "</" . $ns . "HostCheckDelayInSeconds>\n");
        }
        if (!is_null($this->HostCheckTimeoutSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HostCheckTimeoutSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HostCheckTimeoutSeconds>" . VMware_VCloud_API_Helper::format_integer($this->HostCheckTimeoutSeconds, $input_name='HostCheckTimeoutSeconds') . "</" . $ns . "HostCheckTimeoutSeconds>\n");
        }
        if (!is_null($this->InstallationId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'InstallationId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "InstallationId>" . VMware_VCloud_API_Helper::format_integer($this->InstallationId, $input_name='InstallationId') . "</" . $ns . "InstallationId>\n");
        }
        if (!is_null($this->IpReservationTimeoutSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IpReservationTimeoutSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IpReservationTimeoutSeconds>" . VMware_VCloud_API_Helper::format_integer($this->IpReservationTimeoutSeconds, $input_name='IpReservationTimeoutSeconds') . "</" . $ns . "IpReservationTimeoutSeconds>\n");
        }
        if (!is_null($this->SyslogServerSettings)) {
            $out = $this->SyslogServerSettings->export('SyslogServerSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->LoginNameOnly)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LoginNameOnly', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LoginNameOnly>" . VMware_VCloud_API_Helper::format_boolean($this->LoginNameOnly, $input_name='LoginNameOnly') . "</" . $ns . "LoginNameOnly>\n");
     }
        if (!is_null($this->PrePopDefaultName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PrePopDefaultName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PrePopDefaultName>" . VMware_VCloud_API_Helper::format_boolean($this->PrePopDefaultName, $input_name='PrePopDefaultName') . "</" . $ns . "PrePopDefaultName>\n");
     }
        if (!is_null($this->QuarantineEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'QuarantineEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "QuarantineEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->QuarantineEnabled, $input_name='QuarantineEnabled') . "</" . $ns . "QuarantineEnabled>\n");
     }
        if (!is_null($this->QuarantineResponseTimeoutSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'QuarantineResponseTimeoutSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "QuarantineResponseTimeoutSeconds>" . VMware_VCloud_API_Helper::format_integer($this->QuarantineResponseTimeoutSeconds, $input_name='QuarantineResponseTimeoutSeconds') . "</" . $ns . "QuarantineResponseTimeoutSeconds>\n");
        }
        if (!is_null($this->RestApiBaseUri)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RestApiBaseUri', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RestApiBaseUri>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->RestApiBaseUri, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='RestApiBaseUri')) . "</" . $ns . "RestApiBaseUri>\n");
        }
        if (!is_null($this->SessionTimeoutMinutes)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SessionTimeoutMinutes', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SessionTimeoutMinutes>" . VMware_VCloud_API_Helper::format_integer($this->SessionTimeoutMinutes, $input_name='SessionTimeoutMinutes') . "</" . $ns . "SessionTimeoutMinutes>\n");
        }
        if (!is_null($this->ShowStackTraces)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ShowStackTraces', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ShowStackTraces>" . VMware_VCloud_API_Helper::format_boolean($this->ShowStackTraces, $input_name='ShowStackTraces') . "</" . $ns . "ShowStackTraces>\n");
     }
        if (!is_null($this->SyncStartDate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SyncStartDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SyncStartDate>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SyncStartDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SyncStartDate')) . "</" . $ns . "SyncStartDate>\n");
        }
        if (!is_null($this->SyncIntervalInHours)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SyncIntervalInHours', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SyncIntervalInHours>" . VMware_VCloud_API_Helper::format_integer($this->SyncIntervalInHours, $input_name='SyncIntervalInHours') . "</" . $ns . "SyncIntervalInHours>\n");
        }
        if (!is_null($this->SystemExternalAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SystemExternalAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SystemExternalAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SystemExternalAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SystemExternalAddress')) . "</" . $ns . "SystemExternalAddress>\n");
        }
        if (!is_null($this->TransferSessionTimeoutSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'TransferSessionTimeoutSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "TransferSessionTimeoutSeconds>" . VMware_VCloud_API_Helper::format_integer($this->TransferSessionTimeoutSeconds, $input_name='TransferSessionTimeoutSeconds') . "</" . $ns . "TransferSessionTimeoutSeconds>\n");
        }
        if (!is_null($this->VerifyVcCertificates)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VerifyVcCertificates', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VerifyVcCertificates>" . VMware_VCloud_API_Helper::format_boolean($this->VerifyVcCertificates, $input_name='VerifyVcCertificates') . "</" . $ns . "VerifyVcCertificates>\n");
     }
        if (!is_null($this->VcTruststorePassword)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcTruststorePassword', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcTruststorePassword>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcTruststorePassword, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcTruststorePassword')) . "</" . $ns . "VcTruststorePassword>\n");
        }
        if (!is_null($this->VcTruststoreContents)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcTruststoreContents', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcTruststoreContents>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcTruststoreContents, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcTruststoreContents')) . "</" . $ns . "VcTruststoreContents>\n");
        }
        if (!is_null($this->VcTruststoreType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VcTruststoreType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VcTruststoreType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VcTruststoreType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VcTruststoreType')) . "</" . $ns . "VcTruststoreType>\n");
        }
        if (!is_null($this->VmrcVersion)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VmrcVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VmrcVersion>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VmrcVersion, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VmrcVersion')) . "</" . $ns . "VmrcVersion>\n");
        }
        if (!is_null($this->VerifyVsmCertificates)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VerifyVsmCertificates', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VerifyVsmCertificates>" . VMware_VCloud_API_Helper::format_boolean($this->VerifyVsmCertificates, $input_name='VerifyVsmCertificates') . "</" . $ns . "VerifyVsmCertificates>\n");
        }
        if (!is_null($this->ElasticAllocationPool)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ElasticAllocationPool', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ElasticAllocationPool>" . VMware_VCloud_API_Helper::format_boolean($this->ElasticAllocationPool, $input_name='ElasticAllocationPool') . "</" . $ns . "ElasticAllocationPool>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->AbsoluteSessionTimeoutMinutes) ||
            !is_null($this->ActivityLogDisplayDays) ||
            !is_null($this->ActivityLogKeepDays) ||
            !is_null($this->AllowOverlappingExtNets) ||
            !is_null($this->ChargebackEventsKeepDays) ||
            !is_null($this->ChargebackTablesCleanupJobTimeInSeconds) ||
            !is_null($this->ConsoleProxyExternalAddress) ||
            !is_null($this->HostCheckDelayInSeconds) ||
            !is_null($this->HostCheckTimeoutSeconds) ||
            !is_null($this->InstallationId) ||
            !is_null($this->IpReservationTimeoutSeconds) ||
            !is_null($this->SyslogServerSettings) ||
            !is_null($this->LoginNameOnly) ||
            !is_null($this->PrePopDefaultName) ||
            !is_null($this->QuarantineEnabled) ||
            !is_null($this->QuarantineResponseTimeoutSeconds) ||
            !is_null($this->RestApiBaseUri) ||
            !is_null($this->SessionTimeoutMinutes) ||
            !is_null($this->ShowStackTraces) ||
            !is_null($this->SyncStartDate) ||
            !is_null($this->SyncIntervalInHours) ||
            !is_null($this->SystemExternalAddress) ||
            !is_null($this->TransferSessionTimeoutSeconds) ||
            !is_null($this->VerifyVcCertificates) ||
            !is_null($this->VcTruststorePassword) ||
            !is_null($this->VcTruststoreContents) ||
            !is_null($this->VcTruststoreType) ||
            !is_null($this->VmrcVersion) ||
            !is_null($this->VerifyVsmCertificates) ||
            !is_null($this->ElasticAllocationPool) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AbsoluteSessionTimeoutMinutes') {
            $sval = $child->nodeValue;
            $this->AbsoluteSessionTimeoutMinutes = $sval;
            if (!empty($namespace)) {
                $this->namespace['AbsoluteSessionTimeoutMinutes'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ActivityLogDisplayDays') {
            $sval = $child->nodeValue;
            $this->ActivityLogDisplayDays = $sval;
            if (!empty($namespace)) {
                $this->namespace['ActivityLogDisplayDays'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ActivityLogKeepDays') {
            $sval = $child->nodeValue;
            $this->ActivityLogKeepDays = $sval;
            if (!empty($namespace)) {
                $this->namespace['ActivityLogKeepDays'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllowOverlappingExtNets') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AllowOverlappingExtNets = $sval;
            if (!empty($namespace)) {
                $this->namespace['AllowOverlappingExtNets'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ChargebackEventsKeepDays') {
            $sval = $child->nodeValue;
            $this->ChargebackEventsKeepDays = $sval;
            if (!empty($namespace)) {
                $this->namespace['ChargebackEventsKeepDays'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ChargebackTablesCleanupJobTimeInSeconds') {
            $sval = $child->nodeValue;
            $this->ChargebackTablesCleanupJobTimeInSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['ChargebackTablesCleanupJobTimeInSeconds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ConsoleProxyExternalAddress') {
            $sval = $child->nodeValue;
            $this->ConsoleProxyExternalAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['ConsoleProxyExternalAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostCheckDelayInSeconds') {
            $sval = $child->nodeValue;
            $this->HostCheckDelayInSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['HostCheckDelayInSeconds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostCheckTimeoutSeconds') {
            $sval = $child->nodeValue;
            $this->HostCheckTimeoutSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['HostCheckTimeoutSeconds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstallationId') {
            $sval = $child->nodeValue;
            $this->InstallationId = $sval;
            if (!empty($namespace)) {
                $this->namespace['InstallationId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpReservationTimeoutSeconds') {
            $sval = $child->nodeValue;
            $this->IpReservationTimeoutSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['IpReservationTimeoutSeconds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SyslogServerSettings') {
            $obj = new VMware_VCloud_API_SyslogServerSettingsType();
            $obj->build($child);
            $obj->set_tagName('SyslogServerSettings');
            $this->setSyslogServerSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['SyslogServerSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LoginNameOnly') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->LoginNameOnly = $sval;
            if (!empty($namespace)) {
                $this->namespace['LoginNameOnly'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PrePopDefaultName') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->PrePopDefaultName = $sval;
            if (!empty($namespace)) {
                $this->namespace['PrePopDefaultName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'QuarantineEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->QuarantineEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['QuarantineEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'QuarantineResponseTimeoutSeconds') {
            $sval = $child->nodeValue;
            $this->QuarantineResponseTimeoutSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['QuarantineResponseTimeoutSeconds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RestApiBaseUri') {
            $sval = $child->nodeValue;
            $this->RestApiBaseUri = $sval;
            if (!empty($namespace)) {
                $this->namespace['RestApiBaseUri'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SessionTimeoutMinutes') {
            $sval = $child->nodeValue;
            $this->SessionTimeoutMinutes = $sval;
            if (!empty($namespace)) {
                $this->namespace['SessionTimeoutMinutes'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ShowStackTraces') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->ShowStackTraces = $sval;
            if (!empty($namespace)) {
                $this->namespace['ShowStackTraces'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SyncStartDate') {
            $sval = $child->nodeValue;
            $this->SyncStartDate = $sval;
            if (!empty($namespace)) {
                $this->namespace['SyncStartDate'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SyncIntervalInHours') {
            $sval = $child->nodeValue;
            $this->SyncIntervalInHours = $sval;
            if (!empty($namespace)) {
                $this->namespace['SyncIntervalInHours'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SystemExternalAddress') {
            $sval = $child->nodeValue;
            $this->SystemExternalAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['SystemExternalAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TransferSessionTimeoutSeconds') {
            $sval = $child->nodeValue;
            $this->TransferSessionTimeoutSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['TransferSessionTimeoutSeconds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VerifyVcCertificates') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->VerifyVcCertificates = $sval;
            if (!empty($namespace)) {
                $this->namespace['VerifyVcCertificates'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcTruststorePassword') {
            $sval = $child->nodeValue;
            $this->VcTruststorePassword = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcTruststorePassword'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcTruststoreContents') {
            $sval = $child->nodeValue;
            $this->VcTruststoreContents = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcTruststoreContents'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VcTruststoreType') {
            $sval = $child->nodeValue;
            $this->VcTruststoreType = $sval;
            if (!empty($namespace)) {
                $this->namespace['VcTruststoreType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmrcVersion') {
            $sval = $child->nodeValue;
            $this->VmrcVersion = $sval;
            if (!empty($namespace)) {
                $this->namespace['VmrcVersion'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VerifyVsmCertificates') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->VerifyVsmCertificates = $sval;
            if (!empty($namespace)) {
                $this->namespace['VerifyVsmCertificates'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ElasticAllocationPool') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->ElasticAllocationPool = $sval;
            if (!empty($namespace)) {
                $this->namespace['ElasticAllocationPool'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}