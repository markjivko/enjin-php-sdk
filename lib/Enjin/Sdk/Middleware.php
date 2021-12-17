<?php
namespace Enjin\Sdk;

use Enjin\Sdk\Http;
use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Utils\LoggerProvider;

/**
 * Trusted Platform Middleware
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Middleware {
    
    /**
     * User Agent
     */
    const USER_AGENT_VERSION = 'Enjin PHP SDK v%s';
    
    /**
     * HTTP Client
     * 
     * @var Http\Client
     */
    protected $_httpClient;
   
    /**
     * GraphQL Registry
     * 
     * @var GraphQL\Registry
     */
     protected $_registry;

    /**
     * Platform middleware
     * 
     * @param string         $baseUrl        Base URL
     * @param boolean        $debug          (optional) Debugging; default <b>false</b>
     * @param LoggerProvider $loggerProvider (optional) Logger provider; default <b>null</b>
     */
    public function __construct($baseUrl, $debug = false, $loggerProvider = null) {
        $this->_httpClient = (new Http\Client($debug, $loggerProvider))
            ->setBaseUrl($baseUrl)
            ->setUserAgent(sprintf(self::USER_AGENT_VERSION, PHP_VERSION));

        // Add Registry
        $this->_registry = new GraphQL\Registry($debug);
    }
    
    /**
     * Get the HTTP client
     * 
     * @return Http\Client
     */
    public function getClient() {
        return $this->_httpClient;
    }
    
    /**
     * Get the GraphQL Query Registry
     * 
     * @return GraphQL\Registry
     */
    public function getRegistry() {
        return $this->_registry;
    }
}

/*EOF*/