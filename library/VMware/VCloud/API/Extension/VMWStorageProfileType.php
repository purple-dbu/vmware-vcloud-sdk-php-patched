<?php
class VMware_VCloud_API_Extension_VMWStorageProfileType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $name = null;
    protected $MoRef = null;
    protected $VimObjectType = null;
    protected $FreeStorageMb = null;
    protected $TotalStorageMb = null;
    protected $DataStoreRefs = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [required] an attribute, 
    * @param string $MoRef - [optional] 
    * @param string $VimObjectType - [optional] 
    * @param float $FreeStorageMb - [optional] 
    * @param float $TotalStorageMb - [optional] 
    * @param VMware_VCloud_API_Extension_VimObjectRefsType $DataStoreRefs - [optional]
    */
    public function __construct($VCloudExtension=null, $name=null, $MoRef=null, $VimObjectType=null, $FreeStorageMb=null, $TotalStorageMb=null, $DataStoreRefs=null) {
        parent::__construct($VCloudExtension);
        $this->name = $name;
        $this->MoRef = $MoRef;
        $this->VimObjectType = $VimObjectType;
        $this->FreeStorageMb = $FreeStorageMb;
        $this->TotalStorageMb = $TotalStorageMb;
        $this->DataStoreRefs = $DataStoreRefs;
        $this->tagName = 'VMWStorageProfile';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getMoRef() {
        return $this->MoRef;
    }
    public function setMoRef($MoRef) { 
        $this->MoRef = $MoRef;
    }
    public function getVimObjectType() {
        return $this->VimObjectType;
    }
    public function setVimObjectType($VimObjectType) { 
        $this->VimObjectType = $VimObjectType;
    }
    public function getFreeStorageMb() {
        return $this->FreeStorageMb;
    }
    public function setFreeStorageMb($FreeStorageMb) { 
        $this->FreeStorageMb = $FreeStorageMb;
    }
    public function getTotalStorageMb() {
        return $this->TotalStorageMb;
    }
    public function setTotalStorageMb($TotalStorageMb) { 
        $this->TotalStorageMb = $TotalStorageMb;
    }
    public function getDataStoreRefs() {
        return $this->DataStoreRefs;
    }
    public function setDataStoreRefs($DataStoreRefs) { 
        $this->DataStoreRefs = $DataStoreRefs;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->MoRef)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MoRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MoRef>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MoRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MoRef')) . "</" . $ns . "MoRef>\n");
        }
        if (!is_null($this->VimObjectType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VimObjectType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VimObjectType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VimObjectType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VimObjectType')) . "</" . $ns . "VimObjectType>\n");
        }
        if (!is_null($this->FreeStorageMb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'FreeStorageMb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "FreeStorageMb>" . VMware_VCloud_API_Helper::format_double($this->FreeStorageMb, $input_name='FreeStorageMb') . "</" . $ns . "FreeStorageMb>\n");
        }
        if (!is_null($this->TotalStorageMb)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'TotalStorageMb', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "TotalStorageMb>" . VMware_VCloud_API_Helper::format_double($this->TotalStorageMb, $input_name='TotalStorageMb') . "</" . $ns . "TotalStorageMb>\n");
        }
        if (!is_null($this->DataStoreRefs)) {
            $out = $this->DataStoreRefs->export('DataStoreRefs', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->MoRef) ||
            !is_null($this->VimObjectType) ||
            !is_null($this->FreeStorageMb) ||
            !is_null($this->TotalStorageMb) ||
            !is_null($this->DataStoreRefs) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MoRef') {
            $sval = $child->nodeValue;
            $this->MoRef = $sval;
            if (!empty($namespace)) {
                $this->namespace['MoRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimObjectType') {
            $sval = $child->nodeValue;
            $this->VimObjectType = $sval;
            if (!empty($namespace)) {
                $this->namespace['VimObjectType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FreeStorageMb') {
            $sval = $child->nodeValue;
            $this->FreeStorageMb = $sval;
            if (!empty($namespace)) {
                $this->namespace['FreeStorageMb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TotalStorageMb') {
            $sval = $child->nodeValue;
            $this->TotalStorageMb = $sval;
            if (!empty($namespace)) {
                $this->namespace['TotalStorageMb'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DataStoreRefs') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefsType();
            $obj->build($child);
            $obj->set_tagName('DataStoreRefs');
            $this->setDataStoreRefs($obj);
            if (!empty($namespace)) {
                $this->namespace['DataStoreRefs'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}