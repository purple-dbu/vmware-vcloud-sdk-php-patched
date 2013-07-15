<?php
class VMware_VCloud_API_Extension_ImportMediaParamsType extends VMware_VCloud_API_ParamsType {
    protected $sourceMove = null;
    protected $DatastoreMoRef = null;
    protected $SourcePath = null;
    protected $Vdc = null;
    protected $Catalog = null;
    protected $VdcStorageProfile = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param boolean $sourceMove - [optional] an attribute, default 'false'
    * @param string $DatastoreMoRef - [required] 
    * @param string $SourcePath - [required] 
    * @param VMware_VCloud_API_ReferenceType $Vdc - [required]
    * @param VMware_VCloud_API_ReferenceType $Catalog - [optional]
    * @param VMware_VCloud_API_ReferenceType $VdcStorageProfile - [optional]
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $sourceMove=False, $DatastoreMoRef=null, $SourcePath=null, $Vdc=null, $Catalog=null, $VdcStorageProfile=null) {
        parent::__construct($VCloudExtension, $name, $Description);
        $this->sourceMove = $sourceMove;
        $this->DatastoreMoRef = $DatastoreMoRef;
        $this->SourcePath = $SourcePath;
        $this->Vdc = $Vdc;
        $this->Catalog = $Catalog;
        $this->VdcStorageProfile = $VdcStorageProfile;
        $this->tagName = 'ImportMediaParams';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDatastoreMoRef() {
        return $this->DatastoreMoRef;
    }
    public function setDatastoreMoRef($DatastoreMoRef) { 
        $this->DatastoreMoRef = $DatastoreMoRef;
    }
    public function getSourcePath() {
        return $this->SourcePath;
    }
    public function setSourcePath($SourcePath) { 
        $this->SourcePath = $SourcePath;
    }
    public function getVdc() {
        return $this->Vdc;
    }
    public function setVdc($Vdc) { 
        $this->Vdc = $Vdc;
    }
    public function getCatalog() {
        return $this->Catalog;
    }
    public function setCatalog($Catalog) { 
        $this->Catalog = $Catalog;
    }
    public function getVdcStorageProfile() {
        return $this->VdcStorageProfile;
    }
    public function setVdcStorageProfile($VdcStorageProfile) { 
        $this->VdcStorageProfile = $VdcStorageProfile;
    }
    public function get_sourceMove(){
        return $this->sourceMove;
    }
    public function set_sourceMove($sourceMove) {
        $this->sourceMove = $sourceMove;
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
        if (!is_null($this->sourceMove)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'sourceMove', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'sourceMove=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->sourceMove, $input_name='sourceMove')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->DatastoreMoRef)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DatastoreMoRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DatastoreMoRef>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DatastoreMoRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DatastoreMoRef')) . "</" . $ns . "DatastoreMoRef>\n");
        }
        if (!is_null($this->SourcePath)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SourcePath', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SourcePath>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SourcePath, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SourcePath')) . "</" . $ns . "SourcePath>\n");
        }
        if (!is_null($this->Vdc)) {
            $out = $this->Vdc->export('Vdc', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Catalog)) {
            $out = $this->Catalog->export('Catalog', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VdcStorageProfile)) {
            $out = $this->VdcStorageProfile->export('VdcStorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->DatastoreMoRef) ||
            !is_null($this->SourcePath) ||
            !is_null($this->Vdc) ||
            !is_null($this->Catalog) ||
            !is_null($this->VdcStorageProfile) ||
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
        $ndsourceMove = $attrs->getNamedItem('sourceMove');
        if (!is_null($ndsourceMove)) {
            $this->sourceMove = VMware_VCloud_API_Helper::get_boolean($ndsourceMove->value);
            if (isset($ndsourceMove->prefix)) {
                $this->namespace['sourceMove'] = $ndsourceMove->prefix;
                $nsUri = $ndsourceMove->lookupNamespaceURI($ndsourceMove->prefix);
            }
            $node->removeAttributeNS($nsUri, 'sourceMove');
        } else {
            $this->sourceMove = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DatastoreMoRef') {
            $sval = $child->nodeValue;
            $this->DatastoreMoRef = $sval;
            if (!empty($namespace)) {
                $this->namespace['DatastoreMoRef'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SourcePath') {
            $sval = $child->nodeValue;
            $this->SourcePath = $sval;
            if (!empty($namespace)) {
                $this->namespace['SourcePath'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Vdc') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Vdc');
            $this->setVdc($obj);
            if (!empty($namespace)) {
                $this->namespace['Vdc'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Catalog') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Catalog');
            $this->setCatalog($obj);
            if (!empty($namespace)) {
                $this->namespace['Catalog'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VdcStorageProfile') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VdcStorageProfile');
            $this->setVdcStorageProfile($obj);
            if (!empty($namespace)) {
                $this->namespace['VdcStorageProfile'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}