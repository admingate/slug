<?php

namespace Admingate\Slug\Providers;

use Admingate\Base\Events\CreatedContentEvent;
use Admingate\Base\Events\DeletedContentEvent;
use Admingate\Base\Events\UpdatedContentEvent;
use Admingate\Slug\Listeners\CreatedContentListener;
use Admingate\Slug\Listeners\DeletedContentListener;
use Admingate\Slug\Listeners\UpdatedContentListener;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        UpdatedContentEvent::class => [
            UpdatedContentListener::class,
        ],
        CreatedContentEvent::class => [
            CreatedContentListener::class,
        ],
        DeletedContentEvent::class => [
            DeletedContentListener::class,
        ],
    ];
}
