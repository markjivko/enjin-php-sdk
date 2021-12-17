<?php
namespace Enjin\Sdk\Model;

/**
 * Models a filter input for asset queries
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetFilter extends Model {
    
    // Implement filter methods
    use Filter;
    
    /**
     * Asset ID
     *
     * @var string|null
     */
    protected $_id = null;

    /**
     * Asset ID list
     *
     * @json id_in
     * @var string[]|null
     */
    protected $_idIn = null;
    
    /**
     * Asset name
     *
     * @var string|null
     */
    protected $_name = null;
    
    /**
     * Asset name contains
     *
     * @json name_contains
     * @var string|null
     */
    protected $_nameContains = null;
    
    /**
     * Asset name list
     *
     * @json name_in
     * @var string[]|null
     */
    protected $_nameIn = null;
    
    /**
     * Asset name starts with
     *
     * @json name_starts_with
     * @var string|null
     */
    protected $_nameStartsWith = null;
    
    /**
     * Asset name ends with
     *
     * @json name_ends_with
     * @var string|null
     */
    protected $_nameEndsWith = null;
    
    /**
     * Asset wallet
     *
     * @var string|null
     */
    protected $_wallet = null;
    
    /**
     * Asset wallet list
     *
     * @json wallet_in
     * @var string[]|null
     */
    protected $_walletIn = null;
    
    /**
     * Asset ID
     *
     * @return string|null
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * Set asset ID
     * 
     * @var string $id
     * @return $this
     */
    public function setId($id) {
        $this->_id = self::validateType($id, self::TYPE_STRING);
        return $this;
    }

    /**
     * Asset ID list
     *
     * @json id_in
     * @return string[]|null
     */
    public function getIdIn() {
        return $this->_idIn;
    }

    /**
     * Set asset ID list
     * 
     * @var string[] $idIn
     * @return $this
     */
    public function setIdIn($idIn) {
        $this->_idIn = self::validateType($idIn, self::TYPE_STRING, true);
        return $this;
    }
    
    /**
     * Asset name
     *
     * @return string|null
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * Set asset name
     * 
     * @var string $name
     * @return $this
     */
    public function setName($name) {
        $this->_name = self::validateType($name, self::TYPE_STRING);
        return $this;
    }
    
    
    /**
     * Asset name contains
     *
     * @json name_contains
     * @return string|null
     */
    public function getNameContains() {
        return $this->_nameContains;
    }

    /**
     * Set asset name contains
     * 
     * @var string $nameContains
     * @return $this
     */
    public function setNameContains($nameContains) {
        $this->_nameContains = self::validateType($nameContains, self::TYPE_STRING);
        return $this;
    }
    
    /**
     * Asset name list
     *
     * @json name_in
     * @return string[]|null
     */
    public function getNameIn() {
        return $this->_nameIn;
    }

    /**
     * Set asset name list
     * 
     * @var string[] $nameIn
     * @return $this
     */
    public function setNameIn($nameIn) {
        $this->_nameIn = self::validateType($nameIn, self::TYPE_STRING, true);
        return $this;
    }
    
    /**
     * Asset name starts with
     *
     * @json name_starts_with
     * @return string|null
     */
    public function getNameStartsWith() {
        return $this->_nameStartsWith;
    }

    /**
     * Set asset name starts with
     * 
     * @var string $nameStartsWith
     * @return $this
     */
    public function setNameStartsWith($nameStartsWith) {
        $this->_nameStartsWith = self::validateType($nameStartsWith, self::TYPE_STRING);
        return $this;
    }
    
    /**
     * Asset name ends with
     *
     * @json name_ends_with
     * @return string|null
     */
    public function getNameEndsWith() {
        return $this->_nameEndsWith;
    }

    /**
     * Set asset name ends with
     * 
     * @var string $nameEndsWith
     * @return $this
     */
    public function setNameEndsWith($nameEndsWith) {
        $this->_nameEndsWith = self::validateType($nameEndsWith, self::TYPE_STRING);
        return $this;
    }
    
    /**
     * Asset wallet
     *
     * @return string|null
     */
    public function getWallet() {
        return $this->_wallet;
    }

    /**
     * Set asset wallet
     * 
     * @var string $wallet
     * @return $this
     */
    public function setWallet($wallet) {
        $this->_wallet = self::validateType($wallet, self::TYPE_STRING);
        return $this;
    }
    
    /**
     * Asset wallet list
     *
     * @json wallet_in
     * @return string[]|null
     */
    public function getWalletIn() {
        return $this->_walletIn;
    }

    /**
     * Set asset wallet list
     * 
     * @var string[] $walletIn
     * @return $this
     */
    public function setWalletIn($walletIn) {
        $this->_walletIn = self::validateType($walletIn, self::TYPE_STRING, true);
        return $this;
    }
}

/*EOF*/