<?php
class VMware_VCloud_API_QueryResultVMWProviderVdcRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $numberOfVdcs = null;
    protected $status = null;
    protected $numberOfStorageProfiles = null;
    protected $vcpuRatingMhz = null;
    protected $storageUsedMB = null;
    protected $name = null;
    protected $memoryLimitMB = null;
    protected $isEnabled = null;
    protected $storageLimitMB = null;
    protected $numberOfDatastores = null;
    protected $cpuLimitMhz = null;
    protected $memoryUsedMB = null;
    protected $cpuUsedMhz = null;
    protected $cpuAllocationMhz = null;
    protected $memoryAllocationMB = null;
    protected $isBusy = null;
    protected $storageAllocationMB = null;
    protected $isDeleted = null;
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
    * @param int $numberOfVdcs - [optional] an attribute, 
    * @param string $status - [optional] an attribute, 
    * @param int $numberOfStorageProfiles - [optional] an attribute, 
    * @param int $vcpuRatingMhz - [optional] an attribute, 
    * @param long $storageUsedMB - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param long $memoryLimitMB - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param long $storageLimitMB - [optional] an attribute, 
    * @param int $numberOfDatastores - [optional] an attribute, 
    * @param long $cpuLimitMhz - [optional] an attribute, 
    * @param long $memoryUsedMB - [optional] an attribute, 
    * @param long $cpuUsedMhz - [optional] an attribute, 
    * @param long $cpuAllocationMhz - [optional] an attribute, 
    * @param long $memoryAllocationMB - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param long $storageAllocationMB - [optional] an attribute, 
    * @param boolean $isDeleted - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $numberOfVdcs=null, $status=null, $numberOfStorageProfiles=null, $vcpuRatingMhz=null, $storageUsedMB=null, $name=null, $memoryLimitMB=null, $isEnabled=null, $storageLimitMB=null, $numberOfDatastores=null, $cpuLimitMhz=null, $memoryUsedMB=null, $cpuUsedMhz=null, $cpuAllocationMhz=null, $memoryAllocationMB=null, $isBusy=null, $storageAllocationMB=null, $isDeleted=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->numberOfVdcs = $numberOfVdcs;
        $this->status = $status;
        $this->numberOfStorageProfiles = $numberOfStorageProfiles;
        $this->vcpuRatingMhz = $vcpuRatingMhz;
        $this->storageUsedMB = $storageUsedMB;
        $this->name = $name;
        $this->memoryLimitMB = $memoryLimitMB;
        $this->isEnabled = $isEnabled;
        $this->storageLimitMB = $storageLimitMB;
        $this->numberOfDatastores = $numberOfDatastores;
        $this->cpuLimitMhz = $cpuLimitMhz;
        $this->memoryUsedMB = $memoryUsedMB;
        $this->cpuUsedMhz = $cpuUsedMhz;
        $this->cpuAllocationMhz = $cpuAllocationMhz;
        $this->memoryAllocationMB = $memoryAllocationMB;
        $this->isBusy = $isBusy;
        $this->storageAllocationMB = $storageAllocationMB;
        $this->isDeleted = $isDeleted;
        $this->tagName = 'VMWProviderVdcRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_numberOfVdcs(){
        return $this->numberOfVdcs;
    }
    public function set_numberOfVdcs($numberOfVdcs) {
        $this->numberOfVdcs = $numberOfVdcs;
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_numberOfStorageProfiles(){
        return $this->numberOfStorageProfiles;
    }
    public function set_numberOfStorageProfiles($numberOfStorageProfiles) {
        $this->numberOfStorageProfiles = $numberOfStorageProfiles;
    }
    public function get_vcpuRatingMhz(){
        return $this->vcpuRatingMhz;
    }
    public function set_vcpuRatingMhz($vcpuRatingMhz) {
        $this->vcpuRatingMhz = $vcpuRatingMhz;
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
    public function get_memoryLimitMB(){
        return $this->memoryLimitMB;
    }
    public function set_memoryLimitMB($memoryLimitMB) {
        $this->memoryLimitMB = $memoryLimitMB;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_storageLimitMB(){
        return $this->storageLimitMB;
    }
    public function set_storageLimitMB($storageLimitMB) {
        $this->storageLimitMB = $storageLimitMB;
    }
    public function get_numberOfDatastores(){
        return $this->numberOfDatastores;
    }
    public function set_numberOfDatastores($numberOfDatastores) {
        $this->numberOfDatastores = $numberOfDatastores;
    }
    public function get_cpuLimitMhz(){
        return $this->cpuLimitMhz;
    }
    public function set_cpuLimitMhz($cpuLimitMhz) {
        $this->cpuLimitMhz = $cpuLimitMhz;
    }
    public function get_memoryUsedMB(){
        return $this->memoryUsedMB;
    }
    public function set_memoryUsedMB($memoryUsedMB) {
        $this->memoryUsedMB = $memoryUsedMB;
    }
    public function get_cpuUsedMhz(){
        return $this->cpuUsedMhz;
    }
    public function set_cpuUsedMhz($cpuUsedMhz) {
        $this->cpuUsedMhz = $cpuUsedMhz;
    }
    public function get_cpuAllocationMhz(){
        return $this->cpuAllocationMhz;
    }
    public function set_cpuAllocationMhz($cpuAllocationMhz) {
        $this->cpuAllocationMhz = $cpuAllocationMhz;
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
    public function get_storageAllocationMB(){
        return $this->storageAllocationMB;
    }
    public function set_storageAllocationMB($storageAllocationMB) {
        $this->storageAllocationMB = $storageAllocationMB;
    }
    public function get_isDeleted(){
        return $this->isDeleted;
    }
    public function set_isDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
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
        if (!is_null($this->numberOfVdcs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVdcs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVdcs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVdcs, $input_name='numberOfVdcs')));
        }
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->numberOfStorageProfiles)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfStorageProfiles', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfStorageProfiles=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfStorageProfiles, $input_name='numberOfStorageProfiles')));
        }
        if (!is_null($this->vcpuRatingMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vcpuRatingMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vcpuRatingMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->vcpuRatingMhz, $input_name='vcpuRatingMhz')));
        }
        if (!is_null($this->storageUsedMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageUsedMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageUsedMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageUsedMB, $input_name='storageUsedMB')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->memoryLimitMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryLimitMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryLimitMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryLimitMB, $input_name='memoryLimitMB')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->storageLimitMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageLimitMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageLimitMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageLimitMB, $input_name='storageLimitMB')));
        }
        if (!is_null($this->numberOfDatastores)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfDatastores', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfDatastores=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfDatastores, $input_name='numberOfDatastores')));
        }
        if (!is_null($this->cpuLimitMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuLimitMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuLimitMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuLimitMhz, $input_name='cpuLimitMhz')));
        }
        if (!is_null($this->memoryUsedMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryUsedMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryUsedMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryUsedMB, $input_name='memoryUsedMB')));
        }
        if (!is_null($this->cpuUsedMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuUsedMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuUsedMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuUsedMhz, $input_name='cpuUsedMhz')));
        }
        if (!is_null($this->cpuAllocationMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuAllocationMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuAllocationMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuAllocationMhz, $input_name='cpuAllocationMhz')));
        }
        if (!is_null($this->memoryAllocationMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryAllocationMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryAllocationMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryAllocationMB, $input_name='memoryAllocationMB')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->storageAllocationMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageAllocationMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageAllocationMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageAllocationMB, $input_name='storageAllocationMB')));
        }
        if (!is_null($this->isDeleted)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDeleted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDeleted=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDeleted, $input_name='isDeleted')));
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
        $ndnumberOfVdcs = $attrs->getNamedItem('numberOfVdcs');
        if (!is_null($ndnumberOfVdcs)) {
            $this->numberOfVdcs = sprintf('%d', $ndnumberOfVdcs->value);
            if (isset($ndnumberOfVdcs->prefix)) {
                $this->namespace['numberOfVdcs'] = $ndnumberOfVdcs->prefix;
                $nsUri = $ndnumberOfVdcs->lookupNamespaceURI($ndnumberOfVdcs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVdcs');
        } else {
            $this->numberOfVdcs = null;
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
        $ndvcpuRatingMhz = $attrs->getNamedItem('vcpuRatingMhz');
        if (!is_null($ndvcpuRatingMhz)) {
            $this->vcpuRatingMhz = sprintf('%d', $ndvcpuRatingMhz->value);
            if (isset($ndvcpuRatingMhz->prefix)) {
                $this->namespace['vcpuRatingMhz'] = $ndvcpuRatingMhz->prefix;
                $nsUri = $ndvcpuRatingMhz->lookupNamespaceURI($ndvcpuRatingMhz->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vcpuRatingMhz');
        } else {
            $this->vcpuRatingMhz = null;
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
        $ndnumberOfDatastores = $attrs->getNamedItem('numberOfDatastores');
        if (!is_null($ndnumberOfDatastores)) {
            $this->numberOfDatastores = sprintf('%d', $ndnumberOfDatastores->value);
            if (isset($ndnumberOfDatastores->prefix)) {
                $this->namespace['numberOfDatastores'] = $ndnumberOfDatastores->prefix;
                $nsUri = $ndnumberOfDatastores->lookupNamespaceURI($ndnumberOfDatastores->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfDatastores');
        } else {
            $this->numberOfDatastores = null;
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
        $ndisDeleted = $attrs->getNamedItem('isDeleted');
        if (!is_null($ndisDeleted)) {
            $this->isDeleted = VMware_VCloud_API_Helper::get_boolean($ndisDeleted->value);
            if (isset($ndisDeleted->prefix)) {
                $this->namespace['isDeleted'] = $ndisDeleted->prefix;
                $nsUri = $ndisDeleted->lookupNamespaceURI($ndisDeleted->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isDeleted');
        } else {
            $this->isDeleted = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}