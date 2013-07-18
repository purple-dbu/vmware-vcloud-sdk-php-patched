<?php
class VMware_VCloud_API_OperatingSystemInfoType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $OperatingSystemId = null;
    protected $DefaultHardDiskAdapterType = null;
    protected $MinimumHardDiskSizeGigabytes = null;
    protected $MinimumMemoryMegabytes = null;
    protected $Name = null;
    protected $InternalName = null;
    protected $Supported = null;
    protected $x64 = null;
    protected $MaximumCpuCount = null;
    protected $MinimumHardwareVersion = null;
    protected $PersonalizationEnabled = null;
    protected $PersonalizationAuto = null;
    protected $SysprepPackagingSupported = null;
    protected $SupportsMemHotAdd = null;
    protected $cimOsId = null;
    protected $CimVersion = null;
    protected $SupportedForCreate = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param int $OperatingSystemId - [optional] 
    * @param int $DefaultHardDiskAdapterType - [optional] 
    * @param int $MinimumHardDiskSizeGigabytes - [optional] 
    * @param int $MinimumMemoryMegabytes - [optional] 
    * @param string $Name - [optional] 
    * @param string $InternalName - [optional] 
    * @param boolean $Supported - [optional] 
    * @param boolean $x64 - [optional] 
    * @param int $MaximumCpuCount - [optional] 
    * @param int $MinimumHardwareVersion - [optional] 
    * @param boolean $PersonalizationEnabled - [optional] 
    * @param boolean $PersonalizationAuto - [optional] 
    * @param boolean $SysprepPackagingSupported - [optional] 
    * @param boolean $SupportsMemHotAdd - [optional] 
    * @param int $cimOsId - [optional] 
    * @param int $CimVersion - [optional] 
    * @param boolean $SupportedForCreate - [optional] 
    */
    public function __construct($VCloudExtension=null, $OperatingSystemId=null, $DefaultHardDiskAdapterType=null, $MinimumHardDiskSizeGigabytes=null, $MinimumMemoryMegabytes=null, $Name=null, $InternalName=null, $Supported=null, $x64=null, $MaximumCpuCount=null, $MinimumHardwareVersion=null, $PersonalizationEnabled=null, $PersonalizationAuto=null, $SysprepPackagingSupported=null, $SupportsMemHotAdd=null, $cimOsId=null, $CimVersion=null, $SupportedForCreate=null) {
        parent::__construct($VCloudExtension);
        $this->OperatingSystemId = $OperatingSystemId;
        $this->DefaultHardDiskAdapterType = $DefaultHardDiskAdapterType;
        $this->MinimumHardDiskSizeGigabytes = $MinimumHardDiskSizeGigabytes;
        $this->MinimumMemoryMegabytes = $MinimumMemoryMegabytes;
        $this->Name = $Name;
        $this->InternalName = $InternalName;
        $this->Supported = $Supported;
        $this->x64 = $x64;
        $this->MaximumCpuCount = $MaximumCpuCount;
        $this->MinimumHardwareVersion = $MinimumHardwareVersion;
        $this->PersonalizationEnabled = $PersonalizationEnabled;
        $this->PersonalizationAuto = $PersonalizationAuto;
        $this->SysprepPackagingSupported = $SysprepPackagingSupported;
        $this->SupportsMemHotAdd = $SupportsMemHotAdd;
        $this->cimOsId = $cimOsId;
        $this->CimVersion = $CimVersion;
        $this->SupportedForCreate = $SupportedForCreate;
        $this->tagName = 'OperatingSystem';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOperatingSystemId() {
        return $this->OperatingSystemId;
    }
    public function setOperatingSystemId($OperatingSystemId) { 
        $this->OperatingSystemId = $OperatingSystemId;
    }
    public function getDefaultHardDiskAdapterType() {
        return $this->DefaultHardDiskAdapterType;
    }
    public function setDefaultHardDiskAdapterType($DefaultHardDiskAdapterType) { 
        $this->DefaultHardDiskAdapterType = $DefaultHardDiskAdapterType;
    }
    public function getMinimumHardDiskSizeGigabytes() {
        return $this->MinimumHardDiskSizeGigabytes;
    }
    public function setMinimumHardDiskSizeGigabytes($MinimumHardDiskSizeGigabytes) { 
        $this->MinimumHardDiskSizeGigabytes = $MinimumHardDiskSizeGigabytes;
    }
    public function getMinimumMemoryMegabytes() {
        return $this->MinimumMemoryMegabytes;
    }
    public function setMinimumMemoryMegabytes($MinimumMemoryMegabytes) { 
        $this->MinimumMemoryMegabytes = $MinimumMemoryMegabytes;
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) { 
        $this->Name = $Name;
    }
    public function getInternalName() {
        return $this->InternalName;
    }
    public function setInternalName($InternalName) { 
        $this->InternalName = $InternalName;
    }
    public function getSupported() {
        return $this->Supported;
    }
    public function setSupported($Supported) { 
        $this->Supported = $Supported;
    }
    public function get_x64() {
        return $this->x64;
    }
    public function set_x64($x64) { 
        $this->x64 = $x64;
    }
    public function getMaximumCpuCount() {
        return $this->MaximumCpuCount;
    }
    public function setMaximumCpuCount($MaximumCpuCount) { 
        $this->MaximumCpuCount = $MaximumCpuCount;
    }
    public function getMinimumHardwareVersion() {
        return $this->MinimumHardwareVersion;
    }
    public function setMinimumHardwareVersion($MinimumHardwareVersion) { 
        $this->MinimumHardwareVersion = $MinimumHardwareVersion;
    }
    public function getPersonalizationEnabled() {
        return $this->PersonalizationEnabled;
    }
    public function setPersonalizationEnabled($PersonalizationEnabled) { 
        $this->PersonalizationEnabled = $PersonalizationEnabled;
    }
    public function getPersonalizationAuto() {
        return $this->PersonalizationAuto;
    }
    public function setPersonalizationAuto($PersonalizationAuto) { 
        $this->PersonalizationAuto = $PersonalizationAuto;
    }
    public function getSysprepPackagingSupported() {
        return $this->SysprepPackagingSupported;
    }
    public function setSysprepPackagingSupported($SysprepPackagingSupported) { 
        $this->SysprepPackagingSupported = $SysprepPackagingSupported;
    }
    public function getSupportsMemHotAdd() {
        return $this->SupportsMemHotAdd;
    }
    public function setSupportsMemHotAdd($SupportsMemHotAdd) { 
        $this->SupportsMemHotAdd = $SupportsMemHotAdd;
    }
    public function get_cimOsId() {
        return $this->cimOsId;
    }
    public function set_cimOsId($cimOsId) { 
        $this->cimOsId = $cimOsId;
    }
    public function getCimVersion() {
        return $this->CimVersion;
    }
    public function setCimVersion($CimVersion) { 
        $this->CimVersion = $CimVersion;
    }
    public function getSupportedForCreate() {
        return $this->SupportedForCreate;
    }
    public function setSupportedForCreate($SupportedForCreate) { 
        $this->SupportedForCreate = $SupportedForCreate;
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
        if (!is_null($this->OperatingSystemId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'OperatingSystemId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "OperatingSystemId>" . VMware_VCloud_API_Helper::format_integer($this->OperatingSystemId, $input_name='OperatingSystemId') . "</" . $ns . "OperatingSystemId>\n");
        }
        if (!is_null($this->DefaultHardDiskAdapterType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DefaultHardDiskAdapterType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DefaultHardDiskAdapterType>" . VMware_VCloud_API_Helper::format_integer($this->DefaultHardDiskAdapterType, $input_name='DefaultHardDiskAdapterType') . "</" . $ns . "DefaultHardDiskAdapterType>\n");
        }
        if (!is_null($this->MinimumHardDiskSizeGigabytes)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MinimumHardDiskSizeGigabytes', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MinimumHardDiskSizeGigabytes>" . VMware_VCloud_API_Helper::format_integer($this->MinimumHardDiskSizeGigabytes, $input_name='MinimumHardDiskSizeGigabytes') . "</" . $ns . "MinimumHardDiskSizeGigabytes>\n");
        }
        if (!is_null($this->MinimumMemoryMegabytes)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MinimumMemoryMegabytes', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MinimumMemoryMegabytes>" . VMware_VCloud_API_Helper::format_integer($this->MinimumMemoryMegabytes, $input_name='MinimumMemoryMegabytes') . "</" . $ns . "MinimumMemoryMegabytes>\n");
        }
        if (!is_null($this->Name)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Name>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Name')) . "</" . $ns . "Name>\n");
        }
        if (!is_null($this->InternalName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'InternalName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "InternalName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->InternalName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='InternalName')) . "</" . $ns . "InternalName>\n");
        }
        if (!is_null($this->Supported)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Supported', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Supported>" . VMware_VCloud_API_Helper::format_boolean($this->Supported, $input_name='Supported') . "</" . $ns . "Supported>\n");
        }
        if (!is_null($this->x64)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'x64', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "x64>" . VMware_VCloud_API_Helper::format_boolean($this->x64, $input_name='x64') . "</" . $ns . "x64>\n");
        }
        if (!is_null($this->MaximumCpuCount)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MaximumCpuCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MaximumCpuCount>" . VMware_VCloud_API_Helper::format_integer($this->MaximumCpuCount, $input_name='MaximumCpuCount') . "</" . $ns . "MaximumCpuCount>\n");
        }
        if (!is_null($this->MinimumHardwareVersion)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MinimumHardwareVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MinimumHardwareVersion>" . VMware_VCloud_API_Helper::format_integer($this->MinimumHardwareVersion, $input_name='MinimumHardwareVersion') . "</" . $ns . "MinimumHardwareVersion>\n");
        }
        if (!is_null($this->PersonalizationEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PersonalizationEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PersonalizationEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->PersonalizationEnabled, $input_name='PersonalizationEnabled') . "</" . $ns . "PersonalizationEnabled>\n");
        }
        if (!is_null($this->PersonalizationAuto)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PersonalizationAuto', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PersonalizationAuto>" . VMware_VCloud_API_Helper::format_boolean($this->PersonalizationAuto, $input_name='PersonalizationAuto') . "</" . $ns . "PersonalizationAuto>\n");
        }
        if (!is_null($this->SysprepPackagingSupported)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SysprepPackagingSupported', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SysprepPackagingSupported>" . VMware_VCloud_API_Helper::format_boolean($this->SysprepPackagingSupported, $input_name='SysprepPackagingSupported') . "</" . $ns . "SysprepPackagingSupported>\n");
        }
        if (!is_null($this->SupportsMemHotAdd)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SupportsMemHotAdd', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SupportsMemHotAdd>" . VMware_VCloud_API_Helper::format_boolean($this->SupportsMemHotAdd, $input_name='SupportsMemHotAdd') . "</" . $ns . "SupportsMemHotAdd>\n");
        }
        if (!is_null($this->cimOsId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'cimOsId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "cimOsId>" . VMware_VCloud_API_Helper::format_integer($this->cimOsId, $input_name='cimOsId') . "</" . $ns . "cimOsId>\n");
        }
        if (!is_null($this->CimVersion)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CimVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CimVersion>" . VMware_VCloud_API_Helper::format_integer($this->CimVersion, $input_name='CimVersion') . "</" . $ns . "CimVersion>\n");
        }
        if (!is_null($this->SupportedForCreate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SupportedForCreate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SupportedForCreate>" . VMware_VCloud_API_Helper::format_boolean($this->SupportedForCreate, $input_name='SupportedForCreate') . "</" . $ns . "SupportedForCreate>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->OperatingSystemId) ||
            !is_null($this->DefaultHardDiskAdapterType) ||
            !is_null($this->MinimumHardDiskSizeGigabytes) ||
            !is_null($this->MinimumMemoryMegabytes) ||
            !is_null($this->Name) ||
            !is_null($this->InternalName) ||
            !is_null($this->Supported) ||
            !is_null($this->x64) ||
            !is_null($this->MaximumCpuCount) ||
            !is_null($this->MinimumHardwareVersion) ||
            !is_null($this->PersonalizationEnabled) ||
            !is_null($this->PersonalizationAuto) ||
            !is_null($this->SysprepPackagingSupported) ||
            !is_null($this->SupportsMemHotAdd) ||
            !is_null($this->cimOsId) ||
            !is_null($this->CimVersion) ||
            !is_null($this->SupportedForCreate) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OperatingSystemId') {
            $sval = $child->nodeValue;
            $this->OperatingSystemId = $sval;
            if (!empty($namespace)) {
                $this->namespace['OperatingSystemId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultHardDiskAdapterType') {
            $sval = $child->nodeValue;
            $this->DefaultHardDiskAdapterType = $sval;
            if (!empty($namespace)) {
                $this->namespace['DefaultHardDiskAdapterType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MinimumHardDiskSizeGigabytes') {
            $sval = $child->nodeValue;
            $this->MinimumHardDiskSizeGigabytes = $sval;
            if (!empty($namespace)) {
                $this->namespace['MinimumHardDiskSizeGigabytes'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MinimumMemoryMegabytes') {
            $sval = $child->nodeValue;
            $this->MinimumMemoryMegabytes = $sval;
            if (!empty($namespace)) {
                $this->namespace['MinimumMemoryMegabytes'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Name') {
            $sval = $child->nodeValue;
            $this->Name = $sval;
            if (!empty($namespace)) {
                $this->namespace['Name'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InternalName') {
            $sval = $child->nodeValue;
            $this->InternalName = $sval;
            if (!empty($namespace)) {
                $this->namespace['InternalName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Supported') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Supported = $sval;
            if (!empty($namespace)) {
                $this->namespace['Supported'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'x64') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->x64 = $sval;
            if (!empty($namespace)) {
                $this->namespace['x64'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MaximumCpuCount') {
            $sval = $child->nodeValue;
            $this->MaximumCpuCount = $sval;
            if (!empty($namespace)) {
                $this->namespace['MaximumCpuCount'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MinimumHardwareVersion') {
            $sval = $child->nodeValue;
            $this->MinimumHardwareVersion = $sval;
            if (!empty($namespace)) {
                $this->namespace['MinimumHardwareVersion'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PersonalizationEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->PersonalizationEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['PersonalizationEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PersonalizationAuto') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->PersonalizationAuto = $sval;
            if (!empty($namespace)) {
                $this->namespace['PersonalizationAuto'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SysprepPackagingSupported') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->SysprepPackagingSupported = $sval;
            if (!empty($namespace)) {
                $this->namespace['SysprepPackagingSupported'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SupportsMemHotAdd') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->SupportsMemHotAdd = $sval;
            if (!empty($namespace)) {
                $this->namespace['SupportsMemHotAdd'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'cimOsId') {
            $sval = $child->nodeValue;
            $this->cimOsId = $sval;
            if (!empty($namespace)) {
                $this->namespace['cimOsId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CimVersion') {
            $sval = $child->nodeValue;
            $this->CimVersion = $sval;
            if (!empty($namespace)) {
                $this->namespace['CimVersion'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SupportedForCreate') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->SupportedForCreate = $sval;
            if (!empty($namespace)) {
                $this->namespace['SupportedForCreate'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}