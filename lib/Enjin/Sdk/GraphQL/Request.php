<?php
namespace Enjin\Sdk\GraphQL;

use Enjin\Sdk\Model\Model;

/**
 * GraphQL Request
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Request {
    
    const NAMESPACE = 'enjin.sdk.shared';
    
    /**
     * Stored variables
     * 
     * @var array
     */
    protected $_variables = [];
    
    /**
     * Constructs a request wit the passed variable mapping and namespace (template key)
     * 
     * @param string $namespace Namespace (template key)
     * @param array  $variables Variable mapping
     */
    public function __construct($variables = []) {
        $this->_namespace = static::NAMESPACE;
        
        if (is_array($variables)) {
            $this->_variables = $variables;
        }
    }
    
    /**
     * Get the stored variables
     * 
     * @param boolean $modelsToArray (optional) Convert Models to arrays; default <b>false</b>
     * @return array
     */
    public function getVariables($modelsToArray = false) {
        $result = $this->_variables;
        
        if ($modelsToArray) {
            foreach ($result as $key => $value) {
                if ($value instanceof Model) {
                    $result[$key] = $value->__toArray();
                }
            }
        }
        
        return $result;
    }
    
    /**
     * Set variable
     * 
     * @param string      $key   Variable key
     * @param object|null $value Value
     * @return $this
     */
    public function setVariable($key, $value) {
        $key = trim($key);
        
        if (null === $value) {
            unset($this->_variables[$key]);
        } else {
            $this->_variables[$key] = $value;
        }
        
        return $this;
    }
    
    /**
     * Check the key is set
     * 
     * @param string $key Variable key
     * @return boolean
     */
    public function isSet($key) {
        $key = trim($key);
        
        return isset($this->_variables[$key]);
    }
    
    /**
     * Get the current request namespace
     * 
     * @return string
     */
    public function getNamespace() {
        return static::NAMESPACE;
    }
    
    /**
     * Get the current request operation name
     * 
     * @return string
     */
    public function getName() {
        return preg_replace('%^.*?(\w+)$%i', '$1', static::NAMESPACE);
    }
}

/*EOF*/