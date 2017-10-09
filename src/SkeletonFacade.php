<?php

namespace WoSjo\:package_name;

use Illuminate\Support\Facades\Facade;

class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ':package_name';
    }
}
