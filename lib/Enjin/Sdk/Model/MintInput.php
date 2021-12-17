<?php
namespace Enjin\Sdk\Model;

/**
 * Models a mint input for mint requests
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class MintInput extends Model {
    
    /**
     * The Ethereum address to mint to
     *
     * @var string|null
     */
    protected $_to = null;

    /**
     * The number of assets to mint
     *
     * @var string|null
     */
    protected $_value = null;
    
    /**
     * Get the Ethereum address to mint to
     *
     * @return string|null
     */
    public function getTo() {
        return $this->_to;
    }

    /**
     * Set the Ethereum address to mint to
     *
     * @param string $to Ethereum address
     * @return $this
     */
    public function setTo($to) {
        $this->_to = self::validateType($to, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get the number of assets to mint
     *
     * @return string|null
     */
    public function getValue() {
        return $this->_value;
    }
    
    /**
     * Set the number of assets to mint
     *
     * @param string $value The amount
     * @return $this
     */
    public function setValue($value) {
        $this->_value = self::validateType($value, self::TYPE_STRING);
        return $this;
    }
    
}

/*EOF*/