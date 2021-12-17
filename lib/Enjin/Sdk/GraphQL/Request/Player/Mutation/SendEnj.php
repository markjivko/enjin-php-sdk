<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for sending ENJ
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SendEnj extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.SendEnj";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    
    /**
     * Set the wallet address of the recipient
     *
     * @param string $recipientAddress The address
     * @return $this
     */
    public function setRecipientAddress($recipientAddress) {
        return $this->setVariable(
            'recipientAddress', 
            Model\Model::validateType($recipientAddress, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the amount of ENJ to send<br/>
     * The value is in Wei as 10^18 (e.g. 1 ENJ = 1000000000000000000)
     *
     * @param string $value The amount
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