<?php
class VMware_VCloud_API_QueryResultAdminDiskRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $status = null;
    protected $storageProfileName = null;
    protected $vc = null;
    protected $name = null;
    protected $storageProfile = null;
    protected $datastoreName = null;
    protected $busType = null;
    protected $vdcName = null;
    protected $vdc = null;
    protected $task = null;
    protected $ownerName = null;
    protected $sizeB = null;
    protected $isAttached = null;
    protected $org = null;
    protected $datastore = null;
    protected $busSubType = null;
    protected $busTypeDesc = null;
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
    * @param string $storageProfileName - [optional] an attribute, 
    * @param string $vc - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $storageProfile - [optional] an attribute, 
    * @param string $datastoreName - [optional] an attribute, 
    * @param string $busType - [optional] an attribute, 
    * @param string $vdcName - [optional] an attribute, 
    * @param string $vdc - [optional] an attribute, 
    * @param string $task - [optional] an attribute, 
    * @param string $ownerName - [optional] an attribute, 
    * @param long $sizeB - [optional] an attribute, 
    * @param boolean $isAttached - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param string $datastore - [optional] an attribute, 
    * @param string $busSubType - [optional] an attribute, 
    * @param string $busTypeDesc - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $status=null, $storageProfileName=null, $vc=null, $name=null, $storageProfile=null, $datastoreName=null, $busType=null, $vdcName=null, $vdc=null, $task=null, $ownerName=null, $sizeB=null, $isAttached=null, $org=null, $datastore=null, $busSubType=null, $busTypeDesc=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->status = $status;
        $this->storageProfileName = $storageProfileName;
        $this->vc = $vc;
        $this->name = $name;
        $this->storageProfile = $storageProfile;
        $this->datastoreName = $datastoreName;
        $this->busType = $busType;
        $this->vdcName = $vdcName;
        $this->vdc = $vdc;
        $this->task = $task;
        $this->ownerName = $ownerName;
        $this->sizeB = $sizeB;
        $this->isAttached = $isAttached;
        $this->org = $org;
        $this->datastore = $datastore;
        $this->busSubType = $busSubType;
        $this->busTypeDesc = $busTypeDesc;
        $this->tagName = 'AdminDiskRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_storageProfileName(){
        return $this->storageProfileName;
    }
    public function set_storageProfileName($storageProfileName) {
        $this->storageProfileName = $storageProfileName;
    }
    public function get_vc(){
        return $this->vc;
    }
    public function set_vc($vc) {
        $this->vc = $vc;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_storageProfile(){
        return $this->storageProfile;
    }
    public function set_storageProfile($storageProfile) {
        $this->storageProfile = $storageProfile;
    }
    public function get_datastoreName(){
        return $this->datastoreName;
    }
    public function set_datastoreName($datastoreName) {
        $this->datastoreName = $datastoreName;
    }
    public function get_busType(){
        return $this->busType;
    }
    public function set_busType($busType) {
        $this->busType = $busType;
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
    public function get_task(){
        return $this->task;
    }
    public function set_task($task) {
        $this->task = $task;
    }
    public function get_ownerName(){
        return $this->ownerName;
    }
    public function set_ownerName($ownerName) {
        $this->ownerName = $ownerName;
    }
    public function get_sizeB(){
        return $this->sizeB;
    }
    public function set_sizeB($sizeB) {
        $this->sizeB = $sizeB;
    }
    public function get_isAttached(){
        return $this->isAttached;
    }
    public function set_isAttached($isAttached) {
        $this->isAttached = $isAttached;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_datastore(){
        return $this->datastore;
    }
    public function set_datastore($datastore) {
        $this->datastore = $datastore;
    }
    public function get_busSubType(){
        return $this->busSubType;
    }
    public function set_busSubType($busSubType) {
        $this->busSubType = $busSubType;
    }
    public function get_busTypeDesc(){
        return $this->busTypeDesc;
    }
    public function set_busTypeDesc($busTypeDesc) {
        $this->busTypeDesc = $busTypeDesc;
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
        if (!is_null($this->storageProfileName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageProfileName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageProfileName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->storageProfileName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='storageProfileName')));
        }
        if (!is_null($this->vc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vc')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->storageProfile)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageProfile', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageProfile=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->storageProfile, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='storageProfile')));
        }
        if (!is_null($this->datastoreName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'datastoreName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'datastoreName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->datastoreName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='datastoreName')));
        }
        if (!is_null($this->busType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'busType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'busType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->busType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='busType')));
        }
        if (!is_null($this->vdcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcName')));
        }
        if (!is_null($this->vdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdc')));
        }
        if (!is_null($this->task)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'task', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'task=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->task, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='task')));
        }
        if (!is_null($this->ownerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ownerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ownerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ownerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ownerName')));
        }
        if (!is_null($this->sizeB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'sizeB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'sizeB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->sizeB, $input_name='sizeB')));
        }
        if (!is_null($this->isAttached)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isAttached', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isAttached=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isAttached, $input_name='isAttached')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->datastore)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'datastore', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'datastore=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->datastore, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='datastore')));
        }
        if (!is_null($this->busSubType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'busSubType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'busSubType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->busSubType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='busSubType')));
        }
        if (!is_null($this->busTypeDesc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'busTypeDesc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'busTypeDesc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->busTypeDesc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='busTypeDesc')));
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
        $ndstorageProfileName = $attrs->getNamedItem('storageProfileName');
        if (!is_null($ndstorageProfileName)) {
            $this->storageProfileName = $ndstorageProfileName->value;
            if (isset($ndstorageProfileName->prefix)) {
                $this->namespace['storageProfileName'] = $ndstorageProfileName->prefix;
                $nsUri = $ndstorageProfileName->lookupNamespaceURI($ndstorageProfileName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageProfileName');
        } else {
            $this->storageProfileName = null;
        }
        $ndvc = $attrs->getNamedItem('vc');
        if (!is_null($ndvc)) {
            $this->vc = $ndvc->value;
            if (isset($ndvc->prefix)) {
                $this->namespace['vc'] = $ndvc->prefix;
                $nsUri = $ndvc->lookupNamespaceURI($ndvc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vc');
        } else {
            $this->vc = null;
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
        $ndstorageProfile = $attrs->getNamedItem('storageProfile');
        if (!is_null($ndstorageProfile)) {
            $this->storageProfile = $ndstorageProfile->value;
            if (isset($ndstorageProfile->prefix)) {
                $this->namespace['storageProfile'] = $ndstorageProfile->prefix;
                $nsUri = $ndstorageProfile->lookupNamespaceURI($ndstorageProfile->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageProfile');
        } else {
            $this->storageProfile = null;
        }
        $nddatastoreName = $attrs->getNamedItem('datastoreName');
        if (!is_null($nddatastoreName)) {
            $this->datastoreName = $nddatastoreName->value;
            if (isset($nddatastoreName->prefix)) {
                $this->namespace['datastoreName'] = $nddatastoreName->prefix;
                $nsUri = $nddatastoreName->lookupNamespaceURI($nddatastoreName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'datastoreName');
        } else {
            $this->datastoreName = null;
        }
        $ndbusType = $attrs->getNamedItem('busType');
        if (!is_null($ndbusType)) {
            $this->busType = $ndbusType->value;
            if (isset($ndbusType->prefix)) {
                $this->namespace['busType'] = $ndbusType->prefix;
                $nsUri = $ndbusType->lookupNamespaceURI($ndbusType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'busType');
        } else {
            $this->busType = null;
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
        $ndtask = $attrs->getNamedItem('task');
        if (!is_null($ndtask)) {
            $this->task = $ndtask->value;
            if (isset($ndtask->prefix)) {
                $this->namespace['task'] = $ndtask->prefix;
                $nsUri = $ndtask->lookupNamespaceURI($ndtask->prefix);
            }
            $node->removeAttributeNS($nsUri, 'task');
        } else {
            $this->task = null;
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
        $ndsizeB = $attrs->getNamedItem('sizeB');
        if (!is_null($ndsizeB)) {
            $this->sizeB = sprintf('%d', $ndsizeB->value);
            if (isset($ndsizeB->prefix)) {
                $this->namespace['sizeB'] = $ndsizeB->prefix;
                $nsUri = $ndsizeB->lookupNamespaceURI($ndsizeB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'sizeB');
        } else {
            $this->sizeB = null;
        }
        $ndisAttached = $attrs->getNamedItem('isAttached');
        if (!is_null($ndisAttached)) {
            $this->isAttached = VMware_VCloud_API_Helper::get_boolean($ndisAttached->value);
            if (isset($ndisAttached->prefix)) {
                $this->namespace['isAttached'] = $ndisAttached->prefix;
                $nsUri = $ndisAttached->lookupNamespaceURI($ndisAttached->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isAttached');
        } else {
            $this->isAttached = null;
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
        $nddatastore = $attrs->getNamedItem('datastore');
        if (!is_null($nddatastore)) {
            $this->datastore = $nddatastore->value;
            if (isset($nddatastore->prefix)) {
                $this->namespace['datastore'] = $nddatastore->prefix;
                $nsUri = $nddatastore->lookupNamespaceURI($nddatastore->prefix);
            }
            $node->removeAttributeNS($nsUri, 'datastore');
        } else {
            $this->datastore = null;
        }
        $ndbusSubType = $attrs->getNamedItem('busSubType');
        if (!is_null($ndbusSubType)) {
            $this->busSubType = $ndbusSubType->value;
            if (isset($ndbusSubType->prefix)) {
                $this->namespace['busSubType'] = $ndbusSubType->prefix;
                $nsUri = $ndbusSubType->lookupNamespaceURI($ndbusSubType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'busSubType');
        } else {
            $this->busSubType = null;
        }
        $ndbusTypeDesc = $attrs->getNamedItem('busTypeDesc');
        if (!is_null($ndbusTypeDesc)) {
            $this->busTypeDesc = $ndbusTypeDesc->value;
            if (isset($ndbusTypeDesc->prefix)) {
                $this->namespace['busTypeDesc'] = $ndbusTypeDesc->prefix;
                $nsUri = $ndbusTypeDesc->lookupNamespaceURI($ndbusTypeDesc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'busTypeDesc');
        } else {
            $this->busTypeDesc = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}