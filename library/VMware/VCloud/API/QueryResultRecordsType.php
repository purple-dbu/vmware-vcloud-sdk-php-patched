<?php
class VMware_VCloud_API_QueryResultRecordsType extends VMware_VCloud_API_ContainerType {
    protected $Record = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param long $total - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param int $pageSize - [optional] an attribute, 
    * @param int $page - [optional] an attribute, 
    * @param array $Record - [optional] an array of VMware_VCloud_API_QueryResultRecordType objects
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $total=null, $name=null, $pageSize=null, $page=null, $Record=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $total, $name, $pageSize, $page);
        if (!is_null($Record)) {
            $this->Record = $Record;
        }
        $this->tagName = 'QueryResultRecords';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getRecord() {
        return $this->Record;
    }
    public function setRecord($Record) { 
        $this->Record = $Record;
    }
    public function addRecord($value) { array_push($this->Record, $value); }
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
        if (isset($this->Record)) {
            foreach ($this->Record as $Record) {
                $tagName = $Record->get_tagName();
                if (empty($tagName)) {
                    $tagName = 'Record';
                }
                $out = $Record->export($tagName, $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Record) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Record') {
            $obj = new VMware_VCloud_API_QueryResultRecordType();
            $obj->build($child);
            $obj->set_tagName('Record');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['Record'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgRecord') {
            $obj = new VMware_VCloud_API_QueryResultOrgRecordType();
            $obj->build($child);
            $obj->set_tagName('OrgRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcRecord') {
            $obj = new VMware_VCloud_API_QueryResultOrgVdcRecordType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MediaRecord') {
            $obj = new VMware_VCloud_API_QueryResultMediaRecordType();
            $obj->build($child);
            $obj->set_tagName('MediaRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['MediaRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppTemplateRecord') {
            $obj = new VMware_VCloud_API_QueryResultVAppTemplateRecordType();
            $obj->build($child);
            $obj->set_tagName('VAppTemplateRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppTemplateRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppRecord') {
            $obj = new VMware_VCloud_API_QueryResultVAppRecordType();
            $obj->build($child);
            $obj->set_tagName('VAppRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VMRecord') {
            $obj = new VMware_VCloud_API_QueryResultVMRecordType();
            $obj->build($child);
            $obj->set_tagName('VMRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VMRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgNetworkRecord') {
            $obj = new VMware_VCloud_API_QueryResultOrgNetworkRecordType();
            $obj->build($child);
            $obj->set_tagName('OrgNetworkRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgNetworkRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminOrgNetworkRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminOrgNetworkRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminOrgNetworkRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminOrgNetworkRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppNetworkRecord') {
            $obj = new VMware_VCloud_API_QueryResultVAppNetworkRecordType();
            $obj->build($child);
            $obj->set_tagName('VAppNetworkRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppNetworkRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogRecord') {
            $obj = new VMware_VCloud_API_QueryResultCatalogRecordType();
            $obj->build($child);
            $obj->set_tagName('CatalogRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVdcRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminVdcRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminVdcRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVdcRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VMWProviderVdcRecord') {
            $obj = new VMware_VCloud_API_QueryResultVMWProviderVdcRecordType();
            $obj->build($child);
            $obj->set_tagName('VMWProviderVdcRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VMWProviderVdcRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkRecord') {
            $obj = new VMware_VCloud_API_QueryResultNetworkRecordType();
            $obj->build($child);
            $obj->set_tagName('NetworkRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupRecord') {
            $obj = new VMware_VCloud_API_QueryResultGroupRecordType();
            $obj->build($child);
            $obj->set_tagName('GroupRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['GroupRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UserRecord') {
            $obj = new VMware_VCloud_API_QueryResultUserRecordType();
            $obj->build($child);
            $obj->set_tagName('UserRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['UserRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StrandedUserRecord') {
            $obj = new VMware_VCloud_API_QueryResultStrandedUserRecordType();
            $obj->build($child);
            $obj->set_tagName('StrandedUserRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['StrandedUserRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RoleRecord') {
            $obj = new VMware_VCloud_API_QueryResultRoleRecordType();
            $obj->build($child);
            $obj->set_tagName('RoleRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['RoleRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllocatedExternalAddressRecord') {
            $obj = new VMware_VCloud_API_QueryResultAllocatedExternalAddressRecordType();
            $obj->build($child);
            $obj->set_tagName('AllocatedExternalAddressRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AllocatedExternalAddressRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EventRecord') {
            $obj = new VMware_VCloud_API_QueryResultEventRecordType();
            $obj->build($child);
            $obj->set_tagName('EventRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['EventRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourcePoolRecord') {
            $obj = new VMware_VCloud_API_QueryResultResourcePoolRecordType();
            $obj->build($child);
            $obj->set_tagName('ResourcePoolRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ResourcePoolRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DatastoreRecord') {
            $obj = new VMware_VCloud_API_QueryResultDatastoreRecordType();
            $obj->build($child);
            $obj->set_tagName('DatastoreRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['DatastoreRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkPoolRecord') {
            $obj = new VMware_VCloud_API_QueryResultNetworkPoolRecordType();
            $obj->build($child);
            $obj->set_tagName('NetworkPoolRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkPoolRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PortgroupRecord') {
            $obj = new VMware_VCloud_API_QueryResultPortgroupRecordType();
            $obj->build($child);
            $obj->set_tagName('PortgroupRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['PortgroupRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DvSwitchRecord') {
            $obj = new VMware_VCloud_API_QueryResultDvSwitchRecordType();
            $obj->build($child);
            $obj->set_tagName('DvSwitchRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['DvSwitchRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CellRecord') {
            $obj = new VMware_VCloud_API_QueryResultCellRecordType();
            $obj->build($child);
            $obj->set_tagName('CellRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['CellRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualCenterRecord') {
            $obj = new VMware_VCloud_API_QueryResultVirtualCenterRecordType();
            $obj->build($child);
            $obj->set_tagName('VirtualCenterRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualCenterRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostRecord') {
            $obj = new VMware_VCloud_API_QueryResultHostRecordType();
            $obj->build($child);
            $obj->set_tagName('HostRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['HostRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVAppRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminVAppRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminVAppRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVAppRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RightRecord') {
            $obj = new VMware_VCloud_API_QueryResultRightRecordType();
            $obj->build($child);
            $obj->set_tagName('RightRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['RightRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVMRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminVMRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminVMRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVMRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminAllocatedExternalAddressRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminAllocatedExternalAddressRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminAllocatedExternalAddressRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminAllocatedExternalAddressRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppOrgNetworkRelationRecord') {
            $obj = new VMware_VCloud_API_QueryResultVAppOrgNetworkRelationRecordType();
            $obj->build($child);
            $obj->set_tagName('VAppOrgNetworkRelationRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppOrgNetworkRelationRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcResourcePoolRelationRecord') {
            $obj = new VMware_VCloud_API_QueryResultOrgVdcResourcePoolRelationRecordType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcResourcePoolRelationRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcResourcePoolRelationRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderVdcResourcePoolRelationRecord') {
            $obj = new VMware_VCloud_API_QueryResultProviderVdcResourcePoolRelationRecordType();
            $obj->build($child);
            $obj->set_tagName('ProviderVdcResourcePoolRelationRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ProviderVdcResourcePoolRelationRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DatastoreProviderVdcRelationRecord') {
            $obj = new VMware_VCloud_API_QueryResultDatastoreProviderVdcRelationRecordType();
            $obj->build($child);
            $obj->set_tagName('DatastoreProviderVdcRelationRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['DatastoreProviderVdcRelationRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminUserRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminUserRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminUserRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminUserRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminGroupRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminGroupRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminGroupRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminGroupRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVAppNetworkRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminVAppNetworkRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminVAppNetworkRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVAppNetworkRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminCatalogRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminCatalogRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminCatalogRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminCatalogRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminCatalogItemRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminCatalogItemRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminCatalogItemRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminCatalogItemRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogItemRecord') {
            $obj = new VMware_VCloud_API_QueryResultCatalogItemRecordType();
            $obj->build($child);
            $obj->set_tagName('CatalogItemRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogItemRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminMediaRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminMediaRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminMediaRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminMediaRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVAppTemplateRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminVAppTemplateRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminVAppTemplateRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVAppTemplateRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminShadowVMRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminShadowVMRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminShadowVMRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminShadowVMRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TaskRecord') {
            $obj = new VMware_VCloud_API_QueryResultTaskRecordType();
            $obj->build($child);
            $obj->set_tagName('TaskRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['TaskRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminTaskRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminTaskRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminTaskRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminTaskRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BlockingTaskRecord') {
            $obj = new VMware_VCloud_API_QueryResultBlockingTaskRecordType();
            $obj->build($child);
            $obj->set_tagName('BlockingTaskRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['BlockingTaskRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DiskRecord') {
            $obj = new VMware_VCloud_API_QueryResultDiskRecordType();
            $obj->build($child);
            $obj->set_tagName('DiskRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['DiskRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmDiskRelationRecord') {
            $obj = new VMware_VCloud_API_QueryResultVmDiskRelationRecordType();
            $obj->build($child);
            $obj->set_tagName('VmDiskRelationRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VmDiskRelationRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminDiskRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminDiskRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminDiskRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminDiskRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVmDiskRelationRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminVmDiskRelationRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminVmDiskRelationRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVmDiskRelationRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ConditionRecord') {
            $obj = new VMware_VCloud_API_QueryResultConditionRecordType();
            $obj->build($child);
            $obj->set_tagName('ConditionRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ConditionRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminEventRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminEventRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminEventRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminEventRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StrandedItemRecord') {
            $obj = new VMware_VCloud_API_QueryResultStrandedItemRecordType();
            $obj->build($child);
            $obj->set_tagName('StrandedItemRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['StrandedItemRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminServiceRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminServiceRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminServiceRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminServiceRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceRecord') {
            $obj = new VMware_VCloud_API_QueryResultServiceRecordType();
            $obj->build($child);
            $obj->set_tagName('ServiceRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceLinkRecord') {
            $obj = new VMware_VCloud_API_QueryResultServiceLinkRecordType();
            $obj->build($child);
            $obj->set_tagName('ServiceLinkRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceLinkRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcStorageProfileRecord') {
            $obj = new VMware_VCloud_API_QueryResultOrgVdcStorageProfileRecordType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcStorageProfileRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcStorageProfileRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminOrgVdcStorageProfileRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminOrgVdcStorageProfileRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminOrgVdcStorageProfileRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminOrgVdcStorageProfileRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderVdcStorageProfileRecord') {
            $obj = new VMware_VCloud_API_QueryResultProviderVdcStorageProfileRecordType();
            $obj->build($child);
            $obj->set_tagName('ProviderVdcStorageProfileRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ProviderVdcStorageProfileRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiFilterRecord') {
            $obj = new VMware_VCloud_API_QueryResultApiFilterRecordType();
            $obj->build($child);
            $obj->set_tagName('ApiFilterRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ApiFilterRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminApiDefinitionRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminApiDefinitionRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminApiDefinitionRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminApiDefinitionRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiDefinitionRecord') {
            $obj = new VMware_VCloud_API_QueryResultApiDefinitionRecordType();
            $obj->build($child);
            $obj->set_tagName('ApiDefinitionRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ApiDefinitionRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminFileDescriptorRecord') {
            $obj = new VMware_VCloud_API_QueryResultAdminFileDescriptorRecordType();
            $obj->build($child);
            $obj->set_tagName('AdminFileDescriptorRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminFileDescriptorRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FileDescriptorRecord') {
            $obj = new VMware_VCloud_API_QueryResultFileDescriptorRecordType();
            $obj->build($child);
            $obj->set_tagName('FileDescriptorRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['FileDescriptorRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassActionRecord') {
            $obj = new VMware_VCloud_API_QueryResultResourceClassActionRecordType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassActionRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassActionRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AclRuleRecord') {
            $obj = new VMware_VCloud_API_QueryResultAclRuleRecordType();
            $obj->build($child);
            $obj->set_tagName('AclRuleRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['AclRuleRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassRecord') {
            $obj = new VMware_VCloud_API_QueryResultResourceClassRecordType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceResourceRecord') {
            $obj = new VMware_VCloud_API_QueryResultServiceResourceRecordType();
            $obj->build($child);
            $obj->set_tagName('ServiceResourceRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceResourceRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EdgeGatewayRecord') {
            $obj = new VMware_VCloud_API_QueryResultEdgeGatewayRecordType();
            $obj->build($child);
            $obj->set_tagName('EdgeGatewayRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['EdgeGatewayRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcNetworkRecord') {
            $obj = new VMware_VCloud_API_QueryResultOrgVdcNetworkRecordType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcNetworkRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcNetworkRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppOrgVdcNetworkRelationRecord') {
            $obj = new VMware_VCloud_API_QueryResultVAppOrgVdcNetworkRelationRecordType();
            $obj->build($child);
            $obj->set_tagName('VAppOrgVdcNetworkRelationRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppOrgVdcNetworkRelationRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExternalLocalizationRecord') {
            $obj = new VMware_VCloud_API_QueryResultExternalLocalizationRecordType();
            $obj->build($child);
            $obj->set_tagName('ExternalLocalizationRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ExternalLocalizationRecord'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourcePoolVMRecord') {
            $obj = new VMware_VCloud_API_QueryResultResourcePoolVMRecordType();
            $obj->build($child);
            $obj->set_tagName('ResourcePoolVMRecord');
            array_push($this->Record, $obj);
            if (!empty($namespace)) {
                $this->namespace['ResourcePoolVMRecord'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}