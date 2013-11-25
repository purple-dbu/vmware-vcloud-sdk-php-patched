<?php
class VMware_VCloud_SDK_Query_Params
{
    /**
     * Query parameters.
     *
     * @var array
     */
    protected $params = array (
               'sortAsc'=>null,
               'sortDesc'=>null,
               'page'=>null,
               'pageSize'=>null,
               'fields'=>null,
               'filter'=>null
    );

    /**
     * Constructor
     *
     * Initialize the query parameters.
     */
    public function __construct($params=null)
    {
        if (!empty($params))
        {
            $this->params = $params;
        }
    }

    /**
     * Returns query parameters.
     *
     * @return array
     * @since Version 1.5.0
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Sets query parameters.
     *
     * @param array $params
     * @since Version 1.5.0
     */
    public function setParams($params)
    {
        $this->params = $params;
    }

    /**
     * Sets the query condition.
     * For example: $params->setFilter('(name==vApp*;category==Catalog%20Item)');
     *
     * @param string $filter An FIQL statement.
     * @see http://wattle.apnic.net/ietf/all-ids/draft-nottingham-atompub-fiql-00.txt
     * @since Version 1.5.0
     */
    public function setFilter($filter)
    {
        if (isset($filter))
        {
            $this->params['filter'] = $filter;
        }
    }

    /**
     * Sets fields to retrieve.
     * For example: $params->setFields('name,category');
     *
     * @param string $fields A comma separeted fields string.
     * @since Version 1.5.0
     */
    public function setFields($fields)
    {
        if (isset($fields))
        {
            $this->params['fields'] = $fields;
        }
    }

    /**
     * Sets the size of the page when displaying query output.
     *
     * @param int $pageSize
     * @since Version 1.5.0
     */
    public function setPageSize($pageSize)
    {
        if (0 < $pageSize)
        {
            $this->params['pageSize'] = $pageSize;
        }
    }

    /**
     * Sets the page number of the query output to retrieve.
     *
     * @param int $page Maximum is 100.
     * @since Version 1.5.0
     */
    public function setPage($page)
    {
        if (0 < $page)
        {
            $this->params['page'] = $page;
        }
    }

    /**
     * Sets the field(s) name by which to sort in the descending order. Field
     * name comes first has higher priority in the sorting. For example, when
     * $fields = 'LastName, FirstName', the records of the query result will be
     * sorted first by the 'LastName' column, and then the 'FirstName' column.
     * This parameter can only be used when the query output format is set as
     * 'records'.
     * For example: $params->setSortDesc('name,category');
     *
     * @param string $fields Comma separated field(s) name
     * @param string $pname  Query sorting parameter names, allowed values are:
     *                       'sortDesc', 'sortAsc'.
     * @since Version 1.5.0
     */
    public function setSortDesc($fields, $pname='sortDesc')
    {
        if (!isset($fields))
        {
            $this->params[$pname] = null;
            return;
        }
        $fs = explode(',', $fields);
        $sort = $fs[0];
        unset($fs[0]);
        if (isset($fs))
        {
            foreach ($fs as $f)
            {
                $sort .= '&' . "$pname=$f";
            }
        }
        $this->params[$pname] = $sort;
    }

    /**
     * Sets the field(s) name by which to sort in the ascending order. This
     * parameter can only be used when the query output format is set as
     * 'records'.
     * For example: $params->setSortAsc('name,category');
     * @param string $fields Comma separted field(s) name.
     * @since Version 1.5.0
     */
    public function setSortAsc($fields)
    {
        $this->setSortDesc($fields, 'sortAsc');
    }
}