<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for sending one or more assets in a single transaction
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AdvancedSendAsset extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.AdvancedSendAsset";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    
    /**
     * Set the different transfers to perform
     * 
     * @param Model\Transfers[] $transfers Transfers
     * @return $this
     */
    public function setTransfers($transfers) {
        return $this->setVariable(
            'transfers', 
            Model\Model::validate($transfers, Model\Transfers::class, true)
        );
    }
    
    /**
     * Set the data to forward with the transaction
     * 
     * @param string $data Transaction data
     * @return $this
     */
    public function setData($data) {
        return $this->setVariable(
            'data', 
            Model\Model::validateType($data, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/