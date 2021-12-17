<?php
namespace Enjin\Sdk\Model;

/**
 * Models a blockchain transaction log
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class TransactionLog extends Model {
    
    /**
     * The block number
     *
     * @var int|null
     */
    protected $_blockNumber = null;

    /**
     * The originating address
     *
     * @var string|null
     */
    protected $_address = null;

    /**
     * The hash of the transaction
     *
     * @var string|null
     */
    protected $_transactionHash = null;

    /**
     * The list of data objects
     *
     * @var array
     */
    protected $_data = [];

    /**
     * The list of topics
     *
     * @var array
     */
    protected $_topics = [];

    /**
     * The transaction event
     *
     * @var TransactionEvent|null
     */
    protected $_event = null;
    
    /**
     * The block number
     *
     * @return int|null
     */
    public function getBlockNumber() {
        return $this->_blockNumber;
    }

    /**
     * The originating address
     *
     * @return string|null
     */
    public function getAddress() {
        return $this->_address;
    }

    /**
     * The hash of the transaction
     *
     * @return string|null
     */
    public function getTransactionHash() {
        return $this->_transactionHash;
    }

    /**
     * The list of data objects
     *
     * @return array
     */
    public function getData() {
        return $this->_data;
    }

    /**
     * The list of topics
     *
     * @return array
     */
    public function getTopics() {
        return $this->_topics;
    }

    /**
     * The transaction event
     *
     * @return TransactionEvent|null
     */
    public function getEvent() {
        return $this->_event;
    }
}

/*EOF*/