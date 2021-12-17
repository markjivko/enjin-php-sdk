<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Enum for the operator type for filters
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Operator extends Enum {
    
    /**
     * >
     */
    const GREATER_THAN = 'GREATER_THAN';

    /**
     * >=
     */
    const GREATER_THAN_OR_EQUAL = 'GREATER_THAN_OR_EQUAL';

    /**
     * <
     */
    const LESS_THAN = 'LESS_THAN';

    /**
     * <=
     */
    const LESS_THAN_OR_EQUAL = 'LESS_THAN_OR_EQUAL';

}

/*EOF*/