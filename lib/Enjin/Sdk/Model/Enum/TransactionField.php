<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * The fields of the {@link Request} type
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class TransactionField extends Enum {
    
    /**
     * ID
     */
    const ID = 'id';

    /**
     * State
     */
    const STATE = 'state';

    /**
     * Title
     */
    const TITLE = 'title';

    /**
     * Created at
     */
    const CREATED_AT = 'createdAt';

    /**
     * Updated at
     */
    const UPDATED_AT = 'updatedAt';

}

/*EOF*/