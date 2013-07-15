<?php
class VMware_VCloud_API_QueryResultDatastoreRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $vc = null;
    protected $storageUsedMB = null;
    protected $name = null;
    protected $isEnabled = null;
    protected $requestedStorageMB = null;
    protected $storageMB = null;
    protected $moref = null;
    protected $vcName = null;
    protected $datastoreType = null;
    protected $numberOfProviderVdcs = null;
    protected $provisionedStorageMB = null;
    protected $isDeleted = null;
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
    * @param string $vc - [optional] an attribute, 
    * @param long $storageUsedMB - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param long $requestedStorageMB - [optional] an attribute, 
    * @param long $storageMB - [optional] an attribute, 
    * @param string $moref - [optional] an attribute, 
    * @param string $vcName - [optional] an attribute, 
    * @param string $datastoreType - [optional] an attribute, 
    * @param int $numberOfProviderVdcs - [optional] an attribute, 
    * @param long $provisionedStorageMB - [optional] an attribute, 
    * @param boolean $isDeleted - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $vc=null, $storageUsedMB=null, $name=null, $isEnabled=null, $requestedStorageMB=null, $storageMB=null, $moref=null, $vcName=null, $datastoreType=null, $numberOfProviderVdcs=null, $provisionedStorageMB=null, $isDeleted=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->vc = $vc;
        $this->storageUsedMB = $storageUsedMB;
        $this->name = $name;
        $this->isEnabled = $isEnabled;
        $this->requestedStorageMB = $requestedStorageMB;
        $this->storageMB = $storageMB;
        $this->moref = $moref;
        $this->vcName = $vcName;
        $this->datastoreType = $datastoreType;
        $this->numberOfProviderVdcs = $numberOfProviderVdcs;
        $this->provisionedStorageMB = $provisionedStorageMB;
        $this->isDeleted = $isDeleted;
        $this->tagName = 'DatastoreRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_vc(){
        return $this->vc;
    }
    public function set_vc($vc) {
        $this->vc = $vc;
    }
    public function get_storageUsedMB(){
        return $this->storageUsedMB;
    }
    public function set_storageUsedMB($storageUsedMB) {
        $this->storageUsedMB = $storageUsedMB;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_requestedStorageMB(){
        return $this->requestedStorageMB;
    }
    public function set_requestedStorageMB($requestedStorageMB) {
        $this->requestedStorageMB = $requestedStorageMB;
    }
    public function get_storageMB(){
        return $this->storageMB;
    }
    public function set_storageMB($storageMB) {
        $this->storageMB = $storageMB;
    }
    public function get_moref(){
        return $this->moref;
    }
    public function set_moref($moref) {
        $this->moref = $moref;
    }
    public function get_vcName(){
        return $this->vcName;
    }
    public function set_vcName($vcName) {
        $this->vcName = $vcName;
    }
    public function get_datastoreType(){
        return $this->datastoreType;
    }
    public function set_datastoreType($datastoreType) {
        $this->datastoreType = $datastoreType;
    }
    public function get_numberOfProviderVdcs(){
        return $this->numberOfProviderVdcs;
    }
    public function set_numberOfProviderVdcs($numberOfProviderVdcs) {
        $this->numberOfProviderVdcs = $numberOfProviderVdcs;
    }
    public function get_provisionedStorageMB(){
        return $this->provisionedStorageMB;
    }
    public function set_provisionedStorageMB($provisionedStorageMB) {
        $this->provisionedStorageMB = $provisionedStorageMB;
    }
    public function get_isDeleted(){
        return $this->isDeleted;
    }
    public function set_isDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
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
        if (!is_null($this->vc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vc')));
        }
        if (!is_null($this->storageUsedMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageUsedMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageUsedMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageUsedMB, $input_name='storageUsedMB')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->requestedStorageMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'requestedStorageMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'requestedStorageMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->requestedStorageMB, $input_name='requestedStorageMB')));
        }
        if (!is_null($this->storageMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageMB, $input_name='storageMB')));
        }
        if (!is_null($this->moref)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'moref', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'moref=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->moref, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='moref')));
        }
        if (!is_null($this->vcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vcName')));
        }
        if (!is_null($this->datastoreType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'datastoreType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'datastoreType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->datastoreType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='datastoreType')));
        }
        if (!is_null($this->numberOfProviderVdcs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfProviderVdcs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfProviderVdcs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfProviderVdcs, $input_name='numberOfProviderVdcs')));
        }
        if (!is_null($this->provisionedStorageMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'provisionedStorageMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'provisionedStorageMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->provisionedStorageMB, $input_name='provisionedStorageMB')));
        }
        if (!is_null($this->isDeleted)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDeleted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDeleted=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDeleted, $input_name='isDeleted')));
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
        $ndvc = $attrs->getNamedItem('vc');
        if (!is_null($ndvc)) {
            $this->vc = $ndvc->value;
            if (isset($ndvc->prefix)) {
                $this->namespace['vc'] = $ndvc->prefix;
                $nsUri = $ndvc->lookupNamespaceURI($ndvc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vc');
        } else {
            $this->vc = null;
        }
        $ndstorageUsedMB = $attrs->getNamedItem('storageUsedMB');
        if (!is_null($ndstorageUsedMB)) {
            $this->storageUsedMB = sprintf('%d', $ndstorageUsedMB->value);
            if (isset($ndstorageUsedMB->prefix)) {
                $this->namespace['storageUsedMB'] = $ndstorageUsedMB->prefix;
                $nsUri = $ndstorageUsedMB->lookupNamespaceURI($ndstorageUsedMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageUsedMB');
        } else {
            $this->storageUsedMB = null;
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
        $ndisEnabled = $attrs->getNamedItem('isEnabled');
        if (!is_null($ndisEnabled)) {
            $this->isEnabled = VMware_VCloud_API_Helper::get_boolean($ndisEnabled->value);
            if (isset($ndisEnabled->prefix)) {
                $this->namespace['isEnabled'] = $ndisEnabled->prefix;
                $nsUri = $ndisEnabled->lookupNamespaceURI($ndisEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isEnabled');
        } else {
            $this->isEnabled = null;
        }
        $ndrequestedStorageMB = $attrs->getNamedItem('requestedStorageMB');
        if (!is_null($ndrequestedStorageMB)) {
            $this->requestedStorageMB = sprintf('%d', $ndrequestedStorageMB->value);
            if (isset($ndrequestedStorageMB->prefix)) {
                $this->namespace['requestedStorageMB'] = $ndrequestedStorageMB->prefix;
                $nsUri = $ndrequestedStorageMB->lookupNamespaceURI($ndrequestedStorageMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'requestedStorageMB');
        } else {
            $this->requestedStorageMB = null;
        }
        $ndstorageMB = $attrs->getNamedItem('storageMB');
        if (!is_null($ndstorageMB)) {
            $this->storageMB = sprintf('%d', $ndstorageMB->value);
            if (isset($ndstorageMB->prefix)) {
                $this->namespace['storageMB'] = $ndstorageMB->prefix;
                $nsUri = $ndstorageMB->lookupNamespaceURI($ndstorageMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageMB');
        } else {
            $this->storageMB = null;
        }
        $ndmoref = $attrs->getNamedItem('moref');
        if (!is_null($ndmoref)) {
            $this->moref = $ndmoref->value;
            if (isset($ndmoref->prefix)) {
                $this->namespace['moref'] = $ndmoref->prefix;
                $nsUri = $ndmoref->lookupNamespaceURI($ndmoref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'moref');
        } else {
            $this->moref = null;
        }
        $ndvcName = $attrs->getNamedItem('vcName');
        if (!is_null($ndvcName)) {
            $this->vcName = $ndvcName->value;
            if (isset($ndvcName->prefix)) {
                $this->namespace['vcName'] = $ndvcName->prefix;
                $nsUri = $ndvcName->lookupNamespaceURI($ndvcName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vcName');
        } else {
            $this->vcName = null;
        }
        $nddatastoreType = $attrs->getNamedItem('datastoreType');
        if (!is_null($nddatastoreType)) {
            $this->datastoreType = $nddatastoreType->value;
            if (isset($nddatastoreType->prefix)) {
                $this->namespace['datastoreType'] = $nddatastoreType->prefix;
                $nsUri = $nddatastoreType->lookupNamespaceURI($nddatastoreType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'datastoreType');
        } else {
            $this->datastoreType = null;
        }
        $ndnumberOfProviderVdcs = $attrs->getNamedItem('numberOfProviderVdcs');
        if (!is_null($ndnumberOfProviderVdcs)) {
            $this->numberOfProviderVdcs = sprintf('%d', $ndnumberOfProviderVdcs->value);
            if (isset($ndnumberOfProviderVdcs->prefix)) {
                $this->namespace['numberOfProviderVdcs'] = $ndnumberOfProviderVdcs->prefix;
                $nsUri = $ndnumberOfProviderVdcs->lookupNamespaceURI($ndnumberOfProviderVdcs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfProviderVdcs');
        } else {
            $this->numberOfProviderVdcs = null;
        }
        $ndprovisionedStorageMB = $attrs->getNamedItem('provisionedStorageMB');
        if (!is_null($ndprovisionedStorageMB)) {
            $this->provisionedStorageMB = sprintf('%d', $ndprovisionedStorageMB->value);
            if (isset($ndprovisionedStorageMB->prefix)) {
                $this->namespace['provisionedStorageMB'] = $ndprovisionedStorageMB->prefix;
                $nsUri = $ndprovisionedStorageMB->lookupNamespaceURI($ndprovisionedStorageMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'provisionedStorageMB');
        } else {
            $this->provisionedStorageMB = null;
        }
        $ndisDeleted = $attrs->getNamedItem('isDeleted');
        if (!is_null($ndisDeleted)) {
            $this->isDeleted = VMware_VCloud_API_Helper::get_boolean($ndisDeleted->value);
            if (isset($ndisDeleted->prefix)) {
                $this->namespace['isDeleted'] = $ndisDeleted->prefix;
                $nsUri = $ndisDeleted->lookupNamespaceURI($ndisDeleted->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isDeleted');
        } else {
            $this->isDeleted = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}