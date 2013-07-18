<?php
class VMware_VCloud_API_QueryResultAdminCatalogItemRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $status = null;
    protected $vdcName = null;
    protected $creationDate = null;
    protected $name = null;
    protected $entityName = null;
    protected $entityType = null;
    protected $isPublished = null;
    protected $entity = null;
    protected $catalog = null;
    protected $ownerName = null;
    protected $owner = null;
    protected $org = null;
    protected $isExpired = null;
    protected $vdc = null;
    protected $isVdcEnabled = null;
    protected $catalogName = null;
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
    * @param string $vdcName - [optional] an attribute, 
    * @param dateTime $creationDate - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $entityName - [optional] an attribute, 
    * @param string $entityType - [optional] an attribute, 
    * @param boolean $isPublished - [optional] an attribute, 
    * @param string $entity - [optional] an attribute, 
    * @param string $catalog - [optional] an attribute, 
    * @param string $ownerName - [optional] an attribute, 
    * @param string $owner - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param boolean $isExpired - [optional] an attribute, 
    * @param string $vdc - [optional] an attribute, 
    * @param boolean $isVdcEnabled - [optional] an attribute, 
    * @param string $catalogName - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $status=null, $vdcName=null, $creationDate=null, $name=null, $entityName=null, $entityType=null, $isPublished=null, $entity=null, $catalog=null, $ownerName=null, $owner=null, $org=null, $isExpired=null, $vdc=null, $isVdcEnabled=null, $catalogName=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->status = $status;
        $this->vdcName = $vdcName;
        $this->creationDate = $creationDate;
        $this->name = $name;
        $this->entityName = $entityName;
        $this->entityType = $entityType;
        $this->isPublished = $isPublished;
        $this->entity = $entity;
        $this->catalog = $catalog;
        $this->ownerName = $ownerName;
        $this->owner = $owner;
        $this->org = $org;
        $this->isExpired = $isExpired;
        $this->vdc = $vdc;
        $this->isVdcEnabled = $isVdcEnabled;
        $this->catalogName = $catalogName;
        $this->tagName = 'AdminCatalogItemRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_vdcName(){
        return $this->vdcName;
    }
    public function set_vdcName($vdcName) {
        $this->vdcName = $vdcName;
    }
    public function get_creationDate(){
        return $this->creationDate;
    }
    public function set_creationDate($creationDate) {
        $this->creationDate = $creationDate;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_entityName(){
        return $this->entityName;
    }
    public function set_entityName($entityName) {
        $this->entityName = $entityName;
    }
    public function get_entityType(){
        return $this->entityType;
    }
    public function set_entityType($entityType) {
        $this->entityType = $entityType;
    }
    public function get_isPublished(){
        return $this->isPublished;
    }
    public function set_isPublished($isPublished) {
        $this->isPublished = $isPublished;
    }
    public function get_entity(){
        return $this->entity;
    }
    public function set_entity($entity) {
        $this->entity = $entity;
    }
    public function get_catalog(){
        return $this->catalog;
    }
    public function set_catalog($catalog) {
        $this->catalog = $catalog;
    }
    public function get_ownerName(){
        return $this->ownerName;
    }
    public function set_ownerName($ownerName) {
        $this->ownerName = $ownerName;
    }
    public function get_owner(){
        return $this->owner;
    }
    public function set_owner($owner) {
        $this->owner = $owner;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_isExpired(){
        return $this->isExpired;
    }
    public function set_isExpired($isExpired) {
        $this->isExpired = $isExpired;
    }
    public function get_vdc(){
        return $this->vdc;
    }
    public function set_vdc($vdc) {
        $this->vdc = $vdc;
    }
    public function get_isVdcEnabled(){
        return $this->isVdcEnabled;
    }
    public function set_isVdcEnabled($isVdcEnabled) {
        $this->isVdcEnabled = $isVdcEnabled;
    }
    public function get_catalogName(){
        return $this->catalogName;
    }
    public function set_catalogName($catalogName) {
        $this->catalogName = $catalogName;
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
        if (!is_null($this->vdcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcName')));
        }
        if (!is_null($this->creationDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'creationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'creationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->creationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='creationDate')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->entityName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'entityName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'entityName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->entityName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='entityName')));
        }
        if (!is_null($this->entityType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'entityType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'entityType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->entityType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='entityType')));
        }
        if (!is_null($this->isPublished)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isPublished', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isPublished=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isPublished, $input_name='isPublished')));
        }
        if (!is_null($this->entity)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'entity', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'entity=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->entity, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='entity')));
        }
        if (!is_null($this->catalog)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'catalog', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'catalog=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->catalog, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='catalog')));
        }
        if (!is_null($this->ownerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ownerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ownerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ownerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ownerName')));
        }
        if (!is_null($this->owner)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'owner', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'owner=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->owner, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='owner')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->isExpired)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isExpired', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isExpired=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isExpired, $input_name='isExpired')));
        }
        if (!is_null($this->vdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdc')));
        }
        if (!is_null($this->isVdcEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isVdcEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isVdcEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isVdcEnabled, $input_name='isVdcEnabled')));
        }
        if (!is_null($this->catalogName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'catalogName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'catalogName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->catalogName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='catalogName')));
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
        $ndentityName = $attrs->getNamedItem('entityName');
        if (!is_null($ndentityName)) {
            $this->entityName = $ndentityName->value;
            if (isset($ndentityName->prefix)) {
                $this->namespace['entityName'] = $ndentityName->prefix;
                $nsUri = $ndentityName->lookupNamespaceURI($ndentityName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'entityName');
        } else {
            $this->entityName = null;
        }
        $ndentityType = $attrs->getNamedItem('entityType');
        if (!is_null($ndentityType)) {
            $this->entityType = $ndentityType->value;
            if (isset($ndentityType->prefix)) {
                $this->namespace['entityType'] = $ndentityType->prefix;
                $nsUri = $ndentityType->lookupNamespaceURI($ndentityType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'entityType');
        } else {
            $this->entityType = null;
        }
        $ndisPublished = $attrs->getNamedItem('isPublished');
        if (!is_null($ndisPublished)) {
            $this->isPublished = VMware_VCloud_API_Helper::get_boolean($ndisPublished->value);
            if (isset($ndisPublished->prefix)) {
                $this->namespace['isPublished'] = $ndisPublished->prefix;
                $nsUri = $ndisPublished->lookupNamespaceURI($ndisPublished->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isPublished');
        } else {
            $this->isPublished = null;
        }
        $ndentity = $attrs->getNamedItem('entity');
        if (!is_null($ndentity)) {
            $this->entity = $ndentity->value;
            if (isset($ndentity->prefix)) {
                $this->namespace['entity'] = $ndentity->prefix;
                $nsUri = $ndentity->lookupNamespaceURI($ndentity->prefix);
            }
            $node->removeAttributeNS($nsUri, 'entity');
        } else {
            $this->entity = null;
        }
        $ndcatalog = $attrs->getNamedItem('catalog');
        if (!is_null($ndcatalog)) {
            $this->catalog = $ndcatalog->value;
            if (isset($ndcatalog->prefix)) {
                $this->namespace['catalog'] = $ndcatalog->prefix;
                $nsUri = $ndcatalog->lookupNamespaceURI($ndcatalog->prefix);
            }
            $node->removeAttributeNS($nsUri, 'catalog');
        } else {
            $this->catalog = null;
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
        $ndowner = $attrs->getNamedItem('owner');
        if (!is_null($ndowner)) {
            $this->owner = $ndowner->value;
            if (isset($ndowner->prefix)) {
                $this->namespace['owner'] = $ndowner->prefix;
                $nsUri = $ndowner->lookupNamespaceURI($ndowner->prefix);
            }
            $node->removeAttributeNS($nsUri, 'owner');
        } else {
            $this->owner = null;
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
        $ndcatalogName = $attrs->getNamedItem('catalogName');
        if (!is_null($ndcatalogName)) {
            $this->catalogName = $ndcatalogName->value;
            if (isset($ndcatalogName->prefix)) {
                $this->namespace['catalogName'] = $ndcatalogName->prefix;
                $nsUri = $ndcatalogName->lookupNamespaceURI($ndcatalogName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'catalogName');
        } else {
            $this->catalogName = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}