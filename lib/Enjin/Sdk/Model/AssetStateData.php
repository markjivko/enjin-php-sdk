<?php
namespace Enjin\Sdk\Model;

/**
 * Models the state data of an {@link Asset}
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetStateData extends Model {
    
    /**
     * Whether the asset is non-fungible
     * 
     * @var boolean|null
     */
    protected $_nonFungible = null;

    /**
     * The block number of the last update
     * 
     * @var int|null
     */
    protected $_blockHeight = null;

    /**
     * The creator of the asset
     * 
     * @var string|null
     */
    protected $_creator = null;

    /**
     * The first block the asset appeared in
     * 
     * @var int|null
     */
    protected $_firstBlock = null;

    /**
     * The reserve of the asset
     * 
     * @var string|null
     */
    protected $_reserve = null;

    /**
     * The supply model of the asset
     * 
     * @use Enum\AssetSupplyModel
     * @var string|null
     */
    protected $_supplyModel = null;

    /**
     * The circulating supply of the asset
     * 
     * @var string|null
     */
    protected $_circulatingSupply = null;

    /**
     * The number of assets available to mint
     * 
     * @var string|null
     */
    protected $_mintableSupply = null;

    /**
     * The total supply of the asset
     * 
     * @var string|null
     */
    protected $_totalSupply = null;
    
    /**
     * Whether the asset is non-fungible
     * 
     * @return boolean|null
     */
    public function getNonFungible() {
        return $this->_nonFungible;
    }

    /**
     * The block number of the last update
     * 
     * @return int|null
     */
    public function getBlockHeight() {
        return $this->_blockHeight;
    }

    /**
     * The creator of the asset
     * 
     * @return string|null
     */
    public function getCreator() {
        return $this->_creator;
    }

    /**
     * The first block the asset appeared in
     * 
     * @return int|null
     */
    public function getFirstBlock() {
        return $this->_firstBlock;
    }

    /**
     * The reserve of the asset
     * 
     * @return string|null
     */
    public function getReserve() {
        return $this->_reserve;
    }

    /**
     * The supply model of the asset
     * 
     * @return string|null Enum\AssetSupplyModel
     */
    public function getSupplyModel() {
        return $this->_supplyModel;
    }

    /**
     * The circulating supply of the asset
     * 
     * @return string|null
     */
    public function getCirculatingSupply() {
        return $this->_circulatingSupply;
    }

    /**
     * The number of assets available to mint
     * 
     * @return string|null
     */
    public function getMintableSupply() {
        return $this->_mintableSupply;
    }

    /**
     * The total supply of the asset
     * 
     * @return string|null
     */
    public function getTotalSupply() {
        return $this->_totalSupply;
    }
}

/*EOF*/