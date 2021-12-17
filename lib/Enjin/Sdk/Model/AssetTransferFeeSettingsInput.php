<?php

namespace Enjin\Sdk\Model;

/**
 * Models input for the transfer fee settings used in GraphQL requests
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetTransferFeeSettingsInput extends Model {

    /**
     * Transfer type for this input
     * 
     * @use Enum\AssetTransferFeeType
     * @var string
     */
    protected $_type = Enum\AssetTransferFeeType::NONE;

    /**
     * Asset ID for this input
     * 
     * @var string|null
     */
    protected $_assetId = null;

    /**
     * Value in Wei for this input
     * 
     * @var string|null
     */
    protected $_value = null;

    /**
     * Get the Transfer type for this input
     * 
     * @return string Enum\AssetTransferFeeType
     */
    public function getType() {
        return $this->_type;
    }

    /**
     * Set the Transfer type for this input
     * 
     * @param string $type Enum\AssetTransferFeeType
     * @return $this
     */
    public function setType($type) {
        $this->_type = self::validateType($type, Enum\AssetTransferFeeType::class);
        return $this;
    }

    /**
     * Get the Asset ID for this input
     * 
     * @return string|null
     */
    public function getAssetId() {
        return $this->_assetId;
    }

    /**
     * Set the Asset ID for this input
     * 
     * @param string|null $assetId
     * @return $this
     */
    public function setAssetId($assetId) {
        $this->_assetId = self::validateType($assetId, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the value in Wei for this input
     * 
     * @return string|null
     */
    public function getValue() {
        return $this->_value;
    }

    /**
     * Set the value in Wei for this input
     * 
     * @param string|null $value
     * @return $this
     */
    public function setValue($value) {
        $this->_value = self::validateType($value, self::TYPE_STRING);
        return $this;
    }

}

/*EOF*/