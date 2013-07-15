<?php
class VMware_VCloud_API_QueryResultStrandedItemRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $deletionDate = null;
    protected $vimObjectType = null;
    protected $name = null;
    protected $parent = null;
    protected $parentName = null;
    protected $numberOfPurgeAttempts = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param string $id - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param VMware_VCloud_API_MetadataType $Metadata - [optional]
    * @param dateTime $deletionDate - [optional] an attribute, 
    * @param string $vimObjectType - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param string $parent - [optional] an attribute, 
    * @param string $parentName - [optional] an attribute, 
    * @param int $numberOfPurgeAttempts - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $deletionDate=null, $vimObjectType=null, $name=null, $parent=null, $parentName=null, $numberOfPurgeAttempts=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->deletionDate = $deletionDate;
        $this->vimObjectType = $vimObjectType;
        $this->name = $name;
        $this->parent = $parent;
        $this->parentName = $parentName;
        $this->numberOfPurgeAttempts = $numberOfPurgeAttempts;
        $this->tagName = 'StrandedItemRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_deletionDate(){
        return $this->deletionDate;
    }
    public function set_deletionDate($deletionDate) {
        $this->deletionDate = $deletionDate;
    }
    public function get_vimObjectType(){
        return $this->vimObjectType;
    }
    public function set_vimObjectType($vimObjectType) {
        $this->vimObjectType = $vimObjectType;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_parent(){
        return $this->parent;
    }
    public function set_parent($parent) {
        $this->parent = $parent;
    }
    public function get_parentName(){
        return $this->parentName;
    }
    public function set_parentName($parentName) {
        $this->parentName = $parentName;
    }
    public function get_numberOfPurgeAttempts(){
        return $this->numberOfPurgeAttempts;
    }
    public function set_numberOfPurgeAttempts($numberOfPurgeAttempts) {
        $this->numberOfPurgeAttempts = $numberOfPurgeAttempts;
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
        if (!is_null($this->deletionDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'deletionDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'deletionDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->deletionDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='deletionDate')));
        }
        if (!is_null($this->vimObjectType)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vimObjectType', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vimObjectType=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vimObjectType, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vimObjectType')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->parent)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'parent', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'parent=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->parent, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='parent')));
        }
        if (!is_null($this->parentName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'parentName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'parentName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->parentName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='parentName')));
        }
        if (!is_null($this->numberOfPurgeAttempts)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfPurgeAttempts', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfPurgeAttempts=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfPurgeAttempts, $input_name='numberOfPurgeAttempts')));
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
        $nddeletionDate = $attrs->getNamedItem('deletionDate');
        if (!is_null($nddeletionDate)) {
            $this->deletionDate = $nddeletionDate->value;
            if (isset($nddeletionDate->prefix)) {
                $this->namespace['deletionDate'] = $nddeletionDate->prefix;
                $nsUri = $nddeletionDate->lookupNamespaceURI($nddeletionDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'deletionDate');
        } else {
            $this->deletionDate = null;
        }
        $ndvimObjectType = $attrs->getNamedItem('vimObjectType');
        if (!is_null($ndvimObjectType)) {
            $this->vimObjectType = $ndvimObjectType->value;
            if (isset($ndvimObjectType->prefix)) {
                $this->namespace['vimObjectType'] = $ndvimObjectType->prefix;
                $nsUri = $ndvimObjectType->lookupNamespaceURI($ndvimObjectType->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vimObjectType');
        } else {
            $this->vimObjectType = null;
        }
        $ndname = $attrs->getNamedItem('name');
        if (!is_null($ndname)) {
            $this->name = $ndname->value;
            if (isset($ndname->prefix)) {
                $this->namespace['name'] = $ndname->prefix;
                $nsUri = $ndname->lookupNamespaceURI($ndname->prefix);
            }
            $node->removeAttributeNS($nsUri, 'name');
        } else {
            $this->name = null;
        }
        $ndparent = $attrs->getNamedItem('parent');
        if (!is_null($ndparent)) {
            $this->parent = $ndparent->value;
            if (isset($ndparent->prefix)) {
                $this->namespace['parent'] = $ndparent->prefix;
                $nsUri = $ndparent->lookupNamespaceURI($ndparent->prefix);
            }
            $node->removeAttributeNS($nsUri, 'parent');
        } else {
            $this->parent = null;
        }
        $ndparentName = $attrs->getNamedItem('parentName');
        if (!is_null($ndparentName)) {
            $this->parentName = $ndparentName->value;
            if (isset($ndparentName->prefix)) {
                $this->namespace['parentName'] = $ndparentName->prefix;
                $nsUri = $ndparentName->lookupNamespaceURI($ndparentName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'parentName');
        } else {
            $this->parentName = null;
        }
        $ndnumberOfPurgeAttempts = $attrs->getNamedItem('numberOfPurgeAttempts');
        if (!is_null($ndnumberOfPurgeAttempts)) {
            $this->numberOfPurgeAttempts = sprintf('%d', $ndnumberOfPurgeAttempts->value);
            if (isset($ndnumberOfPurgeAttempts->prefix)) {
                $this->namespace['numberOfPurgeAttempts'] = $ndnumberOfPurgeAttempts->prefix;
                $nsUri = $ndnumberOfPurgeAttempts->lookupNamespaceURI($ndnumberOfPurgeAttempts->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfPurgeAttempts');
        } else {
            $this->numberOfPurgeAttempts = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}