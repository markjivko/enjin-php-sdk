<?php
namespace Enjin\Sdk\Model;

/**
 * Models a pagination cursor for queries
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class PaginationCursor extends Model {
    
    /**
     * Total number of items selected
     * 
     * @var int|null
     */
    protected $_total = null;
    
    /**
     * Number of items per page
     * 
     * @var int|null
     */
    protected $_perPage = null;
    
    /**
     * Current page
     * 
     * @var int|null
     */
    protected $_currentPage = null;
    
    /**
     * True if the cursor has pages, false otherwise
     * 
     * @var boolean|null
     */
    protected $_hasPages = null;
    
    /**
     * Number of the first item returned
     * 
     * @var int|null
     */
    protected $_from = null;
    
    /**
     * Number of the last item returned
     * 
     * @var int|null
     */
    protected $_to = null;
    
    /**
     * The last page (number of pages)
     * 
     * @var int|null
     */
    protected $_lastPage = null;
    
    /**
     * True if the cursor has more pages, false otherwise
     * 
     * @var boolean|null
     */
    protected $_hasMorePages = null;
    
    /**
     * Total number of items selected
     * 
     * @return int|null
     */
    public function getTotal() {
        return $this->_total;
    }
    
    /**
     * Number of items per page
     * 
     * @return int|null
     */
    public function getPerPage() {
        return $this->_perPage;
    }
    
    /**
     * Current page
     * 
     * @return int|null
     */
    public function getCurrentPage() {
        return $this->_currentPage;
    }
    
    /**
     * True if the cursor has pages, false otherwise
     * 
     * @return boolean|null
     */
    public function hasPages() {
        return $this->_hasPages;
    }
    
    /**
     * Number of the first item returned
     * 
     * @return int|null
     */
    public function getFrom() {
        return $this->_from;
    }
    
    /**
     * Number of the last item returned
     * 
     * @return int|null
     */
    public function getTo() {
        return $this->_to;
    }
    
    /**
     * The last page (number of pages)
     * 
     * @return int|null
     */
    public function getLastPage() {
        return $this->_lastPage;
    }
    
    /**
     * True if the cursor has more pages, false otherwise
     * 
     * @return boolean|null
     */
    public function hasMorePages() {
        return $this->_hasMorePages;
    }
    
}

/*EOF*/