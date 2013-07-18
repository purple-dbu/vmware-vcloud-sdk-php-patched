<?php
class VMware_VCloud_API_QueryResultProviderVdcStorageProfileRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $vc = null;
    protected $storageUsedMB = null;
    protected $name = null;
    protected $providerVdc = null;
    protected $storageTotalMB = null;
    protected $isEnabled = null;
    protected $storageProvisionedMB = null;
    protected $numberOfConditions = null;
    protected $storageRequestedMB = null;
    protected $storageProfileMoref = null;
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
    * @param string $providerVdc - [optional] an attribute, 
    * @param long $storageTotalMB - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param long $storageProvisionedMB - [optional] an attribute, 
    * @param int $numberOfConditions - [optional] an attribute, 
    * @param long $storageRequestedMB - [optional] an attribute, 
    * @param string $storageProfileMoref - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $vc=null, $storageUsedMB=null, $name=null, $providerVdc=null, $storageTotalMB=null, $isEnabled=null, $storageProvisionedMB=null, $numberOfConditions=null, $storageRequestedMB=null, $storageProfileMoref=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->vc = $vc;
        $this->storageUsedMB = $storageUsedMB;
        $this->name = $name;
        $this->providerVdc = $providerVdc;
        $this->storageTotalMB = $storageTotalMB;
        $this->isEnabled = $isEnabled;
        $this->storageProvisionedMB = $storageProvisionedMB;
        $this->numberOfConditions = $numberOfConditions;
        $this->storageRequestedMB = $storageRequestedMB;
        $this->storageProfileMoref = $storageProfileMoref;
        $this->tagName = 'ProviderVdcStorageProfileRecord';
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
    public function get_providerVdc(){
        return $this->providerVdc;
    }
    public function set_providerVdc($providerVdc) {
        $this->providerVdc = $providerVdc;
    }
    public function get_storageTotalMB(){
        return $this->storageTotalMB;
    }
    public function set_storageTotalMB($storageTotalMB) {
        $this->storageTotalMB = $storageTotalMB;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_storageProvisionedMB(){
        return $this->storageProvisionedMB;
    }
    public function set_storageProvisionedMB($storageProvisionedMB) {
        $this->storageProvisionedMB = $storageProvisionedMB;
    }
    public function get_numberOfConditions(){
        return $this->numberOfConditions;
    }
    public function set_numberOfConditions($numberOfConditions) {
        $this->numberOfConditions = $numberOfConditions;
    }
    public function get_storageRequestedMB(){
        return $this->storageRequestedMB;
    }
    public function set_storageRequestedMB($storageRequestedMB) {
        $this->storageRequestedMB = $storageRequestedMB;
    }
    public function get_storageProfileMoref(){
        return $this->storageProfileMoref;
    }
    public function set_storageProfileMoref($storageProfileMoref) {
        $this->storageProfileMoref = $storageProfileMoref;
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
        if (!is_null($this->providerVdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'providerVdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'providerVdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->providerVdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='providerVdc')));
        }
        if (!is_null($this->storageTotalMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageTotalMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageTotalMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageTotalMB, $input_name='storageTotalMB')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->storageProvisionedMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageProvisionedMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageProvisionedMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageProvisionedMB, $input_name='storageProvisionedMB')));
        }
        if (!is_null($this->numberOfConditions)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfConditions', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfConditions=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfConditions, $input_name='numberOfConditions')));
        }
        if (!is_null($this->storageRequestedMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageRequestedMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageRequestedMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageRequestedMB, $input_name='storageRequestedMB')));
        }
        if (!is_null($this->storageProfileMoref)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageProfileMoref', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageProfileMoref=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->storageProfileMoref, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='storageProfileMoref')));
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
        $ndproviderVdc = $attrs->getNamedItem('providerVdc');
        if (!is_null($ndproviderVdc)) {
            $this->providerVdc = $ndproviderVdc->value;
            if (isset($ndproviderVdc->prefix)) {
                $this->namespace['providerVdc'] = $ndproviderVdc->prefix;
                $nsUri = $ndproviderVdc->lookupNamespaceURI($ndproviderVdc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'providerVdc');
        } else {
            $this->providerVdc = null;
        }
        $ndstorageTotalMB = $attrs->getNamedItem('storageTotalMB');
        if (!is_null($ndstorageTotalMB)) {
            $this->storageTotalMB = sprintf('%d', $ndstorageTotalMB->value);
            if (isset($ndstorageTotalMB->prefix)) {
                $this->namespace['storageTotalMB'] = $ndstorageTotalMB->prefix;
                $nsUri = $ndstorageTotalMB->lookupNamespaceURI($ndstorageTotalMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageTotalMB');
        } else {
            $this->storageTotalMB = null;
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
        $ndstorageProvisionedMB = $attrs->getNamedItem('storageProvisionedMB');
        if (!is_null($ndstorageProvisionedMB)) {
            $this->storageProvisionedMB = sprintf('%d', $ndstorageProvisionedMB->value);
            if (isset($ndstorageProvisionedMB->prefix)) {
                $this->namespace['storageProvisionedMB'] = $ndstorageProvisionedMB->prefix;
                $nsUri = $ndstorageProvisionedMB->lookupNamespaceURI($ndstorageProvisionedMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageProvisionedMB');
        } else {
            $this->storageProvisionedMB = null;
        }
        $ndnumberOfConditions = $attrs->getNamedItem('numberOfConditions');
        if (!is_null($ndnumberOfConditions)) {
            $this->numberOfConditions = sprintf('%d', $ndnumberOfConditions->value);
            if (isset($ndnumberOfConditions->prefix)) {
                $this->namespace['numberOfConditions'] = $ndnumberOfConditions->prefix;
                $nsUri = $ndnumberOfConditions->lookupNamespaceURI($ndnumberOfConditions->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfConditions');
        } else {
            $this->numberOfConditions = null;
        }
        $ndstorageRequestedMB = $attrs->getNamedItem('storageRequestedMB');
        if (!is_null($ndstorageRequestedMB)) {
            $this->storageRequestedMB = sprintf('%d', $ndstorageRequestedMB->value);
            if (isset($ndstorageRequestedMB->prefix)) {
                $this->namespace['storageRequestedMB'] = $ndstorageRequestedMB->prefix;
                $nsUri = $ndstorageRequestedMB->lookupNamespaceURI($ndstorageRequestedMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageRequestedMB');
        } else {
            $this->storageRequestedMB = null;
        }
        $ndstorageProfileMoref = $attrs->getNamedItem('storageProfileMoref');
        if (!is_null($ndstorageProfileMoref)) {
            $this->storageProfileMoref = $ndstorageProfileMoref->value;
            if (isset($ndstorageProfileMoref->prefix)) {
                $this->namespace['storageProfileMoref'] = $ndstorageProfileMoref->prefix;
                $nsUri = $ndstorageProfileMoref->lookupNamespaceURI($ndstorageProfileMoref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageProfileMoref');
        } else {
            $this->storageProfileMoref = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}