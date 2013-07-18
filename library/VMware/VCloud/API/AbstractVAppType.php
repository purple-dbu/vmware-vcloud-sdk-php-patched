<?php
class VMware_VCloud_API_AbstractVAppType extends VMware_VCloud_API_ResourceEntityType {
    protected $deployed = null;
    protected $VAppParent = null;
    protected $Section = array();
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
    * @param boolean $deployed - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $VAppParent - [optional]
    * @param array $Section - [optional] an array of VMware_VCloud_API_OVF_Section_Type objects
    * @param string $DateCreated - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $Files=null, $deployed=null, $VAppParent=null, $Section=null, $DateCreated=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $status, $Files);
        $this->deployed = $deployed;
        $this->VAppParent = $VAppParent;
        if (!is_null($Section)) {
            $this->Section = $Section;
        }
        $this->DateCreated = $DateCreated;
        $this->tagName = 'ResourceEntity';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVAppParent() {
        return $this->VAppParent;
    }
    public function setVAppParent($VAppParent) { 
        $this->VAppParent = $VAppParent;
    }
    public function getSection() {
        return $this->Section;
    }
    public function setSection($Section) { 
        $this->Section = $Section;
    }
    public function addSection($value) { array_push($this->Section, $value); }
    public function getDateCreated() {
        return $this->DateCreated;
    }
    public function setDateCreated($DateCreated) { 
        $this->DateCreated = $DateCreated;
    }
    public function get_deployed(){
        return $this->deployed;
    }
    public function set_deployed($deployed) {
        $this->deployed = $deployed;
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
            if (0 >= strpos($namespacedef, 'xsi:type')) {
                $namespacedef = $namespacedef . " xsi:type='AbstractVAppType'";
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
        if (!is_null($this->deployed)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'deployed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'deployed=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->deployed, $input_name='deployed')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->VAppParent)) {
            $out = $this->VAppParent->export('VAppParent', $out, $level, '', $namespace, $rootNS);
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
        if (!is_null($this->DateCreated)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DateCreated', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DateCreated>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DateCreated, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DateCreated')) . "</" . $ns . "DateCreated>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VAppParent) ||
            !empty($this->Section) ||
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
        $nddeployed = $attrs->getNamedItem('deployed');
        if (!is_null($nddeployed)) {
            $this->deployed = VMware_VCloud_API_Helper::get_boolean($nddeployed->value);
            if (isset($nddeployed->prefix)) {
                $this->namespace['deployed'] = $nddeployed->prefix;
                $nsUri = $nddeployed->lookupNamespaceURI($nddeployed->prefix);
            }
            $node->removeAttributeNS($nsUri, 'deployed');
        } else {
            $this->deployed = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppParent') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppParent');
            $this->setVAppParent($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppParent'] = $namespace;
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