<?php
class VMware_VCloud_API_QueryResultOrgVdcNetworkRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $linkType = null;
    protected $isIpScopeInherited = null;
    protected $name = null;
    protected $dns2 = null;
    protected $dns1 = null;
    protected $connectedTo = null;
    protected $vdcName = null;
    protected $netmask = null;
    protected $vdc = null;
    protected $dnsSuffix = null;
    protected $isBusy = null;
    protected $isShared = null;
    protected $defaultGateway = null;
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
    * @param int $linkType - [optional] an attribute, 
    * @param boolean $isIpScopeInherited - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $dns2 - [optional] an attribute, 
    * @param string $dns1 - [optional] an attribute, 
    * @param string $connectedTo - [optional] an attribute, 
    * @param string $vdcName - [optional] an attribute, 
    * @param string $netmask - [optional] an attribute, 
    * @param string $vdc - [optional] an attribute, 
    * @param string $dnsSuffix - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param boolean $isShared - [optional] an attribute, 
    * @param string $defaultGateway - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $linkType=null, $isIpScopeInherited=null, $name=null, $dns2=null, $dns1=null, $connectedTo=null, $vdcName=null, $netmask=null, $vdc=null, $dnsSuffix=null, $isBusy=null, $isShared=null, $defaultGateway=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->linkType = $linkType;
        $this->isIpScopeInherited = $isIpScopeInherited;
        $this->name = $name;
        $this->dns2 = $dns2;
        $this->dns1 = $dns1;
        $this->connectedTo = $connectedTo;
        $this->vdcName = $vdcName;
        $this->netmask = $netmask;
        $this->vdc = $vdc;
        $this->dnsSuffix = $dnsSuffix;
        $this->isBusy = $isBusy;
        $this->isShared = $isShared;
        $this->defaultGateway = $defaultGateway;
        $this->tagName = 'OrgVdcNetworkRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_linkType(){
        return $this->linkType;
    }
    public function set_linkType($linkType) {
        $this->linkType = $linkType;
    }
    public function get_isIpScopeInherited(){
        return $this->isIpScopeInherited;
    }
    public function set_isIpScopeInherited($isIpScopeInherited) {
        $this->isIpScopeInherited = $isIpScopeInherited;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
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
    public function get_connectedTo(){
        return $this->connectedTo;
    }
    public function set_connectedTo($connectedTo) {
        $this->connectedTo = $connectedTo;
    }
    public function get_vdcName(){
        return $this->vdcName;
    }
    public function set_vdcName($vdcName) {
        $this->vdcName = $vdcName;
    }
    public function get_netmask(){
        return $this->netmask;
    }
    public function set_netmask($netmask) {
        $this->netmask = $netmask;
    }
    public function get_vdc(){
        return $this->vdc;
    }
    public function set_vdc($vdc) {
        $this->vdc = $vdc;
    }
    public function get_dnsSuffix(){
        return $this->dnsSuffix;
    }
    public function set_dnsSuffix($dnsSuffix) {
        $this->dnsSuffix = $dnsSuffix;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
    }
    public function get_isShared(){
        return $this->isShared;
    }
    public function set_isShared($isShared) {
        $this->isShared = $isShared;
    }
    public function get_defaultGateway(){
        return $this->defaultGateway;
    }
    public function set_defaultGateway($defaultGateway) {
        $this->defaultGateway = $defaultGateway;
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
        if (!is_null($this->linkType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'linkType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'linkType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->linkType, $input_name='linkType')));
        }
        if (!is_null($this->isIpScopeInherited)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isIpScopeInherited', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isIpScopeInherited=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isIpScopeInherited, $input_name='isIpScopeInherited')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->dns2)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'dns2', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'dns2=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->dns2, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='dns2')));
        }
        if (!is_null($this->dns1)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'dns1', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'dns1=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->dns1, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='dns1')));
        }
        if (!is_null($this->connectedTo)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'connectedTo', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'connectedTo=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->connectedTo, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='connectedTo')));
        }
        if (!is_null($this->vdcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcName')));
        }
        if (!is_null($this->netmask)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'netmask', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'netmask=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->netmask, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='netmask')));
        }
        if (!is_null($this->vdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdc')));
        }
        if (!is_null($this->dnsSuffix)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'dnsSuffix', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'dnsSuffix=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->dnsSuffix, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='dnsSuffix')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->isShared)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isShared', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isShared=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isShared, $input_name='isShared')));
        }
        if (!is_null($this->defaultGateway)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'defaultGateway', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'defaultGateway=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->defaultGateway, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='defaultGateway')));
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
        $ndlinkType = $attrs->getNamedItem('linkType');
        if (!is_null($ndlinkType)) {
            $this->linkType = sprintf('%d', $ndlinkType->value);
            if (isset($ndlinkType->prefix)) {
                $this->namespace['linkType'] = $ndlinkType->prefix;
                $nsUri = $ndlinkType->lookupNamespaceURI($ndlinkType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'linkType');
        } else {
            $this->linkType = null;
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
        $ndconnectedTo = $attrs->getNamedItem('connectedTo');
        if (!is_null($ndconnectedTo)) {
            $this->connectedTo = $ndconnectedTo->value;
            if (isset($ndconnectedTo->prefix)) {
                $this->namespace['connectedTo'] = $ndconnectedTo->prefix;
                $nsUri = $ndconnectedTo->lookupNamespaceURI($ndconnectedTo->prefix);
            }
            $node->removeAttributeNS($nsUri, 'connectedTo');
        } else {
            $this->connectedTo = null;
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
        $nddnsSuffix = $attrs->getNamedItem('dnsSuffix');
        if (!is_null($nddnsSuffix)) {
            $this->dnsSuffix = $nddnsSuffix->value;
            if (isset($nddnsSuffix->prefix)) {
                $this->namespace['dnsSuffix'] = $nddnsSuffix->prefix;
                $nsUri = $nddnsSuffix->lookupNamespaceURI($nddnsSuffix->prefix);
            }
            $node->removeAttributeNS($nsUri, 'dnsSuffix');
        } else {
            $this->dnsSuffix = null;
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
        $ndisShared = $attrs->getNamedItem('isShared');
        if (!is_null($ndisShared)) {
            $this->isShared = VMware_VCloud_API_Helper::get_boolean($ndisShared->value);
            if (isset($ndisShared->prefix)) {
                $this->namespace['isShared'] = $ndisShared->prefix;
                $nsUri = $ndisShared->lookupNamespaceURI($ndisShared->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isShared');
        } else {
            $this->isShared = null;
        }
        $nddefaultGateway = $attrs->getNamedItem('defaultGateway');
        if (!is_null($nddefaultGateway)) {
            $this->defaultGateway = $nddefaultGateway->value;
            if (isset($nddefaultGateway->prefix)) {
                $this->namespace['defaultGateway'] = $nddefaultGateway->prefix;
                $nsUri = $nddefaultGateway->lookupNamespaceURI($nddefaultGateway->prefix);
            }
            $node->removeAttributeNS($nsUri, 'defaultGateway');
        } else {
            $this->defaultGateway = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}