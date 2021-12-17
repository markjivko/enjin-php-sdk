<?php
namespace Enjin\Sdk\GraphQL;

/**
 * GraphQL Template
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Template {
    
    // Schemas
    const SCHEMA_PROJECT = 'project';
    const SCHEMA_PLAYER  = 'player';
    const SCHEMA_SHARED  = 'shared';
    
    // Types
    const TYPE_FRAGMENT = 'fragment';
    const TYPE_MUTATION = 'mutation';
    const TYPE_QUERY    = 'query';
    
    /**
     * Template namespace
     * 
     * @example 'enjin.sdk.player.AdvancedSendAsset'
     * @var string
     */
    protected $_namespace;
    
    /**
     * Template type
     * 
     * @example 'fragment'
     * @var string
     */
    protected $_type;
    
    /**
     * Debug mode
     * 
     * @var boolean
     */
    protected $_debug = false;
    
    /**
     * Namespaces of fragments to add
     * 
     * @var string[]
     */
    protected $_fragments = [];
    
    /**
     * Arguments list
     * 
     * @var string[]
     */
    protected $_args = [];
    
    /**
     * Content without commented lines
     * 
     * @var string
     */
    protected $_content = '';
    
    /**
     * GraphQL Template
     * 
     * @param string  $namespace Template namespace
     * @param string  $type      Template type
     * @param string  $contents  Template contents
     * @param boolean $debug     (optional) Debugging; default <b>false</b>
     */
    public function __construct($namespace, $type, $contents, $debug = false) {
        // Store namespace and type
        $this->_namespace = $namespace;
        $this->_type = $type;
        $this->_debug = $debug;
        
        // Cleanup filters
        $regexFilters = [
            '%(?:[\r\n]+)%' => '',
            '%\s{2,}%' => ' ',
        ];
        
        // Clean-up the content and extract namespace, argument and import
        $this->_content = trim(
            preg_replace(
                array_keys($regexFilters), 
                array_values($regexFilters),
                preg_replace_callback(
                    '%^\s*#(.*?)$%ims', 
                    function($item) {
                        if (preg_match('%(?:namespace|arg|import)\s%', $item[1])) {
                            $itemValues = explode(
                                ' ', 
                                preg_replace(
                                    '%\s{2,}%', 
                                    ' ', 
                                    trim($item[1])
                                )
                            );

                            switch ($itemValues[0]) {
                                // Process the arguments
                                case 'arg':
                                    switch (count($itemValues)) {
                                        case 3:
                                            $this->_args[] = "\${$itemValues[1]}: {$itemValues[2]}";
                                            break;

                                        case 4:
                                            $this->_args[] = "\${$itemValues[1]}: {$itemValues[2]} = {$itemValues[3]}";
                                            break;
                                    }
                                    break;

                                // Process the imports / fragments
                                case 'import':
                                    $this->_fragments[] = $itemValues[1];
                                    break;
                            }
                        }
                        return '';
                    }, 
                    $contents
                )
            )
        );
    }    
    
    /**
     * Fragments needed by this template
     * 
     * @return string[]
     */
    public function getFragments() {
        return $this->_fragments;
    }
    
    /**
     * Template arguments
     * 
     * @return string[]
     */
    public function getArgs() {
        return $this->_args;
    }
    
    /**
     * Template content (no comments)
     * 
     * @return string
     */
    public function getContent() {
        return $this->_content;
    }
    
    /**
     * Compile a template (query or mutation)
     * 
     * @param Template[] $fragments Known fragments from the Registry
     */
    public function compile($fragments) {
        $result = '';
        
        do {
            if (self::TYPE_FRAGMENT == $this->_type) {
                break;
            }
            
            // Store the final values
            $finalArgs = $this->getArgs();
            $finalContent = $this->getContent();
            
            // Store all imported fragments
            $importsDone = [];
            
            // Go through this project's fragments
            $importsNeeded = $this->getFragments();
            while(count($importsNeeded)) {
                // Get the first import
                $import = array_shift($importsNeeded);
                
                // Already processed
                if (in_array($import, $importsDone)) {
                    continue;
                }
                
                // Import found
                if (isset($fragments[$import])) {
                    // Add other dependencies
                    foreach ($fragments[$import]->getFragments() as $extraImport) {
                        $importsNeeded[] = $extraImport;
                    }
                    
                    // Append arguments
                    foreach ($fragments[$import]->getArgs() as $extraArg) {
                        $finalArgs[] = $extraArg;
                    }
                    
                    // Append content
                    $finalContent .= ' ' . $fragments[$import]->getContent();
                }
                
                // Mark import as processed
                $importsDone[] = $import;
            }
            
            // Prepare the name
            $gqlName = preg_replace('%^.*\.(\w+)$%', '$1', $this->_namespace);
            $gqlArgString = count($finalArgs)
                ? ('(' . implode(', ', $finalArgs) . ')')
                : '';
            
            // Prepare the result
            $result = preg_replace(
                '%' . $this->_type . '%i', 
                "{$this->_type} {$gqlName}{$gqlArgString}", 
                $finalContent
            );
            
        } while(false);
        
        return $result;
    }
}

/*EOF*/