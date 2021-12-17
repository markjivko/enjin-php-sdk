<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for creating a trade between two wallets
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class CreateTrade extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.project.CreateTrade";
    
    // Import the project transaction fragment arguments
    use GraphQL\Request\Project\Argument\TransactionFragment;
    
    /**
     * Set the assets the sender is asking for
     *
     * @param Model\Trade[] $askingAssets
     * @return $this
     */
    public function setAskingAssets($askingAssets) {
        return $this->setVariable(
            'askingAssets', 
            Model\Model::validate($askingAssets, Model\Trade::class, true)
        );
    }

    /**
     * Set the assets to be offered by the sender
     *
     * @param Model\Trade[] $offeringAssets
     * @return $this
     */
    public function setOfferingAssets($offeringAssets) {
        return $this->setVariable(
            'offeringAssets', 
            Model\Model::validate($offeringAssets, Model\Trade::class, true)
        );
    }

    /**
     * Set the wallet address of the recipient
     *
     * @param string $recipientAddress Recipient address
     * @return $this
     */
    public function setRecipientAddress($recipientAddress) {
        return $this->setVariable(
            'recipientAddress', 
            Model\Model::validateType($recipientAddress, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/