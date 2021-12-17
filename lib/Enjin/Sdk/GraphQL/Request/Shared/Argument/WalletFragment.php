<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Argument;

/**
 * Shared > Argument > Wallet Fragment Arguments
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait WalletFragment {
    
    // Include the asset fragment arguments
    use AssetFragment;
    
    /**
     * Set the request to include the assets the wallet created with the wallet
     *
     * @return $this
     */
    public function withAssetsCreated() {
        return $this->setVariable('withAssetsCreated', true);
    }

}

/*EOF*/