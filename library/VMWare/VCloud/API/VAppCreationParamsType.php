<?php
class VMware_VCloud_API_VAppCreationParamsType extends VMware_VCloud_API_ParamsType {
    protected $powerOn = null;
    protected $deploy = null;
    protected $VAppParent = null;
    protected $InstantiationParams = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param boolean $powerOn - [optional] an attribute, 
    * @param boolean $deploy - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $VAppParent - [optional]
    * @param VMware_VCloud_API_InstantiationParamsType $InstantiationParams - [optional]
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $powerOn=null, $deploy=null, $VAppParent=null, $InstantiationParams=null) {
        parent::__construct($VCloudExtension, $name, $Description);
        $this->powerOn = $powerOn;
        $this->deploy = $deploy;
        $this->VAppParent = $VAppParent;
        $this->InstantiationParams = $InstantiationParams;
        $this->tagName = '';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVAppParent() {
        return $this->VAppParent;
    }
    public function setVAppParent($VAppParent) { 
        $this->VAppParent = $VAppParent;
    }
    public function getInstantiationParams() {
        return $this->InstantiationParams;
    }
    public function setInstantiationParams($InstantiationParams) { 
        $this->InstantiationParams = $InstantiationParams;
    }
    public function get_powerOn(){
        return $this->powerOn;
    }
    public function set_powerOn($powerOn) {
        $this->powerOn = $powerOn;
    }
    public function get_deploy(){
        return $this->deploy;
    }
    public function set_deploy($deploy) {
        $this->deploy = $deploy;
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
        if (!is_null($this->powerOn)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'powerOn', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'powerOn=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->powerOn, $input_name='powerOn')));
        }
        if (!is_null($this->deploy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'deploy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'deploy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->deploy, $input_name='deploy')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->VAppParent)) {
            $out = $this->VAppParent->export('VAppParent', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->InstantiationParams)) {
            $out = $this->InstantiationParams->export('InstantiationParams', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->VAppParent) ||
            !is_null($this->InstantiationParams) ||
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
        $ndpowerOn = $attrs->getNamedItem('powerOn');
        if (!is_null($ndpowerOn)) {
            $this->powerOn = VMware_VCloud_API_Helper::get_boolean($ndpowerOn->value);
            if (isset($ndpowerOn->prefix)) {
                $this->namespace['powerOn'] = $ndpowerOn->prefix;
                $nsUri = $ndpowerOn->lookupNamespaceURI($ndpowerOn->prefix);
            }
            $node->removeAttributeNS($nsUri, 'powerOn');
        } else {
            $this->powerOn = null;
        }
        $nddeploy = $attrs->getNamedItem('deploy');
        if (!is_null($nddeploy)) {
            $this->deploy = VMware_VCloud_API_Helper::get_boolean($nddeploy->value);
            if (isset($nddeploy->prefix)) {
                $this->namespace['deploy'] = $nddeploy->prefix;
                $nsUri = $nddeploy->lookupNamespaceURI($nddeploy->prefix);
            }
            $node->removeAttributeNS($nsUri, 'deploy');
        } else {
            $this->deploy = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppParent') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VAppParent');
            $this->setVAppParent($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppParent'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstantiationParams') {
            $obj = new VMware_VCloud_API_InstantiationParamsType();
            $obj->build($child);
            $obj->set_tagName('InstantiationParams');
            $this->setInstantiationParams($obj);
            if (!empty($namespace)) {
                $this->namespace['InstantiationParams'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}