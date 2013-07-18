<?php
class VMware_VCloud_API_Extension_StrandedItemType extends VMware_VCloud_API_EntityType {
    protected $EntityType = null;
    protected $DeletionDate = null;
    protected $ErrorMessage = null;
    protected $Parent = null;
    protected $StrandedItemVimObjects = null;
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
    * @param string $EntityType - [optional] 
    * @param string $DeletionDate - [optional] 
    * @param string $ErrorMessage - [optional] 
    * @param VMware_VCloud_API_ReferenceType $Parent - [optional]
    * @param VMware_VCloud_API_Extension_StrandedItemVimObjectsType $StrandedItemVimObjects - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $EntityType=null, $DeletionDate=null, $ErrorMessage=null, $Parent=null, $StrandedItemVimObjects=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks);
        $this->EntityType = $EntityType;
        $this->DeletionDate = $DeletionDate;
        $this->ErrorMessage = $ErrorMessage;
        $this->Parent = $Parent;
        $this->StrandedItemVimObjects = $StrandedItemVimObjects;
        $this->tagName = 'StrandedItem';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getEntityType() {
        return $this->EntityType;
    }
    public function setEntityType($EntityType) { 
        $this->EntityType = $EntityType;
    }
    public function getDeletionDate() {
        return $this->DeletionDate;
    }
    public function setDeletionDate($DeletionDate) { 
        $this->DeletionDate = $DeletionDate;
    }
    public function getErrorMessage() {
        return $this->ErrorMessage;
    }
    public function setErrorMessage($ErrorMessage) { 
        $this->ErrorMessage = $ErrorMessage;
    }
    public function getParent() {
        return $this->Parent;
    }
    public function setParent($Parent) { 
        $this->Parent = $Parent;
    }
    public function getStrandedItemVimObjects() {
        return $this->StrandedItemVimObjects;
    }
    public function setStrandedItemVimObjects($StrandedItemVimObjects) { 
        $this->StrandedItemVimObjects = $StrandedItemVimObjects;
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
        if (!is_null($this->EntityType)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'EntityType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "EntityType>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->EntityType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='EntityType')) . "</" . $ns . "EntityType>\n");
        }
        if (!is_null($this->DeletionDate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'DeletionDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "DeletionDate>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->DeletionDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='DeletionDate')) . "</" . $ns . "DeletionDate>\n");
        }
        if (!is_null($this->ErrorMessage)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ErrorMessage', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ErrorMessage>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ErrorMessage, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ErrorMessage')) . "</" . $ns . "ErrorMessage>\n");
        }
        if (!is_null($this->Parent)) {
            $out = $this->Parent->export('Parent', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->StrandedItemVimObjects)) {
            $out = $this->StrandedItemVimObjects->export('StrandedItemVimObjects', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->EntityType) ||
            !is_null($this->DeletionDate) ||
            !is_null($this->ErrorMessage) ||
            !is_null($this->Parent) ||
            !is_null($this->StrandedItemVimObjects) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EntityType') {
            $sval = $child->nodeValue;
            $this->EntityType = $sval;
            if (!empty($namespace)) {
                $this->namespace['EntityType'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DeletionDate') {
            $sval = $child->nodeValue;
            $this->DeletionDate = $sval;
            if (!empty($namespace)) {
                $this->namespace['DeletionDate'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ErrorMessage') {
            $sval = $child->nodeValue;
            $this->ErrorMessage = $sval;
            if (!empty($namespace)) {
                $this->namespace['ErrorMessage'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Parent') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('Parent');
            $this->setParent($obj);
            if (!empty($namespace)) {
                $this->namespace['Parent'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StrandedItemVimObjects') {
            $obj = new VMware_VCloud_API_Extension_StrandedItemVimObjectsType();
            $obj->build($child);
            $obj->set_tagName('StrandedItemVimObjects');
            $this->setStrandedItemVimObjects($obj);
            if (!empty($namespace)) {
                $this->namespace['StrandedItemVimObjects'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}