<?php

namespace Enjin\Sdk\Model;

/**
 * Models a trade input for requests
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Trade extends Model {

    /**
     * Asset ID
     * 
     * @var string|null
     */
    protected $_assetId = null;

    /**
     * Asset Index
     * 
     * @var string|null
     */
    protected $_assetIndex = null;

    /**
     * Number of assets to trade
     *
     * @var string|null
     */
    protected $_value = null;

    /**
     * Get the asset ID to trade<br/>
     * If null or omitted then ENJ will be traded instead
     * 
     * @return string|null
     */
    public function getAssetId() {
        return $this->_assetId;
    }

    /**
     * Set the asset ID to trade<br/>
     * If null or omitted then ENJ will be traded instead
     *
     * @param string $assetId
     * @return $this
     */
    public function setAssetId($assetId) {
        $this->_assetId = self::validateType($assetId, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the index for non-fungible assets
     * 
     * @return string|null
     */
    public function getAssetIndex() {
        return $this->_assetIndex;
    }

    /**
     * Set the index for non-fungible assets
     *
     * @param string $assetIndex
     * @return $this
     */
    public function setAssetIndex($assetIndex) {
        $this->_assetIndex = self::validateType($assetIndex, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the number of asset to trade<br/>
     * If trading ENJ, the value is the amount to send in Wei (10^18 e.g. 1 ENJ = 1000000000000000000)
     * 
     * @return string|null
     */
    public function getValue() {
        return $this->_value;
    }

    /**
     * Set the number of asset to trade<br/>
     * If trading ENJ, the value is the amount to send in Wei (10^18 e.g. 1 ENJ = 1000000000000000000)
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value) {
        $this->_value = self::validateType($value, self::TYPE_STRING);
        return $this;
    }

}

/*EOF*/