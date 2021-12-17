<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Query;

use Enjin\Sdk\GraphQL;

/**
 * Request for getting the platform details
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetPlatform extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.shared.GetPlatform";
    
    /**
     * Set the request to include the contracts with the platform
     * 
     * @return $this
     */
    public function withContracts() {
        return $this->setVariable('withContracts', true);
    }
    
    /**
     * Set the request to include the notification drivers with the platform
     * 
     * @return $this
     */
    public function withNotificationDrivers() {
        return $this->setVariable('withNotificationDrivers', true);
    }
    
}

/*EOF*/