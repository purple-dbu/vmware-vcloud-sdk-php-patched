<?php
class VMware_VCloud_API_QueryResultLicensingReportRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $startDate = null;
    protected $endDate = null;
    protected $reportId = null;
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
    * @param dateTime $startDate - [optional] an attribute, 
    * @param dateTime $endDate - [optional] an attribute, 
    * @param string $reportId - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $startDate=null, $endDate=null, $reportId=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->reportId = $reportId;
        $this->tagName = 'LicensingReportRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_startDate(){
        return $this->startDate;
    }
    public function set_startDate($startDate) {
        $this->startDate = $startDate;
    }
    public function get_endDate(){
        return $this->endDate;
    }
    public function set_endDate($endDate) {
        $this->endDate = $endDate;
    }
    public function get_reportId(){
        return $this->reportId;
    }
    public function set_reportId($reportId) {
        $this->reportId = $reportId;
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
        if (!is_null($this->startDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'startDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'startDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->startDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='startDate')));
        }
        if (!is_null($this->endDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'endDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'endDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->endDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='endDate')));
        }
        if (!is_null($this->reportId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'reportId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'reportId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->reportId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='reportId')));
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
        $ndstartDate = $attrs->getNamedItem('startDate');
        if (!is_null($ndstartDate)) {
            $this->startDate = $ndstartDate->value;
            if (isset($ndstartDate->prefix)) {
                $this->namespace['startDate'] = $ndstartDate->prefix;
                $nsUri = $ndstartDate->lookupNamespaceURI($ndstartDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'startDate');
        } else {
            $this->startDate = null;
        }
        $ndendDate = $attrs->getNamedItem('endDate');
        if (!is_null($ndendDate)) {
            $this->endDate = $ndendDate->value;
            if (isset($ndendDate->prefix)) {
                $this->namespace['endDate'] = $ndendDate->prefix;
                $nsUri = $ndendDate->lookupNamespaceURI($ndendDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'endDate');
        } else {
            $this->endDate = null;
        }
        $ndreportId = $attrs->getNamedItem('reportId');
        if (!is_null($ndreportId)) {
            $this->reportId = $ndreportId->value;
            if (isset($ndreportId->prefix)) {
                $this->namespace['reportId'] = $ndreportId->prefix;
                $nsUri = $ndreportId->lookupNamespaceURI($ndreportId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'reportId');
        } else {
            $this->reportId = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}