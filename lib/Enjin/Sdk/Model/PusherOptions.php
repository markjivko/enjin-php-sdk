<?php
namespace Enjin\Sdk\Model;

/**
 * Models Pusher options used by the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class PusherOptions extends Model {
    
    /**
     * The cluster
     * 
     * @var string|null
     */
    protected $_cluster = null;

    /**
     * Whether encryption is used or not
     * 
     * @var boolean|null
     */
    protected $_encrypted = null;
    
    /**
     * Get the cluster
     * 
     * @return string|null
     */
    public function getCluster() {
        return $this->_cluster;
    }

    /**
     * Get whether encryption is used or not
     * 
     * @return boolean|null
     */
    public function getEncrypted() {
        return $this->_encrypted;
    }
    
}

/*EOF*/