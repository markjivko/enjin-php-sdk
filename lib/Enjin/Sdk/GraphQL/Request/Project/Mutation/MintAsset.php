<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for minting an asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class MintAsset extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.MintAsset";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;
    
    /**
     * Set the mints to be performed
     * 
     * @param Model\MintInput[] $mints Mints
     * @return $this
     */
    public function setMints($mints) {
        return $this->setVariable(
            'mints', 
            Model\Model::validate($mints, Model\MintInput::class, true)
        );
    }
    
}

/*EOF*/