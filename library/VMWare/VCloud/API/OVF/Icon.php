<?php
class VMware_VCloud_API_OVF_Icon {
    protected $mimeType = null;
    protected $width = null;
    protected $fileRef = null;
    protected $height = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param string $mimeType - [optional] an attribute, 
    * @param unsignedShort $width - [optional] an attribute, 
    * @param string $fileRef - [required] an attribute, 
    * @param unsignedShort $height - [optional] an attribute, 
    * @param string $valueOf - [optional]
    */
    public function __construct($mimeType=null, $width=null, $fileRef=null, $height=null, $valueOf='') {
        $this->mimeType = $mimeType;
        $this->width = $width;
        $this->fileRef = $fileRef;
        $this->height = $height;
        $this->valueOf = $valueOf;
        $this->anyAttributes = array();
        $this->tagName = 'Icon';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_mimeType(){
        return $this->mimeType;
    }
    public function set_mimeType($mimeType) {
        $this->mimeType = $mimeType;
    }
    public function get_width(){
        return $this->width;
    }
    public function set_width($width) {
        $this->width = $width;
    }
    public function get_fileRef(){
        return $this->fileRef;
    }
    public function set_fileRef($fileRef) {
        $this->fileRef = $fileRef;
    }
    public function get_height(){
        return $this->height;
    }
    public function set_height($height) {
        $this->height = $height;
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
        if (!is_null($this->mimeType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'mimeType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'mimeType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->mimeType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='mimeType')));
        }
        if (!is_null($this->width)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'width', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'width=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->width, $input_name='width')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'fileRef', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'fileRef=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->fileRef, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='fileRef')));
        if (!is_null($this->height)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'height', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'height=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->height, $input_name='height')));
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
        $ndmimeType = $attrs->getNamedItem('mimeType');
        if (!is_null($ndmimeType)) {
            $this->mimeType = $ndmimeType->value;
            if (isset($ndmimeType->prefix)) {
                $this->namespace['mimeType'] = $ndmimeType->prefix;
                $nsUri = $ndmimeType->lookupNamespaceURI($ndmimeType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'mimeType');
        } else {
            $this->mimeType = null;
        }
        $ndwidth = $attrs->getNamedItem('width');
        if (!is_null($ndwidth)) {
            $this->width = sprintf('%d', $ndwidth->value);
            if (isset($ndwidth->prefix)) {
                $this->namespace['width'] = $ndwidth->prefix;
                $nsUri = $ndwidth->lookupNamespaceURI($ndwidth->prefix);
            }
            $node->removeAttributeNS($nsUri, 'width');
        } else {
            $this->width = null;
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
        $ndheight = $attrs->getNamedItem('height');
        if (!is_null($ndheight)) {
            $this->height = sprintf('%d', $ndheight->value);
            if (isset($ndheight->prefix)) {
                $this->namespace['height'] = $ndheight->prefix;
                $nsUri = $ndheight->lookupNamespaceURI($ndheight->prefix);
            }
            $node->removeAttributeNS($nsUri, 'height');
        } else {
            $this->height = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "mimeType"  && $localName != "width"  && $localName != "fileRef"  && $localName != "height" ) {
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