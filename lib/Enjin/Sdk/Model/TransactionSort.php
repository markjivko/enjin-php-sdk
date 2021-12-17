<?php

namespace Enjin\Sdk\Model;

/**
 * Models sorting input for transactions
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class TransactionSort extends Model {

    /**
     * Transaction field
     * 
     * @use Enum\TransactionField
     * @var string|null
     */
    protected $_field = null;

    /**
     * Transaction sort direction
     * 
     * @use Enum\SortDirection
     * @var string|null
     */
    protected $_direction = null;

    /**
     * Get the transaction sort field
     * 
     * @return string|null Enum\TransactionField
     */
    public function getField() {
        return $this->_field;
    }

    /**
     * Set the transaction sort field
     * 
     * @param string $field Enum\TransactionField
     * @return $this
     */
    public function setField($field) {
        $this->_field = self::validateType($field, Enum\TransactionField::class);
        return $this;
    }

    /**
     * Get the transaction sort direction
     * 
     * @return string|null Enum\SortDirection
     */
    public function getDirection() {
        return $this->_direction;
    }

    /**
     * Set the transaction sort direction
     * 
     * @param string $direction Enum\SortDirection
     * @return $this
     */
    public function setDirection($direction) {
        $this->_direction = self::validateType($direction, Enum\SortDirection::class);
        return $this;
    }

}

/*EOF*/