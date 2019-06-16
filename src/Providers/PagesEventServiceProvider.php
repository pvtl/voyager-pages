<?php

namespace Pvtl\VoyagerPages\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use TCG\Voyager\Events as VoyagerEvents;
use Pvtl\VoyagerPages\Listeners;

class PagesEventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        VoyagerEvents\BreadDataChanged::class => [
            Listeners\ClearPagesCache::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
