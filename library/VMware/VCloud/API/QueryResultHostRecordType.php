<?php
class VMware_VCloud_API_QueryResultHostRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $isSupported = null;
    protected $isHung = null;
    protected $vc = null;
    protected $isInMaintenanceMode = null;
    protected $name = null;
    protected $isCrossHostEnabled = null;
    protected $numberOfVMs = null;
    protected $isEnabled = null;
    protected $state = null;
    protected $isPendingUpgrade = null;
    protected $vcName = null;
    protected $isBusy = null;
    protected $osVersion = null;
    protected $isDeleted = null;
    protected $isPrepared = null;
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
    * @param boolean $isSupported - [optional] an attribute, 
    * @param boolean $isHung - [optional] an attribute, 
    * @param string $vc - [optional] an attribute, 
    * @param boolean $isInMaintenanceMode - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param boolean $isCrossHostEnabled - [optional] an attribute, 
    * @param int $numberOfVMs - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param int $state - [optional] an attribute, 
    * @param boolean $isPendingUpgrade - [optional] an attribute, 
    * @param string $vcName - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param string $osVersion - [optional] an attribute, 
    * @param boolean $isDeleted - [optional] an attribute, 
    * @param boolean $isPrepared - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $isSupported=null, $isHung=null, $vc=null, $isInMaintenanceMode=null, $name=null, $isCrossHostEnabled=null, $numberOfVMs=null, $isEnabled=null, $state=null, $isPendingUpgrade=null, $vcName=null, $isBusy=null, $osVersion=null, $isDeleted=null, $isPrepared=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->isSupported = $isSupported;
        $this->isHung = $isHung;
        $this->vc = $vc;
        $this->isInMaintenanceMode = $isInMaintenanceMode;
        $this->name = $name;
        $this->isCrossHostEnabled = $isCrossHostEnabled;
        $this->numberOfVMs = $numberOfVMs;
        $this->isEnabled = $isEnabled;
        $this->state = $state;
        $this->isPendingUpgrade = $isPendingUpgrade;
        $this->vcName = $vcName;
        $this->isBusy = $isBusy;
        $this->osVersion = $osVersion;
        $this->isDeleted = $isDeleted;
        $this->isPrepared = $isPrepared;
        $this->tagName = 'HostRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_isSupported(){
        return $this->isSupported;
    }
    public function set_isSupported($isSupported) {
        $this->isSupported = $isSupported;
    }
    public function get_isHung(){
        return $this->isHung;
    }
    public function set_isHung($isHung) {
        $this->isHung = $isHung;
    }
    public function get_vc(){
        return $this->vc;
    }
    public function set_vc($vc) {
        $this->vc = $vc;
    }
    public function get_isInMaintenanceMode(){
        return $this->isInMaintenanceMode;
    }
    public function set_isInMaintenanceMode($isInMaintenanceMode) {
        $this->isInMaintenanceMode = $isInMaintenanceMode;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_isCrossHostEnabled(){
        return $this->isCrossHostEnabled;
    }
    public function set_isCrossHostEnabled($isCrossHostEnabled) {
        $this->isCrossHostEnabled = $isCrossHostEnabled;
    }
    public function get_numberOfVMs(){
        return $this->numberOfVMs;
    }
    public function set_numberOfVMs($numberOfVMs) {
        $this->numberOfVMs = $numberOfVMs;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_state(){
        return $this->state;
    }
    public function set_state($state) {
        $this->state = $state;
    }
    public function get_isPendingUpgrade(){
        return $this->isPendingUpgrade;
    }
    public function set_isPendingUpgrade($isPendingUpgrade) {
        $this->isPendingUpgrade = $isPendingUpgrade;
    }
    public function get_vcName(){
        return $this->vcName;
    }
    public function set_vcName($vcName) {
        $this->vcName = $vcName;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
    }
    public function get_osVersion(){
        return $this->osVersion;
    }
    public function set_osVersion($osVersion) {
        $this->osVersion = $osVersion;
    }
    public function get_isDeleted(){
        return $this->isDeleted;
    }
    public function set_isDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }
    public function get_isPrepared(){
        return $this->isPrepared;
    }
    public function set_isPrepared($isPrepared) {
        $this->isPrepared = $isPrepared;
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
        if (!is_null($this->isSupported)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isSupported', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isSupported=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isSupported, $input_name='isSupported')));
        }
        if (!is_null($this->isHung)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isHung', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isHung=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isHung, $input_name='isHung')));
        }
        if (!is_null($this->vc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vc')));
        }
        if (!is_null($this->isInMaintenanceMode)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isInMaintenanceMode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isInMaintenanceMode=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isInMaintenanceMode, $input_name='isInMaintenanceMode')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->isCrossHostEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isCrossHostEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isCrossHostEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isCrossHostEnabled, $input_name='isCrossHostEnabled')));
        }
        if (!is_null($this->numberOfVMs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVMs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVMs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVMs, $input_name='numberOfVMs')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->state)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'state', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'state=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->state, $input_name='state')));
        }
        if (!is_null($this->isPendingUpgrade)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isPendingUpgrade', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isPendingUpgrade=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isPendingUpgrade, $input_name='isPendingUpgrade')));
        }
        if (!is_null($this->vcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vcName')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->osVersion)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'osVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'osVersion=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->osVersion, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='osVersion')));
        }
        if (!is_null($this->isDeleted)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDeleted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDeleted=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDeleted, $input_name='isDeleted')));
        }
        if (!is_null($this->isPrepared)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isPrepared', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isPrepared=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isPrepared, $input_name='isPrepared')));
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
        $ndisSupported = $attrs->getNamedItem('isSupported');
        if (!is_null($ndisSupported)) {
            $this->isSupported = VMware_VCloud_API_Helper::get_boolean($ndisSupported->value);
            if (isset($ndisSupported->prefix)) {
                $this->namespace['isSupported'] = $ndisSupported->prefix;
                $nsUri = $ndisSupported->lookupNamespaceURI($ndisSupported->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isSupported');
        } else {
            $this->isSupported = null;
        }
        $ndisHung = $attrs->getNamedItem('isHung');
        if (!is_null($ndisHung)) {
            $this->isHung = VMware_VCloud_API_Helper::get_boolean($ndisHung->value);
            if (isset($ndisHung->prefix)) {
                $this->namespace['isHung'] = $ndisHung->prefix;
                $nsUri = $ndisHung->lookupNamespaceURI($ndisHung->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isHung');
        } else {
            $this->isHung = null;
        }
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
        $ndisInMaintenanceMode = $attrs->getNamedItem('isInMaintenanceMode');
        if (!is_null($ndisInMaintenanceMode)) {
            $this->isInMaintenanceMode = VMware_VCloud_API_Helper::get_boolean($ndisInMaintenanceMode->value);
            if (isset($ndisInMaintenanceMode->prefix)) {
                $this->namespace['isInMaintenanceMode'] = $ndisInMaintenanceMode->prefix;
                $nsUri = $ndisInMaintenanceMode->lookupNamespaceURI($ndisInMaintenanceMode->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isInMaintenanceMode');
        } else {
            $this->isInMaintenanceMode = null;
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
        $ndisCrossHostEnabled = $attrs->getNamedItem('isCrossHostEnabled');
        if (!is_null($ndisCrossHostEnabled)) {
            $this->isCrossHostEnabled = VMware_VCloud_API_Helper::get_boolean($ndisCrossHostEnabled->value);
            if (isset($ndisCrossHostEnabled->prefix)) {
                $this->namespace['isCrossHostEnabled'] = $ndisCrossHostEnabled->prefix;
                $nsUri = $ndisCrossHostEnabled->lookupNamespaceURI($ndisCrossHostEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isCrossHostEnabled');
        } else {
            $this->isCrossHostEnabled = null;
        }
        $ndnumberOfVMs = $attrs->getNamedItem('numberOfVMs');
        if (!is_null($ndnumberOfVMs)) {
            $this->numberOfVMs = sprintf('%d', $ndnumberOfVMs->value);
            if (isset($ndnumberOfVMs->prefix)) {
                $this->namespace['numberOfVMs'] = $ndnumberOfVMs->prefix;
                $nsUri = $ndnumberOfVMs->lookupNamespaceURI($ndnumberOfVMs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVMs');
        } else {
            $this->numberOfVMs = null;
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
        $ndstate = $attrs->getNamedItem('state');
        if (!is_null($ndstate)) {
            $this->state = sprintf('%d', $ndstate->value);
            if (isset($ndstate->prefix)) {
                $this->namespace['state'] = $ndstate->prefix;
                $nsUri = $ndstate->lookupNamespaceURI($ndstate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'state');
        } else {
            $this->state = null;
        }
        $ndisPendingUpgrade = $attrs->getNamedItem('isPendingUpgrade');
        if (!is_null($ndisPendingUpgrade)) {
            $this->isPendingUpgrade = VMware_VCloud_API_Helper::get_boolean($ndisPendingUpgrade->value);
            if (isset($ndisPendingUpgrade->prefix)) {
                $this->namespace['isPendingUpgrade'] = $ndisPendingUpgrade->prefix;
                $nsUri = $ndisPendingUpgrade->lookupNamespaceURI($ndisPendingUpgrade->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isPendingUpgrade');
        } else {
            $this->isPendingUpgrade = null;
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
        $ndisBusy = $attrs->getNamedItem('isBusy');
        if (!is_null($ndisBusy)) {
            $this->isBusy = VMware_VCloud_API_Helper::get_boolean($ndisBusy->value);
            if (isset($ndisBusy->prefix)) {
                $this->namespace['isBusy'] = $ndisBusy->prefix;
                $nsUri = $ndisBusy->lookupNamespaceURI($ndisBusy->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isBusy');
        } else {
            $this->isBusy = null;
        }
        $ndosVersion = $attrs->getNamedItem('osVersion');
        if (!is_null($ndosVersion)) {
            $this->osVersion = $ndosVersion->value;
            if (isset($ndosVersion->prefix)) {
                $this->namespace['osVersion'] = $ndosVersion->prefix;
                $nsUri = $ndosVersion->lookupNamespaceURI($ndosVersion->prefix);
            }
            $node->removeAttributeNS($nsUri, 'osVersion');
        } else {
            $this->osVersion = null;
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
        $ndisPrepared = $attrs->getNamedItem('isPrepared');
        if (!is_null($ndisPrepared)) {
            $this->isPrepared = VMware_VCloud_API_Helper::get_boolean($ndisPrepared->value);
            if (isset($ndisPrepared->prefix)) {
                $this->namespace['isPrepared'] = $ndisPrepared->prefix;
                $nsUri = $ndisPrepared->lookupNamespaceURI($ndisPrepared->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isPrepared');
        } else {
            $this->isPrepared = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}