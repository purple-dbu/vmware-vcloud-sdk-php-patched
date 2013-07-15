<?php
class VMware_VCloud_API_VAppNetworkConfigurationType extends VMware_VCloud_API_ResourceType {
    protected $networkName = null;
    protected $Description = null;
    protected $Configuration = null;
    protected $IsDeployed = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $networkName - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_NetworkConfigurationType $Configuration - [required]
    * @param boolean $IsDeployed - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $networkName=null, $Description=null, $Configuration=null, $IsDeployed=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->networkName = $networkName;
        $this->Description = $Description;
        $this->Configuration = $Configuration;
        $this->IsDeployed = $IsDeployed;
        $this->tagName = 'NetworkConfig';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function getConfiguration() {
        return $this->Configuration;
    }
    public function setConfiguration($Configuration) { 
        $this->Configuration = $Configuration;
    }
    public function getIsDeployed() {
        return $this->IsDeployed;
    }
    public function setIsDeployed($IsDeployed) { 
        $this->IsDeployed = $IsDeployed;
    }
    public function get_networkName(){
        return $this->networkName;
    }
    public function set_networkName($networkName) {
        $this->networkName = $networkName;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'networkName', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'networkName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->networkName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='networkName')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Description)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Description', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Description>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Description, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Description')) . "</" . $ns . "Description>\n");
        }
        if (!is_null($this->Configuration)) {
            $out = $this->Configuration->export('Configuration', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->IsDeployed)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsDeployed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsDeployed>" . VMware_VCloud_API_Helper::format_boolean($this->IsDeployed, $input_name='IsDeployed') . "</" . $ns . "IsDeployed>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Description) ||
            !is_null($this->Configuration) ||
            !is_null($this->IsDeployed) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $sval = $child->nodeValue;
            $this->Description = $sval;
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Configuration') {
            $obj = new VMware_VCloud_API_NetworkConfigurationType();
            $obj->build($child);
            $obj->set_tagName('Configuration');
            $this->setConfiguration($obj);
            if (!empty($namespace)) {
                $this->namespace['Configuration'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsDeployed') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsDeployed = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsDeployed'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}