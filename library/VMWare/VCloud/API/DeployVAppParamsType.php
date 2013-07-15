<?php
class VMware_VCloud_API_DeployVAppParamsType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $forceCustomization = null;
    protected $powerOn = null;
    protected $deploymentLeaseSeconds = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param boolean $forceCustomization - [optional] an attribute, 
    * @param boolean $powerOn - [optional] an attribute, 
    * @param int $deploymentLeaseSeconds - [optional] an attribute, 
    */
    public function __construct($VCloudExtension=null, $forceCustomization=null, $powerOn=null, $deploymentLeaseSeconds=null) {
        parent::__construct($VCloudExtension);
        $this->forceCustomization = $forceCustomization;
        $this->powerOn = $powerOn;
        $this->deploymentLeaseSeconds = $deploymentLeaseSeconds;
        $this->tagName = 'DeployVAppParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_forceCustomization(){
        return $this->forceCustomization;
    }
    public function set_forceCustomization($forceCustomization) {
        $this->forceCustomization = $forceCustomization;
    }
    public function get_powerOn(){
        return $this->powerOn;
    }
    public function set_powerOn($powerOn) {
        $this->powerOn = $powerOn;
    }
    public function get_deploymentLeaseSeconds(){
        return $this->deploymentLeaseSeconds;
    }
    public function set_deploymentLeaseSeconds($deploymentLeaseSeconds) {
        $this->deploymentLeaseSeconds = $deploymentLeaseSeconds;
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
        if (!is_null($this->forceCustomization)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'forceCustomization', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'forceCustomization=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->forceCustomization, $input_name='forceCustomization')));
        }
        if (!is_null($this->powerOn)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'powerOn', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'powerOn=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->powerOn, $input_name='powerOn')));
        }
        if (!is_null($this->deploymentLeaseSeconds)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'deploymentLeaseSeconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'deploymentLeaseSeconds=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->deploymentLeaseSeconds, $input_name='deploymentLeaseSeconds')));
        }
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
        $ndforceCustomization = $attrs->getNamedItem('forceCustomization');
        if (!is_null($ndforceCustomization)) {
            $this->forceCustomization = VMware_VCloud_API_Helper::get_boolean($ndforceCustomization->value);
            if (isset($ndforceCustomization->prefix)) {
                $this->namespace['forceCustomization'] = $ndforceCustomization->prefix;
                $nsUri = $ndforceCustomization->lookupNamespaceURI($ndforceCustomization->prefix);
            }
            $node->removeAttributeNS($nsUri, 'forceCustomization');
        } else {
            $this->forceCustomization = null;
        }
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
        $nddeploymentLeaseSeconds = $attrs->getNamedItem('deploymentLeaseSeconds');
        if (!is_null($nddeploymentLeaseSeconds)) {
            $this->deploymentLeaseSeconds = sprintf('%d', $nddeploymentLeaseSeconds->value);
            if (isset($nddeploymentLeaseSeconds->prefix)) {
                $this->namespace['deploymentLeaseSeconds'] = $nddeploymentLeaseSeconds->prefix;
                $nsUri = $nddeploymentLeaseSeconds->lookupNamespaceURI($nddeploymentLeaseSeconds->prefix);
            }
            $node->removeAttributeNS($nsUri, 'deploymentLeaseSeconds');
        } else {
            $this->deploymentLeaseSeconds = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}