<?php
class VMware_VCloud_SDK_Vdc extends VMware_VCloud_SDK_Abstract
{
    /**
     * Get a reference to a VMware vCloud vDC entity.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public function getVdcRef()
    {
        return $this->getRef(VMware_VCloud_SDK_Constants::VDC_CONTENT_TYPE);
    }

    /**
     * Get a VMware vCloud vDC entity.
     *
     * @return VMware_VCloud_API_VdcType
     * @since Version 1.0.0
     */
    public function getVdc()
    {
        return $this->getDataObj();
    }

    /**
     * Constructs vCloud ID of this vDC from its UUID.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getId()
    {
        return 'urn:vcloud:vdc:' . $this->getUuid();
    }

    /**
     * Get the link to the container of the vDC.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.0.0
     */
    public function getOrgRef()
    {
        return $this->getContainerLink();
    }

    /**
     * Get the container entity of the vDC.
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
     * Get references to VMware vCloud available organization networks.
     *
     * @param string $name  Name of the available networks. If null, returns all
     * @return array        VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getAvailableNetworkRefs($name=null)
    {
        return $this->getContainedRefs(null, $name, 'getNetwork',
                       $this->getVdc()->getAvailableNetworks());
    }

    /**
     * Get references to all edgegateways for this Org vDC with the given name.
     *
     * @param string $name Name of the edgegateway to get. If null, returns all
     * @return array VMware_VCloud_API_ReferenceType object array
     * @since API Version 5.1.0
     * @since SDK Version 5.5.0
     */
    public function getEdgeGatewayRefs($name = null)
    {
        $links = $this->getVdc()->getLink();
        foreach ($links as $link)
        {
            if ($link->get_rel() == 'edgeGateways')
            {
                $url = $link->get_href();
                $edgeGatewayReferences = $this->svc->get($url . '?&format=references');
                return $this->getContainedRefs(null, $name, 'getReference', $edgeGatewayReferences);
            }
        }
        throw new VMware_VCloud_SDK_Exception ("Link not found.\n");
    }

    /**
     * Get VMware vCloud available organization networks/organization vdc networks.
     *
     * @param string $name  Name of the available networks. If null, returns all
      * @return array        VMware_VCloud_API_OrgNetworkType object array for 1.5
     * @return array        VMware_VCloud_API_OrgVdcNetworkType object array for 5.1
     * @since Version 1.0.0
     */
    public function getAvailableNetworks($name=null)
    {
        $refs = $this->getAvailableNetworkRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Create an isolated/routed Org vDC network
     * which can be created by an org administrator.
     *
     * @param VMware_VCloud_API_OrgVdcNetworkType $vdcNetwork
     * @return VMware_VCloud_API_OrgVdcNetworkType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function addOrgVdcNetwork($vdcNetwork)
    {
        $url = null;
        $links = $this->getVdc()->getLink();
        foreach ($links as $link)
        {
            if ($link->get_rel() == 'orgVdcNetworks')
            {
                $url = $link->get_href();
                break;
            }
        }
        if (is_null($url))
        {
            throw new VMware_VCloud_SDK_Exception ("Link not found.\n");
        }
        $type = VMware_VCloud_SDK_Constants::ORG_VDC_NETWORK_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $vdcNetwork);
    }

    /**
     * Get references to all vApps or vApps with a given name in the vDC.
     *
     * @param string $name  Name of the vApp. If null, returns all
     * @return array        VMware_VCloud_API_ResourceReferenceType object array
     * @since Version 1.0.0
     */
    public function getVAppRefs($name=null)
    {
        return $this->getContainedRefs('vApp', $name, 'getResourceEntity',
                              $this->getVdc()->getResourceEntities());
    }

