<?php
namespace Enjin\Sdk\GraphQL\Response;

/**
 * GraphQL Response Error Model
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Error {
    
    const ERROR_MESSAGE   = 'message';
    const ERROR_CODE      = 'code';
    const ERROR_VALIDATON = 'validation';
    const ERROR_LOCATIONS = 'locations';
    const ERROR_DETAILS   = 'details';
    
    /**
     * Known JSON keys and corresponding internal properties
     */
    const ERROR_PROPS = [
        self::ERROR_MESSAGE   => '_message',
        self::ERROR_CODE      => '_code',
        self::ERROR_VALIDATON => '_validation',
        self::ERROR_LOCATIONS => '_locations',
        self::ERROR_DETAILS   => '_details',
    ];
    
    /**
     * Error message
     * 
     * @var string
     */
    protected $_message = '';
    
    /**
     * Error code
     * 
     * @var int
     */
    protected $_code = 0;
    
    /**
     * Error locations
     * 
     * @var array
     */
    protected $_locations = [];
    
    /**
     * Details
     * 
     * @var string
     */
    protected $_details = '';
    
    /**
     * GraphQL Response Error
     * 
     * @param array $errorData Associative array
     */
    public function __construct($errorData = []) {
        foreach (self::ERROR_PROPS as $jsonKey => $variableName) {
            if (isset($errorData[$jsonKey])) {
                $this->$variableName = $errorData[$jsonKey];
            }
        }
    }
    
    /**
     * Error message
     * 
     * @return string
     */
    public function getMessage() {
        return (string) $this->_message;
    }
    
    /**
     * Error code
     * 
     * @return int
     */
    public function getCode() {
        return (int) $this->_code;
    }
    
    /**
     * Error locations
     * 
     * @return array Array of associative arrays, [(string) location => (int) number]
     */
    public function getLocations() {
        return (array) $this->_locations;
    }
    
    /**
     * Error details
     * 
     * @return string
     */
    public function getDetails() {
        return (string) $this->_details;
    }
}

/*EOF*/