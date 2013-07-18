<?php
class VMware_VCloud_API_OVF_Property {
    protected $userConfigurable = null;
    protected $value = null;
    protected $key = null;
    protected $password = null;
    protected $type = null;
    protected $qualifiers = null;
    protected $Label = array();
    protected $Description = array();
    protected $Value = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param boolean $userConfigurable - [optional] an attribute, default 'false'
    * @param string $value - [optional] an attribute, default ''
    * @param string $key - [required] an attribute, 
    * @param boolean $password - [optional] an attribute, default 'false'
    * @param string $type - [required] an attribute, 
    * @param string $qualifiers - [optional] an attribute, 
    * @param array $Label - [optional] an array of VMware_VCloud_API_OVF_Msg_Type objects
    * @param array $Description - [optional] an array of VMware_VCloud_API_OVF_cimString objects
    * @param array $Value - [optional] an array of VMware_VCloud_API_OVF_PropertyConfigurationValue_Type objects
    */
    public function __construct($userConfigurable=False, $value='', $key=null, $password=False, $type=null, $qualifiers=null, $Label=null, $Description=null, $Value=null) {
        $this->userConfigurable = $userConfigurable;
        $this->value = $value;
        $this->key = $key;
        $this->password = $password;
        $this->type = $type;
        $this->qualifiers = $qualifiers;
        if (!is_null($Label)) {
            $this->Label = $Label;
        }
        if (!is_null($Description)) {
            $this->Description = $Description;
        }
        if (!is_null($Value)) {
            $this->Value = $Value;
        }
        $this->anyAttributes = array();
        $this->tagName = 'Property';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getLabel() {
        return $this->Label;
    }
    public function setLabel($Label) { 
        $this->Label = $Label;
    }
    public function addLabel($value) { array_push($this->Label, $value); }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function addDescription($value) { array_push($this->Description, $value); }
    public function getValue() {
        return $this->Value;
    }
    public function setValue($Value) { 
        $this->Value = $Value;
    }
    public function addValue($value) { array_push($this->Value, $value); }
    public function get_userConfigurable(){
        return $this->userConfigurable;
    }
    public function set_userConfigurable($userConfigurable) {
        $this->userConfigurable = $userConfigurable;
    }
    public function get_value(){
        return $this->value;
    }
    public function set_value($value) {
        $this->value = $value;
    }
    public function get_key(){
        return $this->key;
    }
    public function set_key($key) {
        $this->key = $key;
    }
    public function get_password(){
        return $this->password;
    }
    public function set_password($password) {
        $this->password = $password;
    }
    public function get_type(){
        return $this->type;
    }
    public function set_type($type) {
        $this->type = $type;
    }
    public function get_qualifiers(){
        return $this->qualifiers;
    }
    public function set_qualifiers($qualifiers) {
        $this->qualifiers = $qualifiers;
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
        if (!is_null($this->userConfigurable)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'userConfigurable', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'userConfigurable=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->userConfigurable, $input_name='userConfigurable')));
        }
        if (!is_null($this->value)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'value', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'value=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->value, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='value')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'key', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'key=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->key, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='key')));
        if (!is_null($this->password)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'password', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'password=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->password, $input_name='password')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'type', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'type=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->type, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='type')));
        if (!is_null($this->qualifiers)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'qualifiers', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'qualifiers=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->qualifiers, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='qualifiers')));
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
        if (isset($this->Label)) {
            foreach ($this->Label as $Label) {
                $out = $Label->export('Label', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->Description)) {
            foreach ($this->Description as $Description) {
                $out = $Description->export('Description', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->Value)) {
            foreach ($this->Value as $Value) {
                $out = $Value->export('Value', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Label) ||
            !empty($this->Description) ||
            !empty($this->Value)
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
        $nduserConfigurable = $attrs->getNamedItem('userConfigurable');
        if (!is_null($nduserConfigurable)) {
            $this->userConfigurable = VMware_VCloud_API_Helper::get_boolean($nduserConfigurable->value);
            if (isset($nduserConfigurable->prefix)) {
                $this->namespace['userConfigurable'] = $nduserConfigurable->prefix;
                $nsUri = $nduserConfigurable->lookupNamespaceURI($nduserConfigurable->prefix);
            }
            $node->removeAttributeNS($nsUri, 'userConfigurable');
        } else {
            $this->userConfigurable = null;
        }
        $ndvalue = $attrs->getNamedItem('value');
        if (!is_null($ndvalue)) {
            $this->value = $ndvalue->value;
            if (isset($ndvalue->prefix)) {
                $this->namespace['value'] = $ndvalue->prefix;
                $nsUri = $ndvalue->lookupNamespaceURI($ndvalue->prefix);
            }
            $node->removeAttributeNS($nsUri, 'value');
        } else {
            $this->value = null;
        }
        $ndkey = $attrs->getNamedItem('key');
        if (!is_null($ndkey)) {
            $this->key = $ndkey->value;
            if (isset($ndkey->prefix)) {
                $this->namespace['key'] = $ndkey->prefix;
                $nsUri = $ndkey->lookupNamespaceURI($ndkey->prefix);
            }
            $node->removeAttributeNS($nsUri, 'key');
        } else {
            $this->key = null;
        }
        $ndpassword = $attrs->getNamedItem('password');
        if (!is_null($ndpassword)) {
            $this->password = VMware_VCloud_API_Helper::get_boolean($ndpassword->value);
            if (isset($ndpassword->prefix)) {
                $this->namespace['password'] = $ndpassword->prefix;
                $nsUri = $ndpassword->lookupNamespaceURI($ndpassword->prefix);
            }
            $node->removeAttributeNS($nsUri, 'password');
        } else {
            $this->password = null;
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
        $ndqualifiers = $attrs->getNamedItem('qualifiers');
        if (!is_null($ndqualifiers)) {
            $this->qualifiers = $ndqualifiers->value;
            if (isset($ndqualifiers->prefix)) {
                $this->namespace['qualifiers'] = $ndqualifiers->prefix;
                $nsUri = $ndqualifiers->lookupNamespaceURI($ndqualifiers->prefix);
            }
            $node->removeAttributeNS($nsUri, 'qualifiers');
        } else {
            $this->qualifiers = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "userConfigurable"  && $localName != "value"  && $localName != "key"  && $localName != "password"  && $localName != "type"  && $localName != "qualifiers" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Label') {
            $obj = new VMware_VCloud_API_OVF_Msg_Type();
            $obj->build($child);
            $obj->set_tagName('Label');
            array_push($this->Label, $obj);
            if (!empty($namespace)) {
                $this->namespace['Label'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $obj = new VMware_VCloud_API_OVF_cimString();
            $obj->build($child);
            $obj->set_tagName('Description');
            array_push($this->Description, $obj);
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Value') {
            $obj = new VMware_VCloud_API_OVF_PropertyConfigurationValue_Type();
            $obj->build($child);
            $obj->set_tagName('Value');
            array_push($this->Value, $obj);
            if (!empty($namespace)) {
                $this->namespace['Value'] = $namespace;
            }
        }
    }
}