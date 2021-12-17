<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Values used to specify the asset supply models
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetSupplyModel extends Enum {
    
    /**
     * Fixed
     */
    const FIXED = 'FIXED';

    /**
     * Settable
     */
    const SETTABLE = 'SETTABLE';

    /**
     * Infinite
     */
    const INFINITE = 'INFINITE';

    /**
     * Collapsing
     */
    const COLLAPSING = 'COLLAPSING';

    /**
     * Annual Value
     */
    const ANNUAL_VALUE = 'ANNUAL_VALUE';

    /**
     * Annual percentage
     */
    const ANNUAL_PERCENTAGE = 'ANNUAL_PERCENTAGE';

}

/*EOF*/