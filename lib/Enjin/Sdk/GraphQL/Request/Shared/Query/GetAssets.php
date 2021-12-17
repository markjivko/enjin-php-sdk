<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting assets on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetAssets extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.GetAssets";
    
    // Import the asset fragment arguments
    use GraphQL\Request\Shared\Argument\AssetFragment;
    use GraphQL\Request\Shared\Argument\Pagination;
    
    /**
     * Set the asset filter
     * 
     * @param Model\AssetFilter $filter Asset filter
     * @return $this
     */
    public function setFilter($filter) {
        return $this->setVariable(
            'filter', 
            Model\Model::validate($filter, Model\AssetFilter::class)
        );
    }
    
    /**
     * Set the asset sort
     * 
     * @param Model\AssetSort $sort Asset sort
     * @return type
     */
    public function setSort($sort) {
        return $this->setVariable(
            'sort', 
            Model\Model::validate($sort, Model\AssetSort::class)
        );
    }
}

/*EOF*/