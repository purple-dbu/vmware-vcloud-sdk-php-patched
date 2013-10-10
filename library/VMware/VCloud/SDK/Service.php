<?php
class VMware_VCloud_SDK_Service extends VMware_VCloud_SDK_Service_Abstract
{
    /**
     * vCloud Director login URL.
     */
    private $loginUrl = null;

    /**
     * vCloud Director base URL.
     */
    private $baseUrl = null;

    /**
     * Constructor
     *
     * @param VMware_VCloud_SDK_Http_Client_Interface $client
     * @access private
     */
    private function __construct($client)
    {
        $this->setHttpClient($client);
    }

    /**
     * Get a VMware_VCloud_SDK_Server object
     *
     * @param VMware_VCloud_SDK_Http_Client_Interface $client An object implements
     *                        VMware_VCloud_SDK_Http_Client_Interface. If it is
     *                        null, use the default implementation,
     *                        VMware_VCloud_SDK_Http_Client
     * @return VMware_VCloud_SDK_Service
     * @since Version 1.0.0
     */
    public static function getService($client=null)
    {
        if (!$client)
        {
            $client = new VMware_VCloud_SDK_Http_Client();
        }
        return new VMware_VCloud_SDK_Service($client);
    }

    /**
     * Set login URL.
     *
     * @param string $url  Login URL
     * @return null
     * @since Version 1.0.0
     */
    public function setLoginUrl($url)
    {
        $this->loginUrl = $url;
    }

    /**
     * Login to VMware vCloud Director.
     *
     * @param string $server  Server IP or host name and port
     * @param array  $auth    In array('username'=><username>,
     *                                 'password'=><password>) format
     * @param array  $config  An HTTP configuration array
     * @param string  $apiVersion  An API Version
     * @return VMware_VCloud_API_OrgListType
     * @since API Version 1.0.0
     * @since SDK Version 5.5.0
     */
    public function login($server, $auth, $config, $apiVersion)
    {
        if (false === strpos($server, 'http'))
        {
            $server = "https://$server";
        }
        $this->setConfig($config);
        $this->setAPIVersion($apiVersion);
        if (!$this->loginUrl)
        {
            $this->loginUrl = $server . '/api/sessions';
        }
        $this->baseUrl = str_replace('/sessions', '', $this->loginUrl);
        $credential = $auth['username'] . ':' . $auth['password'];
        // Encodes data with MIME base64
        $encodeddata= base64_encode($credential);
        $auth= "Basic " . $encodeddata;
        return $this->post($this->loginUrl, 200, null, null, null, $auth);
    }

    /**
     * Login to VMware vCloud Director using the SAML Assertion XML from vSphere SSO/SAML IDP's.
     * This method can be used in performing: SSO login with Bearer/HOK tokens in both Org/System scope. No signature verification is done when using this method.
     *
     * @param string $server  Server IP or host name and port
     * @param string $samlAssertionXML  SSO Token.
     * @param string $org  Organization name.
     * @param array  $config  An HTTP configuration array
     * @param string  $apiVersion  An API Version
     * @return VMware_VCloud_API_SessionType
     * @since API Version 5.1.0
     * @since SDK Version 5.5.0
     */
    public function SSOLogin($server, $samlAssertionXML, $org, $config, $apiVersion = '5.1')
    {
        // Create a gzip compressed string by the samlAssertion XML from the Identity Provider.
        // The encoding mode Can be FORCE_GZIP (the default) or FORCE_DEFLATE.
        $compressedxml = gzencode($samlAssertionXML, 9,FORCE_GZIP);
        // Encodes data with MIME base64
        $encodeddata= base64_encode($compressedxml);

        if (false === strpos($server, 'http'))
        {
            $server = "https://$server";
        }
        $this->setConfig($config);
        $this->setAPIVersion($apiVersion);
        $auth = null;
         if ($org == VMware_VCloud_SDK_Constants::SYSTEM_ORG)
        {
            $auth = VMware_VCloud_SDK_Constants::SIGN_ATTRIBUTE . " " . VMware_VCloud_SDK_Constants::TOKEN_ATTRIBUTE . "= \"" . $encodeddata . "\"";
        }
        else
        {
            $auth = VMware_VCloud_SDK_Constants::SIGN_ATTRIBUTE . " " . VMware_VCloud_SDK_Constants::TOKEN_ATTRIBUTE . "= \"" . $encodeddata . "\"" . "," . VMware_VCloud_SDK_Constants::ORG_ATTRIBUTE . "=" . "\"" . $org . "\"";
        }

        if (!$this->loginUrl)
        {
            $this->loginUrl = $server . '/api/sessions';
        }
        $this->baseUrl = str_replace('/sessions', '', $this->loginUrl);
        return $this->post($this->loginUrl, 200, null, null, null, $auth);
    }

