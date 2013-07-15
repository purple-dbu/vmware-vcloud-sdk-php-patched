<?php
class VMware_VCloud_API_Extension_VMWProviderVdcType extends VMware_VCloud_API_ProviderVdcType {
    protected $DataStoreRefs = null;
    protected $ResourcePoolRefs = null;
    protected $VimServer = array();
    protected $HostReferences = null;
    protected $HighestSupportedHardwareVersion = null;
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
    * @param int $status - [optional] an attribute, 
    * @param VMware_VCloud_API_RootComputeCapacityType $ComputeCapacity - [optional]
    * @param VMware_VCloud_API_ProviderVdcCapacityType $StorageCapacity - [optional]
    * @param VMware_VCloud_API_AvailableNetworksType $AvailableNetworks - [optional]
    * @param VMware_VCloud_API_ProviderVdcStorageProfilesType $StorageProfiles - [optional]
    * @param VMware_VCloud_API_CapabilitiesType $Capabilities - [optional]
    * @param VMware_VCloud_API_VdcsType $Vdcs - [optional]
    * @param boolean $IsEnabled - [optional] 
    * @param VMware_VCloud_API_NetworkPoolReferencesType $NetworkPoolReferences - [optional]
    * @param VMware_VCloud_API_Extension_VimObjectRefsType $DataStoreRefs - [required]
    * @param VMware_VCloud_API_Extension_VimObjectRefsType $ResourcePoolRefs - [required]
    * @param array $VimServer - [optional] an array of VMware_VCloud_API_ReferenceType objects
    * @param VMware_VCloud_API_Extension_VMWHostReferencesType $HostReferences - [optional]
    * @param string $HighestSupportedHardwareVersion - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $ComputeCapacity=null, $StorageCapacity=null, $AvailableNetworks=null, $StorageProfiles=null, $Capabilities=null, $Vdcs=null, $IsEnabled=null, $NetworkPoolReferences=null, $DataStoreRefs=null, $ResourcePoolRefs=null, $VimServer=null, $HostReferences=null, $HighestSupportedHardwareVersion=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $status, $ComputeCapacity, $StorageCapacity, $AvailableNetworks, $StorageProfiles, $Capabilities, $Vdcs, $IsEnabled, $NetworkPoolReferences);
        $this->DataStoreRefs = $DataStoreRefs;
        $this->ResourcePoolRefs = $ResourcePoolRefs;
        if (!is_null($VimServer)) {
            $this->VimServer = $VimServer;
        }
        $this->HostReferences = $HostReferences;
        $this->HighestSupportedHardwareVersion = $HighestSupportedHardwareVersion;
        $this->tagName = 'VMWProviderVdc';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDataStoreRefs() {
        return $this->DataStoreRefs;
    }
    public function setDataStoreRefs($DataStoreRefs) { 
        $this->DataStoreRefs = $DataStoreRefs;
    }
    public function getResourcePoolRefs() {
        return $this->ResourcePoolRefs;
    }
    public function setResourcePoolRefs($ResourcePoolRefs) { 
        $this->ResourcePoolRefs = $ResourcePoolRefs;
    }
    public function getVimServer() {
        return $this->VimServer;
    }
    public function setVimServer($VimServer) { 
        $this->VimServer = $VimServer;
    }
    public function addVimServer($value) { array_push($this->VimServer, $value); }
    public function getHostReferences() {
        return $this->HostReferences;
    }
    public function setHostReferences($HostReferences) { 
        $this->HostReferences = $HostReferences;
    }
    public function getHighestSupportedHardwareVersion() {
        return $this->HighestSupportedHardwareVersion;
    }
    public function setHighestSupportedHardwareVersion($HighestSupportedHardwareVersion) { 
        $this->HighestSupportedHardwareVersion = $HighestSupportedHardwareVersion;
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
        if (!is_null($this->DataStoreRefs)) {
            $out = $this->DataStoreRefs->export('DataStoreRefs', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ResourcePoolRefs)) {
            $out = $this->ResourcePoolRefs->export('ResourcePoolRefs', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->VimServer)) {
            foreach ($this->VimServer as $VimServer) {
                $out = $VimServer->export('VimServer', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->HostReferences)) {
            $out = $this->HostReferences->export('HostReferences', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->HighestSupportedHardwareVersion)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HighestSupportedHardwareVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HighestSupportedHardwareVersion>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->HighestSupportedHardwareVersion, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='HighestSupportedHardwareVersion')) . "</" . $ns . "HighestSupportedHardwareVersion>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->DataStoreRefs) ||
            !is_null($this->ResourcePoolRefs) ||
            !empty($this->VimServer) ||
            !is_null($this->HostReferences) ||
            !is_null($this->HighestSupportedHardwareVersion) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DataStoreRefs') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefsType();
            $obj->build($child);
            $obj->set_tagName('DataStoreRefs');
            $this->setDataStoreRefs($obj);
            if (!empty($namespace)) {
                $this->namespace['DataStoreRefs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourcePoolRefs') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefsType();
            $obj->build($child);
            $obj->set_tagName('ResourcePoolRefs');
            $this->setResourcePoolRefs($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourcePoolRefs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimServer') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VimServer');
            array_push($this->VimServer, $obj);
            if (!empty($namespace)) {
                $this->namespace['VimServer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostReferences') {
            $obj = new VMware_VCloud_API_Extension_VMWHostReferencesType();
            $obj->build($child);
            $obj->set_tagName('HostReferences');
            $this->setHostReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['HostReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HighestSupportedHardwareVersion') {
            $sval = $child->nodeValue;
            $this->HighestSupportedHardwareVersion = $sval;
            if (!empty($namespace)) {
                $this->namespace['HighestSupportedHardwareVersion'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}