<?php
class VMware_VCloud_API_Extension_EntityRightsType {
    protected $Reference = null;
    protected $Rights = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param VMware_VCloud_API_ReferenceType $Reference - [required]
    * @param VMware_VCloud_API_Extension_RightRefsType $Rights - [required]
    */
    public function __construct($Reference=null, $Rights=null) {
        $this->Reference = $Reference;
        $this->Rights = $Rights;
        $this->tagName = 'EntityRightsType';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getReference() {
        return $this->Reference;
    }
    public function setReference($Reference) { 
        $this->Reference = $Reference;
    }
    public function getRights() {
        return $this->Rights;
    }
    public function setRights($Rights) { 
        $this->Rights = $Rights;
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->Reference)) {
            $out = $this->Reference->export('Reference', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Rights)) {
            $out = $this->Rights->export('Rights', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Reference) ||
            !is_null($this->Rights)
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
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Reference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Reference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['Reference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MediaReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('MediaReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['MediaReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppTemplateReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppTemplateReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppTemplateReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VMReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VMReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['VMReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgNetworkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgNetworkReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgNetworkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppNetworkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppNetworkReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppNetworkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('CatalogReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVdcReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminVdcReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVdcReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VMWProviderVdcReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VMWProviderVdcReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['VMWProviderVdcReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('NetworkReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('GroupReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['GroupReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UserReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('UserReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['UserReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RoleReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('RoleReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['RoleReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DatastoreReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('DatastoreReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['DatastoreReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkPoolReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('NetworkPoolReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkPoolReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualCenterReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VirtualCenterReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualCenterReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('HostReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['HostReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RightReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('RightReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['RightReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppOrgNetworkRelationReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppOrgNetworkRelationReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppOrgNetworkRelationReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogItemReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('CatalogItemReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogItemReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TaskReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('TaskReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['TaskReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BlockingTaskReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('BlockingTaskReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['BlockingTaskReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DiskReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('DiskReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['DiskReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminDiskReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminDiskReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminDiskReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StrandedItemReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('StrandedItemReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['StrandedItemReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminServiceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminServiceReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminServiceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceLinkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceLinkReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceLinkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcStorageProfileReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcStorageProfileReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcStorageProfileReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminOrgVdcStorageProfileReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminOrgVdcStorageProfileReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminOrgVdcStorageProfileReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderVdcStorageProfileReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ProviderVdcStorageProfileReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ProviderVdcStorageProfileReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiFilterReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ApiFilterReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ApiFilterReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminApiDefinitionReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminApiDefinitionReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminApiDefinitionReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiDefinitionReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ApiDefinitionReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ApiDefinitionReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminFileDescriptorReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AdminFileDescriptorReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminFileDescriptorReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassActionReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassActionReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassActionReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AclRuleReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('AclRuleReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['AclRuleReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceResourceResourceReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ServiceResourceResourceReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceResourceResourceReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EdgeGatewayReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('EdgeGatewayReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['EdgeGatewayReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcNetworkReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcNetworkReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcNetworkReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppOrgVdcNetworkRelationReference') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppOrgVdcNetworkRelationReference');
            $this->setReference($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppOrgVdcNetworkRelationReference'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Rights') {
            $obj = new VMware_VCloud_API_Extension_RightRefsType();
            $obj->build($child);
            $obj->set_tagName('Rights');
            $this->setRights($obj);
            if (!empty($namespace)) {
                $this->namespace['Rights'] = $namespace;
            }
        }
    }
}