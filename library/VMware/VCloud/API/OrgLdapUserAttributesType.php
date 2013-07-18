<?php
class VMware_VCloud_API_OrgLdapUserAttributesType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $ObjectClass = null;
    protected $ObjectIdentifier = null;
    protected $UserName = null;
    protected $Email = null;
    protected $FullName = null;
    protected $GivenName = null;
    protected $Surname = null;
    protected $Telephone = null;
    protected $GroupMembershipIdentifier = null;
    protected $GroupBackLinkIdentifier = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $ObjectClass - [required] 
    * @param string $ObjectIdentifier - [required] 
    * @param string $UserName - [required] 
    * @param string $Email - [required] 
    * @param string $FullName - [required] 
    * @param string $GivenName - [required] 
    * @param string $Surname - [required] 
    * @param string $Telephone - [required] 
    * @param string $GroupMembershipIdentifier - [required] 
    * @param string $GroupBackLinkIdentifier - [optional] 
    */
    public function __construct($VCloudExtension=null, $ObjectClass=null, $ObjectIdentifier=null, $UserName=null, $Email=null, $FullName=null, $GivenName=null, $Surname=null, $Telephone=null, $GroupMembershipIdentifier=null, $GroupBackLinkIdentifier=null) {
        parent::__construct($VCloudExtension);
        $this->ObjectClass = $ObjectClass;
        $this->ObjectIdentifier = $ObjectIdentifier;
        $this->UserName = $UserName;
        $this->Email = $Email;
        $this->FullName = $FullName;
        $this->GivenName = $GivenName;
        $this->Surname = $Surname;
        $this->Telephone = $Telephone;
        $this->GroupMembershipIdentifier = $GroupMembershipIdentifier;
        $this->GroupBackLinkIdentifier = $GroupBackLinkIdentifier;
        $this->tagName = 'UserAttributes';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getObjectClass() {
        return $this->ObjectClass;
    }
    public function setObjectClass($ObjectClass) { 
        $this->ObjectClass = $ObjectClass;
    }
    public function getObjectIdentifier() {
        return $this->ObjectIdentifier;
    }
    public function setObjectIdentifier($ObjectIdentifier) { 
        $this->ObjectIdentifier = $ObjectIdentifier;
    }
    public function getUserName() {
        return $this->UserName;
    }
    public function setUserName($UserName) { 
        $this->UserName = $UserName;
    }
    public function getEmail() {
        return $this->Email;
    }
    public function setEmail($Email) { 
        $this->Email = $Email;
    }
    public function getFullName() {
        return $this->FullName;
    }
    public function setFullName($FullName) { 
        $this->FullName = $FullName;
    }
    public function getGivenName() {
        return $this->GivenName;
    }
    public function setGivenName($GivenName) { 
        $this->GivenName = $GivenName;
    }
    public function getSurname() {
        return $this->Surname;
    }
    public function setSurname($Surname) { 
        $this->Surname = $Surname;
    }
    public function getTelephone() {
        return $this->Telephone;
    }
    public function setTelephone($Telephone) { 
        $this->Telephone = $Telephone;
    }
    public function getGroupMembershipIdentifier() {
        return $this->GroupMembershipIdentifier;
    }
    public function setGroupMembershipIdentifier($GroupMembershipIdentifier) { 
        $this->GroupMembershipIdentifier = $GroupMembershipIdentifier;
    }
    public function getGroupBackLinkIdentifier() {
        return $this->GroupBackLinkIdentifier;
    }
    public function setGroupBackLinkIdentifier($GroupBackLinkIdentifier) { 
        $this->GroupBackLinkIdentifier = $GroupBackLinkIdentifier;
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
        if (!is_null($this->ObjectClass)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ObjectClass', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ObjectClass>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ObjectClass, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ObjectClass')) . "</" . $ns . "ObjectClass>\n");
        }
        if (!is_null($this->ObjectIdentifier)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ObjectIdentifier', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ObjectIdentifier>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ObjectIdentifier, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ObjectIdentifier')) . "</" . $ns . "ObjectIdentifier>\n");
        }
        if (!is_null($this->UserName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UserName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UserName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->UserName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='UserName')) . "</" . $ns . "UserName>\n");
        }
        if (!is_null($this->Email)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Email', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Email>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Email, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Email')) . "</" . $ns . "Email>\n");
        }
        if (!is_null($this->FullName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'FullName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "FullName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->FullName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='FullName')) . "</" . $ns . "FullName>\n");
        }
        if (!is_null($this->GivenName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'GivenName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "GivenName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->GivenName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='GivenName')) . "</" . $ns . "GivenName>\n");
        }
        if (!is_null($this->Surname)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Surname', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Surname>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Surname, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Surname')) . "</" . $ns . "Surname>\n");
        }
        if (!is_null($this->Telephone)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Telephone', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Telephone>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Telephone, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Telephone')) . "</" . $ns . "Telephone>\n");
        }
        if (!is_null($this->GroupMembershipIdentifier)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'GroupMembershipIdentifier', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "GroupMembershipIdentifier>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->GroupMembershipIdentifier, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='GroupMembershipIdentifier')) . "</" . $ns . "GroupMembershipIdentifier>\n");
        }
        if (!is_null($this->GroupBackLinkIdentifier)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'GroupBackLinkIdentifier', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "GroupBackLinkIdentifier>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->GroupBackLinkIdentifier, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='GroupBackLinkIdentifier')) . "</" . $ns . "GroupBackLinkIdentifier>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->ObjectClass) ||
            !is_null($this->ObjectIdentifier) ||
            !is_null($this->UserName) ||
            !is_null($this->Email) ||
            !is_null($this->FullName) ||
            !is_null($this->GivenName) ||
            !is_null($this->Surname) ||
            !is_null($this->Telephone) ||
            !is_null($this->GroupMembershipIdentifier) ||
            !is_null($this->GroupBackLinkIdentifier) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ObjectClass') {
            $sval = $child->nodeValue;
            $this->ObjectClass = $sval;
            if (!empty($namespace)) {
                $this->namespace['ObjectClass'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ObjectIdentifier') {
            $sval = $child->nodeValue;
            $this->ObjectIdentifier = $sval;
            if (!empty($namespace)) {
                $this->namespace['ObjectIdentifier'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UserName') {
            $sval = $child->nodeValue;
            $this->UserName = $sval;
            if (!empty($namespace)) {
                $this->namespace['UserName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Email') {
            $sval = $child->nodeValue;
            $this->Email = $sval;
            if (!empty($namespace)) {
                $this->namespace['Email'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FullName') {
            $sval = $child->nodeValue;
            $this->FullName = $sval;
            if (!empty($namespace)) {
                $this->namespace['FullName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GivenName') {
            $sval = $child->nodeValue;
            $this->GivenName = $sval;
            if (!empty($namespace)) {
                $this->namespace['GivenName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Surname') {
            $sval = $child->nodeValue;
            $this->Surname = $sval;
            if (!empty($namespace)) {
                $this->namespace['Surname'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Telephone') {
            $sval = $child->nodeValue;
            $this->Telephone = $sval;
            if (!empty($namespace)) {
                $this->namespace['Telephone'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupMembershipIdentifier') {
            $sval = $child->nodeValue;
            $this->GroupMembershipIdentifier = $sval;
            if (!empty($namespace)) {
                $this->namespace['GroupMembershipIdentifier'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupBackLinkIdentifier') {
            $sval = $child->nodeValue;
            $this->GroupBackLinkIdentifier = $sval;
            if (!empty($namespace)) {
                $this->namespace['GroupBackLinkIdentifier'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}