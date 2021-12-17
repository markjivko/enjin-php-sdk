<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for bridging an asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class BridgeAsset extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.BridgeAsset";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;

    /**
     * Set the index of the asset to bridge if the asset is an NFT
     *
     * @param string $assetIndex The asset index
     * @return $this
     */
    public function setAssetIndex($assetIndex) {
        return $this->setVariable(
            'assetIndex',
            Model\Model::validateType($assetIndex, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the amount to bridge
     *
     * @param string $value The amount
     * @return $this
     */
    public function setValue($value) {
        return $this->setVariable(
            'value',
            Model\Model::validateType($value, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/