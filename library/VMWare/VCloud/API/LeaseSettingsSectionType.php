<?php
class VMware_VCloud_API_LeaseSettingsSectionType extends VMware_VCloud_API_OVF_Section_Type {
    protected $href = null;
    protected $type = null;
    protected $Link = array();
    protected $DeploymentLeaseInSeconds = null;
    protected $StorageLeaseInSeconds = null;
    protected $DeploymentLeaseExpiration = null;
    protected $StorageLeaseExpiration = null;
    protected $Any = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param string $required - [optional] an attribute, 
    * @param VMware_VCloud_API_OVF_Msg_Type $Info - [required]
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param int $DeploymentLeaseInSeconds - [optional] 
    * @param int $StorageLeaseInSeconds - [optional] 
    * @param string $DeploymentLeaseExpiration - [optional] 
    * @param string $StorageLeaseExpiration - [optional] 
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($required=null, $Info=null, $href=null, $type=null, $Link=null, $DeploymentLeaseInSeconds=null, $StorageLeaseInSeconds=null, $DeploymentLeaseExpiration=null, $StorageLeaseExpiration=null, $Any=null) {
        parent::__construct($required, $Info);
        $this->href = $href;
        $this->type = $type;
        if (!is_null($Link)) {
            $this->Link = $Link;
        }
        $this->DeploymentLeaseInSeconds = $DeploymentLeaseInSeconds;
        $this->StorageLeaseInSeconds = $StorageLeaseInSeconds;
        $this->DeploymentLeaseExpiration = $DeploymentLeaseExpiration;
        $this->StorageLeaseExpiration = $StorageLeaseExpiration;
        if (!is_null($Any)) {
            $this->Any = $Any;
        }
        $this->tagName = 'LeaseSettingsSection';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getLink() {
        return $this->Link;
    }
    public function setLink($Link) { 
        $this->Link = $Link;
    }
    public function addLink($value) { array_push($this->Link, $value); }
    public function getDeploymentLeaseInSeconds() {
        return $this->DeploymentLeaseInSeconds;
    }
    public function setDeploymentLeaseInSeconds($DeploymentLeaseInSeconds) { 
        $this->DeploymentLeaseInSeconds = $DeploymentLeaseInSeconds;
    }
    public function getStorageLeaseInSeconds() {
        return $this->StorageLeaseInSeconds;
    }
    public function setStorageLeaseInSeconds($StorageLeaseInSeconds) { 
        $this->StorageLeaseInSeconds = $StorageLeaseInSeconds;
    }
    public function getDeploymentLeaseExpiration() {
        return $this->DeploymentLeaseExpiration;
    }
    public function setDeploymentLeaseExpiration($DeploymentLeaseExpiration) { 
        $this->DeploymentLeaseExpiration = $DeploymentLeaseExpiration;
    }
    public function getStorageLeaseExpiration() {
        return $this->StorageLeaseExpiration;
    }
    public function setStorageLeaseExpiration($StorageLeaseExpiration) { 
        $this->StorageLeaseExpiration = $StorageLeaseExpiration;
    }
    public function getAny() {
        return $this->Any;
    }
    public function setAny($Any) { 
        $this->Any = $Any;
    }
    public function addAny($value) { array_push($this->Any, $value); }
    public function get_href(){
        return $this->href;
    }
    public function set_href($href) {
        $this->href = $href;
    }
    public function get_type(){
        return $this->type;
    }
    public function set_type($type) {
        $this->type = $type;
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
        if (!is_null($this->href)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'href', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'href=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->href, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='href')));
        }
        if (!is_null($this->type)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'type', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'type=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->type, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='type')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (isset($this->Link)) {
            foreach ($this->Link as $Link) {
                $out = $Link->export('Link', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->DeploymentLeaseInSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DeploymentLeaseInSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DeploymentLeaseInSeconds>" . VMware_VCloud_API_Helper::format_integer($this->DeploymentLeaseInSeconds, $input_name='DeploymentLeaseInSeconds') . "</" . $ns . "DeploymentLeaseInSeconds>\n");
        }
        if (!is_null($this->StorageLeaseInSeconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'StorageLeaseInSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "StorageLeaseInSeconds>" . VMware_VCloud_API_Helper::format_integer($this->StorageLeaseInSeconds, $input_name='StorageLeaseInSeconds') . "</" . $ns . "StorageLeaseInSeconds>\n");
        }
        if (!is_null($this->DeploymentLeaseExpiration)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DeploymentLeaseExpiration', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DeploymentLeaseExpiration>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DeploymentLeaseExpiration, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DeploymentLeaseExpiration')) . "</" . $ns . "DeploymentLeaseExpiration>\n");
        }
        if (!is_null($this->StorageLeaseExpiration)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'StorageLeaseExpiration', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "StorageLeaseExpiration>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->StorageLeaseExpiration, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='StorageLeaseExpiration')) . "</" . $ns . "StorageLeaseExpiration>\n");
        }
        if (isset($this->Any)) {
            foreach ($this->Any as $Any) {
                if ($Any instanceof SimpleXMLElement) {
                    $elementName = $Any->getName();
                    if (!in_array($elementName, array('Info'))) {
                        $out = VMware_VCloud_API_Helper::showIndent($out, $level);
                        $out = VMware_VCloud_API_Helper::addString($out, $Any->asXML() . "\n");
                    }
                } else {
                    $tagName = $Any->get_tagName();
                    $namespace = $Any::$defaultNS;
                    $out = $Any->export($tagName, $out, $level, '', $namespace, $rootNS);
                }
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Link) ||
            !is_null($this->DeploymentLeaseInSeconds) ||
            !is_null($this->StorageLeaseInSeconds) ||
            !is_null($this->DeploymentLeaseExpiration) ||
            !is_null($this->StorageLeaseExpiration) ||
            !empty($this->Any) ||
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
        $ndhref = $attrs->getNamedItem('href');
        if (!is_null($ndhref)) {
            $this->href = $ndhref->value;
            if (isset($ndhref->prefix)) {
                $this->namespace['href'] = $ndhref->prefix;
                $nsUri = $ndhref->lookupNamespaceURI($ndhref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'href');
        } else {
            $this->href = null;
        }
        $ndtype = $attrs->getNamedItem('type');
        if (!is_null($ndtype)) {
            $this->type = $ndtype->value;
            if (isset($ndtype->prefix)) {
                $this->namespace['type'] = $ndtype->prefix;
                $nsUri = $ndtype->lookupNamespaceURI($ndtype->prefix);
            }
            $node->removeAttributeNS($nsUri, 'type');
        } else {
            $this->type = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Link') {
            $obj = new VMware_VCloud_API_LinkType();
            $obj->build($child);
            $obj->set_tagName('Link');
            array_push($this->Link, $obj);
            if (!empty($namespace)) {
                $this->namespace['Link'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeploymentLeaseInSeconds') {
            $sval = $child->nodeValue;
            $this->DeploymentLeaseInSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['DeploymentLeaseInSeconds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StorageLeaseInSeconds') {
            $sval = $child->nodeValue;
            $this->StorageLeaseInSeconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['StorageLeaseInSeconds'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeploymentLeaseExpiration') {
            $sval = $child->nodeValue;
            $this->DeploymentLeaseExpiration = $sval;
            if (!empty($namespace)) {
                $this->namespace['DeploymentLeaseExpiration'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StorageLeaseExpiration') {
            $sval = $child->nodeValue;
            $this->StorageLeaseExpiration = $sval;
            if (!empty($namespace)) {
                $this->namespace['StorageLeaseExpiration'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && !in_array($nodeName, array('Info'))) {
            $type = VMware_VCloud_API_Helper::getClassName($nodeName);
            if (class_exists($type) && method_exists($type, 'build')) {
                $class = new ReflectionClass($type);
                if ($class->isInstantiable()) {
                    $obj = $class->newInstance();
                    $obj->build($child);
                    $obj->set_tagName($nodeName);
                }
            } else {
                $obj = simplexml_import_dom($child);
            }
            array_push($this->Any, $obj);
            if (!empty($namespace)) {
                $this->namespace['Any'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}