<?php
class VMware_VCloud_SDK_Catalog extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud catalog entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getCatalogRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::CATALOG_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud catalog entity.
     *
     * @return VMware_VCloud_API_CatalogType
     * @since Version 1.0.0
     */
    public function getCatalog()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of the catalog from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:catalog:' . $this->getUuid();
    }

    /**
     * Get the link to the container of the catalog.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getOrgRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container of the catalog.
     *
     * @return VMware_VCloud_API_OrgType|null
     * @since Version 1.0.0
     */
    public function getOrg()
    {
        $ref = $this->getOrgRef();
        return isset($ref)? $this->svc->get($ref->get_href()) : null;
    }

    /**
     * Get references to catalog items entity in this catalog entity.
     *
     * @param string $name   Name of the catalog item. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getCatalogItemRefs($name=null)
    {
        return $this->getContainedRefs('catalogItem', $name, 'getCatalogItem',
                              $this->getCatalog()->getCatalogItems());
    }

    /**
     * Get all catalog items or catalog items with the given name in this
     * catalog.
     *
     * @param string $name   Name of the catalog item. If null, returns all
     * @return array VMware_VCloud_API_CatalogItemType object array
     * @since Version 1.0.0
     */
    public function getCatalogItems($name=null)
    {
        $refs = $this->getCatalogItemRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Add a catalog item to this VMware vCloud catalog.
     *
     * @param VMware_VCloud_API_CatalogItemType $catalogItem
     * @return VMware_VCloud_API_CatalogItemType Represents the newly created
     *                                           catalog item
     * @since Version 1.0.0
     */
    public function addCatalogItem($catalogItem)
    {
        $url = $this->url . '/catalogItems';
        $type = VMware_VCloud_SDK_Constants::CATALOG_ITEM_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $catalogItem);
    }

    /**
     * Construct control access url for a catalog.
     *
     * @param  string $action   Operation on the control access
     * @return string
     * @access private
     */
    private function getControlAccessUrl($action=null)
    {
        $orgUrl = $this->getOrgRef()->get_href();
        $url = $orgUrl . "/catalog/" . $this->getUuid();
        $url = ("action" == $action)? "$url/$action" : $url;
        return "$url/controlAccess";
    }

    /**
     * Get the control access of this catalog.
     *
     * @return VMware_VCloud_API_ControlAccessParamsType
     * @since Version 1.0.0
     */
    public function getControlAccess()
    {
        $url = $this->getControlAccessUrl();
        return $this->svc->get($url);
    }

    /**
     * Modify the control access of this catalog. Modify catalog sharing can
     * be done with this function.
     *
     * @param VMware_VCloud_API_ControlAccessParamsType $controlAccess
     * @return VMware_VCloud_API_ControlAccessParamsType
     * @since Version 1.0.0
     */
    public function modifyControlAccess($controlAccess)
    {
        $url = $this->getControlAccessUrl('action');
        $type = VMware_VCloud_SDK_Constants::CONTROL_ACCESS_CONTENT_TYPE;
        return $this->svc->post($url, 200, $type, $controlAccess);
    }

    /**
     * Get metadata associated with the catalog or metadata associated with
     * the catalog for the specified key in the specified domain.
     *
     * @param string $key
     * @param string $domain
     * @return VMware_VCloud_API_MetadataType|VMware_VCloud_API_MetadataValueType|null
     * @since Version 1.5.0
     * @version 5.1.0
     */
    public function getMetadata($key=null, $domain=null)
    {
        return $this->svc->get($this->getMetadataUrl($key, $domain));
    }

    /**
     * Creating vAppTemplate by uploading an ovf package.
     *
     * @param string $name                     Name of the vApp template to be created
     * @param string $ovfDescriptorPath        Path to the OVF descriptor
     * @param string $description              Description of the vApp template to be
     *                                         created
     * @param boolean $manifestRequired        A flag indicates the manifest file is
     *                                         required or not
     * @param VMware_VCloud_API_ReferenceType  $vdcStorageProfileRef
     * @return VMware_VCloud_API_VAppTemplateType object.
     * @throws VMware_VCloud_SDK_Exception
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function uploadOVFAsVAppTemplate($name, $ovfDescriptorPath, $description=null, $manifestRequired=null, $vdcStorageProfileRef)
    {
        //Check if the resource name is already existing in the catalog.
        $this->checkCatalogForDuplicates($this, $name);

        //step 1: initial the upload by sending a upload vApp template request
        $vAppTemplate = $this->createVappTemplateRequest($name, $description, $manifestRequired, $vdcStorageProfileRef);
        if (!isset($vAppTemplate) ||
            !($vAppTemplate instanceof VMware_VCloud_API_CatalogItemType))
        {
            throw new VMware_VCloud_SDK_Exception (
                        "Send upload vApp template request failed.\n");
        }

        $vAppTemp1 = $this->svc->get($vAppTemplate->getEntity()->get_href());

        //step 2: get OVF descriptor upload URL from response vApp template
        $files = $this->getUploadFiles($vAppTemp1);
        $refs = VMware_VCloud_SDK_Helper::getContainedLinks(null,
                                              'upload:default', $files[0]);
        $ovfUrl = $refs[0]->get_href();

        //step 3: upload an OVF descriptor
        $this->uploadOVFDescriptor($ovfUrl, $ovfDescriptorPath);
        //wait until OVF descriptor get uploaded
        $vAppTemp2 = $this->svc->wait($vAppTemp1, 'get_ovfDescriptorUploaded',
                                      array(true));

        //step 4: get upload URL for each virtual disk and upload the disk file
        $files = $this->getUploadFiles($vAppTemp2);
        foreach ($files as $file)
        {
            $refs = $file->getLink();
            $diskUrl = $refs[0]->get_href();
            $name = $file->get_name();
            $diskPath = null;
            $ovfFileName=substr($ovfDescriptorPath, strrpos($ovfDescriptorPath, DIRECTORY_SEPARATOR)+1);
            $diskPath=str_replace($ovfFileName, $name, $ovfDescriptorPath);
            $this->svc->upload($diskUrl, $diskPath);
        }
        return $vAppTemp2;
    }

    /**
     * Check if the resource name is already existing in the catalog.
     * @param VMware_VCloud_SDK_Catalog object  $catalog
     * @param string $resourceName Name of the vApp template to be created.
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function checkCatalogForDuplicates($catalog, $resourceName)
    {
        $CatalogItems=$catalog->getCatalogItems();
        foreach ($CatalogItems as $CatalogItem)
        {
            if($CatalogItem->get_name() == $resourceName)
            {
                throw new VMware_VCloud_SDK_Exception (
                          "Duplicate Resource Name Found: $resourceName\n");
            }
        }
        return $catalog;
    }

    /**
     * Creating vAppTemplate request by uploading an ovf package.
     *
     * @param string $name                Name of the vApp template
     * @param string $description         Description of the vApp template
     *                                    to be created
     * @param boolean $manifestRequired   A flag indicates the manifest
     *                                    file is required or not
     * @return VMware_VCloud_API_CatalogItemType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    private function createVappTemplateRequest($name, $description=null, $manifestRequired=false, $vdcStorageProfileRef)
    {
        $url = $this->url . '/action/upload';
        $type =
          VMware_VCloud_SDK_Constants::UPLOAD_VAPP_TEMPLATE_PARAMS_CONTENT_TYPE;
        $params = new VMware_VCloud_API_UploadVAppTemplateParamsType();
        $params->set_name($name);
        $params->set_transferFormat(VMware_VCloud_SDK_Constants::OVF_TRANSFER_FORMAT);
        $params->setDescription($description);
        $params->set_manifestRequired($manifestRequired);
        $params->setVdcStorageProfile($vdcStorageProfileRef);
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Get file information for uploading vApp template.
     *
     * @param VMware_VCloud_API_VAppTemplateType $vAppTemplate
     * @return array VMware_VCloud_API_FileType object array
     * @throws VMware_VCloud_SDK_Exception
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function getUploadFiles($vAppTemplate)
    {
        $fileList = $vAppTemplate->getFiles();
        if (!isset($fileList))
        {
            throw new VMware_VCloud_SDK_Exception (
                        "vApp template does not contain the upload URLs.\n");
        }
        $files = $fileList->getFile();
        $outFiles = array();
        foreach ($files as $file)
        {
            $size = $file->get_size();
            $transferred = $file->get_bytesTransferred();
            if (0 == $transferred || $transferred < $size)
            {
                array_push($outFiles, $file);
            }
        }
        return $outFiles;
    }

    /**
     * Upload OVF descriptor.
     *
     * @param string $url        HTTP request URL
     * @param string $filename   Path to the OVF descriptor
     * @return null
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function uploadOVFDescriptor($url, $filename)
    {
        $this->svc->upload($url, $filename, 'text/xml');
    }

    /**
     * Create a vApp template in this library from a vApp.
     *
     * @param VMware_VCloud_API_CaptureVAppParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function captureVApp($params)
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::ACTION_CAPTURE_VAPP_URL;
        $type = VMware_VCloud_SDK_Constants::CAPTURE_VAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Force sync the library to the remote subscribed library.
     *
     * @return VMware_VCloud_API_TaskType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function sync()
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::ACTION_SYNC_URL;
        return $this->svc->post($url, 202);
    }

    /**
     * Copy a library item from one library to another.
     *
     * @param VMware_VCloud_API_CopyOrMoveCatalogItemParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function copyCatalogItem($params)
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::ACTION_COPY_CATALOGITEM_URL;
        $type = VMware_VCloud_SDK_Constants::COPY_OR_MOVE_CATALOGITEM_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }

    /**
     * Move a library item from one library to another.
     *
     * @param VMware_VCloud_API_CopyOrMoveCatalogItemParamsType $params
     * @return VMware_VCloud_API_TaskType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function moveCatalogItem($params)
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::ACTION_MOVE_CATALOGITEM_URL;
        $type = VMware_VCloud_SDK_Constants::COPY_OR_MOVE_CATALOGITEM_CONTENT_TYPE;
        return $this->svc->post($url, 202, $type, $params);
    }
}