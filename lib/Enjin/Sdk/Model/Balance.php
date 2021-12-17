<?php
namespace Enjin\Sdk\Model;

/**
 * Models an asset balance
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Balance extends Model {
    
    /**
     * The asset ID for this balance
     * 
     * @var string|null
     */
    protected $_id = null;

    /**
     * The asset index for this balance
     * 
     * @var string|null
     */
    protected $_index = null;

    /**
     * The amount of the asset
     * 
     * @var int|null
     */
    protected $_value = null;

    /**
     * The project for this balance's asset
     * 
     * @var Project|null
     */
    protected $_project = null;

    /**
     * The wallet for this balance
     * 
     * @var Wallet|null
     */
    protected $_wallet = null;
    
    /**
     * Get the asset ID for this balance
     * 
     * @return string|null
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * Get the asset index for this balance
     * 
     * @return string|null
     */
    public function getIndex() {
        return $this->_index;
    }

    /**
     * Get the amount of the asset
     * 
     * @return int|null
     */
    public function getValue() {
        return $this->_value;
    }

    /**
     * Get the project for this balance's asset
     * 
     * @return Project|null
     */
    public function getProject() {
        return $this->_project;
    }

    /**
     * Get the wallet for this balance
     * 
     * @return Wallet|null
     */
    public function getWallet() {
        return $this->_wallet;
    }
}

/*EOF*/