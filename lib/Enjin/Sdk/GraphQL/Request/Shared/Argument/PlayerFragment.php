<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Argument;

use Enjin\Sdk\Model;

/**
 * Shared > Argument > Player Fragment Arguments
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait PlayerFragment {
    
    // Include the wallet fragment arguments
    use WalletFragment;
    
    /**
     * Set the desired size of the QR image in pixels. To be used with
     * {@link PlayerFragment::withLinkingInfo()}
     *
     * @param int $size QR image size in pixels
     * @return $this
     */
    public function setQrSize($size) {
        return $this->setVariable('linkingCodeQrSize', Model\Model::validateType($size, Model\Model::TYPE_INT));
    }
    
    /**
     * Set the request to include the linking information with the player
     *
     * @return $this
     * @see PlayerFragment::qrSize()
     */
    public function withLinkingInfo() {
        return $this->setVariable('withLinkingInfo', true);
    }

    /**
     * Set the request to include the wallet with the player
     *
     * @return $this
     */
    public function withPlayerWallet() {
        return $this->setVariable('withPlayerWallet', true);
    }

}

/*EOF*/