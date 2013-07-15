<?php
class VMware_VCloud_API_Extension_PortGroupPoolType extends VMware_VCloud_API_Extension_VMWNetworkPoolType {
    protected $PortGroupRefs = null;
    protected $VimServer = null;
    protected $UsedNetworksCount = null;
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
    * @param int $status - [optional] an attribute, 
    * @param VMware_VCloud_API_FilesListType $Files - [optional]
    * @param VMware_VCloud_API_Extension_VimObjectRefsType $PortGroupRefs - [required]
    * @param VMware_VCloud_API_ReferenceType $VimServer - [required]
    * @param int $UsedNetworksCount - [optional] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $operationKey=null, $id=null, $name=null, $Description=null, $Tasks=null, $status=null, $Files=null, $PortGroupRefs=null, $VimServer=null, $UsedNetworksCount=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link, $operationKey, $id, $name, $Description, $Tasks, $status, $Files);
        $this->PortGroupRefs = $PortGroupRefs;
        $this->VimServer = $VimServer;
        $this->UsedNetworksCount = $UsedNetworksCount;
        $this->tagName = 'VMWNetworkPool';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getPortGroupRefs() {
        return $this->PortGroupRefs;
    }
    public function setPortGroupRefs($PortGroupRefs) { 
        $this->PortGroupRefs = $PortGroupRefs;
    }
    public function getVimServer() {
        return $this->VimServer;
    }
    public function setVimServer($VimServer) { 
        $this->VimServer = $VimServer;
    }
    public function getUsedNetworksCount() {
        return $this->UsedNetworksCount;
    }
    public function setUsedNetworksCount($UsedNetworksCount) { 
        $this->UsedNetworksCount = $UsedNetworksCount;
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
            if (0 >= strpos($namespacedef, 'xsi:type')) {
                $namespacedef = $namespacedef . " xsi:type='PortGroupPoolType'";
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
        if (!is_null($this->PortGroupRefs)) {
            $out = $this->PortGroupRefs->export('PortGroupRefs', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->VimServer)) {
            $out = $this->VimServer->export('VimServer', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->UsedNetworksCount)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'UsedNetworksCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "UsedNetworksCount>" . VMware_VCloud_API_Helper::format_integer($this->UsedNetworksCount, $input_name='UsedNetworksCount') . "</" . $ns . "UsedNetworksCount>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->PortGroupRefs) ||
            !is_null($this->VimServer) ||
            !is_null($this->UsedNetworksCount) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PortGroupRefs') {
            $obj = new VMware_VCloud_API_Extension_VimObjectRefsType();
            $obj->build($child);
            $obj->set_tagName('PortGroupRefs');
            $this->setPortGroupRefs($obj);
            if (!empty($namespace)) {
                $this->namespace['PortGroupRefs'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'VimServer') {
            $obj = new VMware_VCloud_API_ReferenceType();
            $obj->build($child);
            $obj->set_tagName('VimServer');
            $this->setVimServer($obj);
            if (!empty($namespace)) {
                $this->namespace['VimServer'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'UsedNetworksCount') {
            $sval = $child->nodeValue;
            $this->UsedNetworksCount = $sval;
            if (!empty($namespace)) {
                $this->namespace['UsedNetworksCount'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}