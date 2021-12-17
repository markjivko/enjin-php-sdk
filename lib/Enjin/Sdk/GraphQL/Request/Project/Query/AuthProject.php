<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request to obtain the access token for the project
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AuthProject extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.AuthProject";
    
    /**
     * Set the project UUID
     * 
     * @param string $uuid UUID
     * @return $this
     */
    public function setUuid($uuid) {
        return $this->setVariable(
            'uuid', 
            Model\Model::validateType($uuid, Model\Model::TYPE_STRING)
        );
    }
    
    /**
     * Set the project secret
     * 
     * @param string $secret Secret
     * @return $this
     */
    public function setSecret($secret) {
        return $this->setVariable(
            'secret', 
            Model\Model::validateType($secret, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/