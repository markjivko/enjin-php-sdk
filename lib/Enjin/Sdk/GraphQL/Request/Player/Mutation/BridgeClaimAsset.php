<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for claiming assets on the bridge
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class BridgeClaimAsset extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.BridgeClaimAsset";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;
}

/*EOF*/