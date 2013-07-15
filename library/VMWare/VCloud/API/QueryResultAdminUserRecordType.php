<?php
class VMware_VCloud_API_QueryResultAdminUserRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $isLdapUser = null;
    protected $deployedVMQuotaRank = null;
    protected $name = null;
    protected $isEnabled = null;
    protected $deployedVMQuota = null;
    protected $identityProviderType = null;
    protected $storedVMQuota = null;
    protected $numberOfStoredVMs = null;
    protected $storedVMQuotaRank = null;
    protected $numberOfDeployedVMs = null;
    protected $org = null;
    protected $fullName = null;
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
    * @param boolean $isLdapUser - [optional] an attribute, 
    * @param int $deployedVMQuotaRank - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param int $deployedVMQuota - [optional] an attribute, 
    * @param string $identityProviderType - [optional] an attribute, 
    * @param int $storedVMQuota - [optional] an attribute, 
    * @param int $numberOfStoredVMs - [optional] an attribute, 
    * @param int $storedVMQuotaRank - [optional] an attribute, 
    * @param int $numberOfDeployedVMs - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param string $fullName - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $isLdapUser=null, $deployedVMQuotaRank=null, $name=null, $isEnabled=null, $deployedVMQuota=null, $identityProviderType=null, $storedVMQuota=null, $numberOfStoredVMs=null, $storedVMQuotaRank=null, $numberOfDeployedVMs=null, $org=null, $fullName=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->isLdapUser = $isLdapUser;
        $this->deployedVMQuotaRank = $deployedVMQuotaRank;
        $this->name = $name;
        $this->isEnabled = $isEnabled;
        $this->deployedVMQuota = $deployedVMQuota;
        $this->identityProviderType = $identityProviderType;
        $this->storedVMQuota = $storedVMQuota;
        $this->numberOfStoredVMs = $numberOfStoredVMs;
        $this->storedVMQuotaRank = $storedVMQuotaRank;
        $this->numberOfDeployedVMs = $numberOfDeployedVMs;
        $this->org = $org;
        $this->fullName = $fullName;
        $this->tagName = 'AdminUserRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_isLdapUser(){
        return $this->isLdapUser;
    }
    public function set_isLdapUser($isLdapUser) {
        $this->isLdapUser = $isLdapUser;
    }
    public function get_deployedVMQuotaRank(){
        return $this->deployedVMQuotaRank;
    }
    public function set_deployedVMQuotaRank($deployedVMQuotaRank) {
        $this->deployedVMQuotaRank = $deployedVMQuotaRank;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_deployedVMQuota(){
        return $this->deployedVMQuota;
    }
    public function set_deployedVMQuota($deployedVMQuota) {
        $this->deployedVMQuota = $deployedVMQuota;
    }
    public function get_identityProviderType(){
        return $this->identityProviderType;
    }
    public function set_identityProviderType($identityProviderType) {
        $this->identityProviderType = $identityProviderType;
    }
    public function get_storedVMQuota(){
        return $this->storedVMQuota;
    }
    public function set_storedVMQuota($storedVMQuota) {
        $this->storedVMQuota = $storedVMQuota;
    }
    public function get_numberOfStoredVMs(){
        return $this->numberOfStoredVMs;
    }
    public function set_numberOfStoredVMs($numberOfStoredVMs) {
        $this->numberOfStoredVMs = $numberOfStoredVMs;
    }
    public function get_storedVMQuotaRank(){
        return $this->storedVMQuotaRank;
    }
    public function set_storedVMQuotaRank($storedVMQuotaRank) {
        $this->storedVMQuotaRank = $storedVMQuotaRank;
    }
    public function get_numberOfDeployedVMs(){
        return $this->numberOfDeployedVMs;
    }
    public function set_numberOfDeployedVMs($numberOfDeployedVMs) {
        $this->numberOfDeployedVMs = $numberOfDeployedVMs;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_fullName(){
        return $this->fullName;
    }
    public function set_fullName($fullName) {
        $this->fullName = $fullName;
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
        if (!is_null($this->isLdapUser)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isLdapUser', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isLdapUser=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isLdapUser, $input_name='isLdapUser')));
        }
        if (!is_null($this->deployedVMQuotaRank)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'deployedVMQuotaRank', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'deployedVMQuotaRank=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->deployedVMQuotaRank, $input_name='deployedVMQuotaRank')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->deployedVMQuota)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'deployedVMQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'deployedVMQuota=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->deployedVMQuota, $input_name='deployedVMQuota')));
        }
        if (!is_null($this->identityProviderType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'identityProviderType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'identityProviderType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->identityProviderType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='identityProviderType')));
        }
        if (!is_null($this->storedVMQuota)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storedVMQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storedVMQuota=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storedVMQuota, $input_name='storedVMQuota')));
        }
        if (!is_null($this->numberOfStoredVMs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfStoredVMs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfStoredVMs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfStoredVMs, $input_name='numberOfStoredVMs')));
        }
        if (!is_null($this->storedVMQuotaRank)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storedVMQuotaRank', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storedVMQuotaRank=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storedVMQuotaRank, $input_name='storedVMQuotaRank')));
        }
        if (!is_null($this->numberOfDeployedVMs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfDeployedVMs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfDeployedVMs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfDeployedVMs, $input_name='numberOfDeployedVMs')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->fullName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'fullName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'fullName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->fullName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='fullName')));
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
        $ndisLdapUser = $attrs->getNamedItem('isLdapUser');
        if (!is_null($ndisLdapUser)) {
            $this->isLdapUser = VMware_VCloud_API_Helper::get_boolean($ndisLdapUser->value);
            if (isset($ndisLdapUser->prefix)) {
                $this->namespace['isLdapUser'] = $ndisLdapUser->prefix;
                $nsUri = $ndisLdapUser->lookupNamespaceURI($ndisLdapUser->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isLdapUser');
        } else {
            $this->isLdapUser = null;
        }
        $nddeployedVMQuotaRank = $attrs->getNamedItem('deployedVMQuotaRank');
        if (!is_null($nddeployedVMQuotaRank)) {
            $this->deployedVMQuotaRank = sprintf('%d', $nddeployedVMQuotaRank->value);
            if (isset($nddeployedVMQuotaRank->prefix)) {
                $this->namespace['deployedVMQuotaRank'] = $nddeployedVMQuotaRank->prefix;
                $nsUri = $nddeployedVMQuotaRank->lookupNamespaceURI($nddeployedVMQuotaRank->prefix);
            }
            $node->removeAttributeNS($nsUri, 'deployedVMQuotaRank');
        } else {
            $this->deployedVMQuotaRank = null;
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
        $ndisEnabled = $attrs->getNamedItem('isEnabled');
        if (!is_null($ndisEnabled)) {
            $this->isEnabled = VMware_VCloud_API_Helper::get_boolean($ndisEnabled->value);
            if (isset($ndisEnabled->prefix)) {
                $this->namespace['isEnabled'] = $ndisEnabled->prefix;
                $nsUri = $ndisEnabled->lookupNamespaceURI($ndisEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isEnabled');
        } else {
            $this->isEnabled = null;
        }
        $nddeployedVMQuota = $attrs->getNamedItem('deployedVMQuota');
        if (!is_null($nddeployedVMQuota)) {
            $this->deployedVMQuota = sprintf('%d', $nddeployedVMQuota->value);
            if (isset($nddeployedVMQuota->prefix)) {
                $this->namespace['deployedVMQuota'] = $nddeployedVMQuota->prefix;
                $nsUri = $nddeployedVMQuota->lookupNamespaceURI($nddeployedVMQuota->prefix);
            }
            $node->removeAttributeNS($nsUri, 'deployedVMQuota');
        } else {
            $this->deployedVMQuota = null;
        }
        $ndidentityProviderType = $attrs->getNamedItem('identityProviderType');
        if (!is_null($ndidentityProviderType)) {
            $this->identityProviderType = $ndidentityProviderType->value;
            if (isset($ndidentityProviderType->prefix)) {
                $this->namespace['identityProviderType'] = $ndidentityProviderType->prefix;
                $nsUri = $ndidentityProviderType->lookupNamespaceURI($ndidentityProviderType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'identityProviderType');
        } else {
            $this->identityProviderType = null;
        }
        $ndstoredVMQuota = $attrs->getNamedItem('storedVMQuota');
        if (!is_null($ndstoredVMQuota)) {
            $this->storedVMQuota = sprintf('%d', $ndstoredVMQuota->value);
            if (isset($ndstoredVMQuota->prefix)) {
                $this->namespace['storedVMQuota'] = $ndstoredVMQuota->prefix;
                $nsUri = $ndstoredVMQuota->lookupNamespaceURI($ndstoredVMQuota->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storedVMQuota');
        } else {
            $this->storedVMQuota = null;
        }
        $ndnumberOfStoredVMs = $attrs->getNamedItem('numberOfStoredVMs');
        if (!is_null($ndnumberOfStoredVMs)) {
            $this->numberOfStoredVMs = sprintf('%d', $ndnumberOfStoredVMs->value);
            if (isset($ndnumberOfStoredVMs->prefix)) {
                $this->namespace['numberOfStoredVMs'] = $ndnumberOfStoredVMs->prefix;
                $nsUri = $ndnumberOfStoredVMs->lookupNamespaceURI($ndnumberOfStoredVMs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfStoredVMs');
        } else {
            $this->numberOfStoredVMs = null;
        }
        $ndstoredVMQuotaRank = $attrs->getNamedItem('storedVMQuotaRank');
        if (!is_null($ndstoredVMQuotaRank)) {
            $this->storedVMQuotaRank = sprintf('%d', $ndstoredVMQuotaRank->value);
            if (isset($ndstoredVMQuotaRank->prefix)) {
                $this->namespace['storedVMQuotaRank'] = $ndstoredVMQuotaRank->prefix;
                $nsUri = $ndstoredVMQuotaRank->lookupNamespaceURI($ndstoredVMQuotaRank->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storedVMQuotaRank');
        } else {
            $this->storedVMQuotaRank = null;
        }
        $ndnumberOfDeployedVMs = $attrs->getNamedItem('numberOfDeployedVMs');
        if (!is_null($ndnumberOfDeployedVMs)) {
            $this->numberOfDeployedVMs = sprintf('%d', $ndnumberOfDeployedVMs->value);
            if (isset($ndnumberOfDeployedVMs->prefix)) {
                $this->namespace['numberOfDeployedVMs'] = $ndnumberOfDeployedVMs->prefix;
                $nsUri = $ndnumberOfDeployedVMs->lookupNamespaceURI($ndnumberOfDeployedVMs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfDeployedVMs');
        } else {
            $this->numberOfDeployedVMs = null;
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
        $ndfullName = $attrs->getNamedItem('fullName');
        if (!is_null($ndfullName)) {
            $this->fullName = $ndfullName->value;
            if (isset($ndfullName->prefix)) {
                $this->namespace['fullName'] = $ndfullName->prefix;
                $nsUri = $ndfullName->lookupNamespaceURI($ndfullName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'fullName');
        } else {
            $this->fullName = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}