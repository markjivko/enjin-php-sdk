<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for setting an asset's max transfer fee to a lower value
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class DecreaseMaxTransferFee extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.DecreaseMaxTransferFee";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;

    /**
     * Set the new max transfer fee in Wei
     *
     * @param int $maxTransferFee The new max transfer fee
     * @return $this
     */
    public function setMaxTransferFee($maxTransferFee) {
        return $this->setVariable(
            'maxTransferFee', 
            Model\Model::validateType($maxTransferFee, Model\Model::TYPE_INT)
        );
    }
}

/*EOF*/