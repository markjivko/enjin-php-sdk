<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * he fields of the {@link Asset} type
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetField extends Enum {
    
    /**
     * ID
     */
    const ID = 'id';

    /**
     * Name
     */
    const NAME = 'name';

    /**
     * Circulating supply
     */
    const CIRCULATING_SUPPLY = 'circulatingSupply';

    /**
     * Non-fungible
     */
    const NON_FUNGIBLE = 'nonFungible';

    /**
     * Reserve
     */
    const RESERVE = 'reserve';

    /**
     * Total supply
     */
    const TOTAL_SUPPLY = 'totalSupply';

    /**
     * Created at
     */
    const CREATED_AT = 'createdAt';

}

/*EOF*/