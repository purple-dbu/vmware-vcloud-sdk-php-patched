<?php
class VMware_VCloud_API_Extension_SystemConfigurationSettingType extends VMware_VCloud_API_ResourceType {
    protected $Name = null;
    protected $Section = null;
    protected $Value = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $Name - [optional] 
    * @param string $Section - [optional] 
    * @param string $Value - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $Name=null, $Section=null, $Value=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->Name = $Name;
        $this->Section = $Section;
        $this->Value = $Value;
        $this->tagName = 'SystemConfigurationSetting';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) { 
        $this->Name = $Name;
    }
    public function getSection() {
        return $this->Section;
    }
    public function setSection($Section) { 
        $this->Section = $Section;
    }
    public function getValue() {
        return $this->Value;
    }
    public function setValue($Value) { 
        $this->Value = $Value;
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
        if (!is_null($this->Section)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Section', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Section>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Section, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Section')) . "</" . $ns . "Section>\n");
        }
        if (!is_null($this->Value)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Value', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Value>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Value, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Value')) . "</" . $ns . "Value>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Name) ||
            !is_null($this->Section) ||
            !is_null($this->Value) ||
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Section') {
            $sval = $child->nodeValue;
            $this->Section = $sval;
            if (!empty($namespace)) {
                $this->namespace['Section'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AnnotationSection') {
            $obj = new VMware_VCloud_API_OVF_AnnotationSection_Type();
            $obj->build($child);
            $obj->set_tagName('AnnotationSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['AnnotationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProductSection') {
            $obj = new VMware_VCloud_API_OVF_ProductSection_Type();
            $obj->build($child);
            $obj->set_tagName('ProductSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['ProductSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkSection') {
            $obj = new VMware_VCloud_API_OVF_NetworkSection_Type();
            $obj->build($child);
            $obj->set_tagName('NetworkSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DiskSection') {
            $obj = new VMware_VCloud_API_OVF_DiskSection_Type();
            $obj->build($child);
            $obj->set_tagName('DiskSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['DiskSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OperatingSystemSection') {
            $obj = new VMware_VCloud_API_OVF_OperatingSystemSection_Type();
            $obj->build($child);
            $obj->set_tagName('OperatingSystemSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['OperatingSystemSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EulaSection') {
            $obj = new VMware_VCloud_API_OVF_EulaSection_Type();
            $obj->build($child);
            $obj->set_tagName('EulaSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['EulaSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualHardwareSection') {
            $obj = new VMware_VCloud_API_OVF_VirtualHardwareSection_Type();
            $obj->build($child);
            $obj->set_tagName('VirtualHardwareSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualHardwareSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceAllocationSection') {
            $obj = new VMware_VCloud_API_OVF_ResourceAllocationSection_Type();
            $obj->build($child);
            $obj->set_tagName('ResourceAllocationSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceAllocationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstallSection') {
            $obj = new VMware_VCloud_API_OVF_InstallSection_Type();
            $obj->build($child);
            $obj->set_tagName('InstallSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['InstallSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StartupSection') {
            $obj = new VMware_VCloud_API_OVF_StartupSection_Type();
            $obj->build($child);
            $obj->set_tagName('StartupSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['StartupSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeploymentOptionSection') {
            $obj = new VMware_VCloud_API_OVF_DeploymentOptionSection_Type();
            $obj->build($child);
            $obj->set_tagName('DeploymentOptionSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['DeploymentOptionSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PropertySection') {
            $obj = new VMware_VCloud_API_OVFENV_PropertySection_Type();
            $obj->build($child);
            $obj->set_tagName('PropertySection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['PropertySection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PlatformSection') {
            $obj = new VMware_VCloud_API_OVFENV_PlatformSection_Type();
            $obj->build($child);
            $obj->set_tagName('PlatformSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['PlatformSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpAssignmentSection') {
            $obj = new VMware_VCloud_API_IpAssignmentSection_Type();
            $obj->build($child);
            $obj->set_tagName('IpAssignmentSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['IpAssignmentSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CpuCompatibilitySection') {
            $obj = new VMware_VCloud_API_CpuCompatibilitySection_Type();
            $obj->build($child);
            $obj->set_tagName('CpuCompatibilitySection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['CpuCompatibilitySection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BootOrderSection') {
            $obj = new VMware_VCloud_API_BootOrderSection_Type();
            $obj->build($child);
            $obj->set_tagName('BootOrderSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['BootOrderSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkConfigSection') {
            $obj = new VMware_VCloud_API_NetworkConfigSectionType();
            $obj->build($child);
            $obj->set_tagName('NetworkConfigSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkConfigSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LeaseSettingsSection') {
            $obj = new VMware_VCloud_API_LeaseSettingsSectionType();
            $obj->build($child);
            $obj->set_tagName('LeaseSettingsSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['LeaseSettingsSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkConnectionSection') {
            $obj = new VMware_VCloud_API_NetworkConnectionSectionType();
            $obj->build($child);
            $obj->set_tagName('NetworkConnectionSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkConnectionSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RuntimeInfoSection') {
            $obj = new VMware_VCloud_API_RuntimeInfoSectionType();
            $obj->build($child);
            $obj->set_tagName('RuntimeInfoSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['RuntimeInfoSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GuestCustomizationSection') {
            $obj = new VMware_VCloud_API_GuestCustomizationSectionType();
            $obj->build($child);
            $obj->set_tagName('GuestCustomizationSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['GuestCustomizationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SnapshotSection') {
            $obj = new VMware_VCloud_API_SnapshotSectionType();
            $obj->build($child);
            $obj->set_tagName('SnapshotSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['SnapshotSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultStorageProfileSection') {
            $obj = new VMware_VCloud_API_DefaultStorageProfileSection_Type();
            $obj->build($child);
            $obj->set_tagName('DefaultStorageProfileSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['DefaultStorageProfileSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CustomizationSection') {
            $obj = new VMware_VCloud_API_CustomizationSectionType();
            $obj->build($child);
            $obj->set_tagName('CustomizationSection');
            $this->setSection($obj);
            if (!empty($namespace)) {
                $this->namespace['CustomizationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Value') {
            $sval = $child->nodeValue;
            $this->Value = $sval;
            if (!empty($namespace)) {
                $this->namespace['Value'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}