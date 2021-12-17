<?php
namespace Enjin\Sdk\Model\Enum;

/**
 * Represents the mode that determines variant behavior
 * 
 * @copyright (c) 2021, Enjin Pte. Ltd.
 * @author    Mark Jivko, https://markjivko.com
 * @license   Apache License v2.0, https://www.apache.org/licenses/LICENSE-2.0.txt
 */
class AssetVariantMode extends Enum {
    
    /**
     * None
     */
    const NONE = 'NONE';

    /**
     * Beam
     */
    const BEAM = 'BEAM';

    /**
     * Once
     */
    const ONCE = 'ONCE';

    /**
     * Always
     */
    const ALWAYS = 'ALWAYS';

}

/*EOF*/