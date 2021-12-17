<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;

/**
 * Request for unlinking a wallet from the player
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class UnlinkWallet extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.UnlinkWallet";
    
}

/*EOF*/