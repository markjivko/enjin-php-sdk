<?php
namespace Enjin\Sdk\Model;

/**
 * Models a successful auth object
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AccessToken extends Model {
    
    /**
     * Access token
     * 
     * @var string
     */
    protected $_accessToken = '';
    
    /**
     * Expiration time in seconds
     * 
     * @var int
     */
    protected $_expiresIn = 0;
    
    /**
     * Get the access token
     * 
     * @return string
     */
    public function getToken() {
        return (string) $this->_accessToken;
    }
    
    /**
     * Get the expiration time in seconds
     * 
     * @return int
     */
    public function getExpiresIn() {
        return (int) $this->_expiresIn;
    }
}

/*EOF*/