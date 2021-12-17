<?php

namespace Enjin\Sdk\Model;

/**
 * Models a filter input for transaction queries
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class TransactionFilter extends Model {

    // Implement filter methods
    use Filter;

    /**
     * The ID to filter for
     * 
     * @var string|null
     */
    protected $_id = null;

    /**
     * The IDs to filter for
     * 
     * @json id_in
     * @var string[]|null
     */
    protected $_idIn = null;

    /**
     * The hash ID to filter for
     * 
     * @var string|null
     */
    protected $_transactionId = null;

    /**
     * The hash IDs to filter for
     * 
     * @json transactionId_in
     * @var string[]|null
     */
    protected $_transactionIdIn = null;

    /**
     * The asset ID to filter for
     * 
     * @var string|null
     */
    protected $_assetId = null;

    /**
     * The asset IDs to filter for
     * 
     * @json assetId_in
     * @var string[]|null
     */
    protected $_assetIdIn = null;

    /**
     * The transaction type to filter for
     * 
     * @use Enum\RequestType
     * @var string|null
     */
    protected $_type = null;

    /**
     * The transaction types to filter for
     * 
     * @use Enum\RequestType
     * @json type_in
     * @var string[]|null
     */
    protected $_typeIn = null;

    /**
     * Include transactions equal to the passed value
     * 
     * @var int|null
     */
    protected $_value = null;

    /**
     * Include transactions greater than the passed value
     * 
     * @json value_gt
     * @var int|null
     */
    protected $_valueGreaterThan = null;

    /**
     * Include transactions greater than or equal to the passed value
     * 
     * @json value_gte
     * @var int|null
     */
    protected $_valueGreaterThanOrEqual = null;

    /**
     * Include transactions less than the passed value
     * 
     * @json value_lt
     * @var int|null
     */
    protected $_valueLessThan = null;

    /**
     * Include transactions less than or equal to the passed value
     * 
     * @json value_lte
     * @var int|null
     */
    protected $_valueLessThanOrEqual = null;

    /**
     * The transaction state to filter for
     * 
     * @use Enum\RequestState
     * @var string|null
     */
    protected $_state = null;

    /**
     * The transaction state to filter for
     * 
     * @use Enum\RequestState
     * @json state_in
     * @var string[]|null
     */
    protected $_stateIn = null;

    /**
     * The wallet to filter for
     * 
     * @var string|null
     */
    protected $_wallet = null;

    /**
     * The wallets to filter for
     * 
     * @json wallet_in
     * @var string[]|null
     */
    protected $_walletIn = null;

    /**
     * Get the ID to filter for
     * 
     * @return string|null
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * Set the ID to filter for
     * 
     * @param string $id
     * @return $this
     */
    public function setId($id) {
        $this->_id = self::validateType($id, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the IDs to filter for
     * 
     * @return string[]|null
     */
    public function getIdIn() {
        return $this->_idIn;
    }

    /**
     * Set the IDs to filter for
     * 
     * @param string[] $idIn
     * @return $this
     */
    public function setIdIn($idIn) {
        $this->_idIn = self::validateType($idIn, self::TYPE_STRING, true);
        return $this;
    }

    /**
     * Get the hash ID to filter for
     * 
     * @return string|null
     */
    public function getTransactionId() {
        return $this->_transactionId;
    }

    /**
     * Set the hash ID to filter for
     * 
     * @param string $transactionId
     * @return $this
     */
    public function setTransactionId($transactionId) {
        $this->_transactionId = self::validateType($transactionId, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the hash IDs to filter for
     * 
     * @return string[]|null
     */
    public function getTransactionIdIn() {
        return $this->_transactionIdIn;
    }

    /**
     * Set the hash IDs to filter for
     * 
     * @param string[] $transactionIdIn
     * @return $this
     */
    public function setTransactionIdIn($transactionIdIn) {
        $this->_transactionIdIn = self::validateType($transactionIdIn, self::TYPE_STRING, true);
        return $this;
    }

    /**
     * Get the asset ID to filter for
     * 
     * @return string|null
     */
    public function getAssetId() {
        return $this->_assetId;
    }

    /**
     * Set the asset ID to filter for
     * 
     * @param string $assetId
     * @return $this
     */
    public function setAssetId($assetId) {
        $this->_assetId = self::validateType($assetId, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the asset IDs to filter for
     * 
     * @return string[]|null
     */
    public function getAssetIdIn() {
        return $this->_assetIdIn;
    }

    /**
     * Set the asset IDs to filter for
     * 
     * @param string[] $assetIdIn
     * @return $this
     */
    public function setAssetIdIn($assetIdIn) {
        $this->_assetIdIn = self::validateType($assetIdIn, self::TYPE_STRING, true);
        return $this;
    }

    /**
     * Get the transaction type to filter for
     * 
     * @return string|null Enum\RequestType
     */
    public function getType() {
        return $this->_type;
    }

    /**
     * Set the transaction type to filter for
     * 
     * @param string $type Enum\RequestType
     * @return $this
     */
    public function setType($type) {
        $this->_type = self::validateType($type, Enum\RequestType::class);
        return $this;
    }

    /**
     * Get the transaction types to filter for
     * 
     * @return string[]|null Enum\RequestType
     */
    public function getTypeIn() {
        return $this->_typeIn;
    }

    /**
     * Set the transaction types to filter for
     * 
     * @param string[] $typeIn Enum\RequestType
     * @return $this
     */
    public function setTypeIn($typeIn) {
        $this->_typeIn = self::validateType($typeIn, Enum\RequestType::class, true);
        return $this;
    }

    /**
     * Include transactions equal to the passed value
     * 
     * @return int|null
     */
    public function getValue() {
        return $this->_value;
    }

    /**
     * Include transactions equal to the passed value
     * 
     * @param int $value
     * @return $this
     */
    public function setValue($value) {
        $this->_value = self::validateType($value, self::TYPE_INT);
        return $this;
    }

    /**
     * Include transactions greater than the passed value
     * 
     * @return int|null
     */
    public function getValueGreaterThan() {
        return $this->_valueGreaterThan;
    }

    /**
     * Include transactions greater than the passed value
     * 
     * @param int $valueGreaterThan
     * @return $this
     */
    public function setValueGreaterThan($valueGreaterThan) {
        $this->_valueGreaterThan = self::validateType($valueGreaterThan, self::TYPE_INT);
        return $this;
    }

    /**
     * Include transactions greater than or equal to the passed value
     * 
     * @return int|null
     */
    public function getValueGreaterThanOrEqual() {
        return $this->_valueGreaterThanOrEqual;
    }

    /**
     * Include transactions greater than or equal to the passed value
     * 
     * @param int $valueGreaterThanOrEqual
     * @return $this
     */
    public function setValueGreaterThanOrEqual($valueGreaterThanOrEqual) {
        $this->_valueGreaterThanOrEqual = self::validateType($valueGreaterThanOrEqual, self::TYPE_INT);
        return $this;
    }

    /**
     * Include transactions less than the passed value
     * 
     * @return int|null
     */
    public function getValueLessThan() {
        return $this->_valueLessThan;
    }

    /**
     * Include transactions less than the passed value
     * 
     * @param int $valueLessThan
     * @return $this
     */
    public function setValueLessThan($valueLessThan) {
        $this->_valueLessThan = self::validateType($valueLessThan, self::TYPE_INT);
        return $this;
    }

    /**
     * Include transactions less than or equal to the passed value
     * 
     * @return int|null
     */
    public function getValueLessThanOrEqual() {
        return $this->_valueLessThanOrEqual;
    }

    /**
     * Include transactions less than or equal to the passed value
     * 
     * @param int $valueLessThanOrEqual
     * @return $this
     */
    public function setValueLessThanOrEqual($valueLessThanOrEqual) {
        $this->_valueLessThanOrEqual = self::validateType($valueLessThanOrEqual, self::TYPE_INT);
        return $this;
    }

    /**
     * Get the transaction state to filter for
     * 
     * @return string|null Enum\RequestState
     */
    public function getState() {
        return $this->_state;
    }

    /**
     * Set the transaction state to filter for
     * 
     * @param string $state Enum\RequestState
     * @return $this
     */
    public function setState($state) {
        $this->_state = self::validateType($state, Enum\RequestState::class);
        return $this;
    }

    /**
     * Get the transaction state to filter for
     * 
     * @return string[]|null Enum\RequestState
     */
    public function getStateIn() {
        return $this->_stateIn;
    }

    /**
     * Set the transaction state to filter for
     * 
     * @param string[] $stateIn Enum\RequestState
     * @return $this
     */
    public function setStateIn($stateIn) {
        $this->_stateIn = self::validateType($stateIn, Enum\RequestState::class, true);
        return $this;
    }

    /**
     * Get the wallet to filter for
     * 
     * @return string|null
     */
    public function getWallet() {
        return $this->_wallet;
    }

    /**
     * Set the wallet to filter for
     * 
     * @param string $wallet
     * @return $this
     */
    public function setWallet($wallet) {
        $this->_wallet = self::validateType($wallet, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the wallets to filter for
     * 
     * @return string[]|null
     */
    public function getWalletIn() {
        return $this->_walletIn;
    }

    /**
     * Set the wallets to filter for
     * 
     * @param string[] $walletIn
     * @return $this
     */
    public function setWalletIn($walletIn) {
        $this->_walletIn = self::validateType($walletIn, self::TYPE_STRING, true);
        return $this;
    }

}

/*EOF*/