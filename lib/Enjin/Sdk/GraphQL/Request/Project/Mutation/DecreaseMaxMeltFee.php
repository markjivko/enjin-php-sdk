<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for setting an asset's max melt fee to a lower value
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class DecreaseMaxMeltFee extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.DecreaseMaxMeltFee";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;

    /**
     * Set the new max melt fee for the asset<br/>
     * The ratio is in the range 0-5000 to allow fractional ratios, e.g. 1 = 0.01%, 5000 = 50% etc.
     *
     * @param int $maxMeltFee The new ratio
     * @return $this
     */
    public function setMaxMeltFee($maxMeltFee) {
        return $this->setVariable(
            'maxMeltFee', 
            Model\Model::validateType($maxMeltFee, Model\Model::TYPE_INT)
        );
    }
}

/*EOF*/