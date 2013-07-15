<?php
class VMware_VCloud_API_QueryResultEdgeGatewayRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $name = null;
    protected $haStatus = null;
    protected $gatewayStatus = null;
    protected $vdc = null;
    protected $numberOfExtNetworks = null;
    protected $numberOfOrgNetworks = null;
    protected $isBusy = null;
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
    * @param string $haStatus - [optional] an attribute, 
    * @param string $gatewayStatus - [optional] an attribute, 
    * @param string $vdc - [optional] an attribute, 
    * @param int $numberOfExtNetworks - [optional] an attribute, 
    * @param int $numberOfOrgNetworks - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $name=null, $haStatus=null, $gatewayStatus=null, $vdc=null, $numberOfExtNetworks=null, $numberOfOrgNetworks=null, $isBusy=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->name = $name;
        $this->haStatus = $haStatus;
        $this->gatewayStatus = $gatewayStatus;
        $this->vdc = $vdc;
        $this->numberOfExtNetworks = $numberOfExtNetworks;
        $this->numberOfOrgNetworks = $numberOfOrgNetworks;
        $this->isBusy = $isBusy;
        $this->tagName = 'EdgeGatewayRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_haStatus(){
        return $this->haStatus;
    }
    public function set_haStatus($haStatus) {
        $this->haStatus = $haStatus;
    }
    public function get_gatewayStatus(){
        return $this->gatewayStatus;
    }
    public function set_gatewayStatus($gatewayStatus) {
        $this->gatewayStatus = $gatewayStatus;
    }
    public function get_vdc(){
        return $this->vdc;
    }
    public function set_vdc($vdc) {
        $this->vdc = $vdc;
    }
    public function get_numberOfExtNetworks(){
        return $this->numberOfExtNetworks;
    }
    public function set_numberOfExtNetworks($numberOfExtNetworks) {
        $this->numberOfExtNetworks = $numberOfExtNetworks;
    }
    public function get_numberOfOrgNetworks(){
        return $this->numberOfOrgNetworks;
    }
    public function set_numberOfOrgNetworks($numberOfOrgNetworks) {
        $this->numberOfOrgNetworks = $numberOfOrgNetworks;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
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
        if (!is_null($this->haStatus)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'haStatus', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'haStatus=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->haStatus, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='haStatus')));
        }
        if (!is_null($this->gatewayStatus)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'gatewayStatus', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'gatewayStatus=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->gatewayStatus, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='gatewayStatus')));
        }
        if (!is_null($this->vdc)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vdc', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vdc=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vdc, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vdc')));
        }
        if (!is_null($this->numberOfExtNetworks)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfExtNetworks', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfExtNetworks=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfExtNetworks, $input_name='numberOfExtNetworks')));
        }
        if (!is_null($this->numberOfOrgNetworks)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'numberOfOrgNetworks', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'numberOfOrgNetworks=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_integer($this->numberOfOrgNetworks, $input_name='numberOfOrgNetworks')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
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
        $ndhaStatus = $attrs->getNamedItem('haStatus');
        if (!is_null($ndhaStatus)) {
            $this->haStatus = $ndhaStatus->value;
            if (isset($ndhaStatus->prefix)) {
                $this->namespace['haStatus'] = $ndhaStatus->prefix;
                $nsUri = $ndhaStatus->lookupNamespaceURI($ndhaStatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'haStatus');
        } else {
            $this->haStatus = null;
        }
        $ndgatewayStatus = $attrs->getNamedItem('gatewayStatus');
        if (!is_null($ndgatewayStatus)) {
            $this->gatewayStatus = $ndgatewayStatus->value;
            if (isset($ndgatewayStatus->prefix)) {
                $this->namespace['gatewayStatus'] = $ndgatewayStatus->prefix;
                $nsUri = $ndgatewayStatus->lookupNamespaceURI($ndgatewayStatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'gatewayStatus');
        } else {
            $this->gatewayStatus = null;
        }
        $ndvdc = $attrs->getNamedItem('vdc');
        if (!is_null($ndvdc)) {
            $this->vdc = $ndvdc->value;
            if (isset($ndvdc->prefix)) {
                $this->namespace['vdc'] = $ndvdc->prefix;
                $nsUri = $ndvdc->lookupNamespaceURI($ndvdc->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vdc');
        } else {
            $this->vdc = null;
        }
        $ndnumberOfExtNetworks = $attrs->getNamedItem('numberOfExtNetworks');
        if (!is_null($ndnumberOfExtNetworks)) {
            $this->numberOfExtNetworks = sprintf('%d', $ndnumberOfExtNetworks->value);
            if (isset($ndnumberOfExtNetworks->prefix)) {
                $this->namespace['numberOfExtNetworks'] = $ndnumberOfExtNetworks->prefix;
                $nsUri = $ndnumberOfExtNetworks->lookupNamespaceURI($ndnumberOfExtNetworks->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfExtNetworks');
        } else {
            $this->numberOfExtNetworks = null;
        }
        $ndnumberOfOrgNetworks = $attrs->getNamedItem('numberOfOrgNetworks');
        if (!is_null($ndnumberOfOrgNetworks)) {
            $this->numberOfOrgNetworks = sprintf('%d', $ndnumberOfOrgNetworks->value);
            if (isset($ndnumberOfOrgNetworks->prefix)) {
                $this->namespace['numberOfOrgNetworks'] = $ndnumberOfOrgNetworks->prefix;
                $nsUri = $ndnumberOfOrgNetworks->lookupNamespaceURI($ndnumberOfOrgNetworks->prefix);
            }
            $node->removeAttributeNS($nsUri, 'numberOfOrgNetworks');
        } else {
            $this->numberOfOrgNetworks = null;
        }
        $ndisBusy = $attrs->getNamedItem('isBusy');
        if (!is_null($ndisBusy)) {
            $this->isBusy = VMware_VCloud_API_Helper::get_boolean($ndisBusy->value);
            if (isset($ndisBusy->prefix)) {
                $this->namespace['isBusy'] = $ndisBusy->prefix;
                $nsUri = $ndisBusy->lookupNamespaceURI($ndisBusy->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isBusy');
        } else {
            $this->isBusy = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}