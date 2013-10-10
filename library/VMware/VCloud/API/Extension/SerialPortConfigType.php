<?php
class VMware_VCloud_API_Extension_SerialPortConfigType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Status = null;
    protected $StartConnected = null;
    protected $AllowGuestControl = null;
    protected $Direction = null;
    protected $ServiceUri = null;
    protected $YieldOnPoll = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Status - [optional] 
    * @param boolean $StartConnected - [optional] 
    * @param boolean $AllowGuestControl - [required] 
    * @param string $Direction - [required] 
    * @param string $ServiceUri - [required] 
    * @param boolean $YieldOnPoll - [required] 
    */
    public function __construct($VCloudExtension=null, $Status=null, $StartConnected=null, $AllowGuestControl=null, $Direction=null, $ServiceUri=null, $YieldOnPoll=null) {
        parent::__construct($VCloudExtension);
        $this->Status = $Status;
        $this->StartConnected = $StartConnected;
        $this->AllowGuestControl = $AllowGuestControl;
        $this->Direction = $Direction;
        $this->ServiceUri = $ServiceUri;
        $this->YieldOnPoll = $YieldOnPoll;
        $this->tagName = 'SerialPortConfigType';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getStatus() {
        return $this->Status;
    }
    public function setStatus($Status) { 
        $this->Status = $Status;
    }
    public function getStartConnected() {
        return $this->StartConnected;
    }
    public function setStartConnected($StartConnected) { 
        $this->StartConnected = $StartConnected;
    }
    public function getAllowGuestControl() {
        return $this->AllowGuestControl;
    }
    public function setAllowGuestControl($AllowGuestControl) { 
        $this->AllowGuestControl = $AllowGuestControl;
    }
    public function getDirection() {
        return $this->Direction;
    }
    public function setDirection($Direction) { 
        $this->Direction = $Direction;
    }
    public function getServiceUri() {
        return $this->ServiceUri;
    }
    public function setServiceUri($ServiceUri) { 
        $this->ServiceUri = $ServiceUri;
    }
    public function getYieldOnPoll() {
        return $this->YieldOnPoll;
    }
    public function setYieldOnPoll($YieldOnPoll) { 
        $this->YieldOnPoll = $YieldOnPoll;
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->Status)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Status>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Status')) . "</" . $ns . "Status>\n");
        }
        if (!is_null($this->StartConnected)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'StartConnected', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "StartConnected>" . VMware_VCloud_API_Helper::format_boolean($this->StartConnected, $input_name='StartConnected') . "</" . $ns . "StartConnected>\n");
        }
        if (!is_null($this->AllowGuestControl)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'AllowGuestControl', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "AllowGuestControl>" . VMware_VCloud_API_Helper::format_boolean($this->AllowGuestControl, $input_name='AllowGuestControl') . "</" . $ns . "AllowGuestControl>\n");
     }
        if (!is_null($this->Direction)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Direction', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Direction>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Direction, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Direction')) . "</" . $ns . "Direction>\n");
        }
        if (!is_null($this->ServiceUri)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ServiceUri', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ServiceUri>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ServiceUri, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ServiceUri')) . "</" . $ns . "ServiceUri>\n");
        }
        if (!is_null($this->YieldOnPoll)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'YieldOnPoll', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "YieldOnPoll>" . VMware_VCloud_API_Helper::format_boolean($this->YieldOnPoll, $input_name='YieldOnPoll') . "</" . $ns . "YieldOnPoll>\n");
     }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Status) ||
            !is_null($this->StartConnected) ||
            !is_null($this->AllowGuestControl) ||
            !is_null($this->Direction) ||
            !is_null($this->ServiceUri) ||
            !is_null($this->YieldOnPoll) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Status') {
            $sval = $child->nodeValue;
            $this->Status = $sval;
            if (!empty($namespace)) {
                $this->namespace['Status'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StartConnected') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->StartConnected = $sval;
            if (!empty($namespace)) {
                $this->namespace['StartConnected'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AllowGuestControl') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->AllowGuestControl = $sval;
            if (!empty($namespace)) {
                $this->namespace['AllowGuestControl'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Direction') {
            $sval = $child->nodeValue;
            $this->Direction = $sval;
            if (!empty($namespace)) {
                $this->namespace['Direction'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceUri') {
            $sval = $child->nodeValue;
            $this->ServiceUri = $sval;
            if (!empty($namespace)) {
                $this->namespace['ServiceUri'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'YieldOnPoll') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->YieldOnPoll = $sval;
            if (!empty($namespace)) {
                $this->namespace['YieldOnPoll'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}