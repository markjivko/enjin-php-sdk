<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting a player's wallet
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetWallet extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.GetWallet";
    
    // Import the wallet fragment arguments
    use GraphQL\Request\Shared\Argument\WalletFragment;
    
    /**
     * Set the player ID
     * 
     * @param string $userId Player ID
     * @return $this
     */
    public function setUserId($userId) {
        return $this->setVariable(
            'userId', 
            Model\Model::validateType($userId, Model\Model::TYPE_STRING)
        );
    }
    
    /**
     * Set the Ethereum address of the wallet
     * 
     * @param string $ethAddress Wallet Ethereum address
     * @return $this
     */
    public function setEthAddress($ethAddress) {
        return $this->setVariable(
            'ethAddress', 
            Model\Model::validateType($ethAddress, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/