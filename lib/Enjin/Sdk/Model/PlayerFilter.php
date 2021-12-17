<?php
namespace Enjin\Sdk\Model;

/**
 * Models a filter input for player queries
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class PlayerFilter extends Model {
    
    // Implement filter methods
    use Filter;
    
    /**
     * Player ID
     *
     * @var string|null
     */
    protected $_id = null;

    /**
     * Player ID list
     *
     * @json id_in
     * @var string[]|null
     */
    protected $_idIn = null;
    
    /**
     * Get player ID
     *
     * @return string|null
     */
    public function getId() {
        return $this->_id;
    }

    /**
     * Set player ID
     * 
     * @var string $id
     * @return $this
     */
    public function setId($id) {
        $this->_id = self::validateType($id, self::TYPE_STRING);
        return $this;
    }

    /**
     * Get player IDs list
     *
     * @json id_in
     * @return string[]|null
     */
    public function getIdIn() {
        return $this->_idIn;
    }

    /**
     * Set player IDs list
     * 
     * @var string[] $idIn
     * @return $this
     */
    public function setIdIn($idIn) {
        $this->_idIn = self::validateType($idIn, self::TYPE_STRING, true);
        return $this;
    }
    
}

/*EOF*/