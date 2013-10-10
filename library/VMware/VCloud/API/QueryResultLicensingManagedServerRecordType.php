<?php
class VMware_VCloud_API_QueryResultLicensingManagedServerRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $parentSampleId = null;
    protected $name = null;
    protected $managedObjectReference = null;
    protected $socketCount = null;
    protected $virtualCenterId = null;
    protected $observationDate = null;
    protected $memoryUsed = null;
    protected $memoryInstalled = null;
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
    * @param string $parentSampleId - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $managedObjectReference - [optional] an attribute, 
    * @param int $socketCount - [optional] an attribute, 
    * @param string $virtualCenterId - [optional] an attribute, 
    * @param dateTime $observationDate - [optional] an attribute, 
    * @param int $memoryUsed - [optional] an attribute, 
    * @param int $memoryInstalled - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $parentSampleId=null, $name=null, $managedObjectReference=null, $socketCount=null, $virtualCenterId=null, $observationDate=null, $memoryUsed=null, $memoryInstalled=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->parentSampleId = $parentSampleId;
        $this->name = $name;
        $this->managedObjectReference = $managedObjectReference;
        $this->socketCount = $socketCount;
        $this->virtualCenterId = $virtualCenterId;
        $this->observationDate = $observationDate;
        $this->memoryUsed = $memoryUsed;
        $this->memoryInstalled = $memoryInstalled;
        $this->tagName = 'LicensingManagedServerRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_parentSampleId(){
        return $this->parentSampleId;
    }
    public function set_parentSampleId($parentSampleId) {
        $this->parentSampleId = $parentSampleId;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_managedObjectReference(){
        return $this->managedObjectReference;
    }
    public function set_managedObjectReference($managedObjectReference) {
        $this->managedObjectReference = $managedObjectReference;
    }
    public function get_socketCount(){
        return $this->socketCount;
    }
    public function set_socketCount($socketCount) {
        $this->socketCount = $socketCount;
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
    public function get_memoryUsed(){
        return $this->memoryUsed;
    }
    public function set_memoryUsed($memoryUsed) {
        $this->memoryUsed = $memoryUsed;
    }
    public function get_memoryInstalled(){
        return $this->memoryInstalled;
    }
    public function set_memoryInstalled($memoryInstalled) {
        $this->memoryInstalled = $memoryInstalled;
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
        if (!is_null($this->parentSampleId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'parentSampleId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'parentSampleId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->parentSampleId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='parentSampleId')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->managedObjectReference)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'managedObjectReference', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'managedObjectReference=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->managedObjectReference, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='managedObjectReference')));
        }
        if (!is_null($this->socketCount)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'socketCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'socketCount=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->socketCount, $input_name='socketCount')));
        }
        if (!is_null($this->virtualCenterId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'virtualCenterId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'virtualCenterId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->virtualCenterId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='virtualCenterId')));
        }
        if (!is_null($this->observationDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'observationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'observationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->observationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='observationDate')));
        }
        if (!is_null($this->memoryUsed)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryUsed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryUsed=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryUsed, $input_name='memoryUsed')));
        }
        if (!is_null($this->memoryInstalled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryInstalled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryInstalled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryInstalled, $input_name='memoryInstalled')));
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
        $ndname = $attrs->getNamedItem('name');
        if (!is_null($ndname)) {
            $this->name = $ndname->value;
            if (isset($ndname->prefix)) {
                $this->namespace['name'] = $ndname->prefix;
                $nsUri = $ndname->lookupNamespaceURI($ndname->prefix);
            }
            $node->removeAttributeNS($nsUri, 'name');
        } else {
            $this->name = null;
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
        $ndsocketCount = $attrs->getNamedItem('socketCount');
        if (!is_null($ndsocketCount)) {
            $this->socketCount = sprintf('%d', $ndsocketCount->value);
            if (isset($ndsocketCount->prefix)) {
                $this->namespace['socketCount'] = $ndsocketCount->prefix;
                $nsUri = $ndsocketCount->lookupNamespaceURI($ndsocketCount->prefix);
            }
            $node->removeAttributeNS($nsUri, 'socketCount');
        } else {
            $this->socketCount = null;
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
        $ndmemoryUsed = $attrs->getNamedItem('memoryUsed');
        if (!is_null($ndmemoryUsed)) {
            $this->memoryUsed = sprintf('%d', $ndmemoryUsed->value);
            if (isset($ndmemoryUsed->prefix)) {
                $this->namespace['memoryUsed'] = $ndmemoryUsed->prefix;
                $nsUri = $ndmemoryUsed->lookupNamespaceURI($ndmemoryUsed->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryUsed');
        } else {
            $this->memoryUsed = null;
        }
        $ndmemoryInstalled = $attrs->getNamedItem('memoryInstalled');
        if (!is_null($ndmemoryInstalled)) {
            $this->memoryInstalled = sprintf('%d', $ndmemoryInstalled->value);
            if (isset($ndmemoryInstalled->prefix)) {
                $this->namespace['memoryInstalled'] = $ndmemoryInstalled->prefix;
                $nsUri = $ndmemoryInstalled->lookupNamespaceURI($ndmemoryInstalled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryInstalled');
        } else {
            $this->memoryInstalled = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}