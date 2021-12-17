<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for completing a trade between two wallets
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class CompleteTrade extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.CompleteTrade";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    
    /**
     * Set the trade ID
     * 
     * @param string $id Trade ID
     * @return $this
     */
    public function setTradeId($id) {
        return $this->setVariable(
            'tradeId', 
            Model\Model::validateType($id, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/