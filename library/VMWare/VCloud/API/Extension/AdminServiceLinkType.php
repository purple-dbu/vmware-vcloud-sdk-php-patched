<?php
class VMware_VCloud_API_Extension_AdminServiceLinkType extends VMware_VCloud_API_IdentifiableResourceType {
    protected $LinkHref = null;
    protected $MimeType = null;
    protected $Rel = null;
    protected $ResourceType = null;
    protected $ResourceId = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $operationKey - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param string $LinkHref - [optional] 
    * @param string $MimeType - [optional] 
    * @param string $Rel - [optional] 
    * @param string $ResourceType - [optional] 
    * @param string $ResourceId - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $LinkHref=null, $MimeType=null, $Rel=null, $ResourceType=null, $ResourceId=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id);
        $this->LinkHref = $LinkHref;
        $this->MimeType = $MimeType;
        $this->Rel = $Rel;
        $this->ResourceType = $ResourceType;
        $this->ResourceId = $ResourceId;
        $this->tagName = 'ServiceLink';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getLinkHref() {
        return $this->LinkHref;
    }
    public function setLinkHref($LinkHref) { 
        $this->LinkHref = $LinkHref;
    }
    public function getMimeType() {
        return $this->MimeType;
    }
    public function setMimeType($MimeType) { 
        $this->MimeType = $MimeType;
    }
    public function getRel() {
        return $this->Rel;
    }
    public function setRel($Rel) { 
        $this->Rel = $Rel;
    }
    public function getResourceType() {
        return $this->ResourceType;
    }
    public function setResourceType($ResourceType) { 
        $this->ResourceType = $ResourceType;
    }
    public function getResourceId() {
        return $this->ResourceId;
    }
    public function setResourceId($ResourceId) { 
        $this->ResourceId = $ResourceId;
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
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (!is_null($this->LinkHref)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LinkHref', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LinkHref>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->LinkHref, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='LinkHref')) . "</" . $ns . "LinkHref>\n");
        }
        if (!is_null($this->MimeType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MimeType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MimeType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MimeType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MimeType')) . "</" . $ns . "MimeType>\n");
        }
        if (!is_null($this->Rel)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Rel', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Rel>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Rel, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Rel')) . "</" . $ns . "Rel>\n");
        }
        if (!is_null($this->ResourceType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ResourceType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ResourceType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ResourceType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ResourceType')) . "</" . $ns . "ResourceType>\n");
        }
        if (!is_null($this->ResourceId)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ResourceId', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ResourceId>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ResourceId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ResourceId')) . "</" . $ns . "ResourceId>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->LinkHref) ||
            !is_null($this->MimeType) ||
            !is_null($this->Rel) ||
            !is_null($this->ResourceType) ||
            !is_null($this->ResourceId) ||
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LinkHref') {
            $sval = $child->nodeValue;
            $this->LinkHref = $sval;
            if (!empty($namespace)) {
                $this->namespace['LinkHref'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MimeType') {
            $sval = $child->nodeValue;
            $this->MimeType = $sval;
            if (!empty($namespace)) {
                $this->namespace['MimeType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Rel') {
            $sval = $child->nodeValue;
            $this->Rel = $sval;
            if (!empty($namespace)) {
                $this->namespace['Rel'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceType') {
            $sval = $child->nodeValue;
            $this->ResourceType = $sval;
            if (!empty($namespace)) {
                $this->namespace['ResourceType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceId') {
            $sval = $child->nodeValue;
            $this->ResourceId = $sval;
            if (!empty($namespace)) {
                $this->namespace['ResourceId'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}