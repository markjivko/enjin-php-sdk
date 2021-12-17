<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for setting if an asset may be transferred
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SetTransferable extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.SetTransferable";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;
    
    /**
     * Set the index for non-fungible assets
     * 
     * @param string $assetIndex The index
     * @return $this
     */
    public function setAssetIndex($assetIndex) {
        return $this->setVariable(
            'assetIndex', 
            Model\Model::validateType($assetIndex, Model\Model::TYPE_STRING)
        );
    }
    
    /**
     * Set the new transfer mode
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
}

/*EOF*/