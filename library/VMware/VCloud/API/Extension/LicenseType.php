<?php
class VMware_VCloud_API_Extension_LicenseType extends VMware_VCloud_API_ResourceType {
    protected $SerialNumber = null;
    protected $LicensedVMCount = null;
    protected $ExpirationDate = null;
    protected $ValidSerial = null;
    protected $Expired = null;
    protected $Persisted = null;
    protected $PublishingToRemoteSitesFeature = null;
    protected $SubscribingToRemoteSitesFeature = null;
    protected $LicenseMetricsInfo = null;
    protected $namespace = array();
    protected $namespacedef = null;
    protected $tagName = null;
    public static $defaultNS = 'http://www.vmware.com/vcloud/extension/v1.5';

   /**
    * @param array $VCloudExtension - [optional] an array of VMware_VCloud_API_VCloudExtensionType objects
    * @param anyURI $href - [optional] an attribute, 
    * @param string $type - [optional] an attribute, 
    * @param array $Link - [optional] an array of VMware_VCloud_API_LinkType objects
    * @param string $SerialNumber - [required] 
    * @param int $LicensedVMCount - [optional] 
    * @param string $ExpirationDate - [optional] 
    * @param boolean $ValidSerial - [optional] 
    * @param boolean $Expired - [optional] 
    * @param boolean $Persisted - [optional] 
    * @param boolean $PublishingToRemoteSitesFeature - [optional] 
    * @param boolean $SubscribingToRemoteSitesFeature - [optional] 
    * @param VMware_VCloud_API_Extension_LicenseMetricsInfoType $LicenseMetricsInfo - [optional]
    */
    public function __construct($VCloudExtension=null, $href=null, $type=null, $Link=null, $SerialNumber=null, $LicensedVMCount=null, $ExpirationDate=null, $ValidSerial=null, $Expired=null, $Persisted=null, $PublishingToRemoteSitesFeature=null, $SubscribingToRemoteSitesFeature=null, $LicenseMetricsInfo=null) {
        parent::__construct($VCloudExtension, $href, $type, $Link);
        $this->SerialNumber = $SerialNumber;
        $this->LicensedVMCount = $LicensedVMCount;
        $this->ExpirationDate = $ExpirationDate;
        $this->ValidSerial = $ValidSerial;
        $this->Expired = $Expired;
        $this->Persisted = $Persisted;
        $this->PublishingToRemoteSitesFeature = $PublishingToRemoteSitesFeature;
        $this->SubscribingToRemoteSitesFeature = $SubscribingToRemoteSitesFeature;
        $this->LicenseMetricsInfo = $LicenseMetricsInfo;
        $this->tagName = 'License';
        $this->namespacedef = ' xmlns:vmext="http://www.vmware.com/vcloud/extension/v1.5" xmlns:vcloud="http://www.vmware.com/vcloud/v1.5" xmlns:vmw="http://www.vmware.com/schema/ovf" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"';
    }
    public function getSerialNumber() {
        return $this->SerialNumber;
    }
    public function setSerialNumber($SerialNumber) { 
        $this->SerialNumber = $SerialNumber;
    }
    public function getLicensedVMCount() {
        return $this->LicensedVMCount;
    }
    public function setLicensedVMCount($LicensedVMCount) { 
        $this->LicensedVMCount = $LicensedVMCount;
    }
    public function getExpirationDate() {
        return $this->ExpirationDate;
    }
    public function setExpirationDate($ExpirationDate) { 
        $this->ExpirationDate = $ExpirationDate;
    }
    public function getValidSerial() {
        return $this->ValidSerial;
    }
    public function setValidSerial($ValidSerial) { 
        $this->ValidSerial = $ValidSerial;
    }
    public function getExpired() {
        return $this->Expired;
    }
    public function setExpired($Expired) { 
        $this->Expired = $Expired;
    }
    public function getPersisted() {
        return $this->Persisted;
    }
    public function setPersisted($Persisted) { 
        $this->Persisted = $Persisted;
    }
    public function getPublishingToRemoteSitesFeature() {
        return $this->PublishingToRemoteSitesFeature;
    }
    public function setPublishingToRemoteSitesFeature($PublishingToRemoteSitesFeature) { 
        $this->PublishingToRemoteSitesFeature = $PublishingToRemoteSitesFeature;
    }
    public function getSubscribingToRemoteSitesFeature() {
        return $this->SubscribingToRemoteSitesFeature;
    }
    public function setSubscribingToRemoteSitesFeature($SubscribingToRemoteSitesFeature) { 
        $this->SubscribingToRemoteSitesFeature = $SubscribingToRemoteSitesFeature;
    }
    public function getLicenseMetricsInfo() {
        return $this->LicenseMetricsInfo;
    }
    public function setLicenseMetricsInfo($LicenseMetricsInfo) { 
        $this->LicenseMetricsInfo = $LicenseMetricsInfo;
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
        if (!is_null($this->SerialNumber)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SerialNumber', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SerialNumber>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->SerialNumber, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='SerialNumber')) . "</" . $ns . "SerialNumber>\n");
        }
        if (!is_null($this->LicensedVMCount)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'LicensedVMCount', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "LicensedVMCount>" . VMware_VCloud_API_Helper::format_integer($this->LicensedVMCount, $input_name='LicensedVMCount') . "</" . $ns . "LicensedVMCount>\n");
        }
        if (!is_null($this->ExpirationDate)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ExpirationDate', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ExpirationDate>" . VMware_VCloud_API_Helper::quote_xml(VMware_VCloud_API_Helper::format_string(mb_convert_encoding($this->ExpirationDate, VMware_VCloud_API_Helper::$ExternalEncoding, "auto"), $input_name='ExpirationDate')) . "</" . $ns . "ExpirationDate>\n");
        }
        if (!is_null($this->ValidSerial)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'ValidSerial', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "ValidSerial>" . VMware_VCloud_API_Helper::format_boolean($this->ValidSerial, $input_name='ValidSerial') . "</" . $ns . "ValidSerial>\n");
        }
        if (!is_null($this->Expired)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Expired', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Expired>" . VMware_VCloud_API_Helper::format_boolean($this->Expired, $input_name='Expired') . "</" . $ns . "Expired>\n");
        }
        if (!is_null($this->Persisted)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'Persisted', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "Persisted>" . VMware_VCloud_API_Helper::format_boolean($this->Persisted, $input_name='Persisted') . "</" . $ns . "Persisted>\n");
        }
        if (!is_null($this->PublishingToRemoteSitesFeature)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'PublishingToRemoteSitesFeature', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "PublishingToRemoteSitesFeature>" . VMware_VCloud_API_Helper::format_boolean($this->PublishingToRemoteSitesFeature, $input_name='PublishingToRemoteSitesFeature') . "</" . $ns . "PublishingToRemoteSitesFeature>\n");
        }
        if (!is_null($this->SubscribingToRemoteSitesFeature)) {
            $out = VMware_VCloud_API_Helper::showIndent($out, $level);
            $ns = VMware_VCloud_API_Helper::getNamespaceTag($this->namespace, 'SubscribingToRemoteSitesFeature', self::$defaultNS, $namespace, $rootNS);
            $out = VMware_VCloud_API_Helper::addString($out, "<" . $ns . "SubscribingToRemoteSitesFeature>" . VMware_VCloud_API_Helper::format_boolean($this->SubscribingToRemoteSitesFeature, $input_name='SubscribingToRemoteSitesFeature') . "</" . $ns . "SubscribingToRemoteSitesFeature>\n");
        }
        if (!is_null($this->LicenseMetricsInfo)) {
            $out = $this->LicenseMetricsInfo->export('LicenseMetricsInfo', $out, $level, '', $namespace, $rootNS);
        }
        return $out;
    }
    protected function hasContent() {
        if (
            !is_null($this->SerialNumber) ||
            !is_null($this->LicensedVMCount) ||
            !is_null($this->ExpirationDate) ||
            !is_null($this->ValidSerial) ||
            !is_null($this->Expired) ||
            !is_null($this->Persisted) ||
            !is_null($this->PublishingToRemoteSitesFeature) ||
            !is_null($this->SubscribingToRemoteSitesFeature) ||
            !is_null($this->LicenseMetricsInfo) ||
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
        if ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SerialNumber') {
            $sval = $child->nodeValue;
            $this->SerialNumber = $sval;
            if (!empty($namespace)) {
                $this->namespace['SerialNumber'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LicensedVMCount') {
            $sval = $child->nodeValue;
            $this->LicensedVMCount = $sval;
            if (!empty($namespace)) {
                $this->namespace['LicensedVMCount'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ExpirationDate') {
            $sval = $child->nodeValue;
            $this->ExpirationDate = $sval;
            if (!empty($namespace)) {
                $this->namespace['ExpirationDate'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'ValidSerial') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->ValidSerial = $sval;
            if (!empty($namespace)) {
                $this->namespace['ValidSerial'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Expired') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Expired = $sval;
            if (!empty($namespace)) {
                $this->namespace['Expired'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'Persisted') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->Persisted = $sval;
            if (!empty($namespace)) {
                $this->namespace['Persisted'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'PublishingToRemoteSitesFeature') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->PublishingToRemoteSitesFeature = $sval;
            if (!empty($namespace)) {
                $this->namespace['PublishingToRemoteSitesFeature'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'SubscribingToRemoteSitesFeature') {
            $sval = VMware_VCloud_API_Helper::get_boolean($child->nodeValue);
            $this->SubscribingToRemoteSitesFeature = $sval;
            if (!empty($namespace)) {
                $this->namespace['SubscribingToRemoteSitesFeature'] = $namespace;
            }
        }
        elseif ($child->nodeType == XML_ELEMENT_NODE && $nodeName == 'LicenseMetricsInfo') {
            $obj = new VMware_VCloud_API_Extension_LicenseMetricsInfoType();
            $obj->build($child);
            $obj->set_tagName('LicenseMetricsInfo');
            $this->setLicenseMetricsInfo($obj);
            if (!empty($namespace)) {
                $this->namespace['LicenseMetricsInfo'] = $namespace;
            }
        }
        parent::buildChildren($child, $nodeName, $namespace);
    }
}