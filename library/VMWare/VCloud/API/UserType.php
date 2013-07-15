<?php
class VMware_VCloud_API_UserType extends VMware_VCloud_API_EntityType {
    protected $FullName = null;
    protected $EmailAddress = null;
    protected $Telephone = null;
    protected $IsEnabled = null;
    protected $IsLocked = null;
    protected $IM = null;
    protected $NameInSource = null;
    protected $IsAlertEnabled = null;
    protected $AlertEmailPrefix = null;
    protected $AlertEmail = null;
    protected $IsExternal = null;
    protected $ProviderType = null;
    protected $IsDefaultCached = null;
    protected $IsGroupRole = null;
    protected $StoredVmQuota = null;
    protected $DeployedVmQuota = null;
    protected $Role = null;
    protected $Password = null;
    protected $GroupReferences = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param string $FullName - [optional] 
    * @param string $EmailAddress - [optional] 
    * @param string $Telephone - [optional] 
    * @param boolean $IsEnabled - [optional] 
    * @param boolean $IsLocked - [optional] 
    * @param string $IM - [optional] 
    * @param string $NameInSource - [optional] 
    * @param boolean $IsAlertEnabled - [optional] 
    * @param string $AlertEmailPrefix - [optional] 
    * @param string $AlertEmail - [optional] 
    * @param boolean $IsExternal - [optional] 
    * @param string $ProviderType - [optional] 
    * @param boolean $IsDefaultCached - [optional] 
    * @param boolean $IsGroupRole - [optional] 
    * @param int $StoredVmQuota - [optional] 
    * @param int $DeployedVmQuota - [optional] 
    * @param VMware_VCloud_API_ReferenceType $Role - [optional]
    * @param string $Password - [optional] 
    * @param VMware_VCloud_API_GroupsListType $GroupReferences - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $FullName=null, $EmailAddress=null, $Telephone=null, $IsEnabled=null, $IsLocked=null, $IM=null, $NameInSource=null, $IsAlertEnabled=null, $AlertEmailPrefix=null, $AlertEmail=null, $IsExternal=null, $ProviderType=null, $IsDefaultCached=null, $IsGroupRole=null, $StoredVmQuota=null, $DeployedVmQuota=null, $Role=null, $Password=null, $GroupReferences=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->FullName = $FullName;
        $this->EmailAddress = $EmailAddress;
        $this->Telephone = $Telephone;
        $this->IsEnabled = $IsEnabled;
        $this->IsLocked = $IsLocked;
        $this->IM = $IM;
        $this->NameInSource = $NameInSource;
        $this->IsAlertEnabled = $IsAlertEnabled;
        $this->AlertEmailPrefix = $AlertEmailPrefix;
        $this->AlertEmail = $AlertEmail;
        $this->IsExternal = $IsExternal;
        $this->ProviderType = $ProviderType;
        $this->IsDefaultCached = $IsDefaultCached;
        $this->IsGroupRole = $IsGroupRole;
        $this->StoredVmQuota = $StoredVmQuota;
        $this->DeployedVmQuota = $DeployedVmQuota;
        $this->Role = $Role;
        $this->Password = $Password;
        $this->GroupReferences = $GroupReferences;
        $this->tagName = 'User';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getFullName() {
        return $this->FullName;
    }
    public function setFullName($FullName) { 
        $this->FullName = $FullName;
    }
    public function getEmailAddress() {
        return $this->EmailAddress;
    }
    public function setEmailAddress($EmailAddress) { 
        $this->EmailAddress = $EmailAddress;
    }
    public function getTelephone() {
        return $this->Telephone;
    }
    public function setTelephone($Telephone) { 
        $this->Telephone = $Telephone;
    }
    public function getIsEnabled() {
        return $this->IsEnabled;
    }
    public function setIsEnabled($IsEnabled) { 
        $this->IsEnabled = $IsEnabled;
    }
    public function getIsLocked() {
        return $this->IsLocked;
    }
    public function setIsLocked($IsLocked) { 
        $this->IsLocked = $IsLocked;
    }
    public function getIM() {
        return $this->IM;
    }
    public function setIM($IM) { 
        $this->IM = $IM;
    }
    public function getNameInSource() {
        return $this->NameInSource;
    }
    public function setNameInSource($NameInSource) { 
        $this->NameInSource = $NameInSource;
    }
    public function getIsAlertEnabled() {
        return $this->IsAlertEnabled;
    }
    public function setIsAlertEnabled($IsAlertEnabled) { 
        $this->IsAlertEnabled = $IsAlertEnabled;
    }
    public function getAlertEmailPrefix() {
        return $this->AlertEmailPrefix;
    }
    public function setAlertEmailPrefix($AlertEmailPrefix) { 
        $this->AlertEmailPrefix = $AlertEmailPrefix;
    }
    public function getAlertEmail() {
        return $this->AlertEmail;
    }
    public function setAlertEmail($AlertEmail) { 
        $this->AlertEmail = $AlertEmail;
    }
    public function getIsExternal() {
        return $this->IsExternal;
    }
    public function setIsExternal($IsExternal) { 
        $this->IsExternal = $IsExternal;
    }
    public function getProviderType() {
        return $this->ProviderType;
    }
    public function setProviderType($ProviderType) { 
        $this->ProviderType = $ProviderType;
    }
    public function getIsDefaultCached() {
        return $this->IsDefaultCached;
    }
    public function setIsDefaultCached($IsDefaultCached) { 
        $this->IsDefaultCached = $IsDefaultCached;
    }
    public function getIsGroupRole() {
        return $this->IsGroupRole;
    }
    public function setIsGroupRole($IsGroupRole) { 
        $this->IsGroupRole = $IsGroupRole;
    }
    public function getStoredVmQuota() {
        return $this->StoredVmQuota;
    }
    public function setStoredVmQuota($StoredVmQuota) { 
        $this->StoredVmQuota = $StoredVmQuota;
    }
    public function getDeployedVmQuota() {
        return $this->DeployedVmQuota;
    }
    public function setDeployedVmQuota($DeployedVmQuota) { 
        $this->DeployedVmQuota = $DeployedVmQuota;
    }
    public function getRole() {
        return $this->Role;
    }
    public function setRole($Role) { 
        $this->Role = $Role;
    }
    public function getPassword() {
        return $this->Password;
    }
    public function setPassword($Password) { 
        $this->Password = $Password;
    }
    public function getGroupReferences() {
        return $this->GroupReferences;
    }
    public function setGroupReferences($GroupReferences) { 
        $this->GroupReferences = $GroupReferences;
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
        if (!is_null($this->FullName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'FullName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "FullName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->FullName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='FullName')) . "</" . $ns . "FullName>\n");
        }
        if (!is_null($this->EmailAddress)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'EmailAddress', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "EmailAddress>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->EmailAddress, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='EmailAddress')) . "</" . $ns . "EmailAddress>\n");
        }
        if (!is_null($this->Telephone)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Telephone', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Telephone>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Telephone, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Telephone')) . "</" . $ns . "Telephone>\n");
        }
        if (!is_null($this->IsEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsEnabled, $input_name='IsEnabled') . "</" . $ns . "IsEnabled>\n");
        }
        if (!is_null($this->IsLocked)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsLocked', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsLocked>" . VMware_VCloud_API_Helper::format_boolean($this->IsLocked, $input_name='IsLocked') . "</" . $ns . "IsLocked>\n");
        }
        if (!is_null($this->IM)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IM', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IM>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->IM, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='IM')) . "</" . $ns . "IM>\n");
        }
        if (!is_null($this->NameInSource)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'NameInSource', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "NameInSource>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->NameInSource, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='NameInSource')) . "</" . $ns . "NameInSource>\n");
        }
        if (!is_null($this->IsAlertEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsAlertEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsAlertEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->IsAlertEnabled, $input_name='IsAlertEnabled') . "</" . $ns . "IsAlertEnabled>\n");
        }
        if (!is_null($this->AlertEmailPrefix)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AlertEmailPrefix', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AlertEmailPrefix>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AlertEmailPrefix, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AlertEmailPrefix')) . "</" . $ns . "AlertEmailPrefix>\n");
        }
        if (!is_null($this->AlertEmail)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AlertEmail', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AlertEmail>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->AlertEmail, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='AlertEmail')) . "</" . $ns . "AlertEmail>\n");
        }
        if (!is_null($this->IsExternal)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsExternal', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsExternal>" . VMware_VCloud_API_Helper::format_boolean($this->IsExternal, $input_name='IsExternal') . "</" . $ns . "IsExternal>\n");
        }
        if (!is_null($this->ProviderType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ProviderType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ProviderType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ProviderType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ProviderType')) . "</" . $ns . "ProviderType>\n");
        }
        if (!is_null($this->IsDefaultCached)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsDefaultCached', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsDefaultCached>" . VMware_VCloud_API_Helper::format_boolean($this->IsDefaultCached, $input_name='IsDefaultCached') . "</" . $ns . "IsDefaultCached>\n");
        }
        if (!is_null($this->IsGroupRole)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsGroupRole', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsGroupRole>" . VMware_VCloud_API_Helper::format_boolean($this->IsGroupRole, $input_name='IsGroupRole') . "</" . $ns . "IsGroupRole>\n");
        }
        if (!is_null($this->StoredVmQuota)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'StoredVmQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "StoredVmQuota>" . VMware_VCloud_API_Helper::format_integer($this->StoredVmQuota, $input_name='StoredVmQuota') . "</" . $ns . "StoredVmQuota>\n");
        }
        if (!is_null($this->DeployedVmQuota)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DeployedVmQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DeployedVmQuota>" . VMware_VCloud_API_Helper::format_integer($this->DeployedVmQuota, $input_name='DeployedVmQuota') . "</" . $ns . "DeployedVmQuota>\n");
        }
        if (!is_null($this->Role)) {
            $out = $this->Role->export('Role', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Password)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Password', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Password>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Password, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Password')) . "</" . $ns . "Password>\n");
        }
        if (!is_null($this->GroupReferences)) {
            $out = $this->GroupReferences->export('GroupReferences', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->FullName) ||
            !is_null($this->EmailAddress) ||
            !is_null($this->Telephone) ||
            !is_null($this->IsEnabled) ||
            !is_null($this->IsLocked) ||
            !is_null($this->IM) ||
            !is_null($this->NameInSource) ||
            !is_null($this->IsAlertEnabled) ||
            !is_null($this->AlertEmailPrefix) ||
            !is_null($this->AlertEmail) ||
            !is_null($this->IsExternal) ||
            !is_null($this->ProviderType) ||
            !is_null($this->IsDefaultCached) ||
            !is_null($this->IsGroupRole) ||
            !is_null($this->StoredVmQuota) ||
            !is_null($this->DeployedVmQuota) ||
            !is_null($this->Role) ||
            !is_null($this->Password) ||
            !is_null($this->GroupReferences) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FullName') {
            $sval = $child->nodeValue;
            $this->FullName = $sval;
            if (!empty($namespace)) {
                $this->namespace['FullName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EmailAddress') {
            $sval = $child->nodeValue;
            $this->EmailAddress = $sval;
            if (!empty($namespace)) {
                $this->namespace['EmailAddress'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Telephone') {
            $sval = $child->nodeValue;
            $this->Telephone = $sval;
            if (!empty($namespace)) {
                $this->namespace['Telephone'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsLocked') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsLocked = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsLocked'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IM') {
            $sval = $child->nodeValue;
            $this->IM = $sval;
            if (!empty($namespace)) {
                $this->namespace['IM'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NameInSource') {
            $sval = $child->nodeValue;
            $this->NameInSource = $sval;
            if (!empty($namespace)) {
                $this->namespace['NameInSource'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsAlertEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsAlertEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsAlertEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AlertEmailPrefix') {
            $sval = $child->nodeValue;
            $this->AlertEmailPrefix = $sval;
            if (!empty($namespace)) {
                $this->namespace['AlertEmailPrefix'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AlertEmail') {
            $sval = $child->nodeValue;
            $this->AlertEmail = $sval;
            if (!empty($namespace)) {
                $this->namespace['AlertEmail'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsExternal') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsExternal = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsExternal'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderType') {
            $sval = $child->nodeValue;
            $this->ProviderType = $sval;
            if (!empty($namespace)) {
                $this->namespace['ProviderType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsDefaultCached') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsDefaultCached = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsDefaultCached'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsGroupRole') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsGroupRole = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsGroupRole'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StoredVmQuota') {
            $sval = $child->nodeValue;
            $this->StoredVmQuota = $sval;
            if (!empty($namespace)) {
                $this->namespace['StoredVmQuota'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeployedVmQuota') {
            $sval = $child->nodeValue;
            $this->DeployedVmQuota = $sval;
            if (!empty($namespace)) {
                $this->namespace['DeployedVmQuota'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Role') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Role');
            $this->setRole($obj);
            if (!empty($namespace)) {
                $this->namespace['Role'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Password') {
            $sval = $child->nodeValue;
            $this->Password = $sval;
            if (!empty($namespace)) {
                $this->namespace['Password'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupReferences') {
            $obj = new VMware_VCloud_API_GroupsListType();
            $obj->build($child);
            $obj->set_tagName('GroupReferences');
            $this->setGroupReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['GroupReferences'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}