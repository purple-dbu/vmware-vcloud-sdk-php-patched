<?php
class VMware_VCloud_API_QueryResultAdminEventCBMRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $eventId = null;
    protected $userName = null;
    protected $orgName = null;
    protected $eventType = null;
    protected $entityName = null;
    protected $entityType = null;
    protected $productVersion = null;
    protected $entity = null;
    protected $eventStatus = null;
    protected $timeStamp = null;
    protected $org = null;
    protected $serviceNamespace = null;
    protected $details = null;
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
    * @param string $eventId - [optional] an attribute, 
    * @param string $userName - [optional] an attribute, 
    * @param string $orgName - [optional] an attribute, 
    * @param string $eventType - [optional] an attribute, 
    * @param string $entityName - [optional] an attribute, 
    * @param string $entityType - [optional] an attribute, 
    * @param string $productVersion - [optional] an attribute, 
    * @param string $entity - [optional] an attribute, 
    * @param int $eventStatus - [optional] an attribute, 
    * @param dateTime $timeStamp - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param string $serviceNamespace - [optional] an attribute, 
    * @param string $details - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $eventId=null, $userName=null, $orgName=null, $eventType=null, $entityName=null, $entityType=null, $productVersion=null, $entity=null, $eventStatus=null, $timeStamp=null, $org=null, $serviceNamespace=null, $details=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->eventId = $eventId;
        $this->userName = $userName;
        $this->orgName = $orgName;
        $this->eventType = $eventType;
        $this->entityName = $entityName;
        $this->entityType = $entityType;
        $this->productVersion = $productVersion;
        $this->entity = $entity;
        $this->eventStatus = $eventStatus;
        $this->timeStamp = $timeStamp;
        $this->org = $org;
        $this->serviceNamespace = $serviceNamespace;
        $this->details = $details;
        $this->tagName = 'AdminEventCBMRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_eventId(){
        return $this->eventId;
    }
    public function set_eventId($eventId) {
        $this->eventId = $eventId;
    }
    public function get_userName(){
        return $this->userName;
    }
    public function set_userName($userName) {
        $this->userName = $userName;
    }
    public function get_orgName(){
        return $this->orgName;
    }
    public function set_orgName($orgName) {
        $this->orgName = $orgName;
    }
    public function get_eventType(){
        return $this->eventType;
    }
    public function set_eventType($eventType) {
        $this->eventType = $eventType;
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
    public function get_productVersion(){
        return $this->productVersion;
    }
    public function set_productVersion($productVersion) {
        $this->productVersion = $productVersion;
    }
    public function get_entity(){
        return $this->entity;
    }
    public function set_entity($entity) {
        $this->entity = $entity;
    }
    public function get_eventStatus(){
        return $this->eventStatus;
    }
    public function set_eventStatus($eventStatus) {
        $this->eventStatus = $eventStatus;
    }
    public function get_timeStamp(){
        return $this->timeStamp;
    }
    public function set_timeStamp($timeStamp) {
        $this->timeStamp = $timeStamp;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_serviceNamespace(){
        return $this->serviceNamespace;
    }
    public function set_serviceNamespace($serviceNamespace) {
        $this->serviceNamespace = $serviceNamespace;
    }
    public function get_details(){
        return $this->details;
    }
    public function set_details($details) {
        $this->details = $details;
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
        if (!is_null($this->eventId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'eventId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'eventId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->eventId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='eventId')));
        }
        if (!is_null($this->userName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'userName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'userName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->userName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='userName')));
        }
        if (!is_null($this->orgName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'orgName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'orgName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->orgName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='orgName')));
        }
        if (!is_null($this->eventType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'eventType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'eventType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->eventType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='eventType')));
        }
        if (!is_null($this->entityName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'entityName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'entityName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->entityName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='entityName')));
        }
        if (!is_null($this->entityType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'entityType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'entityType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->entityType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='entityType')));
        }
        if (!is_null($this->productVersion)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'productVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'productVersion=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->productVersion, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='productVersion')));
        }
        if (!is_null($this->entity)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'entity', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'entity=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->entity, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='entity')));
        }
        if (!is_null($this->eventStatus)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'eventStatus', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'eventStatus=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->eventStatus, $input_name='eventStatus')));
        }
        if (!is_null($this->timeStamp)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'timeStamp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'timeStamp=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->timeStamp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='timeStamp')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->serviceNamespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceNamespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceNamespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceNamespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceNamespace')));
        }
        if (!is_null($this->details)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'details', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'details=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->details, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='details')));
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
        $ndeventId = $attrs->getNamedItem('eventId');
        if (!is_null($ndeventId)) {
            $this->eventId = $ndeventId->value;
            if (isset($ndeventId->prefix)) {
                $this->namespace['eventId'] = $ndeventId->prefix;
                $nsUri = $ndeventId->lookupNamespaceURI($ndeventId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'eventId');
        } else {
            $this->eventId = null;
        }
        $nduserName = $attrs->getNamedItem('userName');
        if (!is_null($nduserName)) {
            $this->userName = $nduserName->value;
            if (isset($nduserName->prefix)) {
                $this->namespace['userName'] = $nduserName->prefix;
                $nsUri = $nduserName->lookupNamespaceURI($nduserName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'userName');
        } else {
            $this->userName = null;
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
        $ndeventType = $attrs->getNamedItem('eventType');
        if (!is_null($ndeventType)) {
            $this->eventType = $ndeventType->value;
            if (isset($ndeventType->prefix)) {
                $this->namespace['eventType'] = $ndeventType->prefix;
                $nsUri = $ndeventType->lookupNamespaceURI($ndeventType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'eventType');
        } else {
            $this->eventType = null;
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
        $ndproductVersion = $attrs->getNamedItem('productVersion');
        if (!is_null($ndproductVersion)) {
            $this->productVersion = $ndproductVersion->value;
            if (isset($ndproductVersion->prefix)) {
                $this->namespace['productVersion'] = $ndproductVersion->prefix;
                $nsUri = $ndproductVersion->lookupNamespaceURI($ndproductVersion->prefix);
            }
            $node->removeAttributeNS($nsUri, 'productVersion');
        } else {
            $this->productVersion = null;
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
        $ndeventStatus = $attrs->getNamedItem('eventStatus');
        if (!is_null($ndeventStatus)) {
            $this->eventStatus = sprintf('%d', $ndeventStatus->value);
            if (isset($ndeventStatus->prefix)) {
                $this->namespace['eventStatus'] = $ndeventStatus->prefix;
                $nsUri = $ndeventStatus->lookupNamespaceURI($ndeventStatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'eventStatus');
        } else {
            $this->eventStatus = null;
        }
        $ndtimeStamp = $attrs->getNamedItem('timeStamp');
        if (!is_null($ndtimeStamp)) {
            $this->timeStamp = $ndtimeStamp->value;
            if (isset($ndtimeStamp->prefix)) {
                $this->namespace['timeStamp'] = $ndtimeStamp->prefix;
                $nsUri = $ndtimeStamp->lookupNamespaceURI($ndtimeStamp->prefix);
            }
            $node->removeAttributeNS($nsUri, 'timeStamp');
        } else {
            $this->timeStamp = null;
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
        $ndserviceNamespace = $attrs->getNamedItem('serviceNamespace');
        if (!is_null($ndserviceNamespace)) {
            $this->serviceNamespace = $ndserviceNamespace->value;
            if (isset($ndserviceNamespace->prefix)) {
                $this->namespace['serviceNamespace'] = $ndserviceNamespace->prefix;
                $nsUri = $ndserviceNamespace->lookupNamespaceURI($ndserviceNamespace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceNamespace');
        } else {
            $this->serviceNamespace = null;
        }
        $nddetails = $attrs->getNamedItem('details');
        if (!is_null($nddetails)) {
            $this->details = $nddetails->value;
            if (isset($nddetails->prefix)) {
                $this->namespace['details'] = $nddetails->prefix;
                $nsUri = $nddetails->lookupNamespaceURI($nddetails->prefix);
            }
            $node->removeAttributeNS($nsUri, 'details');
        } else {
            $this->details = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}