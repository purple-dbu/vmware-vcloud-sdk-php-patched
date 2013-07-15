<?php
class VMware_VCloud_API_Extension_LdapGroupAttributesType extends VMware_VCloud_API_ResourceType {
    protected $ObjectClass = null;
    protected $ObjectIdentifier = null;
    protected $GroupName = null;
    protected $Membership = null;
    protected $MembershipIdentifier = null;
    protected $BackLinkIdentifier = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $ObjectClass - [required] 
    * @param string $ObjectIdentifier - [required] 
    * @param string $GroupName - [required] 
    * @param string $Membership - [required] 
    * @param string $MembershipIdentifier - [required] 
    * @param string $BackLinkIdentifier - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $ObjectClass=null, $ObjectIdentifier=null, $GroupName=null, $Membership=null, $MembershipIdentifier=null, $BackLinkIdentifier=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->ObjectClass = $ObjectClass;
        $this->ObjectIdentifier = $ObjectIdentifier;
        $this->GroupName = $GroupName;
        $this->Membership = $Membership;
        $this->MembershipIdentifier = $MembershipIdentifier;
        $this->BackLinkIdentifier = $BackLinkIdentifier;
        $this->tagName = '';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
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
    public function getGroupName() {
        return $this->GroupName;
    }
    public function setGroupName($GroupName) { 
        $this->GroupName = $GroupName;
    }
    public function getMembership() {
        return $this->Membership;
    }
    public function setMembership($Membership) { 
        $this->Membership = $Membership;
    }
    public function getMembershipIdentifier() {
        return $this->MembershipIdentifier;
    }
    public function setMembershipIdentifier($MembershipIdentifier) { 
        $this->MembershipIdentifier = $MembershipIdentifier;
    }
    public function getBackLinkIdentifier() {
        return $this->BackLinkIdentifier;
    }
    public function setBackLinkIdentifier($BackLinkIdentifier) { 
        $this->BackLinkIdentifier = $BackLinkIdentifier;
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
        if (!is_null($this->GroupName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'GroupName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "GroupName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->GroupName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='GroupName')) . "</" . $ns . "GroupName>\n");
        }
        if (!is_null($this->Membership)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Membership', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Membership>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Membership, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Membership')) . "</" . $ns . "Membership>\n");
        }
        if (!is_null($this->MembershipIdentifier)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MembershipIdentifier', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MembershipIdentifier>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MembershipIdentifier, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MembershipIdentifier')) . "</" . $ns . "MembershipIdentifier>\n");
        }
        if (!is_null($this->BackLinkIdentifier)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'BackLinkIdentifier', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "BackLinkIdentifier>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->BackLinkIdentifier, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='BackLinkIdentifier')) . "</" . $ns . "BackLinkIdentifier>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->ObjectClass) ||
            !is_null($this->ObjectIdentifier) ||
            !is_null($this->GroupName) ||
            !is_null($this->Membership) ||
            !is_null($this->MembershipIdentifier) ||
            !is_null($this->BackLinkIdentifier) ||
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupName') {
            $sval = $child->nodeValue;
            $this->GroupName = $sval;
            if (!empty($namespace)) {
                $this->namespace['GroupName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Membership') {
            $sval = $child->nodeValue;
            $this->Membership = $sval;
            if (!empty($namespace)) {
                $this->namespace['Membership'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MembershipIdentifier') {
            $sval = $child->nodeValue;
            $this->MembershipIdentifier = $sval;
            if (!empty($namespace)) {
                $this->namespace['MembershipIdentifier'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BackLinkIdentifier') {
            $sval = $child->nodeValue;
            $this->BackLinkIdentifier = $sval;
            if (!empty($namespace)) {
                $this->namespace['BackLinkIdentifier'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}