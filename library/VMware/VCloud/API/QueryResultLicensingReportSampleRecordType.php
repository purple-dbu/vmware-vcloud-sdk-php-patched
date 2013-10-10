<?php
class VMware_VCloud_API_QueryResultLicensingReportSampleRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $virtualProcessorCount = null;
    protected $physicalSocketCount = null;
    protected $totalPhysicalMemory = null;
    protected $publishingToRemoteSites = null;
    protected $vmCount = null;
    protected $sampleId = null;
    protected $physicalMemoryUsed = null;
    protected $parentReportId = null;
    protected $observationDate = null;
    protected $subscribingToRemoteSites = null;
    protected $allocatedVirtualMemory = null;
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
    * @param long $virtualProcessorCount - [optional] an attribute, 
    * @param int $physicalSocketCount - [optional] an attribute, 
    * @param long $totalPhysicalMemory - [optional] an attribute, 
    * @param boolean $publishingToRemoteSites - [optional] an attribute, 
    * @param long $vmCount - [optional] an attribute, 
    * @param string $sampleId - [optional] an attribute, 
    * @param long $physicalMemoryUsed - [optional] an attribute, 
    * @param string $parentReportId - [optional] an attribute, 
    * @param dateTime $observationDate - [optional] an attribute, 
    * @param boolean $subscribingToRemoteSites - [optional] an attribute, 
    * @param long $allocatedVirtualMemory - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $virtualProcessorCount=null, $physicalSocketCount=null, $totalPhysicalMemory=null, $publishingToRemoteSites=null, $vmCount=null, $sampleId=null, $physicalMemoryUsed=null, $parentReportId=null, $observationDate=null, $subscribingToRemoteSites=null, $allocatedVirtualMemory=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->virtualProcessorCount = $virtualProcessorCount;
        $this->physicalSocketCount = $physicalSocketCount;
        $this->totalPhysicalMemory = $totalPhysicalMemory;
        $this->publishingToRemoteSites = $publishingToRemoteSites;
        $this->vmCount = $vmCount;
        $this->sampleId = $sampleId;
        $this->physicalMemoryUsed = $physicalMemoryUsed;
        $this->parentReportId = $parentReportId;
        $this->observationDate = $observationDate;
        $this->subscribingToRemoteSites = $subscribingToRemoteSites;
        $this->allocatedVirtualMemory = $allocatedVirtualMemory;
        $this->tagName = 'LicensingReportSampleRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_virtualProcessorCount(){
        return $this->virtualProcessorCount;
    }
    public function set_virtualProcessorCount($virtualProcessorCount) {
        $this->virtualProcessorCount = $virtualProcessorCount;
    }
    public function get_physicalSocketCount(){
        return $this->physicalSocketCount;
    }
    public function set_physicalSocketCount($physicalSocketCount) {
        $this->physicalSocketCount = $physicalSocketCount;
    }
    public function get_totalPhysicalMemory(){
        return $this->totalPhysicalMemory;
    }
    public function set_totalPhysicalMemory($totalPhysicalMemory) {
        $this->totalPhysicalMemory = $totalPhysicalMemory;
    }
    public function get_publishingToRemoteSites(){
        return $this->publishingToRemoteSites;
    }
    public function set_publishingToRemoteSites($publishingToRemoteSites) {
        $this->publishingToRemoteSites = $publishingToRemoteSites;
    }
    public function get_vmCount(){
        return $this->vmCount;
    }
    public function set_vmCount($vmCount) {
        $this->vmCount = $vmCount;
    }
    public function get_sampleId(){
        return $this->sampleId;
    }
    public function set_sampleId($sampleId) {
        $this->sampleId = $sampleId;
    }
    public function get_physicalMemoryUsed(){
        return $this->physicalMemoryUsed;
    }
    public function set_physicalMemoryUsed($physicalMemoryUsed) {
        $this->physicalMemoryUsed = $physicalMemoryUsed;
    }
    public function get_parentReportId(){
        return $this->parentReportId;
    }
    public function set_parentReportId($parentReportId) {
        $this->parentReportId = $parentReportId;
    }
    public function get_observationDate(){
        return $this->observationDate;
    }
    public function set_observationDate($observationDate) {
        $this->observationDate = $observationDate;
    }
    public function get_subscribingToRemoteSites(){
        return $this->subscribingToRemoteSites;
    }
    public function set_subscribingToRemoteSites($subscribingToRemoteSites) {
        $this->subscribingToRemoteSites = $subscribingToRemoteSites;
    }
    public function get_allocatedVirtualMemory(){
        return $this->allocatedVirtualMemory;
    }
    public function set_allocatedVirtualMemory($allocatedVirtualMemory) {
        $this->allocatedVirtualMemory = $allocatedVirtualMemory;
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
        if (!is_null($this->virtualProcessorCount)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'virtualProcessorCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'virtualProcessorCount=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->virtualProcessorCount, $input_name='virtualProcessorCount')));
        }
        if (!is_null($this->physicalSocketCount)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'physicalSocketCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'physicalSocketCount=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->physicalSocketCount, $input_name='physicalSocketCount')));
        }
        if (!is_null($this->totalPhysicalMemory)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'totalPhysicalMemory', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'totalPhysicalMemory=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->totalPhysicalMemory, $input_name='totalPhysicalMemory')));
        }
        if (!is_null($this->publishingToRemoteSites)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'publishingToRemoteSites', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'publishingToRemoteSites=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->publishingToRemoteSites, $input_name='publishingToRemoteSites')));
        }
        if (!is_null($this->vmCount)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vmCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vmCount=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->vmCount, $input_name='vmCount')));
        }
        if (!is_null($this->sampleId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'sampleId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'sampleId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->sampleId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='sampleId')));
        }
        if (!is_null($this->physicalMemoryUsed)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'physicalMemoryUsed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'physicalMemoryUsed=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->physicalMemoryUsed, $input_name='physicalMemoryUsed')));
        }
        if (!is_null($this->parentReportId)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'parentReportId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'parentReportId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->parentReportId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='parentReportId')));
        }
        if (!is_null($this->observationDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'observationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'observationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->observationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='observationDate')));
        }
        if (!is_null($this->subscribingToRemoteSites)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'subscribingToRemoteSites', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'subscribingToRemoteSites=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->subscribingToRemoteSites, $input_name='subscribingToRemoteSites')));
        }
        if (!is_null($this->allocatedVirtualMemory)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'allocatedVirtualMemory', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'allocatedVirtualMemory=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->allocatedVirtualMemory, $input_name='allocatedVirtualMemory')));
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
        $ndvirtualProcessorCount = $attrs->getNamedItem('virtualProcessorCount');
        if (!is_null($ndvirtualProcessorCount)) {
            $this->virtualProcessorCount = sprintf('%d', $ndvirtualProcessorCount->value);
            if (isset($ndvirtualProcessorCount->prefix)) {
                $this->namespace['virtualProcessorCount'] = $ndvirtualProcessorCount->prefix;
                $nsUri = $ndvirtualProcessorCount->lookupNamespaceURI($ndvirtualProcessorCount->prefix);
            }
            $node->removeAttributeNS($nsUri, 'virtualProcessorCount');
        } else {
            $this->virtualProcessorCount = null;
        }
        $ndphysicalSocketCount = $attrs->getNamedItem('physicalSocketCount');
        if (!is_null($ndphysicalSocketCount)) {
            $this->physicalSocketCount = sprintf('%d', $ndphysicalSocketCount->value);
            if (isset($ndphysicalSocketCount->prefix)) {
                $this->namespace['physicalSocketCount'] = $ndphysicalSocketCount->prefix;
                $nsUri = $ndphysicalSocketCount->lookupNamespaceURI($ndphysicalSocketCount->prefix);
            }
            $node->removeAttributeNS($nsUri, 'physicalSocketCount');
        } else {
            $this->physicalSocketCount = null;
        }
        $ndtotalPhysicalMemory = $attrs->getNamedItem('totalPhysicalMemory');
        if (!is_null($ndtotalPhysicalMemory)) {
            $this->totalPhysicalMemory = sprintf('%d', $ndtotalPhysicalMemory->value);
            if (isset($ndtotalPhysicalMemory->prefix)) {
                $this->namespace['totalPhysicalMemory'] = $ndtotalPhysicalMemory->prefix;
                $nsUri = $ndtotalPhysicalMemory->lookupNamespaceURI($ndtotalPhysicalMemory->prefix);
            }
            $node->removeAttributeNS($nsUri, 'totalPhysicalMemory');
        } else {
            $this->totalPhysicalMemory = null;
        }
        $ndpublishingToRemoteSites = $attrs->getNamedItem('publishingToRemoteSites');
        if (!is_null($ndpublishingToRemoteSites)) {
            $this->publishingToRemoteSites = VMware_VCloud_API_Helper::get_boolean($ndpublishingToRemoteSites->value);
            if (isset($ndpublishingToRemoteSites->prefix)) {
                $this->namespace['publishingToRemoteSites'] = $ndpublishingToRemoteSites->prefix;
                $nsUri = $ndpublishingToRemoteSites->lookupNamespaceURI($ndpublishingToRemoteSites->prefix);
            }
            $node->removeAttributeNS($nsUri, 'publishingToRemoteSites');
        } else {
            $this->publishingToRemoteSites = null;
        }
        $ndvmCount = $attrs->getNamedItem('vmCount');
        if (!is_null($ndvmCount)) {
            $this->vmCount = sprintf('%d', $ndvmCount->value);
            if (isset($ndvmCount->prefix)) {
                $this->namespace['vmCount'] = $ndvmCount->prefix;
                $nsUri = $ndvmCount->lookupNamespaceURI($ndvmCount->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vmCount');
        } else {
            $this->vmCount = null;
        }
        $ndsampleId = $attrs->getNamedItem('sampleId');
        if (!is_null($ndsampleId)) {
            $this->sampleId = $ndsampleId->value;
            if (isset($ndsampleId->prefix)) {
                $this->namespace['sampleId'] = $ndsampleId->prefix;
                $nsUri = $ndsampleId->lookupNamespaceURI($ndsampleId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'sampleId');
        } else {
            $this->sampleId = null;
        }
        $ndphysicalMemoryUsed = $attrs->getNamedItem('physicalMemoryUsed');
        if (!is_null($ndphysicalMemoryUsed)) {
            $this->physicalMemoryUsed = sprintf('%d', $ndphysicalMemoryUsed->value);
            if (isset($ndphysicalMemoryUsed->prefix)) {
                $this->namespace['physicalMemoryUsed'] = $ndphysicalMemoryUsed->prefix;
                $nsUri = $ndphysicalMemoryUsed->lookupNamespaceURI($ndphysicalMemoryUsed->prefix);
            }
            $node->removeAttributeNS($nsUri, 'physicalMemoryUsed');
        } else {
            $this->physicalMemoryUsed = null;
        }
        $ndparentReportId = $attrs->getNamedItem('parentReportId');
        if (!is_null($ndparentReportId)) {
            $this->parentReportId = $ndparentReportId->value;
            if (isset($ndparentReportId->prefix)) {
                $this->namespace['parentReportId'] = $ndparentReportId->prefix;
                $nsUri = $ndparentReportId->lookupNamespaceURI($ndparentReportId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'parentReportId');
        } else {
            $this->parentReportId = null;
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
        $ndsubscribingToRemoteSites = $attrs->getNamedItem('subscribingToRemoteSites');
        if (!is_null($ndsubscribingToRemoteSites)) {
            $this->subscribingToRemoteSites = VMware_VCloud_API_Helper::get_boolean($ndsubscribingToRemoteSites->value);
            if (isset($ndsubscribingToRemoteSites->prefix)) {
                $this->namespace['subscribingToRemoteSites'] = $ndsubscribingToRemoteSites->prefix;
                $nsUri = $ndsubscribingToRemoteSites->lookupNamespaceURI($ndsubscribingToRemoteSites->prefix);
            }
            $node->removeAttributeNS($nsUri, 'subscribingToRemoteSites');
        } else {
            $this->subscribingToRemoteSites = null;
        }
        $ndallocatedVirtualMemory = $attrs->getNamedItem('allocatedVirtualMemory');
        if (!is_null($ndallocatedVirtualMemory)) {
            $this->allocatedVirtualMemory = sprintf('%d', $ndallocatedVirtualMemory->value);
            if (isset($ndallocatedVirtualMemory->prefix)) {
                $this->namespace['allocatedVirtualMemory'] = $ndallocatedVirtualMemory->prefix;
                $nsUri = $ndallocatedVirtualMemory->lookupNamespaceURI($ndallocatedVirtualMemory->prefix);
            }
            $node->removeAttributeNS($nsUri, 'allocatedVirtualMemory');
        } else {
            $this->allocatedVirtualMemory = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}