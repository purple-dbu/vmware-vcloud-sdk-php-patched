<?php
class VMware_VCloud_API_VAppTemplateType extends VMware_VCloud_API_ResourceEntityType {
    protected $ovfDescriptorUploaded = null;
    protected $goldMaster = null;
    protected $Owner = null;
    protected $Children = null;
    protected $Section = array();
    protected $VAppScopedLocalId = null;
    protected $DefaultStorageProfile = null;
    protected $DateCreated = null;
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
    * @param int $status - [optional] an attribute, 
    * @param VMware_VCloud_API_FilesListType $Files - [optional]
    * @param boolean $ovfDescriptorUploaded - [optional] an attribute, 
    * @param boolean $goldMaster - [optional] an attribute, default 'false'
    * @param VMware_VCloud_API_OwnerType $Owner - [optional]
    * @param VMware_VCloud_API_VAppTemplateChildrenType $Children - [optional]
    * @param array $Section - [optional] an array of VMware_VCloud_API_OVF_Section_Type objects
    * @param string $VAppScopedLocalId - [optional] 
    * @param string $DefaultStorageProfile - [optional] 
    * @param string $DateCreated - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $Files=null, $ovfDescriptorUploaded=null, $goldMaster=False, $Owner=null, $Children=null, $Section=null, $VAppScopedLocalId=null, $DefaultStorageProfile=null, $DateCreated=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $status, $Files);
        $this->ovfDescriptorUploaded = $ovfDescriptorUploaded;
        $this->goldMaster = $goldMaster;
        $this->Owner = $Owner;
        $this->Children = $Children;
        if (!is_null($Section)) {
            $this->Section = $Section;
        }
        $this->VAppScopedLocalId = $VAppScopedLocalId;
        $this->DefaultStorageProfile = $DefaultStorageProfile;
        $this->DateCreated = $DateCreated;
        $this->tagName = 'VAppTemplate';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getOwner() {
        return $this->Owner;
    }
    public function setOwner($Owner) { 
        $this->Owner = $Owner;
    }
    public function getChildren() {
        return $this->Children;
    }
    public function setChildren($Children) { 
        $this->Children = $Children;
    }
    public function getSection() {
        return $this->Section;
    }
    public function setSection($Section) { 
        $this->Section = $Section;
    }
    public function addSection($value) { array_push($this->Section, $value); }
    public function getVAppScopedLocalId() {
        return $this->VAppScopedLocalId;
    }
    public function setVAppScopedLocalId($VAppScopedLocalId) { 
        $this->VAppScopedLocalId = $VAppScopedLocalId;
    }
    public function getDefaultStorageProfile() {
        return $this->DefaultStorageProfile;
    }
    public function setDefaultStorageProfile($DefaultStorageProfile) { 
        $this->DefaultStorageProfile = $DefaultStorageProfile;
    }
    public function getDateCreated() {
        return $this->DateCreated;
    }
    public function setDateCreated($DateCreated) { 
        $this->DateCreated = $DateCreated;
    }
    public function get_ovfDescriptorUploaded(){
        return $this->ovfDescriptorUploaded;
    }
    public function set_ovfDescriptorUploaded($ovfDescriptorUploaded) {
        $this->ovfDescriptorUploaded = $ovfDescriptorUploaded;
    }
    public function get_goldMaster(){
        return $this->goldMaster;
    }
    public function set_goldMaster($goldMaster) {
        $this->goldMaster = $goldMaster;
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
        if (!is_null($this->ovfDescriptorUploaded)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ovfDescriptorUploaded', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ovfDescriptorUploaded=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->ovfDescriptorUploaded, $input_name='ovfDescriptorUploaded')));
        }
        if (!is_null($this->goldMaster)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'goldMaster', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'goldMaster=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->goldMaster, $input_name='goldMaster')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Owner)) {
            $out = $this->Owner->export('Owner', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Children)) {
            $out = $this->Children->export('Children', $out, $level, '', $namespace, $rootNS);
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
        if (!is_null($this->VAppScopedLocalId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VAppScopedLocalId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VAppScopedLocalId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VAppScopedLocalId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VAppScopedLocalId')) . "</" . $ns . "VAppScopedLocalId>\n");
        }
        if (!is_null($this->DefaultStorageProfile)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DefaultStorageProfile', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DefaultStorageProfile>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DefaultStorageProfile, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DefaultStorageProfile')) . "</" . $ns . "DefaultStorageProfile>\n");
        }
        if (!is_null($this->DateCreated)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DateCreated', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DateCreated>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DateCreated, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DateCreated')) . "</" . $ns . "DateCreated>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Owner) ||
            !is_null($this->Children) ||
            !empty($this->Section) ||
            !is_null($this->VAppScopedLocalId) ||
            !is_null($this->DefaultStorageProfile) ||
            !is_null($this->DateCreated) ||
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
        $ndovfDescriptorUploaded = $attrs->getNamedItem('ovfDescriptorUploaded');
        if (!is_null($ndovfDescriptorUploaded)) {
            $this->ovfDescriptorUploaded = VMware_VCloud_API_Helper::get_boolean($ndovfDescriptorUploaded->value);
            if (isset($ndovfDescriptorUploaded->prefix)) {
                $this->namespace['ovfDescriptorUploaded'] = $ndovfDescriptorUploaded->prefix;
                $nsUri = $ndovfDescriptorUploaded->lookupNamespaceURI($ndovfDescriptorUploaded->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ovfDescriptorUploaded');
        } else {
            $this->ovfDescriptorUploaded = null;
        }
        $ndgoldMaster = $attrs->getNamedItem('goldMaster');
        if (!is_null($ndgoldMaster)) {
            $this->goldMaster = VMware_VCloud_API_Helper::get_boolean($ndgoldMaster->value);
            if (isset($ndgoldMaster->prefix)) {
                $this->namespace['goldMaster'] = $ndgoldMaster->prefix;
                $nsUri = $ndgoldMaster->lookupNamespaceURI($ndgoldMaster->prefix);
            }
            $node->removeAttributeNS($nsUri, 'goldMaster');
        } else {
            $this->goldMaster = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Owner') {
            $obj = new VMware_VCloud_API_OwnerType();
            $obj->build($child);
            $obj->set_tagName('Owner');
            $this->setOwner($obj);
            if (!empty($namespace)) {
                $this->namespace['Owner'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Children') {
            $obj = new VMware_VCloud_API_VAppTemplateChildrenType();
            $obj->build($child);
            $obj->set_tagName('Children');
            $this->setChildren($obj);
            if (!empty($namespace)) {
                $this->namespace['Children'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppScopedLocalId') {
            $sval = $child->nodeValue;
            $this->VAppScopedLocalId = $sval;
            if (!empty($namespace)) {
                $this->namespace['VAppScopedLocalId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultStorageProfile') {
            $sval = $child->nodeValue;
            $this->DefaultStorageProfile = $sval;
            if (!empty($namespace)) {
                $this->namespace['DefaultStorageProfile'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DateCreated') {
            $sval = $child->nodeValue;
            $this->DateCreated = $sval;
            if (!empty($namespace)) {
                $this->namespace['DateCreated'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}