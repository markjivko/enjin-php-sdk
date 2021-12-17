<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for releasing the reserve of an asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class ReleaseReserve extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.ReleaseReserve";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;
    
    /**
     * Set the amount to release
     * 
     * @param string $value Amount to release
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