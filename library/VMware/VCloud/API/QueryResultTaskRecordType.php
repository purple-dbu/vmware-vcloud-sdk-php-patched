<?php
class VMware_VCloud_API_QueryResultTaskRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $status = null;
    protected $startDate = null;
    protected $endDate = null;
    protected $name = null;
    protected $objectName = null;
    protected $orgName = null;
    protected $object = null;
    protected $ownerName = null;
    protected $org = null;
    protected $serviceNamespace = null;
    protected $objectType = null;
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
    * @param string $status - [optional] an attribute, 
    * @param dateTime $startDate - [optional] an attribute, 
    * @param dateTime $endDate - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $objectName - [optional] an attribute, 
    * @param string $orgName - [optional] an attribute, 
    * @param string $object - [optional] an attribute, 
    * @param string $ownerName - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param string $serviceNamespace - [optional] an attribute, 
    * @param string $objectType - [optional] an attribute, 
    * @param string $details - [optional] an attribute
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $status=null, $startDate=null, $endDate=null, $name=null, $objectName=null, $orgName=null, $object=null, $ownerName=null, $org=null, $serviceNamespace=null, $objectType=null, $details=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->status = $status;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->name = $name;
        $this->objectName = $objectName;
        $this->orgName = $orgName;
        $this->object = $object;
        $this->ownerName = $ownerName;
        $this->org = $org;
        $this->serviceNamespace = $serviceNamespace;
        $this->objectType = $objectType;
        $this->details = $details;
        $this->tagName = 'TaskRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_startDate(){
        return $this->startDate;
    }
    public function set_startDate($startDate) {
        $this->startDate = $startDate;
    }
    public function get_endDate(){
        return $this->endDate;
    }
    public function set_endDate($endDate) {
        $this->endDate = $endDate;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_objectName(){
        return $this->objectName;
    }
    public function set_objectName($objectName) {
        $this->objectName = $objectName;
    }
    public function get_orgName(){
        return $this->orgName;
    }
    public function set_orgName($orgName) {
        $this->orgName = $orgName;
    }
    public function get_object(){
        return $this->object;
    }
    public function set_object($object) {
        $this->object = $object;
    }
    public function get_ownerName(){
        return $this->ownerName;
    }
    public function set_ownerName($ownerName) {
        $this->ownerName = $ownerName;
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
    public function get_objectType(){
        return $this->objectType;
    }
    public function set_objectType($objectType) {
        $this->objectType = $objectType;
    }
    public function get_details() {
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
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->startDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'startDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'startDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->startDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='startDate')));
        }
        if (!is_null($this->endDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'endDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'endDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->endDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='endDate')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->objectName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'objectName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'objectName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->objectName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='objectName')));
        }
        if (!is_null($this->orgName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'orgName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'orgName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->orgName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='orgName')));
        }
        if (!is_null($this->object)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'object', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'object=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->object, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='object')));
        }
        if (!is_null($this->ownerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ownerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ownerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ownerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ownerName')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->serviceNamespace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceNamespace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceNamespace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceNamespace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceNamespace')));
        }
        if (!is_null($this->objectType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'objectType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'objectType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->objectType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='objectType')));
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
        $ndstartDate = $attrs->getNamedItem('startDate');
        if (!is_null($ndstartDate)) {
            $this->startDate = $ndstartDate->value;
            if (isset($ndstartDate->prefix)) {
                $this->namespace['startDate'] = $ndstartDate->prefix;
                $nsUri = $ndstartDate->lookupNamespaceURI($ndstartDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'startDate');
        } else {
            $this->startDate = null;
        }
        $ndendDate = $attrs->getNamedItem('endDate');
        if (!is_null($ndendDate)) {
            $this->endDate = $ndendDate->value;
            if (isset($ndendDate->prefix)) {
                $this->namespace['endDate'] = $ndendDate->prefix;
                $nsUri = $ndendDate->lookupNamespaceURI($ndendDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'endDate');
        } else {
            $this->endDate = null;
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
        $ndobjectName = $attrs->getNamedItem('objectName');
        if (!is_null($ndobjectName)) {
            $this->objectName = $ndobjectName->value;
            if (isset($ndobjectName->prefix)) {
                $this->namespace['objectName'] = $ndobjectName->prefix;
                $nsUri = $ndobjectName->lookupNamespaceURI($ndobjectName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'objectName');
        } else {
            $this->objectName = null;
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
        $ndobject = $attrs->getNamedItem('object');
        if (!is_null($ndobject)) {
            $this->object = $ndobject->value;
            if (isset($ndobject->prefix)) {
                $this->namespace['object'] = $ndobject->prefix;
                $nsUri = $ndobject->lookupNamespaceURI($ndobject->prefix);
            }
            $node->removeAttributeNS($nsUri, 'object');
        } else {
            $this->object = null;
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
        $ndobjectType = $attrs->getNamedItem('objectType');
        if (!is_null($ndobjectType)) {
            $this->objectType = $ndobjectType->value;
            if (isset($ndobjectType->prefix)) {
                $this->namespace['objectType'] = $ndobjectType->prefix;
                $nsUri = $ndobjectType->lookupNamespaceURI($ndobjectType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'objectType');
        } else {
            $this->objectType = null;
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