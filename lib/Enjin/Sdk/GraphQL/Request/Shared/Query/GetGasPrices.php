<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Query;

use Enjin\Sdk\GraphQL;

/**
 * Request for getting the latest gas prices
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetGasPrices extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.GetGasPrices";
    
}

/*EOF*/