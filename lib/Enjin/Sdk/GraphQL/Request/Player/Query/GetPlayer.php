<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Query;

use Enjin\Sdk\GraphQL;

/**
 * Request for getting information about the player
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetPlayer extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.GetPlayer";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\PlayerFragment;
    
}

/*EOF*/