    /**
     * Login to VMware vCloud Director using the SAML Assertion XML from vSphere SSO/SAML IDP's.
     * This method can be used in performing: SSO login with HOK tokens and the signature attributes in Org/System scope. vCD also does the signature
     * verification of the provided HOK token.
     * Note: For Bearer tokens there is no signature verification done.
     *
     * @param string $server  Server IP or host name and port as https://<ip>:<port>
     * @param string $samlAssertionXML  SSO HOK Token.
     * @param string $org  The name of your vCloud Director organization.
     * @param array  $config  An HTTP configuration array
     * @param string  $apiVersion  An API Version
     * @param string $signature  Base64 encoded signaure of the token XML generated using client's private key
     * @param string $signature_alg  Standard signature algorithm name
     * @return VMware_VCloud_API_SessionType
     * @since API Version 5.5.0
     * @since SDK Version 5.5.0
     */
    public function HOKSSOLogin($server, $samlAssertionXML, $org, $config, $apiVersion, $signature, $signature_alg)
    {
        // Create a gzip compressed string by the samlAssertion XML from the Identity Provider.
        // The encoding mode Can be FORCE_GZIP (the default) or FORCE_DEFLATE.
        $compressedxml = gzencode($samlAssertionXML, 9, FORCE_GZIP);

        // Encodes data with MIME base64
        $encodeddata= base64_encode($compressedxml);

        if (false === strpos($server, 'http'))
        {
            $server = "https://$server";
        }
        $this->setConfig($config);
        $this->setAPIVersion($apiVersion);
        $auth = null;
        if ($org == VMware_VCloud_SDK_Constants::SYSTEM_ORG)
        {
            $auth = VMware_VCloud_SDK_Constants::SIGN_ATTRIBUTE . " " . VMware_VCloud_SDK_Constants::TOKEN_ATTRIBUTE . "= \"" . $encodeddata . "\"" . "," . VMware_VCloud_SDK_Constants::SIGNATURE_ATTRIBUTE . "=\"" . $signature . "\"" . "," . VMware_VCloud_SDK_Constants::SIGNATURE_ALGORITHM_ATTRIBUTE . "=\"" . $signature_alg . "\"";
        }
        else
        {
            $auth = VMware_VCloud_SDK_Constants::SIGN_ATTRIBUTE . " " . VMware_VCloud_SDK_Constants::TOKEN_ATTRIBUTE . "= \"" . $encodeddata . "\"" . "," . VMware_VCloud_SDK_Constants::ORG_ATTRIBUTE . "=" . "\"" . $org . "\"" . "," . VMware_VCloud_SDK_Constants::SIGNATURE_ATTRIBUTE . "=\"" . $signature . "\"" . "," . VMware_VCloud_SDK_Constants::SIGNATURE_ALGORITHM_ATTRIBUTE . "=\"" . $signature_alg . "\"";
        }

        if (!$this->loginUrl)
        {
            $this->loginUrl = $server . '/api/sessions';
        }
        $this->baseUrl = str_replace('/sessions', '', $this->loginUrl);
        return $this->post($this->loginUrl, 200, null, null, null, $auth);
    }

    /**
     * Set vcloud token for login.
     *
     * @param string $server  Server IP or host name and port
     * @param string $vcloudtoken  Vcloud Token
     * @param array $config  An HTTP configuration array
     * @param string  $apiVersion  An API Version
     * @since API Version 5.1.0
     * @since SDK Version 5.1.0
     */
    public function SetVcloudToken($server, $vcloudtoken, $config, $apiVersion)
    {
        if (false === strpos($server, 'http'))
        {
            $server = "https://$server";
        }
        $this->setToken($vcloudtoken);
        $this->setConfig($config);
        $this->setAPIVersion($apiVersion);

        if (!$this->baseUrl)
        {
            $this->baseUrl = $server . '/api';
        }
    }

    /**
     * Get base URL of the VMware vCloud Director.
     *
     * @return string Base URL
     * @since Version 1.0.0
     */
    public function getBaseUrl()
    {
        return $this->baseUrl;
    }

    /**
     * Get admin URL of the VMware vCloud Director.
     *
     * @return string Admin URL of the VMware vCloud Director.
     * @since Version 1.0.0
     */
    public function getAdminUrl()
    {
        return $this->baseUrl . '/admin';
    }

