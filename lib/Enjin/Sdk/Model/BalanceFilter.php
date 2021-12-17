<?php

namespace Enjin\Sdk\Model;

/**
 * Models an asset on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class BalanceFilter extends Model {

    // Implement filter methods
    use Filter;

    /**
     * The project UUID to filter for
     * 
     * @var string|null
     */
    protected $_projectUuid = null;

    /**
     * The project UUIDs to filter for
     * 
     * @json projectUuid_in
     * @var string[]|null
     */
    protected $_projectUuidIn = null;

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
     * Include balances equal to the passed value
     * 
     * @var int|null
     */
    protected $_value = null;

    /**
     * The filter operator type for values
     * 
     * @use Enum\Operator
     * @json value_is
     * @var string|null
     */
    protected $_valueIs = null;

    /**
     * Get the project UUID to filter for
     * 
     * @return string|null
     */
    public function getProjectUuid() {
        return $this->_projectUuid;
    }

    /**
     * Set the project UUID to filter for
     * 
     * @param string|null $projectUuid
     * @return $this
     */
    public function setProjectUuid($projectUuid) {
        $this->_projectUuid = self::validateType($projectUuid, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the project UUIDs to filter for
     * 
     * @return string[]|null
     */
    public function getProjectUuidIn() {
        return $this->_projectUuidIn;
    }

    /**
     * Set the project UUIDs to filter for
     * 
     * @param string[]|null $projectUuidIn
     * @return $this
     */
    public function setProjectUuidIn($projectUuidIn) {
        $this->_projectUuidIn = self::validateType($projectUuidIn, self::TYPE_STRING, true);
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
     * @param string|null $assetId
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
     * @param string[]|null $assetIdIn
     * @return $this
     */
    public function setAssetIdIn($assetIdIn) {
        $this->_assetIdIn = self::validateType($assetIdIn, self::TYPE_STRING, true);
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
     * @param string|null $wallet
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
     * @param string[]|null $walletIn
     * @return $this
     */
    public function setWalletIn($walletIn) {
        $this->_walletIn = self::validateType($walletIn, self::TYPE_STRING, true);
        return $this;
    }

    /**
     * Include balances equal to the passed value
     * 
     * @return int|null
     */
    public function getValue() {
        return $this->_value;
    }

    /**
     * Set balances equal to the passed value
     * 
     * @param int|null $value
     * @return $this
     */
    public function setValue($value) {
        $this->_value = self::validateType($value, self::TYPE_INT);
        return $this;
    }

    /**
     * Get the filter operator type for values
     * 
     * @return string|null Enum\Operator
     */
    public function getValueIs() {
        return $this->_valueIs;
    }

    /**
     * Set the filter operator type for values
     * 
     * @param string|null $valueIs Enum\Operator
     * @return $this
     */
    public function setValueIs($valueIs) {
        $this->_valueIs = self::validateType($valueIs, Enum\Operator::class);
        return $this;
    }

}

/*EOF*/