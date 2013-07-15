<?php
class VMware_VCloud_API_ErrorType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $vendorSpecificErrorCode = null;
    protected $stackTrace = null;
    protected $message = null;
    protected $minorErrorCode = null;
    protected $majorErrorCode = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $vendorSpecificErrorCode - [optional] an attribute, 
    * @param string $stackTrace - [optional] an attribute, 
    * @param string $message - [required] an attribute, 
    * @param string $minorErrorCode - [required] an attribute, 
    * @param int $majorErrorCode - [required] an attribute, 
    */
    public function __construct($VCloudExtension=null, $vendorSpecificErrorCode=null, $stackTrace=null, $message=null, $minorErrorCode=null, $majorErrorCode=null) {
        parent::__construct($VCloudExtension);
        $this->vendorSpecificErrorCode = $vendorSpecificErrorCode;
        $this->stackTrace = $stackTrace;
        $this->message = $message;
        $this->minorErrorCode = $minorErrorCode;
        $this->majorErrorCode = $majorErrorCode;
        $this->tagName = 'Error';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_vendorSpecificErrorCode(){
        return $this->vendorSpecificErrorCode;
    }
    public function set_vendorSpecificErrorCode($vendorSpecificErrorCode) {
        $this->vendorSpecificErrorCode = $vendorSpecificErrorCode;
    }
    public function get_stackTrace(){
        return $this->stackTrace;
    }
    public function set_stackTrace($stackTrace) {
        $this->stackTrace = $stackTrace;
    }
    public function get_message(){
        return $this->message;
    }
    public function set_message($message) {
        $this->message = $message;
    }
    public function get_minorErrorCode(){
        return $this->minorErrorCode;
    }
    public function set_minorErrorCode($minorErrorCode) {
        $this->minorErrorCode = $minorErrorCode;
    }
    public function get_majorErrorCode(){
        return $this->majorErrorCode;
    }
    public function set_majorErrorCode($majorErrorCode) {
        $this->majorErrorCode = $majorErrorCode;
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
        if (!is_null($this->vendorSpecificErrorCode)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vendorSpecificErrorCode', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vendorSpecificErrorCode=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vendorSpecificErrorCode, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vendorSpecificErrorCode')));
        }
        if (!is_null($this->stackTrace)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'stackTrace', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'stackTrace=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->stackTrace, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='stackTrace')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'message', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'message=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->message, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='message')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'minorErrorCode', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'minorErrorCode=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->minorErrorCode, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='minorErrorCode')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'majorErrorCode', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'majorErrorCode=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->majorErrorCode, $input_name='majorErrorCode')));
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
        $ndvendorSpecificErrorCode = $attrs->getNamedItem('vendorSpecificErrorCode');
        if (!is_null($ndvendorSpecificErrorCode)) {
            $this->vendorSpecificErrorCode = $ndvendorSpecificErrorCode->value;
            if (isset($ndvendorSpecificErrorCode->prefix)) {
                $this->namespace['vendorSpecificErrorCode'] = $ndvendorSpecificErrorCode->prefix;
                $nsUri = $ndvendorSpecificErrorCode->lookupNamespaceURI($ndvendorSpecificErrorCode->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vendorSpecificErrorCode');
        } else {
            $this->vendorSpecificErrorCode = null;
        }
        $ndstackTrace = $attrs->getNamedItem('stackTrace');
        if (!is_null($ndstackTrace)) {
            $this->stackTrace = $ndstackTrace->value;
            if (isset($ndstackTrace->prefix)) {
                $this->namespace['stackTrace'] = $ndstackTrace->prefix;
                $nsUri = $ndstackTrace->lookupNamespaceURI($ndstackTrace->prefix);
            }
            $node->removeAttributeNS($nsUri, 'stackTrace');
        } else {
            $this->stackTrace = null;
        }
        $ndmessage = $attrs->getNamedItem('message');
        if (!is_null($ndmessage)) {
            $this->message = $ndmessage->value;
            if (isset($ndmessage->prefix)) {
                $this->namespace['message'] = $ndmessage->prefix;
                $nsUri = $ndmessage->lookupNamespaceURI($ndmessage->prefix);
            }
            $node->removeAttributeNS($nsUri, 'message');
        } else {
            $this->message = null;
        }
        $ndminorErrorCode = $attrs->getNamedItem('minorErrorCode');
        if (!is_null($ndminorErrorCode)) {
            $this->minorErrorCode = $ndminorErrorCode->value;
            if (isset($ndminorErrorCode->prefix)) {
                $this->namespace['minorErrorCode'] = $ndminorErrorCode->prefix;
                $nsUri = $ndminorErrorCode->lookupNamespaceURI($ndminorErrorCode->prefix);
            }
            $node->removeAttributeNS($nsUri, 'minorErrorCode');
        } else {
            $this->minorErrorCode = null;
        }
        $ndmajorErrorCode = $attrs->getNamedItem('majorErrorCode');
        if (!is_null($ndmajorErrorCode)) {
            $this->majorErrorCode = sprintf('%d', $ndmajorErrorCode->value);
            if (isset($ndmajorErrorCode->prefix)) {
                $this->namespace['majorErrorCode'] = $ndmajorErrorCode->prefix;
                $nsUri = $ndmajorErrorCode->lookupNamespaceURI($ndmajorErrorCode->prefix);
            }
            $node->removeAttributeNS($nsUri, 'majorErrorCode');
        } else {
            $this->majorErrorCode = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}