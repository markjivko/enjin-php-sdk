<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Represents the transaction type when creating or updating a transaction
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class RequestType extends Enum {
    
    /**
     * Unknown
     */
    const UNKNOWN = 'UNKNOWN';

    /**
     * Approve
     */
    const APPROVE = 'APPROVE';

    /**
     * Create
     */
    const CREATE = 'CREATE';

    /**
     * Mint
     */
    const MINT = 'MINT';

    /**
     * Send
     */
    const SEND = 'SEND';

    /**
     * End ENJ
     */
    const SEND_ENJ = 'SEND_ENJ';

    /**
     * Advanced send
     */
    const ADVANCED_SEND = 'ADVANCED_SEND';

    /**
     * Create trade
     */
    const CREATE_TRADE = 'CREATE_TRADE';

    /**
     * Complete trade
     */
    const COMPLETE_TRADE = 'COMPLETE_TRADE';

    /**
     * Cancel trade
     */
    const CANCEL_TRADE = 'CANCEL_TRADE';

    /**
     * Melt
     */
    const MELT = 'MELT';

    /**
     * Update name
     */
    const UPDATE_NAME = 'UPDATE_NAME';

    /**
     * Set item uri
     */
    const SET_ITEM_URI = 'SET_ITEM_URI';

    /**
     * Set whitelisted
     */
    const SET_WHITELISTED = 'SET_WHITELISTED';

    /**
     * Set transferable
     */
    const SET_TRANSFERABLE = 'SET_TRANSFERABLE';

    /**
     * Set melt fee
     */
    const SET_MELT_FEE = 'SET_MELT_FEE';

    /**
     * Decrease max melt fee
     */
    const DECREASE_MAX_MELT_FEE = 'DECREASE_MAX_MELT_FEE';

    /**
     * Set transfer fee
     */
    const SET_TRANSFER_FEE = 'SET_TRANSFER_FEE';

    /**
     * Decrease max transfer fee
     */
    const DECREASE_MAX_TRANSFER_FEE = 'DECREASE_MAX_TRANSFER_FEE';

    /**
     * Release reserve
     */
    const RELEASE_RESERVE = 'RELEASE_RESERVE';

    /**
     * Add log
     */
    const ADD_LOG = 'ADD_LOG';

    /**
     * Set approval for all
     */
    const SET_APPROVAL_FOR_ALL = 'SET_APPROVAL_FOR_ALL';

    /**
     * Manager update
     */
    const MANAGER_UPDATE = 'MANAGER_UPDATE';

    /**
     * Set decimals
     */
    const SET_DECIMALS = 'SET_DECIMALS';

    /**
     * Set symbol
     */
    const SET_SYMBOL = 'SET_SYMBOL';

    /**
     * Message
     */
    const MESSAGE = 'MESSAGE';

    /**
     * Accept assignment
     */
    const ACCEPT_ASSIGNMENT = 'ACCEPT_ASSIGNMENT';

    /**
     * Assign
     */
    const ASSIGN = 'ASSIGN';

}

/*EOF*/