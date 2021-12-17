<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting transactions on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetRequests extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.GetRequests";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\Pagination;
    
    /**
     * Set the transaction filter
     * 
     * @param Model\TransactionFilter $filter Transaction filter
     * @return $this
     */
    public function setFilter($filter) {
        return $this->setVariable(
            'filter', 
            Model\Model::validate($filter, Model\TransactionFilter::class)
        );
    }
    
    /**
     * Set the transaction sort
     * 
     * @param Model\TransactionSort $sort Transaction sort
     * @return type
     */
    public function setSort($sort) {
        return $this->setVariable(
            'sort', 
            Model\Model::validate($sort, Model\TransactionSort::class)
        );
    }
}

/*EOF*/