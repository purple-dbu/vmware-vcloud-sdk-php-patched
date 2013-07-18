<?php
class VMware_VCloud_API_QueryResultCellRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $name = null;
    protected $version = null;
    protected $isVMwareVc = null;
    protected $primaryIp = null;
    protected $isActive = null;
    protected $buildDate = null;
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
    * @param string $version - [optional] an attribute, 
    * @param int $isVMwareVc - [optional] an attribute, 
    * @param string $primaryIp - [optional] an attribute, 
    * @param int $isActive - [optional] an attribute, 
    * @param dateTime $buildDate - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $name=null, $version=null, $isVMwareVc=null, $primaryIp=null, $isActive=null, $buildDate=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->name = $name;
        $this->version = $version;
        $this->isVMwareVc = $isVMwareVc;
        $this->primaryIp = $primaryIp;
        $this->isActive = $isActive;
        $this->buildDate = $buildDate;
        $this->tagName = 'CellRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_version(){
        return $this->version;
    }
    public function set_version($version) {
        $this->version = $version;
    }
    public function get_isVMwareVc(){
        return $this->isVMwareVc;
    }
    public function set_isVMwareVc($isVMwareVc) {
        $this->isVMwareVc = $isVMwareVc;
    }
    public function get_primaryIp(){
        return $this->primaryIp;
    }
    public function set_primaryIp($primaryIp) {
        $this->primaryIp = $primaryIp;
    }
    public function get_isActive(){
        return $this->isActive;
    }
    public function set_isActive($isActive) {
        $this->isActive = $isActive;
    }
    public function get_buildDate(){
        return $this->buildDate;
    }
    public function set_buildDate($buildDate) {
        $this->buildDate = $buildDate;
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
        if (!is_null($this->version)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'version', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'version=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->version, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='version')));
        }
        if (!is_null($this->isVMwareVc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isVMwareVc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isVMwareVc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->isVMwareVc, $input_name='isVMwareVc')));
        }
        if (!is_null($this->primaryIp)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'primaryIp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'primaryIp=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->primaryIp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='primaryIp')));
        }
        if (!is_null($this->isActive)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isActive', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isActive=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->isActive, $input_name='isActive')));
        }
        if (!is_null($this->buildDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'buildDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'buildDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->buildDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='buildDate')));
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
        $ndversion = $attrs->getNamedItem('version');
        if (!is_null($ndversion)) {
            $this->version = $ndversion->value;
            if (isset($ndversion->prefix)) {
                $this->namespace['version'] = $ndversion->prefix;
                $nsUri = $ndversion->lookupNamespaceURI($ndversion->prefix);
            }
            $node->removeAttributeNS($nsUri, 'version');
        } else {
            $this->version = null;
        }
        $ndisVMwareVc = $attrs->getNamedItem('isVMwareVc');
        if (!is_null($ndisVMwareVc)) {
            $this->isVMwareVc = sprintf('%d', $ndisVMwareVc->value);
            if (isset($ndisVMwareVc->prefix)) {
                $this->namespace['isVMwareVc'] = $ndisVMwareVc->prefix;
                $nsUri = $ndisVMwareVc->lookupNamespaceURI($ndisVMwareVc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isVMwareVc');
        } else {
            $this->isVMwareVc = null;
        }
        $ndprimaryIp = $attrs->getNamedItem('primaryIp');
        if (!is_null($ndprimaryIp)) {
            $this->primaryIp = $ndprimaryIp->value;
            if (isset($ndprimaryIp->prefix)) {
                $this->namespace['primaryIp'] = $ndprimaryIp->prefix;
                $nsUri = $ndprimaryIp->lookupNamespaceURI($ndprimaryIp->prefix);
            }
            $node->removeAttributeNS($nsUri, 'primaryIp');
        } else {
            $this->primaryIp = null;
        }
        $ndisActive = $attrs->getNamedItem('isActive');
        if (!is_null($ndisActive)) {
            $this->isActive = sprintf('%d', $ndisActive->value);
            if (isset($ndisActive->prefix)) {
                $this->namespace['isActive'] = $ndisActive->prefix;
                $nsUri = $ndisActive->lookupNamespaceURI($ndisActive->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isActive');
        } else {
            $this->isActive = null;
        }
        $ndbuildDate = $attrs->getNamedItem('buildDate');
        if (!is_null($ndbuildDate)) {
            $this->buildDate = $ndbuildDate->value;
            if (isset($ndbuildDate->prefix)) {
                $this->namespace['buildDate'] = $ndbuildDate->prefix;
                $nsUri = $ndbuildDate->lookupNamespaceURI($ndbuildDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'buildDate');
        } else {
            $this->buildDate = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}