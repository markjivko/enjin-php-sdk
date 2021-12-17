<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request to set the metadata URI of an asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SetUri extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.SetUri";
    
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
     * Set the new URI for the asset's metadata
     * 
     * @param string $uri New URI
     * @return $this
     */
    public function setUri($uri) {
        return $this->setVariable(
            'uri', 
            Model\Model::validateType($uri, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/