<?php
class VMware_VCloud_API_Extension_HostType extends VMware_VCloud_API_EntityType {
    protected $Ready = null;
    protected $Available = null;
    protected $Enabled = null;
    protected $Busy = null;
    protected $EnableHostForHostSpanning = null;
    protected $CpuType = null;
    protected $NumOfCpusPackages = null;
    protected $NumOfCpusLogical = null;
    protected $CpuTotal = null;
    protected $MemUsed = null;
    protected $MemTotal = null;
    protected $HostOsName = null;
    protected $HostOsVersion = null;
    protected $SystemMessages = null;
    protected $VimPropertyPageUrl = null;
    protected $VmMoRef = null;
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
    * @param boolean $Ready - [required] 
    * @param boolean $Available - [required] 
    * @param boolean $Enabled - [required] 
    * @param boolean $Busy - [required] 
    * @param boolean $EnableHostForHostSpanning - [required] 
    * @param string $CpuType - [optional] 
    * @param int $NumOfCpusPackages - [required] 
    * @param int $NumOfCpusLogical - [required] 
    * @param int $CpuTotal - [required] 
    * @param float $MemUsed - [required] 
    * @param float $MemTotal - [required] 
    * @param string $HostOsName - [optional] 
    * @param string $HostOsVersion - [optional] 
    * @param string $SystemMessages - [optional] 
    * @param string $VimPropertyPageUrl - [optional] 
    * @param string $VmMoRef - [required] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $Ready=null, $Available=null, $Enabled=null, $Busy=null, $EnableHostForHostSpanning=null, $CpuType=null, $NumOfCpusPackages=null, $NumOfCpusLogical=null, $CpuTotal=null, $MemUsed=null, $MemTotal=null, $HostOsName=null, $HostOsVersion=null, $SystemMessages=null, $VimPropertyPageUrl=null, $VmMoRef=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->Ready = $Ready;
        $this->Available = $Available;
        $this->Enabled = $Enabled;
        $this->Busy = $Busy;
        $this->EnableHostForHostSpanning = $EnableHostForHostSpanning;
        $this->CpuType = $CpuType;
        $this->NumOfCpusPackages = $NumOfCpusPackages;
        $this->NumOfCpusLogical = $NumOfCpusLogical;
        $this->CpuTotal = $CpuTotal;
        $this->MemUsed = $MemUsed;
        $this->MemTotal = $MemTotal;
        $this->HostOsName = $HostOsName;
        $this->HostOsVersion = $HostOsVersion;
        $this->SystemMessages = $SystemMessages;
        $this->VimPropertyPageUrl = $VimPropertyPageUrl;
        $this->VmMoRef = $VmMoRef;
        $this->tagName = 'Host';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getReady() {
        return $this->Ready;
    }
    public function setReady($Ready) { 
        $this->Ready = $Ready;
    }
    public function getAvailable() {
        return $this->Available;
    }
    public function setAvailable($Available) { 
        $this->Available = $Available;
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
    public function getEnableHostForHostSpanning() {
        return $this->EnableHostForHostSpanning;
    }
    public function setEnableHostForHostSpanning($EnableHostForHostSpanning) { 
        $this->EnableHostForHostSpanning = $EnableHostForHostSpanning;
    }
    public function getCpuType() {
        return $this->CpuType;
    }
    public function setCpuType($CpuType) { 
        $this->CpuType = $CpuType;
    }
    public function getNumOfCpusPackages() {
        return $this->NumOfCpusPackages;
    }
    public function setNumOfCpusPackages($NumOfCpusPackages) { 
        $this->NumOfCpusPackages = $NumOfCpusPackages;
    }
    public function getNumOfCpusLogical() {
        return $this->NumOfCpusLogical;
    }
    public function setNumOfCpusLogical($NumOfCpusLogical) { 
        $this->NumOfCpusLogical = $NumOfCpusLogical;
    }
    public function getCpuTotal() {
        return $this->CpuTotal;
    }
    public function setCpuTotal($CpuTotal) { 
        $this->CpuTotal = $CpuTotal;
    }
    public function getMemUsed() {
        return $this->MemUsed;
    }
    public function setMemUsed($MemUsed) { 
        $this->MemUsed = $MemUsed;
    }
    public function getMemTotal() {
        return $this->MemTotal;
    }
    public function setMemTotal($MemTotal) { 
        $this->MemTotal = $MemTotal;
    }
    public function getHostOsName() {
        return $this->HostOsName;
    }
    public function setHostOsName($HostOsName) { 
        $this->HostOsName = $HostOsName;
    }
    public function getHostOsVersion() {
        return $this->HostOsVersion;
    }
    public function setHostOsVersion($HostOsVersion) { 
        $this->HostOsVersion = $HostOsVersion;
    }
    public function getSystemMessages() {
        return $this->SystemMessages;
    }
    public function setSystemMessages($SystemMessages) { 
        $this->SystemMessages = $SystemMessages;
    }
    public function getVimPropertyPageUrl() {
        return $this->VimPropertyPageUrl;
    }
    public function setVimPropertyPageUrl($VimPropertyPageUrl) { 
        $this->VimPropertyPageUrl = $VimPropertyPageUrl;
    }
    public function getVmMoRef() {
        return $this->VmMoRef;
    }
    public function setVmMoRef($VmMoRef) { 
        $this->VmMoRef = $VmMoRef;
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
        if (!is_null($this->Ready)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Ready', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Ready>" . VMware_VCloud_API_Helper::format_boolean($this->Ready, $input_name='Ready') . "</" . $ns . "Ready>\n");
     }
        if (!is_null($this->Available)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Available', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Available>" . VMware_VCloud_API_Helper::format_boolean($this->Available, $input_name='Available') . "</" . $ns . "Available>\n");
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
        if (!is_null($this->EnableHostForHostSpanning)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'EnableHostForHostSpanning', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "EnableHostForHostSpanning>" . VMware_VCloud_API_Helper::format_boolean($this->EnableHostForHostSpanning, $input_name='EnableHostForHostSpanning') . "</" . $ns . "EnableHostForHostSpanning>\n");
     }
        if (!is_null($this->CpuType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CpuType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CpuType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->CpuType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='CpuType')) . "</" . $ns . "CpuType>\n");
        }
        if (!is_null($this->NumOfCpusPackages)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'NumOfCpusPackages', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "NumOfCpusPackages>" . VMware_VCloud_API_Helper::format_integer($this->NumOfCpusPackages, $input_name='NumOfCpusPackages') . "</" . $ns . "NumOfCpusPackages>\n");
        }
        if (!is_null($this->NumOfCpusLogical)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'NumOfCpusLogical', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "NumOfCpusLogical>" . VMware_VCloud_API_Helper::format_integer($this->NumOfCpusLogical, $input_name='NumOfCpusLogical') . "</" . $ns . "NumOfCpusLogical>\n");
        }
        if (!is_null($this->CpuTotal)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CpuTotal', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CpuTotal>" . VMware_VCloud_API_Helper::format_integer($this->CpuTotal, $input_name='CpuTotal') . "</" . $ns . "CpuTotal>\n");
        }
        if (!is_null($this->MemUsed)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MemUsed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MemUsed>" . VMware_VCloud_API_Helper::format_double($this->MemUsed, $input_name='MemUsed') . "</" . $ns . "MemUsed>\n");
        }
        if (!is_null($this->MemTotal)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MemTotal', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MemTotal>" . VMware_VCloud_API_Helper::format_double($this->MemTotal, $input_name='MemTotal') . "</" . $ns . "MemTotal>\n");
        }
        if (!is_null($this->HostOsName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HostOsName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HostOsName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->HostOsName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='HostOsName')) . "</" . $ns . "HostOsName>\n");
        }
        if (!is_null($this->HostOsVersion)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HostOsVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HostOsVersion>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->HostOsVersion, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='HostOsVersion')) . "</" . $ns . "HostOsVersion>\n");
        }
        if (!is_null($this->SystemMessages)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SystemMessages', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SystemMessages>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SystemMessages, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SystemMessages')) . "</" . $ns . "SystemMessages>\n");
        }
        if (!is_null($this->VimPropertyPageUrl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VimPropertyPageUrl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VimPropertyPageUrl>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VimPropertyPageUrl, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VimPropertyPageUrl')) . "</" . $ns . "VimPropertyPageUrl>\n");
        }
        if (!is_null($this->VmMoRef)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VmMoRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VmMoRef>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VmMoRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VmMoRef')) . "</" . $ns . "VmMoRef>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Ready) ||
            !is_null($this->Available) ||
            !is_null($this->Enabled) ||
            !is_null($this->Busy) ||
            !is_null($this->EnableHostForHostSpanning) ||
            !is_null($this->CpuType) ||
            !is_null($this->NumOfCpusPackages) ||
            !is_null($this->NumOfCpusLogical) ||
            !is_null($this->CpuTotal) ||
            !is_null($this->MemUsed) ||
            !is_null($this->MemTotal) ||
            !is_null($this->HostOsName) ||
            !is_null($this->HostOsVersion) ||
            !is_null($this->SystemMessages) ||
            !is_null($this->VimPropertyPageUrl) ||
            !is_null($this->VmMoRef) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Ready') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Ready = $sval;
            if (!empty($namespace)) {
                $this->namespace['Ready'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Available') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Available = $sval;
            if (!empty($namespace)) {
                $this->namespace['Available'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EnableHostForHostSpanning') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->EnableHostForHostSpanning = $sval;
            if (!empty($namespace)) {
                $this->namespace['EnableHostForHostSpanning'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CpuType') {
            $sval = $child->nodeValue;
            $this->CpuType = $sval;
            if (!empty($namespace)) {
                $this->namespace['CpuType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NumOfCpusPackages') {
            $sval = $child->nodeValue;
            $this->NumOfCpusPackages = $sval;
            if (!empty($namespace)) {
                $this->namespace['NumOfCpusPackages'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NumOfCpusLogical') {
            $sval = $child->nodeValue;
            $this->NumOfCpusLogical = $sval;
            if (!empty($namespace)) {
                $this->namespace['NumOfCpusLogical'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CpuTotal') {
            $sval = $child->nodeValue;
            $this->CpuTotal = $sval;
            if (!empty($namespace)) {
                $this->namespace['CpuTotal'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MemUsed') {
            $sval = $child->nodeValue;
            $this->MemUsed = $sval;
            if (!empty($namespace)) {
                $this->namespace['MemUsed'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MemTotal') {
            $sval = $child->nodeValue;
            $this->MemTotal = $sval;
            if (!empty($namespace)) {
                $this->namespace['MemTotal'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostOsName') {
            $sval = $child->nodeValue;
            $this->HostOsName = $sval;
            if (!empty($namespace)) {
                $this->namespace['HostOsName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostOsVersion') {
            $sval = $child->nodeValue;
            $this->HostOsVersion = $sval;
            if (!empty($namespace)) {
                $this->namespace['HostOsVersion'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SystemMessages') {
            $sval = $child->nodeValue;
            $this->SystemMessages = $sval;
            if (!empty($namespace)) {
                $this->namespace['SystemMessages'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimPropertyPageUrl') {
            $sval = $child->nodeValue;
            $this->VimPropertyPageUrl = $sval;
            if (!empty($namespace)) {
                $this->namespace['VimPropertyPageUrl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmMoRef') {
            $sval = $child->nodeValue;
            $this->VmMoRef = $sval;
            if (!empty($namespace)) {
                $this->namespace['VmMoRef'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}