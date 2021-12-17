<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Argument;

use Enjin\Sdk\Model;

/**
 * Shared > Argument > Asset ID Argument
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait AssetIdArgument {
    
    /**
     * Set the asset ID
     * 
     * @param string $assetId Asset ID
     * @return $this
     */
    public function setAssetId($assetId) {
        return $this->setVariable(
            'assetId', 
            Model\Model::validateType($assetId, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/