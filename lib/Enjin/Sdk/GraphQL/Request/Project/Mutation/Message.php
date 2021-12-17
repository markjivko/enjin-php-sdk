<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request to sign a message to prove wallet ownership
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Message extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.Message";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    
    /**
     * Set the message to sign
     *
     * @param string $message Message
     * @return $this
     */
    public function setMessage($message) {
        return $this->setVariable(
            'message',
            Model\Model::validateType($message, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/