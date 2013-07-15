<?php
class VMware_VCloud_API_QueryResultOrgRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $numberOfVdcs = null;
    protected $displayName = null;
    protected $name = null;
    protected $numberOfDisks = null;
    protected $isReadOnly = null;
    protected $isEnabled = null;
    protected $deployedVMQuota = null;
    protected $storedVMQuota = null;
    protected $canPublishCatalogs = null;
    protected $numberOfVApps = null;
    protected $numberOfCatalogs = null;
    protected $numberOfGroups = null;
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
    * @param int $numberOfVdcs - [optional] an attribute, 
    * @param string $displayName - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param int $numberOfDisks - [optional] an attribute, 
    * @param boolean $isReadOnly - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param int $deployedVMQuota - [optional] an attribute, 
    * @param int $storedVMQuota - [optional] an attribute, 
    * @param boolean $canPublishCatalogs - [optional] an attribute, 
    * @param int $numberOfVApps - [optional] an attribute, 
    * @param int $numberOfCatalogs - [optional] an attribute, 
    * @param int $numberOfGroups - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $numberOfVdcs=null, $displayName=null, $name=null, $numberOfDisks=null, $isReadOnly=null, $isEnabled=null, $deployedVMQuota=null, $storedVMQuota=null, $canPublishCatalogs=null, $numberOfVApps=null, $numberOfCatalogs=null, $numberOfGroups=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->numberOfVdcs = $numberOfVdcs;
        $this->displayName = $displayName;
        $this->name = $name;
        $this->numberOfDisks = $numberOfDisks;
        $this->isReadOnly = $isReadOnly;
        $this->isEnabled = $isEnabled;
        $this->deployedVMQuota = $deployedVMQuota;
        $this->storedVMQuota = $storedVMQuota;
        $this->canPublishCatalogs = $canPublishCatalogs;
        $this->numberOfVApps = $numberOfVApps;
        $this->numberOfCatalogs = $numberOfCatalogs;
        $this->numberOfGroups = $numberOfGroups;
        $this->tagName = 'OrgRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_numberOfVdcs(){
        return $this->numberOfVdcs;
    }
    public function set_numberOfVdcs($numberOfVdcs) {
        $this->numberOfVdcs = $numberOfVdcs;
    }
    public function get_displayName(){
        return $this->displayName;
    }
    public function set_displayName($displayName) {
        $this->displayName = $displayName;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_numberOfDisks(){
        return $this->numberOfDisks;
    }
    public function set_numberOfDisks($numberOfDisks) {
        $this->numberOfDisks = $numberOfDisks;
    }
    public function get_isReadOnly(){
        return $this->isReadOnly;
    }
    public function set_isReadOnly($isReadOnly) {
        $this->isReadOnly = $isReadOnly;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_deployedVMQuota(){
        return $this->deployedVMQuota;
    }
    public function set_deployedVMQuota($deployedVMQuota) {
        $this->deployedVMQuota = $deployedVMQuota;
    }
    public function get_storedVMQuota(){
        return $this->storedVMQuota;
    }
    public function set_storedVMQuota($storedVMQuota) {
        $this->storedVMQuota = $storedVMQuota;
    }
    public function get_canPublishCatalogs(){
        return $this->canPublishCatalogs;
    }
    public function set_canPublishCatalogs($canPublishCatalogs) {
        $this->canPublishCatalogs = $canPublishCatalogs;
    }
    public function get_numberOfVApps(){
        return $this->numberOfVApps;
    }
    public function set_numberOfVApps($numberOfVApps) {
        $this->numberOfVApps = $numberOfVApps;
    }
    public function get_numberOfCatalogs(){
        return $this->numberOfCatalogs;
    }
    public function set_numberOfCatalogs($numberOfCatalogs) {
        $this->numberOfCatalogs = $numberOfCatalogs;
    }
    public function get_numberOfGroups(){
        return $this->numberOfGroups;
    }
    public function set_numberOfGroups($numberOfGroups) {
        $this->numberOfGroups = $numberOfGroups;
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
        if (!is_null($this->numberOfVdcs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVdcs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVdcs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVdcs, $input_name='numberOfVdcs')));
        }
        if (!is_null($this->displayName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'displayName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'displayName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->displayName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='displayName')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->numberOfDisks)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfDisks', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfDisks=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfDisks, $input_name='numberOfDisks')));
        }
        if (!is_null($this->isReadOnly)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isReadOnly', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isReadOnly=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isReadOnly, $input_name='isReadOnly')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->deployedVMQuota)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'deployedVMQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'deployedVMQuota=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->deployedVMQuota, $input_name='deployedVMQuota')));
        }
        if (!is_null($this->storedVMQuota)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storedVMQuota', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storedVMQuota=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->storedVMQuota, $input_name='storedVMQuota')));
        }
        if (!is_null($this->canPublishCatalogs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'canPublishCatalogs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'canPublishCatalogs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->canPublishCatalogs, $input_name='canPublishCatalogs')));
        }
        if (!is_null($this->numberOfVApps)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVApps', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVApps=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVApps, $input_name='numberOfVApps')));
        }
        if (!is_null($this->numberOfCatalogs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfCatalogs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfCatalogs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfCatalogs, $input_name='numberOfCatalogs')));
        }
        if (!is_null($this->numberOfGroups)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfGroups', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfGroups=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfGroups, $input_name='numberOfGroups')));
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
        $ndnumberOfVdcs = $attrs->getNamedItem('numberOfVdcs');
        if (!is_null($ndnumberOfVdcs)) {
            $this->numberOfVdcs = sprintf('%d', $ndnumberOfVdcs->value);
            if (isset($ndnumberOfVdcs->prefix)) {
                $this->namespace['numberOfVdcs'] = $ndnumberOfVdcs->prefix;
                $nsUri = $ndnumberOfVdcs->lookupNamespaceURI($ndnumberOfVdcs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVdcs');
        } else {
            $this->numberOfVdcs = null;
        }
        $nddisplayName = $attrs->getNamedItem('displayName');
        if (!is_null($nddisplayName)) {
            $this->displayName = $nddisplayName->value;
            if (isset($nddisplayName->prefix)) {
                $this->namespace['displayName'] = $nddisplayName->prefix;
                $nsUri = $nddisplayName->lookupNamespaceURI($nddisplayName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'displayName');
        } else {
            $this->displayName = null;
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
        $ndnumberOfDisks = $attrs->getNamedItem('numberOfDisks');
        if (!is_null($ndnumberOfDisks)) {
            $this->numberOfDisks = sprintf('%d', $ndnumberOfDisks->value);
            if (isset($ndnumberOfDisks->prefix)) {
                $this->namespace['numberOfDisks'] = $ndnumberOfDisks->prefix;
                $nsUri = $ndnumberOfDisks->lookupNamespaceURI($ndnumberOfDisks->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfDisks');
        } else {
            $this->numberOfDisks = null;
        }
        $ndisReadOnly = $attrs->getNamedItem('isReadOnly');
        if (!is_null($ndisReadOnly)) {
            $this->isReadOnly = VMware_VCloud_API_Helper::get_boolean($ndisReadOnly->value);
            if (isset($ndisReadOnly->prefix)) {
                $this->namespace['isReadOnly'] = $ndisReadOnly->prefix;
                $nsUri = $ndisReadOnly->lookupNamespaceURI($ndisReadOnly->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isReadOnly');
        } else {
            $this->isReadOnly = null;
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
        $nddeployedVMQuota = $attrs->getNamedItem('deployedVMQuota');
        if (!is_null($nddeployedVMQuota)) {
            $this->deployedVMQuota = sprintf('%d', $nddeployedVMQuota->value);
            if (isset($nddeployedVMQuota->prefix)) {
                $this->namespace['deployedVMQuota'] = $nddeployedVMQuota->prefix;
                $nsUri = $nddeployedVMQuota->lookupNamespaceURI($nddeployedVMQuota->prefix);
            }
            $node->removeAttributeNS($nsUri, 'deployedVMQuota');
        } else {
            $this->deployedVMQuota = null;
        }
        $ndstoredVMQuota = $attrs->getNamedItem('storedVMQuota');
        if (!is_null($ndstoredVMQuota)) {
            $this->storedVMQuota = sprintf('%d', $ndstoredVMQuota->value);
            if (isset($ndstoredVMQuota->prefix)) {
                $this->namespace['storedVMQuota'] = $ndstoredVMQuota->prefix;
                $nsUri = $ndstoredVMQuota->lookupNamespaceURI($ndstoredVMQuota->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storedVMQuota');
        } else {
            $this->storedVMQuota = null;
        }
        $ndcanPublishCatalogs = $attrs->getNamedItem('canPublishCatalogs');
        if (!is_null($ndcanPublishCatalogs)) {
            $this->canPublishCatalogs = VMware_VCloud_API_Helper::get_boolean($ndcanPublishCatalogs->value);
            if (isset($ndcanPublishCatalogs->prefix)) {
                $this->namespace['canPublishCatalogs'] = $ndcanPublishCatalogs->prefix;
                $nsUri = $ndcanPublishCatalogs->lookupNamespaceURI($ndcanPublishCatalogs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'canPublishCatalogs');
        } else {
            $this->canPublishCatalogs = null;
        }
        $ndnumberOfVApps = $attrs->getNamedItem('numberOfVApps');
        if (!is_null($ndnumberOfVApps)) {
            $this->numberOfVApps = sprintf('%d', $ndnumberOfVApps->value);
            if (isset($ndnumberOfVApps->prefix)) {
                $this->namespace['numberOfVApps'] = $ndnumberOfVApps->prefix;
                $nsUri = $ndnumberOfVApps->lookupNamespaceURI($ndnumberOfVApps->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVApps');
        } else {
            $this->numberOfVApps = null;
        }
        $ndnumberOfCatalogs = $attrs->getNamedItem('numberOfCatalogs');
        if (!is_null($ndnumberOfCatalogs)) {
            $this->numberOfCatalogs = sprintf('%d', $ndnumberOfCatalogs->value);
            if (isset($ndnumberOfCatalogs->prefix)) {
                $this->namespace['numberOfCatalogs'] = $ndnumberOfCatalogs->prefix;
                $nsUri = $ndnumberOfCatalogs->lookupNamespaceURI($ndnumberOfCatalogs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfCatalogs');
        } else {
            $this->numberOfCatalogs = null;
        }
        $ndnumberOfGroups = $attrs->getNamedItem('numberOfGroups');
        if (!is_null($ndnumberOfGroups)) {
            $this->numberOfGroups = sprintf('%d', $ndnumberOfGroups->value);
            if (isset($ndnumberOfGroups->prefix)) {
                $this->namespace['numberOfGroups'] = $ndnumberOfGroups->prefix;
                $nsUri = $ndnumberOfGroups->lookupNamespaceURI($ndnumberOfGroups->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfGroups');
        } else {
            $this->numberOfGroups = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}