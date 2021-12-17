<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for bridging multiple indices of an NFT in a single transaction
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class BridgeAssets extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.BridgeAssets";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;

    /**
     * Set the indices to bridge
     *
     * @param string[] $assetIndices The asset indices
     * @return $this
     */
    public function setAssetIndices($assetIndices) {
        return $this->setVariable(
            'assetIndices',
            Model\Model::validateType($assetIndices, Model\Model::TYPE_STRING, true)
        );
    }
}

/*EOF*/