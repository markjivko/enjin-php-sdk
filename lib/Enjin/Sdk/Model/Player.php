<?php
namespace Enjin\Sdk\Model;

/**
 * Models a player on a project
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Player extends Model {
    
    /**
     * The ID of this player
     * 
     * @var string|null
     */
    protected $_id = null;

    /**
     * The linking info for this player
     * 
     * @var LinkingInfo|null
     */
    protected $_linkingInfo = null;

    /**
     * The wallet for this player
     * 
     * @var Wallet|null
     */
    protected $_wallet = null;

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
    
    /**
     * Get the ID of this player
     * 
     * @return string|null
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * Get the linking info for this player
     * 
     * @return LinkingInfo|null
     */
    public function getLinkingInfo() {
        return $this->_linkingInfo;
    }

    /**
     * Get the wallet for this player
     * 
     * @return Wallet|null
     */
    public function getWallet() {
        return $this->_wallet;
    }

    /**
     * Get the datetime when this was created<br/>
     * Formatted as an ISO 8601 string
     *
     * @return string|null
     */
    public function getCreatedAt() {
        return $this->_createdAt;
    }

    /**
     * Get the datetime when this was last updated<br/>
     * Formatted as an ISO 8601 string
     *
     * @return string|null
     */
    public function getUpdatedAt() {
        return $this->_updatedAt;
    }
}

/*EOF*/