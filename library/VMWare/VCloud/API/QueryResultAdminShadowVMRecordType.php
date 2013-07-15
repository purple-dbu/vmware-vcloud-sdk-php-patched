<?php
class VMware_VCloud_API_QueryResultAdminShadowVMRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $status = null;
    protected $primaryVMOwner = null;
    protected $name = null;
    protected $isDeleted = null;
    protected $datastoreName = null;
    protected $org = null;
    protected $isPublished = null;
    protected $isBusy = null;
    protected $shadowVApp = null;
    protected $primaryVMCatalog = null;
    protected $primaryVAppName = null;
    protected $primaryVAppTemplate = null;
    protected $primaryVmName = null;
    protected $primaryVM = null;
    protected $vcName = null;
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
    * @param string $status - [optional] an attribute, 
    * @param string $primaryVMOwner - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param boolean $isDeleted - [optional] an attribute, 
    * @param string $datastoreName - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param boolean $isPublished - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param string $shadowVApp - [optional] an attribute, 
    * @param string $primaryVMCatalog - [optional] an attribute, 
    * @param string $primaryVAppName - [optional] an attribute, 
    * @param string $primaryVAppTemplate - [optional] an attribute, 
    * @param string $primaryVmName - [optional] an attribute, 
    * @param string $primaryVM - [optional] an attribute, 
    * @param string $vcName - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $status=null, $primaryVMOwner=null, $name=null, $isDeleted=null, $datastoreName=null, $org=null, $isPublished=null, $isBusy=null, $shadowVApp=null, $primaryVMCatalog=null, $primaryVAppName=null, $primaryVAppTemplate=null, $primaryVmName=null, $primaryVM=null, $vcName=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->status = $status;
        $this->primaryVMOwner = $primaryVMOwner;
        $this->name = $name;
        $this->isDeleted = $isDeleted;
        $this->datastoreName = $datastoreName;
        $this->org = $org;
        $this->isPublished = $isPublished;
        $this->isBusy = $isBusy;
        $this->shadowVApp = $shadowVApp;
        $this->primaryVMCatalog = $primaryVMCatalog;
        $this->primaryVAppName = $primaryVAppName;
        $this->primaryVAppTemplate = $primaryVAppTemplate;
        $this->primaryVmName = $primaryVmName;
        $this->primaryVM = $primaryVM;
        $this->vcName = $vcName;
        $this->tagName = 'AdminShadowVMRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_primaryVMOwner(){
        return $this->primaryVMOwner;
    }
    public function set_primaryVMOwner($primaryVMOwner) {
        $this->primaryVMOwner = $primaryVMOwner;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_isDeleted(){
        return $this->isDeleted;
    }
    public function set_isDeleted($isDeleted) {
        $this->isDeleted = $isDeleted;
    }
    public function get_datastoreName(){
        return $this->datastoreName;
    }
    public function set_datastoreName($datastoreName) {
        $this->datastoreName = $datastoreName;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_isPublished(){
        return $this->isPublished;
    }
    public function set_isPublished($isPublished) {
        $this->isPublished = $isPublished;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
    }
    public function get_shadowVApp(){
        return $this->shadowVApp;
    }
    public function set_shadowVApp($shadowVApp) {
        $this->shadowVApp = $shadowVApp;
    }
    public function get_primaryVMCatalog(){
        return $this->primaryVMCatalog;
    }
    public function set_primaryVMCatalog($primaryVMCatalog) {
        $this->primaryVMCatalog = $primaryVMCatalog;
    }
    public function get_primaryVAppName(){
        return $this->primaryVAppName;
    }
    public function set_primaryVAppName($primaryVAppName) {
        $this->primaryVAppName = $primaryVAppName;
    }
    public function get_primaryVAppTemplate(){
        return $this->primaryVAppTemplate;
    }
    public function set_primaryVAppTemplate($primaryVAppTemplate) {
        $this->primaryVAppTemplate = $primaryVAppTemplate;
    }
    public function get_primaryVmName(){
        return $this->primaryVmName;
    }
    public function set_primaryVmName($primaryVmName) {
        $this->primaryVmName = $primaryVmName;
    }
    public function get_primaryVM(){
        return $this->primaryVM;
    }
    public function set_primaryVM($primaryVM) {
        $this->primaryVM = $primaryVM;
    }
    public function get_vcName(){
        return $this->vcName;
    }
    public function set_vcName($vcName) {
        $this->vcName = $vcName;
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
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->primaryVMOwner)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'primaryVMOwner', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'primaryVMOwner=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->primaryVMOwner, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='primaryVMOwner')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->isDeleted)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isDeleted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isDeleted=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isDeleted, $input_name='isDeleted')));
        }
        if (!is_null($this->datastoreName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'datastoreName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'datastoreName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->datastoreName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='datastoreName')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->isPublished)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isPublished', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isPublished=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isPublished, $input_name='isPublished')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->shadowVApp)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'shadowVApp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'shadowVApp=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->shadowVApp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='shadowVApp')));
        }
        if (!is_null($this->primaryVMCatalog)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'primaryVMCatalog', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'primaryVMCatalog=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->primaryVMCatalog, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='primaryVMCatalog')));
        }
        if (!is_null($this->primaryVAppName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'primaryVAppName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'primaryVAppName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->primaryVAppName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='primaryVAppName')));
        }
        if (!is_null($this->primaryVAppTemplate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'primaryVAppTemplate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'primaryVAppTemplate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->primaryVAppTemplate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='primaryVAppTemplate')));
        }
        if (!is_null($this->primaryVmName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'primaryVmName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'primaryVmName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->primaryVmName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='primaryVmName')));
        }
        if (!is_null($this->primaryVM)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'primaryVM', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'primaryVM=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->primaryVM, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='primaryVM')));
        }
        if (!is_null($this->vcName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vcName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vcName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vcName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vcName')));
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
        $ndprimaryVMOwner = $attrs->getNamedItem('primaryVMOwner');
        if (!is_null($ndprimaryVMOwner)) {
            $this->primaryVMOwner = $ndprimaryVMOwner->value;
            if (isset($ndprimaryVMOwner->prefix)) {
                $this->namespace['primaryVMOwner'] = $ndprimaryVMOwner->prefix;
                $nsUri = $ndprimaryVMOwner->lookupNamespaceURI($ndprimaryVMOwner->prefix);
            }
            $node->removeAttributeNS($nsUri, 'primaryVMOwner');
        } else {
            $this->primaryVMOwner = null;
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
        $ndshadowVApp = $attrs->getNamedItem('shadowVApp');
        if (!is_null($ndshadowVApp)) {
            $this->shadowVApp = $ndshadowVApp->value;
            if (isset($ndshadowVApp->prefix)) {
                $this->namespace['shadowVApp'] = $ndshadowVApp->prefix;
                $nsUri = $ndshadowVApp->lookupNamespaceURI($ndshadowVApp->prefix);
            }
            $node->removeAttributeNS($nsUri, 'shadowVApp');
        } else {
            $this->shadowVApp = null;
        }
        $ndprimaryVMCatalog = $attrs->getNamedItem('primaryVMCatalog');
        if (!is_null($ndprimaryVMCatalog)) {
            $this->primaryVMCatalog = $ndprimaryVMCatalog->value;
            if (isset($ndprimaryVMCatalog->prefix)) {
                $this->namespace['primaryVMCatalog'] = $ndprimaryVMCatalog->prefix;
                $nsUri = $ndprimaryVMCatalog->lookupNamespaceURI($ndprimaryVMCatalog->prefix);
            }
            $node->removeAttributeNS($nsUri, 'primaryVMCatalog');
        } else {
            $this->primaryVMCatalog = null;
        }
        $ndprimaryVAppName = $attrs->getNamedItem('primaryVAppName');
        if (!is_null($ndprimaryVAppName)) {
            $this->primaryVAppName = $ndprimaryVAppName->value;
            if (isset($ndprimaryVAppName->prefix)) {
                $this->namespace['primaryVAppName'] = $ndprimaryVAppName->prefix;
                $nsUri = $ndprimaryVAppName->lookupNamespaceURI($ndprimaryVAppName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'primaryVAppName');
        } else {
            $this->primaryVAppName = null;
        }
        $ndprimaryVAppTemplate = $attrs->getNamedItem('primaryVAppTemplate');
        if (!is_null($ndprimaryVAppTemplate)) {
            $this->primaryVAppTemplate = $ndprimaryVAppTemplate->value;
            if (isset($ndprimaryVAppTemplate->prefix)) {
                $this->namespace['primaryVAppTemplate'] = $ndprimaryVAppTemplate->prefix;
                $nsUri = $ndprimaryVAppTemplate->lookupNamespaceURI($ndprimaryVAppTemplate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'primaryVAppTemplate');
        } else {
            $this->primaryVAppTemplate = null;
        }
        $ndprimaryVmName = $attrs->getNamedItem('primaryVmName');
        if (!is_null($ndprimaryVmName)) {
            $this->primaryVmName = $ndprimaryVmName->value;
            if (isset($ndprimaryVmName->prefix)) {
                $this->namespace['primaryVmName'] = $ndprimaryVmName->prefix;
                $nsUri = $ndprimaryVmName->lookupNamespaceURI($ndprimaryVmName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'primaryVmName');
        } else {
            $this->primaryVmName = null;
        }
        $ndprimaryVM = $attrs->getNamedItem('primaryVM');
        if (!is_null($ndprimaryVM)) {
            $this->primaryVM = $ndprimaryVM->value;
            if (isset($ndprimaryVM->prefix)) {
                $this->namespace['primaryVM'] = $ndprimaryVM->prefix;
                $nsUri = $ndprimaryVM->lookupNamespaceURI($ndprimaryVM->prefix);
            }
            $node->removeAttributeNS($nsUri, 'primaryVM');
        } else {
            $this->primaryVM = null;
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}