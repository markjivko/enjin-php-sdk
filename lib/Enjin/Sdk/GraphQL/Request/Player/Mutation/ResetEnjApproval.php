<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;

/**
 * Request for resetting the crypto items contract approval for ENJ
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class ResetEnjApproval extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.ResetEnjApproval";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    
}

/*EOF*/