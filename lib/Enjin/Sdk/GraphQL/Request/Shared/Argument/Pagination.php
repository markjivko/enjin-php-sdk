<?php
namespace Enjin\Sdk\GraphQL\Request\Shared\Argument;

use Enjin\Sdk\Model;

/**
 * Shared > Argument > Pagination Arguments
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
trait Pagination {
    
    /**
     * Set the pagination options
     * 
     * @param Model\PaginationOptions|int $optionsOrPage Model\PaginationOptions 
     * model instance or Page number
     * @param int                         $limit         Number of items per page; 
     * used only if $optionsOrPage is not an instance of Model\PaginationOptions   
     * @return $this
     */
    public function paginate($optionsOrPage, $limit = null) {
        return $this->setVariable(
            'pagination',
            $optionsOrPage instanceOf Model\PaginationOptions
                ? $optionsOrPage
                : (new Model\PaginationOptions())
                    ->setPage($optionsOrPage)
                    ->setLimit($limit)
        );
    }
}

/*EOF*/