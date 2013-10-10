<?php
class VMware_VCloud_API_CatalogItemType extends VMware_VCloud_API_EntityType {
    protected $size = null;
    protected $Entity = null;
    protected $Property = array();
    protected $DateCreated = null;
    protected $VersionNumber = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param long $size - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $Entity - [required]
    * @param array $Property - [optional] an array of VMware_VCloud_API_PropertyType objects
    * @param string $DateCreated - [optional] 
    * @param int $VersionNumber - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $size=null, $Entity=null, $Property=null, $DateCreated=null, $VersionNumber=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->size = $size;
        $this->Entity = $Entity;
        if (!is_null($Property)) {
            $this->Property = $Property;
        }
        $this->DateCreated = $DateCreated;
        $this->VersionNumber = $VersionNumber;
        $this->tagName = 'CatalogItem';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getEntity() {
        return $this->Entity;
    }
    public function setEntity($Entity) { 
        $this->Entity = $Entity;
    }
    public function getProperty() {
        return $this->Property;
    }
    public function setProperty($Property) { 
        $this->Property = $Property;
    }
    public function addProperty($value) { array_push($this->Property, $value); }
    public function getDateCreated() {
        return $this->DateCreated;
    }
    public function setDateCreated($DateCreated) { 
        $this->DateCreated = $DateCreated;
    }
    public function getVersionNumber() {
        return $this->VersionNumber;
    }
    public function setVersionNumber($VersionNumber) { 
        $this->VersionNumber = $VersionNumber;
    }
    public function get_size(){
        return $this->size;
    }
    public function set_size($size) {
        $this->size = $size;
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
        if (!is_null($this->size)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'size', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'size=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->size, $input_name='size')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Entity)) {
            $out = $this->Entity->export('Entity', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Property)) {
            foreach ($this->Property as $Property) {
                $out = $Property->export('Property', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->DateCreated)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DateCreated', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DateCreated>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DateCreated, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DateCreated')) . "</" . $ns . "DateCreated>\n");
        }
        if (!is_null($this->VersionNumber)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VersionNumber', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VersionNumber>" . VMware_VCloud_API_Helper::format_integer($this->VersionNumber, $input_name='VersionNumber') . "</" . $ns . "VersionNumber>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Entity) ||
            !empty($this->Property) ||
            !is_null($this->DateCreated) ||
            !is_null($this->VersionNumber) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Entity') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Entity');
            $this->setEntity($obj);
            if (!empty($namespace)) {
                $this->namespace['Entity'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Property') {
            $obj = new VMware_VCloud_API_PropertyType();
            $obj->build($child);
            $obj->set_tagName('Property');
            array_push($this->Property, $obj);
            if (!empty($namespace)) {
                $this->namespace['Property'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DateCreated') {
            $sval = $child->nodeValue;
            $this->DateCreated = $sval;
            if (!empty($namespace)) {
                $this->namespace['DateCreated'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VersionNumber') {
            $sval = $child->nodeValue;
            $this->VersionNumber = $sval;
            if (!empty($namespace)) {
                $this->namespace['VersionNumber'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}