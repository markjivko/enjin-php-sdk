<?php
namespace Enjin\Sdk\Model;

/**
 * Models sorting input for assets
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetSort extends Model {
    
    /**
     * Sort field
     * 
     * @use Enum\AssetField
     * @var string|null
     */
    protected $_field = null;
    
    /**
     * Sort direction
     * 
     * @use Enum\SortDirection
     * @var string|null
     */
    protected $_direction = null;
    
    /**
     * Get the sort field
     * 
     * @return string|null Enum\AssetField
     */
    public function getField() {
        return $this->_field;
    }
    
    /**
     * Set the sort field
     * 
     * @param string $field Enum\AssetField
     * @return $this
     */
    public function setField($field) {
        $this->_field = self::validateType($field, Enum\AssetField::class);
        return $this;
    }
    
    /**
     * Get the sort direction
     * 
     * @return string|null Enum\SortDirection
     */
    public function getDirection() {
        return $this->_direction;
    }
    
    /**
     * Set the sort direction
     * 
     * @param string $direction Enum\SortDirection
     * @return $this
     */
    public function setdirection($direction) {
        $this->_direction = self::validateType($direction, Enum\SortDirection::class);
        return $this;
    }
}

/*EOF*/