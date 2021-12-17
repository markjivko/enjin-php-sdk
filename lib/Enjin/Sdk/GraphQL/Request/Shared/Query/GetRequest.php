<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting a transaction on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetRequest extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.GetRequest";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    
    /**
     * Set the transaction ID
     * 
     * @param int $id Transaction ID
     * @return $this
     */
    public function setId($id) {
        return $this->setVariable(
            'id', 
            Model\Model::validateType($id, Model\Model::TYPE_INT)
        );
    }
    
    /**
     * Set the transaction hash ID
     * 
     * @param string $transactionId Transaction hash ID
     * @return $this
     */
    public function setTransactionId($transactionId) {
        return $this->setVariable(
            'transactionId', 
            Model\Model::validateType($transactionId, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/