<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for setting the transfer fee of a asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SetTransferFee extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.SetTransferFee";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;
    
    /**
     * Set the new transfer fee value in Wei
     * 
     * @param string $transferFee New transfer fee
     * @return $this
     */
    public function setTransferFee($transferFee) {
        return $this->setVariable(
            'transferFee', 
            Model\Model::validateType($transferFee, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/