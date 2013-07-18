<?php
class VMware_VCloud_API_QueryResultOrgVdcStorageProfileRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $isVdcBusy = null;
    protected $storageUsedMB = null;
    protected $name = null;
    protected $isEnabled = null;
    protected $storageLimitMB = null;
    protected $isDefaultStorageProfile = null;
    protected $vdcName = null;
    protected $numberOfConditions = null;
    protected $vdc = null;
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
    * @param boolean $isVdcBusy - [optional] an attribute, 
    * @param int $storageUsedMB - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param int $storageLimitMB - [optional] an attribute, 
    * @param boolean $isDefaultStorageProfile - [optional] an attribute, 
    * @param string $vdcName - [optional] an attribute, 
    * @param int $numberOfConditions - [optional] an attribute, 
    * @param string $vdc - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $isVdcBusy=null, $storageUsedMB=null, $name=null, $isEnabled=null, $storageLimitMB=null, $isDefaultStorageProfile=null, $vdcName=null, $numberOfConditions=null, $vdc=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->isVdcBusy = $isVdcBusy;
        $this->storageUsedMB = $storageUsedMB;
        $this->name = $name;
        $this->isEnabled = $isEnabled;
        $this->storageLimitMB = $storageLimitMB;
        $this->isDefaultStorageProfile = $isDefaultStorageProfile;
        $this->vdcName = $vdcName;
        $this->numberOfConditions = $numberOfConditions;
        $this->vdc = $vdc;
        $this->tagName = 'OrgVdcStorageProfileRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_isVdcBusy(){
        return $this->isVdcBusy;
    }
    public function set_isVdcBusy($isVdcBusy) {
        $this->isVdcBusy = $isVdcBusy;
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
    public function get_storageLimitMB(){
        return $this->storageLimitMB;
    }
    public function set_storageLimitMB($storageLimitMB) {
        $this->storageLimitMB = $storageLimitMB;
    }
    public function get_isDefaultStorageProfile(){
        return $this->isDefaultStorageProfile;
    }
    public function set_isDefaultStorageProfile($isDefaultStorageProfile) {
        $this->isDefaultStorageProfile = $isDefaultStorageProfile;
    }
    public function get_vdcName(){
        return $this->vdcName;
    }
    public function set_vdcName($vdcName) {
        $this->vdcName = $vdcName;
    }
    public function get_numberOfConditions(){
        return $this->numberOfConditions;
    }
    public function set_numberOfConditions($numberOfConditions) {
        $this->numberOfConditions = $numberOfConditions;
    }
    public function get_vdc(){
        return $this->vdc;
    }
    public function set_vdc($vdc) {
        $this->vdc = $vdc;
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
        if (!is_null($this->isVdcBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isVdcBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isVdcBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isVdcBusy, $input_name='isVdcBusy')));
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
        if (!is_null($this->storageLimitMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageLimitMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageLimitMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storageLimitMB, $input_name='storageLimitMB')));
        }
        if (!is_null($this->isDefaultStorageProfile)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDefaultStorageProfile', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDefaultStorageProfile=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDefaultStorageProfile, $input_name='isDefaultStorageProfile')));
        }
        if (!is_null($this->vdcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdcName')));
        }
        if (!is_null($this->numberOfConditions)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfConditions', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfConditions=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfConditions, $input_name='numberOfConditions')));
        }
        if (!is_null($this->vdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdc')));
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
        $ndisVdcBusy = $attrs->getNamedItem('isVdcBusy');
        if (!is_null($ndisVdcBusy)) {
            $this->isVdcBusy = VMware_VCloud_API_Helper::get_boolean($ndisVdcBusy->value);
            if (isset($ndisVdcBusy->prefix)) {
                $this->namespace['isVdcBusy'] = $ndisVdcBusy->prefix;
                $nsUri = $ndisVdcBusy->lookupNamespaceURI($ndisVdcBusy->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isVdcBusy');
        } else {
            $this->isVdcBusy = null;
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
        $ndstorageLimitMB = $attrs->getNamedItem('storageLimitMB');
        if (!is_null($ndstorageLimitMB)) {
            $this->storageLimitMB = sprintf('%d', $ndstorageLimitMB->value);
            if (isset($ndstorageLimitMB->prefix)) {
                $this->namespace['storageLimitMB'] = $ndstorageLimitMB->prefix;
                $nsUri = $ndstorageLimitMB->lookupNamespaceURI($ndstorageLimitMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageLimitMB');
        } else {
            $this->storageLimitMB = null;
        }
        $ndisDefaultStorageProfile = $attrs->getNamedItem('isDefaultStorageProfile');
        if (!is_null($ndisDefaultStorageProfile)) {
            $this->isDefaultStorageProfile = VMware_VCloud_API_Helper::get_boolean($ndisDefaultStorageProfile->value);
            if (isset($ndisDefaultStorageProfile->prefix)) {
                $this->namespace['isDefaultStorageProfile'] = $ndisDefaultStorageProfile->prefix;
                $nsUri = $ndisDefaultStorageProfile->lookupNamespaceURI($ndisDefaultStorageProfile->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isDefaultStorageProfile');
        } else {
            $this->isDefaultStorageProfile = null;
        }
        $ndvdcName = $attrs->getNamedItem('vdcName');
        if (!is_null($ndvdcName)) {
            $this->vdcName = $ndvdcName->value;
            if (isset($ndvdcName->prefix)) {
                $this->namespace['vdcName'] = $ndvdcName->prefix;
                $nsUri = $ndvdcName->lookupNamespaceURI($ndvdcName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdcName');
        } else {
            $this->vdcName = null;
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
        $ndvdc = $attrs->getNamedItem('vdc');
        if (!is_null($ndvdc)) {
            $this->vdc = $ndvdc->value;
            if (isset($ndvdc->prefix)) {
                $this->namespace['vdc'] = $ndvdc->prefix;
                $nsUri = $ndvdc->lookupNamespaceURI($ndvdc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdc');
        } else {
            $this->vdc = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}