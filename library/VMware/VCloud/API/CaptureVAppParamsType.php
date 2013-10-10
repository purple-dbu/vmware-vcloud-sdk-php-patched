<?php
class VMware_VCloud_API_CaptureVAppParamsType extends VMware_VCloud_API_ParamsType {
    protected $Source = null;
    protected $Section = array();
    protected $VdcStorageProfile = null;
    protected $TargetCatalogItem = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_ReferenceType $Source - [required]
    * @param array $Section - [optional] an array of VMware_VCloud_API_OVF_Section_Type objects
    * @param VMware_VCloud_API_ReferenceType $VdcStorageProfile - [optional]
    * @param VMware_VCloud_API_ReferenceType $TargetCatalogItem - [optional]
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $Source=null, $Section=null, $VdcStorageProfile=null, $TargetCatalogItem=null) {
        parent::__construct($VCloudExtension, $name, $Description);
        $this->Source = $Source;
        if (!is_null($Section)) {
            $this->Section = $Section;
        }
        $this->VdcStorageProfile = $VdcStorageProfile;
        $this->TargetCatalogItem = $TargetCatalogItem;
        $this->tagName = 'CaptureVAppParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSource() {
        return $this->Source;
    }
    public function setSource($Source) { 
        $this->Source = $Source;
    }
    public function getSection() {
        return $this->Section;
    }
    public function setSection($Section) { 
        $this->Section = $Section;
    }
    public function addSection($value) { array_push($this->Section, $value); }
    public function getVdcStorageProfile() {
        return $this->VdcStorageProfile;
    }
    public function setVdcStorageProfile($VdcStorageProfile) { 
        $this->VdcStorageProfile = $VdcStorageProfile;
    }
    public function getTargetCatalogItem() {
        return $this->TargetCatalogItem;
    }
    public function setTargetCatalogItem($TargetCatalogItem) { 
        $this->TargetCatalogItem = $TargetCatalogItem;
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
        if (!is_null($this->Source)) {
            $out = $this->Source->export('Source', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Section)) {
            foreach ($this->Section as $Section) {
                $tagName = $Section->get_tagName();
                if (empty($tagName)) {
                    $tagName = 'Section';
                }
                $out = $Section->export($tagName, $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->VdcStorageProfile)) {
            $out = $this->VdcStorageProfile->export('VdcStorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->TargetCatalogItem)) {
            $out = $this->TargetCatalogItem->export('TargetCatalogItem', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Source) ||
            !empty($this->Section) ||
            !is_null($this->VdcStorageProfile) ||
            !is_null($this->TargetCatalogItem) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Source') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Source');
            $this->setSource($obj);
            if (!empty($namespace)) {
                $this->namespace['Source'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Section') {
            $obj = new VMware_VCloud_API_OVF_Section_Type();
            $obj->build($child);
            $obj->set_tagName('Section');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['Section'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AnnotationSection') {
            $obj = new VMware_VCloud_API_OVF_AnnotationSection_Type();
            $obj->build($child);
            $obj->set_tagName('AnnotationSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['AnnotationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProductSection') {
            $obj = new VMware_VCloud_API_OVF_ProductSection_Type();
            $obj->build($child);
            $obj->set_tagName('ProductSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['ProductSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkSection') {
            $obj = new VMware_VCloud_API_OVF_NetworkSection_Type();
            $obj->build($child);
            $obj->set_tagName('NetworkSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DiskSection') {
            $obj = new VMware_VCloud_API_OVF_DiskSection_Type();
            $obj->build($child);
            $obj->set_tagName('DiskSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['DiskSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OperatingSystemSection') {
            $obj = new VMware_VCloud_API_OVF_OperatingSystemSection_Type();
            $obj->build($child);
            $obj->set_tagName('OperatingSystemSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['OperatingSystemSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EulaSection') {
            $obj = new VMware_VCloud_API_OVF_EulaSection_Type();
            $obj->build($child);
            $obj->set_tagName('EulaSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['EulaSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualHardwareSection') {
            $obj = new VMware_VCloud_API_OVF_VirtualHardwareSection_Type();
            $obj->build($child);
            $obj->set_tagName('VirtualHardwareSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualHardwareSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceAllocationSection') {
            $obj = new VMware_VCloud_API_OVF_ResourceAllocationSection_Type();
            $obj->build($child);
            $obj->set_tagName('ResourceAllocationSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceAllocationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstallSection') {
            $obj = new VMware_VCloud_API_OVF_InstallSection_Type();
            $obj->build($child);
            $obj->set_tagName('InstallSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['InstallSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StartupSection') {
            $obj = new VMware_VCloud_API_OVF_StartupSection_Type();
            $obj->build($child);
            $obj->set_tagName('StartupSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['StartupSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeploymentOptionSection') {
            $obj = new VMware_VCloud_API_OVF_DeploymentOptionSection_Type();
            $obj->build($child);
            $obj->set_tagName('DeploymentOptionSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['DeploymentOptionSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PropertySection') {
            $obj = new VMware_VCloud_API_OVFENV_PropertySection_Type();
            $obj->build($child);
            $obj->set_tagName('PropertySection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['PropertySection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PlatformSection') {
            $obj = new VMware_VCloud_API_OVFENV_PlatformSection_Type();
            $obj->build($child);
            $obj->set_tagName('PlatformSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['PlatformSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpAssignmentSection') {
            $obj = new VMware_VCloud_API_IpAssignmentSection_Type();
            $obj->build($child);
            $obj->set_tagName('IpAssignmentSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['IpAssignmentSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CpuCompatibilitySection') {
            $obj = new VMware_VCloud_API_CpuCompatibilitySection_Type();
            $obj->build($child);
            $obj->set_tagName('CpuCompatibilitySection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['CpuCompatibilitySection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BootOrderSection') {
            $obj = new VMware_VCloud_API_BootOrderSection_Type();
            $obj->build($child);
            $obj->set_tagName('BootOrderSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['BootOrderSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkConfigSection') {
            $obj = new VMware_VCloud_API_NetworkConfigSectionType();
            $obj->build($child);
            $obj->set_tagName('NetworkConfigSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkConfigSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LeaseSettingsSection') {
            $obj = new VMware_VCloud_API_LeaseSettingsSectionType();
            $obj->build($child);
            $obj->set_tagName('LeaseSettingsSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['LeaseSettingsSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkConnectionSection') {
            $obj = new VMware_VCloud_API_NetworkConnectionSectionType();
            $obj->build($child);
            $obj->set_tagName('NetworkConnectionSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkConnectionSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RuntimeInfoSection') {
            $obj = new VMware_VCloud_API_RuntimeInfoSectionType();
            $obj->build($child);
            $obj->set_tagName('RuntimeInfoSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['RuntimeInfoSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GuestCustomizationSection') {
            $obj = new VMware_VCloud_API_GuestCustomizationSectionType();
            $obj->build($child);
            $obj->set_tagName('GuestCustomizationSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['GuestCustomizationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SnapshotSection') {
            $obj = new VMware_VCloud_API_SnapshotSectionType();
            $obj->build($child);
            $obj->set_tagName('SnapshotSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['SnapshotSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultStorageProfileSection') {
            $obj = new VMware_VCloud_API_DefaultStorageProfileSection_Type();
            $obj->build($child);
            $obj->set_tagName('DefaultStorageProfileSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['DefaultStorageProfileSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CustomizationSection') {
            $obj = new VMware_VCloud_API_CustomizationSectionType();
            $obj->build($child);
            $obj->set_tagName('CustomizationSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['CustomizationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VdcStorageProfile') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VdcStorageProfile');
            $this->setVdcStorageProfile($obj);
            if (!empty($namespace)) {
                $this->namespace['VdcStorageProfile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TargetCatalogItem') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('TargetCatalogItem');
            $this->setTargetCatalogItem($obj);
            if (!empty($namespace)) {
                $this->namespace['TargetCatalogItem'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}