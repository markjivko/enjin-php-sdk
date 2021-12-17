<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for canceling a transaction on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class CancelTransaction extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.CancelTransaction";
    
    /**
     * Set the ID of the transaction to cancel
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
}

/*EOF*/