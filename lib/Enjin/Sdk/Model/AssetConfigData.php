<?php
namespace Enjin\Sdk\Model;

/**
 * Models the configuration data of an {@link Asset}
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetConfigData extends Model {
    
    /**
     * The melt fee ratio<br/>
     * The ratio is in the range of 0-10000 to allow fractional ratios, e.g. 1 = 0.01%, 10000 = 100%, etc...
     *
     * @var int|null
     */
    protected $_meltFeeRatio = null;

    /**
     * The max melt fee ratio<br/>
     * The ratio is in the range of 0-10000 to allow fractional ratios, e.g. 1 = 0.01%, 10000 = 100%, etc...
     *
     * @var int|null
     */
    protected $_meltFeeMaxRatio = null;

    /**
     * The melt value for the asset<br/>
     * Corresponds to this item's exchange rate
     *
     * @var string|null
     */
    protected $_meltValue = null;

    /**
     * The metadata URI for the asset
     * 
     * @json metadataURI
     * @var string|null
     */
    protected $_metadataUri = null;

    /**
     * The transferable type
     * 
     * @use Enum\AssetTransferable
     * @var string|null
     */
    protected $_transferable = null;

    /**
     * The fee settings for the asset
     * 
     * @var AssetTransferFeeSettings|null
     */
    protected $_transferFeeSettings = null;
    
    /**
     * The melt fee ratio<br/>
     * The ratio is in the range of 0-10000 to allow fractional ratios, e.g. 1 = 0.01%, 10000 = 100%, etc...
     *
     * @return int|null
     */
    public function getMeltFeeRatio() {
        return $this->_meltFeeRatio;
    }

    /**
     * The max melt fee ratio<br/>
     * The ratio is in the range of 0-10000 to allow fractional ratios, e.g. 1 = 0.01%, 10000 = 100%, etc...
     *
     * @return int|null
     */
    public function getMeltFeeMaxRatio() {
        return $this->_meltFeeMaxRatio;
    }

    /**
     * The melt value for the asset<br/>
     * Corresponds to this item's exchange rate
     *
     * @return string|null
     */
    public function getMeltValue() {
        return $this->_meltValue;
    }

    /**
     * The metadata URI for the asset
     * 
     * @return string|null
     */
    public function getMetadataUri() {
        return $this->_metadataUri;
    }

    /**
     * The transferable type
     * 
     * @return string|null Enum\AssetTransferable
     */
    public function getTransferable() {
        return $this->_transferable;
    }

    /**
     * The fee settings for the asset
     * 
     * @return AssetTransferFeeSettings|null
     */
    public function getTransferFeeSettings() {
        return $this->_transferFeeSettings;
    }
}

/*EOF*/