<?php
class VMware_VCloud_API_Extension_ServiceOfferingParamMetaInfoType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $Name = null;
    protected $Type = null;
    protected $Description = null;
    protected $IsInput = null;
    protected $IsOutput = null;
    protected $IsRequired = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $Name - [required] 
    * @param string $Type - [required] 
    * @param string $Description - [required] 
    * @param boolean $IsInput - [required] 
    * @param boolean $IsOutput - [required] 
    * @param boolean $IsRequired - [required] 
    */
    public function __construct($VCloudExtension=null, $Name=null, $Type=null, $Description=null, $IsInput=null, $IsOutput=null, $IsRequired=null) {
        parent::__construct($VCloudExtension);
        $this->Name = $Name;
        $this->Type = $Type;
        $this->Description = $Description;
        $this->IsInput = $IsInput;
        $this->IsOutput = $IsOutput;
        $this->IsRequired = $IsRequired;
        $this->tagName = 'ServiceOfferingParamMetaInfo';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getName() {
        return $this->Name;
    }
    public function setName($Name) { 
        $this->Name = $Name;
    }
    public function getType() {
        return $this->Type;
    }
    public function setType($Type) { 
        $this->Type = $Type;
    }
    public function getDescription() {
        return $this->Description;
    }
    public function setDescription($Description) { 
        $this->Description = $Description;
    }
    public function getIsInput() {
        return $this->IsInput;
    }
    public function setIsInput($IsInput) { 
        $this->IsInput = $IsInput;
    }
    public function getIsOutput() {
        return $this->IsOutput;
    }
    public function setIsOutput($IsOutput) { 
        $this->IsOutput = $IsOutput;
    }
    public function getIsRequired() {
        return $this->IsRequired;
    }
    public function setIsRequired($IsRequired) { 
        $this->IsRequired = $IsRequired;
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
        if (!is_null($this->Name)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Name>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Name')) . "</" . $ns . "Name>\n");
        }
        if (!is_null($this->Type)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Type', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Type>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Type, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Type')) . "</" . $ns . "Type>\n");
        }
        if (!is_null($this->Description)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Description', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Description>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Description, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Description')) . "</" . $ns . "Description>\n");
        }
        if (!is_null($this->IsInput)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsInput', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsInput>" . VMware_VCloud_API_Helper::format_boolean($this->IsInput, $input_name='IsInput') . "</" . $ns . "IsInput>\n");
     }
        if (!is_null($this->IsOutput)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsOutput', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsOutput>" . VMware_VCloud_API_Helper::format_boolean($this->IsOutput, $input_name='IsOutput') . "</" . $ns . "IsOutput>\n");
     }
        if (!is_null($this->IsRequired)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'IsRequired', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "IsRequired>" . VMware_VCloud_API_Helper::format_boolean($this->IsRequired, $input_name='IsRequired') . "</" . $ns . "IsRequired>\n");
     }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->Name) ||
            !is_null($this->Type) ||
            !is_null($this->Description) ||
            !is_null($this->IsInput) ||
            !is_null($this->IsOutput) ||
            !is_null($this->IsRequired) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Name') {
            $sval = $child->nodeValue;
            $this->Name = $sval;
            if (!empty($namespace)) {
                $this->namespace['Name'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Type') {
            $sval = $child->nodeValue;
            $this->Type = $sval;
            if (!empty($namespace)) {
                $this->namespace['Type'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Description') {
            $sval = $child->nodeValue;
            $this->Description = $sval;
            if (!empty($namespace)) {
                $this->namespace['Description'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsInput') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsInput = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsInput'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsOutput') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsOutput = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsOutput'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IsRequired') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->IsRequired = $sval;
            if (!empty($namespace)) {
                $this->namespace['IsRequired'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}