<?php
class VMware_VCloud_API_Extension_LicensingReportType extends VMware_VCloud_API_ResourceType {
    protected $reportDate = null;
    protected $productSerialNumber = null;
    protected $signature = null;
    protected $Sample = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param dateTime $reportDate - [required] an attribute, 
    * @param string $productSerialNumber - [required] an attribute, 
    * @param string $signature - [optional] an attribute, 
    * @param array $Sample - [optional] an array of VMware_VCloud_API_Extension_LicensingReportSampleType objects
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $reportDate=null, $productSerialNumber=null, $signature=null, $Sample=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->reportDate = $reportDate;
        $this->productSerialNumber = $productSerialNumber;
        $this->signature = $signature;
        if (!is_null($Sample)) {
            $this->Sample = $Sample;
        }
        $this->tagName = 'LicensingReport';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSample() {
        return $this->Sample;
    }
    public function setSample($Sample) { 
        $this->Sample = $Sample;
    }
    public function addSample($value) { array_push($this->Sample, $value); }
    public function get_reportDate(){
        return $this->reportDate;
    }
    public function set_reportDate($reportDate) {
        $this->reportDate = $reportDate;
    }
    public function get_productSerialNumber(){
        return $this->productSerialNumber;
    }
    public function set_productSerialNumber($productSerialNumber) {
        $this->productSerialNumber = $productSerialNumber;
    }
    public function get_signature(){
        return $this->signature;
    }
    public function set_signature($signature) {
        $this->signature = $signature;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'reportDate', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'reportDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->reportDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='reportDate')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'productSerialNumber', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'productSerialNumber=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->productSerialNumber, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='productSerialNumber')));
        if (!is_null($this->signature)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'signature', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'signature=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->signature, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='signature')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (isset($this->Sample)) {
            foreach ($this->Sample as $Sample) {
                $out = $Sample->export('Sample', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Sample) ||
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
        $ndreportDate = $attrs->getNamedItem('reportDate');
        if (!is_null($ndreportDate)) {
            $this->reportDate = $ndreportDate->value;
            if (isset($ndreportDate->prefix)) {
                $this->namespace['reportDate'] = $ndreportDate->prefix;
                $nsUri = $ndreportDate->lookupNamespaceURI($ndreportDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'reportDate');
        } else {
            $this->reportDate = null;
        }
        $ndproductSerialNumber = $attrs->getNamedItem('productSerialNumber');
        if (!is_null($ndproductSerialNumber)) {
            $this->productSerialNumber = $ndproductSerialNumber->value;
            if (isset($ndproductSerialNumber->prefix)) {
                $this->namespace['productSerialNumber'] = $ndproductSerialNumber->prefix;
                $nsUri = $ndproductSerialNumber->lookupNamespaceURI($ndproductSerialNumber->prefix);
            }
            $node->removeAttributeNS($nsUri, 'productSerialNumber');
        } else {
            $this->productSerialNumber = null;
        }
        $ndsignature = $attrs->getNamedItem('signature');
        if (!is_null($ndsignature)) {
            $this->signature = $ndsignature->value;
            if (isset($ndsignature->prefix)) {
                $this->namespace['signature'] = $ndsignature->prefix;
                $nsUri = $ndsignature->lookupNamespaceURI($ndsignature->prefix);
            }
            $node->removeAttributeNS($nsUri, 'signature');
        } else {
            $this->signature = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Sample') {
            $obj = new VMware_VCloud_API_Extension_LicensingReportSampleType();
            $obj->build($child);
            $obj->set_tagName('Sample');
            array_push($this->Sample, $obj);
            if (!empty($namespace)) {
                $this->namespace['Sample'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}