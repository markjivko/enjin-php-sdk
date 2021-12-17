<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Represents the state of a transaction
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class RequestState extends Enum {
    
    /**
     * Pending
     */
    const PENDING = 'PENDING';

    /**
     * Broadcast
     */
    const BROADCAST = 'BROADCAST';

    /**
     * Processing
     */
    const TP_PROCESSING = 'TP_PROCESSING';

    /**
     * Executed
     */
    const EXECUTED = 'EXECUTED';

    /**
     * Cancelled by user
     */
    const CANCELED_USER = 'CANCELED_USER';

    /**
     * Cancelled by platform
     */
    const CANCELED_PLATFORM = 'CANCELED_PLATFORM';

    /**
     * Dropped
     */
    const DROPPED = 'DROPPED';

    /**
     * Failed
     */
    const FAILED = 'FAILED';

}

/*EOF*/