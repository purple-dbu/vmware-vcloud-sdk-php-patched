<?php
class VMware_VCloud_API_QueryResultConditionRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $severity = null;
    protected $object = null;
    protected $occurenceDate = null;
    protected $summary = null;
    protected $details = null;
    protected $objectType = null;
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
    * @param string $severity - [optional] an attribute, 
    * @param string $object - [optional] an attribute, 
    * @param dateTime $occurenceDate - [optional] an attribute, 
    * @param string $summary - [optional] an attribute, 
    * @param string $details - [optional] an attribute, 
    * @param string $objectType - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $severity=null, $object=null, $occurenceDate=null, $summary=null, $details=null, $objectType=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->severity = $severity;
        $this->object = $object;
        $this->occurenceDate = $occurenceDate;
        $this->summary = $summary;
        $this->details = $details;
        $this->objectType = $objectType;
        $this->tagName = 'ConditionRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_severity(){
        return $this->severity;
    }
    public function set_severity($severity) {
        $this->severity = $severity;
    }
    public function get_object(){
        return $this->object;
    }
    public function set_object($object) {
        $this->object = $object;
    }
    public function get_occurenceDate(){
        return $this->occurenceDate;
    }
    public function set_occurenceDate($occurenceDate) {
        $this->occurenceDate = $occurenceDate;
    }
    public function get_summary(){
        return $this->summary;
    }
    public function set_summary($summary) {
        $this->summary = $summary;
    }
    public function get_details(){
        return $this->details;
    }
    public function set_details($details) {
        $this->details = $details;
    }
    public function get_objectType(){
        return $this->objectType;
    }
    public function set_objectType($objectType) {
        $this->objectType = $objectType;
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
        if (!is_null($this->severity)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'severity', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'severity=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->severity, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='severity')));
        }
        if (!is_null($this->object)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'object', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'object=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->object, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='object')));
        }
        if (!is_null($this->occurenceDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'occurenceDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'occurenceDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->occurenceDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='occurenceDate')));
        }
        if (!is_null($this->summary)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'summary', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'summary=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->summary, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='summary')));
        }
        if (!is_null($this->details)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'details', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'details=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->details, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='details')));
        }
        if (!is_null($this->objectType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'objectType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'objectType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->objectType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='objectType')));
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
        $ndseverity = $attrs->getNamedItem('severity');
        if (!is_null($ndseverity)) {
            $this->severity = $ndseverity->value;
            if (isset($ndseverity->prefix)) {
                $this->namespace['severity'] = $ndseverity->prefix;
                $nsUri = $ndseverity->lookupNamespaceURI($ndseverity->prefix);
            }
            $node->removeAttributeNS($nsUri, 'severity');
        } else {
            $this->severity = null;
        }
        $ndobject = $attrs->getNamedItem('object');
        if (!is_null($ndobject)) {
            $this->object = $ndobject->value;
            if (isset($ndobject->prefix)) {
                $this->namespace['object'] = $ndobject->prefix;
                $nsUri = $ndobject->lookupNamespaceURI($ndobject->prefix);
            }
            $node->removeAttributeNS($nsUri, 'object');
        } else {
            $this->object = null;
        }
        $ndoccurenceDate = $attrs->getNamedItem('occurenceDate');
        if (!is_null($ndoccurenceDate)) {
            $this->occurenceDate = $ndoccurenceDate->value;
            if (isset($ndoccurenceDate->prefix)) {
                $this->namespace['occurenceDate'] = $ndoccurenceDate->prefix;
                $nsUri = $ndoccurenceDate->lookupNamespaceURI($ndoccurenceDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'occurenceDate');
        } else {
            $this->occurenceDate = null;
        }
        $ndsummary = $attrs->getNamedItem('summary');
        if (!is_null($ndsummary)) {
            $this->summary = $ndsummary->value;
            if (isset($ndsummary->prefix)) {
                $this->namespace['summary'] = $ndsummary->prefix;
                $nsUri = $ndsummary->lookupNamespaceURI($ndsummary->prefix);
            }
            $node->removeAttributeNS($nsUri, 'summary');
        } else {
            $this->summary = null;
        }
        $nddetails = $attrs->getNamedItem('details');
        if (!is_null($nddetails)) {
            $this->details = $nddetails->value;
            if (isset($nddetails->prefix)) {
                $this->namespace['details'] = $nddetails->prefix;
                $nsUri = $nddetails->lookupNamespaceURI($nddetails->prefix);
            }
            $node->removeAttributeNS($nsUri, 'details');
        } else {
            $this->details = null;
        }
        $ndobjectType = $attrs->getNamedItem('objectType');
        if (!is_null($ndobjectType)) {
            $this->objectType = $ndobjectType->value;
            if (isset($ndobjectType->prefix)) {
                $this->namespace['objectType'] = $ndobjectType->prefix;
                $nsUri = $ndobjectType->lookupNamespaceURI($ndobjectType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'objectType');
        } else {
            $this->objectType = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}