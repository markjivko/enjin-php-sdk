<?php
namespace Enjin\Sdk\GraphQL;

/**
 * GraphQL Template Registry
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Registry {
    
    /**
     * GraphQL Templates
     * 
     * @var Template[]
     */    
    protected $_templates = [];
    
    /**
     * GraphQL Fragments
     * 
     * @var Template[]
     */  
    protected $_fragments = [];
    
    /**
     * Template registry
     * 
     * @param boolean $debug (optional) Debugging enabled; default <b>false</b>
     */
    public function __construct($debug = false) {
        // Go through the GraphQL files
        foreach (new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(dirname(__FILE__, 2) . '/Res/')) as $fileInfo) {
            /*@var $fileInfo \SplFileInfo*/
            if (is_file($fileInfo) && 'gql' == $fileInfo->getExtension()) {
                $filePath = $fileInfo->getRealPath();
                $gqlSchema = basename(dirname($filePath, 2));
                $gqlType = basename(dirname($filePath, 1));
                $gqlName = basename($filePath, '.gql');
                
                // Validate schema, type and name
                if (in_array($gqlSchema, [Template::SCHEMA_PROJECT, Template::SCHEMA_PLAYER, Template::SCHEMA_SHARED])
                    && in_array($gqlType, [Template::TYPE_FRAGMENT, Template::TYPE_MUTATION, Template::TYPE_QUERY])
                    && preg_match('%^[a-z]+$%i', $gqlName)) {
                    
                    // Get the file contents
                    $gqlContents = file_get_contents($filePath);
                    
                    do {
                        // Namespace not defined
                        if (!preg_match('%#namespace\s+([\w\.]+)\n%i', $gqlContents, $nsMatch)) {
                            break;
                        }
                        $gqlNamespace = $nsMatch[1];
                        
                        // Store the data
                        switch ($gqlType) {
                            case Template::TYPE_FRAGMENT:
                                $this->_fragments[$gqlNamespace] = new Template(
                                    $gqlNamespace, 
                                    $gqlType, 
                                    $gqlContents,
                                    $debug
                                );
                                break;

                            case Template::TYPE_QUERY:
                            case Template::TYPE_MUTATION:
                                $this->_templates[$gqlNamespace] = new Template(
                                    $nsMatch[1], 
                                    $gqlType, 
                                    $gqlContents,
                                    $debug
                                );
                                break;
                        }
                    } while(false);
                }
            }
        }
    }
    
    /**
     * Get GraphQL compiled query/mutation string
     * 
     * @param string $namespace Query namespace
     * @return string|null
     */
    public function getQuery($namespace) {
        return isset($this->_templates[$namespace])
            ? $this->_templates[$namespace]->compile($this->_fragments)
            : null;
    }
}

/*EOF*/