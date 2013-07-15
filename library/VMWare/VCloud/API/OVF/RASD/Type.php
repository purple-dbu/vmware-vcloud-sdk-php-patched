<?php
class VMware_VCloud_API_OVF_RASD_Type extends VMware_VCloud_API_OVF_CIM_ResourceAllocationSettingData_Type {
    protected $required = null;
    protected $bound = null;
    protected $configuration = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param VMware_VCloud_API_OVF_cimString $Address - [optional]
    * @param VMware_VCloud_API_OVF_cimString $AddressOnParent - [optional]
    * @param VMware_VCloud_API_OVF_cimString $AllocationUnits - [optional]
    * @param VMware_VCloud_API_OVF_cimBoolean $AutomaticAllocation - [optional]
    * @param VMware_VCloud_API_OVF_cimBoolean $AutomaticDeallocation - [optional]
    * @param VMware_VCloud_API_OVF_Caption $Caption - [optional]
    * @param VMware_VCloud_API_OVF_ChangeableType $ChangeableType - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationName - [optional]
    * @param array $Connection - [optional] an array of VMware_VCloud_API_OVF_cimString objects
    * @param VMware_VCloud_API_OVF_ConsumerVisibility $ConsumerVisibility - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Description - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ElementName - [required]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $Generation - [optional]
    * @param array $HostResource - [optional] an array of VMware_VCloud_API_OVF_cimString objects
    * @param VMware_VCloud_API_OVF_cimString $InstanceID - [required]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $Limit - [optional]
    * @param VMware_VCloud_API_OVF_MappingBehavior $MappingBehavior - [optional]
    * @param VMware_VCloud_API_OVF_cimString $OtherResourceType - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Parent - [optional]
    * @param VMware_VCloud_API_OVF_cimString $PoolID - [optional]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $Reservation - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ResourceSubType - [optional]
    * @param VMware_VCloud_API_OVF_ResourceType $ResourceType - [optional]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $VirtualQuantity - [optional]
    * @param VMware_VCloud_API_OVF_cimString $VirtualQuantityUnits - [optional]
    * @param VMware_VCloud_API_OVF_cimUnsignedInt $Weight - [optional]
    * @param array $Any - [optional] an array of any type of objects
    * @param boolean $required - [optional] an attribute, default 'true'
    * @param string $bound - [optional] an attribute, 
    * @param string $configuration - [optional] an attribute, 
    */
    public function __construct($Address=null, $AddressOnParent=null, $AllocationUnits=null, $AutomaticAllocation=null, $AutomaticDeallocation=null, $Caption=null, $ChangeableType=null, $ConfigurationName=null, $Connection=null, $ConsumerVisibility=null, $Description=null, $ElementName=null, $Generation=null, $HostResource=null, $InstanceID=null, $Limit=null, $MappingBehavior=null, $OtherResourceType=null, $Parent=null, $PoolID=null, $Reservation=null, $ResourceSubType=null, $ResourceType=null, $VirtualQuantity=null, $VirtualQuantityUnits=null, $Weight=null, $Any=null, $required=True, $bound=null, $configuration=null) {
        parent::__construct($Address, $AddressOnParent, $AllocationUnits, $AutomaticAllocation, $AutomaticDeallocation, $Caption, $ChangeableType, $ConfigurationName, $Connection, $ConsumerVisibility, $Description, $ElementName, $Generation, $HostResource, $InstanceID, $Limit, $MappingBehavior, $OtherResourceType, $Parent, $PoolID, $Reservation, $ResourceSubType, $ResourceType, $VirtualQuantity, $VirtualQuantityUnits, $Weight, $Any);
        $this->required = $required;
        $this->bound = $bound;
        $this->configuration = $configuration;
        $this->anyAttributes = array();
        $this->tagName = 'Item';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_required(){
        return $this->required;
    }
    public function set_required($required) {
        $this->required = $required;
    }
    public function get_bound(){
        return $this->bound;
    }
    public function set_bound($bound) {
        $this->bound = $bound;
    }
    public function get_configuration(){
        return $this->configuration;
    }
    public function set_configuration($configuration) {
        $this->configuration = $configuration;
    }
    public function get_anyAttributes() { return $this->anyAttributes; }
    public function set_anyAttributes($anyAttributes) { $this->anyAttributes = $anyAttributes; }
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
        if (!is_null($this->required)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'required', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'required=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->required, $input_name='required')));
        }
        if (!is_null($this->bound)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'bound', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'bound=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->bound, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='bound')));
        }
        if (!is_null($this->configuration)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'configuration', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'configuration=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->configuration, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='configuration')));
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
        $ndrequired = $attrs->getNamedItem('required');
        if (!is_null($ndrequired)) {
            $this->required = VMware_VCloud_API_Helper::get_boolean($ndrequired->value);
            if (isset($ndrequired->prefix)) {
                $this->namespace['required'] = $ndrequired->prefix;
                $nsUri = $ndrequired->lookupNamespaceURI($ndrequired->prefix);
            }
            $node->removeAttributeNS($nsUri, 'required');
        } else {
            $this->required = null;
        }
        $ndbound = $attrs->getNamedItem('bound');
        if (!is_null($ndbound)) {
            $this->bound = $ndbound->value;
            if (isset($ndbound->prefix)) {
                $this->namespace['bound'] = $ndbound->prefix;
                $nsUri = $ndbound->lookupNamespaceURI($ndbound->prefix);
            }
            $node->removeAttributeNS($nsUri, 'bound');
        } else {
            $this->bound = null;
        }
        $ndconfiguration = $attrs->getNamedItem('configuration');
        if (!is_null($ndconfiguration)) {
            $this->configuration = $ndconfiguration->value;
            if (isset($ndconfiguration->prefix)) {
                $this->namespace['configuration'] = $ndconfiguration->prefix;
                $nsUri = $ndconfiguration->lookupNamespaceURI($ndconfiguration->prefix);
            }
            $node->removeAttributeNS($nsUri, 'configuration');
        } else {
            $this->configuration = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "required"  && $localName != "bound"  && $localName != "configuration" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}