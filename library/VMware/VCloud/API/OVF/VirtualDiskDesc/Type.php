<?php
class VMware_VCloud_API_OVF_VirtualDiskDesc_Type {
    protected $capacityAllocationUnits = null;
    protected $capacity = null;
    protected $format = null;
    protected $parentRef = null;
    protected $fileRef = null;
    protected $populatedSize = null;
    protected $diskId = null;
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param string $capacityAllocationUnits - [optional] an attribute, default 'byte'
    * @param string $capacity - [required] an attribute, 
    * @param string $format - [optional] an attribute, 
    * @param string $parentRef - [optional] an attribute, 
    * @param string $fileRef - [optional] an attribute, 
    * @param long $populatedSize - [optional] an attribute, 
    * @param string $diskId - [required] an attribute, 
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($capacityAllocationUnits='byte', $capacity=null, $format=null, $parentRef=null, $fileRef=null, $populatedSize=null, $diskId=null, $Any=null) {
        $this->capacityAllocationUnits = $capacityAllocationUnits;
        $this->capacity = $capacity;
        $this->format = $format;
        $this->parentRef = $parentRef;
        $this->fileRef = $fileRef;
        $this->populatedSize = $populatedSize;
        $this->diskId = $diskId;
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->anyAttributes = array();
        $this->tagName = 'Disk';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
    public function get_capacityAllocationUnits(){
        return $this->capacityAllocationUnits;
    }
    public function set_capacityAllocationUnits($capacityAllocationUnits) {
        $this->capacityAllocationUnits = $capacityAllocationUnits;
    }
    public function get_capacity(){
        return $this->capacity;
    }
    public function set_capacity($capacity) {
        $this->capacity = $capacity;
    }
    public function get_format(){
        return $this->format;
    }
    public function set_format($format) {
        $this->format = $format;
    }
    public function get_parentRef(){
        return $this->parentRef;
    }
    public function set_parentRef($parentRef) {
        $this->parentRef = $parentRef;
    }
    public function get_fileRef(){
        return $this->fileRef;
    }
    public function set_fileRef($fileRef) {
        $this->fileRef = $fileRef;
    }
    public function get_populatedSize(){
        return $this->populatedSize;
    }
    public function set_populatedSize($populatedSize) {
        $this->populatedSize = $populatedSize;
    }
    public function get_diskId(){
        return $this->diskId;
    }
    public function set_diskId($diskId) {
        $this->diskId = $diskId;
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
        if (!is_null($this->capacityAllocationUnits)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'capacityAllocationUnits', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'capacityAllocationUnits=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->capacityAllocationUnits, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='capacityAllocationUnits')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'capacity', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'capacity=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->capacity, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='capacity')));
        if (!is_null($this->format)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'format', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'format=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->format, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='format')));
        }
        if (!is_null($this->parentRef)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'parentRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'parentRef=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->parentRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='parentRef')));
        }
        if (!is_null($this->fileRef)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'fileRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'fileRef=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->fileRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='fileRef')));
        }
        if (!is_null($this->populatedSize)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'populatedSize', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'populatedSize=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->populatedSize, $input_name='populatedSize')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'diskId', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'diskId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->diskId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='diskId')));
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
        $ndcapacityAllocationUnits = $attrs->getNamedItem('capacityAllocationUnits');
        if (!is_null($ndcapacityAllocationUnits)) {
            $this->capacityAllocationUnits = $ndcapacityAllocationUnits->value;
            if (isset($ndcapacityAllocationUnits->prefix)) {
                $this->namespace['capacityAllocationUnits'] = $ndcapacityAllocationUnits->prefix;
                $nsUri = $ndcapacityAllocationUnits->lookupNamespaceURI($ndcapacityAllocationUnits->prefix);
            }
            $node->removeAttributeNS($nsUri, 'capacityAllocationUnits');
        } else {
            $this->capacityAllocationUnits = null;
        }
        $ndcapacity = $attrs->getNamedItem('capacity');
        if (!is_null($ndcapacity)) {
            $this->capacity = $ndcapacity->value;
            if (isset($ndcapacity->prefix)) {
                $this->namespace['capacity'] = $ndcapacity->prefix;
                $nsUri = $ndcapacity->lookupNamespaceURI($ndcapacity->prefix);
            }
            $node->removeAttributeNS($nsUri, 'capacity');
        } else {
            $this->capacity = null;
        }
        $ndformat = $attrs->getNamedItem('format');
        if (!is_null($ndformat)) {
            $this->format = $ndformat->value;
            if (isset($ndformat->prefix)) {
                $this->namespace['format'] = $ndformat->prefix;
                $nsUri = $ndformat->lookupNamespaceURI($ndformat->prefix);
            }
            $node->removeAttributeNS($nsUri, 'format');
        } else {
            $this->format = null;
        }
        $ndparentRef = $attrs->getNamedItem('parentRef');
        if (!is_null($ndparentRef)) {
            $this->parentRef = $ndparentRef->value;
            if (isset($ndparentRef->prefix)) {
                $this->namespace['parentRef'] = $ndparentRef->prefix;
                $nsUri = $ndparentRef->lookupNamespaceURI($ndparentRef->prefix);
            }
            $node->removeAttributeNS($nsUri, 'parentRef');
        } else {
            $this->parentRef = null;
        }
        $ndfileRef = $attrs->getNamedItem('fileRef');
        if (!is_null($ndfileRef)) {
            $this->fileRef = $ndfileRef->value;
            if (isset($ndfileRef->prefix)) {
                $this->namespace['fileRef'] = $ndfileRef->prefix;
                $nsUri = $ndfileRef->lookupNamespaceURI($ndfileRef->prefix);
            }
            $node->removeAttributeNS($nsUri, 'fileRef');
        } else {
            $this->fileRef = null;
        }
        $ndpopulatedSize = $attrs->getNamedItem('populatedSize');
        if (!is_null($ndpopulatedSize)) {
            $this->populatedSize = sprintf('%d', $ndpopulatedSize->value);
            if (isset($ndpopulatedSize->prefix)) {
                $this->namespace['populatedSize'] = $ndpopulatedSize->prefix;
                $nsUri = $ndpopulatedSize->lookupNamespaceURI($ndpopulatedSize->prefix);
            }
            $node->removeAttributeNS($nsUri, 'populatedSize');
        } else {
            $this->populatedSize = null;
        }
        $nddiskId = $attrs->getNamedItem('diskId');
        if (!is_null($nddiskId)) {
            $this->diskId = $nddiskId->value;
            if (isset($nddiskId->prefix)) {
                $this->namespace['diskId'] = $nddiskId->prefix;
                $nsUri = $nddiskId->lookupNamespaceURI($nddiskId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'diskId');
        } else {
            $this->diskId = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "capacityAllocationUnits"  && $localName != "capacity"  && $localName != "format"  && $localName != "parentRef"  && $localName != "fileRef"  && $localName != "populatedSize"  && $localName != "diskId" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE) {
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