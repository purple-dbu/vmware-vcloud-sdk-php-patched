<?php
class VMware_VCloud_API_QueryResultPortgroupRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $portgroupType = null;
    protected $name = null;
    protected $moref = null;
    protected $vc = null;
    protected $isVCEnabled = null;
    protected $networkName = null;
    protected $scopeType = null;
    protected $vcName = null;
    protected $network = null;
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
    * @param string $portgroupType - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $moref - [optional] an attribute, 
    * @param string $vc - [optional] an attribute, 
    * @param boolean $isVCEnabled - [optional] an attribute, 
    * @param string $networkName - [optional] an attribute, 
    * @param int $scopeType - [optional] an attribute, 
    * @param string $vcName - [optional] an attribute, 
    * @param string $network - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $portgroupType=null, $name=null, $moref=null, $vc=null, $isVCEnabled=null, $networkName=null, $scopeType=null, $vcName=null, $network=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->portgroupType = $portgroupType;
        $this->name = $name;
        $this->moref = $moref;
        $this->vc = $vc;
        $this->isVCEnabled = $isVCEnabled;
        $this->networkName = $networkName;
        $this->scopeType = $scopeType;
        $this->vcName = $vcName;
        $this->network = $network;
        $this->tagName = 'PortgroupRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_portgroupType(){
        return $this->portgroupType;
    }
    public function set_portgroupType($portgroupType) {
        $this->portgroupType = $portgroupType;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_moref(){
        return $this->moref;
    }
    public function set_moref($moref) {
        $this->moref = $moref;
    }
    public function get_vc(){
        return $this->vc;
    }
    public function set_vc($vc) {
        $this->vc = $vc;
    }
    public function get_isVCEnabled(){
        return $this->isVCEnabled;
    }
    public function set_isVCEnabled($isVCEnabled) {
        $this->isVCEnabled = $isVCEnabled;
    }
    public function get_networkName(){
        return $this->networkName;
    }
    public function set_networkName($networkName) {
        $this->networkName = $networkName;
    }
    public function get_scopeType(){
        return $this->scopeType;
    }
    public function set_scopeType($scopeType) {
        $this->scopeType = $scopeType;
    }
    public function get_vcName(){
        return $this->vcName;
    }
    public function set_vcName($vcName) {
        $this->vcName = $vcName;
    }
    public function get_network(){
        return $this->network;
    }
    public function set_network($network) {
        $this->network = $network;
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
        if (!is_null($this->portgroupType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'portgroupType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'portgroupType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->portgroupType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='portgroupType')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->moref)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'moref', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'moref=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->moref, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='moref')));
        }
        if (!is_null($this->vc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vc')));
        }
        if (!is_null($this->isVCEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isVCEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isVCEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isVCEnabled, $input_name='isVCEnabled')));
        }
        if (!is_null($this->networkName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'networkName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'networkName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->networkName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='networkName')));
        }
        if (!is_null($this->scopeType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'scopeType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'scopeType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->scopeType, $input_name='scopeType')));
        }
        if (!is_null($this->vcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vcName')));
        }
        if (!is_null($this->network)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'network', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'network=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->network, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='network')));
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
        $ndportgroupType = $attrs->getNamedItem('portgroupType');
        if (!is_null($ndportgroupType)) {
            $this->portgroupType = $ndportgroupType->value;
            if (isset($ndportgroupType->prefix)) {
                $this->namespace['portgroupType'] = $ndportgroupType->prefix;
                $nsUri = $ndportgroupType->lookupNamespaceURI($ndportgroupType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'portgroupType');
        } else {
            $this->portgroupType = null;
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
        $ndmoref = $attrs->getNamedItem('moref');
        if (!is_null($ndmoref)) {
            $this->moref = $ndmoref->value;
            if (isset($ndmoref->prefix)) {
                $this->namespace['moref'] = $ndmoref->prefix;
                $nsUri = $ndmoref->lookupNamespaceURI($ndmoref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'moref');
        } else {
            $this->moref = null;
        }
        $ndvc = $attrs->getNamedItem('vc');
        if (!is_null($ndvc)) {
            $this->vc = $ndvc->value;
            if (isset($ndvc->prefix)) {
                $this->namespace['vc'] = $ndvc->prefix;
                $nsUri = $ndvc->lookupNamespaceURI($ndvc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vc');
        } else {
            $this->vc = null;
        }
        $ndisVCEnabled = $attrs->getNamedItem('isVCEnabled');
        if (!is_null($ndisVCEnabled)) {
            $this->isVCEnabled = VMware_VCloud_API_Helper::get_boolean($ndisVCEnabled->value);
            if (isset($ndisVCEnabled->prefix)) {
                $this->namespace['isVCEnabled'] = $ndisVCEnabled->prefix;
                $nsUri = $ndisVCEnabled->lookupNamespaceURI($ndisVCEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isVCEnabled');
        } else {
            $this->isVCEnabled = null;
        }
        $ndnetworkName = $attrs->getNamedItem('networkName');
        if (!is_null($ndnetworkName)) {
            $this->networkName = $ndnetworkName->value;
            if (isset($ndnetworkName->prefix)) {
                $this->namespace['networkName'] = $ndnetworkName->prefix;
                $nsUri = $ndnetworkName->lookupNamespaceURI($ndnetworkName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'networkName');
        } else {
            $this->networkName = null;
        }
        $ndscopeType = $attrs->getNamedItem('scopeType');
        if (!is_null($ndscopeType)) {
            $this->scopeType = sprintf('%d', $ndscopeType->value);
            if (isset($ndscopeType->prefix)) {
                $this->namespace['scopeType'] = $ndscopeType->prefix;
                $nsUri = $ndscopeType->lookupNamespaceURI($ndscopeType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'scopeType');
        } else {
            $this->scopeType = null;
        }
        $ndvcName = $attrs->getNamedItem('vcName');
        if (!is_null($ndvcName)) {
            $this->vcName = $ndvcName->value;
            if (isset($ndvcName->prefix)) {
                $this->namespace['vcName'] = $ndvcName->prefix;
                $nsUri = $ndvcName->lookupNamespaceURI($ndvcName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vcName');
        } else {
            $this->vcName = null;
        }
        $ndnetwork = $attrs->getNamedItem('network');
        if (!is_null($ndnetwork)) {
            $this->network = $ndnetwork->value;
            if (isset($ndnetwork->prefix)) {
                $this->namespace['network'] = $ndnetwork->prefix;
                $nsUri = $ndnetwork->lookupNamespaceURI($ndnetwork->prefix);
            }
            $node->removeAttributeNS($nsUri, 'network');
        } else {
            $this->network = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}