<?php
namespace Enjin\Sdk\Model;

/**
 * Models the blockchain data of a {@link Request}
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class BlockchainData extends Model {
    
    /**
     * The encoded data of the transaction, ready for signing
     * 
     * @var string|null
     */
    protected $_encodedData = null;

    /**
     * The signed string for the transaction
     * 
     * @var string|null
     */
    protected $_signedTransaction = null;

    /**
     * The signed backup string for the transaction
     * 
     * @var string|null
     */
    protected $_signedBackupTransaction = null;

    /**
     * The signed cancel string for the transaction
     * 
     * @var string|null
     */
    protected $_signedCancelTransaction = null;

    /**
     * The receipt for the transaction
     * 
     * @var TransactionReceipt|null
     */
    protected $_receipt = null;

    /**
     * The error message for the transaction
     * 
     * @var string|null
     */
    protected $_error = null;

    /**
     * The nonce for the transaction
     * 
     * @var string|null
     */
    protected $_nonce = null;

    /**
     * The encoded data of the transaction, ready for signing
     * 
     * @return string|null
     */
    public function getEncodedData() {
        return $this->_encodedData;
    }
    
    /**
     * The signed string for the transaction
     * 
     * @return string|null
     */
    public function getSignedTransaction() {
        return $this->_signedTransaction;
    }
    
    /**
     * The signed backup string for the transaction
     * 
     * @return string|null
     */
    public function getSignedBackupTransaction() {
        return $this->_signedBackupTransaction;
    }
    
    /**
     * The signed cancel string for the transaction
     * 
     * @return string|null
     */
    public function getSignedCancelTransaction() {
        return $this->_signedCancelTransaction;
    }
    
    /**
     * The receipt for the transaction
     * 
     * @return TransactionReceipt|null
     */
    public function getReceipt() {
        return $this->_receipt;
    }
    
    /**
     * The error message for the transaction
     * 
     * @return string|null
     */
    public function getError() {
        return $this->_error;
    }
    
    /**
     * The nonce for the transaction
     * 
     * @return string|null
     */
    public function getNonce() {
        return $this->_nonce;
    }
    
}

/*EOF*/