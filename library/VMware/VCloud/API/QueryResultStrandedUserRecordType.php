<?php
class VMware_VCloud_API_QueryResultStrandedUserRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $name = null;
    protected $numberOfStoredVMs = null;
    protected $numberOfDeployedVMs = null;
    protected $isInSync = null;
    protected $org = null;
    protected $fullName = null;
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
    * @param string $name - [optional] an attribute, 
    * @param int $numberOfStoredVMs - [optional] an attribute, 
    * @param int $numberOfDeployedVMs - [optional] an attribute, 
    * @param boolean $isInSync - [optional] an attribute, 
    * @param string $org - [optional] an attribute, 
    * @param string $fullName - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $name=null, $numberOfStoredVMs=null, $numberOfDeployedVMs=null, $isInSync=null, $org=null, $fullName=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->name = $name;
        $this->numberOfStoredVMs = $numberOfStoredVMs;
        $this->numberOfDeployedVMs = $numberOfDeployedVMs;
        $this->isInSync = $isInSync;
        $this->org = $org;
        $this->fullName = $fullName;
        $this->tagName = 'StrandedUserRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_numberOfStoredVMs(){
        return $this->numberOfStoredVMs;
    }
    public function set_numberOfStoredVMs($numberOfStoredVMs) {
        $this->numberOfStoredVMs = $numberOfStoredVMs;
    }
    public function get_numberOfDeployedVMs(){
        return $this->numberOfDeployedVMs;
    }
    public function set_numberOfDeployedVMs($numberOfDeployedVMs) {
        $this->numberOfDeployedVMs = $numberOfDeployedVMs;
    }
    public function get_isInSync(){
        return $this->isInSync;
    }
    public function set_isInSync($isInSync) {
        $this->isInSync = $isInSync;
    }
    public function get_org(){
        return $this->org;
    }
    public function set_org($org) {
        $this->org = $org;
    }
    public function get_fullName(){
        return $this->fullName;
    }
    public function set_fullName($fullName) {
        $this->fullName = $fullName;
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
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->numberOfStoredVMs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfStoredVMs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfStoredVMs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfStoredVMs, $input_name='numberOfStoredVMs')));
        }
        if (!is_null($this->numberOfDeployedVMs)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfDeployedVMs', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfDeployedVMs=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfDeployedVMs, $input_name='numberOfDeployedVMs')));
        }
        if (!is_null($this->isInSync)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isInSync', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isInSync=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isInSync, $input_name='isInSync')));
        }
        if (!is_null($this->org)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'org', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'org=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->org, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='org')));
        }
        if (!is_null($this->fullName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'fullName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'fullName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->fullName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='fullName')));
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
        $ndnumberOfStoredVMs = $attrs->getNamedItem('numberOfStoredVMs');
        if (!is_null($ndnumberOfStoredVMs)) {
            $this->numberOfStoredVMs = sprintf('%d', $ndnumberOfStoredVMs->value);
            if (isset($ndnumberOfStoredVMs->prefix)) {
                $this->namespace['numberOfStoredVMs'] = $ndnumberOfStoredVMs->prefix;
                $nsUri = $ndnumberOfStoredVMs->lookupNamespaceURI($ndnumberOfStoredVMs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfStoredVMs');
        } else {
            $this->numberOfStoredVMs = null;
        }
        $ndnumberOfDeployedVMs = $attrs->getNamedItem('numberOfDeployedVMs');
        if (!is_null($ndnumberOfDeployedVMs)) {
            $this->numberOfDeployedVMs = sprintf('%d', $ndnumberOfDeployedVMs->value);
            if (isset($ndnumberOfDeployedVMs->prefix)) {
                $this->namespace['numberOfDeployedVMs'] = $ndnumberOfDeployedVMs->prefix;
                $nsUri = $ndnumberOfDeployedVMs->lookupNamespaceURI($ndnumberOfDeployedVMs->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfDeployedVMs');
        } else {
            $this->numberOfDeployedVMs = null;
        }
        $ndisInSync = $attrs->getNamedItem('isInSync');
        if (!is_null($ndisInSync)) {
            $this->isInSync = VMware_VCloud_API_Helper::get_boolean($ndisInSync->value);
            if (isset($ndisInSync->prefix)) {
                $this->namespace['isInSync'] = $ndisInSync->prefix;
                $nsUri = $ndisInSync->lookupNamespaceURI($ndisInSync->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isInSync');
        } else {
            $this->isInSync = null;
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
        $ndfullName = $attrs->getNamedItem('fullName');
        if (!is_null($ndfullName)) {
            $this->fullName = $ndfullName->value;
            if (isset($ndfullName->prefix)) {
                $this->namespace['fullName'] = $ndfullName->prefix;
                $nsUri = $ndfullName->lookupNamespaceURI($ndfullName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'fullName');
        } else {
            $this->fullName = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}