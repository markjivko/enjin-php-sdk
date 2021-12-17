<?php

namespace Enjin\Sdk\Model;

/**
 * Models a pagination input for pagination requests
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class PaginationOptions extends Model {

    /**
     * Page number to start at
     * 
     * @var int|null
     */
    protected $_page = null;

    /**
     * Number of results to return per page
     * 
     * @var int|null
     */
    protected $_limit = null;

    /**
     * Get page number to start at
     * 
     * @return int|null
     */
    public function getPage() {
        return $this->_page;
    }

    /**
     * Set page number to start at
     * 
     * @param int $page
     * @return $this
     */
    public function setPage($page) {
        $this->_page = self::validateType($page, self::TYPE_INT);
        return $this;
    }

    /**
     * Get number of results to return per page
     * 
     * @return int|null
     */
    public function getLimit() {
        return $this->_limit;
    }

    /**
     * Set number of results to return per page
     * 
     * @param int $limit
     * @return $this
     */
    public function setLimit($limit) {
        $this->_limit = self::validateType($limit, self::TYPE_INT);
        return $this;
    }

}

/*EOF*/