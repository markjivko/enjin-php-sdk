<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting a project on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetProject extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.GetProject";
    
    /**
     * Set the project ID
     * 
     * @param int $id Project ID
     * @return $this
     */
    public function setId($id) {
        return $this->setVariable(
            'id', 
            Model\Model::validateType($id, Model\Model::TYPE_INT)
        );
    }
    
    /**
     * Set the project name
     * 
     * @param int $name Project name
     * @return $this
     */
    public function setName($name) {
        return $this->setVariable(
            'name', 
            Model\Model::validateType($name, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/