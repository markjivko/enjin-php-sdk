<?php
namespace Enjin\Sdk\Model;

/**
 * Models data about the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Platform extends Model {
    
    /**
     * The platform ID
     * 
     * @var int|null
     */
    protected $_id = null;

    /**
     * The platform name
     * 
     * @var string|null
     */
    protected $_name = null;

    /**
     * The current Ethereum network this platform is using
     * 
     * @var string|null
     */
    protected $_network = null;

    /**
     * The smart contracts used by this platform
     * 
     * @var Contracts|null
     */
    protected $_contracts = null;

    /**
     * The platform notification drivers
     * 
     * @var Notifications|null
     */
    protected $_notifications = null;
    
    /**
     * Get the platform ID
     * 
     * @return int|null
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * Get the platform name
     * 
     * @return string|null
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * Get the current Ethereum network this platform is using
     * 
     * @return string|null
     */
    public function getNetwork() {
        return $this->_network;
    }

    /**
     * Get the smart contracts used by this platform
     * 
     * @return Contracts|null
     */
    public function getContracts() {
        return $this->_contracts;
    }

    /**
     * Get the platform notification drivers
     * 
     * @return Notifications|null
     */
    public function getNotifications() {
        return $this->_notifications;
    }
    
}

/*EOF*/