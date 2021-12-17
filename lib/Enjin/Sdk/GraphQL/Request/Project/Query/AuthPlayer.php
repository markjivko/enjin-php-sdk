<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request to obtain an access token for a player
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AuthPlayer extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.AuthPlayer";
    
    /**
     * Set the player ID
     * 
     * @param string $id Player ID
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