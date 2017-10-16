<?php

namespace WoSjo\:package_name;

use Illuminate\Support\Facades\Facade;

class :package_nameFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ':package_name';
    }
}
