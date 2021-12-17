<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting balances on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetBalances extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.GetBalances";
    
    // Import the balance fragment arguments
    use GraphQL\Request\Shared\Argument\BalanceFragment;
    use GraphQL\Request\Shared\Argument\Pagination;
    
    /**
     * Set the balance filter
     * 
     * @param Model\BalanceFilter $filter Balance filter
     * @return $this
     */
    public function setFilter($filter) {
        return $this->setVariable(
            'filter', 
            Model\Model::validate($filter, Model\BalanceFilter::class)
        );
    }
}

/*EOF*/