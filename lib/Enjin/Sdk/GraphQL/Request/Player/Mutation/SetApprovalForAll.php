<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for allowing an operator complete control of all assets owned by the caller
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SetApprovalForAll extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.SetApprovalForAll";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    
    /**
     * Set the wallet address of the operator
     *
     * @param string $operatorAddress Wallet address
     * @return $this
     */
    public function setOperatorAddress($operatorAddress) {
        return $this->setVariable(
            'operatorAddress',
            Model\Model::validateType($operatorAddress, Model\Model::TYPE_STRING)
        );
    }
    
    /**
     * Set the approval state
     *
     * @param boolean $approved Approval state
     * @return $this
     */
    public function setApproved($approved) {
        return $this->setVariable(
            'approved',
            Model\Model::validateType($approved, Model\Model::TYPE_BOOLEAN)
        );
    }
}

/*EOF*/