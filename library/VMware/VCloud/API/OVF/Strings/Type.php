<?php
class VMware_VCloud_API_OVF_Strings_Type {
    protected $lang = null;
    protected $fileRef = null;
    protected $Msg = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param string $lang - [optional] an attribute, 
    * @param string $fileRef - [optional] an attribute, 
    * @param array $Msg - [optional] an array of VMware_VCloud_API_OVF_Msg objects
    */
    public function __construct($lang=null, $fileRef=null, $Msg=null) {
        $this->lang = $lang;
        $this->fileRef = $fileRef;
        if (!is_null($Msg)) {
            $this->Msg = $Msg;
        }
        $this->anyAttributes = array();
        $this->tagName = 'Strings';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getMsg() {
        return $this->Msg;
    }
    public function setMsg($Msg) { 
        $this->Msg = $Msg;
    }
    public function addMsg($value) { array_push($this->Msg, $value); }
    public function get_lang(){
        return $this->lang;
    }
    public function set_lang($lang) {
        $this->lang = $lang;
    }
    public function get_fileRef(){
        return $this->fileRef;
    }
    public function set_fileRef($fileRef) {
        $this->fileRef = $fileRef;
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
        if (!is_null($this->fileRef)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'fileRef', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'fileRef=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->fileRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='fileRef')));
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
        if (isset($this->Msg)) {
            foreach ($this->Msg as $Msg) {
                $out = $Msg->export('Msg', $out, $level, '', $namespace, $rootNS);
            }
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Msg)
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
        $ndfileRef = $attrs->getNamedItem('fileRef');
        if (!is_null($ndfileRef)) {
            $this->fileRef = $ndfileRef->value;
            if (isset($ndfileRef->prefix)) {
                $this->namespace['fileRef'] = $ndfileRef->prefix;
                $nsUri = $ndfileRef->lookupNamespaceURI($ndfileRef->prefix);
            }
            $node->removeAttributeNS($nsUri, 'fileRef');
        } else {
            $this->fileRef = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "lang"  && $localName != "fileRef" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Msg') {
            $obj = new VMware_VCloud_API_OVF_Msg();
            $obj->build($child);
            $obj->set_tagName('Msg');
            array_push($this->Msg, $obj);
            if (!empty($namespace)) {
                $this->namespace['Msg'] = $namespace;
            }
        }
    }
}