    /**
     * Get administrative extension URL of the VMware vCloud Director.
     *
     * @return string Administrative extension URL of the VMware vCloud Director.
     * @since Version 1.0.0
     */
    public function getAdminExtensionUrl()
    {
        return $this->baseUrl . '/admin/extension';
    }

    /**
     * A wrapper class to create a VMware vCloud SDK object.
     *
     * @param mixed $obj A data object represents or references a vCloud entity
     *                   or the URL of a vCloud entity.
     *         $ref If a string is given, it should be in the URI format.
     * @return mixed A VMware vCloud SDK object.
     * @since Version 1.0.0
     */
    public function createSDKObj($obj)
    {
        return VMware_VCloud_SDK_Factory::create($this, $obj);
    }

    /**
     * Create a VMware_VCloud_SDK_Admin object.
     *
     * @return VMware_VCloud_SDK_Admin
     * @since Version 1.0.0
     */
    public function createSDKAdminObj()
    {
        return new VMware_VCloud_SDK_Admin($this);
    }

    /**
     * Create a VMware_VCloud_SDK_Extension object.
     *
     * @return VMware_VCloud_SDK_Extension
     * @since Version 1.0.0
     */
    public function createSDKExtensionObj()
    {
        return new VMware_VCloud_SDK_Extension($this);
    }

    /**
     * Get a list of user services.
     *
     *
     * @return list of all the user services.
     * @since Version 5.1.0
     */
    public function getUserServiceRefs()
    {
        $type = 'service';
        return $this->queryReferencesByType($type);
    }

    /**
     * Get Supported OperatingSystems Info.
     *
     * @return VMware_VCloud_API_SupportedOperatingSystemsInfoType
     * @since Version 5.1.0
     */
    public function supportedSystemsInfo()
    {
        $url = $this->baseUrl . '/supportedSystemsInfo';
        return $this->get($url);
    }

    /**
     * Retrieve a file descriptor.
     *
     * @return VMware_VCloud_API_ContainerType
     * @since Version 5.1.0
     */
    public function getFileDescriptor()
    {
        $url = $this->baseUrl . '/files';
        return $this->get($url);
    }

    /**
     * Retrieve the specified schema definition file from the server.
     *
     * @return xml schema represented as String.
     * @since Version 5.1.0
     */
    public function getSchemaFileName($schemaFileName)
    {
        $url = $this->baseUrl . '/schema/'.$schemaFileName;
        return $this->get($url);
    }

    /**
     * Get references of all organization data objects or an organization data
     * object by its name in VMware vCloud Director. This function retrieves
     * organization references from server. User can also use the response of
     * the login() function call to get a list of the organization references.
     *
     * @param string $name   Name of the organization. If null, returns all.
     * @return array         VMware_VCloud_API_ReferenceType object array
     * @since Version 1.0.0
     */
    public function getOrgRefs($name=null)
    {
        $url = $this->baseUrl . '/org/';
        $refs = $this->get($url)->getOrg();
        return VMware_VCloud_SDK_Helper::getObjsByName($refs, $name);
    }

    /**
     * Get all organization data objects or an organization data
     * object by its name in VMware vCloud Director.
     *
     * @param string $name   Name of the organization. If null, returns all
     * @return array         VMware_VCloud_API_OrgType object array
     * @since Version 1.0.0
     */
    public function getOrgs($name=null)
    {
        $orgs = array();
        $refs = $this->getOrgRefs($name);
        if (!$refs)
        {
           return $orgs;
        }
        foreach ($refs as $ref)
        {
            array_push($orgs, $this->get($ref->get_href()));
        }
        return $orgs;
    }

    /**
     * Get a VMware vCloud Director administrative object.
     *
     * @return VMware_VCloud_API_VCloudType
     * @since Version 1.0.0
     */
    public function getAdmin()
    {
        return $this->get($this->getAdminUrl());
    }

    /**
     * Get an Extension object which contains various links to access
     * extension API.
     *
     * @return VMware_VCloud_API_Extension_VMWExtensionType
     * @since Version 1.0.0
     */
    public function getAdminExtension()
    {
        return $this->get($this->getAdminExtensionUrl());
    }

    /**
     * Get current session.
     *
     * @return VMware_VCloud_API_SessionType
     * @since Version 1.5.0
     */
    public function getSession()
    {
        $url = $this->baseUrl . '/session';
        return $this->get($url);
    }

    /**
     * Delete current session.
     *
     * @return null
     * @since Version 1.5.0
     * @version 5.1.0
     * @deprecated
     */
    public function deleteSession()
    {
        $url = $this->baseUrl . '/session';
        $this->delete($url);
    }

