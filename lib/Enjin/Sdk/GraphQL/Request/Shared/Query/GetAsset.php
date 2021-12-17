<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting an asset on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetAsset extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.GetAsset";
    
    // Import the asset fragment arguments
    use GraphQL\Request\Shared\Argument\AssetFragment;
    
    /**
     * Set the asset ID
     * 
     * @param string $id Asset ID
     * @return $this
     */
    public function setId($id) {
        return $this->setVariable(
            'id', 
            Model\Model::validateType($id, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/