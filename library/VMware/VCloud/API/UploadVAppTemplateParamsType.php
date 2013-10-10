<?php
class VMware_VCloud_API_UploadVAppTemplateParamsType extends VMware_VCloud_API_ParamsType {
    protected $manifestRequired = null;
    protected $transferFormat = null;
    protected $sourceHref = null;
    protected $VdcStorageProfile = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $name - [optional] an attribute, 
    * @param string $Description - [optional] 
    * @param boolean $manifestRequired - [optional] an attribute, 
    * @param string $transferFormat - [optional] an attribute, 
    * @param anyURI $sourceHref - [optional] an attribute, 
    * @param VMware_VCloud_API_ReferenceType $VdcStorageProfile - [optional]
    */
    public function __construct($VCloudExtension=null, $name=null, $Description=null, $manifestRequired=null, $transferFormat=null, $sourceHref=null, $VdcStorageProfile=null) {
        parent::__construct($VCloudExtension, $name, $Description);
        $this->manifestRequired = $manifestRequired;
        $this->transferFormat = $transferFormat;
        $this->sourceHref = $sourceHref;
        $this->VdcStorageProfile = $VdcStorageProfile;
        $this->tagName = 'UploadVAppTemplateParams';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getVdcStorageProfile() {
        return $this->VdcStorageProfile;
    }
    public function setVdcStorageProfile($VdcStorageProfile) { 
        $this->VdcStorageProfile = $VdcStorageProfile;
    }
    public function get_manifestRequired(){
        return $this->manifestRequired;
    }
    public function set_manifestRequired($manifestRequired) {
        $this->manifestRequired = $manifestRequired;
    }
    public function get_transferFormat(){
        return $this->transferFormat;
    }
    public function set_transferFormat($transferFormat) {
        $this->transferFormat = $transferFormat;
    }
    public function get_sourceHref(){
        return $this->sourceHref;
    }
    public function set_sourceHref($sourceHref) {
        $this->sourceHref = $sourceHref;
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
        if (!is_null($this->manifestRequired)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'manifestRequired', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'manifestRequired=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->manifestRequired, $input_name='manifestRequired')));
        }
        if (!is_null($this->transferFormat)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'transferFormat', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'transferFormat=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->transferFormat, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='transferFormat')));
        }
        if (!is_null($this->sourceHref)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'sourceHref', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'sourceHref=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->sourceHref, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='sourceHref')));
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->VdcStorageProfile)) {
            $out = $this->VdcStorageProfile->export('VdcStorageProfile', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
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
        $ndmanifestRequired = $attrs->getNamedItem('manifestRequired');
        if (!is_null($ndmanifestRequired)) {
            $this->manifestRequired = VMware_VCloud_API_Helper::get_boolean($ndmanifestRequired->value);
            if (isset($ndmanifestRequired->prefix)) {
                $this->namespace['manifestRequired'] = $ndmanifestRequired->prefix;
                $nsUri = $ndmanifestRequired->lookupNamespaceURI($ndmanifestRequired->prefix);
            }
            $node->removeAttributeNS($nsUri, 'manifestRequired');
        } else {
            $this->manifestRequired = null;
        }
        $ndtransferFormat = $attrs->getNamedItem('transferFormat');
        if (!is_null($ndtransferFormat)) {
            $this->transferFormat = $ndtransferFormat->value;
            if (isset($ndtransferFormat->prefix)) {
                $this->namespace['transferFormat'] = $ndtransferFormat->prefix;
                $nsUri = $ndtransferFormat->lookupNamespaceURI($ndtransferFormat->prefix);
            }
            $node->removeAttributeNS($nsUri, 'transferFormat');
        } else {
            $this->transferFormat = null;
        }
        $ndsourceHref = $attrs->getNamedItem('sourceHref');
        if (!is_null($ndsourceHref)) {
            $this->sourceHref = $ndsourceHref->value;
            if (isset($ndsourceHref->prefix)) {
                $this->namespace['sourceHref'] = $ndsourceHref->prefix;
                $nsUri = $ndsourceHref->lookupNamespaceURI($ndsourceHref->prefix);
            }
            $node->removeAttributeNS($nsUri, 'sourceHref');
        } else {
            $this->sourceHref = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VdcStorageProfile') {
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