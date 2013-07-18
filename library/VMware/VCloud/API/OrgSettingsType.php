<?php
class VMware_VCloud_API_OrgSettingsType extends VMware_VCloud_API_ResourceType {
    protected $OrgGeneralSettings = null;
    protected $VAppLeaseSettings = null;
    protected $VAppTemplateLeaseSettings = null;
    protected $OrgLdapSettings = null;
    protected $OrgEmailSettings = null;
    protected $OrgPasswordPolicySettings = null;
    protected $OrgOperationLimitsSettings = null;
    protected $OrgFederationSettings = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_OrgGeneralSettingsType $OrgGeneralSettings - [optional]
    * @param VMware_VCloud_API_OrgLeaseSettingsType $VAppLeaseSettings - [optional]
    * @param VMware_VCloud_API_OrgVAppTemplateLeaseSettingsType $VAppTemplateLeaseSettings - [optional]
    * @param VMware_VCloud_API_OrgLdapSettingsType $OrgLdapSettings - [optional]
    * @param VMware_VCloud_API_OrgEmailSettingsType $OrgEmailSettings - [optional]
    * @param VMware_VCloud_API_OrgPasswordPolicySettingsType $OrgPasswordPolicySettings - [optional]
    * @param VMware_VCloud_API_OrgOperationLimitsSettingsType $OrgOperationLimitsSettings - [optional]
    * @param VMware_VCloud_API_OrgFederationSettingsType $OrgFederationSettings - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $OrgGeneralSettings=null, $VAppLeaseSettings=null, $VAppTemplateLeaseSettings=null, $OrgLdapSettings=null, $OrgEmailSettings=null, $OrgPasswordPolicySettings=null, $OrgOperationLimitsSettings=null, $OrgFederationSettings=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->OrgGeneralSettings = $OrgGeneralSettings;
        $this->VAppLeaseSettings = $VAppLeaseSettings;
        $this->VAppTemplateLeaseSettings = $VAppTemplateLeaseSettings;
        $this->OrgLdapSettings = $OrgLdapSettings;
        $this->OrgEmailSettings = $OrgEmailSettings;
        $this->OrgPasswordPolicySettings = $OrgPasswordPolicySettings;
        $this->OrgOperationLimitsSettings = $OrgOperationLimitsSettings;
        $this->OrgFederationSettings = $OrgFederationSettings;
        $this->tagName = 'OrgSettings';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOrgGeneralSettings() {
        return $this->OrgGeneralSettings;
    }
    public function setOrgGeneralSettings($OrgGeneralSettings) { 
        $this->OrgGeneralSettings = $OrgGeneralSettings;
    }
    public function getVAppLeaseSettings() {
        return $this->VAppLeaseSettings;
    }
    public function setVAppLeaseSettings($VAppLeaseSettings) { 
        $this->VAppLeaseSettings = $VAppLeaseSettings;
    }
    public function getVAppTemplateLeaseSettings() {
        return $this->VAppTemplateLeaseSettings;
    }
    public function setVAppTemplateLeaseSettings($VAppTemplateLeaseSettings) { 
        $this->VAppTemplateLeaseSettings = $VAppTemplateLeaseSettings;
    }
    public function getOrgLdapSettings() {
        return $this->OrgLdapSettings;
    }
    public function setOrgLdapSettings($OrgLdapSettings) { 
        $this->OrgLdapSettings = $OrgLdapSettings;
    }
    public function getOrgEmailSettings() {
        return $this->OrgEmailSettings;
    }
    public function setOrgEmailSettings($OrgEmailSettings) { 
        $this->OrgEmailSettings = $OrgEmailSettings;
    }
    public function getOrgPasswordPolicySettings() {
        return $this->OrgPasswordPolicySettings;
    }
    public function setOrgPasswordPolicySettings($OrgPasswordPolicySettings) { 
        $this->OrgPasswordPolicySettings = $OrgPasswordPolicySettings;
    }
    public function getOrgOperationLimitsSettings() {
        return $this->OrgOperationLimitsSettings;
    }
    public function setOrgOperationLimitsSettings($OrgOperationLimitsSettings) { 
        $this->OrgOperationLimitsSettings = $OrgOperationLimitsSettings;
    }
    public function getOrgFederationSettings() {
        return $this->OrgFederationSettings;
    }
    public function setOrgFederationSettings($OrgFederationSettings) { 
        $this->OrgFederationSettings = $OrgFederationSettings;
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
        if (!is_null($this->OrgGeneralSettings)) {
            $out = $this->OrgGeneralSettings->export('OrgGeneralSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VAppLeaseSettings)) {
            $out = $this->VAppLeaseSettings->export('VAppLeaseSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VAppTemplateLeaseSettings)) {
            $out = $this->VAppTemplateLeaseSettings->export('VAppTemplateLeaseSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OrgLdapSettings)) {
            $out = $this->OrgLdapSettings->export('OrgLdapSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OrgEmailSettings)) {
            $out = $this->OrgEmailSettings->export('OrgEmailSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OrgPasswordPolicySettings)) {
            $out = $this->OrgPasswordPolicySettings->export('OrgPasswordPolicySettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OrgOperationLimitsSettings)) {
            $out = $this->OrgOperationLimitsSettings->export('OrgOperationLimitsSettings', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->OrgFederationSettings)) {
            $out = $this->OrgFederationSettings->export('OrgFederationSettings', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->OrgGeneralSettings) ||
            !is_null($this->VAppLeaseSettings) ||
            !is_null($this->VAppTemplateLeaseSettings) ||
            !is_null($this->OrgLdapSettings) ||
            !is_null($this->OrgEmailSettings) ||
            !is_null($this->OrgPasswordPolicySettings) ||
            !is_null($this->OrgOperationLimitsSettings) ||
            !is_null($this->OrgFederationSettings) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgGeneralSettings') {
            $obj = new VMware_VCloud_API_OrgGeneralSettingsType();
            $obj->build($child);
            $obj->set_tagName('OrgGeneralSettings');
            $this->setOrgGeneralSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgGeneralSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppLeaseSettings') {
            $obj = new VMware_VCloud_API_OrgLeaseSettingsType();
            $obj->build($child);
            $obj->set_tagName('VAppLeaseSettings');
            $this->setVAppLeaseSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppLeaseSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppTemplateLeaseSettings') {
            $obj = new VMware_VCloud_API_OrgVAppTemplateLeaseSettingsType();
            $obj->build($child);
            $obj->set_tagName('VAppTemplateLeaseSettings');
            $this->setVAppTemplateLeaseSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppTemplateLeaseSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgLdapSettings') {
            $obj = new VMware_VCloud_API_OrgLdapSettingsType();
            $obj->build($child);
            $obj->set_tagName('OrgLdapSettings');
            $this->setOrgLdapSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgLdapSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgEmailSettings') {
            $obj = new VMware_VCloud_API_OrgEmailSettingsType();
            $obj->build($child);
            $obj->set_tagName('OrgEmailSettings');
            $this->setOrgEmailSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgEmailSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgPasswordPolicySettings') {
            $obj = new VMware_VCloud_API_OrgPasswordPolicySettingsType();
            $obj->build($child);
            $obj->set_tagName('OrgPasswordPolicySettings');
            $this->setOrgPasswordPolicySettings($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgPasswordPolicySettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgOperationLimitsSettings') {
            $obj = new VMware_VCloud_API_OrgOperationLimitsSettingsType();
            $obj->build($child);
            $obj->set_tagName('OrgOperationLimitsSettings');
            $this->setOrgOperationLimitsSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgOperationLimitsSettings'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgFederationSettings') {
            $obj = new VMware_VCloud_API_OrgFederationSettingsType();
            $obj->build($child);
            $obj->set_tagName('OrgFederationSettings');
            $this->setOrgFederationSettings($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgFederationSettings'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}