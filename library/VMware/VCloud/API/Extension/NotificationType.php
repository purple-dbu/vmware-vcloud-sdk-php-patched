<?php
class VMware_VCloud_API_Extension_NotificationType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $eventId = null;
    protected $type = null;
    protected $Link = array();
    protected $EntityLink = array();
    protected $Timestamp = null;
    protected $OperationSuccess = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param string $eventId - [required] an attribute, 
    * @param string $type - [required] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param array $EntityLink - [optional] an array of VMware_VCloud_API_EntityLinkType objects
    * @param string $Timestamp - [required] 
    * @param boolean $OperationSuccess - [required] 
    */
    public function __construct($VCloudExtension=null, $eventId=null, $type=null, $Link=null, $EntityLink=null, $Timestamp=null, $OperationSuccess=null) {
        parent::__construct($VCloudExtension);
        $this->eventId = $eventId;
        $this->type = $type;
        if (!is_null($Link)) {
            $this->Link = $Link;
        }
        if (!is_null($EntityLink)) {
            $this->EntityLink = $EntityLink;
        }
        $this->Timestamp = $Timestamp;
        $this->OperationSuccess = $OperationSuccess;
        $this->tagName = 'Notification';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getLink() {
        return $this->Link;
    }
    public function setLink($Link) { 
        $this->Link = $Link;
    }
    public function addLink($value) { array_push($this->Link, $value); }
    public function getEntityLink() {
        return $this->EntityLink;
    }
    public function setEntityLink($EntityLink) { 
        $this->EntityLink = $EntityLink;
    }
    public function addEntityLink($value) { array_push($this->EntityLink, $value); }
    public function getTimestamp() {
        return $this->Timestamp;
    }
    public function setTimestamp($Timestamp) { 
        $this->Timestamp = $Timestamp;
    }
    public function getOperationSuccess() {
        return $this->OperationSuccess;
    }
    public function setOperationSuccess($OperationSuccess) { 
        $this->OperationSuccess = $OperationSuccess;
    }
    public function get_eventId(){
        return $this->eventId;
    }
    public function set_eventId($eventId) {
        $this->eventId = $eventId;
    }
    public function get_type(){
        return $this->type;
    }
    public function set_type($type) {
        $this->type = $type;
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
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'eventId', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'eventId=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->eventId, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='eventId')));
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'type', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'type=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->type, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='type')));
        return $out;
    }
    protected function exportChildren($out, $level, $name, $namespace, $rootNS) {
        $namespace = self::$defaultNS;
        $out = parent::exportChildren($out, $level, $name, $namespace, $rootNS);
        if (isset($this->Link)) {
            foreach ($this->Link as $Link) {
                $out = $Link->export('Link', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (isset($this->EntityLink)) {
            foreach ($this->EntityLink as $EntityLink) {
                $out = $EntityLink->export('EntityLink', $out, $level, '', $namespace, $rootNS);
            }
        }
        if (!is_null($this->Timestamp)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Timestamp', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Timestamp>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->Timestamp, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='Timestamp')) . "</" . $ns . "Timestamp>\n");
        }
        if (!is_null($this->OperationSuccess)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'OperationSuccess', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "OperationSuccess>" . VMware_VCloud_API_Helper::format_boolean($this->OperationSuccess, $input_name='OperationSuccess') . "</" . $ns . "OperationSuccess>\n");
     }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->Link) ||
            !empty($this->EntityLink) ||
            !is_null($this->Timestamp) ||
            !is_null($this->OperationSuccess) ||
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
        $ndeventId = $attrs->getNamedItem('eventId');
        if (!is_null($ndeventId)) {
            $this->eventId = $ndeventId->value;
            if (isset($ndeventId->prefix)) {
                $this->namespace['eventId'] = $ndeventId->prefix;
                $nsUri = $ndeventId->lookupNamespaceURI($ndeventId->prefix);
            }
            $node->removeAttributeNS($nsUri, 'eventId');
        } else {
            $this->eventId = null;
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
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Link') {
            $obj = new VMware_VCloud_API_LinkType();
            $obj->build($child);
            $obj->set_tagName('Link');
            array_push($this->Link, $obj);
            if (!empty($namespace)) {
                $this->namespace['Link'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'EntityLink') {
            $obj = new VMware_VCloud_API_EntityLinkType();
            $obj->build($child);
            $obj->set_tagName('EntityLink');
            array_push($this->EntityLink, $obj);
            if (!empty($namespace)) {
                $this->namespace['EntityLink'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Timestamp') {
            $sval = $child->nodeValue;
            $this->Timestamp = $sval;
            if (!empty($namespace)) {
                $this->namespace['Timestamp'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'OperationSuccess') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->OperationSuccess = $sval;
            if (!empty($namespace)) {
                $this->namespace['OperationSuccess'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}