<?php
class VMware_VCloud_API_OVF_EnvelopeType {
    protected $lang = null;
    protected $References = null;
    protected $Section = array();
    protected $Content = null;
    protected $Strings = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param string $lang - [optional] an attribute, default 'en-US'
    * @param VMware_VCloud_API_OVF_References_Type $References - [required]
    * @param array $Section - [optional] an array of VMware_VCloud_API_OVF_Section_Type objects
    * @param VMware_VCloud_API_OVF_Content_Type $Content - [required]
    * @param array $Strings - [optional] an array of VMware_VCloud_API_OVF_Strings_Type objects
    */
    public function __construct($lang='en-US', $References=null, $Section=null, $Content=null, $Strings=null) {
        $this->lang = $lang;
        $this->References = $References;
        if (!is_null($Section)) {
            $this->Section = $Section;
        }
        $this->Content = $Content;
        if (!is_null($Strings)) {
            $this->Strings = $Strings;
        }
        $this->anyAttributes = array();
        $this->tagName = 'Envelope';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getReferences() {
        return $this->References;
    }
    public function setReferences($References) { 
        $this->References = $References;
    }
    public function getSection() {
        return $this->Section;
    }
    public function setSection($Section) { 
        $this->Section = $Section;
    }
    public function addSection($value) { array_push($this->Section, $value); }
    public function getContent() {
        return $this->Content;
    }
    public function setContent($Content) { 
        $this->Content = $Content;
    }
    public function getStrings() {
        return $this->Strings;
    }
    public function setStrings($Strings) { 
        $this->Strings = $Strings;
    }
    public function addStrings($value) { array_push($this->Strings, $value); }
    public function get_lang(){
        return $this->lang;
    }
    public function set_lang($lang) {
        $this->lang = $lang;
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
        if (!is_null($this->lang)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'lang', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'lang=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->lang, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='lang')));
        }
        if ($this->anyAttributes) {
            foreach ($this->anyAttributes as $name => $value) {
                if (array_key_exists($name, $this->namespace)) {
                    $ns = $this->namespace[$name];
                    if (!empty($ns)) {
                        $name = $ns . ":" . $name;
                    }
                }
                if ('xsi:type' != $name) {
                    $out = VMware_VCloud_API_Helper::addString($out, " $name=" . VMware_VCloud_API_Helper::quote_attrib($value));
                }
            }
        }
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->References)) {
            $out = $this->References->export('References', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Section)) {
            foreach ($this->Section as $Section) {
                $tagName = $Section->get_tagName();
                if (empty($tagName)) {
                    $tagName = 'Section';
                }
                $out = $Section->export($tagName, $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->Content)) {
            $out = $this->Content->export('Content', $out, $level, '', $namespace, $rootNS);
        }
        if (isset($this->Strings)) {
            foreach ($this->Strings as $Strings) {
                $out = $Strings->export('Strings', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->References) ||
            !empty($this->Section) ||
            !is_null($this->Content) ||
            !empty($this->Strings)
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
        $ndlang = $attrs->getNamedItem('lang');
        if (!is_null($ndlang)) {
            $this->lang = $ndlang->value;
            if (isset($ndlang->prefix)) {
                $this->namespace['lang'] = $ndlang->prefix;
                $nsUri = $ndlang->lookupNamespaceURI($ndlang->prefix);
            }
            $node->removeAttributeNS($nsUri, 'lang');
        } else {
            $this->lang = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "lang" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'References') {
            $obj = new VMware_VCloud_API_OVF_References_Type();
            $obj->build($child);
            $obj->set_tagName('References');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['References'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ShadowVMReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ShadowVMReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ShadowVMReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('OrgReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MediaReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('MediaReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['MediaReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppTemplateReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('VAppTemplateReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppTemplateReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('VAppReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VMReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('VMReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['VMReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgNetworkReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('OrgNetworkReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgNetworkReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppNetworkReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('VAppNetworkReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppNetworkReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('CatalogReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminVdcReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('AdminVdcReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminVdcReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VMWProviderVdcReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('VMWProviderVdcReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['VMWProviderVdcReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('NetworkReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GroupReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('GroupReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['GroupReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UserReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('UserReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['UserReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RoleReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('RoleReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['RoleReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DatastoreReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('DatastoreReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['DatastoreReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkPoolReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('NetworkPoolReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkPoolReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualCenterReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('VirtualCenterReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualCenterReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'HostReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('HostReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['HostReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RightReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('RightReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['RightReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppOrgNetworkRelationReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('VAppOrgNetworkRelationReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppOrgNetworkRelationReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CatalogItemReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('CatalogItemReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['CatalogItemReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TaskReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('TaskReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['TaskReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BlockingTaskReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('BlockingTaskReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['BlockingTaskReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DiskReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('DiskReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['DiskReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminDiskReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('AdminDiskReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminDiskReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StrandedItemReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('StrandedItemReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['StrandedItemReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminServiceReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('AdminServiceReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminServiceReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ServiceReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceLinkReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ServiceLinkReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceLinkReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcStorageProfileReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcStorageProfileReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcStorageProfileReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminOrgVdcStorageProfileReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('AdminOrgVdcStorageProfileReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminOrgVdcStorageProfileReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProviderVdcStorageProfileReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ProviderVdcStorageProfileReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ProviderVdcStorageProfileReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiFilterReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ApiFilterReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ApiFilterReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminApiDefinitionReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('AdminApiDefinitionReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminApiDefinitionReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ApiDefinitionReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ApiDefinitionReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ApiDefinitionReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AdminFileDescriptorReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('AdminFileDescriptorReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['AdminFileDescriptorReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassActionReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassActionReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassActionReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AclRuleReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('AclRuleReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['AclRuleReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceResourceResourceReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('ServiceResourceResourceReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceResourceResourceReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EdgeGatewayReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('EdgeGatewayReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['EdgeGatewayReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OrgVdcNetworkReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('OrgVdcNetworkReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['OrgVdcNetworkReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VAppOrgVdcNetworkRelationReferences') {
            $obj = new VMware_VCloud_API_ReferencesType();
            $obj->build($child);
            $obj->set_tagName('VAppOrgVdcNetworkRelationReferences');
            $this->setReferences($obj);
            if (!empty($namespace)) {
                $this->namespace['VAppOrgVdcNetworkRelationReferences'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Section') {
            $obj = new VMware_VCloud_API_OVF_Section_Type();
            $obj->build($child);
            $obj->set_tagName('Section');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['Section'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'AnnotationSection') {
            $obj = new VMware_VCloud_API_OVF_AnnotationSection_Type();
            $obj->build($child);
            $obj->set_tagName('AnnotationSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['AnnotationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ProductSection') {
            $obj = new VMware_VCloud_API_OVF_ProductSection_Type();
            $obj->build($child);
            $obj->set_tagName('ProductSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['ProductSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkSection') {
            $obj = new VMware_VCloud_API_OVF_NetworkSection_Type();
            $obj->build($child);
            $obj->set_tagName('NetworkSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DiskSection') {
            $obj = new VMware_VCloud_API_OVF_DiskSection_Type();
            $obj->build($child);
            $obj->set_tagName('DiskSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['DiskSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OperatingSystemSection') {
            $obj = new VMware_VCloud_API_OVF_OperatingSystemSection_Type();
            $obj->build($child);
            $obj->set_tagName('OperatingSystemSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['OperatingSystemSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EulaSection') {
            $obj = new VMware_VCloud_API_OVF_EulaSection_Type();
            $obj->build($child);
            $obj->set_tagName('EulaSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['EulaSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualHardwareSection') {
            $obj = new VMware_VCloud_API_OVF_VirtualHardwareSection_Type();
            $obj->build($child);
            $obj->set_tagName('VirtualHardwareSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualHardwareSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceAllocationSection') {
            $obj = new VMware_VCloud_API_OVF_ResourceAllocationSection_Type();
            $obj->build($child);
            $obj->set_tagName('ResourceAllocationSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceAllocationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'InstallSection') {
            $obj = new VMware_VCloud_API_OVF_InstallSection_Type();
            $obj->build($child);
            $obj->set_tagName('InstallSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['InstallSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StartupSection') {
            $obj = new VMware_VCloud_API_OVF_StartupSection_Type();
            $obj->build($child);
            $obj->set_tagName('StartupSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['StartupSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeploymentOptionSection') {
            $obj = new VMware_VCloud_API_OVF_DeploymentOptionSection_Type();
            $obj->build($child);
            $obj->set_tagName('DeploymentOptionSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['DeploymentOptionSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PropertySection') {
            $obj = new VMware_VCloud_API_OVFENV_PropertySection_Type();
            $obj->build($child);
            $obj->set_tagName('PropertySection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['PropertySection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PlatformSection') {
            $obj = new VMware_VCloud_API_OVFENV_PlatformSection_Type();
            $obj->build($child);
            $obj->set_tagName('PlatformSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['PlatformSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpAssignmentSection') {
            $obj = new VMware_VCloud_API_IpAssignmentSection_Type();
            $obj->build($child);
            $obj->set_tagName('IpAssignmentSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['IpAssignmentSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CpuCompatibilitySection') {
            $obj = new VMware_VCloud_API_CpuCompatibilitySection_Type();
            $obj->build($child);
            $obj->set_tagName('CpuCompatibilitySection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['CpuCompatibilitySection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BootOrderSection') {
            $obj = new VMware_VCloud_API_BootOrderSection_Type();
            $obj->build($child);
            $obj->set_tagName('BootOrderSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['BootOrderSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkConfigSection') {
            $obj = new VMware_VCloud_API_NetworkConfigSectionType();
            $obj->build($child);
            $obj->set_tagName('NetworkConfigSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkConfigSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LeaseSettingsSection') {
            $obj = new VMware_VCloud_API_LeaseSettingsSectionType();
            $obj->build($child);
            $obj->set_tagName('LeaseSettingsSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['LeaseSettingsSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkConnectionSection') {
            $obj = new VMware_VCloud_API_NetworkConnectionSectionType();
            $obj->build($child);
            $obj->set_tagName('NetworkConnectionSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkConnectionSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'RuntimeInfoSection') {
            $obj = new VMware_VCloud_API_RuntimeInfoSectionType();
            $obj->build($child);
            $obj->set_tagName('RuntimeInfoSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['RuntimeInfoSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GuestCustomizationSection') {
            $obj = new VMware_VCloud_API_GuestCustomizationSectionType();
            $obj->build($child);
            $obj->set_tagName('GuestCustomizationSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['GuestCustomizationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SnapshotSection') {
            $obj = new VMware_VCloud_API_SnapshotSectionType();
            $obj->build($child);
            $obj->set_tagName('SnapshotSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['SnapshotSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DefaultStorageProfileSection') {
            $obj = new VMware_VCloud_API_DefaultStorageProfileSection_Type();
            $obj->build($child);
            $obj->set_tagName('DefaultStorageProfileSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['DefaultStorageProfileSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'CustomizationSection') {
            $obj = new VMware_VCloud_API_CustomizationSectionType();
            $obj->build($child);
            $obj->set_tagName('CustomizationSection');
            array_push($this->Section, $obj);
            if (!empty($namespace)) {
                $this->namespace['CustomizationSection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Content') {
            $obj = new VMware_VCloud_API_OVF_Content_Type();
            $obj->build($child);
            $obj->set_tagName('Content');
            $this->setContent($obj);
            if (!empty($namespace)) {
                $this->namespace['Content'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualSystem') {
            $obj = new VMware_VCloud_API_OVF_VirtualSystem_Type();
            $obj->build($child);
            $obj->set_tagName('VirtualSystem');
            $this->setContent($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualSystem'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VirtualSystemCollection') {
            $obj = new VMware_VCloud_API_OVF_VirtualSystemCollection_Type();
            $obj->build($child);
            $obj->set_tagName('VirtualSystemCollection');
            $this->setContent($obj);
            if (!empty($namespace)) {
                $this->namespace['VirtualSystemCollection'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Strings') {
            $obj = new VMware_VCloud_API_OVF_Strings_Type();
            $obj->build($child);
            $obj->set_tagName('Strings');
            array_push($this->Strings, $obj);
            if (!empty($namespace)) {
                $this->namespace['Strings'] = $namespace;
            }
        }
    }
}