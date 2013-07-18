<?php
class VMware_VCloud_API_OrgGeneralSettingsType extends VMware_VCloud_API_ResourceType {
    protected $CanPublishCatalogs = null;
    protected $DeployedVMQuota = null;
    protected $StoredVmQuota = null;
    protected $UseServerBootSequence = null;
    protected $DelayAfterPowerOnSeconds = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param boolean $CanPublishCatalogs - [optional] 
    * @param int $DeployedVMQuota - [optional] 
    * @param int $StoredVmQuota - [optional] 
    * @param boolean $UseServerBootSequence - [optional] 
    * @param int $DelayAfterPowerOnSeconds - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $CanPublishCatalogs=null, $DeployedVMQuota=null, $StoredVmQuota=null, $UseServerBootSequence=null, $DelayAfterPowerOnSeconds=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->CanPublishCatalogs = $CanPublishCatalogs;
        $this->DeployedVMQuota = $DeployedVMQuota;
        $this->StoredVmQuota = $StoredVmQuota;
        $this->UseServerBootSequence = $UseServerBootSequence;
        $this->DelayAfterPowerOnSeconds = $DelayAfterPowerOnSeconds;
        $this->tagName = 'GeneralOrgSettings';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getCanPublishCatalogs() {
        return $this->CanPublishCatalogs;
    }
    public function setCanPublishCatalogs($CanPublishCatalogs) { 
        $this->CanPublishCatalogs = $CanPublishCatalogs;
    }
    public function getDeployedVMQuota() {
        return $this->DeployedVMQuota;
    }
    public function setDeployedVMQuota($DeployedVMQuota) { 
        $this->DeployedVMQuota = $DeployedVMQuota;
    }
    public function getStoredVmQuota() {
        return $this->StoredVmQuota;
    }
    public function setStoredVmQuota($StoredVmQuota) { 
        $this->StoredVmQuota = $StoredVmQuota;
    }
    public function getUseServerBootSequence() {
        return $this->UseServerBootSequence;
    }
    public function setUseServerBootSequence($UseServerBootSequence) { 
        $this->UseServerBootSequence = $UseServerBootSequence;
    }
    public function getDelayAfterPowerOnSeconds() {
        return $this->DelayAfterPowerOnSeconds;
    }
    public function setDelayAfterPowerOnSeconds($DelayAfterPowerOnSeconds) { 
        $this->DelayAfterPowerOnSeconds = $DelayAfterPowerOnSeconds;
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
        if (!is_null($this->CanPublishCatalogs)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'CanPublishCatalogs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "CanPublishCatalogs>" . VMware_VCloud_API_Helper::format_boolean($this->CanPublishCatalogs, $input_name='CanPublishCatalogs') . "</" . $ns . "CanPublishCatalogs>\n");
        }
        if (!is_null($this->DeployedVMQuota)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DeployedVMQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DeployedVMQuota>" . VMware_VCloud_API_Helper::format_integer($this->DeployedVMQuota, $input_name='DeployedVMQuota') . "</" . $ns . "DeployedVMQuota>\n");
        }
        if (!is_null($this->StoredVmQuota)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'StoredVmQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "StoredVmQuota>" . VMware_VCloud_API_Helper::format_integer($this->StoredVmQuota, $input_name='StoredVmQuota') . "</" . $ns . "StoredVmQuota>\n");
        }
        if (!is_null($this->UseServerBootSequence)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UseServerBootSequence', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UseServerBootSequence>" . VMware_VCloud_API_Helper::format_boolean($this->UseServerBootSequence, $input_name='UseServerBootSequence') . "</" . $ns . "UseServerBootSequence>\n");
        }
        if (!is_null($this->DelayAfterPowerOnSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DelayAfterPowerOnSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DelayAfterPowerOnSeconds>" . VMware_VCloud_API_Helper::format_integer($this->DelayAfterPowerOnSeconds, $input_name='DelayAfterPowerOnSeconds') . "</" . $ns . "DelayAfterPowerOnSeconds>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->CanPublishCatalogs) ||
            !is_null($this->DeployedVMQuota) ||
            !is_null($this->StoredVmQuota) ||
            !is_null($this->UseServerBootSequence) ||
            !is_null($this->DelayAfterPowerOnSeconds) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CanPublishCatalogs') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->CanPublishCatalogs = $sval;
            if (!empty($namespace)) {
                $this->namespace['CanPublishCatalogs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeployedVMQuota') {
            $sval = $child->nodeValue;
            $this->DeployedVMQuota = $sval;
            if (!empty($namespace)) {
                $this->namespace['DeployedVMQuota'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StoredVmQuota') {
            $sval = $child->nodeValue;
            $this->StoredVmQuota = $sval;
            if (!empty($namespace)) {
                $this->namespace['StoredVmQuota'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UseServerBootSequence') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->UseServerBootSequence = $sval;
            if (!empty($namespace)) {
                $this->namespace['UseServerBootSequence'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DelayAfterPowerOnSeconds') {
            $sval = $child->nodeValue;
            $this->DelayAfterPowerOnSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['DelayAfterPowerOnSeconds'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}