    /**
     * Get all vApps or vApps with a given name in the vDC.
     *
     * @param string $name  Name of the vApp. If null, returns all
     * @return array        VMware_VCloud_API_VAppType object array
     * @since Version 1.0.0
     */
    public function getVApps($name=null)
    {
        $refs = $this->getVAppRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get references to all VMware vCloud vApp templates or vApp templates with
     * a given name in the vDC.
     *
     * @param string $name  Name of the vApp template. If null, returns all
     * @return array        VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getVAppTemplateRefs($name=null)
    {
        return $this->getContainedRefs('vAppTemplate',
                                       $name,
                                       'getResourceEntity',
                                       $this->getVdc()->getResourceEntities());
    }

    /**
     * Get all VMware vCloud vApp templates in this vDC or vApp templates with
     * a given name.
     *
     * @param string $name  Name of the vApp template. If null, returns all
     * @return array        VMware_VCloud_API_VAppTemplateType object array
     * @since Version 1.0.0
     */
    public function getVAppTemplates($name=null)
    {
        $refs = $this->getVAppTemplateRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Upload vApp template from an OVF pacakage.
     *
     * @param string $name                     Name of the vApp template to be created
     * @param string $ovfDescriptorPath        Path to the OVF descriptor
     * @param string $description              Description of the vApp template to be
     *                                         created
     * @param boolean $manifestRequired        A flag indicates the manifest file is
     *                                         required or not
     * @param VMware_VCloud_API_ReferenceType  $vdcStorageProfileRef
     * @param VMware_VCloud_API_ReferenceType  $catalogRef
     * @return string A URL of the newly created vApp template.
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function uploadOVFAsVAppTemplate($name, $ovfDescriptorPath, $description=null, $manifestRequired=null, 

$vdcStorageProfileRef, $catalogRef)
    {
        //Check if the resource name is already existing in the catalog.
        $catalog= $this->checkCatalogForDuplicates($catalogRef, $name);

        //step 1: initial the upload by sending a upload vApp template request
        $vAppTemp = $this->sendUploadVAppTemplateRequest($name, 'ovf',
                                             $description, $manifestRequired, $vdcStorageProfileRef);
        if (!isset($vAppTemp) ||
            !($vAppTemp instanceof VMware_VCloud_API_VAppTemplateType))
        {
            throw new VMware_VCloud_SDK_Exception (
                        "Send upload vApp template request failed.\n");
        }

        $status = $vAppTemp->get_status();
        if ($status != 0)
        {
             throw new VMware_VCloud_SDK_Exception (
                       "vApp template status is not 0, status = $status.\n");
        }

        //step 2: get OVF descriptor upload URL from response vApp template
        $files = $this->getUploadFiles($vAppTemp);
        $refs = VMware_VCloud_SDK_Helper::getContainedLinks(null,
                                              'upload:default', $files[0]);
        $ovfUrl = $refs[0]->get_href();

        //step 3: upload an OVF descriptor
        $this->uploadOVFDescriptor($ovfUrl, $ovfDescriptorPath);
        //wait until OVF descriptor get uploaded
        $vAppTemp2 = $this->svc->wait($vAppTemp, 'get_ovfDescriptorUploaded',
                                      array(true));

        //step 4: get upload URL for each virtual disk and upload the disk file
        $files = $this->getUploadFiles($vAppTemp2);
        foreach ($files as $file)
        {
            $refs = $file->getLink();
            $diskUrl = $refs[0]->get_href();
            $name = $file->get_name();
            $diskPath = null;
            // $ovfFileName=substr($ovfDescriptorPath, strrpos($ovfDescriptorPath, '/')+1);
            $ovfFileName=substr($ovfDescriptorPath, strrpos($ovfDescriptorPath, DIRECTORY_SEPARATOR)+1); // @amercier #7
            $diskPath=str_replace($ovfFileName, $name, $ovfDescriptorPath);
            $this->svc->upload($diskUrl, $diskPath);
        }
        $this->addResourceToCatalog($vAppTemp2, $catalog);
        return $vAppTemp2->get_href();
    }

    /**
     * Check if the resource name is already existing in the catalog.
     * @param VMware_VCloud_API_ReferenceType  $catalogRef
     * @param string $resourceName Name of the vApp template to be created.
     * @since API 1.5 
     * @since SDK 5.1
     */
    public function checkCatalogForDuplicates($catalogRef, $resourceName)
        {
            $catalog=$this->svc->createSDKObj($catalogRef);
            $CatalogItems=$catalog->getCatalogItems();
            foreach ($CatalogItems as $CatalogItem)
            {
                if($CatalogItem->get_name() == $resourceName)
                {
                    echo "Duplicate Resource Name Found: ".$resourceName;
                }
            }
            return $catalog;
        }

    /**
     * Add the resource to catalog.
     * @param VMware_VCloud_API_ReferenceType $catalogRef
     * @param VMware_VCloud_API_CatalogType object  $catalog
     * @since API 1.5 
     * @since SDK 5.1
     */
    public function addResourceToCatalog($resourceRef, $catalog)
    {
        $resourceReference = VMware_VCloud_SDK_Helper::createReferenceTypeObj($resourceRef->get_href());
        $catalogItem=new VMware_VCloud_API_CatalogItemType();
        $catalogItem->set_name($resourceRef->get_name());
        $catalogItem->setEntity($resourceReference);
        $catalog->addCatalogItem($catalogItem);
    }

    /**
     * Upload OVF descriptor.
     *
     * @param string $url        HTTP request URL
     * @param string $filename   Path to the OVF descriptor
     * @return null
     * @since Version 1.0.0
     */
    public function uploadOVFDescriptor($url, $filename)
    {
        $this->svc->upload($url, $filename, 'text/xml');
    }

    /**
     * Get file information for uploading vApp template.
     *
     * @param VMware_VCloud_API_VAppTemplateType $vAppTemplate
     * @return array VMware_VCloud_API_FileType object array
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
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
     * Send a upload vApp template request.
     *
     * @param string $name                Name of the vApp template
     * @param string $format              Format of the package to be
     *                                    uploaded
     * @param string $description         Description of the vApp template
     *                                    to be created
     * @param boolean $manifestRequired   A flag indicates the manifest
     *                                    file is required or not
     * @param VMware_VCloud_API_ReferenceType $vdcStorageProfileRef A reference to the storage profile being used
     * @return VMware_VCloud_API_VAppTemplateType
     * @since Version 1.0.0
     */
    public function sendUploadVAppTemplateRequest($name, $format,
                           $description=null, $manifestRequired=false, $vdcStorageProfileRef=null)
    {
        $url = $this->url . '/action/uploadVAppTemplate';
        $type =
          VMware_VCloud_SDK_Constants::UPLOAD_VAPP_TEMPLATE_PARAMS_CONTENT_TYPE;
        $params = new VMware_VCloud_API_UploadVAppTemplateParamsType();
        $params->set_name($name);
        $params->set_transferFormat('application/' . $format . '+xml');
        $params->setDescription($description);
        $params->set_manifestRequired($manifestRequired);
        $params->setVdcStorageProfile($vdcStorageProfileRef);
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Get references to all VMware vCloud media or media with the given
     * name in the vDC.
     *
     * @param string $name  Name of the media. If null, returns all
     * @return array        VMware_VCloud_API_ResourceReferenceType object array
     * @since Version 1.0.0
     */
    public function getMediaRefs($name=null)
    {
        return $this->getContainedRefs('media', $name, 'getResourceEntity',
                              $this->getVdc()->getResourceEntities());
    }

    /**
     * Get all VMware vCloud media or media with the given name in the vDC.
     *
     * @param string $name   Name of the media. If null, returns all
     * @return array         VMware_VCloud_API_MediaType object array
     * @since Version 1.0.0
     */
    public function getMedias($name=null)
    {
        return $this->getObjsByContainedRefs($this->getMediaRefs($name));
    }

    /**
     * Send upload media request.
     *
     * @param VMware_VCloud_API_MediaType $media
     * @return VMware_VCloud_API_MediaType
     * @since Version 1.0.0
     */
    private function sendUploadMediaRequest($media)
    {
        $url = $this->url . '/media';
        $type = VMware_VCloud_SDK_Constants::MEDIA_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $media);
    }

    /**
     * Get a media upload information.
     *
     * @param VMware_VCloud_API_MediaType $media
     * @return string  Media upload URL
     * @throws VMware_VCloud_SDK_Exception
     * @access private
     */
    private function getMediaUploadInfo($media)
    {
        if (!$media instanceof VMware_VCloud_API_MediaType ||
             $media->get_status() != 0)
        {
            throw new VMware_VCloud_SDK_Exception (
                                  "Wrong media parameter passed in.\n");
        }
        $files = $media->getFiles()->getFile();
        if (!$files)
        {
            throw new VMware_VCloud_SDK_Exception ("Get upload file failed.\n");
        }
        $file = $files[0];
        $refs = VMware_VCloud_SDK_Helper::getContainedLinks(null,
                                                    "upload:default", $file);
        if (!$refs)
        {
            throw new VMware_VCloud_SDK_Exception (
                                         "Get upload file reference failed.\n");
        }
        return $refs[0]->get_href();
    }

    /**
     * Upload media.
     *
     * @param string $filename    Path to the media to be uploaded
     * @param string $imageType   ImageType ('iso' or 'floppy')
     * @param VMware_VCloud_API_MediaType $mediaType
     * @param function $onProgress @yconan
     * @return VMware_VCloud_API_MediaType
     * @access private
     */
    private function uploadMedia($filename, $imageType, $mediaType, $onProgress = false)
    {
        $mediaType->set_imageType($imageType);
        $mediaUpInfo = $this->sendUploadMediaRequest($mediaType);
        $url = $this->getMediaUploadInfo($mediaUpInfo);
        $durl =  $mediaUpInfo->get_href();
        //$this->svc->upload($url, $filename);
        $this->svc->upload($url, $filename,'application/octet-stream',$onProgress); // @yconan
        return $this->svc->get($durl);
    }

    /**
     * Upload an ISO format media.
     *
     * @param string $isoName   Media full path file name
     * @param VMware_VCloud_API_MediaType $mediaType
     * @param function $onProgress @yconan
     * @return VMware_VCloud_API_MediaType
     * @since Version 1.0.0
     */
    public function uploadIsoMedia($isoName, $mediaType , $onProgress = false)
    {
        //return $this->uploadMedia($isoName, 'iso', $mediaType);
        return $this->uploadMedia($isoName, 'iso', $mediaType, $onProgress); // @yconan
    }

    /**
     * Upload a floppy format media.
     *
     * @param string $floppyName   Full path of a floppy file
     * @param VMware_VCloud_API_MediaType $mediaType
     * @return VMware_VCloud_API_MediaType
     * @since Version 1.0.0
     */
    public function uploadFloppyMedia($floppyName, $mediaType)
    {
        return $this->uploadMedia($floppyName, 'floppy', $mediaType);
    }

    /**
     * Capture a vApp to create a vApp template.
     *
     * @param VMware_VCloud_API_CaptureVAppParamsType $params
     * @return VMware_VCloud_API_VAppTemplateType
     * @since Version 1.0.0
     */
    public function captureVApp($params)
    {
        $url = $this->url . '/action/captureVApp';
        $type = VMware_VCloud_SDK_Constants::CAPTURE_VAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Clone or move a media image.
     *
     * @param VMware_VCloud_API_CloneMediaParamsType $params
     * @return VMware_VCloud_API_MediaType
     * @since Version 1.0.0
     */
    public function cloneMoveMedia($params)
    {
        $url = $this->url . '/action/cloneMedia';
        $type = VMware_VCloud_SDK_Constants::CLONE_MEDIA_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Clone or move a vApp.
     *
     * @param VMware_VCloud_API_CloneVAppParamsType $params
     * @return VMware_VCloud_API_VAppType
     * @since Version 1.0.0
     */
    public function cloneMoveVApp($params)
    {
        $url = $this->url . '/action/cloneVApp';
        $type = VMware_VCloud_SDK_Constants::CLONE_VAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Clone or move a vApp template.
     *
     * @param VMware_VCloud_API_CloneVAppTemplateParamsType $params
     * @return VMware_VCloud_API_VAppTemplateType
     * @since Version 1.0.0
     */
    public function cloneMoveVAppTemplate($params)
    {
        $url = $this->url . '/action/cloneVAppTemplate';
        $type =
           VMware_VCloud_SDK_Constants::CLONE_VAPP_TEMPLATE_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Compose a vApp.
     *
     * @param VMware_VCloud_API_ComposeVAppParamsType $params
     * @return VMware_VCloud_API_VAppType
     * @since Version 1.0.0
     */
    public function composeVApp($params)
    {
        $url = $this->url . '/action/composeVApp';
        $type = VMware_VCloud_SDK_Constants::COMPOSE_VAPP_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Instantiate a vApp template by providing a
     * VMware_VCloud_API_InstantiateVAppTemplateParamsType data object.
     *
     * @param VMware_VCloud_API_InstantiateVAppTemplateParamsType $params
     * @return VMware_VCloud_API_VAppType
     * @since Version 1.0.0
     */
    public function instantiateVAppTemplate($params)
    {
        $url = $this->url . '/action/instantiateVAppTemplate';
        $type = VMware_VCloud_SDK_Constants::
                INSTANTIATE_VAPP_TEMPLATE_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Instantiate a vApp template with default settings.
     *
     * @param string $name          Name of the vApp to be created
     * @param VMware_VCloud_API_ReferenceType $sourceRef   Reference to the
     *                                                     source vApp template
     * @param boolean $deploy       A flag indicates deploy or not after
     *                              instantiation
     * @param boolean $powerOn      A flag indicates power on or not after
     *                              instantiation
     * @param string $description   Description of the vApp to be created
     * @return VMware_VCloud_API_VAppType
     * @since Version 1.0.0
     */
    public function instantiateVAppTemplateDefault($name, $sourceRef,
                     $deploy=false, $powerOn=false, $description=null)
    {
        $instantiateVAppTemplateParams =
                     new VMware_VCloud_API_InstantiateVAppTemplateParamsType();
        $instantiateVAppTemplateParams->set_name($name);
        $sourceRef->set_tagName('Source');
        $instantiateVAppTemplateParams->setSource($sourceRef);
        $instantiateVAppTemplateParams->set_deploy($deploy);
        $instantiateVAppTemplateParams->set_powerOn($powerOn);
        $instantiateVAppTemplateParams->setDescription($description);
        return $this->instantiateVAppTemplate($instantiateVAppTemplateParams);
    }

    /**
     * Get metadata associated with the vDC or metadata associated with
     * the vDC for the specified key in the specified domain.
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
     * Create a disk.
     *
     * @param VMware_VCloud_API_DiskCreateParamsType $params
     * @return VMware_VCloud_API_DiskType
     * @since Version 5.1.0
     */
    public function createDisk($params)
    {
        $url = $this->url . '/disk';
        $type = VMware_VCloud_SDK_Constants::DISK_CREATE_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }

    /**
     * Get references to all disks or a disk with a given name in the vDC.
     *
     * @param string $name  Name of the disk. If null, returns all
     * @return array        VMware_VCloud_API_ResourceReferenceType object array
     * @since Version 5.1.0
     */
    public function getDiskRefs($name=null)
    {
        return $this->getContainedRefs('disk', $name, 'getResourceEntity',
                              $this->getVdc()->getResourceEntities());
    }

    /**
     * Get all disks or disk with a given name in the vDC.
     *
     * @param string $name  Name of the disk. If null, returns all
     * @return array        VMware_VCloud_API_DiskType object array
     * @since Version 1.0.0
     */
    public function getDisks($name=null)
    {
        $refs = $this->getVAppRefs($name);
        return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Get vDC storage profile references.
     *
     * @param string $name  Name of the vDC storage profile. If null, returns all
     * @return array|null VMware_VCloud_API_ReferenceType object array or null
     * @since Version 5.1.0
     */
    public function getVdcStorageProfileRefs($name=null)
    {
        return $this->getContainedRefs('vdcStorageProfile', $name,
              'getVdcStorageProfile', $this->getVdc()->getVdcStorageProfiles());
    }

    /**
     * Get vDC storage profiles.
     *
     * @param string $name  Name of the vDC storage profile. If null, returns all
     * @return array|null VMware_VCloud_API_VdcStorageProfileType object array
     *                    or null
     * @since Version 5.1.0
     */
    public function getVdcStorageProfiles($name=null)
    {
         $refs = $this->getVdcStorageProfileRefs($name);
         return $this->getObjsByContainedRefs($refs);
    }

    /**
     * Creating vApp by uploading an ovf package.
     *
     * @param VMware_VCloud_API_InstantiateOvfParamsType  $params
     * @param string $ovfDescriptorPath   Path to the OVF descriptor
     * @return VMware_VCloud_API_VAppType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function uploadOVFAsVApp($params, $ovfDescriptorPath)
    {
        //step 1: initial the upload by sending a upload vApp request
        $vApp = $this->instantiateOvf($params);
        if (!isset($vApp) ||
            !($vApp instanceof VMware_VCloud_API_VAppType))
        {
            throw new VMware_VCloud_SDK_Exception (
                        "Send upload vApp request failed.\n");
        }

        $status = $vApp->get_status();
        if ($status != 0)
        {
             throw new VMware_VCloud_SDK_Exception (
                       "vApp status is not 0, status = $status.\n");
        }
        $vAppob=$this->svc->createSDKObj($vApp->get_href());

        //step 2: get OVF descriptor upload file names from response vApp
        $files = $vAppob->getUploadFileNames($vApp);
        //get OVF descriptor upload URL
        $ovfUrl = $vAppob->getUploadOVFDescriptorUrl($files);

        //step 3: upload an OVF descriptor file
        $vAppob->uploadOVFDescriptor($ovfUrl, $ovfDescriptorPath);
        //wait until OVF descriptor get uploaded
        $vApp1 = $this->svc->wait($vApp, 'get_ovfDescriptorUploaded',
                                      array(true));

        //step 4: get OVF descriptor upload file names from response vApp
        $files = $vAppob->getUploadFileNames($vApp1);
        //get upload URL for each virtual disk and upload the disk file
        $vAppob->uploadFile($files, $ovfDescriptorPath);
        $vApp1 = $this->svc->wait($vApp1, 'get_status',
                                      array(true));
        return $vApp1;
    }

    /**
     * Instantiate a vApp or VM from an OVF.
     *
     * @param VMware_VCloud_API_InstantiateOvfParamsType  $params
     * @return VMware_VCloud_API_VAppType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function instantiateOvf($params)
    {
        $url = $this->url . VMware_VCloud_SDK_Constants::ACTION_INSTANTIATE_OVF_URL;
        $type = VMware_VCloud_SDK_Constants::INSTANTIATE_OVF_PARAMS_CONTENT_TYPE;
        return $this->svc->post($url, 201, $type, $params);
    }
}
