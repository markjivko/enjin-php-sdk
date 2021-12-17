<?php
namespace Enjin\Sdk\Schema;

use Enjin\Sdk\Model;
use Enjin\Sdk\GraphQL\Response;
use Enjin\Sdk\GraphQL\Request;

/**
 * Class for sending requests in the player schema
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Player extends Shared {
    
    const SCHEMA = 'player';
    
    /**
     * Send one or more assets in a single transaction
     *
     * @param Request\Player\Mutation\AdvancedSendAsset $request  GraphQL AdvancedSendAsset request
     * @param &Response                                 $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function advancedSendAsset(Request\Player\Mutation\AdvancedSendAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Approve the crypto items contract to spend ENJ
     *
     * @param Request\Player\Mutation\ApproveEnj $request  GraphQL ApproveEnj request
     * @param &Response                          $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function approveEnj(Request\Player\Mutation\ApproveEnj $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Approve the crypto items contract to spend the maximum amount of ENJ
     *
     * @param Request\Player\Mutation\ApproveMaxEnj $request  GraphQL ApproveMaxEnj request
     * @param &Response                             $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function approveMaxEnj(Request\Player\Mutation\ApproveMaxEnj $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Bridge an asset
     *
     * @param Request\Player\Mutation\BridgeAsset $request  GraphQL BridgeAsset request
     * @param &Response                           $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function bridgeAsset(Request\Player\Mutation\BridgeAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Bridge multiple indices of an NFT in a single transaction
     *
     * @param Request\Player\Mutation\BridgeAssets $request  GraphQL BridgeAssets request
     * @param &Response                            $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function bridgeAssets(Request\Player\Mutation\BridgeAssets $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Claim assets on the bridge
     *
     * @param Request\Player\Mutation\BridgeClaimAsset $request  GraphQL BridgeClaimAsset request
     * @param &Response                                $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function bridgeClaimAsset(Request\Player\Mutation\BridgeClaimAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Get information about the player
     *
     * @param Request\Player\Query\GetPlayer $request  GraphQL GetPlayer request
     * @param &Response                      $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Player|null
     */
    public function getPlayer(Request\Player\Query\GetPlayer $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Player::class);
    }

    /**
     * Get a player's wallet
     *
     * @param Request\Player\Query\GetWallet $request  GraphQL GetWallet request
     * @param &Response                      $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Wallet|null
     */
    public function getWallet(Request\Player\Query\GetWallet $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Wallet::class);
    }

    /**
     * Melt an asset
     *
     * @param Request\Player\Mutation\MeltAsset $request  GraphQL MeltAsset request
     * @param &Response                         $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function meltAsset(Request\Player\Mutation\MeltAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Sign a message to prove wallet ownership
     *
     * @param Request\Player\Mutation\Message $request  GraphQL Message request
     * @param &Response                       $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function message(Request\Player\Mutation\Message $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Reset the crypto items contract approval for ENJ
     *
     * @param Request\Player\Mutation\ResetEnjApproval $request  GraphQL ResetEnjApproval request
     * @param &Response                                $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function resetEnjApproval(Request\Player\Mutation\ResetEnjApproval $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Send an asset
     *
     * @param Request\Player\Mutation\SendAsset $request  GraphQL SendAsset request
     * @param &Response                         $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function sendAsset(Request\Player\Mutation\SendAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Send ENJ
     *
     * @param Request\Player\Mutation\SendEnj $request  GraphQL SendEnj request
     * @param &Response                       $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function sendEnj(Request\Player\Mutation\SendEnj $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Allow an operator complete control of all assets owned by the caller
     *
     * @param Request\Player\Mutation\SetApprovalForAll $request  GraphQL SetApprovalForAll request
     * @param &Response                                 $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function setApprovalForAll(Request\Player\Mutation\SetApprovalForAll $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Unlink a wallet from the player
     *
     * @param Request\Player\Mutation\UnlinkWallet $request  GraphQL UnlinkWallet request
     * @param &Response                            $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return boolean|null
     */
    public function unlinkWallet(Request\Player\Mutation\UnlinkWallet $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, null, self::MODEL_BOOL);
    }
}

/*EOF*/