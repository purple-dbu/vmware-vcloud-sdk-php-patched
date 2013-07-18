<?php
class VMware_VCloud_API_Extension_ResourceClassType extends VMware_VCloud_API_EntityType {
    protected $MimeType = null;
    protected $UrlTemplate = null;
    protected $Nid = null;
    protected $UrnPattern = null;
    protected $ServiceResources = null;
    protected $ResourceClassActions = null;
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
    * @param string $name - [required] an attribute, 
    * @param string $Description - [optional] 
    * @param VMware_VCloud_API_TasksInProgressType $Tasks - [optional]
    * @param string $MimeType - [optional] 
    * @param string $UrlTemplate - [optional] 
    * @param string $Nid - [optional] 
    * @param string $UrnPattern - [optional] 
    * @param VMware_VCloud_API_Extension_ServiceResourcesType $ServiceResources - [optional]
    * @param VMware_VCloud_API_Extension_ResourceClassActionsType $ResourceClassActions - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $MimeType=null, $UrlTemplate=null, $Nid=null, $UrnPattern=null, $ServiceResources=null, $ResourceClassActions=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->MimeType = $MimeType;
        $this->UrlTemplate = $UrlTemplate;
        $this->Nid = $Nid;
        $this->UrnPattern = $UrnPattern;
        $this->ServiceResources = $ServiceResources;
        $this->ResourceClassActions = $ResourceClassActions;
        $this->tagName = 'ResourceClass';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getMimeType() {
        return $this->MimeType;
    }
    public function setMimeType($MimeType) { 
        $this->MimeType = $MimeType;
    }
    public function getUrlTemplate() {
        return $this->UrlTemplate;
    }
    public function setUrlTemplate($UrlTemplate) { 
        $this->UrlTemplate = $UrlTemplate;
    }
    public function getNid() {
        return $this->Nid;
    }
    public function setNid($Nid) { 
        $this->Nid = $Nid;
    }
    public function getUrnPattern() {
        return $this->UrnPattern;
    }
    public function setUrnPattern($UrnPattern) { 
        $this->UrnPattern = $UrnPattern;
    }
    public function getServiceResources() {
        return $this->ServiceResources;
    }
    public function setServiceResources($ServiceResources) { 
        $this->ServiceResources = $ServiceResources;
    }
    public function getResourceClassActions() {
        return $this->ResourceClassActions;
    }
    public function setResourceClassActions($ResourceClassActions) { 
        $this->ResourceClassActions = $ResourceClassActions;
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
        if (!is_null($this->MimeType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'MimeType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "MimeType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->MimeType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='MimeType')) . "</" . $ns . "MimeType>\n");
        }
        if (!is_null($this->UrlTemplate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UrlTemplate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UrlTemplate>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->UrlTemplate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='UrlTemplate')) . "</" . $ns . "UrlTemplate>\n");
        }
        if (!is_null($this->Nid)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Nid', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Nid>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Nid, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Nid')) . "</" . $ns . "Nid>\n");
        }
        if (!is_null($this->UrnPattern)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UrnPattern', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UrnPattern>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->UrnPattern, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='UrnPattern')) . "</" . $ns . "UrnPattern>\n");
        }
        if (!is_null($this->ServiceResources)) {
            $out = $this->ServiceResources->export('ServiceResources', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->ResourceClassActions)) {
            $out = $this->ResourceClassActions->export('ResourceClassActions', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->MimeType) ||
            !is_null($this->UrlTemplate) ||
            !is_null($this->Nid) ||
            !is_null($this->UrnPattern) ||
            !is_null($this->ServiceResources) ||
            !is_null($this->ResourceClassActions) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'MimeType') {
            $sval = $child->nodeValue;
            $this->MimeType = $sval;
            if (!empty($namespace)) {
                $this->namespace['MimeType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UrlTemplate') {
            $sval = $child->nodeValue;
            $this->UrlTemplate = $sval;
            if (!empty($namespace)) {
                $this->namespace['UrlTemplate'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Nid') {
            $sval = $child->nodeValue;
            $this->Nid = $sval;
            if (!empty($namespace)) {
                $this->namespace['Nid'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UrnPattern') {
            $sval = $child->nodeValue;
            $this->UrnPattern = $sval;
            if (!empty($namespace)) {
                $this->namespace['UrnPattern'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ServiceResources') {
            $obj = new VMware_VCloud_API_Extension_ServiceResourcesType();
            $obj->build($child);
            $obj->set_tagName('ServiceResources');
            $this->setServiceResources($obj);
            if (!empty($namespace)) {
                $this->namespace['ServiceResources'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ResourceClassActions') {
            $obj = new VMware_VCloud_API_Extension_ResourceClassActionsType();
            $obj->build($child);
            $obj->set_tagName('ResourceClassActions');
            $this->setResourceClassActions($obj);
            if (!empty($namespace)) {
                $this->namespace['ResourceClassActions'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}