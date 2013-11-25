<?php
class VMware_VCloud_SDK_Query extends VMware_VCloud_SDK_Query_Abstract
{
    /**
     * An instance of VMware_VCloud_SDK_Service.
     */
    protected $svc = null;

    /**
     * An instance of VMware_VCloud_SDK_Query
     */
    protected static $sdkQuery = null;

    /**
     * The base query URL.
     */
    protected $queryUrl = null;

    /**
     * 'references' query format.
     */
    const QUERY_REFERENCES = 'references';

    /**
     * 'records' query format.
     */
    const QUERY_RECORDS = 'records';

    /**
     * 'idrecords' query format.
     */
    const QUERY_IDRECORDS = 'idrecords';

    /**
     * Constructor
     *
     * @param VMware_VCloud_SDK_Service
     * @access protected
     */
    protected function __construct($svc)
    {
        $this->svc = $svc;
        $this->queryUrl = $svc->getBaseUrl() . '/query?type=';
    }

    /**
     * Returns an instance of VMware_VCloud_SDK_Query object.
     *
     * @param VMware_VCloud_SDK_Service
     * @return VMware_VCloud_SDK_Query
     * @since Version 1.5.0
     */ 
    public static function getInstance($svc)
    {
        if (self::$sdkQuery)
        {
            return self::$sdkQuery;
        }
        return new VMware_VCloud_SDK_Query($svc);
    }

    /**
     * Retrieves references for the specified query type.
     *
     * @param string $type
     * @param array|VMware_VCloud_SDK_QueryParams $params
     * @return VMware_VCloud_API_ReferencesType
     * @since Version 1.5.0
     */
    public function queryReferences($type, $params=null)
    {
        return $this->query($type, $params, self::QUERY_REFERENCES);
    }

    /**
     * Retrieves records for the specified query type.
     *
     * @param string $type
     * @param array|VMware_VCloud_SDK_QueryParams $params
     * @return VMware_VCloud_API_QueryResultRecordsType
     * @since Version 1.5.0
     */
    public function queryRecords($type, $params=null)
    {
        return $this->query($type, $params, self::QUERY_RECORDS);
    }

    /**
     * Retrieves idrecords for the specified query type.
     *
     * @param string $type
     * @param array|VMware_VCloud_SDK_QueryParams $params
     * @return VMware_VCloud_API_QueryResultRecordsType
     * @since Version 1.5.0
     */
    public function queryIdRecords($type, $params=null)
    {
        return $this->query($type, $params, self::QUERY_IDRECORDS);
    }

    /**
     * Retrieves idrecords for the specified query type.
     *
     * @param string $type
     * @param array|VMware_VCloud_SDK_QueryParams $params
     * @param string $format
     * @return VMware_VCloud_API_QueryResultRecordsType
     * @access protected
     */
    protected function query($type, $params, $format)
    {
        $url = $this->constructUrl($type, $params);
        $url .= '&format=' . $format;
        return $this->svc->get($url);
    }

    /**
     * Constructs a query URL, including query type and query parameters.
     *
     * @param string $type
     * @param array|VMware_VCloud_SDK_QueryParams $params
     * @return string
     * @access protected
     */
    protected function constructUrl($type, $params=null)
    {
        $url = $this->queryUrl . $type;
        if (!is_null($params))
        {
            $ps = method_exists($params, 'getParams')? 
                  $params->getParams() : $params;
            foreach ($ps as $key => $value)
            {
                if (isset($value))
                {
                    $url .= '&' . "$key=$value";
                }
            }
        }
        //echo "query URL = $url\n";
        return $url;
    }
}