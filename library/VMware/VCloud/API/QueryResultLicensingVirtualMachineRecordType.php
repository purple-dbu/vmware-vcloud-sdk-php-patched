<?php
class VMware_VCloud_API_QueryResultLicensingVirtualMachineRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $virtualCpuCount = null;
    protected $managedObjectReference = null;
    protected $parentSampleId = null;
    protected $virtualCenterId = null;
    protected $observationDate = null;
    protected $memory = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param int $virtualCpuCount - [optional] an attribute, 
    * @param string $managedObjectReference - [optional] an attribute, 
    * @param string $parentSampleId - [optional] an attribute, 
    * @param string $virtualCenterId - [optional] an attribute, 
    * @param dateTime $observationDate - [optional] an attribute, 
    * @param int $memory - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $virtualCpuCount=null, $managedObjectReference=null, $parentSampleId=null, $virtualCenterId=null, $observationDate=null, $memory=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->virtualCpuCount = $virtualCpuCount;
        $this->managedObjectReference = $managedObjectReference;
        $this->parentSampleId = $parentSampleId;
        $this->virtualCenterId = $virtualCenterId;
        $this->observationDate = $observationDate;
        $this->memory = $memory;
        $this->tagName = 'LicensingVirtualMachineRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_virtualCpuCount(){
        return $this->virtualCpuCount;
    }
    public function set_virtualCpuCount($virtualCpuCount) {
        $this->virtualCpuCount = $virtualCpuCount;
    }
    public function get_managedObjectReference(){
        return $this->managedObjectReference;
    }
    public function set_managedObjectReference($managedObjectReference) {
        $this->managedObjectReference = $managedObjectReference;
    }
    public function get_parentSampleId(){
        return $this->parentSampleId;
    }
    public function set_parentSampleId($parentSampleId) {
        $this->parentSampleId = $parentSampleId;
    }
    public function get_virtualCenterId(){
        return $this->virtualCenterId;
    }
    public function set_virtualCenterId($virtualCenterId) {
        $this->virtualCenterId = $virtualCenterId;
    }
    public function get_observationDate(){
        return $this->observationDate;
    }
    public function set_observationDate($observationDate) {
        $this->observationDate = $observationDate;
    }
    public function get_memory(){
        return $this->memory;
    }
    public function set_memory($memory) {
        $this->memory = $memory;
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
        if (!is_null($this->virtualCpuCount)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'virtualCpuCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'virtualCpuCount=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->virtualCpuCount, $input_name='virtualCpuCount')));
        }
        if (!is_null($this->managedObjectReference)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'managedObjectReference', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'managedObjectReference=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->managedObjectReference, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='managedObjectReference')));
        }
        if (!is_null($this->parentSampleId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'parentSampleId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'parentSampleId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->parentSampleId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='parentSampleId')));
        }
        if (!is_null($this->virtualCenterId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'virtualCenterId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'virtualCenterId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->virtualCenterId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='virtualCenterId')));
        }
        if (!is_null($this->observationDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'observationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'observationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->observationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='observationDate')));
        }
        if (!is_null($this->memory)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memory', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memory=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memory, $input_name='memory')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        return $out;
    }
    protected function hasContent() {
        if (
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
        $ndvirtualCpuCount = $attrs->getNamedItem('virtualCpuCount');
        if (!is_null($ndvirtualCpuCount)) {
            $this->virtualCpuCount = sprintf('%d', $ndvirtualCpuCount->value);
            if (isset($ndvirtualCpuCount->prefix)) {
                $this->namespace['virtualCpuCount'] = $ndvirtualCpuCount->prefix;
                $nsUri = $ndvirtualCpuCount->lookupNamespaceURI($ndvirtualCpuCount->prefix);
            }
            $node->removeAttributeNS($nsUri, 'virtualCpuCount');
        } else {
            $this->virtualCpuCount = null;
        }
        $ndmanagedObjectReference = $attrs->getNamedItem('managedObjectReference');
        if (!is_null($ndmanagedObjectReference)) {
            $this->managedObjectReference = $ndmanagedObjectReference->value;
            if (isset($ndmanagedObjectReference->prefix)) {
                $this->namespace['managedObjectReference'] = $ndmanagedObjectReference->prefix;
                $nsUri = $ndmanagedObjectReference->lookupNamespaceURI($ndmanagedObjectReference->prefix);
            }
            $node->removeAttributeNS($nsUri, 'managedObjectReference');
        } else {
            $this->managedObjectReference = null;
        }
        $ndparentSampleId = $attrs->getNamedItem('parentSampleId');
        if (!is_null($ndparentSampleId)) {
            $this->parentSampleId = $ndparentSampleId->value;
            if (isset($ndparentSampleId->prefix)) {
                $this->namespace['parentSampleId'] = $ndparentSampleId->prefix;
                $nsUri = $ndparentSampleId->lookupNamespaceURI($ndparentSampleId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'parentSampleId');
        } else {
            $this->parentSampleId = null;
        }
        $ndvirtualCenterId = $attrs->getNamedItem('virtualCenterId');
        if (!is_null($ndvirtualCenterId)) {
            $this->virtualCenterId = $ndvirtualCenterId->value;
            if (isset($ndvirtualCenterId->prefix)) {
                $this->namespace['virtualCenterId'] = $ndvirtualCenterId->prefix;
                $nsUri = $ndvirtualCenterId->lookupNamespaceURI($ndvirtualCenterId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'virtualCenterId');
        } else {
            $this->virtualCenterId = null;
        }
        $ndobservationDate = $attrs->getNamedItem('observationDate');
        if (!is_null($ndobservationDate)) {
            $this->observationDate = $ndobservationDate->value;
            if (isset($ndobservationDate->prefix)) {
                $this->namespace['observationDate'] = $ndobservationDate->prefix;
                $nsUri = $ndobservationDate->lookupNamespaceURI($ndobservationDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'observationDate');
        } else {
            $this->observationDate = null;
        }
        $ndmemory = $attrs->getNamedItem('memory');
        if (!is_null($ndmemory)) {
            $this->memory = sprintf('%d', $ndmemory->value);
            if (isset($ndmemory->prefix)) {
                $this->namespace['memory'] = $ndmemory->prefix;
                $nsUri = $ndmemory->lookupNamespaceURI($ndmemory->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memory');
        } else {
            $this->memory = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}