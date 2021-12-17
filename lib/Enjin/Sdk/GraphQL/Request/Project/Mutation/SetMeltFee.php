<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for setting the melt fee of an asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SetMeltFee extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.SetMeltFee";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;
    
    /**
     * Set the new melt fee for the asset<br/>
     * The ratio is in the range 0-5000 to allow fractional ratios, e.g. 1 = 0.01%, 5000 = 50%, etc.
     * 
     * @param int $meltFee New melt fee ratio
     * @return $this
     */
    public function setMeltFee($meltFee) {
        return $this->setVariable(
            'meltFee', 
            Model\Model::validateType($meltFee, Model\Model::TYPE_INT)
        );
    }
    
}

/*EOF*/