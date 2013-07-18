<?php
abstract class VMware_VCloud_SDK_Abstract
{
    /**
     * A VMware_VCloud_SDK_Service object
     */
    protected $svc = null;

    /**
     * URL of the vCloud entity or the entry point
     */
    protected $url = null;

    /**
     * Constructor
     *
     * @param VMware_VCloud_SDK_Service   $svc
     * @param mixed                       $obj  A data object represents or
     *                                    references a vCloud entity or the URL
     *                                    of a vCloud entity.
     */
    protected function __construct($svc, $obj)
    {
        $this->svc = $svc;
        if (is_string($obj))
        {
            $this->url = $obj;
        }
        else
        {
            $this->url = $obj->get_href(); //required
        }
    }

    /**
     * Unset the URL of a vCloud entity.
     *
     * @since Version 1.0.0
     */
    protected function destroy()
    {
        unset($this->url);
    }

    /**
     * Get the vCloud SDK object mapped data object.
     *
     * @return mixed A vCloud data object
     * @since Version 1.0.0
     */
    protected function getDataObj()
    {
        return $this->svc->get($this->url);
    }

    /**
     * Get a ReferenceType data object.
     *
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    protected function getRef($type=null)
    {
        return VMware_VCloud_SDK_Helper::createReferenceTypeObj($this->url,
                                                                null, $type);
    }

    /**
     * Get URL of the vCloud entity
     *
     * @return string
     * @since Version 1.0.0
     */
    protected function getUrl()
    {
        return $this->url;
    }

    /**
     * Get vCloud ID of the vCloud resource entity from its data object.
     *
     * @return string
     * @since Version 1.5.0
     */
    public function getEntityId()
    {
        return $this->getDataObj()->get_id();
    }

    /**
     * Get the UUID of a vCloud resource entity by parsing its vCloud ID in a
     * URN format.
     *
     * @return string
     * @since Version 1.5.0
     */
    protected function getUuid()
    {
        return VMware_VCloud_SDK_Helper::getUuidByUrl($this->url);
    }

    /**
     * Construct the metadata URL of the resource entity.
     *
     * @param string $key
     * @param string $domain
     * @return string
     * @access protected
     * @since Version 1.5.0
     * @version 5.1.0
     */
    protected function getMetadataUrl($key=null, $domain=null)
    {
        $url = $this->url . '/metadata';
        $url = isset($domain)? $url . '/' . $domain : $url;
        return isset($key)? $url . '/' . $key : $url;
    }

    /**
     * Get all references or subset of references of a VMware vCloud data object,
     * filtered by 'type' and/or 'name' attribute.
     *
     * @param string $ctype   The value of the 'type' attribute to filter
     * @param string $name    The value of the 'name' attribute to filter
     * @param string $method  Name of the class method to get the references or
     *                        links of the data object
     * @param mixed $obj      A VMware vCloud container data object which has
     *                        reference or link element
     * @return array|null     VMware_VCloud_API_ReferenceType or
     *                        VMware_VCloud_API_LinkType object array or null
     * @since Version 1.0.0
     */
    protected function getContainedRefs($ctype=null, $name=null,
                                        $method='getLink', $obj=null)
    {
        if (!$obj)
        {
            $obj = $this->getDataObj();
        }
        if (!method_exists($obj, $method))
        {
            return null;
        }
        $refs = $obj->{$method}();
        if (!$refs)
        {
            return null;
        }
        if (!isset($ctype))
        {
            return VMware_VCloud_SDK_Helper::getObjsByName($refs, $name);
        }
        $out = array();
        foreach ($refs as $ref)
        {
            if (0 < strpos($ref->get_type(), $ctype.'+xml'))
            {
                array_push($out, $ref);
            }
        }
        return VMware_VCloud_SDK_Helper::getObjsByName($out, $name);
    }

    /**
     * Retrieve VMware vCloud data objects from a VMware vCloud container
     * entity by given links or references
     *
     * @param array $refs     An array of VMware_VCloud_API_ReferenceType objects
     * @param string $return  Class name of the returned VMware vCloud data object
     * @return array          An array of VMware vCloud data objects
     * @since Version 1.0.0
     */
    protected function getObjsByContainedRefs($refs, $return=null)
    {
        $objs = array();
        if ($refs)
        {
            foreach ($refs as $ref)
            {
                array_push($objs, $this->svc->get($ref->get_href(), '', true,
                           $return));
            }
        }
        return $objs;
    }

    /**
     * Get subset links of a VMware vCloud data object, filtered by 'type'
     * and/or 'rel' attributes. If a link with specified filter (using $ctype or
     * $rel or both) does not exist, this means the desired opertion is not
     * allowed on that resource entity.
     *
     * @param string $ctype  The 'type' attribute of an XML element to filter
     * @param string $rel    The 'rel' attribute of an XML element to filter
     * @return array|null    VMware_VCloud_API_LinkType object array or null
     * @since Version 1.0.0
     */
    protected function getContainedLinks($ctype=null, $rel=null)
    {
        return VMware_VCloud_SDK_Helper::getContainedLinks($ctype, $rel,
                                                         $this->getDataObj());
    }

    /**
     * Get the link to the container object. For example, an organization
     * is the container of a vDC in terms of objects' XML representation.
     *
     * @return VMware_VCloud_API_LinkType|null
     * @since Version 1.5.0
     */
    protected function getContainerLink()
    {
        $links = $this->getContainedLinks(null, 'up');
        return (1 == count($links))? $links[0] : null;
    }
}