<?php
class VMware_VCloud_API_QueryResultAdminServiceOfferingInstanceRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $extensionId = null;
    protected $name = null;
    protected $userId = null;
    protected $serviceOfferingName = null;
    protected $state = null;
    protected $orgId = null;
    protected $ownerName = null;
    protected $extensionName = null;
    protected $vdcId = null;
    protected $serviceOfferingId = null;
    protected $description = null;
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
    * @param string $extensionId - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $userId - [optional] an attribute, 
    * @param string $serviceOfferingName - [optional] an attribute, 
    * @param string $state - [optional] an attribute, 
    * @param string $orgId - [optional] an attribute, 
    * @param string $ownerName - [optional] an attribute, 
    * @param string $extensionName - [optional] an attribute, 
    * @param string $vdcId - [optional] an attribute, 
    * @param string $serviceOfferingId - [optional] an attribute, 
    * @param string $description - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $extensionId=null, $name=null, $userId=null, $serviceOfferingName=null, $state=null, $orgId=null, $ownerName=null, $extensionName=null, $vdcId=null, $serviceOfferingId=null, $description=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->extensionId = $extensionId;
        $this->name = $name;
        $this->userId = $userId;
        $this->serviceOfferingName = $serviceOfferingName;
        $this->state = $state;
        $this->orgId = $orgId;
        $this->ownerName = $ownerName;
        $this->extensionName = $extensionName;
        $this->vdcId = $vdcId;
        $this->serviceOfferingId = $serviceOfferingId;
        $this->description = $description;
        $this->tagName = 'AdminServiceOfferingInstanceRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_extensionId(){
        return $this->extensionId;
    }
    public function set_extensionId($extensionId) {
        $this->extensionId = $extensionId;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_userId(){
        return $this->userId;
    }
    public function set_userId($userId) {
        $this->userId = $userId;
    }
    public function get_serviceOfferingName(){
        return $this->serviceOfferingName;
    }
    public function set_serviceOfferingName($serviceOfferingName) {
        $this->serviceOfferingName = $serviceOfferingName;
    }
    public function get_state(){
        return $this->state;
    }
    public function set_state($state) {
        $this->state = $state;
    }
    public function get_orgId(){
        return $this->orgId;
    }
    public function set_orgId($orgId) {
        $this->orgId = $orgId;
    }
    public function get_ownerName(){
        return $this->ownerName;
    }
    public function set_ownerName($ownerName) {
        $this->ownerName = $ownerName;
    }
    public function get_extensionName(){
        return $this->extensionName;
    }
    public function set_extensionName($extensionName) {
        $this->extensionName = $extensionName;
    }
    public function get_vdcId(){
        return $this->vdcId;
    }
    public function set_vdcId($vdcId) {
        $this->vdcId = $vdcId;
    }
    public function get_serviceOfferingId(){
        return $this->serviceOfferingId;
    }
    public function set_serviceOfferingId($serviceOfferingId) {
        $this->serviceOfferingId = $serviceOfferingId;
    }
    public function get_description(){
        return $this->description;
    }
    public function set_description($description) {
        $this->description = $description;
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
        if (!is_null($this->extensionId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'extensionId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'extensionId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->extensionId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='extensionId')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->userId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'userId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'userId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->userId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='userId')));
        }
        if (!is_null($this->serviceOfferingName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceOfferingName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceOfferingName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceOfferingName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceOfferingName')));
        }
        if (!is_null($this->state)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'state', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'state=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->state, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='state')));
        }
        if (!is_null($this->orgId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'orgId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'orgId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->orgId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='orgId')));
        }
        if (!is_null($this->ownerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ownerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ownerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ownerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ownerName')));
        }
        if (!is_null($this->extensionName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'extensionName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'extensionName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->extensionName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='extensionName')));
        }
        if (!is_null($this->vdcId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcId')));
        }
        if (!is_null($this->serviceOfferingId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceOfferingId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceOfferingId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceOfferingId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceOfferingId')));
        }
        if (!is_null($this->description)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'description', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'description=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->description, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='description')));
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
        $ndextensionId = $attrs->getNamedItem('extensionId');
        if (!is_null($ndextensionId)) {
            $this->extensionId = $ndextensionId->value;
            if (isset($ndextensionId->prefix)) {
                $this->namespace['extensionId'] = $ndextensionId->prefix;
                $nsUri = $ndextensionId->lookupNamespaceURI($ndextensionId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'extensionId');
        } else {
            $this->extensionId = null;
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
        $nduserId = $attrs->getNamedItem('userId');
        if (!is_null($nduserId)) {
            $this->userId = $nduserId->value;
            if (isset($nduserId->prefix)) {
                $this->namespace['userId'] = $nduserId->prefix;
                $nsUri = $nduserId->lookupNamespaceURI($nduserId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'userId');
        } else {
            $this->userId = null;
        }
        $ndserviceOfferingName = $attrs->getNamedItem('serviceOfferingName');
        if (!is_null($ndserviceOfferingName)) {
            $this->serviceOfferingName = $ndserviceOfferingName->value;
            if (isset($ndserviceOfferingName->prefix)) {
                $this->namespace['serviceOfferingName'] = $ndserviceOfferingName->prefix;
                $nsUri = $ndserviceOfferingName->lookupNamespaceURI($ndserviceOfferingName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceOfferingName');
        } else {
            $this->serviceOfferingName = null;
        }
        $ndstate = $attrs->getNamedItem('state');
        if (!is_null($ndstate)) {
            $this->state = $ndstate->value;
            if (isset($ndstate->prefix)) {
                $this->namespace['state'] = $ndstate->prefix;
                $nsUri = $ndstate->lookupNamespaceURI($ndstate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'state');
        } else {
            $this->state = null;
        }
        $ndorgId = $attrs->getNamedItem('orgId');
        if (!is_null($ndorgId)) {
            $this->orgId = $ndorgId->value;
            if (isset($ndorgId->prefix)) {
                $this->namespace['orgId'] = $ndorgId->prefix;
                $nsUri = $ndorgId->lookupNamespaceURI($ndorgId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'orgId');
        } else {
            $this->orgId = null;
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
        $ndextensionName = $attrs->getNamedItem('extensionName');
        if (!is_null($ndextensionName)) {
            $this->extensionName = $ndextensionName->value;
            if (isset($ndextensionName->prefix)) {
                $this->namespace['extensionName'] = $ndextensionName->prefix;
                $nsUri = $ndextensionName->lookupNamespaceURI($ndextensionName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'extensionName');
        } else {
            $this->extensionName = null;
        }
        $ndvdcId = $attrs->getNamedItem('vdcId');
        if (!is_null($ndvdcId)) {
            $this->vdcId = $ndvdcId->value;
            if (isset($ndvdcId->prefix)) {
                $this->namespace['vdcId'] = $ndvdcId->prefix;
                $nsUri = $ndvdcId->lookupNamespaceURI($ndvdcId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdcId');
        } else {
            $this->vdcId = null;
        }
        $ndserviceOfferingId = $attrs->getNamedItem('serviceOfferingId');
        if (!is_null($ndserviceOfferingId)) {
            $this->serviceOfferingId = $ndserviceOfferingId->value;
            if (isset($ndserviceOfferingId->prefix)) {
                $this->namespace['serviceOfferingId'] = $ndserviceOfferingId->prefix;
                $nsUri = $ndserviceOfferingId->lookupNamespaceURI($ndserviceOfferingId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceOfferingId');
        } else {
            $this->serviceOfferingId = null;
        }
        $nddescription = $attrs->getNamedItem('description');
        if (!is_null($nddescription)) {
            $this->description = $nddescription->value;
            if (isset($nddescription->prefix)) {
                $this->namespace['description'] = $nddescription->prefix;
                $nsUri = $nddescription->lookupNamespaceURI($nddescription->prefix);
            }
            $node->removeAttributeNS($nsUri, 'description');
        } else {
            $this->description = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}