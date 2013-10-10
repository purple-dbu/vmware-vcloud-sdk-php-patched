<?php
class VMware_VCloud_API_Extension_CatalogSettingsType extends VMware_VCloud_API_ResourceType {
    protected $isSyncEnabled = null;
    protected $SyncStartDate = null;
    protected $SyncStopDate = null;
    protected $RefreshInterval = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param boolean $isSyncEnabled - [required] 
    * @param string $SyncStartDate - [optional] 
    * @param string $SyncStopDate - [optional] 
    * @param int $RefreshInterval - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $isSyncEnabled=null, $SyncStartDate=null, $SyncStopDate=null, $RefreshInterval=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->isSyncEnabled = $isSyncEnabled;
        $this->SyncStartDate = $SyncStartDate;
        $this->SyncStopDate = $SyncStopDate;
        $this->RefreshInterval = $RefreshInterval;
        $this->tagName = 'CatalogSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_isSyncEnabled() {
        return $this->isSyncEnabled;
    }
    public function set_isSyncEnabled($isSyncEnabled) { 
        $this->isSyncEnabled = $isSyncEnabled;
    }
    public function getSyncStartDate() {
        return $this->SyncStartDate;
    }
    public function setSyncStartDate($SyncStartDate) { 
        $this->SyncStartDate = $SyncStartDate;
    }
    public function getSyncStopDate() {
        return $this->SyncStopDate;
    }
    public function setSyncStopDate($SyncStopDate) { 
        $this->SyncStopDate = $SyncStopDate;
    }
    public function getRefreshInterval() {
        return $this->RefreshInterval;
    }
    public function setRefreshInterval($RefreshInterval) { 
        $this->RefreshInterval = $RefreshInterval;
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
        if (!is_null($this->isSyncEnabled)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'isSyncEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "isSyncEnabled>" . VMware_VCloud_API_Helper::format_boolean($this->isSyncEnabled, $input_name='isSyncEnabled') . "</" . $ns . "isSyncEnabled>\n");
     }
        if (!is_null($this->SyncStartDate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SyncStartDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SyncStartDate>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SyncStartDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SyncStartDate')) . "</" . $ns . "SyncStartDate>\n");
        }
        if (!is_null($this->SyncStopDate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SyncStopDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SyncStopDate>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SyncStopDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SyncStopDate')) . "</" . $ns . "SyncStopDate>\n");
        }
        if (!is_null($this->RefreshInterval)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'RefreshInterval', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "RefreshInterval>" . VMware_VCloud_API_Helper::format_integer($this->RefreshInterval, $input_name='RefreshInterval') . "</" . $ns . "RefreshInterval>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->isSyncEnabled) ||
            !is_null($this->SyncStartDate) ||
            !is_null($this->SyncStopDate) ||
            !is_null($this->RefreshInterval) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'isSyncEnabled') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->isSyncEnabled = $sval;
            if (!empty($namespace)) {
                $this->namespace['isSyncEnabled'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SyncStartDate') {
            $sval = $child->nodeValue;
            $this->SyncStartDate = $sval;
            if (!empty($namespace)) {
                $this->namespace['SyncStartDate'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SyncStopDate') {
            $sval = $child->nodeValue;
            $this->SyncStopDate = $sval;
            if (!empty($namespace)) {
                $this->namespace['SyncStopDate'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RefreshInterval') {
            $sval = $child->nodeValue;
            $this->RefreshInterval = $sval;
            if (!empty($namespace)) {
                $this->namespace['RefreshInterval'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}