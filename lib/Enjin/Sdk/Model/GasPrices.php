<?php
namespace Enjin\Sdk\Model;

/**
 * Models a gas prices object
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GasPrices extends Model {
    
    /**
     * The recommended safe gas price in Gwei<br/>
     * Expected to be mined in less than 30 minutes.
     *
     * @var float|null
     */
    protected $_safeLow = null;

    /**
     * The recommended average gas price in Gwei<br/>
     * Expected to be mined in less than 5 minutes.
     *
     * @var float|null
     */
    protected $_average = null;

    /**
     * The recommended fast gas price in Gwei<br/>
     * Expected to be mined in less than 2 minutes.
     *
     * @var float|null
     */
    protected $_fast = null;

    /**
     * The recommended fastest gas price in Gwei<br/>
     * Expected to be mined in less than 30 seconds.
     *
     * @var float|null
     */
    protected $_fastest = null;
    
    /**
     * Get the recommended safe gas price in Gwei<br/>
     * Expected to be mined in less than 30 minutes.
     *
     * @return float|null
     */
    public function getSafeLow() {
        return $this->_safeLow;
    }

    /**
     * Get the recommended average gas price in Gwei<br/>
     * Expected to be mined in less than 5 minutes.
     *
     * @return float|null
     */
    public function getAverage() {
        return $this->_average;
    }

    /**
     * Get the recommended fast gas price in Gwei<br/>
     * Expected to be mined in less than 2 minutes.
     *
     * @return float|null
     */
    public function getFast() {
        return $this->_fast;
    }

    /**
     * Get the recommended fastest gas price in Gwei<br/>
     * Expected to be mined in less than 30 seconds.
     *
     * @return float|null
     */
    public function getFastest() {
        return $this->_fastest;
    }
}

/*EOF*/