<?php
class VMware_VCloud_API_VCloudType extends VMware_VCloud_API_EntityType {
    protected $OrganizationReferences = null;
    protected $ProviderVdcReferences = null;
    protected $RightReferences = null;
    protected $RoleReferences = null;
    protected $Networks = null;
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
    * @param VMware_VCloud_API_OrganizationReferencesType $OrganizationReferences - [optional]
    * @param VMware_VCloud_API_ProviderVdcReferencesType $ProviderVdcReferences - [optional]
    * @param VMware_VCloud_API_RightReferencesType $RightReferences - [optional]
    * @param VMware_VCloud_API_RoleReferencesType $RoleReferences - [optional]
    * @param VMware_VCloud_API_NetworksType $Networks - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $OrganizationReferences=null, $ProviderVdcReferences=null, $RightReferences=null, $RoleReferences=null, $Networks=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->OrganizationReferences = $OrganizationReferences;
        $this->ProviderVdcReferences = $ProviderVdcReferences;
        $this->RightReferences = $RightReferences;
        $this->RoleReferences = $RoleReferences;
        $this->Networks = $Networks;
        $this->tagName = 'VCloud';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOrganizationReferences() {
        return $this->OrganizationReferences;
    }
    public function setOrganizationReferences($OrganizationReferences) { 
        $this->OrganizationReferences = $OrganizationReferences;
    }
    public function getProviderVdcReferences() {
        return $this->ProviderVdcReferences;
    }
    public function setProviderVdcReferences($ProviderVdcReferences) { 
        $this->ProviderVdcReferences = $ProviderVdcReferences;
    }
    public function getRightReferences() {
        return $this->RightReferences;
    }
    public function setRightReferences($RightReferences) { 
        $this->RightReferences = $RightReferences;
    }
    public function getRoleReferences() {
        return $this->RoleReferences;
    }
    public function setRoleReferences($RoleReferences) { 
        $this->RoleReferences = $RoleReferences;
    }
    public function getNetworks() {
        return $this->Networks;
    }
    public function setNetworks($Networks) { 
        $this->Networks = $Networks;
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
        if (!is_null($this->OrganizationReferences)) {
            $out = $this->OrganizationReferences->export('OrganizationReferences', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ProviderVdcReferences)) {
            $out = $this->ProviderVdcReferences->export('ProviderVdcReferences', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->RightReferences)) {
            $out = $this->RightReferences->export('RightReferences', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->RoleReferences)) {
            $out = $this->RoleReferences->export('RoleReferences', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Networks)) {
            $out = $this->Networks->export('Networks', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->OrganizationReferences) ||
            !is_null($this->ProviderVdcReferences) ||
            !is_null($this->RightReferences) ||
            !is_null($this->RoleReferences) ||
            !is_null($this->Networks) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrganizationReferences') {
            $obj = new VMware_VCloud_API_OrganizationReferencesType();
            $obj->build($child);
            $obj->set_tagName('OrganizationReferences');
            $this->setOrganizationReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['OrganizationReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderVdcReferences') {
            $obj = new VMware_VCloud_API_ProviderVdcReferencesType();
            $obj->build($child);
            $obj->set_tagName('ProviderVdcReferences');
            $this->setProviderVdcReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ProviderVdcReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RightReferences') {
            $obj = new VMware_VCloud_API_RightReferencesType();
            $obj->build($child);
            $obj->set_tagName('RightReferences');
            $this->setRightReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['RightReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RoleReferences') {
            $obj = new VMware_VCloud_API_RoleReferencesType();
            $obj->build($child);
            $obj->set_tagName('RoleReferences');
            $this->setRoleReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['RoleReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Networks') {
            $obj = new VMware_VCloud_API_NetworksType();
            $obj->build($child);
            $obj->set_tagName('Networks');
            $this->setNetworks($obj);
            if (!empty($namespace)) {
                $this->namespace['Networks'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}