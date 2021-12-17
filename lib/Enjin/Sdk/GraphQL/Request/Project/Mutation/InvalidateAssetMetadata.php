<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for invalidating the cached metadata of an asset on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class InvalidateAssetMetadata extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.InvalidateAssetMetadata";
    
    /**
     * Set the asset ID
     *
     * @param string $id The asset ID
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