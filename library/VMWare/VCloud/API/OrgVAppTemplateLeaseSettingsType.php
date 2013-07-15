<?php
class VMware_VCloud_API_OrgVAppTemplateLeaseSettingsType extends VMware_VCloud_API_ResourceType {
    protected $DeleteOnStorageLeaseExpiration = null;
    protected $StorageLeaseSeconds = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param boolean $DeleteOnStorageLeaseExpiration - [optional] 
    * @param int $StorageLeaseSeconds - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $DeleteOnStorageLeaseExpiration=null, $StorageLeaseSeconds=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->DeleteOnStorageLeaseExpiration = $DeleteOnStorageLeaseExpiration;
        $this->StorageLeaseSeconds = $StorageLeaseSeconds;
        $this->tagName = 'OrgVAppTemplateLeaseSettings';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getDeleteOnStorageLeaseExpiration() {
        return $this->DeleteOnStorageLeaseExpiration;
    }
    public function setDeleteOnStorageLeaseExpiration($DeleteOnStorageLeaseExpiration) { 
        $this->DeleteOnStorageLeaseExpiration = $DeleteOnStorageLeaseExpiration;
    }
    public function getStorageLeaseSeconds() {
        return $this->StorageLeaseSeconds;
    }
    public function setStorageLeaseSeconds($StorageLeaseSeconds) { 
        $this->StorageLeaseSeconds = $StorageLeaseSeconds;
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
        if (!is_null($this->DeleteOnStorageLeaseExpiration)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DeleteOnStorageLeaseExpiration', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DeleteOnStorageLeaseExpiration>" . VMware_VCloud_API_Helper::format_boolean($this->DeleteOnStorageLeaseExpiration, $input_name='DeleteOnStorageLeaseExpiration') . "</" . $ns . "DeleteOnStorageLeaseExpiration>\n");
        }
        if (!is_null($this->StorageLeaseSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'StorageLeaseSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "StorageLeaseSeconds>" . VMware_VCloud_API_Helper::format_integer($this->StorageLeaseSeconds, $input_name='StorageLeaseSeconds') . "</" . $ns . "StorageLeaseSeconds>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->DeleteOnStorageLeaseExpiration) ||
            !is_null($this->StorageLeaseSeconds) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeleteOnStorageLeaseExpiration') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->DeleteOnStorageLeaseExpiration = $sval;
            if (!empty($namespace)) {
                $this->namespace['DeleteOnStorageLeaseExpiration'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StorageLeaseSeconds') {
            $sval = $child->nodeValue;
            $this->StorageLeaseSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['StorageLeaseSeconds'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}