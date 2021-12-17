<?php
namespace Enjin\Sdk\Model;

/**
 * Models an asset variant
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetVariant extends Model {
    
    /**
     * The ID of this variant
     * 
     * @var int|null
     */
    protected $_id = null;

    /**
     * The asset ID this variant belongs to
     * 
     * @var string|null
     */
    protected $_assetId = null;

    /**
     * The metadata for this variant
     * 
     * @var array|null
     */
    protected $_variantMetadata = null;

    /**
     * The usage count
     * 
     * @var int|null
     */
    protected $_usageCount = null;

    /**
     * The datetime when this was created<br/>
     * Formatted as an ISO 8601 string
     *
     * @var string|null
     */
    protected $_createdAt = null;

    /**
     * The datetime when this was last updated<br/>
     * Formatted as an ISO 8601 string
     *
     * @var string|null
     */
    protected $_updatedAt = null;
}

/*EOF*/