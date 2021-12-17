<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for creating an asset on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class CreateAsset extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.CreateAsset";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    
    /**
     * Set the name of the asset
     *
     * @param string $name The name
     * @return $this
     */
    public function setName($name) {
        return $this->setVariable(
            'name', 
            Model\Model::validateType($name, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the total supply of the asset
     *
     * @param string $totalSupply The total supply
     * @return $this
     */
    public function setTotalSupply($totalSupply) {
        return $this->setVariable(
            'totalSupply', 
            Model\Model::validateType($totalSupply, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the initial reserve of the asset
     *
     * @param string $initialReserve The reserve
     * @return $this
     */
    public function setInitialReserve($initialReserve) {
        return $this->setVariable(
            'initialReserve', 
            Model\Model::validateType($initialReserve, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the supply model of the asset
     *
     * @param string $supplyModel Model\Enum\AssetSupplyModel
     * @return $this
     */
    public function setSupplyModel($supplyModel) {
        return $this->setVariable(
            'supplyModel', 
            Model\Model::validateType($supplyModel, Model\Enum\AssetSupplyModel::class)
        );
    }

    /**
     * Set the melt value of the asset<br/>
     * Corresponds to the exchange rate
     *
     * @param string $meltValue The value
     * @return $this
     */
    public function setMeltValue($meltValue) {
        return $this->setVariable(
            'meltValue', 
            Model\Model::validateType($meltValue, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the ratio of the melt value to be returned to the creator<br/>
     * The ratio is in the range 0-5000 to allow fractional ratios, e.g. 1 = 0.01%, 5000 = 50% etc.
     *
     * @param int $meltFeeRatio The ratio
     * @return $this
     */
    public function setMeltFeeRatio($meltFeeRatio) {
        return $this->setVariable(
            'meltFeeRatio', 
            Model\Model::validateType($meltFeeRatio, Model\Model::TYPE_INT)
        );
    }

    /**
     * Set the transferable type of the asset
     *
     * @param string $transferable Model\Enum\AssetTransferable
     * @return $this
     */
    public function setTransferable($transferable) {
        return $this->setVariable(
            'transferable', 
            Model\Model::validateType($transferable, Model\Enum\AssetTransferable::class)
        );
    }

    /**
     * Set the transfer fee settings of the asset
     *
     * @param Model\AssetTransferFeeSettingsInput $transferFeeSettings The settings
     * @return $this
     */
    public function setTransferFeeSettings($transferFeeSettings) {
        return $this->setVariable(
            'transferFeeSettings', 
            Model\Model::validate($transferFeeSettings, Model\AssetTransferFeeSettingsInput::class)
        );
    }

    /**
     * Set the fungible state of the asset
     *
     * @param boolean $nonFungible The state
     * @return $this
     */
    public function setNonFungible($nonFungible) {
        return $this->setVariable(
            'nonFungible', 
            Model\Model::validateType($nonFungible, Model\Model::TYPE_BOOLEAN)
        );
    }
}

/*EOF*/