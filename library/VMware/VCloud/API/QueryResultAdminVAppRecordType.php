<?php
class VMware_VCloud_API_QueryResultAdminVAppRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $status = null;
    protected $isDeployed = null;
    protected $name = null;
    protected $numberOfVMs = null;
    protected $isEnabled = null;
    protected $cpuAllocationMhz = null;
    protected $vdcName = null;
    protected $vdc = null;
    protected $ownerName = null;
    protected $isBusy = null;
    protected $memoryAllocationMB = null;
    protected $org = null;
    protected $isInMaintenanceMode = null;
    protected $creationDate = null;
    protected $isVdcEnabled = null;
    protected $isExpired = null;
    protected $storageKB = null;
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
    * @param string $status - [optional] an attribute, 
    * @param boolean $isDeployed - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param int $numberOfVMs - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param int $cpuAllocationMhz - [optional] an attribute, 
    * @param string $vdcName - [optional] an attribute, 
    * @param string $vdc - [optional] an attribute, 
    * @param string $ownerName - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param int $memoryAllocationMB - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param boolean $isInMaintenanceMode - [optional] an attribute, 
    * @param dateTime $creationDate - [optional] an attribute, 
    * @param boolean $isVdcEnabled - [optional] an attribute, 
    * @param boolean $isExpired - [optional] an attribute, 
    * @param long $storageKB - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $status=null, $isDeployed=null, $name=null, $numberOfVMs=null, $isEnabled=null, $cpuAllocationMhz=null, $vdcName=null, $vdc=null, $ownerName=null, $isBusy=null, $memoryAllocationMB=null, $org=null, $isInMaintenanceMode=null, $creationDate=null, $isVdcEnabled=null, $isExpired=null, $storageKB=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->status = $status;
        $this->isDeployed = $isDeployed;
        $this->name = $name;
        $this->numberOfVMs = $numberOfVMs;
        $this->isEnabled = $isEnabled;
        $this->cpuAllocationMhz = $cpuAllocationMhz;
        $this->vdcName = $vdcName;
        $this->vdc = $vdc;
        $this->ownerName = $ownerName;
        $this->isBusy = $isBusy;
        $this->memoryAllocationMB = $memoryAllocationMB;
        $this->org = $org;
        $this->isInMaintenanceMode = $isInMaintenanceMode;
        $this->creationDate = $creationDate;
        $this->isVdcEnabled = $isVdcEnabled;
        $this->isExpired = $isExpired;
        $this->storageKB = $storageKB;
        $this->tagName = 'AdminVAppRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_isDeployed(){
        return $this->isDeployed;
    }
    public function set_isDeployed($isDeployed) {
        $this->isDeployed = $isDeployed;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_numberOfVMs(){
        return $this->numberOfVMs;
    }
    public function set_numberOfVMs($numberOfVMs) {
        $this->numberOfVMs = $numberOfVMs;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_cpuAllocationMhz(){
        return $this->cpuAllocationMhz;
    }
    public function set_cpuAllocationMhz($cpuAllocationMhz) {
        $this->cpuAllocationMhz = $cpuAllocationMhz;
    }
    public function get_vdcName(){
        return $this->vdcName;
    }
    public function set_vdcName($vdcName) {
        $this->vdcName = $vdcName;
    }
    public function get_vdc(){
        return $this->vdc;
    }
    public function set_vdc($vdc) {
        $this->vdc = $vdc;
    }
    public function get_ownerName(){
        return $this->ownerName;
    }
    public function set_ownerName($ownerName) {
        $this->ownerName = $ownerName;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
    }
    public function get_memoryAllocationMB(){
        return $this->memoryAllocationMB;
    }
    public function set_memoryAllocationMB($memoryAllocationMB) {
        $this->memoryAllocationMB = $memoryAllocationMB;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_isInMaintenanceMode(){
        return $this->isInMaintenanceMode;
    }
    public function set_isInMaintenanceMode($isInMaintenanceMode) {
        $this->isInMaintenanceMode = $isInMaintenanceMode;
    }
    public function get_creationDate(){
        return $this->creationDate;
    }
    public function set_creationDate($creationDate) {
        $this->creationDate = $creationDate;
    }
    public function get_isVdcEnabled(){
        return $this->isVdcEnabled;
    }
    public function set_isVdcEnabled($isVdcEnabled) {
        $this->isVdcEnabled = $isVdcEnabled;
    }
    public function get_isExpired(){
        return $this->isExpired;
    }
    public function set_isExpired($isExpired) {
        $this->isExpired = $isExpired;
    }
    public function get_storageKB(){
        return $this->storageKB;
    }
    public function set_storageKB($storageKB) {
        $this->storageKB = $storageKB;
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
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->isDeployed)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDeployed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDeployed=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDeployed, $input_name='isDeployed')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->numberOfVMs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVMs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVMs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVMs, $input_name='numberOfVMs')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->cpuAllocationMhz)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'cpuAllocationMhz', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'cpuAllocationMhz=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->cpuAllocationMhz, $input_name='cpuAllocationMhz')));
        }
        if (!is_null($this->vdcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcName')));
        }
        if (!is_null($this->vdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdc')));
        }
        if (!is_null($this->ownerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ownerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ownerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ownerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ownerName')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->memoryAllocationMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryAllocationMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryAllocationMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryAllocationMB, $input_name='memoryAllocationMB')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->isInMaintenanceMode)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isInMaintenanceMode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isInMaintenanceMode=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isInMaintenanceMode, $input_name='isInMaintenanceMode')));
        }
        if (!is_null($this->creationDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'creationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'creationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->creationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='creationDate')));
        }
        if (!is_null($this->isVdcEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isVdcEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isVdcEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isVdcEnabled, $input_name='isVdcEnabled')));
        }
        if (!is_null($this->isExpired)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isExpired', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isExpired=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isExpired, $input_name='isExpired')));
        }
        if (!is_null($this->storageKB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageKB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageKB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageKB, $input_name='storageKB')));
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
        $ndisDeployed = $attrs->getNamedItem('isDeployed');
        if (!is_null($ndisDeployed)) {
            $this->isDeployed = VMware_VCloud_API_Helper::get_boolean($ndisDeployed->value);
            if (isset($ndisDeployed->prefix)) {
                $this->namespace['isDeployed'] = $ndisDeployed->prefix;
                $nsUri = $ndisDeployed->lookupNamespaceURI($ndisDeployed->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isDeployed');
        } else {
            $this->isDeployed = null;
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
        $ndnumberOfVMs = $attrs->getNamedItem('numberOfVMs');
        if (!is_null($ndnumberOfVMs)) {
            $this->numberOfVMs = sprintf('%d', $ndnumberOfVMs->value);
            if (isset($ndnumberOfVMs->prefix)) {
                $this->namespace['numberOfVMs'] = $ndnumberOfVMs->prefix;
                $nsUri = $ndnumberOfVMs->lookupNamespaceURI($ndnumberOfVMs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVMs');
        } else {
            $this->numberOfVMs = null;
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
        $ndvdcName = $attrs->getNamedItem('vdcName');
        if (!is_null($ndvdcName)) {
            $this->vdcName = $ndvdcName->value;
            if (isset($ndvdcName->prefix)) {
                $this->namespace['vdcName'] = $ndvdcName->prefix;
                $nsUri = $ndvdcName->lookupNamespaceURI($ndvdcName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdcName');
        } else {
            $this->vdcName = null;
        }
        $ndvdc = $attrs->getNamedItem('vdc');
        if (!is_null($ndvdc)) {
            $this->vdc = $ndvdc->value;
            if (isset($ndvdc->prefix)) {
                $this->namespace['vdc'] = $ndvdc->prefix;
                $nsUri = $ndvdc->lookupNamespaceURI($ndvdc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdc');
        } else {
            $this->vdc = null;
        }
        $ndownerName = $attrs->getNamedItem('ownerName');
        if (!is_null($ndownerName)) {
            $this->ownerName = $ndownerName->value;
            if (isset($ndownerName->prefix)) {
                $this->namespace['ownerName'] = $ndownerName->prefix;
                $nsUri = $ndownerName->lookupNamespaceURI($ndownerName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ownerName');
        } else {
            $this->ownerName = null;
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
        $ndisInMaintenanceMode = $attrs->getNamedItem('isInMaintenanceMode');
        if (!is_null($ndisInMaintenanceMode)) {
            $this->isInMaintenanceMode = VMware_VCloud_API_Helper::get_boolean($ndisInMaintenanceMode->value);
            if (isset($ndisInMaintenanceMode->prefix)) {
                $this->namespace['isInMaintenanceMode'] = $ndisInMaintenanceMode->prefix;
                $nsUri = $ndisInMaintenanceMode->lookupNamespaceURI($ndisInMaintenanceMode->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isInMaintenanceMode');
        } else {
            $this->isInMaintenanceMode = null;
        }
        $ndcreationDate = $attrs->getNamedItem('creationDate');
        if (!is_null($ndcreationDate)) {
            $this->creationDate = $ndcreationDate->value;
            if (isset($ndcreationDate->prefix)) {
                $this->namespace['creationDate'] = $ndcreationDate->prefix;
                $nsUri = $ndcreationDate->lookupNamespaceURI($ndcreationDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'creationDate');
        } else {
            $this->creationDate = null;
        }
        $ndisVdcEnabled = $attrs->getNamedItem('isVdcEnabled');
        if (!is_null($ndisVdcEnabled)) {
            $this->isVdcEnabled = VMware_VCloud_API_Helper::get_boolean($ndisVdcEnabled->value);
            if (isset($ndisVdcEnabled->prefix)) {
                $this->namespace['isVdcEnabled'] = $ndisVdcEnabled->prefix;
                $nsUri = $ndisVdcEnabled->lookupNamespaceURI($ndisVdcEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isVdcEnabled');
        } else {
            $this->isVdcEnabled = null;
        }
        $ndisExpired = $attrs->getNamedItem('isExpired');
        if (!is_null($ndisExpired)) {
            $this->isExpired = VMware_VCloud_API_Helper::get_boolean($ndisExpired->value);
            if (isset($ndisExpired->prefix)) {
                $this->namespace['isExpired'] = $ndisExpired->prefix;
                $nsUri = $ndisExpired->lookupNamespaceURI($ndisExpired->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isExpired');
        } else {
            $this->isExpired = null;
        }
        $ndstorageKB = $attrs->getNamedItem('storageKB');
        if (!is_null($ndstorageKB)) {
            $this->storageKB = sprintf('%d', $ndstorageKB->value);
            if (isset($ndstorageKB->prefix)) {
                $this->namespace['storageKB'] = $ndstorageKB->prefix;
                $nsUri = $ndstorageKB->lookupNamespaceURI($ndstorageKB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageKB');
        } else {
            $this->storageKB = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}