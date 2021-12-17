<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Enumerator handler for PHP
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Enum {
    
    /**
     * Associative array of constant name => constant value
     * 
     * @var array
     */
    protected static $_constants = null;
    
    /**
     * Retrieve all defined properties
     * 
     * @return array
     */
    public static function getAll() {
        if (null === self::$_constants) {
            self::$_constants = (new \ReflectionClass(get_called_class()))->getConstants();
        }
        
        return self::$_constants;
    }
    
    /**
     * Validate enumerator value
     * 
     * @param mixed $value
     * @return boolean True if value listed in the enumerator, false otherwise
     */
    public static function isValid($value) {
        return in_array($value, self::getAll());
    }
}

/*EOF*/