<?php
class VMware_VCloud_API_QueryResultAclRuleRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $orgAccess = null;
    protected $name = null;
    protected $resourceClassAction = null;
    protected $serviceResourceAccess = null;
    protected $principalType = null;
    protected $principalAccess = null;
    protected $org = null;
    protected $serviceResource = null;
    protected $principal = null;
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
    * @param string $orgAccess - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $resourceClassAction - [optional] an attribute, 
    * @param string $serviceResourceAccess - [optional] an attribute, 
    * @param string $principalType - [optional] an attribute, 
    * @param string $principalAccess - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param string $serviceResource - [optional] an attribute, 
    * @param string $principal - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $orgAccess=null, $name=null, $resourceClassAction=null, $serviceResourceAccess=null, $principalType=null, $principalAccess=null, $org=null, $serviceResource=null, $principal=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->orgAccess = $orgAccess;
        $this->name = $name;
        $this->resourceClassAction = $resourceClassAction;
        $this->serviceResourceAccess = $serviceResourceAccess;
        $this->principalType = $principalType;
        $this->principalAccess = $principalAccess;
        $this->org = $org;
        $this->serviceResource = $serviceResource;
        $this->principal = $principal;
        $this->tagName = 'AclRuleRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_orgAccess(){
        return $this->orgAccess;
    }
    public function set_orgAccess($orgAccess) {
        $this->orgAccess = $orgAccess;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_resourceClassAction(){
        return $this->resourceClassAction;
    }
    public function set_resourceClassAction($resourceClassAction) {
        $this->resourceClassAction = $resourceClassAction;
    }
    public function get_serviceResourceAccess(){
        return $this->serviceResourceAccess;
    }
    public function set_serviceResourceAccess($serviceResourceAccess) {
        $this->serviceResourceAccess = $serviceResourceAccess;
    }
    public function get_principalType(){
        return $this->principalType;
    }
    public function set_principalType($principalType) {
        $this->principalType = $principalType;
    }
    public function get_principalAccess(){
        return $this->principalAccess;
    }
    public function set_principalAccess($principalAccess) {
        $this->principalAccess = $principalAccess;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_serviceResource(){
        return $this->serviceResource;
    }
    public function set_serviceResource($serviceResource) {
        $this->serviceResource = $serviceResource;
    }
    public function get_principal(){
        return $this->principal;
    }
    public function set_principal($principal) {
        $this->principal = $principal;
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
        if (!is_null($this->orgAccess)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'orgAccess', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'orgAccess=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->orgAccess, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='orgAccess')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->resourceClassAction)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'resourceClassAction', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'resourceClassAction=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->resourceClassAction, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='resourceClassAction')));
        }
        if (!is_null($this->serviceResourceAccess)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceResourceAccess', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceResourceAccess=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceResourceAccess, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceResourceAccess')));
        }
        if (!is_null($this->principalType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'principalType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'principalType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->principalType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='principalType')));
        }
        if (!is_null($this->principalAccess)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'principalAccess', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'principalAccess=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->principalAccess, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='principalAccess')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->serviceResource)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'serviceResource', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'serviceResource=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->serviceResource, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='serviceResource')));
        }
        if (!is_null($this->principal)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'principal', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'principal=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->principal, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='principal')));
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
        $ndorgAccess = $attrs->getNamedItem('orgAccess');
        if (!is_null($ndorgAccess)) {
            $this->orgAccess = $ndorgAccess->value;
            if (isset($ndorgAccess->prefix)) {
                $this->namespace['orgAccess'] = $ndorgAccess->prefix;
                $nsUri = $ndorgAccess->lookupNamespaceURI($ndorgAccess->prefix);
            }
            $node->removeAttributeNS($nsUri, 'orgAccess');
        } else {
            $this->orgAccess = null;
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
        $ndresourceClassAction = $attrs->getNamedItem('resourceClassAction');
        if (!is_null($ndresourceClassAction)) {
            $this->resourceClassAction = $ndresourceClassAction->value;
            if (isset($ndresourceClassAction->prefix)) {
                $this->namespace['resourceClassAction'] = $ndresourceClassAction->prefix;
                $nsUri = $ndresourceClassAction->lookupNamespaceURI($ndresourceClassAction->prefix);
            }
            $node->removeAttributeNS($nsUri, 'resourceClassAction');
        } else {
            $this->resourceClassAction = null;
        }
        $ndserviceResourceAccess = $attrs->getNamedItem('serviceResourceAccess');
        if (!is_null($ndserviceResourceAccess)) {
            $this->serviceResourceAccess = $ndserviceResourceAccess->value;
            if (isset($ndserviceResourceAccess->prefix)) {
                $this->namespace['serviceResourceAccess'] = $ndserviceResourceAccess->prefix;
                $nsUri = $ndserviceResourceAccess->lookupNamespaceURI($ndserviceResourceAccess->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceResourceAccess');
        } else {
            $this->serviceResourceAccess = null;
        }
        $ndprincipalType = $attrs->getNamedItem('principalType');
        if (!is_null($ndprincipalType)) {
            $this->principalType = $ndprincipalType->value;
            if (isset($ndprincipalType->prefix)) {
                $this->namespace['principalType'] = $ndprincipalType->prefix;
                $nsUri = $ndprincipalType->lookupNamespaceURI($ndprincipalType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'principalType');
        } else {
            $this->principalType = null;
        }
        $ndprincipalAccess = $attrs->getNamedItem('principalAccess');
        if (!is_null($ndprincipalAccess)) {
            $this->principalAccess = $ndprincipalAccess->value;
            if (isset($ndprincipalAccess->prefix)) {
                $this->namespace['principalAccess'] = $ndprincipalAccess->prefix;
                $nsUri = $ndprincipalAccess->lookupNamespaceURI($ndprincipalAccess->prefix);
            }
            $node->removeAttributeNS($nsUri, 'principalAccess');
        } else {
            $this->principalAccess = null;
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
        $ndserviceResource = $attrs->getNamedItem('serviceResource');
        if (!is_null($ndserviceResource)) {
            $this->serviceResource = $ndserviceResource->value;
            if (isset($ndserviceResource->prefix)) {
                $this->namespace['serviceResource'] = $ndserviceResource->prefix;
                $nsUri = $ndserviceResource->lookupNamespaceURI($ndserviceResource->prefix);
            }
            $node->removeAttributeNS($nsUri, 'serviceResource');
        } else {
            $this->serviceResource = null;
        }
        $ndprincipal = $attrs->getNamedItem('principal');
        if (!is_null($ndprincipal)) {
            $this->principal = $ndprincipal->value;
            if (isset($ndprincipal->prefix)) {
                $this->namespace['principal'] = $ndprincipal->prefix;
                $nsUri = $ndprincipal->lookupNamespaceURI($ndprincipal->prefix);
            }
            $node->removeAttributeNS($nsUri, 'principal');
        } else {
            $this->principal = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}