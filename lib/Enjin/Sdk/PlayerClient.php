<?php
namespace Enjin\Sdk;

use Enjin\Sdk\Schema;
use Enjin\Sdk\Interfaces;
use Enjin\Sdk\Utils\LoggerProvider;

/**
 * Player Client - Client for using the player schema
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class PlayerClient extends Schema\Player implements Interfaces\Client {

    // Import the client traits
    use Schema\Client;
    
    /**
     * Constructs a player client with the targeted settings
     *
     * @param string         $baseUrl        The base URL, use <b>Enjin\Sdk\Model\Enum\EnjinHosts</b>
     * @param boolean        $debug          (optional) Whether debugging is enabled; default <b>false</b>
     * @param LoggerProvider $loggerProvider (optional) Logger provider; defaults to <b>LoggerProvider</b>
     * @throws Exception
     */
    public function __construct($baseUrl, $debug = false, $loggerProvider = null) {
        if (!is_string($baseUrl) || !strlen($baseUrl)) {
            throw new Exception('Base Url is mandatory');
        }
        
        parent::__construct(
            new Middleware(
                $baseUrl, 
                $debug, 
                $loggerProvider instanceof LoggerProvider
                    ? $loggerProvider
                    : new LoggerProvider()
            )
        );
    }
}

/*EOF*/