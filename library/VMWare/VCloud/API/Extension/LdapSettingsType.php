<?php
class VMware_VCloud_API_Extension_LdapSettingsType extends VMware_VCloud_API_ResourceType {
    protected $HostName = null;
    protected $Port = null;
    protected $IsSsl = null;
    protected $IsSslAcceptAll = null;
    protected $Realm = null;
    protected $PagedSearchDisabled = null;
    protected $PageSize = null;
    protected $MaxResults = null;
    protected $MaxUserGroups = null;
    protected $SearchBase = null;
    protected $UserName = null;
    protected $Password = null;
    protected $AuthenticationMechanism = null;
    protected $GroupSearchBase = null;
    protected $IsGroupSearchBaseEnabled = null;
    protected $ConnectorType = null;
    protected $UserAttributes = null;
    protected $GroupAttributes = null;
    protected $UseExternalKerberos = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $HostName - [optional] 
    * @param int $Port - [required] 
    * @param boolean $IsSsl - [required] 
    * @param boolean $IsSslAcceptAll - [required] 
    * @param string $Realm - [optional] 
    * @param boolean $PagedSearchDisabled - [required] 
    * @param int $PageSize - [optional] 
    * @param int $MaxResults - [optional] 
    * @param int $MaxUserGroups - [optional] 
    * @param string $SearchBase - [optional] 
    * @param string $UserName - [optional] 
    * @param string $Password - [optional] 
    * @param string $AuthenticationMechanism - [required] 
    * @param string $GroupSearchBase - [optional] 
    * @param boolean $IsGroupSearchBaseEnabled - [required] 
    * @param string $ConnectorType - [required] 
    * @param VMware_VCloud_API_Extension_LdapUserAttributesType $UserAttributes - [required]
    * @param VMware_VCloud_API_Extension_LdapGroupAttributesType $GroupAttributes - [required]
    * @param boolean $UseExternalKerberos - [required] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $HostName=null, $Port=null, $IsSsl=null, $IsSslAcceptAll=null, $Realm=null, $PagedSearchDisabled=null, $PageSize=null, $MaxResults=null, $MaxUserGroups=null, $SearchBase=null, $UserName=null, $Password=null, $AuthenticationMechanism=null, $GroupSearchBase=null, $IsGroupSearchBaseEnabled=null, $ConnectorType=null, $UserAttributes=null, $GroupAttributes=null, $UseExternalKerberos=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->HostName = $HostName;
        $this->Port = $Port;
        $this->IsSsl = $IsSsl;
        $this->IsSslAcceptAll = $IsSslAcceptAll;
        $this->Realm = $Realm;
        $this->PagedSearchDisabled = $PagedSearchDisabled;
        $this->PageSize = $PageSize;
        $this->MaxResults = $MaxResults;
        $this->MaxUserGroups = $MaxUserGroups;
        $this->SearchBase = $SearchBase;
        $this->UserName = $UserName;
        $this->Password = $Password;
        $this->AuthenticationMechanism = $AuthenticationMechanism;
        $this->GroupSearchBase = $GroupSearchBase;
        $this->IsGroupSearchBaseEnabled = $IsGroupSearchBaseEnabled;
        $this->ConnectorType = $ConnectorType;
        $this->UserAttributes = $UserAttributes;
        $this->GroupAttributes = $GroupAttributes;
        $this->UseExternalKerberos = $UseExternalKerberos;
        $this->tagName = 'LdapSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getHostName() {
        return $this->HostName;
    }
    public function setHostName($HostName) { 
        $this->HostName = $HostName;
    }
    public function getPort() {
        return $this->Port;
    }
    public function setPort($Port) { 
        $this->Port = $Port;
    }
    public function getIsSsl() {
        return $this->IsSsl;
    }
    public function setIsSsl($IsSsl) { 
        $this->IsSsl = $IsSsl;
    }
    public function getIsSslAcceptAll() {
        return $this->IsSslAcceptAll;
    }
    public function setIsSslAcceptAll($IsSslAcceptAll) { 
        $this->IsSslAcceptAll = $IsSslAcceptAll;
    }
    public function getRealm() {
        return $this->Realm;
    }
    public function setRealm($Realm) { 
        $this->Realm = $Realm;
    }
    public function getPagedSearchDisabled() {
        return $this->PagedSearchDisabled;
    }
    public function setPagedSearchDisabled($PagedSearchDisabled) { 
        $this->PagedSearchDisabled = $PagedSearchDisabled;
    }
    public function getPageSize() {
        return $this->PageSize;
    }
    public function setPageSize($PageSize) { 
        $this->PageSize = $PageSize;
    }
    public function getMaxResults() {
        return $this->MaxResults;
    }
    public function setMaxResults($MaxResults) { 
        $this->MaxResults = $MaxResults;
    }
    public function getMaxUserGroups() {
        return $this->MaxUserGroups;
    }
    public function setMaxUserGroups($MaxUserGroups) { 
        $this->MaxUserGroups = $MaxUserGroups;
    }
    public function getSearchBase() {
        return $this->SearchBase;
    }
    public function setSearchBase($SearchBase) { 
        $this->SearchBase = $SearchBase;
    }
    public function getUserName() {
        return $this->UserName;
    }
    public function setUserName($UserName) { 
        $this->UserName = $UserName;
    }
    public function getPassword() {
        return $this->Password;
    }
    public function setPassword($Password) { 
        $this->Password = $Password;
    }
    public function getAuthenticationMechanism() {
        return $this->AuthenticationMechanism;
    }
    public function setAuthenticationMechanism($AuthenticationMechanism) { 
        $this->AuthenticationMechanism = $AuthenticationMechanism;
    }
    public function getGroupSearchBase() {
        return $this->GroupSearchBase;
    }
    public function setGroupSearchBase($GroupSearchBase) { 
        $this->GroupSearchBase = $GroupSearchBase;
    }
    public function getIsGroupSearchBaseEnabled() {
        return $this->IsGroupSearchBaseEnabled;
    }
    public function setIsGroupSearchBaseEnabled($IsGroupSearchBaseEnabled) { 
        $this->IsGroupSearchBaseEnabled = $IsGroupSearchBaseEnabled;
    }
    public function getConnectorType() {
        return $this->ConnectorType;
    }
    public function setConnectorType($ConnectorType) { 
        $this->ConnectorType = $ConnectorType;
    }
    public function getUserAttributes() {
        return $this->UserAttributes;
    }
    public function setUserAttributes($UserAttributes) { 
        $this->UserAttributes = $UserAttributes;
    }
    public function getGroupAttributes() {
        return $this->GroupAttributes;
    }
    public function setGroupAttributes($GroupAttributes) { 
        $this->GroupAttributes = $GroupAttributes;
    }
    public function getUseExternalKerberos() {
        return $this->UseExternalKerberos;
    }
    public function setUseExternalKerberos($UseExternalKerberos) { 
        $this->UseExternalKerberos = $UseExternalKerberos;
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
        if (!is_null($this->HostName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'HostName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "HostName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->HostName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='HostName')) . "</" . $ns . "HostName>\n");
        }
        if (!is_null($this->Port)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Port', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Port>" . VMware_VCloud_API_Helper::format_integer($this->Port, $input_name='Port') . "</" . $ns . "Port>\n");
        }
        if (!is_null($this->IsSsl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsSsl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsSsl>" . VMware_VCloud_API_Helper::format_boolean($this->IsSsl, $input_name='IsSsl') . "</" . $ns . "IsSsl>\n");
     }
        if (!is_null($this->IsSslAcceptAll)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsSslAcceptAll', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsSslAcceptAll>" . VMware_VCloud_API_Helper::format_boolean($this->IsSslAcceptAll, $input_name='IsSslAcceptAll') . "</" . $ns . "IsSslAcceptAll>\n");
     }
        if (!is_null($this->Realm)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Realm', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Realm>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Realm, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Realm')) . "</" . $ns . "Realm>\n");
        }
        if (!is_null($this->PagedSearchDisabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PagedSearchDisabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PagedSearchDisabled>" . VMware_VCloud_API_Helper::format_boolean($this->PagedSearchDisabled, $input_name='PagedSearchDisabled') . "</" . $ns . "PagedSearchDisabled>\n");
     }
        if (!is_null($this->PageSize)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PageSize', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PageSize>" . VMware_VCloud_API_Helper::format_integer($this->PageSize, $input_name='PageSize') . "</" . $ns . "PageSize>\n");
        }
        if (!is_null($this->MaxResults)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MaxResults', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MaxResults>" . VMware_VCloud_API_Helper::format_integer($this->MaxResults, $input_name='MaxResults') . "</" . $ns . "MaxResults>\n");
        }
        if (!is_null($this->MaxUserGroups)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MaxUserGroups', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MaxUserGroups>" . VMware_VCloud_API_Helper::format_integer($this->MaxUserGroups, $input_name='MaxUserGroups') . "</" . $ns . "MaxUserGroups>\n");
        }
        if (!is_null($this->SearchBase)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SearchBase', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SearchBase>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SearchBase, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SearchBase')) . "</" . $ns . "SearchBase>\n");
        }
        if (!is_null($this->UserName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UserName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UserName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->UserName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='UserName')) . "</" . $ns . "UserName>\n");
        }
        if (!is_null($this->Password)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Password', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Password>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Password, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Password')) . "</" . $ns . "Password>\n");
        }
        if (!is_null($this->AuthenticationMechanism)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AuthenticationMechanism', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AuthenticationMechanism>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AuthenticationMechanism, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AuthenticationMechanism')) . "</" . $ns . "AuthenticationMechanism>\n");
        }
        if (!is_null($this->GroupSearchBase)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'GroupSearchBase', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "GroupSearchBase>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->GroupSearchBase, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='GroupSearchBase')) . "</" . $ns . "GroupSearchBase>\n");
        }
        if (!is_null($this->IsGroupSearchBaseEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsGroupSearchBaseEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsGroupSearchBaseEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsGroupSearchBaseEnabled, $input_name='IsGroupSearchBaseEnabled') . "</" . $ns . "IsGroupSearchBaseEnabled>\n");
     }
        if (!is_null($this->ConnectorType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ConnectorType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ConnectorType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ConnectorType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ConnectorType')) . "</" . $ns . "ConnectorType>\n");
        }
        if (!is_null($this->UserAttributes)) {
            $out = $this->UserAttributes->export('UserAttributes', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->GroupAttributes)) {
            $out = $this->GroupAttributes->export('GroupAttributes', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->UseExternalKerberos)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UseExternalKerberos', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UseExternalKerberos>" . VMware_VCloud_API_Helper::format_boolean($this->UseExternalKerberos, $input_name='UseExternalKerberos') . "</" . $ns . "UseExternalKerberos>\n");
     }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->HostName) ||
            !is_null($this->Port) ||
            !is_null($this->IsSsl) ||
            !is_null($this->IsSslAcceptAll) ||
            !is_null($this->Realm) ||
            !is_null($this->PagedSearchDisabled) ||
            !is_null($this->PageSize) ||
            !is_null($this->MaxResults) ||
            !is_null($this->MaxUserGroups) ||
            !is_null($this->SearchBase) ||
            !is_null($this->UserName) ||
            !is_null($this->Password) ||
            !is_null($this->AuthenticationMechanism) ||
            !is_null($this->GroupSearchBase) ||
            !is_null($this->IsGroupSearchBaseEnabled) ||
            !is_null($this->ConnectorType) ||
            !is_null($this->UserAttributes) ||
            !is_null($this->GroupAttributes) ||
            !is_null($this->UseExternalKerberos) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostName') {
            $sval = $child->nodeValue;
            $this->HostName = $sval;
            if (!empty($namespace)) {
                $this->namespace['HostName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Port') {
            $sval = $child->nodeValue;
            $this->Port = $sval;
            if (!empty($namespace)) {
                $this->namespace['Port'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsSsl') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsSsl = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsSsl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsSslAcceptAll') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsSslAcceptAll = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsSslAcceptAll'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Realm') {
            $sval = $child->nodeValue;
            $this->Realm = $sval;
            if (!empty($namespace)) {
                $this->namespace['Realm'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PagedSearchDisabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->PagedSearchDisabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['PagedSearchDisabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PageSize') {
            $sval = $child->nodeValue;
            $this->PageSize = $sval;
            if (!empty($namespace)) {
                $this->namespace['PageSize'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MaxResults') {
            $sval = $child->nodeValue;
            $this->MaxResults = $sval;
            if (!empty($namespace)) {
                $this->namespace['MaxResults'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MaxUserGroups') {
            $sval = $child->nodeValue;
            $this->MaxUserGroups = $sval;
            if (!empty($namespace)) {
                $this->namespace['MaxUserGroups'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SearchBase') {
            $sval = $child->nodeValue;
            $this->SearchBase = $sval;
            if (!empty($namespace)) {
                $this->namespace['SearchBase'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UserName') {
            $sval = $child->nodeValue;
            $this->UserName = $sval;
            if (!empty($namespace)) {
                $this->namespace['UserName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Password') {
            $sval = $child->nodeValue;
            $this->Password = $sval;
            if (!empty($namespace)) {
                $this->namespace['Password'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AuthenticationMechanism') {
            $sval = $child->nodeValue;
            $this->AuthenticationMechanism = $sval;
            if (!empty($namespace)) {
                $this->namespace['AuthenticationMechanism'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupSearchBase') {
            $sval = $child->nodeValue;
            $this->GroupSearchBase = $sval;
            if (!empty($namespace)) {
                $this->namespace['GroupSearchBase'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsGroupSearchBaseEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsGroupSearchBaseEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsGroupSearchBaseEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ConnectorType') {
            $sval = $child->nodeValue;
            $this->ConnectorType = $sval;
            if (!empty($namespace)) {
                $this->namespace['ConnectorType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UserAttributes') {
            $obj = new VMware_VCloud_API_Extension_LdapUserAttributesType();
            $obj->build($child);
            $obj->set_tagName('UserAttributes');
            $this->setUserAttributes($obj);
            if (!empty($namespace)) {
                $this->namespace['UserAttributes'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupAttributes') {
            $obj = new VMware_VCloud_API_Extension_LdapGroupAttributesType();
            $obj->build($child);
            $obj->set_tagName('GroupAttributes');
            $this->setGroupAttributes($obj);
            if (!empty($namespace)) {
                $this->namespace['GroupAttributes'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UseExternalKerberos') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->UseExternalKerberos = $sval;
            if (!empty($namespace)) {
                $this->namespace['UseExternalKerberos'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}