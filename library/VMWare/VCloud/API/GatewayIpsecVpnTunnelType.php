<?php
class VMware_VCloud_API_GatewayIpsecVpnTunnelType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Name = null;
    protected $Description = null;
    protected $IpsecVpnPeer = null;
    protected $PeerIpAddress = null;
    protected $PeerId = null;
    protected $LocalIpAddress = null;
    protected $LocalId = null;
    protected $LocalSubnet = array();
    protected $PeerSubnet = array();
    protected $SharedSecret = null;
    protected $SharedSecretEncrypted = null;
    protected $EncryptionProtocol = null;
    protected $Mtu = null;
    protected $IsEnabled = null;
    protected $IsOperational = null;
    protected $ErrorDetails = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Name - [optional] 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_IpsecVpnPeerType $IpsecVpnPeer - [optional]
    * @param string $PeerIpAddress - [optional] 
    * @param string $PeerId - [optional] 
    * @param string $LocalIpAddress - [optional] 
    * @param string $LocalId - [optional] 
    * @param array $LocalSubnet - [optional] an array of VMware_VCloud_API_IpsecVpnSubnetType objects
    * @param array $PeerSubnet - [optional] an array of VMware_VCloud_API_IpsecVpnSubnetType objects
    * @param string $SharedSecret - [optional] 
    * @param boolean $SharedSecretEncrypted - [optional] 
    * @param string $EncryptionProtocol - [optional] 
    * @param int $Mtu - [optional] 
    * @param boolean $IsEnabled - [optional] 
    * @param boolean $IsOperational - [optional] 
    * @param string $ErrorDetails - [optional] 
    */
    public function __construct($VCloudExtension=null, $Name=null, $Description=null, $IpsecVpnPeer=null, $PeerIpAddress=null, $PeerId=null, $LocalIpAddress=null, $LocalId=null, $LocalSubnet=null, $PeerSubnet=null, $SharedSecret=null, $SharedSecretEncrypted=null, $EncryptionProtocol=null, $Mtu=null, $IsEnabled=null, $IsOperational=null, $ErrorDetails=null) {
        parent::__construct($VCloudExtension);
        $this->Name = $Name;
        $this->Description = $Description;
        $this->IpsecVpnPeer = $IpsecVpnPeer;
        $this->PeerIpAddress = $PeerIpAddress;
        $this->PeerId = $PeerId;
        $this->LocalIpAddress = $LocalIpAddress;
        $this->LocalId = $LocalId;
        if (!is_null($LocalSubnet)) {
            $this->LocalSubnet = $LocalSubnet;
        }
        if (!is_null($PeerSubnet)) {
            $this->PeerSubnet = $PeerSubnet;
        }
        $this->SharedSecret = $SharedSecret;
        $this->SharedSecretEncrypted = $SharedSecretEncrypted;
        $this->EncryptionProtocol = $EncryptionProtocol;
        $this->Mtu = $Mtu;
        $this->IsEnabled = $IsEnabled;
        $this->IsOperational = $IsOperational;
        $this->ErrorDetails = $ErrorDetails;
        $this->tagName = 'Tunnel';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) { 
        $this->Name = $Name;
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function getIpsecVpnPeer() {
        return $this->IpsecVpnPeer;
    }
    public function setIpsecVpnPeer($IpsecVpnPeer) { 
        $this->IpsecVpnPeer = $IpsecVpnPeer;
    }
    public function getPeerIpAddress() {
        return $this->PeerIpAddress;
    }
    public function setPeerIpAddress($PeerIpAddress) { 
        $this->PeerIpAddress = $PeerIpAddress;
    }
    public function getPeerId() {
        return $this->PeerId;
    }
    public function setPeerId($PeerId) { 
        $this->PeerId = $PeerId;
    }
    public function getLocalIpAddress() {
        return $this->LocalIpAddress;
    }
    public function setLocalIpAddress($LocalIpAddress) { 
        $this->LocalIpAddress = $LocalIpAddress;
    }
    public function getLocalId() {
        return $this->LocalId;
    }
    public function setLocalId($LocalId) { 
        $this->LocalId = $LocalId;
    }
    public function getLocalSubnet() {
        return $this->LocalSubnet;
    }
    public function setLocalSubnet($LocalSubnet) { 
        $this->LocalSubnet = $LocalSubnet;
    }
    public function addLocalSubnet($value) { array_push($this->LocalSubnet, $value); }
    public function getPeerSubnet() {
        return $this->PeerSubnet;
    }
    public function setPeerSubnet($PeerSubnet) { 
        $this->PeerSubnet = $PeerSubnet;
    }
    public function addPeerSubnet($value) { array_push($this->PeerSubnet, $value); }
    public function getSharedSecret() {
        return $this->SharedSecret;
    }
    public function setSharedSecret($SharedSecret) { 
        $this->SharedSecret = $SharedSecret;
    }
    public function getSharedSecretEncrypted() {
        return $this->SharedSecretEncrypted;
    }
    public function setSharedSecretEncrypted($SharedSecretEncrypted) { 
        $this->SharedSecretEncrypted = $SharedSecretEncrypted;
    }
    public function getEncryptionProtocol() {
        return $this->EncryptionProtocol;
    }
    public function setEncryptionProtocol($EncryptionProtocol) { 
        $this->EncryptionProtocol = $EncryptionProtocol;
    }
    public function getMtu() {
        return $this->Mtu;
    }
    public function setMtu($Mtu) { 
        $this->Mtu = $Mtu;
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getIsOperational() {
        return $this->IsOperational;
    }
    public function setIsOperational($IsOperational) { 
        $this->IsOperational = $IsOperational;
    }
    public function getErrorDetails() {
        return $this->ErrorDetails;
    }
    public function setErrorDetails($ErrorDetails) { 
        $this->ErrorDetails = $ErrorDetails;
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
        if (!is_null($this->Name)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Name>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Name')) . "</" . $ns . "Name>\n");
        }
        if (!is_null($this->Description)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Description', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Description>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Description, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Description')) . "</" . $ns . "Description>\n");
        }
        if (!is_null($this->IpsecVpnPeer)) {
            $out = $this->IpsecVpnPeer->export('IpsecVpnPeer', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->PeerIpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PeerIpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PeerIpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->PeerIpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='PeerIpAddress')) . "</" . $ns . "PeerIpAddress>\n");
        }
        if (!is_null($this->PeerId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PeerId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PeerId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->PeerId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='PeerId')) . "</" . $ns . "PeerId>\n");
        }
        if (!is_null($this->LocalIpAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LocalIpAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LocalIpAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->LocalIpAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='LocalIpAddress')) . "</" . $ns . "LocalIpAddress>\n");
        }
        if (!is_null($this->LocalId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LocalId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LocalId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->LocalId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='LocalId')) . "</" . $ns . "LocalId>\n");
        }
        if (isset($this->LocalSubnet)) {
            foreach ($this->LocalSubnet as $LocalSubnet) {
                $out = $LocalSubnet->export('LocalSubnet', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->PeerSubnet)) {
            foreach ($this->PeerSubnet as $PeerSubnet) {
                $out = $PeerSubnet->export('PeerSubnet', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->SharedSecret)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SharedSecret', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SharedSecret>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SharedSecret, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SharedSecret')) . "</" . $ns . "SharedSecret>\n");
        }
        if (!is_null($this->SharedSecretEncrypted)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SharedSecretEncrypted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SharedSecretEncrypted>" . VMware_VCloud_API_Helper::format_boolean($this->SharedSecretEncrypted, $input_name='SharedSecretEncrypted') . "</" . $ns . "SharedSecretEncrypted>\n");
        }
        if (!is_null($this->EncryptionProtocol)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'EncryptionProtocol', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "EncryptionProtocol>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->EncryptionProtocol, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='EncryptionProtocol')) . "</" . $ns . "EncryptionProtocol>\n");
        }
        if (!is_null($this->Mtu)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Mtu', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Mtu>" . VMware_VCloud_API_Helper::format_integer($this->Mtu, $input_name='Mtu') . "</" . $ns . "Mtu>\n");
        }
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (!is_null($this->IsOperational)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsOperational', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsOperational>" . VMware_VCloud_API_Helper::format_boolean($this->IsOperational, $input_name='IsOperational') . "</" . $ns . "IsOperational>\n");
        }
        if (!is_null($this->ErrorDetails)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ErrorDetails', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ErrorDetails>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ErrorDetails, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ErrorDetails')) . "</" . $ns . "ErrorDetails>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Name) ||
            !is_null($this->Description) ||
            !is_null($this->IpsecVpnPeer) ||
            !is_null($this->PeerIpAddress) ||
            !is_null($this->PeerId) ||
            !is_null($this->LocalIpAddress) ||
            !is_null($this->LocalId) ||
            !empty($this->LocalSubnet) ||
            !empty($this->PeerSubnet) ||
            !is_null($this->SharedSecret) ||
            !is_null($this->SharedSecretEncrypted) ||
            !is_null($this->EncryptionProtocol) ||
            !is_null($this->Mtu) ||
            !is_null($this->IsEnabled) ||
            !is_null($this->IsOperational) ||
            !is_null($this->ErrorDetails) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Name') {
            $sval = $child->nodeValue;
            $this->Name = $sval;
            if (!empty($namespace)) {
                $this->namespace['Name'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $sval = $child->nodeValue;
            $this->Description = $sval;
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnPeer') {
            $obj = new VMware_VCloud_API_IpsecVpnPeerType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnPeer');
            $this->setIpsecVpnPeer($obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnPeer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnLocalPeer') {
            $obj = new VMware_VCloud_API_IpsecVpnLocalPeerType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnLocalPeer');
            $this->setIpsecVpnPeer($obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnLocalPeer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnRemotePeer') {
            $obj = new VMware_VCloud_API_IpsecVpnRemotePeerType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnRemotePeer');
            $this->setIpsecVpnPeer($obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnRemotePeer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnThirdPartyPeer') {
            $obj = new VMware_VCloud_API_IpsecVpnThirdPartyPeerType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnThirdPartyPeer');
            $this->setIpsecVpnPeer($obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnThirdPartyPeer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnLocalPeer') {
            $obj = new VMware_VCloud_API_IpsecVpnLocalPeerType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnLocalPeer');
            $this->setIpsecVpnPeer($obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnLocalPeer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnRemotePeer') {
            $obj = new VMware_VCloud_API_IpsecVpnRemotePeerType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnRemotePeer');
            $this->setIpsecVpnPeer($obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnRemotePeer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnThirdPartyPeer') {
            $obj = new VMware_VCloud_API_IpsecVpnThirdPartyPeerType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnThirdPartyPeer');
            $this->setIpsecVpnPeer($obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnThirdPartyPeer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PeerIpAddress') {
            $sval = $child->nodeValue;
            $this->PeerIpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['PeerIpAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PeerId') {
            $sval = $child->nodeValue;
            $this->PeerId = $sval;
            if (!empty($namespace)) {
                $this->namespace['PeerId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LocalIpAddress') {
            $sval = $child->nodeValue;
            $this->LocalIpAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['LocalIpAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LocalId') {
            $sval = $child->nodeValue;
            $this->LocalId = $sval;
            if (!empty($namespace)) {
                $this->namespace['LocalId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LocalSubnet') {
            $obj = new VMware_VCloud_API_IpsecVpnSubnetType();
            $obj->build($child);
            $obj->set_tagName('LocalSubnet');
            array_push($this->LocalSubnet, $obj);
            if (!empty($namespace)) {
                $this->namespace['LocalSubnet'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PeerSubnet') {
            $obj = new VMware_VCloud_API_IpsecVpnSubnetType();
            $obj->build($child);
            $obj->set_tagName('PeerSubnet');
            array_push($this->PeerSubnet, $obj);
            if (!empty($namespace)) {
                $this->namespace['PeerSubnet'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SharedSecret') {
            $sval = $child->nodeValue;
            $this->SharedSecret = $sval;
            if (!empty($namespace)) {
                $this->namespace['SharedSecret'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SharedSecretEncrypted') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->SharedSecretEncrypted = $sval;
            if (!empty($namespace)) {
                $this->namespace['SharedSecretEncrypted'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EncryptionProtocol') {
            $sval = $child->nodeValue;
            $this->EncryptionProtocol = $sval;
            if (!empty($namespace)) {
                $this->namespace['EncryptionProtocol'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Mtu') {
            $sval = $child->nodeValue;
            $this->Mtu = $sval;
            if (!empty($namespace)) {
                $this->namespace['Mtu'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsOperational') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsOperational = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsOperational'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ErrorDetails') {
            $sval = $child->nodeValue;
            $this->ErrorDetails = $sval;
            if (!empty($namespace)) {
                $this->namespace['ErrorDetails'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}