<?php
class VMware_VCloud_API_Entry {
    protected $storageProfile = null;
    protected $datastorePath = null;
    protected $biosUuid = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param string $storageProfile - [optional] an attribute, 
    * @param string $datastorePath - [optional] an attribute, 
    * @param string $biosUuid - [optional] an attribute, 
    * @param string $valueOf - [optional]
    */
    public function __construct($storageProfile=null, $datastorePath=null, $biosUuid=null, $valueOf='') {
        $this->storageProfile = $storageProfile;
        $this->datastorePath = $datastorePath;
        $this->biosUuid = $biosUuid;
        $this->valueOf = $valueOf;
        $this->tagName = 'Entry';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_storageProfile(){
        return $this->storageProfile;
    }
    public function set_storageProfile($storageProfile) {
        $this->storageProfile = $storageProfile;
    }
    public function get_datastorePath(){
        return $this->datastorePath;
    }
    public function set_datastorePath($datastorePath) {
        $this->datastorePath = $datastorePath;
    }
    public function get_biosUuid(){
        return $this->biosUuid;
    }
    public function set_biosUuid($biosUuid) {
        $this->biosUuid = $biosUuid;
    }
    public function get_valueOf() { return $this->valueOf; }
    public function set_valueOf($valueOf) { $this->valueOf = $valueOf; }
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
            $out = VMware_VCloud_API_Helper::addString($out, ">");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->storageProfile)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'storageProfile', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'storageProfile=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->storageProfile, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='storageProfile')));
        }
        if (!is_null($this->datastorePath)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'datastorePath', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'datastorePath=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->datastorePath, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='datastorePath')));
        }
        if (!is_null($this->biosUuid)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'biosUuid', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'biosUuid=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->biosUuid, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='biosUuid')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->valueOf)) {
            $out = VMware_VCloud_API_Helper::addString($out, VMware_VCloud_API_Helper::quote_xml($this->valueOf));
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->valueOf)
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
        $this->valueOf = '';
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
        $ndstorageProfile = $attrs->getNamedItem('storageProfile');
        if (!is_null($ndstorageProfile)) {
            $this->storageProfile = $ndstorageProfile->value;
            if (isset($ndstorageProfile->prefix)) {
                $this->namespace['storageProfile'] = $ndstorageProfile->prefix;
                $nsUri = $ndstorageProfile->lookupNamespaceURI($ndstorageProfile->prefix);
            }
            $node->removeAttributeNS($nsUri, 'storageProfile');
        } else {
            $this->storageProfile = null;
        }
        $nddatastorePath = $attrs->getNamedItem('datastorePath');
        if (!is_null($nddatastorePath)) {
            $this->datastorePath = $nddatastorePath->value;
            if (isset($nddatastorePath->prefix)) {
                $this->namespace['datastorePath'] = $nddatastorePath->prefix;
                $nsUri = $nddatastorePath->lookupNamespaceURI($nddatastorePath->prefix);
            }
            $node->removeAttributeNS($nsUri, 'datastorePath');
        } else {
            $this->datastorePath = null;
        }
        $ndbiosUuid = $attrs->getNamedItem('biosUuid');
        if (!is_null($ndbiosUuid)) {
            $this->biosUuid = $ndbiosUuid->value;
            if (isset($ndbiosUuid->prefix)) {
                $this->namespace['biosUuid'] = $ndbiosUuid->prefix;
                $nsUri = $ndbiosUuid->lookupNamespaceURI($ndbiosUuid->prefix);
            }
            $node->removeAttributeNS($nsUri, 'biosUuid');
        } else {
            $this->biosUuid = null;
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_TEXT_NODE) {
            $this->valueOf = $child->nodeValue;
            $this->tagName = $nodeName;
        }
    }
}