<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Represents the transfer fee type
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetTransferFeeType extends Enum {
    
    /**
     * None
     */
    const NONE = 'NONE';

    /**
     * Per transfer
     */
    const PER_TRANSFER = 'PER_TRANSFER';

    /**
     * Per crypto item
     */
    const PER_CRYPTO_ITEM = 'PER_CRYPTO_ITEM';

    /**
     * Ratio cut
     */
    const RATIO_CUT = 'RATIO_CUT';

    /**
     * Ratio extra
     */
    const RATIO_EXTRA = 'RATIO_EXTRA';

}

/*EOF*/