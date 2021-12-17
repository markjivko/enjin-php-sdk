<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for melting an asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class MeltAsset extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.MeltAsset";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    
    /**
     * Set the melts to be performed
     *
     * @param Model\Melt[] $melts Melts
     * @return $this
     */
    public function setMelts($melts) {
        return $this->setVariable(
            'melts',
            Model\Model::validate($melts, Model\Melt::class, true)
        );
    }
}

/*EOF*/