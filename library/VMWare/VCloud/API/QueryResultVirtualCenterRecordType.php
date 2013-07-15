<?php
class VMware_VCloud_API_QueryResultVirtualCenterRecordType extends VMware_VCloud_API_QueryResultRecordType {
    protected $userName = null;
    protected $status = null;
    protected $name = null;
    protected $isSupported = null;
    protected $url = null;
    protected $isEnabled = null;
    protected $vsmIP = null;
    protected $vcVersion = null;
    protected $isBusy = null;
    protected $uuid = null;
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
    * @param string $userName - [optional] an attribute, 
    * @param string $status - [optional] an attribute, 
    * @param string $name - [optional] an attribute, 
    * @param boolean $isSupported - [optional] an attribute, 
    * @param string $url - [optional] an attribute, 
    * @param boolean $isEnabled - [optional] an attribute, 
    * @param string $vsmIP - [optional] an attribute, 
    * @param string $vcVersion - [optional] an attribute, 
    * @param boolean $isBusy - [optional] an attribute, 
    * @param string $uuid - [optional] an attribute, 
    */
    public function __construct($href=null, $type=null, $id=null, $Link=null, $Metadata=null, $userName=null, $status=null, $name=null, $isSupported=null, $url=null, $isEnabled=null, $vsmIP=null, $vcVersion=null, $isBusy=null, $uuid=null) {
        parent::__construct($href, $type, $id, $Link, $Metadata);
        $this->userName = $userName;
        $this->status = $status;
        $this->name = $name;
        $this->isSupported = $isSupported;
        $this->url = $url;
        $this->isEnabled = $isEnabled;
        $this->vsmIP = $vsmIP;
        $this->vcVersion = $vcVersion;
        $this->isBusy = $isBusy;
        $this->uuid = $uuid;
        $this->tagName = 'VirtualCenterRecord';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function get_userName(){
        return $this->userName;
    }
    public function set_userName($userName) {
        $this->userName = $userName;
    }
    public function get_status(){
        return $this->status;
    }
    public function set_status($status) {
        $this->status = $status;
    }
    public function get_name(){
        return $this->name;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_isSupported(){
        return $this->isSupported;
    }
    public function set_isSupported($isSupported) {
        $this->isSupported = $isSupported;
    }
    public function get_url(){
        return $this->url;
    }
    public function set_url($url) {
        $this->url = $url;
    }
    public function get_isEnabled(){
        return $this->isEnabled;
    }
    public function set_isEnabled($isEnabled) {
        $this->isEnabled = $isEnabled;
    }
    public function get_vsmIP(){
        return $this->vsmIP;
    }
    public function set_vsmIP($vsmIP) {
        $this->vsmIP = $vsmIP;
    }
    public function get_vcVersion(){
        return $this->vcVersion;
    }
    public function set_vcVersion($vcVersion) {
        $this->vcVersion = $vcVersion;
    }
    public function get_isBusy(){
        return $this->isBusy;
    }
    public function set_isBusy($isBusy) {
        $this->isBusy = $isBusy;
    }
    public function get_uuid(){
        return $this->uuid;
    }
    public function set_uuid($uuid) {
        $this->uuid = $uuid;
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
        if (!is_null($this->userName)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'userName', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'userName=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->userName, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='userName')));
        }
        if (!is_null($this->status)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'status', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'status=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->status, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='status')));
        }
        if (!is_null($this->name)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'name', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'name=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->name, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='name')));
        }
        if (!is_null($this->isSupported)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isSupported', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isSupported=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isSupported, $input_name='isSupported')));
        }
        if (!is_null($this->url)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'url', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'url=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->url, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='url')));
        }
        if (!is_null($this->isEnabled)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isEnabled', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isEnabled=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isEnabled, $input_name='isEnabled')));
        }
        if (!is_null($this->vsmIP)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vsmIP', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vsmIP=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vsmIP, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vsmIP')));
        }
        if (!is_null($this->vcVersion)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'vcVersion', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'vcVersion=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->vcVersion, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='vcVersion')));
        }
        if (!is_null($this->isBusy)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'isBusy', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'isBusy=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_boolean($this->isBusy, $input_name='isBusy')));
        }
        if (!is_null($this->uuid)) {
            $ns = VMware_VCloud_API_Helper::getAttributeNamespaceTag($this->namespace, 'uuid', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, ' ' . $ns . 'uuid=' . VMware_VCloud_API_Helper::quote_attrib(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->uuid, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='uuid')));
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
        $nduserName = $attrs->getNamedItem('userName');
        if (!is_null($nduserName)) {
            $this->userName = $nduserName->value;
            if (isset($nduserName->prefix)) {
                $this->namespace['userName'] = $nduserName->prefix;
                $nsUri = $nduserName->lookupNamespaceURI($nduserName->prefix);
            }
            $node->removeAttributeNS($nsUri, 'userName');
        } else {
            $this->userName = null;
        }
        $ndstatus = $attrs->getNamedItem('status');
        if (!is_null($ndstatus)) {
            $this->status = $ndstatus->value;
            if (isset($ndstatus->prefix)) {
                $this->namespace['status'] = $ndstatus->prefix;
                $nsUri = $ndstatus->lookupNamespaceURI($ndstatus->prefix);
            }
            $node->removeAttributeNS($nsUri, 'status');
        } else {
            $this->status = null;
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
        $ndisSupported = $attrs->getNamedItem('isSupported');
        if (!is_null($ndisSupported)) {
            $this->isSupported = VMware_VCloud_API_Helper::get_boolean($ndisSupported->value);
            if (isset($ndisSupported->prefix)) {
                $this->namespace['isSupported'] = $ndisSupported->prefix;
                $nsUri = $ndisSupported->lookupNamespaceURI($ndisSupported->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isSupported');
        } else {
            $this->isSupported = null;
        }
        $ndurl = $attrs->getNamedItem('url');
        if (!is_null($ndurl)) {
            $this->url = $ndurl->value;
            if (isset($ndurl->prefix)) {
                $this->namespace['url'] = $ndurl->prefix;
                $nsUri = $ndurl->lookupNamespaceURI($ndurl->prefix);
            }
            $node->removeAttributeNS($nsUri, 'url');
        } else {
            $this->url = null;
        }
        $ndisEnabled = $attrs->getNamedItem('isEnabled');
        if (!is_null($ndisEnabled)) {
            $this->isEnabled = VMware_VCloud_API_Helper::get_boolean($ndisEnabled->value);
            if (isset($ndisEnabled->prefix)) {
                $this->namespace['isEnabled'] = $ndisEnabled->prefix;
                $nsUri = $ndisEnabled->lookupNamespaceURI($ndisEnabled->prefix);
            }
            $node->removeAttributeNS($nsUri, 'isEnabled');
        } else {
            $this->isEnabled = null;
        }
        $ndvsmIP = $attrs->getNamedItem('vsmIP');
        if (!is_null($ndvsmIP)) {
            $this->vsmIP = $ndvsmIP->value;
            if (isset($ndvsmIP->prefix)) {
                $this->namespace['vsmIP'] = $ndvsmIP->prefix;
                $nsUri = $ndvsmIP->lookupNamespaceURI($ndvsmIP->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vsmIP');
        } else {
            $this->vsmIP = null;
        }
        $ndvcVersion = $attrs->getNamedItem('vcVersion');
        if (!is_null($ndvcVersion)) {
            $this->vcVersion = $ndvcVersion->value;
            if (isset($ndvcVersion->prefix)) {
                $this->namespace['vcVersion'] = $ndvcVersion->prefix;
                $nsUri = $ndvcVersion->lookupNamespaceURI($ndvcVersion->prefix);
            }
            $node->removeAttributeNS($nsUri, 'vcVersion');
        } else {
            $this->vcVersion = null;
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
        $nduuid = $attrs->getNamedItem('uuid');
        if (!is_null($nduuid)) {
            $this->uuid = $nduuid->value;
            if (isset($nduuid->prefix)) {
                $this->namespace['uuid'] = $nduuid->prefix;
                $nsUri = $nduuid->lookupNamespaceURI($nduuid->prefix);
            }
            $node->removeAttributeNS($nsUri, 'uuid');
        } else {
            $this->uuid = null;
        }
        parent::buildAttributes($node, $namespaces);
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}