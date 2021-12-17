<?php
namespace Enjin\Sdk\Utils;

/**
 * Logger provider
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class LoggerProvider {
    
    /**
     * PSR-3 Logger interface implementation
     * 
     * @var LoggerInterface
     */
    protected $_logger = null;
    
    /**
     * Default log level
     * 
     * @var string LogLevel
     */
    protected $_defaultLevel = LogLevel::INFO;
    
    /**
     * Level for debug messages
     * 
     * @var string LogLevel
     */
    protected $_debugLevel = LogLevel::DEBUG;
    
    /**
     * Logger provider
     * 
     * @param LoggerInterface      $logger    Logger
     * @param string $defaultLevel (optional) Default log level; default <b>LogLevel::INFO</b>
     * @param string $debugLevel   (optional) Log level for debug messages; default <b>LogLevel::DEBUG<b/>
     */
    public function __construct($logger = null, $defaultLevel = LogLevel::INFO, $debugLevel = LogLevel::DEBUG) {
        $this->_logger = $logger instanceof LoggerInterface 
            ? $logger 
            : new Logger();
        $this->_defaultLevel = $defaultLevel;
        $this->_debugLevel = $debugLevel;
    }
    
    /**
     * Log a message/exception
     * 
     * @param string|Exception $message  Message
     * @param string           $logLevel LogLevel
     * @param array            $context  Context
     */
    public function log($message, $logLevel = null, $context = []) {
        if (null === $logLevel) {
            $logLevel = $this->_defaultLevel;
        }
        null !== $this->_logger && $this->_logger->log($logLevel, $message, $context);
    }
    
    /**
     * Log a debug message/exception
     * 
     * @param string|Exception $message Message
     * @param array            $context Context
     */
    public function debug($message, $context = []) {
        null !== $this->_logger && $this->_logger->log($this->_debugLevel, $message, $context);
    }
    
}

/*EOF*/