<?php
namespace Enjin\Sdk\Model;

/**
 * Models transfer fee settings for an asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetTransferFeeSettings extends Model {
    
    /**
     * The transfer fee type
     * 
     * @use Enum\AssetTransferFeeType
     * @var string|null
     */
    protected $_type = null;

    /**
     * The asset ID<br/>
     * Will either be the asset ID or "0" for ENJ.
     *
     * @var string|null
     */
    protected $_assetId = null;

    /**
     * The fee value in Wei
     * 
     * @var string|null
     */
    protected $_value = null;
    
    /**
     * The transfer fee type
     * 
     * @return string|null Enum\AssetTransferFeeType
     */
    public function getType() {
        return $this->_type;
    }

    /**
     * The asset ID<br/>
     * Will either be the asset ID or "0" for ENJ.
     *
     * @return string|null
     */
    public function getAssetId() {
        return $this->_assetId;
    }

    /**
     * The fee value in Wei
     * 
     * @return string|null
     */
    public function getValue() {
        return $this->_value;
    }
}

/*EOF*/