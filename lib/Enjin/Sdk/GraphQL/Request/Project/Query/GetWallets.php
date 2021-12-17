<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Query;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for getting player wallets
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class GetWallets extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.GetWallets";
    
    // Import the wallet fragment arguments
    use GraphQL\Request\Shared\Argument\WalletFragment;
    use GraphQL\Request\Shared\Argument\Pagination;
    
    /**
     * Set the player ID
     * 
     * @param string[] $userIds Player ID
     * @return $this
     */
    public function setUserIds($userIds) {
        return $this->setVariable(
            'userId', 
            Model\Model::validateType($userIds, Model\Model::TYPE_STRING, true)
        );
    }
    
    /**
     * Set the Ethereum address of the wallet
     * 
     * @param string[] $ethAddresses Wallet Ethereum addresses
     * @return $this
     */
    public function setEthAddresses($ethAddresses) {
        return $this->setVariable(
            'ethAddress', 
            Model\Model::validateType($ethAddresses, Model\Model::TYPE_STRING, true)
        );
    }
}

/*EOF*/