<?php
namespace Enjin\Sdk\Model;

/**
 * Models a wallet on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Wallet extends Model {
    
    /**
     * The Ethereum address of this wallet
     * 
     * @var string|null
     */
    protected $_ethAddress = null;

    /**
     * The ENJ allowance given to crypto items
     * 
     * @var float|null
     */
    protected $_enjAllowance = null;

    /**
     * The ENJ balance for this wallet
     * 
     * @var float|null
     */
    protected $_enjBalance = null;

    /**
     * The ETH balance for this wallet
     * 
     * @var float|null
     */
    protected $_ethBalance = null;

    /**
     * The assets this wallet has created
     * 
     * @var Asset[]|null
     */
    protected $_assetsCreated = null;
    
    /**
     * Get the Ethereum address of this wallet
     * 
     * @return string|null
     */
    public function getEthAddress() {
        return $this->_ethAddress;
    }

    /**
     * Get the ENJ allowance given to crypto items
     * 
     * @return float|null
     */
    public function getEnjAllowance() {
        return $this->_enjAllowance;
    }

    /**
     * Get the ENJ balance for this wallet
     * 
     * @return float|null
     */
    public function getEnjBalance() {
        return $this->_enjBalance;
    }

    /**
     * Get the ETH balance for this wallet
     * 
     * @return float|null
     */
    public function getEthBalance() {
        return $this->_ethBalance;
    }

    /**
     * Get the assets this wallet has created
     * 
     * @return Asset[]|null
     */
    public function getAssetsCreated() {
        return $this->_assetsCreated;
    }
}

/*EOF*/