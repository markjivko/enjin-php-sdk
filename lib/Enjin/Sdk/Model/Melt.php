<?php
namespace Enjin\Sdk\Model;

/**
 * Models a melt input for melt requests
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Melt extends Model {
    
    /**
     * The asset ID to melt
     *
     * @var string|null
     */
    protected $_assetId = null;

    /**
     * The index of a non-fungible asset to melt
     *
     * @var string|null
     */
    protected $_assetIndex = null;

    /**
     * The number of assets to melt
     *
     * @var string|null
     */
    protected $_value = null;
    
    /**
     * Get the asset ID to melt
     *
     * @return string|null
     */
    public function getAssetId() {
        return $this->_assetId;
    }

    /**
     * Set the asset ID to melt
     *
     * @param string $assetId The ID
     * @return $this
     */
    public function setAssetId($assetId) {
        $this->_assetId = self::validateType($assetId, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the index of a non-fungible asset to melt
     *
     * @return string|null
     */
    public function getAssetIndex() {
        return $this->_assetIndex;
    }
    
    /**
     * Set the index of a non-fungible asset to melt
     *
     * @param string $assetIndex The index
     * @return $this
     */
    public function setAssetIndex($assetIndex) {
        $this->_assetIndex = self::validateType($assetIndex, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the number of assets to melt
     *
     * @return string|null
     */
    public function getValue() {
        return $this->_value;
    }
    
    /**
     * Set the number of assets to melt
     *
     * @param string $value The amount
     * @return $this
     */
    public function setValue($value) {
        $this->_value = self::validateType($value, self::TYPE_STRING);
        return $this;
    }
    
}

/*EOF*/