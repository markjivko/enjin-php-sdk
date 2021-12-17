<?php
namespace Enjin\Sdk\Http;

use Enjin\Sdk\Utils\LoggerProvider;

/**
 * HTTP Client
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Client {
    // Headers
    const HEADER_CONTENT_TYPE  = 'Content-Type';
    const HEADER_AUTHORIZATION = 'Authorization';
    const HEADER_USER_AGENT    = 'User-Agent';
    
    /**
     * Debugging
     * 
     * @var boolean
     */
    protected $_debug = false;
    
    /**
     * Logger provider
     * 
     * @var LoggerProvider
     */
    protected $_logger = null;
    
    /**
     * Base URL
     * 
     * @var string|null
     */
    protected $_baseUrl = null;
    
    /**
     * Path
     * 
     * @var string|null
     */
    protected $_path = null;
    
    /**
     * Request content type
     * 
     * @var string|null
     */
    protected $_contentType = null;
    
    /**
     * User Agent
     * 
     * @var string|null
     */
    protected $_userAgent = null;
    
    /**
     * Authentication token
     * 
     * @var string|null
     */
    protected $_authToken = null;
    
    /**
     * CURL handler
     * 
     * @var CurlHandle
     */
    protected $_ch = null;
    
    /**
     * HTTP Client
     * 
     * @param boolean        $debug          (optional) Whether to enable debugging; default <b>false</b>
     * @param LoggerProvider $loggerProvider (optional) Logger provider; default <b>null</b>
     */
    public function __construct($debug = false, $loggerProvider = null) {
        $this->_logger = $loggerProvider;
        $this->_debug = ($debug && $loggerProvider instanceof LoggerProvider);
    }
    
    /**
     * Close (abandon) the current CURL connection
     */
    public function close() {
        if (null !== $this->_ch) {
            curl_close($this->_ch);
            $this->_ch = null;
        }
    }
    
    /**
     * Perform a POST request
     * 
     * @param array $data POST body data
     * @return array Array of [(int) result code, (string|boolean) result]
     */
    public function post($data) {
        $dataJson = json_encode($data, JSON_PRETTY_PRINT);
        
        // Prepare the endpoint
        $endpointUrl = trim($this->getBaseUrl(), '/\\') . '/' . $this->getPath();

        // Initialize the CURL handler
        $this->_ch = curl_init($endpointUrl);
        
        // Set the options
        curl_setopt($this->_ch, CURLOPT_POST, true);
        curl_setopt($this->_ch, CURLOPT_POSTFIELDS, $dataJson);
        curl_setopt($this->_ch, CURLOPT_FOLLOWLOCATION, true); 
        curl_setopt($this->_ch, CURLOPT_RETURNTRANSFER, true); 
        curl_setopt($this->_ch, CURLOPT_FAILONERROR, false); 
        curl_setopt($this->_ch, CURLOPT_TIMEOUT, 10); 
        curl_setopt($this->_ch, CURLOPT_CONNECTTIMEOUT, 5); 
        
        // No SSL checks
        curl_setopt($this->_ch, CURLOPT_SSL_VERIFYHOST, false); 
        curl_setopt($this->_ch, CURLOPT_SSL_VERIFYPEER, false); 
        curl_setopt($this->_ch, CURLOPT_SSL_VERIFYSTATUS, false); 
        
        // Set the headers
        if (count($headers = $this->_getHeaders())) {
            curl_setopt($this->_ch, CURLOPT_HTTPHEADER, $headers);
        }

        // Log the request
        if ($this->_debug) {
            $this->_logger->debug($endpointUrl);
            $this->_logger->debug($headers);
            $this->_logger->debug($dataJson);
        }
        
        // Prepare the result
        $htmlBody = curl_exec($this->_ch);
        $htmlCode = curl_getinfo($this->_ch, CURLINFO_HTTP_CODE);
        
        // Close the connection
        $this->close();
        
        // Log the result
        if ($this->_debug) {
            $this->_logger->debug($htmlCode);
            $this->_logger->debug($htmlBody);
        }
        
        return [$htmlBody, $htmlCode];
    }
    
    /**
     * Get a list of HTTP headers
     * 
     * @return string[]
     */
    protected function _getHeaders() {
        $headers = [];
        
        // Content-type
        if (null !== $this->getContentType()) {
            $headers[] = self::HEADER_CONTENT_TYPE . ': ' . $this->getContentType();
        }
        
        // User agent
        if (null !== $this->getUserAgent()) {
            $headers[] = self::HEADER_USER_AGENT . ': ' . $this->getUserAgent();
        }
        
        // Authorization
        if ($this->isAuthenticated()) {
            $headers[] = self::HEADER_AUTHORIZATION . ': Bearer ' . $this->getToken();
        }
        
        return $headers;
    }
    
    /**
     * Get the base URL
     * 
     * @return string|null
     */
    public function getBaseUrl() {
        return $this->_baseUrl;
    }
    
    /**
     * Set the base URL
     * 
     * @param string $baseUrl Base URL
     * @return Http\Client
     */
    public function setBaseUrl($baseUrl) {
        // Convert to string and trim
        $baseUrl = trim($baseUrl);
        
        // Invalid values stored as null
        $this->_baseUrl = strlen($baseUrl) ? $baseUrl : null;
        return $this;
    }
    
    /**
     * Set the relative path for each request
     * 
     * @param string $path Path relative to base URL
     * @return Http\Client
     */
    public function setPath($path) {
        // Convert to string and trim
        $path = trim($path);
        
        // Invalid values stored as null
        $this->_path = strlen($path) ? $path : null;
        return $this;
    }
    
    /**
     * Get the relative path for each request
     * 
     * @return string|null
     */
    public function getPath() {
        return trim($this->_path, '/\\');
    }
    
    /**
     * Set content type header
     * 
     * @param string $contentType Content type
     * @return Http\Client
     */
    public function setContentType($contentType) {
        // Convert to string and trim
        $contentType = trim($contentType);
        
        // Invalid values stored as null
        $this->_contentType = strlen($contentType) ? $contentType : null;
        return $this;
    }
    
    /**
     * Get the relative path for each request
     * 
     * @return string|null
     */
    public function getContentType() {
        return $this->_contentType;
    }
    
    /**
     * Get the user agent
     * 
     * @return string|null
     */
    public function getUserAgent() {
        return $this->_userAgent;
    }
    
    /**
     * Set the user agent
     * 
     * @param string $userAgent User Agent
     * @return Http\Client
     */
    public function setUserAgent($userAgent) {
        // Convert to string and trim
        $userAgent = trim($userAgent);
        
        // Invalid values stored as null
        $this->_userAgent = strlen($userAgent) ? $userAgent : null;
        return $this;
    }
    
    /**
     * Get the authentication token
     * 
     * @return string|null Authentication token
     */
    public function getToken() {
        return $this->_authToken;
    }
    
    /**
     * Set the authentication token
     * 
     * @param string|null $authToken Authentication token
     * @return Handler
     */
    public function setToken($authToken) {
        // Convert to string and trim
        $authToken = trim($authToken);
        
        // Invalid values stored as null
        $this->_authToken = strlen($authToken) ? $authToken : null;
        return $this;
    }
    
    /**
     * Check whether the SDL is authenticated
     * 
     * @return boolean
     */
    public function isAuthenticated() {
        return null !== $this->getToken();
    }
}

/*EOF*/