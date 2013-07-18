<?php
class VMware_VCloud_API_QueryResultAdminOrgNetworkRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $name = null;
    protected $orgName = null;
    protected $dns2 = null;
    protected $dns1 = null;
    protected $netmask = null;
    protected $isIpScopeInherited = null;
    protected $networkPoolName = null;
    protected $isBusy = null;
    protected $org = null;
    protected $networkPool = null;
    protected $gateway = null;
    protected $ipScopeId = null;
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
    * @param string $name - [optional] an attribute, 
    * @param string $orgName - [optional] an attribute, 
    * @param string $dns2 - [optional] an attribute, 
    * @param string $dns1 - [optional] an attribute, 
    * @param string $netmask - [optional] an attribute, 
    * @param boolean $isIpScopeInherited - [optional] an attribute, 
    * @param string $networkPoolName - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param string $networkPool - [optional] an attribute, 
    * @param string $gateway - [optional] an attribute, 
    * @param string $ipScopeId - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $name=null, $orgName=null, $dns2=null, $dns1=null, $netmask=null, $isIpScopeInherited=null, $networkPoolName=null, $isBusy=null, $org=null, $networkPool=null, $gateway=null, $ipScopeId=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->name = $name;
        $this->orgName = $orgName;
        $this->dns2 = $dns2;
        $this->dns1 = $dns1;
        $this->netmask = $netmask;
        $this->isIpScopeInherited = $isIpScopeInherited;
        $this->networkPoolName = $networkPoolName;
        $this->isBusy = $isBusy;
        $this->org = $org;
        $this->networkPool = $networkPool;
        $this->gateway = $gateway;
        $this->ipScopeId = $ipScopeId;
        $this->tagName = 'AdminOrgNetworkRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_orgName(){
        return $this->orgName;
    }
    public function set_orgName($orgName) {
        $this->orgName = $orgName;
    }
    public function get_dns2(){
        return $this->dns2;
    }
    public function set_dns2($dns2) {
        $this->dns2 = $dns2;
    }
    public function get_dns1(){
        return $this->dns1;
    }
    public function set_dns1($dns1) {
        $this->dns1 = $dns1;
    }
    public function get_netmask(){
        return $this->netmask;
    }
    public function set_netmask($netmask) {
        $this->netmask = $netmask;
    }
    public function get_isIpScopeInherited(){
        return $this->isIpScopeInherited;
    }
    public function set_isIpScopeInherited($isIpScopeInherited) {
        $this->isIpScopeInherited = $isIpScopeInherited;
    }
    public function get_networkPoolName(){
        return $this->networkPoolName;
    }
    public function set_networkPoolName($networkPoolName) {
        $this->networkPoolName = $networkPoolName;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_networkPool(){
        return $this->networkPool;
    }
    public function set_networkPool($networkPool) {
        $this->networkPool = $networkPool;
    }
    public function get_gateway(){
        return $this->gateway;
    }
    public function set_gateway($gateway) {
        $this->gateway = $gateway;
    }
    public function get_ipScopeId(){
        return $this->ipScopeId;
    }
    public function set_ipScopeId($ipScopeId) {
        $this->ipScopeId = $ipScopeId;
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
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->orgName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'orgName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'orgName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->orgName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='orgName')));
        }
        if (!is_null($this->dns2)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'dns2', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'dns2=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->dns2, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='dns2')));
        }
        if (!is_null($this->dns1)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'dns1', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'dns1=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->dns1, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='dns1')));
        }
        if (!is_null($this->netmask)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'netmask', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'netmask=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->netmask, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='netmask')));
        }
        if (!is_null($this->isIpScopeInherited)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isIpScopeInherited', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isIpScopeInherited=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isIpScopeInherited, $input_name='isIpScopeInherited')));
        }
        if (!is_null($this->networkPoolName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'networkPoolName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'networkPoolName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->networkPoolName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='networkPoolName')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->networkPool)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'networkPool', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'networkPool=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->networkPool, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='networkPool')));
        }
        if (!is_null($this->gateway)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'gateway', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'gateway=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->gateway, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='gateway')));
        }
        if (!is_null($this->ipScopeId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ipScopeId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ipScopeId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ipScopeId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ipScopeId')));
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
        $nddns2 = $attrs->getNamedItem('dns2');
        if (!is_null($nddns2)) {
            $this->dns2 = $nddns2->value;
            if (isset($nddns2->prefix)) {
                $this->namespace['dns2'] = $nddns2->prefix;
                $nsUri = $nddns2->lookupNamespaceURI($nddns2->prefix);
            }
            $node->removeAttributeNS($nsUri, 'dns2');
        } else {
            $this->dns2 = null;
        }
        $nddns1 = $attrs->getNamedItem('dns1');
        if (!is_null($nddns1)) {
            $this->dns1 = $nddns1->value;
            if (isset($nddns1->prefix)) {
                $this->namespace['dns1'] = $nddns1->prefix;
                $nsUri = $nddns1->lookupNamespaceURI($nddns1->prefix);
            }
            $node->removeAttributeNS($nsUri, 'dns1');
        } else {
            $this->dns1 = null;
        }
        $ndnetmask = $attrs->getNamedItem('netmask');
        if (!is_null($ndnetmask)) {
            $this->netmask = $ndnetmask->value;
            if (isset($ndnetmask->prefix)) {
                $this->namespace['netmask'] = $ndnetmask->prefix;
                $nsUri = $ndnetmask->lookupNamespaceURI($ndnetmask->prefix);
            }
            $node->removeAttributeNS($nsUri, 'netmask');
        } else {
            $this->netmask = null;
        }
        $ndisIpScopeInherited = $attrs->getNamedItem('isIpScopeInherited');
        if (!is_null($ndisIpScopeInherited)) {
            $this->isIpScopeInherited = VMware_VCloud_API_Helper::get_boolean($ndisIpScopeInherited->value);
            if (isset($ndisIpScopeInherited->prefix)) {
                $this->namespace['isIpScopeInherited'] = $ndisIpScopeInherited->prefix;
                $nsUri = $ndisIpScopeInherited->lookupNamespaceURI($ndisIpScopeInherited->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isIpScopeInherited');
        } else {
            $this->isIpScopeInherited = null;
        }
        $ndnetworkPoolName = $attrs->getNamedItem('networkPoolName');
        if (!is_null($ndnetworkPoolName)) {
            $this->networkPoolName = $ndnetworkPoolName->value;
            if (isset($ndnetworkPoolName->prefix)) {
                $this->namespace['networkPoolName'] = $ndnetworkPoolName->prefix;
                $nsUri = $ndnetworkPoolName->lookupNamespaceURI($ndnetworkPoolName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'networkPoolName');
        } else {
            $this->networkPoolName = null;
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
        $ndnetworkPool = $attrs->getNamedItem('networkPool');
        if (!is_null($ndnetworkPool)) {
            $this->networkPool = $ndnetworkPool->value;
            if (isset($ndnetworkPool->prefix)) {
                $this->namespace['networkPool'] = $ndnetworkPool->prefix;
                $nsUri = $ndnetworkPool->lookupNamespaceURI($ndnetworkPool->prefix);
            }
            $node->removeAttributeNS($nsUri, 'networkPool');
        } else {
            $this->networkPool = null;
        }
        $ndgateway = $attrs->getNamedItem('gateway');
        if (!is_null($ndgateway)) {
            $this->gateway = $ndgateway->value;
            if (isset($ndgateway->prefix)) {
                $this->namespace['gateway'] = $ndgateway->prefix;
                $nsUri = $ndgateway->lookupNamespaceURI($ndgateway->prefix);
            }
            $node->removeAttributeNS($nsUri, 'gateway');
        } else {
            $this->gateway = null;
        }
        $ndipScopeId = $attrs->getNamedItem('ipScopeId');
        if (!is_null($ndipScopeId)) {
            $this->ipScopeId = $ndipScopeId->value;
            if (isset($ndipScopeId->prefix)) {
                $this->namespace['ipScopeId'] = $ndipScopeId->prefix;
                $nsUri = $ndipScopeId->lookupNamespaceURI($ndipScopeId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ipScopeId');
        } else {
            $this->ipScopeId = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}