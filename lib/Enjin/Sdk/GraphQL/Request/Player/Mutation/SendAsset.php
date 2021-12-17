<?php
namespace Enjin\Sdk\GraphQL\Request\Player\Mutation;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Request for sending an asset
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class SendAsset extends GraphQL\Request {
    
    const NAMESPACE = "enjin.sdk.player.SendAsset";
    
    // Import the transaction fragment arguments
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    use GraphQL\Request\Shared\Argument\AssetIdArgument;
    
    /**
     * Set the wallet address of the recipient
     *
     * @param string $recipientAddress The address
     * @return $this
     */
    public function setRecipientAddress($recipientAddress) {
        return $this->setVariable(
            'recipientAddress', 
            Model\Model::validateType($recipientAddress, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the index for non-fungible assets
     *
     * @param string $assetIndex The index
     * @return $this
     */
    public function setAssetIndex($assetIndex) {
        return $this->setVariable(
            'assetIndex', 
            Model\Model::validateType($assetIndex, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the amount to send
     *
     * @param string $value The amount
     * @return $this
     */
    public function setValue($value) {
        return $this->setVariable(
            'value', 
            Model\Model::validateType($value, Model\Model::TYPE_STRING)
        );
    }

    /**
     * Set the data to forward with the transaction
     *
     * @param string $data The data
     * @return $this
     */
    public function setData($data) {
        return $this->setVariable(
            'data', 
            Model\Model::validateType($data, Model\Model::TYPE_STRING)
        );
    }
}

/*EOF*/