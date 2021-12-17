<?php
namespace Enjin\Sdk\Model;

/**
 * Provides implementation of common filter input functionality
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait Filter {
    
    /**
     * AND filter models
     * 
     * @var Model[]|null
     */
    protected $_and = null;
    
    /**
     * OR filter models
     * 
     * @var Model[]|null
     */
    protected $_or = null;
    
    /**
     * Intersect with other filters
     * 
     * @var Filter $filters Filter Models
     * @return $this
     */
    public function and(...$filters) {
        foreach ($filters as $filter) {
            if ($filter instanceof Model && in_array(Filter::class, class_uses($filter))) {
                if (!is_array($this->_and)) {
                    $this->_and = [];
                }
                $this->_and[] = $filter;
            }
        }
        return $this;
    }
    
    /**
     * Join other filters
     * 
     * @var Filter $filters Filter Models
     * @return $this
     */
    public function or(...$filters) {
        foreach ($filters as $filter) {
            if ($filter instanceof Model && in_array(Filter::class, class_uses($filter))) {
                if (!is_array($this->_or)) {
                    $this->_or = [];
                }
                $this->_or[] = $filter;
            }
        }
        return $this;
    }
}

/*EOF*/