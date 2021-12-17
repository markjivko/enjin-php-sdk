<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Values used to specify the format to render an asset's ID in
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetIdFormat extends Enum {
    
    /**
     * Hexadecimal 64
     */
    const HEX64 = 'hex64';

    /**
     * Hexadecimal 256
     */
    const HEX256 = 'hex256';

    /**
     * Unsigned Integer 256
     */
    const UINT256 = 'uint256';
}

/*EOF*/