<?php
class VMware_VCloud_API_Extension_BlockingTaskSettingsType extends VMware_VCloud_API_ResourceType {
    protected $TimeoutAction = null;
    protected $BlockingTaskOperations = null;
    protected $TimeoutInMilliseconds = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $TimeoutAction - [required] 
    * @param VMware_VCloud_API_TaskOperationListType $BlockingTaskOperations - [required]
    * @param string $TimeoutInMilliseconds - [required] 
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $TimeoutAction=null, $BlockingTaskOperations=null, $TimeoutInMilliseconds=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->TimeoutAction = $TimeoutAction;
        $this->BlockingTaskOperations = $BlockingTaskOperations;
        $this->TimeoutInMilliseconds = $TimeoutInMilliseconds;
        $this->tagName = 'BlockingTaskSettings';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getTimeoutAction() {
        return $this->TimeoutAction;
    }
    public function setTimeoutAction($TimeoutAction) { 
        $this->TimeoutAction = $TimeoutAction;
    }
    public function getBlockingTaskOperations() {
        return $this->BlockingTaskOperations;
    }
    public function setBlockingTaskOperations($BlockingTaskOperations) { 
        $this->BlockingTaskOperations = $BlockingTaskOperations;
    }
    public function getTimeoutInMilliseconds() {
        return $this->TimeoutInMilliseconds;
    }
    public function setTimeoutInMilliseconds($TimeoutInMilliseconds) { 
        $this->TimeoutInMilliseconds = $TimeoutInMilliseconds;
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
        if (!is_null($this->TimeoutAction)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'TimeoutAction', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "TimeoutAction>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->TimeoutAction, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='TimeoutAction')) . "</" . $ns . "TimeoutAction>\n");
        }
        if (!is_null($this->BlockingTaskOperations)) {
            $out = $this->BlockingTaskOperations->export('BlockingTaskOperations', $out, $level, '', $namespace, $rootNS);
        }
        if (!is_null($this->TimeoutInMilliseconds)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'TimeoutInMilliseconds', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "TimeoutInMilliseconds>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->TimeoutInMilliseconds, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='TimeoutInMilliseconds')) . "</" . $ns . "TimeoutInMilliseconds>\n");
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->TimeoutAction) ||
            !is_null($this->BlockingTaskOperations) ||
            !is_null($this->TimeoutInMilliseconds) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TimeoutAction') {
            $sval = $child->nodeValue;
            $this->TimeoutAction = $sval;
            if (!empty($namespace)) {
                $this->namespace['TimeoutAction'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'BlockingTaskOperations') {
            $obj = new VMware_VCloud_API_TaskOperationListType();
            $obj->build($child);
            $obj->set_tagName('BlockingTaskOperations');
            $this->setBlockingTaskOperations($obj);
            if (!empty($namespace)) {
                $this->namespace['BlockingTaskOperations'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'TimeoutInMilliseconds') {
            $sval = $child->nodeValue;
            $this->TimeoutInMilliseconds = $sval;
            if (!empty($namespace)) {
                $this->namespace['TimeoutInMilliseconds'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}