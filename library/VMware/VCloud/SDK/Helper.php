<?php
class VMware_VCloud_SDK_Helper
{
    /**
     * Parse XML form of a vCloud entity to a VMware vCloud data object.
     *
     * @param string $xml     An XML string, representing a vCloud entity
     * @param string $return  Class name of the output object.
     * @return mixed|null     A VMware vCloud data object
     * @since Version 1.0.0
     */
    public static function getObjByXml($xml, $return=null)
    {
        if (empty($xml))
        {
            return null;
        }
        return VMware_VCloud_API_Helper::parseString($xml, $return);
    }

    /**
     * Return subset of input objects with the given name.
     *
     * @param array $objs    A set of VMware vCloud data objects, which should
     *                       have 'name' attribute.
     * @param string $name   Object(s) with specified name will be returned. If
     *                       $name is null, returns all data objects.
     * @return array         An array of objects with the given name. Returns
     *                       an empty array if object with specified name is not
     *                       found.
     * @since Version 1.0.0
     */
    public static function getObjsByName($objs, $name=null)
    {
        if (!$name)
        {
            return $objs;
        }
        $out = array();
        foreach ($objs as $obj)
        {
            if (method_exists($obj, 'get_name') && $name == $obj->get_name())
            {
                array_push($out, $obj);
            }
        }
        return $out;
    }

    /**
     * Construct a VMware_VCloud_API_ReferenceType data object.
     *
     * @param string $url      URL used as href attribute
     * @param string $tagName  Tag name used as the XML element tag
     * @param string $type     Content-type of the vCloud resource entity
     * @param string $name     Name of the entity, used as name attribute
     * @return VMware_VCloud_API_ReferenceType
     * @since Version 1.0.0
     */
    public static function createReferenceTypeObj($url, $tagName=null, $type=null,
                                           $name=null)
    {
        $ref = new VMware_VCloud_API_ReferenceType();
        $ref->set_href($url);
        if ($type)
        {
            $ref->set_type($type);
        }
        if ($name)
        {
            $ref->set_name($name);
        }
        if ($tagName)
        {
            $ref->set_tagName($tagName);
        }
        return $ref;
    }

    /**
     * Get the UUID of a vCloud entity by parsing its URL. It assumes the end
     * of the URL given to the function is or contains the UUID.
     *
     * @param string $url   vCloud entity URL.
     * @return string|null
     * @since Version 1.5.0
     */
    public static function getUuidByUrl($url)
    {
        if (!isset($url))
        {
            return null;
        }
        $tokens = explode('/', $url);
        return str_replace(array('vm-', 'vapp-', 'vappTemplate-'),
                           array('','',''), end($tokens));
    }

    /**
     * Get a resource URL from its vCloud entity ID.
     *
     * @param VMware_VCloud_SDK_Service $service
     * @param string $eid  vCloud entity ID
     * @return string|null
     * @since Version 1.5.0
     */
    public static function getUrlByEntityId($service, $eid)
    {
        $url = $service->getBaseUrl() . '/entity/' . $eid;
        $entity = $service->get($url);
        $links = self::getContainedLinks(null, 'alternate', $entity);
        if (1 == count($links))
        {
            return $links[0]->get_href();
        }
        return null;
    }

    /**
     * Returns all the metadata keys.
     *
     * @param mixed   A VMware VCloud SDK object which has getMetadata()
     *                method defined.
     * @return array
     * @since Version 1.5.0
     */
    public static function getMetadataKeys($obj)
    {
        $keys = array();
        if (method_exists($obj, 'getMetadata'))
        {
            $meta = $obj->getMetadata();
            $entries = $meta->getMetadataEntry();
            if (0 < count($entries))
            {
                foreach($entries as $entry)
                {
                    array_push($keys, $entry->getKey());
                }
            }
        }
        return $keys;
    }

    /**
     * Get subset links of a VMware vCloud data object, filtered by 'type'
     * and/or 'rel' attributes. If a link with specified filter (using $ctype or
     * $rel or both) does not exist, this means the desired opertion is not
     * allowed on that resource entity.
     *
     * @param string $ctype  The 'type' attribute of an XML element to filter
     * @param string $rel    The 'rel' attribute of an XML element to filter
     * @param mixed $obj     A VMware vCloud container data object which has
     *                       link element
     * @param string $method Name of the getter method
     * @return array|null    VMware_VCloud_API_LinkType object array or null
     * @since Version 1.5.0
     */
    public static function getContainedLinks($ctype, $rel, $obj,
                                             $method='getLink')
    {
        if (!method_exists($obj, $method))
        {
            return null;
        }
        $links = $obj->{$method}();
        if (!$links)
        {
            return null;
        }
        if (!$ctype && !$rel)
        {
            return $links; // no filtering, returns all links
        }
        // when specifying ctype or rel or both
        $out = array();
        foreach ($links as $link)
        {
            if (is_null($ctype) || 0 < strpos($link->get_type(), $ctype.'+xml'))
            {
                if (is_null($link) || $rel == $link->get_rel())
                {
                    array_push($out, $link);
                }
            }
        }
        return $out;
    }
}