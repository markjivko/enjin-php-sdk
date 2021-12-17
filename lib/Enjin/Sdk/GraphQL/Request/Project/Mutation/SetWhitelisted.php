<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for setting an asset's whitelist
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SetWhitelisted extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.SetWhitelisted";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;
    
    /**
     * Set the account address to be added to the white-list
     *
     * @param string $accountAddress The address
     * @return $this
     */
    public function setAccountAddress($accountAddress) {
        return $this->setVariable(
            'accountAddress', 
            Model\Model::validateType($accountAddress, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the white-listed setting for the account
     *
     * @param string $whitelisted Model\Enum\Whitelisted
     * @return $this
     */
    public function setWhitelisted($whitelisted) {
        return $this->setVariable(
            'whitelisted', 
            Model\Model::validateType($whitelisted, Model\Enum\Whitelisted::class)
        );
    }

    /**
     * Set the specified address for sending or receiving
     *
     * @param string $whitelistedAddress The address
     * @return $this
     */
    public function setWhitelistedAddress($whitelistedAddress) {
        return $this->setVariable(
            'whitelistedAddress', 
            Model\Model::validateType($whitelistedAddress, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set whether the white-list setting is on or off
     *
     * @param boolean $on The setting
     * @return $this
     */
    public function setOn($on) {
        return $this->setVariable(
            'on', 
            Model\Model::validateType($on, Model\Model::TYPE_BOOLEAN)
        );
    }
}

/*EOF*/