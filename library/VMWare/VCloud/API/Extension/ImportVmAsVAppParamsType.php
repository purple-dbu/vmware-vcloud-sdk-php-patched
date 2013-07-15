<?php
class VMware_VCloud_API_Extension_ImportVmAsVAppParamsType extends VMware_VCloud_API_VAppCreationParamsType {
    protected $sourceMove = null;
    protected $VmName = null;
    protected $VAppScopedLocalId = null;
    protected $ComputerName = null;
    protected $VmMoRef = null;
    protected $VdcStorageProfile = null;
    protected $Vdc = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param boolean $powerOn - [optional] an attribute, 
    * @param boolean $deploy - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $VAppParent - [optional]
    * @param VMware_VCloud_API_InstantiationParamsType $InstantiationParams - [optional]
    * @param boolean $sourceMove - [optional] an attribute, default 'false'
    * @param string $VmName - [optional] 
    * @param string $VAppScopedLocalId - [optional] 
    * @param string $ComputerName - [optional] 
    * @param string $VmMoRef - [required] 
    * @param VMware_VCloud_API_ReferenceType $VdcStorageProfile - [optional]
    * @param VMware_VCloud_API_ReferenceType $Vdc - [required]
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $powerOn=null, $deploy=null, $VAppParent=null, $InstantiationParams=null, $sourceMove=False, $VmName=null, $VAppScopedLocalId=null, $ComputerName=null, $VmMoRef=null, $VdcStorageProfile=null, $Vdc=null) {
        parent::__construct($VCloudExtension, $name, $Description, $powerOn, $deploy, $VAppParent, $InstantiationParams);
        $this->sourceMove = $sourceMove;
        $this->VmName = $VmName;
        $this->VAppScopedLocalId = $VAppScopedLocalId;
        $this->ComputerName = $ComputerName;
        $this->VmMoRef = $VmMoRef;
        $this->VdcStorageProfile = $VdcStorageProfile;
        $this->Vdc = $Vdc;
        $this->tagName = 'ImportVmAsVAppParams';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVmName() {
        return $this->VmName;
    }
    public function setVmName($VmName) { 
        $this->VmName = $VmName;
    }
    public function getVAppScopedLocalId() {
        return $this->VAppScopedLocalId;
    }
    public function setVAppScopedLocalId($VAppScopedLocalId) { 
        $this->VAppScopedLocalId = $VAppScopedLocalId;
    }
    public function getComputerName() {
        return $this->ComputerName;
    }
    public function setComputerName($ComputerName) { 
        $this->ComputerName = $ComputerName;
    }
    public function getVmMoRef() {
        return $this->VmMoRef;
    }
    public function setVmMoRef($VmMoRef) { 
        $this->VmMoRef = $VmMoRef;
    }
    public function getVdcStorageProfile() {
        return $this->VdcStorageProfile;
    }
    public function setVdcStorageProfile($VdcStorageProfile) { 
        $this->VdcStorageProfile = $VdcStorageProfile;
    }
    public function getVdc() {
        return $this->Vdc;
    }
    public function setVdc($Vdc) { 
        $this->Vdc = $Vdc;
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
        if (!is_null($this->VmName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VmName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VmName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VmName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VmName')) . "</" . $ns . "VmName>\n");
        }
        if (!is_null($this->VAppScopedLocalId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VAppScopedLocalId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VAppScopedLocalId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VAppScopedLocalId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VAppScopedLocalId')) . "</" . $ns . "VAppScopedLocalId>\n");
        }
        if (!is_null($this->ComputerName)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ComputerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ComputerName>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ComputerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ComputerName')) . "</" . $ns . "ComputerName>\n");
        }
        if (!is_null($this->VmMoRef)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'VmMoRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "VmMoRef>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->VmMoRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='VmMoRef')) . "</" . $ns . "VmMoRef>\n");
        }
        if (!is_null($this->VdcStorageProfile)) {
            $out = $this->VdcStorageProfile->export('VdcStorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->Vdc)) {
            $out = $this->Vdc->export('Vdc', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VmName) ||
            !is_null($this->VAppScopedLocalId) ||
            !is_null($this->ComputerName) ||
            !is_null($this->VmMoRef) ||
            !is_null($this->VdcStorageProfile) ||
            !is_null($this->Vdc) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmName') {
            $sval = $child->nodeValue;
            $this->VmName = $sval;
            if (!empty($namespace)) {
                $this->namespace['VmName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppScopedLocalId') {
            $sval = $child->nodeValue;
            $this->VAppScopedLocalId = $sval;
            if (!empty($namespace)) {
                $this->namespace['VAppScopedLocalId'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ComputerName') {
            $sval = $child->nodeValue;
            $this->ComputerName = $sval;
            if (!empty($namespace)) {
                $this->namespace['ComputerName'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VmMoRef') {
            $sval = $child->nodeValue;
            $this->VmMoRef = $sval;
            if (!empty($namespace)) {
                $this->namespace['VmMoRef'] = $namespace;
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
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Vdc') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Vdc');
            $this->setVdc($obj);
            if (!empty($namespace)) {
                $this->namespace['Vdc'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}