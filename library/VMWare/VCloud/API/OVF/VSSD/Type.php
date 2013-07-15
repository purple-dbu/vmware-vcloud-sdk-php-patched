<?php
class VMware_VCloud_API_OVF_VSSD_Type extends VMware_VCloud_API_OVF_CIM_VirtualSystemSettingData_Type {
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://schemas.dmtf.org/ovf/envelope/1';

   /**
    * @param VMware_VCloud_API_OVF_AutomaticRecoveryAction $AutomaticRecoveryAction - [optional]
    * @param VMware_VCloud_API_OVF_AutomaticShutdownAction $AutomaticShutdownAction - [optional]
    * @param VMware_VCloud_API_OVF_AutomaticStartupAction $AutomaticStartupAction - [optional]
    * @param VMware_VCloud_API_OVF_cimDateTime $AutomaticStartupActionDelay - [optional]
    * @param VMware_VCloud_API_OVF_cimUnsignedShort $AutomaticStartupActionSequenceNumber - [optional]
    * @param VMware_VCloud_API_OVF_Caption $Caption - [optional]
    * @param VMware_VCloud_API_OVF_ChangeableType $ChangeableType - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationDataRoot - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationFile - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationID - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ConfigurationName - [optional]
    * @param VMware_VCloud_API_OVF_cimDateTime $CreationTime - [optional]
    * @param VMware_VCloud_API_OVF_cimString $Description - [optional]
    * @param VMware_VCloud_API_OVF_cimString $ElementName - [required]
    * @param VMware_VCloud_API_OVF_cimUnsignedLong $Generation - [optional]
    * @param VMware_VCloud_API_OVF_cimString $InstanceID - [required]
    * @param VMware_VCloud_API_OVF_cimString $LogDataRoot - [optional]
    * @param array $Notes - [optional] an array of VMware_VCloud_API_OVF_cimString objects
    * @param VMware_VCloud_API_OVF_cimString $RecoveryFile - [optional]
    * @param VMware_VCloud_API_OVF_cimString $SnapshotDataRoot - [optional]
    * @param VMware_VCloud_API_OVF_cimString $SuspendDataRoot - [optional]
    * @param VMware_VCloud_API_OVF_cimString $SwapFileDataRoot - [optional]
    * @param VMware_VCloud_API_OVF_cimString $VirtualSystemIdentifier - [optional]
    * @param VMware_VCloud_API_OVF_cimString $VirtualSystemType - [optional]
    * @param array $Any - [optional] an array of any type of objects
    */
    public function __construct($AutomaticRecoveryAction=null, $AutomaticShutdownAction=null, $AutomaticStartupAction=null, $AutomaticStartupActionDelay=null, $AutomaticStartupActionSequenceNumber=null, $Caption=null, $ChangeableType=null, $ConfigurationDataRoot=null, $ConfigurationFile=null, $ConfigurationID=null, $ConfigurationName=null, $CreationTime=null, $Description=null, $ElementName=null, $Generation=null, $InstanceID=null, $LogDataRoot=null, $Notes=null, $RecoveryFile=null, $SnapshotDataRoot=null, $SuspendDataRoot=null, $SwapFileDataRoot=null, $VirtualSystemIdentifier=null, $VirtualSystemType=null, $Any=null) {
        parent::__construct($AutomaticRecoveryAction, $AutomaticShutdownAction, $AutomaticStartupAction, $AutomaticStartupActionDelay, $AutomaticStartupActionSequenceNumber, $Caption, $ChangeableType, $ConfigurationDataRoot, $ConfigurationFile, $ConfigurationID, $ConfigurationName, $CreationTime, $Description, $ElementName, $Generation, $InstanceID, $LogDataRoot, $Notes, $RecoveryFile, $SnapshotDataRoot, $SuspendDataRoot, $SwapFileDataRoot, $VirtualSystemIdentifier, $VirtualSystemType, $Any);
        $this->anyAttributes = array();
        $this->tagName = 'System';
        $this->namespacedef = ' xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:ns12="http://www.vmware.com/vcloud/v1.5" xmlns:ovf="http://schemas.dmtf.org/ovf/envelope/1" xmlns:ovfenv="http://schemas.dmtf.org/ovf/environment/1" xmlns:cim="http://schemas.dmtf.org/wbem/wscim/1/common" xmlns:rasd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_ResourceAllocationSettingData" xmlns:vssd="http://schemas.dmtf.org/wbem/wscim/1/cim-schema/2/CIM_VirtualSystemSettingData" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
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
        $this->anyAttributes = array();
        foreach ($attrs as $attr) {
            $localName = $attr->localName;
            $this->anyAttributes[$localName] = $attr->value;
            $node->removeAttribute($localName);
            $this->namespace[$localName] = $attr->prefix;
        }
    }
    protected function buildChildren($child, $nodeName, $namespace='') {
        parent::buildChildren($child, $nodeName, $namespace);
    }
}