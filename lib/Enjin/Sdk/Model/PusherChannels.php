<?php
namespace Enjin\Sdk\Model;

/**
 * Models Pusher channels used by the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class PusherChannels extends Model {
    
    /**
     * The project channel
     * 
     * @var string|null
     */
    protected $_project = null;

    /**
     * The player channel
     * 
     * @var string|null
     */
    protected $_player = null;

    /**
     * The asset channel
     * 
     * @var string|null
     */
    protected $_asset = null;

    /**
     * The wallet channel
     * 
     * @var string|null
     */
    protected $_wallet = null;
    
    /**
     * Get the project channel
     * 
     * @return string|null
     */
    public function getProject() {
        return $this->_project;
    }

    /**
     * Get the player channel
     * 
     * @return string|null
     */
    public function getPlayer() {
        return $this->_player;
    }

    /**
     * Get the asset channel
     * 
     * @return string|null
     */
    public function getAsset() {
        return $this->_asset;
    }

    /**
     * Get the wallet channel
     * 
     * @return string|null
     */
    public function getWallet() {
        return $this->_wallet;
    }
    
}

/*EOF*/