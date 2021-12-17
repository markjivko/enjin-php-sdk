<?php
namespace Enjin\Sdk\Schema;

use Enjin\Sdk\Model;
use Enjin\Sdk\GraphQL\Response;
use Enjin\Sdk\GraphQL\Request;

/**
 * Class for sending requests in the project schema
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Project extends Shared {
    
    const SCHEMA = 'project';
    
    /**
     * Send one or more assets in a single transaction
     *
     * @param Request\Project\Mutation\AdvancedSendAsset $request  GraphQL AdvancedSendAsset request
     * @param &Response                                  $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function advancedSendAsset(Request\Project\Mutation\AdvancedSendAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Approve the crypto items contract to spend ENJ
     *
     * @param Request\Project\Mutation\ApproveEnj $request  GraphQL ApproveEnj request
     * @param &Response                           $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function approveEnj(Request\Project\Mutation\ApproveEnj $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Approve the crypto items contract to spend the maximum amount of ENJ
     *
     * @param Request\Project\Mutation\ApproveMaxEnj $request  GraphQL ApproveMaxEnj request
     * @param &Response                              $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function approveMaxEnj(Request\Project\Mutation\ApproveMaxEnj $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Obtain an access token for a player
     *
     * @param Request\Project\Query\AuthPlayer $request  GraphQL AuthPlayer request
     * @param &Response                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\AccessToken|null
     */
    public function authPlayer(Request\Project\Query\AuthPlayer $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\AccessToken::class);
    }

    /**
     * Obtain an access token for the project
     *
     * @param Request\Project\Query\AuthProject $request  GraphQL AuthProject request
     * @param &Response                         $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\AccessToken|null
     */
    public function authProject(Request\Project\Query\AuthProject $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\AccessToken::class);
    }

    /**
     * Bridge an asset
     * 
     * @param Request\Project\Mutation\BridgeAsset $request  GraphQL BridgeAsset request
     * @param &Response                            $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function bridgeAsset(Request\Project\Mutation\BridgeAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Bridge multiple indices of an NFT in a single transaction
     * 
     * @param Request\Project\Mutation\BridgeAssets $request  GraphQL BridgeAssets request
     * @param &Response                             $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function bridgeAssets(Request\Project\Mutation\BridgeAssets $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Claim assets on the bridge
     * 
     * @param Request\Project\Mutation\BridgeClaimAsset $request GraphQL BridgeClaimAsset request
     * @param &Response                                 $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function bridgeClaimAsset(Request\Project\Mutation\BridgeClaimAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Complete a trade between two wallets
     *
     * @param Request\Project\Mutation\CompleteTrade $request  GraphQL CompleteTrade request
     * @param &Response                              $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function completeTrade(Request\Project\Mutation\CompleteTrade $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Create an asset on the platform
     *
     * @param Request\Project\Mutation\CreateAsset $request  GraphQL CreateAsset request
     * @param &Response                            $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function createAsset(Request\Project\Mutation\CreateAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Create a player for the project
     *
     * @param Request\Project\Mutation\CreatePlayer $request  GraphQL CreatePlayer request
     * @param &Response                             $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\AccessToken|null
     */
    public function createPlayer(Request\Project\Mutation\CreatePlayer $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\AccessToken::class);
    }

    /**
     * Create a trade between two wallets
     *
     * @param Request\Project\Mutation\CreateTrade $request GraphQL CreateTrade request
     * @param &Response                            $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function createTrade(Request\Project\Mutation\CreateTrade $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Set an asset's max melt fee to a lower value
     *
     * @param Request\Project\Mutation\DecreaseMaxMeltFee $request  GraphQL DecreaseMaxMeltFee request
     * @param &Response                                   $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function decreaseMaxMeltFee(Request\Project\Mutation\DecreaseMaxMeltFee $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Set an asset's max transfer fee to a lower value
     *
     * @param Request\Project\Mutation\DecreaseMaxTransferFee $request  GraphQL DecreaseMaxTransferFee request
     * @param &Response                                       $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function decreaseMaxTransferFee(Request\Project\Mutation\DecreaseMaxTransferFee $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Delete a player from the project
     *
     * @param Request\Project\Mutation\DeletePlayer $request GraphQL DeletePlayer request
     * @param &Response                             $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return boolean|null
     */
    public function deletePlayer(Request\Project\Mutation\DeletePlayer $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, null, self::MODEL_BOOL);
    }

    /**
     * Get a player on the project
     *
     * @param Request\Project\Query\GetPlayer $request  GraphQL GetPlayer request
     * @return &Response                      $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Player|null
     */
    public function getPlayer(Request\Project\Query\GetPlayer $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Player::class);
    }

    /**
     * Get players on the project
     *
     * @param Request\Project\Query\GetPlayers $request  GraphQL GetPlayers request
     * @param &Response                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Player[]|null
     */
    public function getPlayers(Request\Project\Query\GetPlayers $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Player::class, self::MODEL_MANY);
    }

    /**
     * Get a player's wallet
     *
     * @param Request\Project\Query\GetWallet $request  GraphQL GetWallet request
     * @return &Response                      $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Wallet|null
     */
    public function getWallet(Request\Project\Query\GetWallet $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Wallet::class);
    }

    /**
     * Get players wallets
     *
     * @param Request\Project\Query\GetWallets $request  GraphQL GetWallets request
     * @param &Response                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Wallet[]|null
     */
    public function getWallets(Request\Project\Query\GetWallets $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, Model\Wallet::class, self::MODEL_MANY);
    }

    /**
     * Invalidate the cached metadata of an asset on the platform
     *
     * @param Request\Project\Mutation\InvalidateAssetMetadata $request  GraphQL InvalidateAssetMetadata request
     * @param &Response                                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return boolean|null
     */
    public function invalidateAssetMetadata(Request\Project\Mutation\InvalidateAssetMetadata $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, null, self::MODEL_BOOL);
    }

    /**
     * Melt an asset
     *
     * @param Request\Project\Mutation\MeltAsset $request  GraphQL MeltAsset request
     * @param &Response                          $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function meltAsset(Request\Project\Mutation\MeltAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Sign a message to prove wallet ownership
     *
     * @param Request\Project\Mutation\Message $request  GraphQL Message request
     * @param &Response                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function message(Request\Project\Mutation\Message $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Mint an asset
     *
     * @param Request\Project\Mutation\MintAsset $request  GraphQL MintAsset request
     * @param &Response                          $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function mintAsset(Request\Project\Mutation\MintAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Release the reserve of an asset
     *
     * @param Request\Project\Mutation\ReleaseReserve $request  GraphQL ReleaseReserve request
     * @param &Response                               $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function releaseReserve(Request\Project\Mutation\ReleaseReserve $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Reset the crypto items contract approval for ENJ
     *
     * @param Request\Project\Mutation\ResetEnjApproval $request  GraphQL ResetEnjApproval request
     * @param &Response                                 $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function resetEnjApproval(Request\Project\Mutation\ResetEnjApproval $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Send an asset
     *
     * @param Request\Project\Mutation\SendAsset $request  GraphQL SendAsset request
     * @param &Response                          $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function sendAsset(Request\Project\Mutation\SendAsset $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Send ENJ
     *
     * @param Request\Project\Mutation\SendEnj $request  GraphQL SendEnj request
     * @param &Response                        $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function sendEnj(Request\Project\Mutation\SendEnj $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Allow an operator complete control of all assets owned by the caller
     *
     * @param Request\Project\Mutation\SetApprovalForAll $request  GraphQL SetApprovalForAll request
     * @param &Response                                  $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function setApprovalForAll(Request\Project\Mutation\SetApprovalForAll $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Set the melt fee of an asset
     *
     * @param Request\Project\Mutation\SetMeltFee $request  GraphQL SetMeltFee request
     * @param &Response                           $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function setMeltFee(Request\Project\Mutation\SetMeltFee $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Set if an asset can be transferred
     *
     * @param Request\Project\Mutation\SetTransferable $request  GraphQL SetTransferable request
     * @param &Response                                $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function setTransferable(Request\Project\Mutation\SetTransferable $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Set the transfer fee of an asset
     *
     * @param Request\Project\Mutation\SetTransferFee $request  GraphQL SetTransferFee request
     * @param &Response                               $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function setTransferFee(Request\Project\Mutation\SetTransferFee $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Set the metadata URI of an asset
     *
     * @param Request\Project\Mutation\SetUri $request  GraphQL SetUri request
     * @param &Response                       $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function setUri(Request\Project\Mutation\SetUri $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Set an asset's whitelist
     *
     * @param Request\Project\Mutation\SetWhitelisted $request  GraphQL SetWhitelisted request
     * @param &Response                               $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return Model\Request|null
     */
    public function setWhitelisted(Request\Project\Mutation\SetWhitelisted $request, Response &$response = null) {
        return $this->_sendRequest($request, $response);
    }

    /**
     * Unlink a wallet from the project
     *
     * @param Request\Project\Mutation\UnlinkWallet $request GraphQL UnlinkWallet request
     * @param &Response                             $response (optional) Reference to GraphQL response; default <b>null</b>
     * @return boolean|null
     */
    public function unlinkWallet(Request\Project\Mutation\UnlinkWallet $request, Response &$response = null) {
        return $this->_sendRequest($request, $response, null, self::MODEL_BOOL);
    }
}

/*EOF*/