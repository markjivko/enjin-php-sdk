<?php
namespace Enjin\Sdk\Model;

/**
 * Models Pusher settings for the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Pusher extends Model {
    
   /**
     * The key for the platform
     * 
     * @var string|null
     */
    protected $_key = null;

    /**
     * The namespace the platform broadcasts on
     * 
     * @var string|null
     */
    protected $_namespace = null;

    /**
     * The channels the platform broadcasts on
     * 
     * @var PusherChannels|null
     */
    protected $_channels = null;

    /**
     * The Pusher options the platform uses
     * 
     * @var PusherOptions|null
     */
    protected $_options = null;
    
    /**
     * Get the key for the platform
     * 
     * @return string|null
     */
    public function getKey() {
        return $this->_key;
    }

    /**
     * Get the namespace the platform broadcasts on
     * 
     * @return string|null
     */
    public function getNamespace() {
        return $this->_namespace;
    }

    /**
     * Get the channels the platform broadcasts on
     * 
     * @return PusherChannels|null
     */
    public function getChannels() {
        return $this->_channels;
    }

    /**
     * Get the Pusher options the platform uses
     * 
     * @return PusherOptions|null
     */
    public function getOptions() {
        return $this->_options;
    }
    
}

/*EOF*/