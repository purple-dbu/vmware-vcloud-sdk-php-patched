<?php
class VMware_VCloud_API_DhcpServiceType extends VMware_VCloud_API_NetworkServiceType {
    protected $DefaultLeaseTime = null;
    protected $MaxLeaseTime = null;
    protected $IpRange = null;
    protected $RouterIp = null;
    protected $SubMask = null;
    protected $PrimaryNameServer = null;
    protected $SecondaryNameServer = null;
    protected $DomainName = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $IsEnabled - [optional] 
    * @param int $DefaultLeaseTime - [optional] 
    * @param int $MaxLeaseTime - [optional] 
    * @param VMware_VCloud_API_IpRangeType $IpRange - [optional]
    * @param string $RouterIp - [optional] 
    * @param string $SubMask - [optional] 
    * @param string $PrimaryNameServer - [optional] 
    * @param string $SecondaryNameServer - [optional] 
    * @param string $DomainName - [optional] 
    */
    public function __construct($VCloudExtension=null, $IsEnabled=null, $DefaultLeaseTime=null, $MaxLeaseTime=null, $IpRange=null, $RouterIp=null, $SubMask=null, $PrimaryNameServer=null, $SecondaryNameServer=null, $DomainName=null) {
        parent::__construct($VCloudExtension, $IsEnabled);
        $this->DefaultLeaseTime = $DefaultLeaseTime;
        $this->MaxLeaseTime = $MaxLeaseTime;
        $this->IpRange = $IpRange;
        $this->RouterIp = $RouterIp;
        $this->SubMask = $SubMask;
        $this->PrimaryNameServer = $PrimaryNameServer;
        $this->SecondaryNameServer = $SecondaryNameServer;
        $this->DomainName = $DomainName;
        $this->tagName = 'DhcpService';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDefaultLeaseTime() {
        return $this->DefaultLeaseTime;
    }
    public function setDefaultLeaseTime($DefaultLeaseTime) { 
        $this->DefaultLeaseTime = $DefaultLeaseTime;
    }
    public function getMaxLeaseTime() {
        return $this->MaxLeaseTime;
    }
    public function setMaxLeaseTime($MaxLeaseTime) { 
        $this->MaxLeaseTime = $MaxLeaseTime;
    }
    public function getIpRange() {
        return $this->IpRange;
    }
    public function setIpRange($IpRange) { 
        $this->IpRange = $IpRange;
    }
    public function getRouterIp() {
        return $this->RouterIp;
    }
    public function setRouterIp($RouterIp) { 
        $this->RouterIp = $RouterIp;
    }
    public function getSubMask() {
        return $this->SubMask;
    }
    public function setSubMask($SubMask) { 
        $this->SubMask = $SubMask;
    }
    public function getPrimaryNameServer() {
        return $this->PrimaryNameServer;
    }
    public function setPrimaryNameServer($PrimaryNameServer) { 
        $this->PrimaryNameServer = $PrimaryNameServer;
    }
    public function getSecondaryNameServer() {
        return $this->SecondaryNameServer;
    }
    public function setSecondaryNameServer($SecondaryNameServer) { 
        $this->SecondaryNameServer = $SecondaryNameServer;
    }
    public function getDomainName() {
        return $this->DomainName;
    }
    public function setDomainName($DomainName) { 
        $this->DomainName = $DomainName;
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
        if (!is_null($this->DefaultLeaseTime)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DefaultLeaseTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DefaultLeaseTime>" . VMware_VCloud_API_Helper::format_integer($this->DefaultLeaseTime, $input_name='DefaultLeaseTime') . "</" . $ns . "DefaultLeaseTime>\n");
        }
        if (!is_null($this->MaxLeaseTime)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MaxLeaseTime', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MaxLeaseTime>" . VMware_VCloud_API_Helper::format_integer($this->MaxLeaseTime, $input_name='MaxLeaseTime') . "</" . $ns . "MaxLeaseTime>\n");
        }
        if (!is_null($this->IpRange)) {
            $out = $this->IpRange->export('IpRange', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->RouterIp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RouterIp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RouterIp>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->RouterIp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='RouterIp')) . "</" . $ns . "RouterIp>\n");
        }
        if (!is_null($this->SubMask)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SubMask', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SubMask>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SubMask, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SubMask')) . "</" . $ns . "SubMask>\n");
        }
        if (!is_null($this->PrimaryNameServer)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PrimaryNameServer', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PrimaryNameServer>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->PrimaryNameServer, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='PrimaryNameServer')) . "</" . $ns . "PrimaryNameServer>\n");
        }
        if (!is_null($this->SecondaryNameServer)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SecondaryNameServer', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SecondaryNameServer>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SecondaryNameServer, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SecondaryNameServer')) . "</" . $ns . "SecondaryNameServer>\n");
        }
        if (!is_null($this->DomainName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DomainName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DomainName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DomainName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DomainName')) . "</" . $ns . "DomainName>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->DefaultLeaseTime) ||
            !is_null($this->MaxLeaseTime) ||
            !is_null($this->IpRange) ||
            !is_null($this->RouterIp) ||
            !is_null($this->SubMask) ||
            !is_null($this->PrimaryNameServer) ||
            !is_null($this->SecondaryNameServer) ||
            !is_null($this->DomainName) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultLeaseTime') {
            $sval = $child->nodeValue;
            $this->DefaultLeaseTime = $sval;
            if (!empty($namespace)) {
                $this->namespace['DefaultLeaseTime'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MaxLeaseTime') {
            $sval = $child->nodeValue;
            $this->MaxLeaseTime = $sval;
            if (!empty($namespace)) {
                $this->namespace['MaxLeaseTime'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpRange') {
            $obj = new VMware_VCloud_API_IpRangeType();
            $obj->build($child);
            $obj->set_tagName('IpRange');
            $this->setIpRange($obj);
            if (!empty($namespace)) {
                $this->namespace['IpRange'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RouterIp') {
            $sval = $child->nodeValue;
            $this->RouterIp = $sval;
            if (!empty($namespace)) {
                $this->namespace['RouterIp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SubMask') {
            $sval = $child->nodeValue;
            $this->SubMask = $sval;
            if (!empty($namespace)) {
                $this->namespace['SubMask'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PrimaryNameServer') {
            $sval = $child->nodeValue;
            $this->PrimaryNameServer = $sval;
            if (!empty($namespace)) {
                $this->namespace['PrimaryNameServer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SecondaryNameServer') {
            $sval = $child->nodeValue;
            $this->SecondaryNameServer = $sval;
            if (!empty($namespace)) {
                $this->namespace['SecondaryNameServer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DomainName') {
            $sval = $child->nodeValue;
            $this->DomainName = $sval;
            if (!empty($namespace)) {
                $this->namespace['DomainName'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}