<?php
class VMware_VCloud_API_ReferencesType extends VMware_VCloud_API_ContainerType {
    protected $Reference = array();
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
    * @param array $Reference - [optional] an array of VMware_VCloud_API_ReferenceType objects
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $total=null, $name=null, $pageSize=null, $page=null, $Reference=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $total, $name, $pageSize, $page);
        if (!is_null($Reference)) {
            $this->Reference = $Reference;
        }
        $this->tagName = 'DatastoreReferences';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getReference() {
        return $this->Reference;
    }
    public function setReference($Reference) { 
        $this->Reference = $Reference;
    }
    public function addReference($value) { array_push($this->Reference, $value); }
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
        if (isset($this->Reference)) {
            foreach ($this->Reference as $Reference) {
                $tagName = $Reference->get_tagName();
                if (empty($tagName)) {
                    $tagName = 'Reference';
                }
                $out = $Reference->export($tagName, $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Reference) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Reference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Reference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['Reference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MediaReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('MediaReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['MediaReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppTemplateReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppTemplateReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppTemplateReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VMReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VMReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VMReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgNetworkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgNetworkReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgNetworkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppNetworkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppNetworkReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppNetworkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('CatalogReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVdcReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminVdcReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVdcReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VMWProviderVdcReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VMWProviderVdcReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VMWProviderVdcReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('NetworkReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('GroupReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['GroupReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UserReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('UserReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['UserReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RoleReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('RoleReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['RoleReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DatastoreReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('DatastoreReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['DatastoreReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkPoolReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('NetworkPoolReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkPoolReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualCenterReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VirtualCenterReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualCenterReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('HostReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['HostReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RightReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('RightReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['RightReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppOrgNetworkRelationReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppOrgNetworkRelationReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppOrgNetworkRelationReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogItemReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('CatalogItemReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogItemReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TaskReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('TaskReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['TaskReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BlockingTaskReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('BlockingTaskReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['BlockingTaskReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DiskReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('DiskReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['DiskReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminDiskReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminDiskReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminDiskReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StrandedItemReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('StrandedItemReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['StrandedItemReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminServiceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminServiceReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminServiceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceLinkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceLinkReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceLinkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcStorageProfileReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcStorageProfileReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcStorageProfileReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminOrgVdcStorageProfileReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminOrgVdcStorageProfileReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminOrgVdcStorageProfileReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderVdcStorageProfileReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ProviderVdcStorageProfileReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ProviderVdcStorageProfileReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiFilterReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ApiFilterReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ApiFilterReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminApiDefinitionReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminApiDefinitionReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminApiDefinitionReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiDefinitionReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ApiDefinitionReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ApiDefinitionReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminFileDescriptorReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminFileDescriptorReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminFileDescriptorReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassActionReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassActionReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassActionReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AclRuleReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AclRuleReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['AclRuleReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceResourceResourceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceResourceResourceReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceResourceResourceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EdgeGatewayReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('EdgeGatewayReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['EdgeGatewayReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcNetworkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcNetworkReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcNetworkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppOrgVdcNetworkRelationReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppOrgVdcNetworkRelationReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VAppOrgVdcNetworkRelationReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceOfferingInstanceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceOfferingInstanceReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceOfferingInstanceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceOfferingReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceOfferingReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceOfferingReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmServiceOfferingInstanceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VmServiceOfferingInstanceReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VmServiceOfferingInstanceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VdcServiceOfferingReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VdcServiceOfferingReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['VdcServiceOfferingReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminServiceOfferingInstanceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminServiceOfferingInstanceReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['AdminServiceOfferingInstanceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceExtensionReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceExtensionReference');
            array_push($this->Reference, $obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceExtensionReference'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}