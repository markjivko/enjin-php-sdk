<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Represents the white-list settings
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Whitelisted extends Enum {
    
    /**
     * None
     */
    const NONE = 'NONE';

    /**
     * Send and receive
     */
    const SEND_AND_RECEIVE = 'SEND_AND_RECEIVE';

    /**
     * Send
     */
    const SEND = 'SEND';

    /**
     * Receive
     */
    const RECEIVE = 'RECEIVE';

    /**
     * No fees
     */
    const NO_FEES = 'NO_FEES';

    /**
     * Address
     */
    const ADDRESS = 'ADDRESS';

}

/*EOF*/