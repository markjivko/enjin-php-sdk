<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Argument;

use Enjin\Sdk\Model;

/**
 * Shared > Argument > Transaction Fragment Arguments
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait TransactionFragment {
    
    /**
     * Set the request to include the blockchain data with the transaction
     *
     * @return $this
     * @see TransactionFragment::withEncodedData()
     * @see TransactionFragment::withSignedTxs()
     * @see TransactionFragment::withReceipt()
     * @see TransactionFragment::withError()
     * @see TransactionFragment::withNonce()
     */
    public function withBlockchainData() {
        return $this->setVariable('withBlockchainData', true);
    }

    /**
     * Set the request to include the metadata with the transaction
     *
     * @return $this
     */
    public function withMeta() {
        return $this->setVariable('withMeta', true);
    }

    /**
     * Set the request to include the encoded data with the transaction when used with
     * {@link TransactionFragment::withBlockchainData()}
     *
     * @return $this
     */
    public function withEncodedData() {
        return $this->setVariable('withEncodedData', true);
    }

    /**
     * Set the request to include the asset data with the transaction
     *
     * @return $this
     * @see TransactionFragment::assetIdFormat(AssetIdFormat)
     */
    public function withAssetData() {
        return $this->setVariable('withAssetData', true);
    }

    /**
     * Set the request to include the signed transactions with the transaction when used with
     * {@link TransactionFragment::withBlockchainData()}
     *
     * @return $this
     */
    public function withSignedTxs() {
        return $this->setVariable('withSignedTxs', true);
    }

    /**
     * Set the request to include the error with the transaction when used with
     * {@link TransactionFragment::withBlockchainData()}
     *
     * @return $this
     */
    public function withError() {
        return $this->setVariable('withError', true);
    }

    /**
     * Set the request to include the nonce with the transaction when used with
     * {@link TransactionFragment::withBlockchainData()}.
     *
     * @return $this
     */
    public function withNonce() {
        return $this->setVariable('withNonce', true);
    }

    /**
     * Set the request to include the state with the transaction when used with
     * {@link TransactionFragment::withBlockchainData()}.
     *
     * @return $this
     */
    public function withState() {
        return $this->setVariable('withState', true);
    }

    /**
     * Set the request to include the receipt with the transaction when used with
     * {@link TransactionFragment::withBlockchainData()}
     *
     * @return $this
     * @see TransactionFragment::withReceiptLogs()
     */
    public function withReceipt() {
        return $this->setVariable('withReceipt', true);
    }

    /**
     * Set the request to include the logs in the receipt when used with
     * {@link TransactionFragment::withReceipt()}
     *
     * @return $this
     * @see TransactionFragment::withLogEvent()
     */
    public function withReceiptLogs() {
        return $this->setVariable('withReceiptLogs', true);
    }

    /**
     * Set the request to include the event data in the receipt logs when used with
     * {@link TransactionFragment::withReceiptLogs()}
     *
     * @return $this
     */
    public function withLogEvent() {
        return $this->setVariable('withLogEvent', true);
    }

    /**
     * Set the request to include the {@link Model\Project} with 
     * its UUID that the transaction belongs to
     *
     * @return $this
     */
    public function withTransactionProjectUuid() {
        return $this->setVariable('withTransactionProjectUuid', true);
    }

    /**
     * Set the desired asset ID format when used with {@link TransactionFragment::withAssetData()}
     *
     * @param string $assetIdFormat Model\Enum\AssetIdFormat
     * @return $this
     */
    public function setAssetIdFormat($assetIdFormat) {
        return $this->setVariable(
            'assetIdFormat', 
            Model\Model::validateType($assetIdFormat, Model\Enum\AssetIdFormat::class)
        );
    }
}

/*EOF*/