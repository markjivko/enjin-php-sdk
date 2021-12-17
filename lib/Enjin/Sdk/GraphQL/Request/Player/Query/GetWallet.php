<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Query;

use Enjin\Sdk\GraphQL;

/**
 * Request for getting the player's wallet
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetWallet extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.GetWallet";
    
    // Import the wallet fragment arguments
    use GraphQL\Request\Shared\Argument\WalletFragment;
    
}

/*EOF*/