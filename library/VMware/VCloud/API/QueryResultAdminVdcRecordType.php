<?php
class VMware_VCloud_API_QueryResultAdminVdcRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $numberOfStorageProfiles = null;
    protected $memoryUsedMB = null;
    protected $orgName = null;
    protected $isSystemVdc = null;
    protected $storageAllocationMB = null;
    protected $numberOfVAppTemplates = null;
    protected $isEnabled = null;
    protected $cpuLimitMhz = null;
    protected $memoryAllocationMB = null;
    protected $isBusy = null;
    protected $providerVdcName = null;
    protected $cpuUsedMhz = null;
    protected $networkPool = null;
    protected $status = null;
    protected $memoryLimitMB = null;
    protected $providerVdc = null;
    protected $numberOfVApps = null;
    protected $org = null;
    protected $storageUsedMB = null;
    protected $name = null;
    protected $numberOfDisks = null;
    protected $storageLimitMB = null;
    protected $numberOfMedia = null;
    protected $cpuAllocationMhz = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param int $numberOfStorageProfiles - [optional] an attribute, 
    * @param long $memoryUsedMB - [optional] an attribute, 
    * @param string $orgName - [optional] an attribute, 
    * @param boolean $isSystemVdc - [optional] an attribute, 
    * @param long $storageAllocationMB - [optional] an attribute, 
    * @param int $numberOfVAppTemplates - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param long $cpuLimitMhz - [optional] an attribute, 
    * @param long $memoryAllocationMB - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param string $providerVdcName - [optional] an attribute, 
    * @param long $cpuUsedMhz - [optional] an attribute, 
    * @param string $networkPool - [optional] an attribute, 
    * @param string $status - [optional] an attribute, 
    * @param long $memoryLimitMB - [optional] an attribute, 
    * @param string $providerVdc - [optional] an attribute, 
    * @param int $numberOfVApps - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param long $storageUsedMB - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param int $numberOfDisks - [optional] an attribute, 
    * @param long $storageLimitMB - [optional] an attribute, 
    * @param int $numberOfMedia - [optional] an attribute, 
    * @param long $cpuAllocationMhz - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $numberOfStorageProfiles=null, $memoryUsedMB=null, $orgName=null, $isSystemVdc=null, $storageAllocationMB=null, $numberOfVAppTemplates=null, $isEnabled=null, $cpuLimitMhz=null, $memoryAllocationMB=null, $isBusy=null, $providerVdcName=null, $cpuUsedMhz=null, $networkPool=null, $status=null, $memoryLimitMB=null, $providerVdc=null, $numberOfVApps=null, $org=null, $storageUsedMB=null, $name=null, $numberOfDisks=null, $storageLimitMB=null, $numberOfMedia=null, $cpuAllocationMhz=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->numberOfStorageProfiles = $numberOfStorageProfiles;
        $this->memoryUsedMB = $memoryUsedMB;
        $this->orgName = $orgName;
        $this->isSystemVdc = $isSystemVdc;
        $this->storageAllocationMB = $storageAllocationMB;
        $this->numberOfVAppTemplates = $numberOfVAppTemplates;
        $this->isEnabled = $isEnabled;
        $this->cpuLimitMhz = $cpuLimitMhz;
        $this->memoryAllocationMB = $memoryAllocationMB;
        $this->isBusy = $isBusy;
        $this->providerVdcName = $providerVdcName;
        $this->cpuUsedMhz = $cpuUsedMhz;
        $this->networkPool = $networkPool;
        $this->status = $status;
        $this->memoryLimitMB = $memoryLimitMB;
        $this->providerVdc = $providerVdc;
        $this->numberOfVApps = $numberOfVApps;
        $this->org = $org;
        $this->storageUsedMB = $storageUsedMB;
        $this->name = $name;
        $this->numberOfDisks = $numberOfDisks;
        $this->storageLimitMB = $storageLimitMB;
        $this->numberOfMedia = $numberOfMedia;
        $this->cpuAllocationMhz = $cpuAllocationMhz;
        $this->tagName = 'AdminVdcRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_numberOfStorageProfiles(){
        return $this->numberOfStorageProfiles;
    }
    public function set_numberOfStorageProfiles($numberOfStorageProfiles) {
        $this->numberOfStorageProfiles = $numberOfStorageProfiles;
    }
    public function get_memoryUsedMB(){
        return $this->memoryUsedMB;
    }
    public function set_memoryUsedMB($memoryUsedMB) {
        $this->memoryUsedMB = $memoryUsedMB;
    }
    public function get_orgName(){
        return $this->orgName;
    }
    public function set_orgName($orgName) {
        $this->orgName = $orgName;
    }
    public function get_isSystemVdc(){
        return $this->isSystemVdc;
    }
    public function set_isSystemVdc($isSystemVdc) {
        $this->isSystemVdc = $isSystemVdc;
    }
    public function get_storageAllocationMB(){
        return $this->storageAllocationMB;
    }
    public function set_storageAllocationMB($storageAllocationMB) {
        $this->storageAllocationMB = $storageAllocationMB;
    }
    public function get_numberOfVAppTemplates(){
        return $this->numberOfVAppTemplates;
    }
    public function set_numberOfVAppTemplates($numberOfVAppTemplates) {
        $this->numberOfVAppTemplates = $numberOfVAppTemplates;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_cpuLimitMhz(){
        return $this->cpuLimitMhz;
    }
    public function set_cpuLimitMhz($cpuLimitMhz) {
        $this->cpuLimitMhz = $cpuLimitMhz;
    }
    public function get_memoryAllocationMB(){
        return $this->memoryAllocationMB;
    }
    public function set_memoryAllocationMB($memoryAllocationMB) {
        $this->memoryAllocationMB = $memoryAllocationMB;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
    }
    public function get_providerVdcName(){
        return $this->providerVdcName;
    }
    public function set_providerVdcName($providerVdcName) {
        $this->providerVdcName = $providerVdcName;
    }
    public function get_cpuUsedMhz(){
        return $this->cpuUsedMhz;
    }
    public function set_cpuUsedMhz($cpuUsedMhz) {
        $this->cpuUsedMhz = $cpuUsedMhz;
    }
    public function get_networkPool(){
        return $this->networkPool;
    }
    public function set_networkPool($networkPool) {
        $this->networkPool = $networkPool;
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_memoryLimitMB(){
        return $this->memoryLimitMB;
    }
    public function set_memoryLimitMB($memoryLimitMB) {
        $this->memoryLimitMB = $memoryLimitMB;
    }
    public function get_providerVdc(){
        return $this->providerVdc;
    }
    public function set_providerVdc($providerVdc) {
        $this->providerVdc = $providerVdc;
    }
    public function get_numberOfVApps(){
        return $this->numberOfVApps;
    }
    public function set_numberOfVApps($numberOfVApps) {
        $this->numberOfVApps = $numberOfVApps;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_storageUsedMB(){
        return $this->storageUsedMB;
    }
    public function set_storageUsedMB($storageUsedMB) {
        $this->storageUsedMB = $storageUsedMB;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_numberOfDisks(){
        return $this->numberOfDisks;
    }
    public function set_numberOfDisks($numberOfDisks) {
        $this->numberOfDisks = $numberOfDisks;
    }
    public function get_storageLimitMB(){
        return $this->storageLimitMB;
    }
    public function set_storageLimitMB($storageLimitMB) {
        $this->storageLimitMB = $storageLimitMB;
    }
    public function get_numberOfMedia(){
        return $this->numberOfMedia;
    }
    public function set_numberOfMedia($numberOfMedia) {
        $this->numberOfMedia = $numberOfMedia;
    }
    public function get_cpuAllocationMhz(){
        return $this->cpuAllocationMhz;
    }
    public function set_cpuAllocationMhz($cpuAllocationMhz) {
        $this->cpuAllocationMhz = $cpuAllocationMhz;
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
        if (!is_null($this->numberOfStorageProfiles)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfStorageProfiles', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfStorageProfiles=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfStorageProfiles, $input_name='numberOfStorageProfiles')));
        }
        if (!is_null($this->memoryUsedMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryUsedMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryUsedMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryUsedMB, $input_name='memoryUsedMB')));
        }
        if (!is_null($this->orgName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'orgName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'orgName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->orgName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='orgName')));
        }
        if (!is_null($this->isSystemVdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isSystemVdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isSystemVdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isSystemVdc, $input_name='isSystemVdc')));
        }
        if (!is_null($this->storageAllocationMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageAllocationMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageAllocationMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageAllocationMB, $input_name='storageAllocationMB')));
        }
        if (!is_null($this->numberOfVAppTemplates)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVAppTemplates', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVAppTemplates=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVAppTemplates, $input_name='numberOfVAppTemplates')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->cpuLimitMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuLimitMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuLimitMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuLimitMhz, $input_name='cpuLimitMhz')));
        }
        if (!is_null($this->memoryAllocationMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryAllocationMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryAllocationMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryAllocationMB, $input_name='memoryAllocationMB')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->providerVdcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'providerVdcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'providerVdcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->providerVdcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='providerVdcName')));
        }
        if (!is_null($this->cpuUsedMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuUsedMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuUsedMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuUsedMhz, $input_name='cpuUsedMhz')));
        }
        if (!is_null($this->networkPool)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'networkPool', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'networkPool=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->networkPool, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='networkPool')));
        }
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->memoryLimitMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryLimitMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryLimitMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryLimitMB, $input_name='memoryLimitMB')));
        }
        if (!is_null($this->providerVdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'providerVdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'providerVdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->providerVdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='providerVdc')));
        }
        if (!is_null($this->numberOfVApps)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVApps', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVApps=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVApps, $input_name='numberOfVApps')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->storageUsedMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageUsedMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageUsedMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageUsedMB, $input_name='storageUsedMB')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->numberOfDisks)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfDisks', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfDisks=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfDisks, $input_name='numberOfDisks')));
        }
        if (!is_null($this->storageLimitMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageLimitMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageLimitMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageLimitMB, $input_name='storageLimitMB')));
        }
        if (!is_null($this->numberOfMedia)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfMedia', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfMedia=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfMedia, $input_name='numberOfMedia')));
        }
        if (!is_null($this->cpuAllocationMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuAllocationMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuAllocationMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuAllocationMhz, $input_name='cpuAllocationMhz')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function hasContent() {
        if (
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
        $ndnumberOfStorageProfiles = $attrs->getNamedItem('numberOfStorageProfiles');
        if (!is_null($ndnumberOfStorageProfiles)) {
            $this->numberOfStorageProfiles = sprintf('%d', $ndnumberOfStorageProfiles->value);
            if (isset($ndnumberOfStorageProfiles->prefix)) {
                $this->namespace['numberOfStorageProfiles'] = $ndnumberOfStorageProfiles->prefix;
                $nsUri = $ndnumberOfStorageProfiles->lookupNamespaceURI($ndnumberOfStorageProfiles->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfStorageProfiles');
        } else {
            $this->numberOfStorageProfiles = null;
        }
        $ndmemoryUsedMB = $attrs->getNamedItem('memoryUsedMB');
        if (!is_null($ndmemoryUsedMB)) {
            $this->memoryUsedMB = sprintf('%d', $ndmemoryUsedMB->value);
            if (isset($ndmemoryUsedMB->prefix)) {
                $this->namespace['memoryUsedMB'] = $ndmemoryUsedMB->prefix;
                $nsUri = $ndmemoryUsedMB->lookupNamespaceURI($ndmemoryUsedMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryUsedMB');
        } else {
            $this->memoryUsedMB = null;
        }
        $ndorgName = $attrs->getNamedItem('orgName');
        if (!is_null($ndorgName)) {
            $this->orgName = $ndorgName->value;
            if (isset($ndorgName->prefix)) {
                $this->namespace['orgName'] = $ndorgName->prefix;
                $nsUri = $ndorgName->lookupNamespaceURI($ndorgName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'orgName');
        } else {
            $this->orgName = null;
        }
        $ndisSystemVdc = $attrs->getNamedItem('isSystemVdc');
        if (!is_null($ndisSystemVdc)) {
            $this->isSystemVdc = VMware_VCloud_API_Helper::get_boolean($ndisSystemVdc->value);
            if (isset($ndisSystemVdc->prefix)) {
                $this->namespace['isSystemVdc'] = $ndisSystemVdc->prefix;
                $nsUri = $ndisSystemVdc->lookupNamespaceURI($ndisSystemVdc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isSystemVdc');
        } else {
            $this->isSystemVdc = null;
        }
        $ndstorageAllocationMB = $attrs->getNamedItem('storageAllocationMB');
        if (!is_null($ndstorageAllocationMB)) {
            $this->storageAllocationMB = sprintf('%d', $ndstorageAllocationMB->value);
            if (isset($ndstorageAllocationMB->prefix)) {
                $this->namespace['storageAllocationMB'] = $ndstorageAllocationMB->prefix;
                $nsUri = $ndstorageAllocationMB->lookupNamespaceURI($ndstorageAllocationMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageAllocationMB');
        } else {
            $this->storageAllocationMB = null;
        }
        $ndnumberOfVAppTemplates = $attrs->getNamedItem('numberOfVAppTemplates');
        if (!is_null($ndnumberOfVAppTemplates)) {
            $this->numberOfVAppTemplates = sprintf('%d', $ndnumberOfVAppTemplates->value);
            if (isset($ndnumberOfVAppTemplates->prefix)) {
                $this->namespace['numberOfVAppTemplates'] = $ndnumberOfVAppTemplates->prefix;
                $nsUri = $ndnumberOfVAppTemplates->lookupNamespaceURI($ndnumberOfVAppTemplates->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVAppTemplates');
        } else {
            $this->numberOfVAppTemplates = null;
        }
        $ndisEnabled = $attrs->getNamedItem('isEnabled');
        if (!is_null($ndisEnabled)) {
            $this->isEnabled = VMware_VCloud_API_Helper::get_boolean($ndisEnabled->value);
            if (isset($ndisEnabled->prefix)) {
                $this->namespace['isEnabled'] = $ndisEnabled->prefix;
                $nsUri = $ndisEnabled->lookupNamespaceURI($ndisEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isEnabled');
        } else {
            $this->isEnabled = null;
        }
        $ndcpuLimitMhz = $attrs->getNamedItem('cpuLimitMhz');
        if (!is_null($ndcpuLimitMhz)) {
            $this->cpuLimitMhz = sprintf('%d', $ndcpuLimitMhz->value);
            if (isset($ndcpuLimitMhz->prefix)) {
                $this->namespace['cpuLimitMhz'] = $ndcpuLimitMhz->prefix;
                $nsUri = $ndcpuLimitMhz->lookupNamespaceURI($ndcpuLimitMhz->prefix);
            }
            $node->removeAttributeNS($nsUri, 'cpuLimitMhz');
        } else {
            $this->cpuLimitMhz = null;
        }
        $ndmemoryAllocationMB = $attrs->getNamedItem('memoryAllocationMB');
        if (!is_null($ndmemoryAllocationMB)) {
            $this->memoryAllocationMB = sprintf('%d', $ndmemoryAllocationMB->value);
            if (isset($ndmemoryAllocationMB->prefix)) {
                $this->namespace['memoryAllocationMB'] = $ndmemoryAllocationMB->prefix;
                $nsUri = $ndmemoryAllocationMB->lookupNamespaceURI($ndmemoryAllocationMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryAllocationMB');
        } else {
            $this->memoryAllocationMB = null;
        }
        $ndisBusy = $attrs->getNamedItem('isBusy');
        if (!is_null($ndisBusy)) {
            $this->isBusy = VMware_VCloud_API_Helper::get_boolean($ndisBusy->value);
            if (isset($ndisBusy->prefix)) {
                $this->namespace['isBusy'] = $ndisBusy->prefix;
                $nsUri = $ndisBusy->lookupNamespaceURI($ndisBusy->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isBusy');
        } else {
            $this->isBusy = null;
        }
        $ndproviderVdcName = $attrs->getNamedItem('providerVdcName');
        if (!is_null($ndproviderVdcName)) {
            $this->providerVdcName = $ndproviderVdcName->value;
            if (isset($ndproviderVdcName->prefix)) {
                $this->namespace['providerVdcName'] = $ndproviderVdcName->prefix;
                $nsUri = $ndproviderVdcName->lookupNamespaceURI($ndproviderVdcName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'providerVdcName');
        } else {
            $this->providerVdcName = null;
        }
        $ndcpuUsedMhz = $attrs->getNamedItem('cpuUsedMhz');
        if (!is_null($ndcpuUsedMhz)) {
            $this->cpuUsedMhz = sprintf('%d', $ndcpuUsedMhz->value);
            if (isset($ndcpuUsedMhz->prefix)) {
                $this->namespace['cpuUsedMhz'] = $ndcpuUsedMhz->prefix;
                $nsUri = $ndcpuUsedMhz->lookupNamespaceURI($ndcpuUsedMhz->prefix);
            }
            $node->removeAttributeNS($nsUri, 'cpuUsedMhz');
        } else {
            $this->cpuUsedMhz = null;
        }
        $ndnetworkPool = $attrs->getNamedItem('networkPool');
        if (!is_null($ndnetworkPool)) {
            $this->networkPool = $ndnetworkPool->value;
            if (isset($ndnetworkPool->prefix)) {
                $this->namespace['networkPool'] = $ndnetworkPool->prefix;
                $nsUri = $ndnetworkPool->lookupNamespaceURI($ndnetworkPool->prefix);
            }
            $node->removeAttributeNS($nsUri, 'networkPool');
        } else {
            $this->networkPool = null;
        }
        $ndstatus = $attrs->getNamedItem('status');
        if (!is_null($ndstatus)) {
            $this->status = $ndstatus->value;
            if (isset($ndstatus->prefix)) {
                $this->namespace['status'] = $ndstatus->prefix;
                $nsUri = $ndstatus->lookupNamespaceURI($ndstatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'status');
        } else {
            $this->status = null;
        }
        $ndmemoryLimitMB = $attrs->getNamedItem('memoryLimitMB');
        if (!is_null($ndmemoryLimitMB)) {
            $this->memoryLimitMB = sprintf('%d', $ndmemoryLimitMB->value);
            if (isset($ndmemoryLimitMB->prefix)) {
                $this->namespace['memoryLimitMB'] = $ndmemoryLimitMB->prefix;
                $nsUri = $ndmemoryLimitMB->lookupNamespaceURI($ndmemoryLimitMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryLimitMB');
        } else {
            $this->memoryLimitMB = null;
        }
        $ndproviderVdc = $attrs->getNamedItem('providerVdc');
        if (!is_null($ndproviderVdc)) {
            $this->providerVdc = $ndproviderVdc->value;
            if (isset($ndproviderVdc->prefix)) {
                $this->namespace['providerVdc'] = $ndproviderVdc->prefix;
                $nsUri = $ndproviderVdc->lookupNamespaceURI($ndproviderVdc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'providerVdc');
        } else {
            $this->providerVdc = null;
        }
        $ndnumberOfVApps = $attrs->getNamedItem('numberOfVApps');
        if (!is_null($ndnumberOfVApps)) {
            $this->numberOfVApps = sprintf('%d', $ndnumberOfVApps->value);
            if (isset($ndnumberOfVApps->prefix)) {
                $this->namespace['numberOfVApps'] = $ndnumberOfVApps->prefix;
                $nsUri = $ndnumberOfVApps->lookupNamespaceURI($ndnumberOfVApps->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVApps');
        } else {
            $this->numberOfVApps = null;
        }
        $ndorg = $attrs->getNamedItem('org');
        if (!is_null($ndorg)) {
            $this->org = $ndorg->value;
            if (isset($ndorg->prefix)) {
                $this->namespace['org'] = $ndorg->prefix;
                $nsUri = $ndorg->lookupNamespaceURI($ndorg->prefix);
            }
            $node->removeAttributeNS($nsUri, 'org');
        } else {
            $this->org = null;
        }
        $ndstorageUsedMB = $attrs->getNamedItem('storageUsedMB');
        if (!is_null($ndstorageUsedMB)) {
            $this->storageUsedMB = sprintf('%d', $ndstorageUsedMB->value);
            if (isset($ndstorageUsedMB->prefix)) {
                $this->namespace['storageUsedMB'] = $ndstorageUsedMB->prefix;
                $nsUri = $ndstorageUsedMB->lookupNamespaceURI($ndstorageUsedMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageUsedMB');
        } else {
            $this->storageUsedMB = null;
        }
        $ndname = $attrs->getNamedItem('name');
        if (!is_null($ndname)) {
            $this->name = $ndname->value;
            if (isset($ndname->prefix)) {
                $this->namespace['name'] = $ndname->prefix;
                $nsUri = $ndname->lookupNamespaceURI($ndname->prefix);
            }
            $node->removeAttributeNS($nsUri, 'name');
        } else {
            $this->name = null;
        }
        $ndnumberOfDisks = $attrs->getNamedItem('numberOfDisks');
        if (!is_null($ndnumberOfDisks)) {
            $this->numberOfDisks = sprintf('%d', $ndnumberOfDisks->value);
            if (isset($ndnumberOfDisks->prefix)) {
                $this->namespace['numberOfDisks'] = $ndnumberOfDisks->prefix;
                $nsUri = $ndnumberOfDisks->lookupNamespaceURI($ndnumberOfDisks->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfDisks');
        } else {
            $this->numberOfDisks = null;
        }
        $ndstorageLimitMB = $attrs->getNamedItem('storageLimitMB');
        if (!is_null($ndstorageLimitMB)) {
            $this->storageLimitMB = sprintf('%d', $ndstorageLimitMB->value);
            if (isset($ndstorageLimitMB->prefix)) {
                $this->namespace['storageLimitMB'] = $ndstorageLimitMB->prefix;
                $nsUri = $ndstorageLimitMB->lookupNamespaceURI($ndstorageLimitMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageLimitMB');
        } else {
            $this->storageLimitMB = null;
        }
        $ndnumberOfMedia = $attrs->getNamedItem('numberOfMedia');
        if (!is_null($ndnumberOfMedia)) {
            $this->numberOfMedia = sprintf('%d', $ndnumberOfMedia->value);
            if (isset($ndnumberOfMedia->prefix)) {
                $this->namespace['numberOfMedia'] = $ndnumberOfMedia->prefix;
                $nsUri = $ndnumberOfMedia->lookupNamespaceURI($ndnumberOfMedia->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfMedia');
        } else {
            $this->numberOfMedia = null;
        }
        $ndcpuAllocationMhz = $attrs->getNamedItem('cpuAllocationMhz');
        if (!is_null($ndcpuAllocationMhz)) {
            $this->cpuAllocationMhz = sprintf('%d', $ndcpuAllocationMhz->value);
            if (isset($ndcpuAllocationMhz->prefix)) {
                $this->namespace['cpuAllocationMhz'] = $ndcpuAllocationMhz->prefix;
                $nsUri = $ndcpuAllocationMhz->lookupNamespaceURI($ndcpuAllocationMhz->prefix);
            }
            $node->removeAttributeNS($nsUri, 'cpuAllocationMhz');
        } else {
            $this->cpuAllocationMhz = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}