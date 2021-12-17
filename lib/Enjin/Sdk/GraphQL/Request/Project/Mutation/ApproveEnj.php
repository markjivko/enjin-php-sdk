<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for approving the crypto items contract to spend ENJ
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class ApproveEnj extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.ApproveEnj";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    
    /**
     * Set the amount of ENJ to approve<br/>
     * The value is in Wei as 10^18 (e.g. 1 ENJ = 1000000000000000000)
     * 
     * @param string $value Amount of ENJ to approve
     * @return $this
     */
    public function setValue($value) {
        return $this->setVariable(
            'value', 
            Model\Model::validateType($value, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/