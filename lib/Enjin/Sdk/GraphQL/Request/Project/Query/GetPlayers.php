<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting players on the project
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetPlayers extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.GetPlayers";
    
    // Import the player fragment arguments
    use GraphQL\Request\Shared\Argument\PlayerFragment;
    use GraphQL\Request\Shared\Argument\Pagination;
    
    /**
     * Set the player filter
     * 
     * @param Model\PlayerFilter $filter Player filter
     * @return $this
     */
    public function setFilter($filter) {
        return $this->setVariable(
            'filter', 
            Model\Model::validate($filter, Model\PlayerFilter::class)
        );
    }
}

/*EOF*/