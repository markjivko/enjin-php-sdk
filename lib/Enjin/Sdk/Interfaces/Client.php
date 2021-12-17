<?php
namespace Enjin\Sdk\Interfaces;

/**
 * Client interface - Interface for client implementation
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
interface Client {

    /**
     * Authenticates the client with the given token.
     *
     * @param string The auth token
     */
    public function auth($token);
    
    /**
     * Determines whether the client is authenticated.
     *
     * @return true if authenticated, false otherwise
     */
    public function isAuthenticated();
    
    /**
     * Closes this stream and releases any system resources associated with it
     * 
     * @throws Exception
     */
    public function close();
    
    /**
     * Determines whether the client is closed.
     *
     * @return boolean True if closed, false otherwise
     */
    public function isClosed();
}

/*EOF*/