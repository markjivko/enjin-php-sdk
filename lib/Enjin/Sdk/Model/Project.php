<?php
namespace Enjin\Sdk\Model;

/**
 * Models a project on the platform
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class Project extends Model {
    
    /**
     * The UUID of this project
     * 
     * @var string|null
     */
    protected $_uuid = null;

    /**
     * The name of this project
     * 
     * @var string|null
     */
    protected $_name = null;

    /**
     * The description of this project
     * 
     * @var string|null
     */
    protected $_description = null;

    /**
     * The URL for the image of this project
     * 
     * @var string|null
     */
    protected $_image = null;

    /**
     * The datetime when this was created<br/>
     * Formatted as an ISO 8601 string
     * 
     * @var string|null
     */
    protected $_createdAt = null;

    /**
     * The datetime when this was last updated<br/>
     * Formatted as an ISO 8601 string
     * 
     * @var string|null
     */
    protected $_updatedAt = null;

    /**
     * Get the UUID of this project
     * 
     * @return string|null
     */
    public function getUuid() {
        return $this->_uuid;
    }

    /**
     * Get the name of this project
     * 
     * @return string|null
     */
    public function getName() {
        return $this->_name;
    }

    /**
     * Get the description of this project
     * 
     * @return string|null
     */
    public function getDescription() {
        return $this->_description;
    }

    /**
     * Get the URL for the image of this project
     * 
     * @return string|null
     */
    public function getImage() {
        return $this->_image;
    }

    /**
     * Get the datetime when this was created<br/>
     * Formatted as an ISO 8601 string
     * 
     * @return string|null
     */
    public function getCreatedAt() {
        return $this->_createdAt;
    }

    /**
     * Get the datetime when this was last updated<br/>
     * Formatted as an ISO 8601 string
     * 
     * @return string|null
     */
    public function getUpdatedAt() {
        return $this->_updatedAt;
    }
}

/*EOF*/