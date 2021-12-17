<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Values used to specify the format to render an asset's index in
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetIndexFormat extends Enum {
    
    /**
     * Hexadecimal 64
     */
    const HEX64 = 'hex64';

    /**
     * Unsigned integer 64
     */
    const UINT64 = 'uint64';

}

/*EOF*/