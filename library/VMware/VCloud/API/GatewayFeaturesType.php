<?php
class VMware_VCloud_API_GatewayFeaturesType extends VMware_VCloud_API_VCloudExtensibleType {
    protected $NetworkService = array();
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param array $NetworkService - [optional] an array of VMware_VCloud_API_NetworkServiceType objects
    */
    public function __construct($VCloudExtension=null, $NetworkService=null) {
        parent::__construct($VCloudExtension);
        if (!is_null($NetworkService)) {
            $this->NetworkService = $NetworkService;
        }
        $this->tagName = 'EdgeGatewayServiceConfiguration';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getNetworkService() {
        return $this->NetworkService;
    }
    public function setNetworkService($NetworkService) { 
        $this->NetworkService = $NetworkService;
    }
    public function addNetworkService($value) { array_push($this->NetworkService, $value); }
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
        foreach ($this->NetworkService as $NetworkService) {
            $tagName = $NetworkService->get_tagName();
            $out = $NetworkService->export($tagName, $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !empty($this->NetworkService) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NetworkService') {
            $obj = new VMware_VCloud_API_NetworkServiceType();
            $obj->build($child);
            $obj->set_tagName('NetworkService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['NetworkService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DhcpService') {
            $obj = new VMware_VCloud_API_DhcpServiceType();
            $obj->build($child);
            $obj->set_tagName('DhcpService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['DhcpService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FirewallService') {
            $obj = new VMware_VCloud_API_FirewallServiceType();
            $obj->build($child);
            $obj->set_tagName('FirewallService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['FirewallService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NatService') {
            $obj = new VMware_VCloud_API_NatServiceType();
            $obj->build($child);
            $obj->set_tagName('NatService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['NatService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnService') {
            $obj = new VMware_VCloud_API_IpsecVpnServiceType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StaticRoutingService') {
            $obj = new VMware_VCloud_API_StaticRoutingServiceType();
            $obj->build($child);
            $obj->set_tagName('StaticRoutingService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['StaticRoutingService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GatewayIpsecVpnService') {
            $obj = new VMware_VCloud_API_GatewayIpsecVpnServiceType();
            $obj->build($child);
            $obj->set_tagName('GatewayIpsecVpnService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['GatewayIpsecVpnService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LoadBalancerService') {
            $obj = new VMware_VCloud_API_LoadBalancerServiceType();
            $obj->build($child);
            $obj->set_tagName('LoadBalancerService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['LoadBalancerService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GatewayDhcpService') {
            $obj = new VMware_VCloud_API_GatewayDhcpServiceType();
            $obj->build($child);
            $obj->set_tagName('GatewayDhcpService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['GatewayDhcpService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'DhcpService') {
            $obj = new VMware_VCloud_API_DhcpServiceType();
            $obj->build($child);
            $obj->set_tagName('DhcpService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['DhcpService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'FirewallService') {
            $obj = new VMware_VCloud_API_FirewallServiceType();
            $obj->build($child);
            $obj->set_tagName('FirewallService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['FirewallService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'NatService') {
            $obj = new VMware_VCloud_API_NatServiceType();
            $obj->build($child);
            $obj->set_tagName('NatService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['NatService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'IpsecVpnService') {
            $obj = new VMware_VCloud_API_IpsecVpnServiceType();
            $obj->build($child);
            $obj->set_tagName('IpsecVpnService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['IpsecVpnService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'StaticRoutingService') {
            $obj = new VMware_VCloud_API_StaticRoutingServiceType();
            $obj->build($child);
            $obj->set_tagName('StaticRoutingService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['StaticRoutingService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GatewayIpsecVpnService') {
            $obj = new VMware_VCloud_API_GatewayIpsecVpnServiceType();
            $obj->build($child);
            $obj->set_tagName('GatewayIpsecVpnService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['GatewayIpsecVpnService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LoadBalancerService') {
            $obj = new VMware_VCloud_API_LoadBalancerServiceType();
            $obj->build($child);
            $obj->set_tagName('LoadBalancerService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['LoadBalancerService'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'GatewayDhcpService') {
            $obj = new VMware_VCloud_API_GatewayDhcpServiceType();
            $obj->build($child);
            $obj->set_tagName('GatewayDhcpService');
            array_push($this->NetworkService, $obj);
            if (!empty($namespace)) {
                $this->namespace['GatewayDhcpService'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}