    /**
     * Log out to VMware vCloud Director.
     *
     * @return null
     * @since Version 1.0.0
     * @version 1.5.0
     * @deprecated
     */
    public function logout()
    {
        $this->deleteSession();
    }

    /**
     * Get a vCloud Director query service entry point.
     *
     * @return VMware_VCloud_SDK_Query
     * @since Version 1.5.0
     */
    public function getQueryService()
    {
        return VMware_VCloud_SDK_Query::getInstance($this);
    }

    /**
     * Get a reference of the specified entity type by its name attribute.
     * It uses query service of vCloud Director, filters the query results in
     * reference format by the name attribute.
     *
     * @param string $type Supported query reference type, the entity in this
     *                     type should have the 'name' attribute.
     * @see VMware_VCloud_SDK_Query_Types
     * @param string $name
     * @param array $filter Additional filters in FIQL format. The attribute(s)
     *                 used for filtering can be attribute(s) of a query record
     *                 which may not be the attribute(s) of a query reference
     *                 result. Use this additional filter to make a unique
     *                 entity reference when needed.
     * @see VMware_VCloud_SDK_Query_Params setFilter()
     * @return array|null  VMware_VCloud_API_ReferenceType object array or null
     * @since Version 1.5.0
     */
    public function queryReferencesByName($type, $name, $filter=null)
    {
        if (!isset($name))
        {
            return null;
        }
        $f = isset($filter)? "name==$name;$filter" : "name==$name";
        $query = $this->getQueryService();
        $refs = $query->queryReferences($type, array('filter'=>$f));
        if (method_exists($refs, 'getReference'))
        {
            return $refs->getReference();
        }
        return null;
    }

    /**
     * Get a reference of the specified entity type by its type attribute.
     * It uses query service of vCloud Director, filters the query results in
     * reference format by the type attribute.
     *
     * @param string $type Supported query reference type.
     * @see VMware_VCloud_SDK_Query_Types
     * @return array|null  VMware_VCloud_API_ReferenceType object array or null
     * @since Version 5.1.0
     */
    public function queryReferencesByType($type)
    {
        $query = $this->getQueryService();
        $refs = $query->queryReferences($type);
        if (method_exists($refs, 'getReference'))
        {
            return $refs->getReference();
        }
        return null;
    }

    /**
     * Get a record of the specified entity type by its type attribute.
     * It uses query service of vCloud Director, filters the query results in
     * record format by the type attribute.
     *
     * @param string $type Supported query record type.
     * @see VMware_VCloud_SDK_Query_Types
     * @return array|null  VMware_VCloud_API_QueryResultRecordsType object array or null
     * @since Version 5.1.0
     */
    public function queryRecordsByType($type)
    {
        $query = $this->getQueryService();
        $records = $query->queryRecords($type);
        if (method_exists($records, 'getRecord'))
        {
            return $records->getRecord();
        }
        return null;
    }

    /**
     * A helper function to wait for a vCloud resource entity (represented by a
     * vCloud data object) to meet a specified condition in a waiting period.
     *
     * @param mixed $obj       A VMware vCloud data object, which should have an
     *                         href property
     * @param string $method   Method name on the VMware vCloud data object
     *                         that will be invoked to get a value, and be
     *                         compared with the specified condition
     * @param array $cond      Values will be used as boolean equal condition
     * @param int $iteration   Maximum loops to check the condition
     * @param int $interval    Wait interval in seconds
     * @return mixed           Refetched object represented by $obj
     * @throws VMware_VCloud_SDK_Exception
     * @since Version 1.0.0
     */
    public function wait($obj, $method, $cond, $iteration=200, $interval=20)
    {
        while (0 != $iteration--)
        {
            sleep ($interval);
            $obj = $this->refetch($obj);
            $value = $obj->{$method}();
            if (in_array($value, $cond))
            {
                return $obj;
            }
        }
        throw new VMware_VCloud_SDK_Exception("Times out.\n");
    }

    /**
     * Wait for a task to finish.
     *
     * @param VMware_VCloud_API_TaskType $task
     * @param int $iteration   Wait loops
     * @param int $interval    Wait interval in seconds
     * @return VMware_VCloud_API_TaskType
     * @since Version 1.0.0
     */
    public function waitForTask($task, $iteration=200, $interval=20)
    {
        return $this->wait($task, 'get_status', array('success', 'canceled',
                           'error', 'aborted'), $iteration, $interval);
    }
}