<?php

namespace Admingate\Slug\Facades;

use Admingate\Slug\SlugHelper;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Admingate\Slug\SlugHelper
 */
class SlugHelperFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return SlugHelper::class;
    }
}
