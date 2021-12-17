<?php
namespace Enjin\Sdk\GraphQL;

use Enjin\Sdk\Model;

/**
 * GraphQL Response
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Response {
    
    const ERR             = 'errors';
    const DATA            = 'data';
    const DATA_RES        = 'result';
    const DATA_RES_CURSOR = 'cursor';
    const DATA_RES_ITEMS  = 'items';
    
    /**
     * Response errors
     * 
     * @var Response\Error[]|null Array of errors or null
     */
    protected $_errors = null;
    
    /**
     * Pagination cursor
     * 
     * @var Model\PaginationCursor|null
     */
    protected $_cursor = null;
    
    /**
     * Response result data
     * 
     * @var array|null
     */
    protected $_result = null;
    
    public function __construct($htmlBody, $htmlCode) {
        // Try to get the JSON data
        $jsonData = is_string($htmlBody) && strlen($htmlBody)
            ? @json_decode($htmlBody, true)
            : false;

        do {
            // Invalid data
            if (!is_array($jsonData)) {
                $this->_errors = [
                    new Response\Error([
                        Response\Error::ERROR_DETAILS => 'cURL request failed, code #' . $htmlCode . ': ' . curl_strerror($htmlCode),
                        Response\Error::ERROR_CODE    => 1,
                    ])
                ];
                break;
            }
            
            // Populate errors
            if (isset($jsonData[self::ERR]) 
                && is_array($jsonData[self::ERR])
                && count($jsonData[self::ERR])) {
                // Initialize the errors holder
                $this->_errors = [];
                
                // Append the error objects
                foreach ($jsonData[self::ERR] as $errorData) {
                    if (is_array($errorData)) {
                        $this->_errors[] = new Response\Error($errorData);
                    }
                }
            }
            
            // Valid data
            if (isset($jsonData[self::DATA]) && is_array($jsonData[self::DATA])) {
                if (isset($jsonData[self::DATA][self::DATA_RES])) {
                    // Preliminary result
                    $this->_result = $jsonData[self::DATA][self::DATA_RES];
                    
                    // Cursor found
                    if (is_array($jsonData[self::DATA][self::DATA_RES]) 
                        && isset($jsonData[self::DATA][self::DATA_RES][self::DATA_RES_CURSOR])) {
                        $this->_cursor = new Model\PaginationCursor(
                            $jsonData[self::DATA][self::DATA_RES][self::DATA_RES_CURSOR]
                        );

                        // Items found (paginated result)
                        if (isset($jsonData[self::DATA][self::DATA_RES][self::DATA_RES_ITEMS])) {
                            $this->_result = $jsonData[self::DATA][self::DATA_RES][self::DATA_RES_ITEMS];
                        }
                    }
                }
            }
        } while(false);
    }
    
    /**
     * Response errors
     * 
     * @return Response\Error[]|null
     */
    public function getErrors() {
        return $this->_errors;
    }
    
    /**
     * Pagination cursor
     * 
     * @return Model\PaginationCursor|null
     */
    public function getCursor() {
        return $this->_cursor;
    }

    /**
     * Response data
     * 
     * @return array|null
     */
    public function getResult() {
        return $this->_result;
    }
    
    /**
     * Response has errors
     * 
     * @return boolean
     */
    public function hasErrors() {
        return is_array($this->_errors) && count($this->_errors);
    }
    
    /**
     * Empty response
     * 
     * @return boolean
     */
    public function isEmpty() {
        return null === $this->_result;
    }
    
    /**
     * Paginated response
     * 
     * @return boolean
     */
    public function isPaginated() {
        return null !== $this->_cursor;
    }
    
    /**
     * Successfull response
     * 
     * @return boolean
     */
    public function isSuccessful() {
        return !($this->isEmpty() || $this->hasErrors());
    }
}

/*EOF*/