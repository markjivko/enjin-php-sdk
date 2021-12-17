<?php
namespace Enjin\Sdk\GraphQL\Request\Project\Argument;

use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Model;

/**
 * Project > Argument > Transaction Fragment Arguments
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait TransactionFragment {
    
    // Get the transaction fragment
    use GraphQL\Request\Shared\Argument\TransactionFragment;
    
    /**
     * Set the Ethereum address of the sender
     *
     * @param string $ethAddress ETH Address
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