<?php
class VMware_VCloud_API_QueryResultCatalogRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $name = null;
    protected $numberOfVAppTemplates = null;
    protected $orgName = null;
    protected $isPublished = null;
    protected $ownerName = null;
    protected $numberOfMedia = null;
    protected $owner = null;
    protected $creationDate = null;
    protected $isShared = null;
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
    * @param string $name - [optional] an attribute, 
    * @param int $numberOfVAppTemplates - [optional] an attribute, 
    * @param string $orgName - [optional] an attribute, 
    * @param boolean $isPublished - [optional] an attribute, 
    * @param string $ownerName - [optional] an attribute, 
    * @param int $numberOfMedia - [optional] an attribute, 
    * @param string $owner - [optional] an attribute, 
    * @param dateTime $creationDate - [optional] an attribute, 
    * @param boolean $isShared - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $name=null, $numberOfVAppTemplates=null, $orgName=null, $isPublished=null, $ownerName=null, $numberOfMedia=null, $owner=null, $creationDate=null, $isShared=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->name = $name;
        $this->numberOfVAppTemplates = $numberOfVAppTemplates;
        $this->orgName = $orgName;
        $this->isPublished = $isPublished;
        $this->ownerName = $ownerName;
        $this->numberOfMedia = $numberOfMedia;
        $this->owner = $owner;
        $this->creationDate = $creationDate;
        $this->isShared = $isShared;
        $this->tagName = 'CatalogRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_numberOfVAppTemplates(){
        return $this->numberOfVAppTemplates;
    }
    public function set_numberOfVAppTemplates($numberOfVAppTemplates) {
        $this->numberOfVAppTemplates = $numberOfVAppTemplates;
    }
    public function get_orgName(){
        return $this->orgName;
    }
    public function set_orgName($orgName) {
        $this->orgName = $orgName;
    }
    public function get_isPublished(){
        return $this->isPublished;
    }
    public function set_isPublished($isPublished) {
        $this->isPublished = $isPublished;
    }
    public function get_ownerName(){
        return $this->ownerName;
    }
    public function set_ownerName($ownerName) {
        $this->ownerName = $ownerName;
    }
    public function get_numberOfMedia(){
        return $this->numberOfMedia;
    }
    public function set_numberOfMedia($numberOfMedia) {
        $this->numberOfMedia = $numberOfMedia;
    }
    public function get_owner(){
        return $this->owner;
    }
    public function set_owner($owner) {
        $this->owner = $owner;
    }
    public function get_creationDate(){
        return $this->creationDate;
    }
    public function set_creationDate($creationDate) {
        $this->creationDate = $creationDate;
    }
    public function get_isShared(){
        return $this->isShared;
    }
    public function set_isShared($isShared) {
        $this->isShared = $isShared;
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
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->numberOfVAppTemplates)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfVAppTemplates', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfVAppTemplates=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfVAppTemplates, $input_name='numberOfVAppTemplates')));
        }
        if (!is_null($this->orgName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'orgName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'orgName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->orgName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='orgName')));
        }
        if (!is_null($this->isPublished)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isPublished', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isPublished=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isPublished, $input_name='isPublished')));
        }
        if (!is_null($this->ownerName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'ownerName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'ownerName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ownerName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ownerName')));
        }
        if (!is_null($this->numberOfMedia)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfMedia', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfMedia=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfMedia, $input_name='numberOfMedia')));
        }
        if (!is_null($this->owner)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'owner', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'owner=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->owner, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='owner')));
        }
        if (!is_null($this->creationDate)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'creationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'creationDate=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->creationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='creationDate')));
        }
        if (!is_null($this->isShared)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isShared', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isShared=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isShared, $input_name='isShared')));
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
        $ndnumberOfVAppTemplates = $attrs->getNamedItem('numberOfVAppTemplates');
        if (!is_null($ndnumberOfVAppTemplates)) {
            $this->numberOfVAppTemplates = sprintf('%d', $ndnumberOfVAppTemplates->value);
            if (isset($ndnumberOfVAppTemplates->prefix)) {
                $this->namespace['numberOfVAppTemplates'] = $ndnumberOfVAppTemplates->prefix;
                $nsUri = $ndnumberOfVAppTemplates->lookupNamespaceURI($ndnumberOfVAppTemplates->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfVAppTemplates');
        } else {
            $this->numberOfVAppTemplates = null;
        }
        $ndorgName = $attrs->getNamedItem('orgName');
        if (!is_null($ndorgName)) {
            $this->orgName = $ndorgName->value;
            if (isset($ndorgName->prefix)) {
                $this->namespace['orgName'] = $ndorgName->prefix;
                $nsUri = $ndorgName->lookupNamespaceURI($ndorgName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'orgName');
        } else {
            $this->orgName = null;
        }
        $ndisPublished = $attrs->getNamedItem('isPublished');
        if (!is_null($ndisPublished)) {
            $this->isPublished = VMware_VCloud_API_Helper::get_boolean($ndisPublished->value);
            if (isset($ndisPublished->prefix)) {
                $this->namespace['isPublished'] = $ndisPublished->prefix;
                $nsUri = $ndisPublished->lookupNamespaceURI($ndisPublished->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isPublished');
        } else {
            $this->isPublished = null;
        }
        $ndownerName = $attrs->getNamedItem('ownerName');
        if (!is_null($ndownerName)) {
            $this->ownerName = $ndownerName->value;
            if (isset($ndownerName->prefix)) {
                $this->namespace['ownerName'] = $ndownerName->prefix;
                $nsUri = $ndownerName->lookupNamespaceURI($ndownerName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'ownerName');
        } else {
            $this->ownerName = null;
        }
        $ndnumberOfMedia = $attrs->getNamedItem('numberOfMedia');
        if (!is_null($ndnumberOfMedia)) {
            $this->numberOfMedia = sprintf('%d', $ndnumberOfMedia->value);
            if (isset($ndnumberOfMedia->prefix)) {
                $this->namespace['numberOfMedia'] = $ndnumberOfMedia->prefix;
                $nsUri = $ndnumberOfMedia->lookupNamespaceURI($ndnumberOfMedia->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfMedia');
        } else {
            $this->numberOfMedia = null;
        }
        $ndowner = $attrs->getNamedItem('owner');
        if (!is_null($ndowner)) {
            $this->owner = $ndowner->value;
            if (isset($ndowner->prefix)) {
                $this->namespace['owner'] = $ndowner->prefix;
                $nsUri = $ndowner->lookupNamespaceURI($ndowner->prefix);
            }
            $node->removeAttributeNS($nsUri, 'owner');
        } else {
            $this->owner = null;
        }
        $ndcreationDate = $attrs->getNamedItem('creationDate');
        if (!is_null($ndcreationDate)) {
            $this->creationDate = $ndcreationDate->value;
            if (isset($ndcreationDate->prefix)) {
                $this->namespace['creationDate'] = $ndcreationDate->prefix;
                $nsUri = $ndcreationDate->lookupNamespaceURI($ndcreationDate->prefix);
            }
            $node->removeAttributeNS($nsUri, 'creationDate');
        } else {
            $this->creationDate = null;
        }
        $ndisShared = $attrs->getNamedItem('isShared');
        if (!is_null($ndisShared)) {
            $this->isShared = VMware_VCloud_API_Helper::get_boolean($ndisShared->value);
            if (isset($ndisShared->prefix)) {
                $this->namespace['isShared'] = $ndisShared->prefix;
                $nsUri = $ndisShared->lookupNamespaceURI($ndisShared->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isShared');
        } else {
            $this->isShared = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}