<?php
class VMware_VCloud_API_OVF_Item {
    protected $stopDelay = null;
    protected $order = null;
    protected $startAction = null;
    protected $startDelay = null;
    protected $waitingForGuest = null;
    protected $stopAction = null;
    protected $id = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param unsignedShort $stopDelay - [optional] an attribute, default '0'
    * @param unsignedShort $order - [required] an attribute, 
    * @param string $startAction - [optional] an attribute, default 'powerOn'
    * @param unsignedShort $startDelay - [optional] an attribute, default '0'
    * @param boolean $waitingForGuest - [optional] an attribute, default 'false'
    * @param string $stopAction - [optional] an attribute, default 'powerOff'
    * @param string $id - [required] an attribute, 
    * @param string $valueOf - [optional]
    */
    public function __construct($stopDelay=0, $order=null, $startAction='powerOn', $startDelay=0, $waitingForGuest=False, $stopAction='powerOff', $id=null, $valueOf='') {
        $this->stopDelay = $stopDelay;
        $this->order = $order;
        $this->startAction = $startAction;
        $this->startDelay = $startDelay;
        $this->waitingForGuest = $waitingForGuest;
        $this->stopAction = $stopAction;
        $this->id = $id;
        $this->valueOf = $valueOf;
        $this->anyAttributes = array();
        $this->tagName = 'Item';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_stopDelay(){
        return $this->stopDelay;
    }
    public function set_stopDelay($stopDelay) {
        $this->stopDelay = $stopDelay;
    }
    public function get_order(){
        return $this->order;
    }
    public function set_order($order) {
        $this->order = $order;
    }
    public function get_startAction(){
        return $this->startAction;
    }
    public function set_startAction($startAction) {
        $this->startAction = $startAction;
    }
    public function get_startDelay(){
        return $this->startDelay;
    }
    public function set_startDelay($startDelay) {
        $this->startDelay = $startDelay;
    }
    public function get_waitingForGuest(){
        return $this->waitingForGuest;
    }
    public function set_waitingForGuest($waitingForGuest) {
        $this->waitingForGuest = $waitingForGuest;
    }
    public function get_stopAction(){
        return $this->stopAction;
    }
    public function set_stopAction($stopAction) {
        $this->stopAction = $stopAction;
    }
    public function get_id(){
        return $this->id;
    }
    public function set_id($id) {
        $this->id = $id;
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
        if (!is_null($this->stopDelay)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'stopDelay', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'stopDelay=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->stopDelay, $input_name='stopDelay')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'order', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'order=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->order, $input_name='order')));
        if (!is_null($this->startAction)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'startAction', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'startAction=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->startAction, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='startAction')));
        }
        if (!is_null($this->startDelay)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'startDelay', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'startDelay=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->startDelay, $input_name='startDelay')));
        }
        if (!is_null($this->waitingForGuest)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'waitingForGuest', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'waitingForGuest=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->waitingForGuest, $input_name='waitingForGuest')));
        }
        if (!is_null($this->stopAction)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'stopAction', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'stopAction=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->stopAction, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='stopAction')));
        }
        $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'id', self::$defaultNS, $namespace, $rootNS);
        $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'id=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->id, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='id')));
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
        $ndstopDelay = $attrs->getNamedItem('stopDelay');
        if (!is_null($ndstopDelay)) {
            $this->stopDelay = sprintf('%d', $ndstopDelay->value);
            if (isset($ndstopDelay->prefix)) {
                $this->namespace['stopDelay'] = $ndstopDelay->prefix;
                $nsUri = $ndstopDelay->lookupNamespaceURI($ndstopDelay->prefix);
            }
            $node->removeAttributeNS($nsUri, 'stopDelay');
        } else {
            $this->stopDelay = null;
        }
        $ndorder = $attrs->getNamedItem('order');
        if (!is_null($ndorder)) {
            $this->order = sprintf('%d', $ndorder->value);
            if (isset($ndorder->prefix)) {
                $this->namespace['order'] = $ndorder->prefix;
                $nsUri = $ndorder->lookupNamespaceURI($ndorder->prefix);
            }
            $node->removeAttributeNS($nsUri, 'order');
        } else {
            $this->order = null;
        }
        $ndstartAction = $attrs->getNamedItem('startAction');
        if (!is_null($ndstartAction)) {
            $this->startAction = $ndstartAction->value;
            if (isset($ndstartAction->prefix)) {
                $this->namespace['startAction'] = $ndstartAction->prefix;
                $nsUri = $ndstartAction->lookupNamespaceURI($ndstartAction->prefix);
            }
            $node->removeAttributeNS($nsUri, 'startAction');
        } else {
            $this->startAction = null;
        }
        $ndstartDelay = $attrs->getNamedItem('startDelay');
        if (!is_null($ndstartDelay)) {
            $this->startDelay = sprintf('%d', $ndstartDelay->value);
            if (isset($ndstartDelay->prefix)) {
                $this->namespace['startDelay'] = $ndstartDelay->prefix;
                $nsUri = $ndstartDelay->lookupNamespaceURI($ndstartDelay->prefix);
            }
            $node->removeAttributeNS($nsUri, 'startDelay');
        } else {
            $this->startDelay = null;
        }
        $ndwaitingForGuest = $attrs->getNamedItem('waitingForGuest');
        if (!is_null($ndwaitingForGuest)) {
            $this->waitingForGuest = VMware_VCloud_API_Helper::get_boolean($ndwaitingForGuest->value);
            if (isset($ndwaitingForGuest->prefix)) {
                $this->namespace['waitingForGuest'] = $ndwaitingForGuest->prefix;
                $nsUri = $ndwaitingForGuest->lookupNamespaceURI($ndwaitingForGuest->prefix);
            }
            $node->removeAttributeNS($nsUri, 'waitingForGuest');
        } else {
            $this->waitingForGuest = null;
        }
        $ndstopAction = $attrs->getNamedItem('stopAction');
        if (!is_null($ndstopAction)) {
            $this->stopAction = $ndstopAction->value;
            if (isset($ndstopAction->prefix)) {
                $this->namespace['stopAction'] = $ndstopAction->prefix;
                $nsUri = $ndstopAction->lookupNamespaceURI($ndstopAction->prefix);
            }
            $node->removeAttributeNS($nsUri, 'stopAction');
        } else {
            $this->stopAction = null;
        }
        $ndid = $attrs->getNamedItem('id');
        if (!is_null($ndid)) {
            $this->id = $ndid->value;
            if (isset($ndid->prefix)) {
                $this->namespace['id'] = $ndid->prefix;
                $nsUri = $ndid->lookupNamespaceURI($ndid->prefix);
            }
            $node->removeAttributeNS($nsUri, 'id');
        } else {
            $this->id = null;
        }
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            if ( $localName != "stopDelay"  && $localName != "order"  && $localName != "startAction"  && $localName != "startDelay"  && $localName != "waitingForGuest"  && $localName != "stopAction"  && $localName != "id" ) {
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