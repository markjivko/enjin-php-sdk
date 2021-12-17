<?php
namespace Enjin\Sdk\Model;

/**
 * Models an asset on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Asset extends Model {
    
    /**
     * The base ID of this asset
     * 
     * @var string|null
     */
    protected $_id = null;

    /**
     * The name of this asset
     * 
     * @var string|null
     */
    protected $_name = null;

    /**
     * The state data of this asset
     * 
     * @var AssetStateData|null
     */
    protected $_stateData = null;

    /**
     * The config data of this asset
     * 
     * @var AssetConfigData|null
     */
    protected $_configData = null;

    /**
     * This asset's variant mode
     * 
     * @use Enum\AssetVariantMode
     * @var string
     */
    protected $_variantMode = null;

    /**
     * This asset's variants
     * 
     * @var AssetVariant[]|null
     */
    protected $_variants = null;

    /**
     * The datetime when this was created<br/>
     * Formatted as an ISO 8601 string
     * 
     * @var string
     */
    protected $_createdAt = null;

    /**
     * The datetime when this was last updated<br/>
     * Formatted as an ISO 8601 string
     * 
     * @var string
     */
    protected $_updatedAt = null;
    
    /**
     * The base ID of this asset
     * 
     * @return string|null
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * The name of this asset
     * 
     * @return string|null
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * The state data of this asset
     * 
     * @return AssetStateData|null
     */
    public function getStateData() {
        return $this->_stateData;
    }

    /**
     * The config data of this asset
     * 
     * @return AssetConfigData|null
     */
    public function getConfigData() {
        return $this->_configData;
    }

    /**
     * This asset's variant mode
     * 
     * @return string Enum\AssetVariantMode
     */
    public function getVariantMode() {
        return $this->_variantMode;
    }

    /**
     * This asset's variants
     * 
     * @return AssetVariant[]|null
     */
    public function getVariants() {
        return $this->_variants;
    }

    /**
     * The datetime when this was created<br/>
     * Formatted as an ISO 8601 string
     * 
     * @return string
     */
    public function getCreatedAt() {
        return $this->_createdAt;
    }

    /**
     * The datetime when this was last updated<br/>
     * Formatted as an ISO 8601 string
     * 
     * @return string
     */
    public function getUpdatedAt() {
        return $this->_updatedAt;
    }
}

/*EOF*/