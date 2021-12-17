<?php
namespace Enjin\Sdk\Model;

/**
 * Models transfer input when making requests
 * 
 * @see Enjin\Sdk\Schemas\Player\Mutation\AdvancedSendAsset
 * @see Enjin\Sdk\Schemas\Project\Mutation\AdvancedSendAsset
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Transfers extends Model {
    
    /**
     * Funds source
     * 
     * @var string
     */
    protected $_to = null;
    
    /**
     * Funds destination
     * 
     * @var string
     */
    protected $_from = null;
    
    /**
     * Asset ID to transfer<br/>
     * If null or omitted then ENJ will be traded instead
     * 
     * @var string
     */
    protected $_assetId = null;
    
    /**
     * The index for non-fungible assets
     * 
     * @var string
     */
    protected $_assetIndex = null;
    
    /**
     * Set the number of assets to transfer<br/>
     * If transferring ENJ, the value is the amount to send in Wei 
     * (10^18 e.g. 1 ENJ = 1000000000000000000)
     * 
     * @var string
     */
    protected $_value = null;
    
    /**
     * Get the destination of the funds
     * 
     * @return string|null
     */
    public function getTo() {
        return $this->_to;
    }
    
    /**
     * Set the destination of the funds
     * 
     * @param string $to Funds destination
     * @return $this
     */
    public function setTo($to) {
        $this->_to = self::validateType($to, self::TYPE_STRING);
        return $this;
    }
    
    /**
     * Get the source of the funds
     * 
     * @return string|null
     */
    public function getFrom() {
        return $this->_from;
    }
    
    /**
     * Set the source of the funds
     * 
     * @param string $from Funds source
     * @return $this
     */
    public function setFrom($from) {
        $this->_from = self::validateType($from, self::TYPE_STRING);
        return $this;
    }
    
    /**
     * Get the asset ID to transfer<br/>
     * If null or omitted then ENJ will be traded instead
     * 
     * @return string|null
     */
    public function getAssetId() {
        return $this->_assetId;
    }
    
    /**
     * Set the asset ID to transfer<br/>
     * If null or omitted then ENJ will be traded instead
     * 
     * @param string $assetId Asset ID
     * @return $this
     */
    public function setAssetId($assetId) {
        $this->_assetId = self::validateType($assetId, self::TYPE_STRING);
        return $this;
    }
    
    /**
     * Get the index for non-fungible assets
     * 
     * @return string|null Asset Index
     */
    public function getAssetIndex() {
        return $this->_assetIndex;
    }
    
    /**
     * Set the index for non-fungible assets
     * 
     * @param string $assetIndex Asset Index
     * @return $this
     */
    public function setAssetIndex($assetIndex) {
        $this->_assetIndex = self::validateType($assetIndex, self::TYPE_STRING);
        return $this;
    }
    
    /**
     * Get the number of assets to transfer<br/>
     * If transferring ENJ, the value is the amount to send in Wei 
     * (10^18 e.g. 1 ENJ = 1000000000000000000)
     * 
     * @return string|null
     */
    public function getValue() {
        return $this->_value;
    }
    
    /**
     * Set the number of assets to transfer<br/>
     * If transferring ENJ, the value is the amount to send in Wei 
     * (10^18 e.g. 1 ENJ = 1000000000000000000)
     * 
     * @param string $value Number of assets to transfer
     * @return $this
     */
    public function setValue($value) {
        $this->_value = self::validateType($value, self::TYPE_STRING);
        return $this;
    }
}

/*EOF*/