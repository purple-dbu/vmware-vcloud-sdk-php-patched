<?php
class VMware_VCloud_API_SubnetParticipationType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Gateway = null;
    protected $Netmask = null;
    protected $IpAddress = null;
    protected $IpRanges = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Gateway - [required] 
    * @param string $Netmask - [required] 
    * @param string $IpAddress - [optional] 
    * @param VMware_VCloud_API_IpRangesType $IpRanges - [optional]
    */
    public function __construct($VCloudExtension=null, $Gateway=null, $Netmask=null, $IpAddress=null, $IpRanges=null) {
        parent::__construct($VCloudExtension);
        $this->Gateway = $Gateway;
        $this->Netmask = $Netmask;
        $this->IpAddress = $IpAddress;
        $this->IpRanges = $IpRanges;
        $this->tagName = 'SubnetParticipation';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getGateway() {
        return $this->Gateway;
    }
    public function setGateway($Gateway) { 
        $this->Gateway = $Gateway;
    }
    public function getNetmask() {
        return $this->Netmask;
    }
    public function setNetmask($Netmask) { 
        $this->Netmask = $Netmask;
    }
    public function getIpAddress() {
        return $this->IpAddress;
    }
    public function setIpAddress($IpAddress) { 
        $this->IpAddress = $IpAddress;
    }
    public function getIpRanges() {
        return $this->IpRanges;
    }
    public function setIpRanges($IpRanges) { 
        $this->IpRanges = $IpRanges;
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Gateway)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Gateway', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Gateway>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Gateway, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Gateway')) . "</" . $ns . "Gateway>\n");
        }
        if (!is_null($this->Netmask)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Netmask', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Netmask>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Netmask, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Netmask')) . "</" . $ns . "Netmask>\n");
        }
        if (!is_null($this->IpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->IpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='IpAddress')) . "</" . $ns . "IpAddress>\n");
        }
        if (!is_null($this->IpRanges)) {
            $out = $this->IpRanges->export('IpRanges', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Gateway) ||
            !is_null($this->Netmask) ||
            !is_null($this->IpAddress) ||
            !is_null($this->IpRanges) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Gateway') {
            $sval = $child->nodeValue;
            $this->Gateway = $sval;
            if (!empty($namespace)) {
                $this->namespace['Gateway'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Netmask') {
            $sval = $child->nodeValue;
            $this->Netmask = $sval;
            if (!empty($namespace)) {
                $this->namespace['Netmask'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpAddress') {
            $sval = $child->nodeValue;
            $this->IpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['IpAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpRanges') {
            $obj = new VMware_VCloud_API_IpRangesType();
            $obj->build($child);
            $obj->set_tagName('IpRanges');
            $this->setIpRanges($obj);
            if (!empty($namespace)) {
                $this->namespace['IpRanges'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}