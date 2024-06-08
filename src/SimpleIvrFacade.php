<?php

namespace Talgatbaltasov\SimpleIvr;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Talgatbaltasov\SimpleIvr\Skeleton\SkeletonClass
 */
class SimpleIvrFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'simple-ivr';
    }
}
