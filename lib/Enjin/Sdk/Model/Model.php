<?php
namespace Enjin\Sdk\Model;

use Enjin\Sdk\GraphQL\Response;

/**
 * Core model functionality
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Model {
    
    const TYPE_INT     = '_int_';
    const TYPE_STRING  = '_string_';
    const TYPE_FLOAT   = '_float_';
    const TYPE_BOOLEAN = '_bool_';
    
    /**
     * Associative array of @json (string) key => [(string) property name, (string) data type]
     * 
     * @var array
     */
    private $__modelProperties = [];
    
    /**
     * Model constructor
     * 
     * @param Response $data Model Data
     */
    public function __construct($data = []) {
        // Go through the defined properties in this model
        foreach ((new \ReflectionClass($this))->getProperties() as /*@var $property \ReflectionProperty*/ $property) {
            if (0 === strpos($property->getName(), '__')) {
                continue;
            }
            
            // The JSON key is assumed to coincide with the variable name, without the underscore prefix
            $jsonKey = ltrim($property->getName(), '_');
            
            // Data type descriptors
            $dataType = null;
            $dataArray = false;
            $dataNullable = false;
            
            // Search for @json tags
            if (preg_match('%\@json\s+(.*?)$%im', $property->getDocComment(), $jsonMatch)) {
                $jsonKey = trim($jsonMatch[1]);
            }
            
            // Found a data type
            if (preg_match('%\@var\s+([\w\\\]+)(\s*\[\])?(\s*\|\s*null)?%im', $property->getDocComment(), $jsonMatch)) {
                $dataType = trim($jsonMatch[1]);
                $dataArray = isset($jsonMatch[2]) && strlen($jsonMatch[2]);
                $dataNullable = isset($jsonMatch[3]) && strlen($jsonMatch[3]);
            }
            
            // Store the association
            $this->__modelProperties[$jsonKey] = [
                $property->getName(),
                $dataType,
                $dataNullable,
                $dataArray,
            ];
        }

        // Store the response data in the corresponding model
        if (is_array($data) && count($data)) {
            foreach ($this->__modelProperties as $jsonKey => list($variableName, $dataType, $dataNullable, $dataArray)) {
                if (isset($data[$jsonKey])) {
                    // Use custom setter
                    $setter = 'set' . ucfirst($variableName);
                    
                    // Custom setter found
                    if (method_exists($this, $setter)) {
                        $this->$setter($data[$jsonKey]);
                    } else {
                        $typeCastCallback = null;
                        $nonNullDefault = null;
                        
                        switch (strtolower($dataType)) {
                            case 'int':
                            case 'integer':
                                $typeCastCallback = 'intval';
                                $nonNullDefault = 0;
                                break;
                            
                            case 'float';
                                $typeCastCallback = 'floatval';
                                $nonNullDefault = 0.0;
                                break;
                            
                            case 'str':
                            case 'string':
                                $typeCastCallback = 'strval';
                                $nonNullDefault = '';
                                break;
                            
                            case 'bool':
                            case 'boolean':
                                $typeCastCallback = 'boolval';
                                $nonNullDefault = false;
                                break;
                            
                            case 'array':
                                $typeCastCallback = function($value) {
                                    return !is_array($value) 
                                        ? (array) $value 
                                        : $value;
                                };
                                $nonNullDefault = [];
                                break;
                            
                            default:
                                $className = preg_replace('%\\\Model$%i', '\\' . $dataType, __CLASS__);
                                if (class_exists($className)) {
                                    $typeCastCallback = function($value) use ($className) {
                                        return is_array($value) 
                                            ? new $className($value)
                                            : $value;
                                    };
                                } else {
                                    // Unknown type; identity function
                                    $typeCastCallback = function($value) {return $value;};
                                }
                                $nonNullDefault = null;
                                break;
                        }
                        
                        if ($dataArray) {
                            $this->$variableName = is_array($data[$jsonKey]) && count($data[$jsonKey])
                                ? array_map($typeCastCallback, $data[$jsonKey])
                                : ($dataNullable ? null : []);
                        } else {
                            $this->$variableName = !empty($data[$jsonKey]) 
                                ? $typeCastCallback($data[$jsonKey])
                                : ($dataNullable ? null : $nonNullDefault);
                        }
                    }
                }
            }
        }
    }
    
    /**
     * Export the model and all its properties as an array
     * 
     * @return array
     */
    public function __toArray() {
        $result = [];
        
        // Go through known properties
        foreach ($this->__modelProperties as $jsonKey => list($variableName,,,$dataArray)) {
            $result[$jsonKey] = isset($this->$variableName)
                ? (
                    $dataArray
                        ? (
                            array_map(
                                function($item) {
                                    return $item instanceof Model
                                        // Get the model data
                                        ? $item->__toArray()
                                        // Native data types
                                        : $item;
                                }, 
                                is_array($this->$variableName)
                                    ? $this->$variableName
                                    : []
                            )
                        )
                        : (
                            $this->$variableName instanceof Model
                                // Get the model data
                                ? $this->$variableName->__toArray()
                                // Native data types
                                : $this->$variableName
                        )
                )
                : null;
        }

        // Remove null and empty array
        return array_filter(
            $result,
            function($item) {
                return null !== $item 
                    && (!is_array($item) || count($item));
            }
        );
    }
    
    /**
     * Export the model as a JSON string
     * 
     * @return string
     */
    public function __toString() {
        return json_encode($this->__toArray());
    }
    
    /**
     * Return the unmodified model(s) if matching the required model class or null otherwise
     * 
     * @param Model|Model[] $model      Model object(s)
     * @param string        $modelClass Model class to check against
     * @param boolean       $isArray    Input is an array of models
     * @return Model|Model[]|null Null if model class not matched
     */
    public static function validate($model, $modelClass, $isArray = false) {
        $result = true;
        
        if ($isArray) {
            if (is_array($model) && count($model)) {
                foreach ($model as $modelInstance) {
                    if (!$modelInstance instanceof $modelClass) {
                        $result = false;
                        break;
                    }
                }
            } else {
                $result = false;
            }
        } else {
            $result = $model instanceof $modelClass;
        }
        
        return $result ? $model : null;
    }
    
    /**
     * Return the unmodified value if it matches the required type or null otherwise
     * 
     * @param mixed   $value   Value
     * @param string  $type    The value type, either an "<b>Model\Enum\*::class</b>" string or one of the following:<ul>
     * <li>self::TYPE_INT</li>
     * <li>self::TYPE_FLOAT</li>
     * <li>self::TYPE_STRING</li>
     * <li>self::TYPE_BOOLEAN</li>
     * </ul>
     * @param boolean $isArray The value is a non-empty array with elements of declared type
     * @return mixed|null Original value or null if not valid type
     */
    public static function validateType($value, $type, $isArray = false) {
        $valusIsValid = true;
        
        /**
         * Validate the type
         * 
         * @param mixed  $value
         * @param string $type
         */
        $validType = function($value, $type) {
            $typeResult = false;
            switch ($type) {
                case self::TYPE_INT:
                    $typeResult = is_int($value);
                    break;

                case self::TYPE_FLOAT:
                    $typeResult = is_float($value);
                    break;
                
                case self::TYPE_STRING:
                    $typeResult = is_string($value);
                    break;
                
                case self::TYPE_BOOLEAN:
                    $typeResult = is_bool($value);
                    break;
                
                default:
                    // Enumerator class name
                    if (is_subclass_of($type, Enum\Enum::class)) {
                        $typeResult = call_user_func(array($type, 'isValid'), $value);
                    }
                    break;
            }
            
            return $typeResult;
        };
        
        // Array input
        if ($isArray) {
            if (is_array($value) && count($value)) {
                foreach ($value as $item) {
                    if (!$validType($item, $type)) {
                        $valusIsValid = false;
                        break;
                    }
                }
            } else {
                $valusIsValid = false;
            }
        } else {
            $valusIsValid = $validType($value, $type);
        }
        
        return $valusIsValid ? $value : null;
    }
}

/*EOF*/