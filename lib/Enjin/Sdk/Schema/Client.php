<?php
namespace Enjin\Sdk\Schema;

/**
 * Client traits
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait Client {
    
    /**
     * Whether the client is closed
     */
    protected $_isClosed = false;
    
    /**
     * Authenticate
     * 
     * @param string $token Token
     */
    public function auth($token) {
        $this->_middleware
            ->getClient()
            ->setToken($token);
    }

    /**
     * Check authentication
     * 
     * @return boolean
     */
    public function isAuthenticated() {
        return $this->_middleware
            ->getClient()
            ->isAuthenticated();
    }

    /**
     * Close connection
     */
    public function close() {
        $this->_middleware
            ->getClient()
            ->close();
        
        $this->_isClosed = true;
    }
    
    /**
     * Check connection closed
     * 
     * @return boolean
     */
    public function isClosed() {
        return $this->_isClosed;
    }
}

/*EOF*/