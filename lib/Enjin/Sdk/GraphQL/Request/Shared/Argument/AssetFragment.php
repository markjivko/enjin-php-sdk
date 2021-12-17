<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Argument;

use Enjin\Sdk\Model;

/**
 * Shared > Argument > Asset Fragment Arguments
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait AssetFragment {
    
    /**
     * Set the desired asset ID format
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

    /**
     * Set the request to include state data about the asset
     *
     * @return $this
     * @see AssetFragment::withCreator()
     * @see AssetFragment::withAssetBlocks()
     * @see AssetFragment::withSupplyDetails()
     */
    public function withStateData() {
        return $this->setVariable('withStateData', true);
    }

    /**
     * Set the request to include configuration data about the asset
     *
     * @return $this
     * @see AssetFragment::withMeltDetails()
     * @see AssetFragment::withMetadataUri()
     * @see AssetFragment::withTransferSettings()
     */
    public function withConfigData() {
        return $this->setVariable('withConfigData', true);
    }

    /**
     * Set the request to include the block data with the asset when used with
     * {@link AssetFragment::withStateData()}
     *
     * @return $this
     */
    public function withAssetBlocks() {
        return $this->setVariable('withAssetBlocks', true);
    }

    /**
     * Set the request to include the creator with the asset when used with
     * {@link AssetFragment::withStateData()}
     *
     * @return $this
     */
    public function withCreator() {
        return $this->setVariable('withCreator', true);
    }

    /**
     * Set the request to include the melt details with the asset when used with
     * {@link AssetFragment::withConfigData()}
     *
     * @return $this
     */
    public function withMeltDetails() {
        return $this->setVariable('withMeltDetails', true);
    }

    /**
     * Set the request to include the metadata URI with the asset when used with
     * {@link AssetFragment::withConfigData()}
     *
     * @return $this
     */
    public function withMetadataUri() {
        return $this->setVariable('withMetadataURI', true);
    }

    /**
     * Set the request to include the supply details with the asset when used with
     * {@link AssetFragment::withStateData()}
     *
     * @return $this
     */
    public function withSupplyDetails() {
        return $this->setVariable('withSupplyDetails', true);
    }

    /**
     * Set the request to include the transfer settings with the asset when used with
     * {@link AssetFragment::withConfigData()}
     *
     * @return $this
     */
    public function withTransferSettings() {
        return $this->setVariable('withTransferSettings', true);
    }

    /**
     * Set the request to include the variant mode with the asset
     *
     * @return $this
     */
    public function withAssetVariantMode() {
        return $this->setVariable('withAssetVariantMode', true);
    }

    /**
     * Set the request to include the variants with the asset
     *
     * @return $this
     */
    public function withAssetVariants() {
        return $this->setVariable('withAssetVariants', true);
    }

    /**
     * Set the request to include the metadata for the variant(s) with the asset when used with
     * {@link AssetFragment::withAssetVariants()}
     *
     * @return $this
     */
    public function withVariantMetadata() {
        return $this->setVariable('withVariantMetadata', true);
    }
}

/*EOF*/