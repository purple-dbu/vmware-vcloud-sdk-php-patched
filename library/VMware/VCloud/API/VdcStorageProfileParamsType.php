<?php
class VMware_VCloud_API_VdcStorageProfileParamsType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Enabled = null;
    protected $Units = null;
    protected $Limit = null;
    protected $Default = null;
    protected $ProviderVdcStorageProfile = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $Enabled - [optional] 
    * @param string $Units - [required] 
    * @param int $Limit - [required] 
    * @param boolean $Default - [required] 
    * @param VMware_VCloud_API_ReferenceType $ProviderVdcStorageProfile - [required]
    */
    public function __construct($VCloudExtension=null, $Enabled=null, $Units=null, $Limit=null, $Default=null, $ProviderVdcStorageProfile=null) {
        parent::__construct($VCloudExtension);
        $this->Enabled = $Enabled;
        $this->Units = $Units;
        $this->Limit = $Limit;
        $this->Default = $Default;
        $this->ProviderVdcStorageProfile = $ProviderVdcStorageProfile;
        $this->tagName = 'VdcStorageProfileParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getEnabled() {
        return $this->Enabled;
    }
    public function setEnabled($Enabled) { 
        $this->Enabled = $Enabled;
    }
    public function getUnits() {
        return $this->Units;
    }
    public function setUnits($Units) { 
        $this->Units = $Units;
    }
    public function getLimit() {
        return $this->Limit;
    }
    public function setLimit($Limit) { 
        $this->Limit = $Limit;
    }
    public function getDefault() {
        return $this->Default;
    }
    public function setDefault($Default) { 
        $this->Default = $Default;
    }
    public function getProviderVdcStorageProfile() {
        return $this->ProviderVdcStorageProfile;
    }
    public function setProviderVdcStorageProfile($ProviderVdcStorageProfile) { 
        $this->ProviderVdcStorageProfile = $ProviderVdcStorageProfile;
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
        if (!is_null($this->Enabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Enabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Enabled>" . VMware_VCloud_API_Helper::format_boolean($this->Enabled, $input_name='Enabled') . "</" . $ns . "Enabled>\n");
        }
        if (!is_null($this->Units)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Units', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Units>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Units, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Units')) . "</" . $ns . "Units>\n");
        }
        if (!is_null($this->Limit)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Limit', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Limit>" . VMware_VCloud_API_Helper::format_integer($this->Limit, $input_name='Limit') . "</" . $ns . "Limit>\n");
        }
        if (!is_null($this->Default)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Default', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Default>" . VMware_VCloud_API_Helper::format_boolean($this->Default, $input_name='Default') . "</" . $ns . "Default>\n");
     }
        if (!is_null($this->ProviderVdcStorageProfile)) {
            $out = $this->ProviderVdcStorageProfile->export('ProviderVdcStorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Enabled) ||
            !is_null($this->Units) ||
            !is_null($this->Limit) ||
            !is_null($this->Default) ||
            !is_null($this->ProviderVdcStorageProfile) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Enabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Enabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['Enabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Units') {
            $sval = $child->nodeValue;
            $this->Units = $sval;
            if (!empty($namespace)) {
                $this->namespace['Units'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Limit') {
            $sval = $child->nodeValue;
            $this->Limit = $sval;
            if (!empty($namespace)) {
                $this->namespace['Limit'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Default') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Default = $sval;
            if (!empty($namespace)) {
                $this->namespace['Default'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderVdcStorageProfile') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('ProviderVdcStorageProfile');
            $this->setProviderVdcStorageProfile($obj);
            if (!empty($namespace)) {
                $this->namespace['ProviderVdcStorageProfile'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}