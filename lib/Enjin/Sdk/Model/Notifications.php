<?php
namespace Enjin\Sdk\Model;

/**
 * Models the notifications settings for the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Notifications extends Model {
    
    /**
     * Pusher settings
     * 
     * @var Pusher|null
     */
    protected $_pusher = null;
    
    /**
     * Get the Pusher settings
     * 
     * @return Pusher|null
     */
    public function getPusher() {
        return $this->_pusher;
    }
    
}

/*EOF*/