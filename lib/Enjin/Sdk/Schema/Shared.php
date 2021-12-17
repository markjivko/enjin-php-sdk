<?php
namespace Enjin\Sdk\Schema;

use Enjin\Sdk\Model;
use Enjin\Sdk\GraphQL\Response;
use Enjin\Sdk\GraphQL\Request;

/**
 * Shared Schema
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Shared extends Base {
    
    /**
     * Cancel a transaction on the platform
     *
     * @param Request\Shared\Mutation\CancelTransaction $request  GraphQL CancelTransaction request
     * @param &Response                                 $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return boolean|null
     */
    public function cancelTransaction(Request\Shared\Mutation\CancelTransaction $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, null, self::MODEL_BOOLEAN);
    }

    /**
     * Get an asset on the platform
     *
     * @param Request\Shared\Query\GetAsset $request  GraphQL GetAsset request
     * @param &Response                     $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Asset|null
     */
    public function getAsset(Request\Shared\Query\GetAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Asset::class);
    }

    /**
     * Get assets on the platform
     *
     * @param Request\Shared\Query\GetAssets $request  GraphQL GetAssets request
     * @param &Response                      $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Asset[]|null
     */
    public function getAssets(Request\Shared\Query\GetAssets $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Asset::class, self::MODEL_MANY);
    }

    /**
     * Get balances on the platform
     *
     * @param Request\Shared\Query\GetBalances $request  GraphQL GetBalances request
     * @param &Response                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Balance[]|null
     */
    public function getBalances(Request\Shared\Query\GetBalances $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Balance::class, self::MODEL_MANY);
    }

    /**
     * Get the latest gas prices
     *
     * @param Request\Shared\Query\GetGasPrices $request  GraphQL GetGasPrices request
     * @param &Response                         $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\GasPrices|null
     */
    public function getGasPrices(Request\Shared\Query\GetGasPrices $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\GasPrices::class);
    }

    /**
     * Get the platform details
     *
     * @param Request\Shared\Query\GetPlatform $request  GraphQL GetPlatform request
     * @param &Response                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Platform|null
     */
    public function getPlatform(Request\Shared\Query\GetPlatform $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Platform::class);
    }

    /**
     * Get a project on the platform
     *
     * @param Request\Shared\Query\GetProject $request  GraphQL GetProject request
     * @param &Response                       $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Project|null
     */
    public function getProject(Request\Shared\Query\GetProject $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Project::class);
    }

    /**
     * Get a transaction on the platform
     *
     * @param Request\Shared\Query\GetRequest $request  GraphQL GetRequest request
     * @param &Response                       $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function getRequest(Request\Shared\Query\GetRequest $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Get transactions on the platform
     *
     * @param Request\Shared\Query\GetRequests $request  GraphQL GetRequests request
     * @param &Response                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request[]|null
     */
    public function getRequests(Request\Shared\Query\GetRequests $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Request::class, self::MODEL_MANY);
    }
}

/*EOF*/