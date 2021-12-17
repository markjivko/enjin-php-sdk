<?php
namespace Enjin\Sdk\Model;

/**
 * Models the linking information for a {@link Player}
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class LinkingInfo extends Model {
    
    /**
     * The linking code for the player
     * 
     * @var string|null
     */
    protected $_code = null;

    /**
     * The URL for the QR linking code
     * 
     * @var string|null
     */
    protected $_qr = null;
    
    /**
     * Get the linking code for the player
     * 
     * @return string|null
     */
    public function getCode() {
        return $this->_code;
    }

    /**
     * Get the URL for the QR linking code
     * 
     * @return string|null
     */
    public function getQr() {
        return $this->_qr;
    }
    
}

/*EOF*/