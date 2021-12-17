<?php
namespace Enjin\Sdk\Schema;

use Enjin\Sdk\Model;
use Enjin\Sdk\GraphQL;
use Enjin\Sdk\Middleware;

/**
 * Base Schema
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Base {
    
    // Schema
    const SCHEMA = '';
    
    // Request parameters
    const REQUEST_OPERATION_NAME = 'operationName';
    const REQUEST_QUERY          = 'query';
    const REQUEST_VARIABLES      = 'variables';
    
    /**
     * Get a single Model instance
     */
    const MODEL_ONE  = 'one';
    
    /**
     * Get an array of Model instances
     */
    const MODEL_MANY = 'many';
    
    /**
     * Get a boolean result
     */
    const MODEL_BOOL = 'bool';
    
    /**
     * Middleware
     * 
     * @var Middleware
     */
    public $_middleware;
    
    /**
     * Create the base schema
     * 
     * @param Middleware $middleware
     */
    public function __construct(Middleware $middleware) {
        $this->_middleware = $middleware;
    }
    
    /**
     * Send the request and wrap the result in the desired model
     * 
     * @param GraphQL\Request   $request    GraphQL request object
     * @param &GraphQL\Response $response   Reference to GraphQL response
     * @param string            $modelClass (optional) Result model class; default <b>Model\Request::class</b>
     * @param string            $modelType  (optional) Response type, one of <ul>
     * <li>self::MODEL_ONE  - Return a single Model instance</li>
     * <li>self::MODEL_MANY - Return an array of Model instances</li>
     * <li>self::MODEL_BOOL - Return a boolean result</li>
     * </ul> default <b>Base::MODEL_ONE</b>
     * @return Model\Model|Model\Model[]|boolean|null Model(s) or boolean for successful response, null otherwise
     */
    protected function _sendRequest(GraphQL\Request $request, &$response, $modelClass = Model\Request::class, $modelType = self::MODEL_ONE) {
        // Set the path and content type
        $this->_middleware->getClient()->setPath('graphql/' . static::SCHEMA);
        $this->_middleware->getClient()->setContentType('application/json');
        
        // Execute the POST request
        list($htmlBody, $htmlCode) = $this->_middleware->getClient()->post([
            self::REQUEST_OPERATION_NAME => $request->getName(),
            self::REQUEST_QUERY          => $this->_middleware->getRegistry()->getQuery($request->getNamespace()),
            self::REQUEST_VARIABLES      => $request->getVariables(true)
        ]);
        
        // Invalid class specified
        if (self::MODEL_BOOL !== $modelType && !class_exists($modelClass)) {
            $modelClass = Model\Request::class;
        }
        
        // Prepare the response object
        $response = new GraphQL\Response($htmlBody, $htmlCode);
        
        // Prepare the wrapper model
        $result = null;
        do {
            if (!$response->isSuccessful()) {
                break;
            }
            
            switch ($modelType) {
                case self::MODEL_ONE:
                    $result = new $modelClass($response->getResult());
                    break;
                
                case self::MODEL_MANY:
                    if (is_array($response->getResult())) {
                        $result = [];
                        foreach ($response->getResult() as $modelData) {
                            $result[] = new $modelClass($modelData);
                        }
                    }
                    break;
                    
                case self::MODEL_BOOL:
                    $result = !!$response->getResult();
                    break;
            }
        } while(false);

        return $result;
    }
}

/*EOF*/
