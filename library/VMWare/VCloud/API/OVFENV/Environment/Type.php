<?php
class VMware_VCloud_API_OVFENV_Environment_Type {
    protected $id = null;
    protected $Section = array();
    protected $Entity = array();
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/environment/1';

   /**
    * @param string $id - [optional] an attribute, default ''
    * @param array $Section - [optional] an array of VMware_VCloud_API_OVFENV_Section_Type objects
    * @param array $Entity - [optional] an array of VMware_VCloud_API_OVFENV_Entity_Type objects
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($id='', $Section=null, $Entity=null, $Any=null) {
        $this->id = $id;
        if (!is_null($Section)) {
            $this->Section = $Section;
        }
        if (!is_null($Entity)) {
            $this->Entity = $Entity;
        }
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->anyAttributes = array();
        $this->tagName = 'Environment';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSection() {
        return $this->Section;
    }
    public function setSection($Section) { 
        $this->Section = $Section;
    }
    public function addSection($value) { array_push($this->Section, $value); }
    public function getEntity() {
        return $this->Entity;
    }
    public function setEntity($Entity) { 
        $this->Entity = $Entity;
    }
    public function addEntity($value) { array_push($this->Entity, $value); }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
    public function get_id(){
        return $this->id;
    }
    public function set_id($id) {
        $this->id = $id;
    }
    public function get_anyAttributes() { return $this->anyAttributes; }
    public function set_anyAttributes($anyAttributes) { $this->anyAttributes = $anyAttributes; }
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
        if (!is_null($this->id)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'id', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'id=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->id, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='id')));
        }
        if ($this->anyAttributes) {
            foreach ($this->anyAttributes as $name => $value) {
                if (array_key_exists($name, $this->namespace)) {
                    $ns = $this->namespace[$name];
                    if (!empty($ns)) {
                        $name = $ns . ":" . $name;
                    }
                }
                if ('xsi:type' != $name) {
                    $out = VMware_VCloud_API_Helper::addString($out, " $name=" . VMware_VCloud_API_Helper::quote_attrib($value));
                }
            }
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (isset($this->Section)) {
            foreach ($this->Section as $Section) {
                $tagName = $Section->get_tagName();
                if (empty($tagName)) {
                    $tagName = 'Section';
                }
                $out = $Section->export($tagName, $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->Entity)) {
            foreach ($this->Entity as $Entity) {
                $out = $Entity->export('Entity', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->Any)) {
            foreach ($this->Any as $Any) {
                if ($Any instanceof SimpleXMLElement) {
                    $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                    $out = VMware_VCloud_API_Helper::addString($out, $Any->asXML() . "\n");
                } else {
                    $tagName = $Any->get_tagName();
                    $namespace = $Any::$defaultNS;
                    $out = $Any->export($tagName, $out, $level, '', $namespace, $rootNS);
                }
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Section) ||
            !empty($this->Entity) ||
            !empty($this->Any)
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
        $ndid = $attrs->getNamedItem('id');
        if (!is_null($ndid)) {
            $this->id = $ndid->value;
            if (isset($ndid->prefix)) {
                $this->namespace['id'] = $ndid->prefix;
                $nsUri = $ndid->lookupNamespaceURI($ndid->prefix);
            }
            $node->removeAttributeNS($nsUri, 'id');
        } else {
            $this->id = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "id" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Section') {
            $obj = new VMware_VCloud_API_OVFENV_Section_Type();
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Entity') {
            $obj = new VMware_VCloud_API_OVFENV_Entity_Type();
            $obj->build($child);
            $obj->set_tagName('Entity');
            array_push($this->Entity, $obj);
            if (!empty($namespace)) {
                $this->namespace['Entity'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE) {
            $type = VMware_VCloud_API_Helper::getClassName($nodeName);
            if (class_exists($type) && method_exists($type, 'build')) {
                $class = new ReflectionClass($type);
                if ($class->isInstantiable()) {
                    $obj = $class->newInstance();
                    $obj->build($child);
                    $obj->set_tagName($nodeName);
                }
            } else {
                $obj = simplexml_import_dom($child);
            }
            array_push($this->Any, $obj);
            if (!empty($namespace)) {
                $this->namespace['Any'] = $namespace;
            }
        }
    }
}