<?php
namespace Enjin\Sdk\Model;

/**
 * Models a smart contract used by the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Contracts extends Model {
    
    /**
     * The ENJ contract address
     * 
     * @var string|null
     */
    protected $_enj = null;

    /**
     * The crypto items contract address
     * 
     * @var string|null
     */
    protected $_cryptoItems = null;

    /**
     * The platform registry contract address
     * 
     * @var string|null
     */
    protected $_platformRegistry = null;

    /**
     * The supply models used by the platform
     * 
     * @var SupplyModels|null
     */
    protected $_supplyModels = null;
    
    /**
     * Get the ENJ contract address
     * 
     * @return string|null
     */
    public function getEnj() {
        return $this->_enj;
    }

    /**
     * Get the crypto items contract address
     * 
     * @return string|null
     */
    public function getCryptoItems() {
        return $this->_cryptoItems;
    }

    /**
     * Get the platform registry contract address
     * 
     * @return string|null
     */
    public function getPlatformRegistry() {
        return $this->_platformRegistry;
    }

    /**
     * Get the supply models used by the platform
     * 
     * @return SupplyModels|null
     */
    public function getSupplyModels() {
        return $this->_supplyModels;
    }
}

/*EOF*/