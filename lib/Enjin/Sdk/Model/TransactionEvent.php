<?php
namespace Enjin\Sdk\Model;

/**
 * Models a blockchain transaction event
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class TransactionEvent extends Model {
    
    /**
     * The name
     *
     * @var string|null
     */
    protected $_name = null;

    /**
     * The parameters
     *
     * @var array
     */
    protected $_inputs = [];

    /**
     * The non-indexed parameters
     *
     * @var array
     */
    protected $_nonIndexedInputs = [];

    /**
     * The indexed parameters
     *
     * @var array
     */
    protected $_indexedInputs = [];

    /**
     * The event signature, or null if anonymous
     *
     * @var string|null
     */
    protected $_signature = null;

    /**
     * The encoded signature
     *
     * @var string|null
     */
    protected $_encodedSignature = null;
    
    /**
     * The name
     *
     * @return string|null
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * The parameters
     *
     * @return array
     */
    public function getInpu() {
        return $this->_inputs;
    }

    /**
     * The non-indexed parameters
     *
     * @return array
     */
    public function getNonIndexedInpu() {
        return $this->_nonIndexedInputs;
    }

    /**
     * The indexed parameters
     *
     * @return array
     */
    public function getIndexedInpu() {
        return $this->_indexedInputs;
    }

    /**
     * The event signature, or null if anonymous
     *
     * @return string|null
     */
    public function getSignature() {
        return $this->_signature;
    }

    /**
     * The encoded signature
     *
     * @return string|null
     */
    public function getEncodedSignature() {
        return $this->_encodedSignature;
    }
}

/*EOF*/