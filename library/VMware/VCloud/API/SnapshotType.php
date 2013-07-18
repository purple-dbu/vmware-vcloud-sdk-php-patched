<?php
class VMware_VCloud_API_SnapshotType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $poweredOn = null;
    protected $size = null;
    protected $created = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $poweredOn - [required] an attribute, 
    * @param long $size - [required] an attribute, 
    * @param dateTime $created - [required] an attribute, 
    */
    public function __construct($VCloudExtension=null, $poweredOn=null, $size=null, $created=null) {
        parent::__construct($VCloudExtension);
        $this->poweredOn = $poweredOn;
        $this->size = $size;
        $this->created = $created;
        $this->tagName = 'Snapshot';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_poweredOn(){
        return $this->poweredOn;
    }
    public function set_poweredOn($poweredOn) {
        $this->poweredOn = $poweredOn;
    }
    public function get_size(){
        return $this->size;
    }
    public function set_size($size) {
        $this->size = $size;
    }
    public function get_created(){
        return $this->created;
    }
    public function set_created($created) {
        $this->created = $created;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'poweredOn', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'poweredOn=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->poweredOn, $input_name='poweredOn')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'size', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'size=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->size, $input_name='size')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'created', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'created=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->created, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='created')));
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
        $ndpoweredOn = $attrs->getNamedItem('poweredOn');
        if (!is_null($ndpoweredOn)) {
            $this->poweredOn = VMware_VCloud_API_Helper::get_boolean($ndpoweredOn->value);
            if (isset($ndpoweredOn->prefix)) {
                $this->namespace['poweredOn'] = $ndpoweredOn->prefix;
                $nsUri = $ndpoweredOn->lookupNamespaceURI($ndpoweredOn->prefix);
            }
            $node->removeAttributeNS($nsUri, 'poweredOn');
        } else {
            $this->poweredOn = null;
        }
        $ndsize = $attrs->getNamedItem('size');
        if (!is_null($ndsize)) {
            $this->size = sprintf('%d', $ndsize->value);
            if (isset($ndsize->prefix)) {
                $this->namespace['size'] = $ndsize->prefix;
                $nsUri = $ndsize->lookupNamespaceURI($ndsize->prefix);
            }
            $node->removeAttributeNS($nsUri, 'size');
        } else {
            $this->size = null;
        }
        $ndcreated = $attrs->getNamedItem('created');
        if (!is_null($ndcreated)) {
            $this->created = $ndcreated->value;
            if (isset($ndcreated->prefix)) {
                $this->namespace['created'] = $ndcreated->prefix;
                $nsUri = $ndcreated->lookupNamespaceURI($ndcreated->prefix);
            }
            $node->removeAttributeNS($nsUri, 'created');
        } else {
            $this->created = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}