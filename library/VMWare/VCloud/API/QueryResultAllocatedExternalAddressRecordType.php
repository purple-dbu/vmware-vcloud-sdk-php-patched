<?php
class VMware_VCloud_API_QueryResultAllocatedExternalAddressRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $ipAddress = null;
    protected $network = null;
    protected $linkedNetwork = null;
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
    * @param string $ipAddress - [optional] an attribute, 
    * @param string $network - [optional] an attribute, 
    * @param string $linkedNetwork - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $ipAddress=null, $network=null, $linkedNetwork=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->ipAddress = $ipAddress;
        $this->network = $network;
        $this->linkedNetwork = $linkedNetwork;
        $this->tagName = 'AllocatedExternalAddressRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_ipAddress(){
        return $this->ipAddress;
    }
    public function set_ipAddress($ipAddress) {
        $this->ipAddress = $ipAddress;
    }
    public function get_network(){
        return $this->network;
    }
    public function set_network($network) {
        $this->network = $network;
    }
    public function get_linkedNetwork(){
        return $this->linkedNetwork;
    }
    public function set_linkedNetwork($linkedNetwork) {
        $this->linkedNetwork = $linkedNetwork;
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
        if (!is_null($this->ipAddress)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ipAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ipAddress=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ipAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ipAddress')));
        }
        if (!is_null($this->network)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'network', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'network=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->network, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='network')));
        }
        if (!is_null($this->linkedNetwork)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'linkedNetwork', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'linkedNetwork=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->linkedNetwork, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='linkedNetwork')));
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
        $ndipAddress = $attrs->getNamedItem('ipAddress');
        if (!is_null($ndipAddress)) {
            $this->ipAddress = $ndipAddress->value;
            if (isset($ndipAddress->prefix)) {
                $this->namespace['ipAddress'] = $ndipAddress->prefix;
                $nsUri = $ndipAddress->lookupNamespaceURI($ndipAddress->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ipAddress');
        } else {
            $this->ipAddress = null;
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
        $ndlinkedNetwork = $attrs->getNamedItem('linkedNetwork');
        if (!is_null($ndlinkedNetwork)) {
            $this->linkedNetwork = $ndlinkedNetwork->value;
            if (isset($ndlinkedNetwork->prefix)) {
                $this->namespace['linkedNetwork'] = $ndlinkedNetwork->prefix;
                $nsUri = $ndlinkedNetwork->lookupNamespaceURI($ndlinkedNetwork->prefix);
            }
            $node->removeAttributeNS($nsUri, 'linkedNetwork');
        } else {
            $this->linkedNetwork = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}