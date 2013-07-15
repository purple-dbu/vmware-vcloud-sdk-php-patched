<?php
class VMware_VCloud_API_Level {
    protected $vendor = null;
    protected $level = null;
    protected $eax = null;
    protected $edx = null;
    protected $ebx = null;
    protected $ecx = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param string $vendor - [optional] an attribute, default ''
    * @param string $level - [required] an attribute, 
    * @param string $eax - [optional] an attribute, 
    * @param string $edx - [optional] an attribute, 
    * @param string $ebx - [optional] an attribute, 
    * @param string $ecx - [optional] an attribute, 
    * @param string $valueOf - [optional]
    */
    public function __construct($vendor='', $level=null, $eax=null, $edx=null, $ebx=null, $ecx=null, $valueOf='') {
        $this->vendor = $vendor;
        $this->level = $level;
        $this->eax = $eax;
        $this->edx = $edx;
        $this->ebx = $ebx;
        $this->ecx = $ecx;
        $this->valueOf = $valueOf;
        $this->anyAttributes = array();
        $this->tagName = 'Level';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_vendor(){
        return $this->vendor;
    }
    public function set_vendor($vendor) {
        $this->vendor = $vendor;
    }
    public function get_level(){
        return $this->level;
    }
    public function set_level($level) {
        $this->level = $level;
    }
    public function get_eax(){
        return $this->eax;
    }
    public function set_eax($eax) {
        $this->eax = $eax;
    }
    public function get_edx(){
        return $this->edx;
    }
    public function set_edx($edx) {
        $this->edx = $edx;
    }
    public function get_ebx(){
        return $this->ebx;
    }
    public function set_ebx($ebx) {
        $this->ebx = $ebx;
    }
    public function get_ecx(){
        return $this->ecx;
    }
    public function set_ecx($ecx) {
        $this->ecx = $ecx;
    }
    public function get_valueOf() { return $this->valueOf; }
    public function set_valueOf($valueOf) { $this->valueOf = $valueOf; }
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
            $out = VMware_VCloud_API_Helper::addString($out, ">");
            $out = $this->exportChildren($out, $level + 1, $name, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "</" . $ns . $name . ">\n");
        } else {
            $out = VMware_VCloud_API_Helper::addString($out, "/>\n");
        }
        return $out;
    }
    protected function exportAttributes($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        if (!is_null($this->vendor)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vendor', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vendor=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vendor, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vendor')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'level', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'level=' . VMware_VCloud_API_Helper::quote_attrib($this->level));
        if (!is_null($this->eax)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'eax', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'eax=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->eax, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='eax')));
        }
        if (!is_null($this->edx)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'edx', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'edx=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->edx, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='edx')));
        }
        if (!is_null($this->ebx)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ebx', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ebx=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ebx, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ebx')));
        }
        if (!is_null($this->ecx)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ecx', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ecx=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ecx, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ecx')));
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
        if (!is_null($this->valueOf)) {
            $out = VMware_VCloud_API_Helper::addString($out, VMware_VCloud_API_Helper::quote_xml($this->valueOf));
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->valueOf)
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
        $this->valueOf = '';
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
        $ndvendor = $attrs->getNamedItem('vendor');
        if (!is_null($ndvendor)) {
            $this->vendor = $ndvendor->value;
            if (isset($ndvendor->prefix)) {
                $this->namespace['vendor'] = $ndvendor->prefix;
                $nsUri = $ndvendor->lookupNamespaceURI($ndvendor->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vendor');
        } else {
            $this->vendor = null;
        }
        $ndlevel = $attrs->getNamedItem('level');
        if (!is_null($ndlevel)) {
            $this->level = $ndlevel->value;
            if (isset($ndlevel->prefix)) {
                $this->namespace['level'] = $ndlevel->prefix;
                $nsUri = $ndlevel->lookupNamespaceURI($ndlevel->prefix);
            }
            $node->removeAttributeNS($nsUri, 'level');
        } else {
            $this->level = null;
        }
        $ndeax = $attrs->getNamedItem('eax');
        if (!is_null($ndeax)) {
            $this->eax = $ndeax->value;
            if (isset($ndeax->prefix)) {
                $this->namespace['eax'] = $ndeax->prefix;
                $nsUri = $ndeax->lookupNamespaceURI($ndeax->prefix);
            }
            $node->removeAttributeNS($nsUri, 'eax');
        } else {
            $this->eax = null;
        }
        $ndedx = $attrs->getNamedItem('edx');
        if (!is_null($ndedx)) {
            $this->edx = $ndedx->value;
            if (isset($ndedx->prefix)) {
                $this->namespace['edx'] = $ndedx->prefix;
                $nsUri = $ndedx->lookupNamespaceURI($ndedx->prefix);
            }
            $node->removeAttributeNS($nsUri, 'edx');
        } else {
            $this->edx = null;
        }
        $ndebx = $attrs->getNamedItem('ebx');
        if (!is_null($ndebx)) {
            $this->ebx = $ndebx->value;
            if (isset($ndebx->prefix)) {
                $this->namespace['ebx'] = $ndebx->prefix;
                $nsUri = $ndebx->lookupNamespaceURI($ndebx->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ebx');
        } else {
            $this->ebx = null;
        }
        $ndecx = $attrs->getNamedItem('ecx');
        if (!is_null($ndecx)) {
            $this->ecx = $ndecx->value;
            if (isset($ndecx->prefix)) {
                $this->namespace['ecx'] = $ndecx->prefix;
                $nsUri = $ndecx->lookupNamespaceURI($ndecx->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ecx');
        } else {
            $this->ecx = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "vendor"  && $localName != "level"  && $localName != "eax"  && $localName != "edx"  && $localName != "ebx"  && $localName != "ecx" ) {
                $this->anyAttributes[$localName] = $attr->value;
                $node->removeAttribute($localName);
                $this->namespace[$localName] = $attr->prefix;
            }
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_TEXT_NODE) {
            $this->valueOf = $child->nodeValue;
            $this->tagName = $nodeName;
        }
    }
}