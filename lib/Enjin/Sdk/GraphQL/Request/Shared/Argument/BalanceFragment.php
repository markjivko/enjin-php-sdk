<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Argument;

use Enjin\Sdk\Model;

/**
 * Shared > Argument > Balance Fragment Arguments
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait BalanceFragment {
    
    /**
     * Set the desired asset ID format
     *
     * @param string $balIdFormat Model\Enum\AssetIdFormat
     * @return $this
     */
    public function setBalIdFormat($balIdFormat) {
        return $this->setVariable(
            'balIdFormat', 
            Model\Model::validateType($balIdFormat, Model\Enum\AssetIdFormat::class)
        );
    }

    /**
     * Set the desired index format for non-fungible assets
     *
     * @param string $balIndexFormat Model\Enum\AssetIndexFormat
     * @return $this
     */
    public function setBalIndexFormat($balIndexFormat) {
        return $this->setVariable(
            'balIndexFormat', 
            Model\Model::validateType($balIndexFormat, Model\Enum\AssetIndexFormat::class)
        );
    }

    /**
     * Set the request to include the project UUID with the balance
     *
     * @return $this
     */
    public function withBalProjectUuid() {
        return $this->setVariable('withBalProjectUuid', true);
    }

    /**
     * Set the request to include the wallet address with the balance
     *
     * @return $this
     */
    public function withBalWalletAddress() {
        return $this->setVariable('withBalWalletAddress', true);
    }
}

/*EOF*/