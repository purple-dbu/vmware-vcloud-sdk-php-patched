<?php
class VMware_VCloud_API_QueryResultAdminVMRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $vc = null;
    protected $vmToolsVersion = null;
    protected $datastoreName = null;
    protected $memoryMB = null;
    protected $moref = null;
    protected $hardwareVersion = null;
    protected $org = null;
    protected $isVAppTemplate = null;
    protected $isDeleted = null;
    protected $catalogName = null;
    protected $isDeployed = null;
    protected $guestOs = null;
    protected $isVdcEnabled = null;
    protected $status = null;
    protected $storageProfileName = null;
    protected $hostName = null;
    protected $container = null;
    protected $networkName = null;
    protected $containerName = null;
    protected $name = null;
    protected $isPublished = null;
    protected $numberOfCpus = null;
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
    * @param string $vc - [optional] an attribute, 
    * @param int $vmToolsVersion - [optional] an attribute, 
    * @param string $datastoreName - [optional] an attribute, 
    * @param int $memoryMB - [optional] an attribute, 
    * @param string $moref - [optional] an attribute, 
    * @param int $hardwareVersion - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param boolean $isVAppTemplate - [optional] an attribute, 
    * @param boolean $isDeleted - [optional] an attribute, 
    * @param string $catalogName - [optional] an attribute, 
    * @param boolean $isDeployed - [optional] an attribute, 
    * @param string $guestOs - [optional] an attribute, 
    * @param boolean $isVdcEnabled - [optional] an attribute, 
    * @param string $status - [optional] an attribute, 
    * @param string $storageProfileName - [optional] an attribute, 
    * @param string $hostName - [optional] an attribute, 
    * @param string $container - [optional] an attribute, 
    * @param string $networkName - [optional] an attribute, 
    * @param string $containerName - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param boolean $isPublished - [optional] an attribute, 
    * @param int $numberOfCpus - [optional] an attribute, 
    * @param string $vdc - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $vc=null, $vmToolsVersion=null, $datastoreName=null, $memoryMB=null, $moref=null, $hardwareVersion=null, $org=null, $isVAppTemplate=null, $isDeleted=null, $catalogName=null, $isDeployed=null, $guestOs=null, $isVdcEnabled=null, $status=null, $storageProfileName=null, $hostName=null, $container=null, $networkName=null, $containerName=null, $name=null, $isPublished=null, $numberOfCpus=null, $vdc=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->vc = $vc;
        $this->vmToolsVersion = $vmToolsVersion;
        $this->datastoreName = $datastoreName;
        $this->memoryMB = $memoryMB;
        $this->moref = $moref;
        $this->hardwareVersion = $hardwareVersion;
        $this->org = $org;
        $this->isVAppTemplate = $isVAppTemplate;
        $this->isDeleted = $isDeleted;
        $this->catalogName = $catalogName;
        $this->isDeployed = $isDeployed;
        $this->guestOs = $guestOs;
        $this->isVdcEnabled = $isVdcEnabled;
        $this->status = $status;
        $this->storageProfileName = $storageProfileName;
        $this->hostName = $hostName;
        $this->container = $container;
        $this->networkName = $networkName;
        $this->containerName = $containerName;
        $this->name = $name;
        $this->isPublished = $isPublished;
        $this->numberOfCpus = $numberOfCpus;
        $this->vdc = $vdc;
        $this->tagName = 'AdminVMRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_vc(){
        return $this->vc;
    }
    public function set_vc($vc) {
        $this->vc = $vc;
    }
    public function get_vmToolsVersion(){
        return $this->vmToolsVersion;
    }
    public function set_vmToolsVersion($vmToolsVersion) {
        $this->vmToolsVersion = $vmToolsVersion;
    }
    public function get_datastoreName(){
        return $this->datastoreName;
    }
    public function set_datastoreName($datastoreName) {
        $this->datastoreName = $datastoreName;
    }
    public function get_memoryMB(){
        return $this->memoryMB;
    }
    public function set_memoryMB($memoryMB) {
        $this->memoryMB = $memoryMB;
    }
    public function get_moref(){
        return $this->moref;
    }
    public function set_moref($moref) {
        $this->moref = $moref;
    }
    public function get_hardwareVersion(){
        return $this->hardwareVersion;
    }
    public function set_hardwareVersion($hardwareVersion) {
        $this->hardwareVersion = $hardwareVersion;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_isVAppTemplate(){
        return $this->isVAppTemplate;
    }
    public function set_isVAppTemplate($isVAppTemplate) {
        $this->isVAppTemplate = $isVAppTemplate;
    }
    public function get_isDeleted(){
        return $this->isDeleted;
    }
    public function set_isDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }
    public function get_catalogName(){
        return $this->catalogName;
    }
    public function set_catalogName($catalogName) {
        $this->catalogName = $catalogName;
    }
    public function get_isDeployed(){
        return $this->isDeployed;
    }
    public function set_isDeployed($isDeployed) {
        $this->isDeployed = $isDeployed;
    }
    public function get_guestOs(){
        return $this->guestOs;
    }
    public function set_guestOs($guestOs) {
        $this->guestOs = $guestOs;
    }
    public function get_isVdcEnabled(){
        return $this->isVdcEnabled;
    }
    public function set_isVdcEnabled($isVdcEnabled) {
        $this->isVdcEnabled = $isVdcEnabled;
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_storageProfileName(){
        return $this->storageProfileName;
    }
    public function set_storageProfileName($storageProfileName) {
        $this->storageProfileName = $storageProfileName;
    }
    public function get_hostName(){
        return $this->hostName;
    }
    public function set_hostName($hostName) {
        $this->hostName = $hostName;
    }
    public function get_container(){
        return $this->container;
    }
    public function set_container($container) {
        $this->container = $container;
    }
    public function get_networkName(){
        return $this->networkName;
    }
    public function set_networkName($networkName) {
        $this->networkName = $networkName;
    }
    public function get_containerName(){
        return $this->containerName;
    }
    public function set_containerName($containerName) {
        $this->containerName = $containerName;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_isPublished(){
        return $this->isPublished;
    }
    public function set_isPublished($isPublished) {
        $this->isPublished = $isPublished;
    }
    public function get_numberOfCpus(){
        return $this->numberOfCpus;
    }
    public function set_numberOfCpus($numberOfCpus) {
        $this->numberOfCpus = $numberOfCpus;
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
        if (!is_null($this->vc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vc')));
        }
        if (!is_null($this->vmToolsVersion)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vmToolsVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vmToolsVersion=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->vmToolsVersion, $input_name='vmToolsVersion')));
        }
        if (!is_null($this->datastoreName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'datastoreName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'datastoreName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->datastoreName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='datastoreName')));
        }
        if (!is_null($this->memoryMB)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'memoryMB', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'memoryMB=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->memoryMB, $input_name='memoryMB')));
        }
        if (!is_null($this->moref)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'moref', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'moref=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->moref, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='moref')));
        }
        if (!is_null($this->hardwareVersion)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'hardwareVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'hardwareVersion=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->hardwareVersion, $input_name='hardwareVersion')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->isVAppTemplate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isVAppTemplate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isVAppTemplate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isVAppTemplate, $input_name='isVAppTemplate')));
        }
        if (!is_null($this->isDeleted)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDeleted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDeleted=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDeleted, $input_name='isDeleted')));
        }
        if (!is_null($this->catalogName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'catalogName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'catalogName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->catalogName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='catalogName')));
        }
        if (!is_null($this->isDeployed)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDeployed', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDeployed=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDeployed, $input_name='isDeployed')));
        }
        if (!is_null($this->guestOs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'guestOs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'guestOs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->guestOs, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='guestOs')));
        }
        if (!is_null($this->isVdcEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isVdcEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isVdcEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isVdcEnabled, $input_name='isVdcEnabled')));
        }
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->storageProfileName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageProfileName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageProfileName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->storageProfileName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='storageProfileName')));
        }
        if (!is_null($this->hostName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'hostName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'hostName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->hostName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='hostName')));
        }
        if (!is_null($this->container)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'container', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'container=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->container, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='container')));
        }
        if (!is_null($this->networkName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'networkName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'networkName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->networkName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='networkName')));
        }
        if (!is_null($this->containerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'containerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'containerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->containerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='containerName')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->isPublished)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isPublished', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isPublished=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isPublished, $input_name='isPublished')));
        }
        if (!is_null($this->numberOfCpus)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfCpus', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfCpus=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfCpus, $input_name='numberOfCpus')));
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
        $ndvmToolsVersion = $attrs->getNamedItem('vmToolsVersion');
        if (!is_null($ndvmToolsVersion)) {
            $this->vmToolsVersion = sprintf('%d', $ndvmToolsVersion->value);
            if (isset($ndvmToolsVersion->prefix)) {
                $this->namespace['vmToolsVersion'] = $ndvmToolsVersion->prefix;
                $nsUri = $ndvmToolsVersion->lookupNamespaceURI($ndvmToolsVersion->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vmToolsVersion');
        } else {
            $this->vmToolsVersion = null;
        }
        $nddatastoreName = $attrs->getNamedItem('datastoreName');
        if (!is_null($nddatastoreName)) {
            $this->datastoreName = $nddatastoreName->value;
            if (isset($nddatastoreName->prefix)) {
                $this->namespace['datastoreName'] = $nddatastoreName->prefix;
                $nsUri = $nddatastoreName->lookupNamespaceURI($nddatastoreName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'datastoreName');
        } else {
            $this->datastoreName = null;
        }
        $ndmemoryMB = $attrs->getNamedItem('memoryMB');
        if (!is_null($ndmemoryMB)) {
            $this->memoryMB = sprintf('%d', $ndmemoryMB->value);
            if (isset($ndmemoryMB->prefix)) {
                $this->namespace['memoryMB'] = $ndmemoryMB->prefix;
                $nsUri = $ndmemoryMB->lookupNamespaceURI($ndmemoryMB->prefix);
            }
            $node->removeAttributeNS($nsUri, 'memoryMB');
        } else {
            $this->memoryMB = null;
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
        $ndhardwareVersion = $attrs->getNamedItem('hardwareVersion');
        if (!is_null($ndhardwareVersion)) {
            $this->hardwareVersion = sprintf('%d', $ndhardwareVersion->value);
            if (isset($ndhardwareVersion->prefix)) {
                $this->namespace['hardwareVersion'] = $ndhardwareVersion->prefix;
                $nsUri = $ndhardwareVersion->lookupNamespaceURI($ndhardwareVersion->prefix);
            }
            $node->removeAttributeNS($nsUri, 'hardwareVersion');
        } else {
            $this->hardwareVersion = null;
        }
        $ndorg = $attrs->getNamedItem('org');
        if (!is_null($ndorg)) {
            $this->org = $ndorg->value;
            if (isset($ndorg->prefix)) {
                $this->namespace['org'] = $ndorg->prefix;
                $nsUri = $ndorg->lookupNamespaceURI($ndorg->prefix);
            }
            $node->removeAttributeNS($nsUri, 'org');
        } else {
            $this->org = null;
        }
        $ndisVAppTemplate = $attrs->getNamedItem('isVAppTemplate');
        if (!is_null($ndisVAppTemplate)) {
            $this->isVAppTemplate = VMware_VCloud_API_Helper::get_boolean($ndisVAppTemplate->value);
            if (isset($ndisVAppTemplate->prefix)) {
                $this->namespace['isVAppTemplate'] = $ndisVAppTemplate->prefix;
                $nsUri = $ndisVAppTemplate->lookupNamespaceURI($ndisVAppTemplate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isVAppTemplate');
        } else {
            $this->isVAppTemplate = null;
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
        $ndcatalogName = $attrs->getNamedItem('catalogName');
        if (!is_null($ndcatalogName)) {
            $this->catalogName = $ndcatalogName->value;
            if (isset($ndcatalogName->prefix)) {
                $this->namespace['catalogName'] = $ndcatalogName->prefix;
                $nsUri = $ndcatalogName->lookupNamespaceURI($ndcatalogName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'catalogName');
        } else {
            $this->catalogName = null;
        }
        $ndisDeployed = $attrs->getNamedItem('isDeployed');
        if (!is_null($ndisDeployed)) {
            $this->isDeployed = VMware_VCloud_API_Helper::get_boolean($ndisDeployed->value);
            if (isset($ndisDeployed->prefix)) {
                $this->namespace['isDeployed'] = $ndisDeployed->prefix;
                $nsUri = $ndisDeployed->lookupNamespaceURI($ndisDeployed->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isDeployed');
        } else {
            $this->isDeployed = null;
        }
        $ndguestOs = $attrs->getNamedItem('guestOs');
        if (!is_null($ndguestOs)) {
            $this->guestOs = $ndguestOs->value;
            if (isset($ndguestOs->prefix)) {
                $this->namespace['guestOs'] = $ndguestOs->prefix;
                $nsUri = $ndguestOs->lookupNamespaceURI($ndguestOs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'guestOs');
        } else {
            $this->guestOs = null;
        }
        $ndisVdcEnabled = $attrs->getNamedItem('isVdcEnabled');
        if (!is_null($ndisVdcEnabled)) {
            $this->isVdcEnabled = VMware_VCloud_API_Helper::get_boolean($ndisVdcEnabled->value);
            if (isset($ndisVdcEnabled->prefix)) {
                $this->namespace['isVdcEnabled'] = $ndisVdcEnabled->prefix;
                $nsUri = $ndisVdcEnabled->lookupNamespaceURI($ndisVdcEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isVdcEnabled');
        } else {
            $this->isVdcEnabled = null;
        }
        $ndstatus = $attrs->getNamedItem('status');
        if (!is_null($ndstatus)) {
            $this->status = $ndstatus->value;
            if (isset($ndstatus->prefix)) {
                $this->namespace['status'] = $ndstatus->prefix;
                $nsUri = $ndstatus->lookupNamespaceURI($ndstatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'status');
        } else {
            $this->status = null;
        }
        $ndstorageProfileName = $attrs->getNamedItem('storageProfileName');
        if (!is_null($ndstorageProfileName)) {
            $this->storageProfileName = $ndstorageProfileName->value;
            if (isset($ndstorageProfileName->prefix)) {
                $this->namespace['storageProfileName'] = $ndstorageProfileName->prefix;
                $nsUri = $ndstorageProfileName->lookupNamespaceURI($ndstorageProfileName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageProfileName');
        } else {
            $this->storageProfileName = null;
        }
        $ndhostName = $attrs->getNamedItem('hostName');
        if (!is_null($ndhostName)) {
            $this->hostName = $ndhostName->value;
            if (isset($ndhostName->prefix)) {
                $this->namespace['hostName'] = $ndhostName->prefix;
                $nsUri = $ndhostName->lookupNamespaceURI($ndhostName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'hostName');
        } else {
            $this->hostName = null;
        }
        $ndcontainer = $attrs->getNamedItem('container');
        if (!is_null($ndcontainer)) {
            $this->container = $ndcontainer->value;
            if (isset($ndcontainer->prefix)) {
                $this->namespace['container'] = $ndcontainer->prefix;
                $nsUri = $ndcontainer->lookupNamespaceURI($ndcontainer->prefix);
            }
            $node->removeAttributeNS($nsUri, 'container');
        } else {
            $this->container = null;
        }
        $ndnetworkName = $attrs->getNamedItem('networkName');
        if (!is_null($ndnetworkName)) {
            $this->networkName = $ndnetworkName->value;
            if (isset($ndnetworkName->prefix)) {
                $this->namespace['networkName'] = $ndnetworkName->prefix;
                $nsUri = $ndnetworkName->lookupNamespaceURI($ndnetworkName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'networkName');
        } else {
            $this->networkName = null;
        }
        $ndcontainerName = $attrs->getNamedItem('containerName');
        if (!is_null($ndcontainerName)) {
            $this->containerName = $ndcontainerName->value;
            if (isset($ndcontainerName->prefix)) {
                $this->namespace['containerName'] = $ndcontainerName->prefix;
                $nsUri = $ndcontainerName->lookupNamespaceURI($ndcontainerName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'containerName');
        } else {
            $this->containerName = null;
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
        $ndisPublished = $attrs->getNamedItem('isPublished');
        if (!is_null($ndisPublished)) {
            $this->isPublished = VMware_VCloud_API_Helper::get_boolean($ndisPublished->value);
            if (isset($ndisPublished->prefix)) {
                $this->namespace['isPublished'] = $ndisPublished->prefix;
                $nsUri = $ndisPublished->lookupNamespaceURI($ndisPublished->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isPublished');
        } else {
            $this->isPublished = null;
        }
        $ndnumberOfCpus = $attrs->getNamedItem('numberOfCpus');
        if (!is_null($ndnumberOfCpus)) {
            $this->numberOfCpus = sprintf('%d', $ndnumberOfCpus->value);
            if (isset($ndnumberOfCpus->prefix)) {
                $this->namespace['numberOfCpus'] = $ndnumberOfCpus->prefix;
                $nsUri = $ndnumberOfCpus->lookupNamespaceURI($ndnumberOfCpus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfCpus');
        } else {
            $this->numberOfCpus = null;
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