<?php
namespace Enjin\Sdk\Model;

/**
 * Models the supply models used by the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SupplyModels extends Model {
    
    /**
     * The fixed model
     * 
     * @var string|null
     */
    protected $_fixed = null;

    /**
     * The settable model
     * 
     * @var string|null
     */
    protected $_settable = null;

    /**
     * The infinite model
     * 
     * @var string|null
     */
    protected $_infinite = null;

    /**
     * The collapsing model
     * 
     * @var string|null
     */
    protected $_collapsing = null;

    /**
     * The annual value model
     * 
     * @var string|null
     */
    protected $_annualValue = null;

    /**
     * The annual percentage model
     * 
     * @var string|null
     */
    protected $_annualPercentage = null;
 
    /**
     * Get the fixed model
     * 
     * @return string|null
     */
    public function getFixed() {
        return $this->_fixed;
    }

    /**
     * Get the settable model
     * 
     * @return string|null
     */
    public function getSettable() {
        return $this->_settable;
    }

    /**
     * Get the infinite model
     * 
     * @return string|null
     */
    public function getInfinite() {
        return $this->_infinite;
    }

    /**
     * Get the collapsing model
     * 
     * @return string|null
     */
    public function getCollapsing() {
        return $this->_collapsing;
    }

    /**
     * Get the annual value model
     * 
     * @return string|null
     */
    public function getAnnualValue() {
        return $this->_annualValue;
    }

    /**
     * Get the annual percentage model
     * 
     * @return string|null
     */
    public function getAnnualPercentage() {
        return $this->_annualPercentage;
    }
}

/*EOF*/