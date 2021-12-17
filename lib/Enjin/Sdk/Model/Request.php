<?php
namespace Enjin\Sdk\Model;

/**
 * Models a transaction on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Request extends Model {
    
    /**
     * Transaction ID
     * 
     * @var int|null
     */
    protected $_id = null;
    
    /**
     * Transaction Hash ID
     * 
     * @var string|null
     */
    protected $_transactionId = null;
    
    /**
     * Transaction title
     * 
     * @var string|null
     */
    protected $_title = null;
    
    /**
     * Contract address for this transaction
     * 
     * @var string|null
     */
    protected $_contract = null;
    
    /**
     * Transaction type
     * 
     * @var string|null
     */
    protected $_type = null;
    
    /**
     * Transaction value
     * 
     * @var string|null
     */
    protected $_value = null;
    
    /**
     * Transaction retry state
     * 
     * @var string|null
     */
    protected $_retryState = null;
    
    /**
     * Transaction request state
     * 
     * @use Enum\RequestState
     * @var string|null
     */
    protected $_state = null;
    
    /**
     * Transaction accepted
     * 
     * @var boolean|null
     */
    protected $_accepted = null;
    
    /**
     * Whether the transaction wallet is a project wallet
     * 
     * @var boolean|null
     */
    protected $_projectWallet = null;
    
    /**
     * Transaction blockchain data
     * 
     * @var BlockchainData|null
     */
    protected $_blockchainData = null;
    
    /**
     * Project this transaction belongs to
     * 
     * @var Project|null
     */
    protected $_project = null;
    
    /**
     * Transaction asset
     * 
     * @var Asset|null
     */
    protected $_asset = null;
    
    /**
     * Represents the datetime when this transaction was created<br/>
     * The datetime is formatted using the ISO 8601 date format
     * 
     * @var string
     */
    protected $_createdAt = null;
    
    /**
     * Represents the datetime when this transaction was last updated<br/>
     * The datetime is formatted using the ISO 8601 date format
     * 
     * @var string
     */
    protected $_updatedAt = null;
    
    /**
     * Transaction ID
     * 
     * @return int|null
     */
    public function getId() {
        return $this->_id;
    }
    
    /**
     * Transaction Hash ID
     * 
     * @return string|null
     */
    public function getTransactionId() {
        return $this->_transactionId;
    }
    
    /**
     * Transaction title
     * 
     * @return string|null
     */
    public function getTitle() {
        return $this->_title;
    }
    
    /**
     * Contract address for this transaction
     * 
     * @return string|null
     */
    public function getContract() {
        return $this->_contract;
    }
    
    /**
     * Transaction type
     * 
     * @return string|null
     */
    public function getType() {
        return $this->_type;
    }
    
    /**
     * Transaction value
     * 
     * @return string|null
     */
    public function getValue() {
        return $this->_value;
    }
    
    /**
     * Transaction retry state
     * 
     * @return string|null
     */
    public function getRetryState() {
        return $this->_retryState;
    }
    
    /**
     * Transaction request state
     * 
     * @return string|null Enum\RequestState
     */
    public function getState() {
        return $this->_state;
    }
    
    /**
     * Transaction accepted
     * 
     * @return boolean|null
     */
    public function isAccepted() {
        return $this->_accepted;
    }
    
    /**
     * Get whether the transaction wallet is a project wallet
     * 
     * @return boolean|null
     */
    public function isProjectWallet() {
        return $this->_projectWallet;
    }
    
    /**
     * Get blockchain data
     * 
     * @return BlockchainData|null
     */
    public function getBlockchainData() {
        return $this->_blockchainData;
    }
    
    /**
     * Get the project this transaction belongs to
     * 
     * @return Project|null
     */
    public function getProject() {
        return $this->_project;
    }
    
    /**
     * Get transaction asset
     * 
     * @return Asset|null
     */
    public function getAsset() {
        return $this->_asset;
    }
    
    /**
     * Get the datetime when this transaction was created<br/>
     * The datetime is formatted using the ISO 8601 date format
     * 
     * @return string|null
     */
    public function getCreatedAt() {
        return $this->_createdAt;
    }
    
    /**
     * Get the datetime when this transaction was last updated<br/>
     * The datetime is formatted using the ISO 8601 date format
     * 
     * @return string|null
     */
    public function getUpdatedAt() {
        return $this->_updatedAt;
    }
}

/*EOF*/